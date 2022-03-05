<html>
<head>
<title>Online Car Booking </title>
</head>
<style>
body{
 background-image: url('images (4).jpeg');
 background-repeat: no-repeat; 
 background-attachment: fixed;
 background-size:cover;
 box-sizing: border-box;
 width: 95%;
 height: 95%;
 border: 5px solid black;
 float: left;
 align-content: center;
 align-items: center;
           
               
}
h1
{
color:black;
text-shadow:2px 2px rgb(179, 109, 141);
font-size:35px;
text-transform:uppercase;
}
form {
margin: 0 auto;
width: 600px;
}
</style>
<body>
<br>
<h1 style="text-align: center;">Online Car Booking</h1>
<form action=actionpage.php method= POST/GET>

<center>
<table>
	<tr>
	<td>First Name  </td>
	<td>
	<input type ="text" name="firstname"/><br>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>Last Name</td>
	<td>
	<input type = "textt" name ="lastname"/>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>Gender</td>
	<td>
	<input type="radio" name="gender"/>Male
	<input type="radio" name="gender"/>Female
	<input type="radio" name="gender"/>Others
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>Address</td>
	<td>
	<textarea cols="30" rows="5" value="address"></textarea>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr>
	<td>Phone No.</td>
	<td>
	<input type="text" name="phone" size="10"/>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>E-Mail(optional)</td>
	<td>
	<input type="text" name="Email"/>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<td>Maruti Suzuki Cars</td>
	<td>
	<select>
	
	<option value="Alto"> Alto</option>
	<option value="Baleno">Baleno</option>
	<option value="Celerio">Celerio</option>
	<option value="Eaco">Eaco</option>
	</select>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<td> Hyundai Cars </td>
	<td>
	<select>
	
	<option value="Verna"> Verna</option>
	<option value="Creta">Creta</option>
	<option value="Santro">Santo</option>
	<option value="Venue">Venue</option>
	</select>
	</td>
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	
	<tr>
	<td>
	<input type="submit" value="submit" name="Submit" />
        <input type="reset" value="Reset" name="Reset" />
          </td>
         </tr>
<table>
</center>
</form>
</body>
</html>
