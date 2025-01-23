<?php 
    include("configs/databases/connect.php");
    $nis = mysqli_real_escape_string($conn, htmlspecialchars(trim($_GET["nis"])));
    $sql = "SELECT * FROM siswa WHERE nis = $nis";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
?>
<form action="actions/edit.php" method="post">
    <table border="0">
        <input value="<?= $result['nis'] ?>" required type="hidden" name="nis" id="nama" >
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input value="<?= $result['nama'] ?>" required type="text" name="nama" id="nama" ></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><input value="<?= $result['alamat'] ?>" required type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td><label for="ttlahir">Tempat Tanggal Lahir</label></td>
            <td><input value="<?= $result['tempat_tanggal_lahir'] ?>" required type="text" name="ttlahir" id="ttlahir"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td><select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="L"<?php if($result["jenis_kelamin"] == "L") {echo "selected";} ?>>Laki-Laki</option>
                    <option value="P" <?php if($result["jenis_kelamin"] == "P") {echo "selected";} ?>>Perempuan</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="no_hp">Nomor Hp</label></td>
            <td><input value="<?= $result['no_hp'] ?>" required type="number" name="no_hp" id="no_hp"></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td><select name="jurusan" id="jurusan">
                    <option value="RPL" <?php if($result["jurusan"] == "RPL") {echo "selected";} ?>>Rekayasa Perangkat Lunak</option>
                    <option value="TEI" <?php if($result["jurusan"] == "TEI") {echo "selected";} ?>>Teknik Elektronika Industri</option>
                </select></td>
        </tr>
        <tr>
            <td><input required type="submit" name="update" value="Edit Data"></td>
        </tr>
    </table>
</form>