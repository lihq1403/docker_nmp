# base image
FROM redis:latest

# MAINTAINER
MAINTAINER lihaiqing1994@163.com

COPY ./conf/redis.conf /usr/local/etc/redis/redis.conf
CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]