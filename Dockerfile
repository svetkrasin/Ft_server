#set the Base image

FROM	debian:buster

#update the system

RUN	apt-get update -y && apt-get upgrade -y

#install additional software

RUN	apt-get install nginx mariadb-server wget php-fpm php-cli php-mbstring php-mysql -y

#configure nginx
RUN     service nginx start
COPY    srcs/nginx.conf /etc/nginx/sites-available/localhost
#subject to rm
RUN 	rm /etc/nginx/sites-enabled/default
RUN     ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost

#install wordpress

RUN	wget https://wordpress.org/latest.tar.gz
#RUN	mkdir /var/www/html
RUN	tar xzvf latest.tar.gz --directory=/var/www/html
COPY	srcs/wp-config.php /var/www/html/wordpress
RUN	chown -R www-data:www-data /var/www/html/
RUN	chmod -R 755 /var/www/html/wordpress

#install phpmyadmin

RUN	wget https://www.phpmyadmin.net/downloads/phpMyAdmin-latest-all-languages.tar.gz
RUN	tar xvfz phpMyAdmin-latest-all-languages.tar.gz --directory=/var/www/html/

#initialize MySQL

COPY	srcs/init_db.sh /tmp
RUN	bash /tmp/init_db.sh

#create certificate

RUN	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/C=US/ST=California/L=Freemont/O=42/OU=42SV/CN=localhost"

# start server
COPY 	srcs/start.sh .
CMD 	bash start.sh && tail -f /dev/null

