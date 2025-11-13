# --- Tahap 1: Membangun Aset Frontend (Vite/Tailwind) ---
FROM node:20-alpine AS build
WORKDIR /app
COPY package*.json ./
COPY vite.config.js .
COPY resources/css/app.css resources/css/app.css
COPY resources/js/app.js resources/js/app.js
RUN npm install
COPY . .
RUN npm run build

# --- Tahap 2: Membangun Image Produksi (PHP/Nginx) ---
FROM bref/fpm-nginx-laravel-11:php-8.3-fpm-ARM AS final
WORKDIR /app

# Salin file-file penting dari root
COPY --chown=www-data:www-data . .

# Salin aset yang sudah di-build dari Tahap 1
COPY --from=build /app/public/build/ /app/public/build/

# Jalankan composer
RUN composer install --no-interaction --no-dev --optimize-autoloader

# Perbaiki izin
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Perintah start sudah diatur oleh image Bref
