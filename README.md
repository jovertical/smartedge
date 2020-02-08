## 🚀 Quick start

```bash
# First, install project dependencies:
composer install
yarn install

# Then, build the front-end assets:
yarn dev

# Finally, start the development server:
php artisan serve
```

## ⚡️ Server Installation

```bash
# Just a good practice.
apt-get update
apt-get install -y software-properties-common

# Add PHP to the apt repository list.
add-apt-repository ppa:ondrej/php
apt-get update

## Install PHP + Extensions.
apt-get install -y php7.4
apt-get install -y php-{bcmath,mbstring,xml}

## Install Composer
apt-get install -y composer

## Install NGINX
apt-get install -y nginx
```

## 💡 Application Setup

```bash
# Clone the Project
cd /var/www
git clone https://github.com/palonponjovertlota/smartedge.git smartedge

# This is the happy path...
cd /var/www/smartedge
chown -R www-data:www-data storage bootstrap

# Install dependencies
composer install

# Configure NGINX
cp nginx.conf /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
nginx -t # Check if configurations are valid
systemctl reload nginx
```
