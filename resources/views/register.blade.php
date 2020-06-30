<!DOCTYPE html>
<html>
<body>

<h2>Buat Account Baru!</h2>
<h3>Sign Up Form</h3> 

<!-- membuat form -->
<!-- membuat nama -->
<form method="get" action="/welcome1">
  <label for="fname">First name:</label><br>
    <input type="text" placeholder="First Name" value="First name" id="Firts Name" name="firstname"><br>
  <label for="lname">Last name:</label><br>
    <input type="text" placeholder="Last Name" value="Last ame" id="Last Name" name="lastname"><br><br>
<!-- akhir membuat nama -->

<!-- membuat gender -->
  <Label><b>Gender:</b></Label><br>
    <input type="radio" name="gender" value="male" checked>Male<br>
    <input type="radio" name="gender" value="female">Female<br><br>
<!-- akhir membuat gender -->

<!-- membuat nationality -->
  <Label><b>Nationality:</b></Label>
  <select >
    <option value="indonesian">Indonesia</option>
    <option value="singaporean">Singaporean</option>
    <option value="malaysian">Malaysian</option>
    <option value="australian">Australian</option>
  </select><br><br>
<!-- akhir membuat nationality -->

<!-- akhir membuat bahasa -->
 <Label><b>Language Spoken:</b></Label><br>
 <input type="checkbox" name="languange spoken" value="bahasa indonesia" checked>Bahasa Indonesia<br>
  <input type="checkbox" name="languange spoken" value="english">English<br>
  <input type="checkbox" name="languange spoken" value="other">Other<br><br>
<!-- akhir membuat bahasa -->

<!-- akhir membuat bio -->
 <Label><b>Bio:<b></Label><br>
 <textarea name="pesan" rows="10" cols="30" placeholder="Silahkan tulis bio anda di sini"></textarea><br>
 <!-- akhir membuat bio -->

 <input type="submit" value="Sign Up">

</form> 
<!-- akhir membuat form -->
</body>
</html>
