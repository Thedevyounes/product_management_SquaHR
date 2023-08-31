# Project Description & Guidelines

## Challenge: Product Management

Develop a product management web application using Laravel and Vue.js. The application should allow users to store and manage their products. Implement the following features:

1. User authentication and authorization.
2. Ability to add, edit, and delete products with details like name, description, size, and more.
3. Display a list of products with search and pagination functionality.
4. Implement basic validation to ensure required product fields are filled.
5. Enable users to filter products based on specific criteria (e.g., name, type).

### Guidelines

- Main framework code in a master branch and the app code in the main branch.

## Commands & Steps

1. Clone the repository: 
```shell 
git clone https://github.com/Thedevyounes/product_management_SquaHR.git`
```
2. Navigate to the project directory: 
```shell 
cd product_management_SquaHR`
```
3. Install Composer dependencies: 
```shell 
composer install`
```
4. Install Node.js dependencies: 
```shell 
npm install`
```
5. Copy the `.env.example` file to `.env`: 
```shell 
copy .env.example .env`
```
6. Generate the application key: 
```shell 
php artisan key:generate --ansi`
```
7. Modify the database configuration in the `.env` file
8. Run database migrations: 
```shell 
php artisan migrate`
```
9. Seed the database: 
```shell 
php artisan db:seed`
```

## Tools

- **Laravel** 10.21.0
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="200" alt="Laravel Logo">

  Laravel is a popular PHP framework known for its elegant syntax and developer-friendly features. It provides a solid foundation for building web applications quickly and efficiently.

- **PHP** 8.2.2
<img src="https://www.php.net/images/logos/new-php-logo.png" height="200" alt="PHP Logo">

  PHP is a widely-used scripting language that is especially suited for web development. Version 8.2.2 includes various enhancements and improvements over previous versions.

- **Vue.js** 3.3.4
<img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" height="200" alt="Vue.js Logo">

  Vue.js is a progressive JavaScript framework for building user interfaces. It focuses on the view layer and offers reactive data binding and component-based architecture.

- **Vite**
<img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Vitejs-logo.svg" height="200" alt="Vite Logo">

  Vite is a build tool that is designed to optimize the development experience for modern web applications. It offers fast development server and lightning-fast builds.

- **Laravel Breeze**
<img src="https://btssio-ccicampus-strasbourg.fr/wp-content/uploads/2022/12/socialcard-2.png" height="200" alt="Laravel Breeze Logo">

  Laravel Breeze is a lightweight starter kit for Laravel applications. It provides a simple authentication system, user registration, and basic layout views to get you started quickly.

- **Inertia.js**
<img src="https://raw.githubusercontent.com/inertiajs/.github/master/LOGO.png" height="200" alt="Inertia.js Logo">

  Inertia.js is a client-side framework for building single-page applications (SPAs) using server-side routing. It allows you to build SPAs without having to write a lot of JavaScript code.

- **MySQL** 8.0.32
<img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png" height="200" alt="MySQL Logo">

  MySQL is a popular open-source relational database management system. Version 8.0.32 includes new features, performance improvements, and enhancements to the security features.
