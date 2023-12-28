# Online-Library

Clone/download the project  
Open the project in the code editor  
inside the server folder create .env file and put these codes.    

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=<your_database_name>  
DB_USERNAME=root  
DB_PASSWORD=  

You can use the database inside(server/LibraryDatabase/library.sql))  

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

![screencapture-localhost-8080-login-2023-08-04-09_38_03](https://github.com/Milani1999/Online-Library/assets/73093354/230a1b3f-914a-430a-bb51-9b1246f2518b)

![screencapture-localhost-8080-2023-08-04-09_37_54](https://github.com/Milani1999/Online-Library/assets/73093354/7eed9abe-57f3-4a9d-ab5e-3f46409d8e77)

![screencapture-localhost-8080-books-2023-08-04-09_41_45](https://github.com/Milani1999/Online-Library/assets/73093354/8393af8d-dea1-49be-a626-7aa85497cdac)

![screencapture-localhost-8080-borrowed-2023-08-04-09_41_37](https://github.com/Milani1999/Online-Library/assets/73093354/01329200-0fd2-46b2-8209-a8a501677032)

