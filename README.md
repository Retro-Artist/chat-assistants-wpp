# Laravel 12 Docker Development Environment

A clean and maintainable development environment for Laravel 12 applications, running on Nginx with MySQL database and phpMyAdmin.

## Features

- **Modern PHP Environment**: PHP 8.3 with all essential extensions pre-installed
- **Complete Development Stack**: Nginx, PHP-FPM, MySQL, and phpMyAdmin configured and ready to use
- **Docker-based**: Consistent environment across all development machines
- **Ready for Laravel**: Optimized for Laravel 12 development workflow
- **Minimal Starting Point**: Clean setup to build your application


## Project Structure

# Docker Structure

```
laravel-docker-enviroment/
├── docker
│   └── nginx.conf
├── resources
│   └── views
│       └── info.blade.php #docker enviroment status
├── docker-compose.yml
└── Dockerfile

```

# Laravel Structure

```
laravel-docker-enviroment/
├── app
│   ├── Http
│   ├── Models
│   └── Providers
├── bootstrap
├── config
├── database
├── docker
├── public
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources
│   └── views
│       └── welcome.blade.php #welcome screen
├── routes
├── storage
├── tests
├── artisan
├── composer.json
├── composer.lock
├── docker-compose.yml
├── Dockerfile
├── nginx.conf
├── package.json
├── phpunit.xml
├── README.md
└── vite.config.js
```


## Quick Start

1. Clone the repository:

```bash
git clone https://github.com/Retro-Artist/laravel-docker-environment.git
cd laravel-docker-environment
```

2. Set up environment configuration:

```bash
cp .env.example .env
```

3. Update your `.env` file with the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root_password
```

4. Start the Docker containers:

```bash
docker-compose up -d --build
```

5. Generate application key and run migrations:

```bash
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate
```

6. Install Laravel dependencies:

```bash
docker-compose exec app composer install
```

7. Access your development environment:

- **Application**: [http://localhost:8080](http://localhost:8080)
- **phpMyAdmin**: [http://localhost:8081](http://localhost:8081)
  - Username: root
  - Password: root_password

## Development

### Common Commands

```bash
# Run Artisan commands
docker-compose exec app php artisan make:controller UserController
docker-compose exec app php artisan make:model User -m
docker-compose exec app php artisan migrate

# Install packages
docker-compose exec app composer require vendor/package

# View logs
docker-compose logs -f

# Stop containers
docker-compose down
```

### SQL. Database Connection

Use these credentials to connect to MySQL from your Laravel application:

```env
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root_password
```

## Deployment to Production

To deploy to a Linux production server:

1. Clone the repository on the server
2. Configure your production Nginx server to point to the `public` directory
3. Set up the MySQL database and update the `.env` file with production credentials
4. Install Composer dependencies with `composer install --no-dev`
5. Run database migrations

## License

This project is open-sourced software licensed under the MIT license.
