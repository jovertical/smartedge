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
apt-get install -y software-properties-common zip unzip

# Add PHP to the apt repository list.
add-apt-repository -y ppa:ondrej/php
apt-get update

## Install PHP + Extensions.
apt-get install -y php7.4-fpm
apt-get install -y php7.4-{curl,mbstring,pdo,pgsql,xml}

## Install Composer
apt-get install -y composer

## Install NGINX
apt-get install -y nginx

## Start NGINX
systemctl start nginx
```

## 💡 Application Setup

```bash
# Clone the project
git config --global credential.helper store # Prevents promting credentials the second time.
git clone https://github.com/palonponjovertlota/smartedge.git /var/www/smartedge

# Set proper file permissions
find /var/www/smartedge -type f -exec chmod 644 {} \;
find /var/www/smartedge -type d -exec chmod 755 {} \;

# Configure NGINX
cp /var/www/smartedge/nginx.conf /etc/nginx/sites-available/
ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/
nginx -t # Check if configurations are valid
systemctl reload nginx
```

## 🌱 Resources

- [SSH Actions](https://github.com/appleboy/ssh-action) - used to interact with the server within a Github Action workflow.
