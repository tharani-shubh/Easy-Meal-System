# Easy-Meal-System

pre requisite -
xampp server

Steps:
1. Open CMD in the xampp/htdocs/
2. git clone https://github.com/tharani-shubh/Easy-Meal-System.git
3. git checkout master
4. Start xampp server and start Apache and MySQL
5. Open phpmyadmin
6. Create database named ems and import sql file named food.sql stored in xampp/htdocs/Easy-Meal-System/sql/
7. Open browser and open localhost/Easy-Meal-System


If you face any issues with OTPS then create account on textlocal.in and change hashcode and username inside process.php file and also create the new template in the send section in textlocal.in with the following format - otp number.%%|var^{"inputtype" : "text", "maxlength" : "4"}%%.
