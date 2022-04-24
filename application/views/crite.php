<html>
<head>
 <title>Form Input vibes</title>
</head>
<body>
 <center>
 <?php echo validation_errors(); ?>
 <form action="<?= base_url('vibes/cetak'); ?>"
method="post">
 <table>
 <tr>
 <th colspan="3">
 crite
 </th>
 </tr>
 <tr>
 <td colspan="3">

<hr>

 </td>
 </tr>

 <tr>
 <th>nama </th>
 <th>:</th>
 <td>
 <input type="text" name="nama" id="nama">
 </td>
 </tr>

 <tr>
 <th>nis</th>
 <td>:</td>
 <td>
 <input type="text" name="nis" id="nis">
 </td>
 </tr>

 <tr>
 <th>kelas</th>
 <td>:</td>
 <td>
<input type="text" name="kelas" id="kelas">
 </td>
 </tr>

 <tr>
<th>tanggal lahir</th>
 <td>:</td>
 <td>
<input type="date" name="tanggal" id="tanggal">
 </td>
 </tr>


 <tr>
<th>tempat lahir</th>
 <td>:</td>
 <td>
<input type="text" name="tempat" id="tempat">
 </td>
 </tr>


 <tr>
<th>alamat</th>
 <td>:</td>
 <td>
<input type="text" name="alamat" id="alamat">
 </td>
 </tr>

 <tr>
<th>jenis kelamin</th>
 <td>:</td>
 <td>
<input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki
<input type="radio" name="jenis_kelamin" value="perempuan"> perempuan
 </td>
 </tr>


 <tr>
 <th>agama</th>
 <td>:</td>
 <td>
 <select name="agama" id="agama">
 <option value="">Pilih </option>
 <option value="islam">islam </option>
 <option value="kristen">kristen</option>
 <option value="katolik">katolik</option>
 <option value="budha">budha</option>
 <option value="hindu">hindu</option>
 <option value="khonghucu">khonghucu</option>
 </select>
 </td>
 </tr>
 <tr>
 <td colspan="3" align="center">
 <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html>