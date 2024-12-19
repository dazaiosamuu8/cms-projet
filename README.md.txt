# My E-commerce WordPress Project

## Project Description
This is an e-commerce website built with WordPress and WooCommerce as part of my university project. It features a product catalog, cart, checkout system, and customizable pages.

## Installation Steps
1. Clone the repository
2. Copy the files to your web server (e.g., `htdocs` for XAMPP).
3. Import the database:
- Open phpMyAdmin.
- Create a new database.
- Import `wordpress.sql` from this repository.

4. Update the `wp-config.php` file with the database credentials:
```php
define('DB_NAME', 'your-database-name');
define('DB_USER', 'root'); // Default for XAMPP
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');