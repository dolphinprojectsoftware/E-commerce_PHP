sudo chmod 777 /var/run/docker.sock
mkdir vendor
sudo chmod -R 777 vendor
sudo chown -R 777 /.composer
sudo docker run --rm \
  --pull=always \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd)":/opt \
  -w /opt \
  laravelsail/php82-composer:latest \
  composer --global config process-timeout 0 && composer install --ignore-platform-reqs --no-scripts
#bash -c "php ./artisan sail:install --with=mysql"

sudo docker run --rm \
 --pull=always \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd)":/opt \
  -w /opt \
  composer --global config process-timeout 0 && composer install --no-scripts

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

sail root-shell
cd ..
chown -R sail:sail html
