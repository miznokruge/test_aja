<?php
include 'koneksi.php';
//step3 : query (insert, update, delete dll)
$perintah = "select*from mapel";
$query = mysqli_query($konek, $perintah);
?>
<table border="1">
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