## Technical Assessment: trikl

Design and implement a simple Laravel application that fulfills the following
requirements:
- **Create a user authentication system with registration, login, and logout
functionality.**
- **Users should be able to create, read, update, and delete their own posts.**
- **Implement a background task using Laravel's task scheduling to send a
daily email digest of the top posts to all users.**
- **Ensure that sensitive user data, such as passwords, are securely stored
using Laravel's encryption features.**


1. Clone the repository

```bash
git clone https://github.com/abdullahqasim/trikl.git
```
2. Change the working directory

```bash
cd trikl
```
3. Install composer

```bash
composer install
```

4. Copy .env.example file and rename it into .env

```bash
cp .env.example .env
```

5. Create application key

```bash
php artisan key:generate
```
6. Create database and run migration

```bash
php artisan migrate
```
7. Install and run node modules

```bash
npm install && npm run dev
```
8. Seed the database to create user

```bash
php artisan db:seed
```
9. Seed the database to create user

```bash
php artisan serve
```
