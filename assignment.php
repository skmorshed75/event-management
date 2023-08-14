<?php
মডিউল ২৪ এর এসাইনমেন্ট
Assignment: Event Management Project using Laravel
Submitted by : Sheikh Mohammed Morshed

Project Description:
---------------------

You are tasked with creating an event management web application using the Laravel framework. Users should be able to create, view, edit, and delete events. The application should have authentication in place to ensure that only logged-in users can perform these actions. Events should have a title, description, date, time, and location.


Requirements:
Setup and Authentication:
Set up a new Laravel project.
------------------------------
-- Open your terminal or command prompt.
-- Navigate to the directory where you want to create your Laravel project.
Run the following command to create a new Laravel project:

-- composer create-project laravel/laravel event-management

Navigate into the project directory:
-- cd event-management

Implement user authentication.
------------------------------
-- Generate the authentication scaffolding:
-- composer require laravel/ui
-- php artisan ui bootstrap --auth

Run migrations to create the necessary database tables:
-- php artisan migrate


Set up your database connection in the .env file.

Create routes for user registration, login, and logout.
---------------------------------------------------------
Step 3: Create Routes

Define routes for user registration, login, and logout in the routes/web.php file:

// Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Login Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Logout Route
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Database:
Set up a database with tables for users and events.
 
    Create a Event model and migration:
    --    php artisan make:model Event -m

    Open the generated migration file in the database/migrations directory and define the event fields (title, description, date, time, location):

Run migrations to create the events table:
-- php artisan migrate

Define the necessary columns for the events table (e.g., title, description, date, time, location).
Create relationships between users and events (one-to-many).

Generate a controller for managing events:
-- php artisan make:controller EventController


Event CRUD:
Create a dashboard page for logged-in users.
Generate a new controller named DashboardController:
-- php artisan make:controller DashboardController

In the routes/web.php file, define a route for the dashboard:
--    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Create a Blade view file named dashboard.blade.php in the resources/views directory. This is where you'll design and display the dashboard content for logged-in users.

Create a Blade view file named index.blade.php in the resources/views/events directory (create the directory if it doesn't exist). This view will display the list of events.

xxxxxxxxxxxxxxxxx


Implement a page to list all events with basic details.
Implement a page to view the details of a specific event.
Create a page to add a new event.
Implement editing and updating of existing events.
Add a feature to delete events.



Validation and Error Handling:
Implement server-side validation for event creation and editing.
Display appropriate error messages to users in case of validation failures.


Authentication Middleware:
Use middleware to protect routes that require authentication.
Allow only authenticated users to create, edit, and delete events.


Frontend:
Design and implement responsive frontend views using Blade templates and CSS.
Display events in an organized and user-friendly format.
Enhance user experience with proper form layouts and interactions.
Allow users to RSVP for events.
Implement event categories and filtering.
Add pagination to the events listing page.
Implement a search functionality for events.
 


Submission Instruction :
Please submit your github repository link.