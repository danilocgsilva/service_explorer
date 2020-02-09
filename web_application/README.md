# Web application for Service Explorer

The web application that will holds all the endpoints informations for your projects.

Note: If you are a [Laravel](https://laravel.com/) user, you are lucky! The application is written in Laravel.

This project will tries to follow patterns and good practices from the MVC development application. This means:

* Each model will have an equivalent controller with its all CRUD methods.
* Views will present the same pattern organization for controllers.
* Migrations will works well when the project is first deployied and no data were previously available.

## Unit test

The application are configured to use a real relational database to perform unit testing that reaquires writing to the database. Check the `phpunit.xml` file in the root of the web application ro see the recomendation for a database name testing. The database testing also may have the same address, user and password (no problem if in a develpment environment).
