# Spiral demo application

This is demo application to check possibility of using Spiral Framework with RoadRunner.
Main goal is to try ise RR+Spiral in temrs of:
- API
- Console
- Queue
- MessageBus

## Configuration
- copy `.env.sample` to `.env`

## UP & Running
- run `make up`
- run `make shell` to dive onto app container with RR and PHP
- run `make stop` to stop services

inside app container:
- run `source .profile` to get all aliases
- run `cf` to fix code style
## Endpoints
- api: http://localhost:2222/
- buggregator to trace errors|dumps: http://localhost:2223/
- DB is available on `localhost:33333` with creds from `.env` file
