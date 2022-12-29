<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?=base_url()?>list_pekerjaan/save" method="POST">
  <input type="hidden" id="id" name="id" value="<?=$data_list_pekerjaan->id?>"><br>
  <label for="fnam">Nama Les:</label><br>
  <input type="text" id="nama_les" name="nama_les" value="<?=$data_list_pekerjaan->nama_les?>"><br>
  <label for="lname">Durasi:</label><br>
  <input type="text" id="durasi" name="durasi" value="<?=$data_list_pekerjaan->durasi?>"><br><br>
    <label for="lname">Pengajar:</label><br>
  <input type="text" id="pengajar" name="pengajar" value="<?=$data_list_pekerjaan->pengajar?>"><br><br>
  <input type="submit" value="Update">
</form> 
  <br>
  <a href="<?=base_url()?>list_pekerjaan">
  <input type="button" value="Cancel">
</a>
</body>
</html>

