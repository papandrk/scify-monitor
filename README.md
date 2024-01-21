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

Considering that PHP, Composer & Git have been installed and are in your system's PATH, perform the following:

1. Open a terminal instance in a directory where you want to store the project and run "git clone https://github.com/papandrk/scify-monitor.git"
2. Go into the newly created directory: run "cd scify-monitor"
3. Run "composer install"
4. Run "cp .env.example .env"
5. Run "php artisan key:generate"
6. Set up a database for the app to use - an sqlite database can be used without needing any further installations: just follow [these instructions](https://laravel.com/docs/10.x/database#sqlite-configuration).
7. Run "php artisan migrate"
8. Run "php artisan db:seed"
9. Run "php artisan serve"
10. In your browser, go to the address "localhost:8000"

The web app should be up and running now - you can use username "Antigoni" & password "password" to log in.
