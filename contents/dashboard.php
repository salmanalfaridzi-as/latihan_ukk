<?php 
    include("configs/databases/connect.php");

    $sql = "SELECT * FROM siswa";
    $results = mysqli_query($conn, $sql);
?>

<table border="1" cellspacing="0" cellpadding="8" width="90%">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>TTL</th>
        <th>Jenis Kelamin</th>
        <th>No Hp</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>
<?php
    $no = 1;
    while($user_data = mysqli_fetch_assoc($results)) { 
?>
    <tr>
        <th><?= $no++ ?></th>
        <td align="center"><?= $user_data["nama"] ?></td>
        <td align="center"><?= $user_data["alamat"] ?></td>
        <td align="center"><?= $user_data["tempat_tanggal_lahir"] ?></td>
        <td align="center"><?= $user_data["jenis_kelamin"] ?></td>
        <td align="center"><?= $user_data["no_hp"] ?></td>
        <td align="center"><?= $user_data["jurusan"] ?></td>
        <td align="center">
            <a href="edit.php?nis=<?= $user_data['nis'] ?>">Edit</a>
            |
            <a href="actions/delete.php?nis=<?= $user_data['nis'] ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>
