## based on ubuntu 24.04

sudo apt update
sudo apt upgrade

sudo apt install -y openssh-server unzup
sudo apt install -y openssl php8.3-bcmath php8.3-curl php8.3-fpm php8.3-mbstring php8.3-mysql php8.3-common php8.3-xml php8.3-zip php8.3-cli php8.3-opache php8.3-readline php-common libzip4t64 php8.3-dev php8.3-sqlite3
sudo apt install -y redis-server libjemalloc liblzf1 redis-tools
sudo apt install -y gnupg curl

curl -fsSL https://www.mongodb.org/static/pgp/server-8.0.asc | sudo gpg -o /usr/share/keyrings/mongodb-server-8.0.gpg --dearmor
echo "deb [ arch=amd64,arm64 signed-by=/usr/share/keyrings/mongodb-server-8.0.gpg ] https://repo.mongodb.org/apt/ubuntu noble/mongodb-org/8.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-8.0.list
sudo apt-get update
sudo apt-get install -y mongodb-org

sudo systemctl start mongod
sudo systemctl enable mongod

sudo apt install php-pear
sudo pecl channel-update pecl.php.net
sudo pecl install redis

echo "extension=redis.so" | sudo tee /etc/php/8.3/mods-available/redis.ini
cd /etc/php/8.3/cli/conf.d
ln -s /etc/php/8.3/mods-available/redis.ini 20-redis.ini
cd /etc/php/8.3/fpm/conf.d
ln -s /etc/php/8.3/mods-available/redis.ini 20-redis.ini

sudo pecl install mongodb

echo "extension=mongodb.so" | sudo tee /etc/php/8.3/mods-available/mongodb.ini
cd /etc/php/8.3/cli/conf.d
ln -s /etc/php/8.3/mods-available/mongodb.ini 20-mongodb.ini
cd /etc/php/8.3/fpm/conf.d
ln -s /etc/php/8.3/mods-available/mongodb.ini 20-mongodb.ini

composer require mongodb/laravel-mongodb
