#!/bin/bash

echo "* * * * * root /usr/bin/php /var/app/current/artisan schedule:run 1>> /dev/null 2>&1" \
  | sudo tee /etc/cron.d/artisan_scheduler
