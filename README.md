# Web Test Rubi

This repository contains the source code for the **Web Test Rubi** project, a custom WordPress site for a talent agency. Follow the instructions below to set up the project locally using XAMPP and manage it.

---

## Prerequisites

Ensure you have the following tools installed on your system:

1. **Git**: [Download Git](https://git-scm.com/)
2. **XAMPP**: [Download XAMPP](https://www.apachefriends.org/)

---

## Installation Guide

### 1. Clone the Repository

Pull the project files from this repository to your local system:

```bash
cd C:/xampp/htdocs
Right-Click > New > New Folder > wordpress
git clone https://github.com/khairihr/web_test_rubi.git wordpress
```

This will create a `wordpress` folder in your `htdocs` directory.

### 2. Start XAMPP

1. Open the **XAMPP Control Panel**.
2. Start the following services:
   - **Apache**
   - **MySQL**

### 3. Import the Database

1. Open your browser and navigate to [phpMyAdmin](http://localhost/phpmyadmin).
2. Create a new database named `wp_ruby`.
3. Import the database file included in the repository:
   - Navigate to the `database` folder in the repository.
   - Select the `wp_ruby.sql` file.
   - Click **Go** to import.

### 4. Configure `wp-config.php`

1. Open the `wp-config.php` file in the `wordpress` folder.
2. Update the following database settings:

```php
define('DB_NAME', 'wp_ruby');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
```

3. Save the file.

### 5. Access the WordPress Site

1. Open your browser and navigate to [http://localhost/wordpress](http://localhost/wordpress).
2. Complete the WordPress installation:
   - **Site Title**: Web Test Rubi
   - **Username**: Will be provided separately to the recruiting team.
   - **Password**: Will be provided separately to the recruiting team.
   - **Email**: Will be provided separately to the recruiting team.

3. Log in to the WordPress admin panel.

---

## Usage Guide

### Access the Site
Once set up, the WordPress site can be accessed via:

- **Frontend**: [http://localhost/wordpress](http://localhost/wordpress)
- **Admin Panel**: [http://localhost/wordpress/wp-admin](http://localhost/wordpress/wp-admin)

Use the username and password provided separately to log in.

### Development
- Customize themes, plugins, and content via the admin panel.
- Edit source files directly in the `wordpress` directory.

### Troubleshooting

If you encounter issues:

1. Ensure XAMPP services (Apache, MySQL) are running.
2. Double-check the `wp-config.php` file for correct database credentials.
3. Check for error messages in the **Apache error log** or **phpMyAdmin**.

---

## Contribution

Feel free to fork this repository and contribute to improve the project. Create pull requests for any changes or enhancements.

---
