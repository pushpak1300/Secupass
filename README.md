![Screenshot (35)](https://user-images.githubusercontent.com/31663512/59926599-43f9fb80-9458-11e9-9f9f-4ae0e07c1cc0.png)
# Secupass -Password Manager Application 



Table of Contents
-----------------

- [Features](#features)
- [Getting Started](#getting-started)
- [Contributing](#contributing)
- [License](#license)


Getting Started
---------------

#### Cloning The Repository:

```bash
# Get the project
git clone https://github.com/pushpak1300/Secupass.git

# Change directory
cd Secupass

# Copy .env.example to .env
cp .env.example .env

# Generate application secure key (in .env file)
php artisan key:generate

# Create a database (with mysql or postgresql)
# And update .env file with database credentials
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_DATABASE=laravelhackathon
# DB_USERNAME=root
# DB_PASSWORD=root

# Install Composer dependencies
composer install

# Run your migrations
php artisan migrate

php artisan serve
```

Features
--------

- **Authentication** using Email and password
- Email Verification
- Flash notifications
- MVC Project Structure
- Bootstrap 4
- [Argon Template -Creative tim](https://www.creative-tim.com/product/argon-design-system) 
- **Account Management**
 - Gravatar
 - Profile Details
 - Change Password
 - Forgot Password
 - Reset Password
 - Delete Account
 - CSRF protection

## Security Vulnerabilities

If you discover a security vulnerability within Secupass, please send an e-mail to Secupass at mail.secupass@gmail.com. All security vulnerabilities will be promptly addressed.

## Credits
* [pushpak1300](https://github.com/pushpak1300) 


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
