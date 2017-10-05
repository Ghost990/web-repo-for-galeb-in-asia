# Web site repository for Galeb In Asia


## Installation

1. Install [Docker](https://www.docker.com/).

## For development just run
`./dev.sh`

## Deployment

### Build
```
docker build -t web-deploy-for-galeb-in-asia .
docker tag web-deploy-for-galeb-in-asia olivernadj/web-deploy-for-galeb-in-asia
docker push olivernadj/web-deploy-for-galeb-in-asia
```


### Run
```
docker pull olivernadj/web-deploy-for-galeb-in-asia && \
docker stop web-deploy-for-galeb-in-asia-container && \
docker rm web-deploy-for-galeb-in-asia-container && \
docker run --name=web-deploy-for-galeb-in-asia-container --restart=always \
  -e 'REGISTER_ENV=1' -e 'CAPTCHA_SECRET=***' -e 'MAILGUN_KEY=***' -e 'CONTACT_TO=***' \
  -p 80:80 -d olivernadj/web-deploy-for-galeb-in-asia
```


### Dev
```
docker build -t dev-galeb-in-asia .
docker run --name dev-galeb-in-asia-container -e 'REGISTER_ENV=1' \
  -e 'CAPTCHA_SECRET=***' -e 'MAILGUN_KEY=***' -e 'CONTACT_TO=***' \
  -p 80:80 -p 443:443 --rm -it dev-galeb-in-asia
```

## License

    Copyright 2016 Oliver Nadj

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.