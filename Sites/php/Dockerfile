#Dockerfile
FROM php:fpm-alpine
# utilise unepetite image

RUN apk update; \
    apk upgrade;
# mets a jour le serveur

# Install mysqli
RUN docker-php-ext-install mysqli
