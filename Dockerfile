FROM olivernadj/nginx-php-fpm-for-fexcore-legacy
MAINTAINER oliver nadj <mr.oliver.nadj@gmail.com>
ADD /nginx/conf.d/vhosts.conf /etc/nginx/sites-available/vhosts.conf
RUN ln -s /etc/nginx/sites-available/vhosts.conf /etc/nginx/sites-enabled/vhosts.conf
COPY ./src /usr/share/nginx/html