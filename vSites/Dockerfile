# Dockerfile
#Creer une image pour notre serveur Apache

FROM httpd:latest
#utilise image officielle

RUN mkdir -p /usr/local/apache2/site01.com
RUN mkdir -p /usr/local/apache2/site02.com

# Ajouter le repertoire pour les documents HTML

EXPOSE 80 443
# Exposer les ports 80 et 443

WORKDIR /usr/local/apache2/conf
# change dans le repertoire de configuration

COPY conf/httpd.conf /usr/local/apache2/conf/httpd.conf
COPY conf/httpd-vhosts.conf extra/httpd-vhosts.conf
