# استخدام صورة PHP 8.2 مع FPM
FROM php:8.2-fpm

# تثبيت الحزم اللازمة و Nginx
RUN apt-get update && apt-get install --no-install-recommends -y \
    nginx \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \  
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# تثبيت إضافات PHP المطلوبة
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# تثبيت Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# إعداد مجلد العمل
WORKDIR /var/www

# نسخ كافة ملفات المشروع
COPY . .

# ضبط صلاحيات الملفات والمجلدات
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# تثبيت مكتبات Composer
RUN composer install --no-dev --optimize-autoloader

# نسخ ملف إعدادات Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# فتح المنفذ 80 ليتمكن Render من اكتشافه
EXPOSE 80

# تثبيت إضافات PostgreSQL لـ PHP
RUN docker-php-ext-install pgsql pdo_pgsql

# تشغيل Nginx و php-fpm معًا
CMD service nginx start && php-fpm
