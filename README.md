Project Name - MyImg (Image uploading scipt);
Language Used - HTML,CSS,Javascript,PHP & MySql

in these project you can upload images after creating a new account. and also the user uploading images can delete or share the direct link or HTML code of the image.

take a look at my youtube video for see working of project
- 

DATABASE -----------------
you can change database details in
"php_includes/db.php"

2 tables need to be created

table 1--------
table name:users
columns: id(primary_key,auto_increment) , first_name(varchar) , last_name(varchar), username(varchar), password(varchar)

table 2--------
table name:uploads
columns: id(primary_key,auto_increment) , image_name(varchar) , uploader_id(varchar), uploader_name(varchar)
 
