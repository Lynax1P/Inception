
PATH_DATE = $$(sudo pwd)/data
PATH_WP	  = $(PATH_DATE)/wp
PATH_DB	  = $(PATH_DATE)/db

all: up

up : 
	sudo userdel www-data && sudo useradd -u 82 www-data
	mkdir -p $(PATH_DATE) && sudo chmod 777 $(PATH_DATE)
	mkdir -p $(PATH_WP) &&  sudo chmod 777 $(PATH_WP)
	mkdir -p $(PATH_DB) &&  sudo chmod 777 $(PATH_DB)
	sudo docker-compose -f  srcs/docker-compose.yaml build --no-cache
	sudo docker-compose -f  srcs/docker-compose.yaml up -d 

down:
	sudo docker-compose -f srcs/docker-compose.yaml down
clean:
	sudo docker-compose -f srcs/docker-compose.yaml down --rmi all