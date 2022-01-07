# Feedback service

This repo contains solutions of "Feedback" service on Yii2 and email-send-service on Golang

## How 2RUN

1. Clone project
```
git clone git@github.com:rabdavinci/feedback.git .
```
2. Run feedback-service
```
$ cd async-mailer-service
$ make build
$ make migrate
$ make run
```
3. Test async-mailer-service
```
$ cd async-mailer-service
$ make build
$ make test
$ make run
```

## TODO
1. Tidy up the code
1. Finish web service
2. Add message broker (RabbitMQ f. e.)
3. Finish mailer service (Golang microservice). It will work as consumer
