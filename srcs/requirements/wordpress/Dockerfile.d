FROM debian:buster

RUN apt-get clean ; apt-get update -y  ; apt-get -y upgrade 
RUN apt install -y php-fpm \
		 php-mysql \
		 tar
ADD 	https://wordpress.org/latest.tar.gz /tmp/latest.tar.gz
RUN 	cd /tmp \
		&& tar xzvf latest.tar.gz \
		&& rm latest.tar.gz \
		&& mkdir /var/www \
		&& mv -f wordpress /var/www/ \
		&& chmod 755 -R /var/www/wordpress \
		&& chown -R www-data:www-data /var/www/wordpress
RUN 	rm -rf /var/www/wordpress/wp-config-sample.php
COPY	./conf/wp-config.php /var/www/wordpress
COPY	./conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf
COPY 	./tools/start.sh /start.sh
RUN 	chmod +x /start.sh
RUN 	sed -i "/listen =/d" /etc/php/7.3/fpm/pool.d/www.conf
RUN 	echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
RUN 	mkdir -p /run/php/
ENTRYPOINT ["/start.sh"]
EXPOSE 9000

CMD ["bash", "/start.sh"]