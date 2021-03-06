Symfony template
========================
This is a boilerplate to start usual symfony project, that has API with OAuth2 authorization, Admin panel (SonataAdminBundle), and a core module with business logic and domain objects. 

Installation
========================
* Create database in MySQL, and call it "test".
* Import the test.sql file to created database.
* Change these parameters in parameters.yml file:

```
database_user:
database_password:
```

Usage
========================
Run  embedded server using console command

```
php bin/console server:start
```


Get oauth2 access token in field "access_token", using URL
```
http://127.0.0.1:8000/app_dev.php/oauth/v2/token?grant_type=password&client_id=1_5ynhouul0vsw44wcocg8ss8oo0s08ks0o8so0gsck8gsswc04c&client_secret=izgtvhfqe7ks804k8o8gcko08oscog4c8g4gwsc80og84w04c&username=test&password=pass
```  
Use this token in all API calls as access_token GET or POST parameter.



See API definition at URL
```
http://127.0.0.1:8000/app_dev.php/api-doc?access_token=MzE4NzM3YTcxM2U3OTljNjFkYzExM2VmYWY5MTIwOTAwMWM3YmI2MTBhYjE3NjJhNjYxYWExZjUwMWI0NDBkZg
```

See admin interface at URL
```
http://127.0.0.1:8000/app_dev.php/admin
```



Tools
========================
If you use PHPStorm, you can import xml-file from the "tools" folder into the REST Client, to view examples of API calls.
