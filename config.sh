sudo chmod 666 /var/run/docker.sock

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

sail root-shell
cd ..
chown -R sail:sail html