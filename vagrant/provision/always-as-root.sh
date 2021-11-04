#!/usr/bin/env bash

source /frontend/views/site

#== Provision script ==

info "Provision-script user: `whoami`"

info "Restart web-stack"
service php7.0-fpm restart
service nginx restart
service mysql restart