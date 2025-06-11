# Usa una imagen oficial de PHP con Apache
FROM php:8.2-apache

# Instala las extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos de tu proyecto
COPY . .

# Cambia el DocumentRoot de Apache para que apunte al directorio "public"
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Activa el módulo Rewrite de Apache
RUN a2enmod rewrite

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Establece permisos para el almacenamiento y los logs
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expone el puerto 80
EXPOSE 80

# Inicia el servidor
CMD ["apache2-foreground"]
