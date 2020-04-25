<?php 
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040180") or die("Database salah!");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    //fungsi untuk menambahkan data di dalam database
    function tambah($data)
    {
        $conn = koneksi();

        $display = htmlspecialchars($data['display']);
        $jenis_apparel = htmlspecialchars($data['jenis_apparel']);
        $merk = htmlspecialchars($data['merk']);
        $ukuran = htmlspecialchars($data['ukuran']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO apparel
                        VALUES
                        ('', '$display', '$jenis_apparel','$merk','$ukuran','$harga')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>