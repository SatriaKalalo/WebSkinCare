<!DOCTYPE html>
<html lang="en">
<head>
    <title>SMK MUTU</title>
</head>
    <style>
        .tombolklik{
            color: black;
            background-color: cyan;
            margin-bottom: 5px;
        }
        th{ 
            color: black;
            background-color: cyan;
        }
        
        td{ 
            color: black;
            background-color: cyan;
            text-align: center;
        }
    </style>
<body>
    <br/>
    <table border="1">
        <tr>
            <th>ID nomor</th>
            <th>Nama Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from kategori");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d["id"]; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d["id"]; ?>">HAPUS</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <button class="tombolklik"><a href="kategori.php">Tambah Kelas</a></button>
</body>
</html>