# Test School

> A Laravel CRUD on a School Management

This project runs with Laravel version 10.43.0

## Getting started

Assuming you've already installed on your machine: PHP (8.1 - 8.3), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) and [Node.js](https://nodejs.org).

``` bash
# install dependencies
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate

# build CSS and JS assets
npm run dev
# or, if you prefer minified files
npm run prod
```

Then launch the server:

``` bash
php artisan serve
```

## Getting Started from Cloud9

From your GitHub account, go to Settings → Developer Settings → Personal Access Token → Tokens (classic) → Generate New Token (Give your password) → Fillup the form → click Generate token → Copy the generated Token, it will be something like: 
``` bash
ghp_sFhFsSHhTzMDreGRLjmks4Tzuzgthdvfsrta
```

If you want to access to the repository from Cloud9, use this command:
``` bash
git clone https://<your_personal_accesss_token>@github.com/Tristan-Al/TestSchool.git

```

Then, you'll have to follow the next steps:

``` bash
# We enter in the folder of the repository
cd TestSchool/
# Make a chown of all the files and folders
chown -R www-data:www-data .*
chown -R www-data:www-data *

```

The Laravel sample project is now up and running! Access it at http://localhost:8000.

## Developers
- [hjimenezdev](https://github.com/hjimenezdev)
- [ManuelMarAco](https://github.com/ManuelMarAco) 
- [Fortuna-457](https://github.com/Fortuna-457) 
- [saiihara](https://github.com/saiihara) 
- [carloss21](https://github.com/carlossc21) 
