cp .env.sample .env
sed -i -- "s|%MYSQL_HOST%|$2|g" .env
sed -i -- "s|%MYSQL_USER%|$3|g" .env
sed -i -- "s|%MYSQL_PASSWORD%|$4|g" .env
sed -i -- "s|%MYSQL_DATABASE%|$5|g" .env

sudo cp deploy/nginx.conf /etc/nginx/sites-enabled/demo.conf
sudo sed -i -- "s|%DOMAIN%|$1|g" /etc/nginx/sites-enabled/demo.conf
sudo service nginx restart