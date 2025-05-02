FROM php:8.1-apache

# Activation du module mod_rewrite si nécessaire
RUN a2enmod rewrite

# Copie des fichiers de l'application dans le répertoire web d'Apache
COPY . /var/www/html/

# Attribution des droits appropriés
RUN chown -R www-data:www-data /var/www/html

# Exposition du port 80
EXPOSE 80
