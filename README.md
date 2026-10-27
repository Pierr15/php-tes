# PHP Status Dashboard

A small PHP project for learning continuous integration and preparing for a later AWS deployment.

## Features

- `/`: returns basic application status as JSON.
- `/health`: returns health status, PHP version, and a UTC timestamp.
- PHPUnit unit test for the health status service.
- GitHub Actions CI on pushes to `main` and `feat/**`, and pull requests targeting `main`.
- PHP syntax checks and tests on PHP 8.2 and 8.3.

## Requirements

- PHP 8.2 or newer
- Composer 2

## Run locally

Install dependencies:

```sh
composer install
```

Start the PHP development server:

```sh
php -S 127.0.0.1:8000
```

Open `http://127.0.0.1:8000/` or `http://127.0.0.1:8000/health`.

Run tests:

```sh
composer test
```

## CI/CD status

The CI workflow validates Composer configuration, checks PHP syntax, and runs unit tests. AWS deployment is intentionally not configured yet, so this repository does not create AWS resources or initiate AWS charges.

Before enabling deployment, review current Free Tier eligibility and estimate all resource costs. Deployment requires explicit approval.