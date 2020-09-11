This project is an E-learning platform developed by Nidhal Abidi and Oussama Aouini as a summer project .
We used for the front end : html , css , javascript and bootstrap (a framework) .
for the back end we used : php and databases .

In order for this website to work properly you need to  ( we will run it locally ): 
1) Install a software that will run the php code : we propose WAMP or XAMPP 

2)Run WAMP or XAMPP

3) Set the database necessary for the sign in / sign up system to work properly and to be able to change the profile picture within this website : 
	a/Open your browser ( we recommand opera for minimum bugs that you may face )
	b/Type localhost/phpmyadmin/ then for the username : root 
				                  password : (leave it empty )
then click on "go" 

 4)click on "Databases" ( Bases de données )  then write inside the Database Name : "loginsystemtut" then click on "create"

5)click on the "SQL" tab up top and then write this SQL code to create the first table :
  CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);

6) click "go" or "execute" 

7) Now we need to create the second table :
	a)click on "loginsystemtut" (which is the name of our database )
	b)click on the SQL tab up top and then write this SQL code to create the second table : 
	CREATE TABLE imgupload (
	id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid int(11) NOT NULL,
	status int(11) NOT NULL
	);

8) click "go" or "execute" 

9)Everything is set up inside the database , now copy the folder named "e-learning" and go inside the installation folder of the software "wamp" then the folder "www" then paste it there .

10)Now open any browser you want and write "localhost/e-learning" and click enter to use it .

Note : 
The steps above are only followed when you try to use the website for the first time  ( because we need to set the database ) otherwise you ignore them and do these two steps : 

1)Run the software "WAMP" or "XAMPP"

2)open any browser you want and write "localhost/e-learning" and click enter to use the website 
