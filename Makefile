
PATH_DATE = $$(sudo pwd)/data
PATH_WP	  = $(PATH_DATE)/wp
PATH_DB	  = $(PATH_DATE)/db

all: up

up : 
	mkdir -p $(PATH_DATE) && sudo chmod 777 $(PATH_DATE)
	mkdir -p $(PATH_WP) &&  sudo chmod 777 $(PATH_WP)
	mkdir -p $(PATH_DB) &&  sudo chmod 777 $(PATH_DB)
	sudo docker-compose -f  srcs/docker-compose.yaml build 
	sudo docker-compose -f  srcs/docker-compose.yaml up -d 

set: 
	echo "127.0.0.1 csherill.42.fr" | sudo tee -a /etc/hosts
climage:
	sudo docker image rm -f $$(sudo docker image ls -aq)
down:
	sudo docker-compose -f srcs/docker-compose.yaml down
clean:
	sudo docker-compose -f srcs/docker-compose.yaml down --rmi all