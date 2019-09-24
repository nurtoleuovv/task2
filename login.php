<!DOCTYPE html >
<html>
<head>
<title>authorization</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="body_bg">
<div align="center">
<h3>authorization</h3>
    <form id="login-form" method="post" action="authen_login.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">user name</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">password</label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Submit" name="submit" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
    </form>
</div>
<style>
	#body_bg
{ 
background-color:gray; 
}

#login-form{ 

background:lightgrey; 
border: 3 px solid #eeeee; 
padding:9px 9px;
 width:300px; 
 border-radius:5px; 
}
</style>
</body>
</html>