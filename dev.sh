#!/usr/bin/env bash

cd "$(dirname "$0")" && docker run -it --rm \
  -v ${PWD}/src:/usr/share/nginx/html:ro \
  -v ${PWD}/nginx/conf.d/default.conf:/etc/nginx/conf.d/default.conf:ro \
  -p 80:80 nginx