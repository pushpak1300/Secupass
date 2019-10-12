![Screenshot (35)](https://user-images.githubusercontent.com/31663512/59926599-43f9fb80-9458-11e9-9f9f-4ae0e07c1cc0.png)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/29ec5f8d9c464a8a95dd73b281686d3a)](https://www.codacy.com/app/pushpak1300/Secupass?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=pushpak1300/Secupass&amp;utm_campaign=Badge_Grade)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pushpak1300/Secupass/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/build.png?b=master)](https://scrutinizer-ci.com/g/pushpak1300/Secupass/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/pushpak1300/Secupass/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)
[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/1523-shield.svg)](https://madewithlaravel.com/p/secupass/shield-link)

# Secupass -Password Manager Application 



Table of Contents
-----------------

- [Features](#features)
- [Getting Started](#getting-started)
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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
