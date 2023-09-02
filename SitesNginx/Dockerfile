# Dockerfile
# Creer une image pour notre serveur nginx

FROM nginx:alpine
# utilise la derniere image

RUN mkdir -p /usr/share/nginx/html/site01.com
# ajoute le repertoire pour site 01

RUN mkdir -p /usr/share/nginx/html/site02.com
# ajoute le repertoire pour site 02

EXPOSE 80 443
#Expose les ports 80 et 443

WORKDIR /etc/nginx/
# Change dans le repertoire de configuration

COPY conf/nginx.conf nginx.conf
# Remplacer nginx.conf par le mien

COPY conf/default.conf conf.d/default.conf
# Remplacer default.conf par le mien pour site01

COPY conf/site02.conf conf.d/site02.conf
# copier le fichier de configuration pour site02:w

