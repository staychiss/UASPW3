<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>E-Learning USU</title>
        <link rel="icon" href="usu.png">
    </head>
    
    <body>
        <h3>
            <a href="index.php">kembali</a><br>
            <p>Tambah data mahasiswa</p>
        </h3>
        <form action="tambah_proses.php" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="number" name="nim" required>  </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required> </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                    <select name="gender" required>
                        <option>Gender</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                        </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" required> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="tambah" value="Tambah">  </td>
                </tr>
            </table>
        </form>
    </body>
</html>