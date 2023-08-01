# Online-Library

Clone/download the project  
Open the project in the code editor  
inside the server folder create .env file and put these codes (you can use the database inside(server/Database/onlinelibrary.sql))  

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=<your_database_name>  
DB_USERNAME=root  
DB_PASSWORD=  

To run the front end open the terminal and follow the commands  
cd client  
npm install  
npm run serve  

To run the backend open the terminal and follow the commands (Start the server (XAMPP/WAMP))  
cd server  
composer install  
php artisan serve  

After running both the client and server, you can see an interface for registering.   
Register by giving your name, email, and password.   
After that, the page will be redirected to the books list page and you can click borrow to borrow a book.  
Once you clicked the borrowed book will be shown in borrowed book pages.   
