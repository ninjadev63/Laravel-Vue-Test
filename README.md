# Laravel-Vue-Test
E-commerce test project using Laravel 9, Vue3, Vuex, Vue-router, Vite.

## Installation Instructions
1. Run `git clone https://github.com/ninjadev63/Laravel-Vue-Test/`
2. From the projects root run `cp .env.example .env`
3. Configure your `.env` file to change db name.
4. Run `composer install` from the projects root folder
5. From the projects root folder run `sudo chmod -R 755 ../Laravel-Vue-Test`
6. From the projects root folder run `php artisan key:generate`
7. From the projects root folder run `php artisan migrate`
8. From the projects root folder run `php artisan db:seed`
9. Compile the front end assets with [npm steps](#using-npm) or [yarn steps](#using-yarn).

#### Build the Front End Assets with ViteJs
##### Using NPM:
1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run build`
  * You can lint assets with `npm run lint`
  * You can clean the syntax with `npm run clean`

##### Using Yarn:
1. From the projects root folder run `yarn install`
2. From the projects root folder run `yarn run dev` or `yarn run build`
  * You can lint assets with `yarn run lint`
  * You can clean the syntax with `yarn run clean`

#### Optionally Build Cache
1. From the projects root folder run `php artisan config:cache`

###### And thats it with the caveat of setting up and configuring your development environment.

## Seeds

##### Seeded Users
There are over 20 users, 5+ products and 5+ categories.
|Email|Password|
|:------------|:------------|
|name1@gmail.com|123456|
|name2@gmail.com|123456|
|name3@gmail.com|123456|
