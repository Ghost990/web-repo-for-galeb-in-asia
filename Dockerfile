FROM nginx
MAINTAINER oliver nadj <mr.oliver.nadj@gmail.com>
COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./src /usr/share/nginx/html
