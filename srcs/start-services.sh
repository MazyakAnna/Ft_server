chown -R www-data /var/www/*
chmod -R 755 /var/www/*

#starting page
mkdir -p /var/www/bmaegan42.com
#cp /usr/src/index.php /var/www/bmaegan42.com/.


#SSL
#
#openssl: creating and managing OpenSSL certificates, keys and other files.
# req: This subcommand specifies that we want to use X.509 certificate signing request (CSR) management.
# -x509: for self-signed certificate
# -nodes: tells OpenSSL to skip passphrase.
# rsa:2048 tells to make an RSA key that is 2048 bits long.
# -keyout: tells OpenSSL where to place the generated private key file
# -out: tells OpenSSL where to place the certificate
chmod 700 /etc/ssl/private
openssl req -x509 -nodes -days 180 -subj "/C=RU/ST=Moscow/L=Moscow/O=school21/OU=school21moscow/CN=bmaegan42.com" -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt

#nginx config
cp /usr/src/nginx.conf /etc/nginx/nginx.conf
mkdir -p /etc/nginx/sites-available/bmaegan42.com
cp /usr/src/my-nginx.conf /etc/nginx/sites-available/bmaegan42.com
ln -s /etc/nginx/sites-available/bmaegan42.com /etc/nginx/sites-enabled/.
rm /etc/nginx/sites-enabled/default

#MySQL (MariaBD)
service mysql start
echo "CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'bmaegan'@'localhost' IDENTIFIED BY 'lolkek';
FLUSH PRIVILEGES;
UPDATE mysql.user SET plugin='' WHERE user = 'bmaegan';
FLUSH PRIVILEGES;" | mysql -u root --skip-password


#phpmyadmin
mkdir -p /var/www/bmaegan42.com/phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
tar -xvf phpMyAdmin-5.0.4-all-languages.tar.gz --strip-component 1 -C /var/www/bmaegan42.com/phpmyadmin
cp /usr/src/config.inc.php /var/www/bmaegan42.com/phpmyadmin/.

#wordpress
mkdir -p /var/www/bmaegan42.com/wordpress
wget http://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz -C /var/www/bmaegan42.com/
cp /usr/src/wp-config.php /var/www/bmaegan42.com/wordpress/wp-config.php

#chown -R www-data /var/www/*
#chmod -R 755 /var/www/*
service php7.3-fpm start
service nginx start

bash
