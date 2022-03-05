<html>
<head>
<title>
action page
</title>
</head>
<body>
First name:<?php echo $_POST["f_name"];
?><br>  
Last name:<?php echo $_POST["l_name"];
?><br>
Gender:<?php echo $_POST["gender"];
?><br>
Address:<?php echo $_POST["address"];
?><br>
Hobbies:
<?php
if (isset($_POST['singing']))
{
 echo $_POST["singing"];
}
if (isset($_POST['drawing']))
{
 echo $_POST["drawing"];
}
if (isset($_POST['reading']))
{
 echo $_POST["reading"];
}
if (isset($_POST['socialservices']))
{
 echo $_POST["socialservices"];
}
?><br>
Email:<?php echo $_POST["email"];
?><br>
Password:<?php echo $_POST["password"];
?><br>  
</body>
</html>
