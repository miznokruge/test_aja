<?php
include 'koneksi.php';
//step3 : query (insert, update, delete dll)
$perintah = "select*from mapel";
$query = mysqli_query($konek, $perintah);
?>
<html>
    <head>
        <title>Mata pelajaran</title>
        <style>
            table{
                background: #fff;
                width:100%;
            }
            table tr:nth-child(even) td{
                background: #f2f2f2;
            }
            table tr:nth-child(odd) td{
                background: #fff;
            }


        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>ID</td>
                <td>Kode</td>
                <td>Nama</td>
            </tr>
            <?php
            while ($hasil = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $hasil['id']; ?></td>
                    <td><?php echo $hasil['kode']; ?></td>
                    <td><?php echo $hasil['nama']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>