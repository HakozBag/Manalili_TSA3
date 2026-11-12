# Tasks for Today

This is a simple task management system I made using Laravel for IT0049 TSA3.

## Pages
- Welcome – shows today's tasks.
- Task List – shows all tasks arranged by date.
- Profile – shows my user information.
- About – gives information about the project and developer.

## How to Run
You need PHP, Composer, and MySQL installed.

1. Download or clone the project.
2. Open a terminal in the project folder and run `composer install`.
3. Copy `.env.example` and rename the copy to `.env`.
4. Create a database named `tasks_for_today` in MySQL.
5. Update the database settings in `.env`.
6. Run these commands:

   php artisan key:generate
   php artisan migrate --seed
   php artisan serve

7. Open http://127.0.0.1:8000 in your browser.

The sample data includes 8 tasks across 3 dates and one user.

## Name
Cyrus Dominic Manalili