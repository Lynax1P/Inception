FROM debian:buster

RUN		apt-get update -y && apt-get -y upgrade

RUN		apt-get install -y nginx wget

COPY	conf/new.conf /etc/nginx/nginx.conf
COPY	conf/nginx.conf /etc/nginx/sites-available/site.conf
RUN		ln -s /etc/nginx/sites-available/site.conf /etc/nginx/sites-enabled/site.conf

RUN 	openssl req -x509 -nodes -days 1 -newkey rsa:2048 		\
		-subj "/C=FR/ST=MOSKOW/L=KAZAN/O=INCEPTION/CN=csherill.42.fr" \
		-keyout etc/ssl/private/nginx-cert.key					\
		-out etc/ssl/certs/nginx-cert.crt
EXPOSE 443
CMD [ "nginx", "-g", "daemon off;" ]