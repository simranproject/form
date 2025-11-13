# Use the official PHP image with Apache
FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy all project files to container
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80
