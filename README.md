# mew.co

Poke Phone Book and community enabler.

[Trello](https://trello.com/b/bkAN1zJd/project-mew)

Before you begin please make sure you have [composer installed](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos). I prefer a [global](https://getcomposer.org/doc/00-intro.md#globally) installation but thats just me. If you want it installed on a [per project](https://getcomposer.org/doc/00-intro.md#locally) basis feel free.

You will also need [docker installed](https://docs.docker.com/get-docker/)

From the root of the project (ie the mew_co directory) run the following commands in order:

1. run `composer install` before anything else
2. run `curl -sS https://get.symfony.com/cli/installer | bash` to get symfony cli installed (follow the directions on globally installing)
3. start docker mysql image with `docker-compose up -d`
4. then start the local symfony server by running `symfony serve -d`
5. run `symfony doctrine:migrations:migrate` to make sure db is up to date (**NOTE**: there may be a delay while mysql get running so if this fails at first, try again in a few min)
