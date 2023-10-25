sudo chmod 777 /var/run/docker.sock

sudo docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

sail root-shell
cd ..
chown -R sail:sail html