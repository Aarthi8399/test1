 <html>
<style>
h2 {
  background-color: lightblue;
  text-align: center;
}
</style>
<script type="text/javascript" >
function display(selectObj) {
var idx = selectObj.selectedIndex; 
var cSelect = document.getElementById("category"); 
var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
var categoryLists = new Array(2) 
categoryLists["empty"] = ["Select a Category"]; 
categoryLists["UG"] = ["Aero Engineering", "Mechanical Engineering"]; 
categoryLists["PG"] = ["Mainframe Systems", "Information Technology"]; 
var which = selectObj.options[idx].value; 
cList = categoryLists[which]; 
if(selectObj.options[idx].value=="UG")
{
for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 cSelect.add(newOption); 
} 
}
else
{
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 cSelect.add(newOption); 
} 
}
}
function validateForm()								 
{ 
	var name = document.forms["RegForm"]["name"];			 
	var father = document.forms["RegForm"]["father"]; 
	var DOB = document.forms["RegForm"]["DOB"]; 
	var address = document.forms["RegForm"]["address"]; 
	var pincode = document.forms["RegForm"]["pincode"]; 
	var email = document.forms["RegForm"]["email"]; 
	var mobile = document.forms["RegForm"]["mobile"];	
    var country = document.forms["RegForm"]["country"]; 	
	var qualif = document.forms["RegForm"]["qualif"]; 
	var sub = document.forms["RegForm"]["sub"]; 
	var board = document.forms["RegForm"]["board"]; 
	var year = document.forms["RegForm"]["year"]; 
	var pern = document.forms["RegForm"]["pern"];
	var course = document.forms["RegForm"]["course"]; 
	if (name.value == "")								 
	{ 
		window.alert("Please enter your name."); 
		name.focus(); 
		return false; 
	} 
	if (father.value == "")								 
	{ 
		window.alert("Please enter your father name."); 
		father.focus(); 
		return false; 
	} 
	if (DOB.value == "")							 
	{ 
		window.alert("Please enter your Date of Birth."); 
		DOB.focus(); 
		return false; 
	} 
	if (address.value == "")							 
	{ 
		window.alert("Please enter your address."); 
		address.focus(); 
		return false; 
	} 
	if (pincode.value == "")							 
	{ 
		window.alert("Please enter your pincode."); 
		pincode.focus(); 
		return false; 
	} 
	if (email.value == "")								 
	{ 
		window.alert("Please enter your e-mail address."); 
		email.focus(); 
		return false; 
	} 

	if (email.value.indexOf("@", 0) < 0)				 
	{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	} 

	if (email.value.indexOf(".", 0) < 0)				 
	{ 
		window.alert("Please enter a valid e-mail address."); 
		email.focus(); 
		return false; 
	} 

	if (mobile.value == "")						 
	{ 
		window.alert("Please enter your mobile number."); 
		mobile.focus(); 
		return false; 
	} 

	if (country.selectedIndex < 1)				 
	{ 
		alert("Please enter your country."); 
		country.focus(); 
		return false; 
	} 
	
	if (qualif.value == "")					 
	{ 
		window.alert("Please enter your qualification"); 
		qualif.focus(); 
		return flase; 
	} 
	if (sub.value == "")					 
	{ 
		window.alert("Please enter your subject"); 
		sub.focus(); 
		return flase; 
	} 
	if (board.value == "")					 
	{ 
		window.alert("Please enter name of the board/university"); 
		board.focus(); 
		return flase; 
	} 
	if (year.value == "")					 
	{ 
		window.alert("Please enter year of completion"); 
		year.focus(); 
		return flase; 
	} 
	if (pern.value == "")					 
	{ 
		window.alert("Please enter your percentage of marks"); 
		pern.focus(); 
		return flase; 
	} 
   if (course.selectedIndex < 1)				 
	{ 
		alert("Please enter your country."); 
		course.focus(); 
		return false; 
	} 

	return true; 
}
</script>
<body>
<h2 align="centre">STUDENT ONLINE APPLICATION FORM</h2>
<form name="RegForm" method="post" action="stud.php" onsubmit="return validateForm()" autocomplete="on"> 
<b>Personal Details</b><br>
<table bgcolor="#aed6f1"><tr><td width="200">
Name of the Candidate:</td><td width="400"><input type="text" name="name" autofocus required></td></tr>
<tr><td>Name of the father:</td><td><input type="text" name="father"></td></tr>
<tr><td>Date of Birth(DD/MM/YYYY):</td><td><input type="date" name="DOB"></td></tr>
<tr><td>Address for Communication:</td><td><textarea rows="5" cols="50" name="address"></textarea></td></tr>
<tr><td>Pincode:</td><td><input type="text" name="pincode"></td></tr>
<tr><td>Email:</td><td><input type="text" name="email" autocomplete="off"></td></tr>
<tr><td>Mobile Number:</td><td><input type="text" name="mobile"></td></tr>
<tr><td>Country:</td><td><select name="country">
  <option value="0">Select a Country</option>
  <option value="Afghanistan">Afghanistan</option>
  <option value="Australia">Australia</option>
  <option value="Belgium">Belgium</option>
  <option value="Canada">Canada</option>
  <option value="India">India</option>
  <option value="Japan">Japan</option>
  <option value="Malaysia">Malaysia</option>
</select></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="gender" value="male" checked="checked"> Male <input type="radio" name="gender" value="female"> Female</td></tr>
<tr><td>Nationality:</td><td><input type="radio" name="nationality" value="Indian" checked="checked"> Indian <input type="radio" name="nationality" value="Other"> Other</td></tr>
<tr><td>Religion:</td><td><input type="radio" name="rel" value="Hindu" checked="checked"> Hindu
<input type="radio" name="rel" value="Muslim"> Muslim
<input type="radio" name="rel" value="Christian"> Christian
<input type="radio" name="rel" value="Jainism"> Jainism
<input type="radio" name="rel" value="Buddhism"> Buddhism
</td></tr>
</table>
<b>Educational Qualification</b><br>
<table bgcolor="#aed6f1"><tr><td width="200">
Qualification:</td><td width="400"><input type="text" name="qualif"></td></tr>
<tr><td>Subject:</td><td><input type="text" name="sub"></td></tr>
<tr><td>Name of the Board/University:</td><td><input type="text" name="board"></td></tr>
<tr><td>Year of Completion:</td><td><input type="text" name="year"></td></tr>
<tr><td>Percentage of Marks:</td><td><input type="text" name="pern"></td></tr>
</table>
<b>Course Selection</b><br>
<table bgcolor="#aed6f1"><tr><td width="200">
Course Stream:</td><td width="400"><select name="course" onchange="display(this)">
  <option value="empty">Select a Course</option>
  <option value="UG">UG</option>
  <option value="PG">PG</option>
</select></td></tr><tr><td>
Course Category:</td><td><select id="category" name="coursecat">
    <option value="0">Select a Category</option>
  </select></td></tr>
<tr><td></td><td  align="left"><input type="submit" Name="submit" value="Submit"></td></tr>
</table>
</form>
</body>
</html> 
