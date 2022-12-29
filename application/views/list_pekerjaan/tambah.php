<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?=base_url()?>list_pekerjaan/insert" method="POST">
  <label for="fnam">Nama Les:</label><br>
  <input type="text" id="nama_les" name="nama_les" value=""><br>
  <label for="lname">Durasi:</label><br>
  <input type="text" id="durasi" name="durasi" value=""><br><br>
    <label for="lname">Pengajar:</label><br>
  <input type="text" id="pengajar" name="pengajar" value=""><br><br>
  <input type="submit" value="insert">
</form> 
  <br>
  <a href="<?=base_url()?>list_pekerjaan">
  <input type="button" value="Cancel">
</a>
</body>
</html>