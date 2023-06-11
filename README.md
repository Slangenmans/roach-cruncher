### About Roach-Cruncher :cockroach:
Roach-Cruncher is a simple bug reporting tool created for personal learning purposes. 

### Run it locally
Roach-Cruncher was made using <a href="https://laravel.com/docs/10.x/sail">Laravel Sail</a>. Run it locally using the following steps:
1. Clone the repository using `git clone https://github.com/Slangenmans/roach-cruncher.git`
2. cd into project's directory and run the following command. It uses a small Docker container containing PHP and Composer to install the application's dependencies:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
3. Change the name of `.env.example` to `.env`
4. Use `vendor/bin/sail up` to start Sail. Use `vendor/bin/sail up -d` to run it in detached-mode to be able to write commands in the same terminal window. The application should now be available at <a href="http://localhost">http://localhost</a>. PHPmyAdmin is available at <a href="http://localhost:8000()">port 8000</a>. 
5. Run `vendor/bin/sail php artisan migrate --seed` to populate the database. 
