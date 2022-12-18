<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>E-Learning USU</title>
        <link rel="icon" href="usu.png">
    </head>
    
    <?php
        if(isset($_GET['nim']))
        {
            include('koneksi.php');
            $nim    = $_GET['nim'];
            $cek    = mysqli_query($koneksi, "select nim from mahasiswa
            where nim = '$nim'") or die($mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi, "delete from mahasiswa where nim = '$nim'");
                if ($del)
                {
                    echo "<h3>Data mahasiswa berhasil dihapus</h3>";   
                    echo "<script>window.location = 'index.php';</script>";    
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'index.php'>Kembali </a>";
                }
            }
        }
    
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
    
    <body>
        
    </body>
</html>