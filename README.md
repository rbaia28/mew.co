# mew.co

Poke Phone Book and community enabler.

[Trello](https://trello.com/b/bkAN1zJd/project-mew)

1. start the local symfony server by running `symfony serve -d`
2. then start docker mysql image with `docker-compose up -d` take note of the port docker is exposing itself to
For example in this case it is 32768:

```BASH
 docker-compose ps
      Name                   Command             State                 Ports               
-------------------------------------------------------------------------------------------
mewco_database_1   docker-entrypoint.sh mysqld   Up      0.0.0.0:32768->3306/tcp, 33060/tcp
```
