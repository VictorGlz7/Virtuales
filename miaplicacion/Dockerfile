# Usa la imagen oficial de PHP como base
FROM php:8.0-apache

# Instala extensiones adicionales, incluyendo mysqli
RUN docker-php-ext-install mysqli

# Copia el contenido de tu aplicación PHP a la ubicación del servidor web
COPY ./tu_aplicacion_php /var/www/html

# Expone el puerto 80 para el servidor web
EXPOSE 80

# Inicia el servidor web Apache al iniciar el contenedor
CMD ["apache2-foreground"]