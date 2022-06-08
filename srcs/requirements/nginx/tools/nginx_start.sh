#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
echo "Nginx: setting up ssl ...";
openssl req -x509 -nodes -days 1 -newkey rsa:2048 -subj "/C=FR/ST=RUSSIA/L=KAZAN/O=INCEPTION/CN=csherill.42.fr" -keyout etc/ssl/private/nginx-cert.key -out etc/ssl/certs/nginx-cert.crt
echo "Nginx: ssl is set up!";
fi

exec "$@"