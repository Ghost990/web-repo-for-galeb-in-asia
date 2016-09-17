#!/usr/bin/env bash

cd "$(dirname "$0")" && docker run -it --rm \
  -p 80:80 -v ${PWD}/src:/usr/share/nginx/html:ro nginx