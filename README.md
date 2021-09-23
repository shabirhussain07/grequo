# Grequo
## 🏄 Introduction
This is a QnA Website designed exclusively for EVs.People can ask and answer questions related to EVs here.
	
## How to Run?
After starting Apache and MySQL IN XAMPP Follow steps below.
1.Extract zip file
2.copy the main project folder(i.e grequo)
3.paste it in xamp/htdocs/

----------------------------------------------
NOW CONNECTING DATABASE:
4.Open browser and go to url "http://localhost/phpmyadmin/"
5.then click on databases tab
6.create a database naming "confer" and then click on import tab
7.Click on browse file and select "confer.sql"  which is inside main folder(grequo)
8.Create another databse, name it "contact1" with collation option (in top) then click on create.
9.create table name as "registration" with Number of columns = 4 then click on Go.
10.create 4 columns with names as 
                    1.id type int and  select auto increement option (AI)
                    2.name type varchar length=50
                    3.email type varchar length=50
                    4.message type varchar length=50
          then click on SAVE . Now your database is ready

-----------------------------------------------------
After creating database
11.open url "localhost/grequo/" 
