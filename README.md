# NewburyDevs Tasks API

This is a simple Tasks/To-do API, built live at the first meetup for #newburydevs.

## Installation
- Clone the repository `git clone https://github.com/davidsneal/newburydevs-tasks-api.git && cd newburydevs-tasks-api`
- Run `composer install`
- Run `cp .env.example .env`
- Run `php artisan key:generate`
- Create a database, and update any relevant `DB_x` environment variables in your `.env` file
- Run `php artisan migrate`
- Run `php artisan db:seed --class=TasksSeeder` _(optional)_
