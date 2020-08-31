##Run a container

###docker run image <cmd> <params>

a standart run command

###docker run --rm -it ubuntu /bin/bash

this container is interactive
it runs based on an image ubuntu
the command also runs shell

###hostname

shows the identity of a container

###ps

shows the processes inside of a container

###exit

quit out of a container

##Build a container

###docker build -t name .

###-t

the flag tags an image. When we run a container we can refer to the image by the tag

### .

the '.' at the end of the command tells that Docker should look for the Dockerfile int the current directory

##Starting a Container

###docker run -dp 3000:3000 name

###-d

run a container in "detached" mode (in the backround)

###-p

map port 3000 of the host to port 80 in the container

##name

the image to use

#Flow with docker

##1. Build an image

###docker build -t name

##2. Start a new container

###docker run -dp 3000:3000 name

###docker ps

get the ID of a container

###docker stop <the-container-id>

stop a continer

###docker rm <the-container-id>

once the container has stopped, we can remove it

###docker rm -f <the-container-id>

stop and remove a container

###-f

the "force" flag

##docker exec <conatainer-id> command

###exec

executes a command inside of a container

