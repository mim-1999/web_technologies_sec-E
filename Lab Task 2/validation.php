<!DOCTYPE html>
<html>
<head>
<style>
.error
{
color: RED;
}
</style>
</head>
<body>

<?php
$name = $email = $dd= $mm=$yyyy=$gender=$degree= $bg="";
$nameErr= $emailErr = $dobErr=$genderErr =$subjectErr = $degreeErr= $bgErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if(empty($_POST["name"])){
$nameErr="Name is requied";
}
else
{
$name = test_input($_POST["name"]);
if( preg_match("/^[0-9]/", $name))
{$nameErr="Must start with letter";}
else if (!preg_match("/^[a-zA-Z-. ?!]{2,}$/",$name)) {
{$nameErr = "At least two words and can only contain letters,period,dash";}
}
}

if(empty($_POST["email"])) {
$emailErr = "Email is required";
}
else
{
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format. Format: example@something.com";}
}

 if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"])){
$dobErr="Full Date of birth input is requied";
$dd = test_input($_POST["dd"]);
$mm = test_input($_POST["mm"]);
$yyyy = test_input($_POST["yyyy"]);
}
else
{
$dd = test_input($_POST["dd"]);
$mm = test_input($_POST["mm"]);
$yyyy = test_input($_POST["yyyy"]);

 if( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
'min_range' => 1,
'max_range' => 31
)))|!filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
'min_range' => 1,
'max_range' => 12
)))|!filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
'min_range' => 1953,
'max_range' => 1998
))))
{$dobErr="Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1953-1998)";}
}

if(!isset($_POST["gender"]))
{
$genderErr="At least one of them must be selected";
}
if(!isset($_POST["degree"]))
{
$degreeErr="Must be selected";
}
else if (sizeof($_POST["degree"])<2)
{
$degreeErr="At least two must be selected";
}

if(!isset($_POST["bg"]))
{
$bgErr="Must be selected";
}
else
{
if($_POST["bg"]=="blank")
{
$bgErr="Must be selected";
}
}

}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"style="padding-top: 10px">
<fieldset style="width: 300px;">
NAME:<input type="text" name="name" value="<?php echo $name;?>" >
     <span class="error">* <?php echo $nameErr;?> </span><br>
</fieldset>
<br>
<fieldset style="width: 300px;">
EMAIL :<input type="text" name="email" value="<?php echo $email;?>">
       <span class="error">* <?php echo $emailErr;?></span><br>
</fieldset>
<br>
<fieldset style="width: 300px;">
DATE OF BIRTH:
<table>
<tr style="text-align: center;">
<th style="font-weight: normal;"><label for="dd" >dd</label></th>
<th></th>
<th style="font-weight: normal;"><label for="mm" >mm</label></th>
<th></th>
<th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
<th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 30px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 30px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 30px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px">
<span class="error">* <?php echo $dobErr;?></span></td>
</tr>
</table>
</fieldset>
<br>
<fieldset style="width: 300px;">
GENDER:
<input type="radio" name="gender"<?php if(isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<br>
<span class="error" >* <?php echo $genderErr;?></span >
</fieldset>
<br>
<fieldset style="width: 300px;">
DEGREE:
<input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
<input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
<input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
<input type="checkbox" id="degree" name="degree[]" value="msc"> MSc
<br>
<span class="error" >* <?php echo $degreeErr;?></span>
</fieldset>
<br>
<fieldset style="width: 300px;">
BLOOD GROUP:
<select name="bg" id="bg">
<option value="blank">Select</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
<br>
<span class="error" >* <?php echo $bgErr;?></span>
</filedset>
<br><br>
<input type="submit" name="submit" value="submit">

</form>
</body>
</html>