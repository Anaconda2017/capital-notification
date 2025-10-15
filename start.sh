#!/bin/bash

echo "Starting services..."

# Start supervisor in foreground
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf

