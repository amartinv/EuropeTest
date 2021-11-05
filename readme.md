## Technologies

- Laravel 5.3
- PHP 7.1.9
- Vue.js 2
- Vue-router
- TailwindCSS
- Bootstrap
- MySQL 8.0.27 (Legacy authentication)
- node 10.13.0
- npm 6.4.1

## Setup

1.  Clone this repository
2.  Run the command `npm install` to install the dependencies (node_modules)
3.  Configure the file '.env' to match your MySQL database
4.  Migrate the database with `php artisan migrate`
5.  Run the command `php artisan serve`. This should start a local server in [localhost:8000](http://localhost:8000/)

## Features:

- You can add dogs with a form with these parameters (Name, Breed, Size, Weight, Hair color, Hair length, photo).
- When you add/update a dog it redirects you to the list of all animals.
- You can see all the dogs and their data in a table format
- You can delete entries in animal list
- You can edit animal entries
- Forms have validation
- The page is responsive

## How to use

When you enter the web app there is a home page where you can find a cute dog picture and a features list. At the top side there is a navegation bar with 3 routes (home, all dogs, form).

- **Home** redirects you to the description page and the dog picture
- **All dogs** redirects you to a list of all the dogs you have inserted
- **Form** redirects you to a form where you can insert new dogs into the database, this form has validation

Inside the dog list you can interact with each element, you can delete it or edit the entry.
Deleting generates a confirmation prompt to prevent mistakes. Editing redirects to a form where you can edit and update the entry.

A dog has these parameters:

- Name
- Breed
- Age
- Size
- Weight
- Hair color
- Hair length

**You can find a set of screenshots in '/resources/demo_screenshots'**
