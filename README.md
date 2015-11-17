# PHP-GrabBag-Functions
Functions every developer needs to make thier lives easier
####NOTE:Never use a variable placeholder the same as a functions parameter

##Read
```php
read($filename);
```
####Description:
This function takes the file reads its contents and displays them on the screen

####Parameters:
Filename:
This functions only takes the parameter $filename which is the name of the file you want to read and display
***
Example:
```php
read("index.php");
```
OUTPUT
```php
*index code*
```
***

##Write
```php
write($filename,$mode,$contents);
```
####Description:
This function takes a file enters one of two modes (write or append) that you choose and then writes the contents specified to the file
####Parameters:
Filename:
This is the name of the file your opening and is specified as $filename this function is non-optional

Mode:
This is the mode you are trying to enter and is not optional the two modes are write("w") which overwrites everything in the file and append("a") which adds the content to the end of the page

Contents:
This is the only optional parameter and it is the contents you are trying to write to the file
***
Example:
```php
$file = "index.php";
$m = "a";
$content = "Some random content";
write($file,$m,$content);
```
OUTPUT
```php
Some random content
```
***

##Alert
```php
alert($msg);
```
####Description:
This function displays and alert msg to the screen based on whats passed to the msg parameter
####Parameters
Msg:This is what you want the alert to say.This parameter is optional if left blank the alert will show up with nothing in it
***
Example:
```php
$message = "This is an alert msg";
alert($message);
```
OUTPUT
```php
This is an alert msg
```
***

##Repeat Alert
```php
repeat_alert($repeats,$msg);
```
####Description:
Repeats an alert msg for the specified amount of times
####Parameters:
Repeats: Amount of times the alert is to be displayed non-optional

Msg: Msg to be displayed in the alert optional of left blank alert will display blank
***
Example:
```php
$message = "alert";
repeat_alert(2,$message);
```
OUTPUT
```php
alert
alert
```
***
