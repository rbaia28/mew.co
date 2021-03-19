# mew.co

Poke Phone Book and community enabler.

[Trello](https://trello.com/b/bkAN1zJd/project-mew)

1. start docker mysql image with `docker-compose up -d`
2. then start the local symfony server by running `symfony serve -d`
3. run `symfony doctrine:migrations:migrate` to make sure db is up to date
