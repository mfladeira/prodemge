Clone the repo locally:

```sh
git clone https://github.com/mfladeira/prodemge.git
cd prodemge
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm i
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```


```sh
Create an mySQL database. Update your configuration accordingly.
```

Run database migrations:

```sh
php artisan migrate
```

Run the dev server:

```sh
php artisan serve
```

