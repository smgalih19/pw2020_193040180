<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040180") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['display']['name'];
    $tipe_file = $_FILES['display']['type'];
    $ukuran_file = $_FILES['display']['size'];
    $error = $_FILES['display']['error'];
    $tmp_file = $_FILES['display']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //     alert('Pilih gambar terlebih dahulu!');
        // </script>";
        return 'noimage.jpg';
    }

    // cek ekstensi file
    $daftar_display = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_display)) {
        echo "<script>
                alert('Yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Yang anda pilih bukan gambar!');
            </script>";
        return false;
    }

    // cek ukuran file 
    // max 5Mb = 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran file terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/product/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    // $display = htmlspecialchars($data['display']);

    // upload gambar
    $display = upload();
    if (!$display) {
        return false;
    }

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

function hapus($id)
{
    $conn = koneksi();

    $apr = query("SELECT * FROM apparel WHERE id_apparel = $id")[0];
    if ($apr['display'] != 'noimage.jpg') {
        unlink('../assets/img/product/' . $apr['display']);
    }
    mysqli_query($conn, "DELETE FROM apparel WHERE id_apparel = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $apr = htmlspecialchars($data['id']);
    $display_lama = htmlspecialchars($data['display_lama']);

    $display = upload();
    if (!$display) {
        return false;
    }

    if ($display == 'noimage.jpg') {
        $display = $display_lama;
    }

    $jenis_apparel = htmlspecialchars($data['jenis_apparel']);
    $merk = htmlspecialchars($data['merk']);
    $ukuran = htmlspecialchars($data['ukuran']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE apparel
                SET
                display = '$display',
                jenis_apparel = '$jenis_apparel',
                merk = '$merk',
                ukuran = '$ukuran',
                harga = '$harga'
                WHERE id_apparel = '$apr'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM apparel 
            WHERE
                display LIKE '%$keyword%' OR
                jenis_apparel LIKE '%$keyword%' OR
                merk LIKE '%$keyword%' OR
                ukuran LIKE '%$keyword%' OR
                harga LIKE '%$keyword%'
                ";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<cript>
            alert('sername sudah digunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
