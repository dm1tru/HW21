sudo cp deploy/nginx.conf /etc/nginx/sites-enabled/demo.conf -f
sudo sed -i -- "s|%DOMAIN%|$1|g" /etc/nginx/sites-enabled/demo.conf
sudo service nginx restart
sudo service php8.1-fpm restart
