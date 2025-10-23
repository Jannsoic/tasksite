# PHP mit Apache
FROM php:8.2-apache

# Arbeitsverzeichnis setzen
WORKDIR /var/www/html

# Kopiere alle Dateien ins Container-Image
COPY . /var/www/html/

# PHP-Module installieren, die oft benötigt werden
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache mod_rewrite aktivieren
RUN a2enmod rewrite

# Port freigeben
EXPOSE 80

# Startbefehl für Apache im Vordergrund
CMD ["apache2-foreground"]
