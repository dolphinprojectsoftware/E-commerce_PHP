sudo docker run --rm \
  --pull=always \
  -u "$(id -u):$(id -g)" \
  -v "$(pwd)":/opt \
  -w /opt \
  laravelsail/php82-composer:latest \
  bash -c "php ./artisan sail:install --with=mysql"

