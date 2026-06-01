# How to start the project

proceed as follows:

1. Clone repo `git clone URL`
2. Create / rename .env
3. Run `npm install` to install all dependencies
4. Run `composer install` to install all dependencies
5. Check all php stuff in php.ini `php -v` `php --ini` `php -m` (install 8.3)
6. Run `composer run` and run 4 commands there []
7. Run `docker ps` find xxx-db-1
8. docker exec -it <xxx-mariadb-container> mariadb -u root -D blog -p
9. Run `composer run dev`

other:
`php artisan key:generate` step after the first cloning
`php artisan migrate --force`
