## About SciFY Monitor

This project, self-titled "SciFY Monitor", is an exercise app made to exhibit basic web development skills for a Full Stack Software Engineer position at [SciFY](https://scify.org/en/). The goal was to "develop an application that will simulate a back-office that allows a SciFY employer to understand the usage of SciFY solutions in the [assistive technology](https://scify.org/en/impact_areas/assistive-technologies-en/) domain. This application will summarize the number of games / exercises created by the community for the [Memor-i-studio](https://scify.org/project/memor-i-studio/) and [Διάννοια](https://scify.org/project/διάνοια/) applications."

Specifications:
Create a simple MVC project (at a language of your preference) with 2 pages.

1. **Login Page**

    This can be a simple page with one html form.

    1. Agent's username
    2. Submit button

    If user enters username "Antigoni" she should be redirected to the user’s activity page. If username is wrong a message should be displayed again "The username you have provided is invalid."

2. **“Assistive Technologies > User’s activity” page**

    This page displays a table with all the games created at Memori-i studio and all the exercises created at Diannoia.

## How to run

Assuming that PHP, Composer & Git have already been installed and are in your system's PATH, perform the following:

1. Open a terminal instance in a directory where you want to store the project and run "git clone https://github.com/papandrk/scify-monitor.git"
2. Go into the newly created directory: run "cd scify-monitor"
3. Install all required dependencies: run "composer install"
4. Set up a .env file: run "cp .env.example .env"
5. Generate a key for the .env file: run "php artisan key:generate"
6. Set up a database for the app to use - the easiest solution if no other database software is installed: an sqlite database can be used without needing any further installations: just follow the 1-2 paragraphs from [these instructions](https://laravel.com/docs/10.x/database#sqlite-configuration).
7. Perform the database migrations by running "php artisan migrate"
8. Seed the database with predefined data by running "php artisan db:seed"
9. Run "php artisan serve"
10. In your browser, go to the address "localhost:8000"

The web app should be up and running now - you can use username "Antigoni" & password "password" to log in.

## Thoughts on improvements

Some possible improvements-to-be-made, off the top of my head:

- adding sorting functionality to the records list: sort by creation-date, application, alphabetically, descending/ascending etc.
- add selectable pagination length - in the current form every page returns a fixed maximum of 10 records
- adding record management - essentially CRUD functionality for the records so that they can be created/edited/deleted etc.
- adding user account recovery in the event of a forgotten/lost password
- adding integration with the actual source database that the data comes from - currently the records have been imported from a export of the database, so the data will get unavoidably get "stale"
