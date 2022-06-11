FROM debian:buster
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./conf/database.sql /
RUN apt-get update ; apt-get install mariadb-server -y ;\
	service mysql start && mysql < database.sql ;\
	rm -f database.sql
EXPOSE 3306
CMD /usr/bin/mysqld_safe