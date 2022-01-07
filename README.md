# Feedback service

This repo contains solutions of "Feedback" service on Yii2 and email-send-service on Golang

## How 2RUN

### Clone project

```
git clone git@github.com:rabdavinci/feedback.git .
```

### Mailer-service on golang

```
$ cd async-mailer-service
$ make build
$ make test
$ make run
```

### Feedback-service on yii2

1. Run feedback-service
```
$ make build
$ make migrate
$ make run
```

2. Open in browser `http://localhost:20080/`
3. Use predefined credentials for login:

| field    | value     |
|----------|------------|
| login    | `alex`     |
| password | `qwer1234*` |

## TODO

1. Tidy up the code
2. Finish web service
3. Add message broker (RabbitMQ f. e.)
4. Finish mailer service (Golang microservice). It will work as consumer
