exec php artisan serve --host=192.168.0.180 --port=8000 & npm run dev -- --host 192.168.0.180 --port 8888 &

trap stop_commands INT
wait
