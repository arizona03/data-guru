<!DOCTYPE html>
<html>
<head>
    <title>uploud gambar</title>
</head>
<body>
<form method="post" action="proses.php" enctype="multipart/form-data">
    <table>
        <tr>
            <th colspan="2">SIMPAN & TAMPIL GAMBAR</th>
        </tr>
        <tr>
            <td>Masukan Nama</td>
            <td>pilih foto</td>
        </tr>
        <tr>
            <td><input type="text" name="Nama" id="Nama" placeholder="masukan Nama" required=""> </td>
            <td><input type="file" name="foto" id="foto" required=""></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="kirim" id="kirim" value="SIMPAN"></td>
        </tr>
    </table>
</form> 

</body>
</html>