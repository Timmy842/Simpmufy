FROM php:8.3-fpm

# Instalamos extensiones necesarias
RUN apt-get update && apt-get install -y \
  build-essential \
  libpng-dev \
  libjpeg-dev \
  libfreetype6-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip \
  git \
  curl

# Extensiones de PHP necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www

# Copiamos el proyecto (lo haremos bind mount desde el host, así que esto es opcional)
COPY . .

RUN composer install

CMD ["php-fpm"]
