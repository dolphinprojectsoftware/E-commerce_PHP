# Running Application

1. Set permissions to docker.

    ```shell
   $ sudo chmod 777 /var/run/docker.sock
    ```
2. Install composer packages.

   If you don't have composer installed you can run this command:

    ```shell
    $ sudo docker run --rm \
   --pull=always \
   -u "$(id -u):$(id -g)" \
   -v "$(pwd)":/opt \
   -w /opt \
   composer --global config process-timeout 0 && composer install --no-scripts
    ```
   Otherwise, you can run this other:

    ```shell
    $ composer --global config process-timeout 0 && composer install --no-scripts
    ```

3. Copy the __.env.example__ file to the root folder of the project and rename it to __.env__
4. Make sure that __port 80__ is not occupied, otherwise you can configure the local port in the Dockerfile files located in each of the runtimes in the __docker__ folder.
5. Finally, you may start Sail.

    ```shell
   $ ./vendor/bin/sail up
    ```

6. Once the application's containers have been started, you may access the project in your web browser at: http://localhost.

7. To stop all the containers, you may simply press Control + C to stop the container's execution. Or, if the containers are running in the background, you may use the stop command:

    ```shell
    $ ./vendor/bin/sail stop
    ```
   
8. Configure alias.

   ```shell
   $  alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
    ```
   Once the shell alias has been configured, you may execute Sail commands by simply typing `sail`. The remainder of this documentation's examples will assume that you have configured this alias:

    ```shell
   $ sail up
    ```
   To make sure this is always available, you may add this to your shell configuration file in your home directory, such as `~/.zshrc` or `~/.bashrc`, and then restart your shell.

> If you are having permissions issues you have to run this command.
>   ```shell
>   $ sail root-shell
>   cd ..
>   chown -R sail:sail html
>   ```

