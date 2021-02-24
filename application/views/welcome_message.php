<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<h2>Form Data Mahasiswa</h2>
<form method="POST" action="<?php echo site_url('Welcome/simpan') ?>">
 <input type="text" name="nobp" placeholder="nobp">
 <br>
 <input type="text" name="nama" placeholder="nama">
 <br>
 <select name="jurusan">
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Sistem Komputer">Sistem Komputer</option>
 </select>
 <br>
 <input type="text" name="alamat" placeholder="alamat">
 <br><br>
 <button type="submit">Simpan Data</button>
 &nbsp;
 <a href="<?php echo site_url('Welcome/tampil') ?>">Cetak Data</a>
</form>
</html>