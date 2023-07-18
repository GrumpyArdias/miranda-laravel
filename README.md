# Hotel Miranda Laravel App

The Hotel Miranda Laravel App is a web application designed to facilitate hotel reservations and provide a convenient user experience for both clients and hotel staff. It allows clients to register, login, check booking availability, and make reservations with ease.

## Features:

- User Registration: Clients can create an account to access the reservation system.
- User Login: Registered users can log in securely to access their accounts.
- Booking Availability: Users can check the availability of rooms for their desired dates.
- Reservation: Users can make room reservations based on availability.


## Requirements:

- PHP >= 7.4
- Laravel >= 8.x
- Composer (Dependency Manager)

## Installation:

1. Clone the repository to your local machine

```bash
git clone https://github.com/your-username/hotel-miranda-laravel-app.git
```


2. Navigate to the project directory:

```bash
cd hotel-miranda-laravel-app
```

3. Install dependencies using Composer:

```bash
composer install
```

4. Configure the environment variables:
   - Rename the .env.example file to .env.
   - Update the database connection details in the .env file.

5. Generate the application key:

```bash
php artisan key:generate
```

6. Run the database migrations:

```bash
php artisan migrate
```

7. (Optional) Seed the database with sample data:

```bash
php artisan db:seed
```

8. Start the development server:
```bash
vendor/bin/sail up
```

9. Open your web browser and visit http://localhost to access the Hotel Miranda Laravel App.


## Acknowledgements:

- Laravel - https://laravel.com
- Laravel Documentation - https://laravel.com/docs

## Contact:

If you have any questions or feedback, please contact us at info@marioherrero.com

