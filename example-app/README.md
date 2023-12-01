## Notes to self

Laravel.com website docs can show commands with php. Change that to ddev

-   ddev artisan migrate

| Command                                     | Explanation                                                                                                                  |
| ------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `php artisan make:migration messages_table` | Generates a new migration file named `messages_table` for creating a database table to store messages.                       |
| `ddev artisan migrate:status`               | Displays the status of migrations, showing which migrations have been run and which are pending.                             |
| `ddev artisan migrate:pretend`              | Simulates the execution of migrations, displaying the queries that would run without actually applying them to the database. |
