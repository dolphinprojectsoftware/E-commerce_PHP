if [ "$(docker inspect e-commerce_php-laravel.test-1 --format '{{.State.Status}}')" = "running" ]; then
    echo "The container is running!"
fi