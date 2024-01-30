.PHONY: up down rebuild shell

up:
	@docker compose up -d

down:
	@docker compose down

stop:
	@docker compose stop

rebuild:
	@docker compose build --no-cache

shell:
	@docker compose exec -it app /bin/sh

ps:
	@docker compose ps
