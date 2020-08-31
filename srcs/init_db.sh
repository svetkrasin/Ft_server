service mysql start
echo "CREATE DATABASE wpsql;" | mysql -u root
echo "CREATE USER 'admin' identified by 'admin';" | mysql -u root
echo "GRANT USAGE ON wpsql.* TO 'admin'@'localhost' identified by 'admin';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wpsql.* TO 'admin'@'localhost' identified by 'admin';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
