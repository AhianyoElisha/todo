# todo
Application for creating a todo list with php

## Requirements

Install XAMPP(An easy to install Apache distribution containing MariaDB, PHP, and Perl).


## Run
For windows
* Clone `git clone https://github.com/AhianyoElisha/todo.git` and move the project directory into the htdocs 
folder found in the XAMPP folder(The XAMPP folder is found in C:\)
* Execute `http://localhost/todo/Now/main.php` in your browser to run the application


## Folders

```
+ Now
  + css : This folder contains built css stylesheets for modals, tables and the main page content
      - style.css : style for container.php file
      - style1.css : style for addmodal.php file
      - style2.css : style for editmodal.php file
      - style3.css : style for delete.php file
      - style4.css : style for readmodal.php file
      - details.css : style for details.php file
      - table.css : style for table in container.php file      
  + container : this folder contains the php file for main page design and the modal folder
    + modals :This contains all modal html content.
      - addmodal.php : style for the modal adding to the todo list 
      - editmodal.php : style for the modal updating the todo list in database
      - deletemodal.php : style for the modal deleting from database the todo list 
      - readmodal.php : style for the modal reading from the todo list 
  + images : This contains image files 
  + js : This folder contains page-specific scripts.
      - date.js : script for date display
      - delete.js : script for delete modal
      - edit.js : script for edit modal
      - show.js : script for read modal
  - main.php : Main page file(this is the center for the all the php files)
  - database.php : Database and table creation file 
  - operation.php : Database and table creation file 
  - operationUpdate.php : Update into database file 
  - operationDelete.php : Delete from database file 
  - details.php : Detail list of inputs into database file 
  - mark.php : Database check done/undone file
  
      
