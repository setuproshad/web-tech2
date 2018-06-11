<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html>
<head>
</head>
<body style="background-color:pink;">
<table>
	<section>
	<tr>
		<form name="contact" method="get" action="#">
		<h2>Registration Form</h2>
		<label for= "Fullname">
		<p><td>Fullname:</td><td><input name="name" type="text" placeholder="Fullname" maxlength="50" size="20" id ="name"></td></p>
		</label>
		</tr>
		<tr>
		<label for= "Email">
		<p><td>Email:</td><td><input name="email" type="text" placeholder="Gmail address" id="email"></td></p>
	</label>
	</tr>
	<tr>
	<label for= "Date of birth">
	<p><td>Date of birth:</td>
	<td><input name="day" type="text" placeholder="Day" list="day" id="day"></td>
		<datalist id="day">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</datalist>	
	
	<td><input name="month" type="text" placeholder="Month" list="month" id="month"></td>
		<datalist id="month">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</datalist>	
	
	<!--td><input name="year" type="text" placeholder="Year" list="year" id="year"></td></p>
	<datalist id="year"-->
			<td><select>
			<?php  
for ($x = 1900; $x <= 2018; $x++) {
  echo '<option>'.$x.'<option>';
 
}

?> 
<select></td>
			<!--option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
		</datalist>	
		
	</label>
	</form>
	</section-->
	
</table>	
	<p>Gender: <input type="radio" name="gender" value= "Male"> Male 
	<input type="radio" name="gender" value= "Female"> Female 
	<input type="radio" name="gender" value= "Other  ">   Other 
	<input name="other" type="text" placeholder="other  " id="other"></p>
		</p>
	<table>
		<tr>
		<label for= "Password">
		<p><td>Password:</td><td><input name="password" type="text" placeholder="password" maxlength="50" size="20" id ="password"></td></p>
		</label>
		</tr>
	<tr>
		<label for= "Confirm">
		<p><td>Pass Confirm:</td><td><input name="confirm password" type="text" placeholder="confirm password" maxlength="50" size="20" id ="confirm password"></td></p>
		</label>	
	</tr>
		<td>         </td><td><button type="Submit"><a href="form2.html">Submit</button>	</td>
	</tr>
	</tr>
		<td>         </td><td><b>OR</b></td>
	</tr>
	
	</tr>
		<td><button  type="Submit" style=" background-color: #dd4b39;"><a  href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin">Login With Gmail </a></button></td>
		<td><button type="Submit"style=" background-color: #3B5998;"><a  href="https://www.facebook.com/login.php?login_attempt=1&lwv=110;">Login With Facebook </a></button></td>
		
		</a>
	</tr>
	
</body>
</html>