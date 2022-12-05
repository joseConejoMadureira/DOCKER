FROM nginx:alpine

RUN apk update && apk add bash

RUN rm /etc/nginx/conf.d/default.conf

COPY . /etc/nginx/conf.d
