# pulling image from docker hub
FROM	debian:buster

# updating information about available packages
RUN		apt-get update && apt-get upgrade -y

# installing all the needed packages
RUN		apt-get -y install wget \
		&& apt-get -y install nginx \
		&& apt-get -y install mariadb-server \
							vim
RUN		apt-get -y install wordpress
RUN		apt-get -y install 	php7.3 php-mysql \ 
							php-fpm php-pdo \ 
							php-gd php-cli \
							php-mbstring

# declaring ports
EXPOSE	80 443

# copying my script and configs from repo into the image
COPY	./srcs/start-services.sh ./
COPY	./srcs/* /usr/src/

#e-bash !!! e == execute %-)
ENTRYPOINT	bash start-services.sh
