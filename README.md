Kijabe Hospital Procurement System
This is a web application developed using Laravel, designed to manage procurement processes within Kijabe Hospital.

Features
User Authentication: Login and logout functionality.

Dashboard: A central landing page.

RFQ Management: A section to view Request for Quotation (RFQs) in a table.

Items Management: Functionality of the items.

Settings Page: A personal settings page.

Responsive Design: Uses Tailwind CSS for a clean and adaptive user interface.

Technologies Used
PHP 

Laravel Framework 

MySQL Database

Composer

Tailwind CSS

Blade Templating Engine

Git & GitHub

Getting Started
Follow these steps to set up and run the project locally.

Prerequisites
XAMPP (Includes Apache and MySQL)

Composer

Git


Create a Test User (Manual Insertion):
You need to manually add a user to the users table via phpMyAdmin to log in.

Generate a Hashed Password:
Open your terminal in the project root and run:

php artisan tinker
echo \Illuminate\Support\Facades\Hash::make('1234');

Copy the long string outputted (e.g., $2y$12$...). This is your hashed password. Type exit to leave Tinker.

Insert User in phpMyAdmin:

Go to http://localhost/phpmyadmin/ 

Select your database (from .env).

Click on the users table.

Go to the Insert tab.

Fill in the details:

name: Admin User

email: admin@example.com

password: Paste the hashed password you copied from Tinker.

first_name: Admin 
last_name: User 

Set created_at and updated_at to CURRENT_TIMESTAMP.

Click Go.

Usage
Start the Development Server:

php artisan serve

Access the Application:
Open your web browser and go to: http://127.0.0.1:8000/

Login Credentials:

Email: admin@example.com

Password: 1234

Navigate:
Use the navigation bar to access different sections like Dashboard, RFQ, Items, and Settings.

Project Structure (Key Files)
app/Models/User.php: User Eloquent model.

app/Models/Item.php: Item Eloquent model.

app/Http/Controllers/LoginController.php: Handles login and logout logic.

routes/web.php: Defines all web routes for the application.

resources/views/: Contains all Blade templates.

resources/views/login.blade.php: The login form.

resources/views/dashboard.blade.php: The main dashboard page.

resources/views/rfq.blade.php: The Request for Quotation page.

resources/views/items/: Folder containing views for item management.

resources/views/settings.blade.php: The settings page.

resources/views/components/layout.blade.php: The main Blade component layout.