FROM debian:buster
RUN apt-get  update ;\
	apt-get  install nginx -y ;\
	apt-get  install openssl -y ;\
	openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=RU/ST=Kazan/L=Kazan/O=wordpress_database/OU=SavchenkoDV/CN=127.0.0.1"
COPY ./conf/default etc/nginx/sites-enabled/default
CMD ["nginx", "-g", "daemon off;"]