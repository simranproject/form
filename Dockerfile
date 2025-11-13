# Use the official PHP image
FROM php:8.2-apache

# Copy all project files to container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
