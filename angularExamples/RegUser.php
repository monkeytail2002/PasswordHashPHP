<html>
<head>
<title>Create New User</title>


</head>
<body>
<h2>Register User details</h2>

<form method="POST" action="WriteUser.php">
<!-- This form allows a user to enter their details to be stored in the database. -->
<table>
 <tr>
  <td>User Email address:</td>
  <td><input type="text" name="Email" size="30" required> </td>
 </tr>
 <tr>
  <td>Password:</td>
  <td><input type="Password" name="UserPassword" size="10" required> </td>
 </tr>
 <tr>
  <td>Username:</td>
  <td><input type="text" name="UserName" size="30" required> </td>
 </tr>

 <!-- User can either submit or clear the date to start again. -->
<tr>
 <td colspan="2"><input type="submit" value="Add User"/>
 <colspan="2"><input type="reset" value="Clear"/></td>
 </tr>

</table>
</form>

</body>
</html>
