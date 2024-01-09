#!/bin/bash

# Get the current code in github
git pull

# Copy the .env.example to .env for the default configs
cp .env.dev .env

# Generate the key
php artisan key:generate

# Install the composer dependencies
composer i && npm i

# Clear and seed the database
php artisan migrate:fresh --seed

# Get the current folder
folder=$(git rev-parse --show-toplevel)

# Start the server
exec php "$folder"/artisan serve --host=192.168.0.174 --port=8000 & npm run dev -- --host 192.168.0.174 --port 8888 &

trap stop_commands INT
wait
