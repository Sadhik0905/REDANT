# REDANT
Before you open this project make sure that you have installed xampp software.<br>
Click the link to download the xampp https://www.apachefriends.org/index.html and then install it.<br>
After installation is done, open the path "C:\xampp\htdocs" and create a folder in the directory and place all these files in that folder.<br>
If you have installed then follow the below steps 
  1. Start the **Apache** and **MySQL** services
  
      ![xampp](https://user-images.githubusercontent.com/68614048/129456649-cd53187a-e9d3-4746-94a1-7483b9669d6e.PNG)
      
  2. Then open the browser and enter **localhost** in address bar.
  3. A page will page like below
  
      ![localhost](https://user-images.githubusercontent.com/68614048/129456681-355642ae-9c86-4d51-a5a3-fbff13c5d669.PNG)
      
  4. Click on **phpMyAdmin**.
  5. There create a databases named REDANT.
  
  ![database_creation](https://user-images.githubusercontent.com/68614048/129458517-09a90fcd-ae80-4556-800f-205846545ca6.PNG)
  
  6. Now create the tables users, maincontact and subcontact in the database REDANTS with the following columns:
      1. users table : S. No int, FirstName varchar(15), LastName varchar(20), Email varchar(40), password varchar(225), Date datetime   [Primary key : (S.No,Email)]
      2. maincontact : S. No int, Name varchar(32), Email varchar(40), Phone int, Message text, Date datetime    [Primary key : (s. No)] 
      3. subcontact : S. No int, Email varchar(40), Message text, Date datetime     [Primary Key : (S. No)]

  ![tables_creation](https://user-images.githubusercontent.com/68614048/129458739-979f8be9-7059-4413-8461-d14870215f6b.PNG)

  7. Now its done.....!!!!
  8. Now open the browser and enter the url **localhost/folder_name**. It will open the project.
  9. You are ready to go..!!!
