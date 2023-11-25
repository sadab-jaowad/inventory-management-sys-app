# inventory-management-sys-app

1. Laravel Setup:

   - Start a new Laravel project, configured for local development.

Solution:
	-Download XAMPP, Composer
	-Laravel Project Creation Command: "composer create-project laravel/laravel inventory-management-sys-app"
	-start local server Command: "php artisan serve " 


2. Database Design:

   - Utilize a MySQL database.

   - Create a `products` table with fields: `id`, `name`, `quantity`, and `price`.

   - Include simple seeders for initial data loading.

Solution: 
	- open xampp and start apache and mysql
	- create database in "localhost/phpmyadmin/"
	- database name: db_imscrud
	- Go to .env -> change DB_DATABASE=db_imscrud
	- Generate migration command:" php artisan make:migration create_product_table "
	- Go to file create_product_table-> add the fields/column name
	- Update table Command: " php artisan migrate "
	- Seeder creating command: " php artisan make:seeder ProductsTableSeeder "
	- After updating , populate the data in the database  " php artisan db:seed "  

3. Product Management:

   - Implement CRUD operations for the `products`.

   - Provide functionality to add, view, update, and delete product details.

   - Include basic form validation.


4. User Interface:

   - Develop the front-end using Laravel Blade.

   - Ensure the UI is simple and user-friendly for product management.

Solution:
	-Click Add New -> to add new product and save it with Save button
	-Click View -> to see the product details
	-Click Edit -> to update the product details
	-Click Delete -> to delete the file


5. Authentication:

   - Set up a basic authentication system.

Solution: 
	
	-Authentication command: php artisan auth



6. Routing and Controllers:

   - Efficiently utilize Laravel routing and controllers.

   - Follow RESTful principles as applicable.

Soution:
	-created ProductController and updated it
	-

Solution: 
	 - Create Controller Command:" php artisan make:Controller ProductController --resource "
	 - Create Model Command:" php artisan make:model Product "
	 - Specify the table name, primary key and fillable column of the table in the model
	 - change functions in controller 


