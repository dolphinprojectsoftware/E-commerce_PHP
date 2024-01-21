>%windir%\system32\wsl.exe -cur_console:t:"sail_alias" -cur_console:pm:/mnt ~ --distribution Ubuntu-22.04 --exec zsh -li -c "alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'"
