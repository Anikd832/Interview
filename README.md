Getting Started with the Project

Follow these steps to set up and run the project locally:

Steps to Run the Project

	1. Clone the project repository to your local machine.

	2. Navigate to the project directory and set up the environment variables in the .env file (e.g., database credentials).
	Run the following commands to migrate the database and seed it with initial data:

		php artisan migrate  
		php artisan db:seed  
		
		This will create the necessary database tables and insert initial data.

	3.Run the following command to start the development server:
		php artisan serve  

Open your browser and visit the provided URL (e.g., http://127.0.0.1:8000) to access the login page.

Login Credentials

	1. Email: admin@gmail.com
    
	2. Password: password

Features

Dashboard

After logging in with the above credentials, you will be redirected to the Dashboard page.

Profile Dropdown

On the Dashboard page, locate the profile dropdown in the top-right corner. The dropdown contains the following options:

	1. User Create: Opens a registration form where you can create a new user.
	2. Logout: Logs you out of the application.

Enjoy using the application!

