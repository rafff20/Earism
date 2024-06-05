# Use an official PHP 5.6 image as a base
FROM php:5.5-apache

# Set the working directory
WORKDIR /var/www/html

# Install required PHP extensions
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli pdo pdo_mysql 
# RUN apt-get install php5-mcrypt
# RUN php5enmod mcrypt

#RUN docker-php-ext-install php5-mcrypt

# Copy your CodeIgniter 2.2.1 application files to the container
COPY . .

# Expose the Apache port
EXPOSE 80

# Start the Apache web server
CMD ["apache2-foreground"]
