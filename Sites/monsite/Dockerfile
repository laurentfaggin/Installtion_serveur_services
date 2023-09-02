# Dockerfile
#Creer une image pour notre serveur Apache

FROM httpd:alpine
#utilise image officielle

RUN apk update; \
    apk upgrade;

RUN mkdir /srv/htdocs
# Ajouter le repertoire pour les documents HTML

EXPOSE 80 443
# Exposer les ports 80 et 443

WORKDIR /usr/local/apache2/conf
# change dans le repertoire de configuration

COPY ./conf/httpd.conf httpd.conf
#remplacer httpd.conf par le mien

COPY ./conf/httpd-ssl.conf ./extra/httpd-ssl.conf 

COPY certs/server.crt /usr/local/apache2/conf/server.crt
COPY certs/server.key /usr/local/apache2/conf/server.key
#copie les fichiers de certificats
