## About Software Development @ Cyberhawk

## Setting Everything Up

As mentioned above we have chosen to make use of Laravel Sail as the foundation of this technical test.

-   If you haven't already, you will need to install [Docker Desktop](https://www.docker.com/products/docker-desktop).
-   One that is installed your next step is to install this projects composer dependencies (including Sail).
    -   This will require either PHP 8 installed on your local machine or the use of [a small docker container](https://laravel.com/docs/8.x/sail#installing-composer-dependencies-for-existing-projects) that runs PHP 8 that can install the dependencies for us.
-   If you haven't done so already copy the `.env.example` file to `.env`
    -   If you are running a local development environment you may need to change some default ports in the `.env` file
        -   We've already changed mysql to 33060 and NGINX to 81 for you
-   It should now be time to [start Sail](https://laravel.com/docs/8.x/sail#starting-and-stopping-sail) and the task

### Installing Composer Dependencies

https://laravel.com/docs/9.x/sail#installing-composer-dependencies-for-existing-projects

```bash
docker run --rm \
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php81-composer:latest \
composer install --ignore-platform-reqs
```

## My Laravel Project with Sail

This is an existing Laravel project that uses Sail for development and deployment.

## Getting Started

### Prerequisites

-   Docker Desktop (for Mac and Windows) or Docker Engine (for Linux)
-   Composer

### Installation and Running

1. Clone the repository or download the source code.
2. In the terminal, navigate to the project directory.
3. Run `composer install` to install the PHP dependencies.
4. Run `cp .env.example .env` to create a new `.env` file.
5. Change configuration in .env based on your environment (if you are going to use sail as instructed change `DB_HOST` to `mysql` IE `DB_HOST=mysql`)
6. Run `sail up -d` to start the development environment.
7. Run `sail artisan key:generate`
8. Run `sail artisan migrate`
9. Run `sail artisan db:seed`

### Stopping the Project

1. In the terminal, navigate to the project directory.
2. Run `sail down` to stop the development environment.
