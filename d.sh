exec php artisan serve --host=192.168.1.132 --port=8000 & npm run dev -- --host 192.168.1.132 --port 8888 &

trap stop_commands INT
wait
