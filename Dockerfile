FROM php:8.2-apache

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the application files
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Copy the Apache configuration file
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Expose the port that Apache is listening on
EXPOSE 80

# Start Apache
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
