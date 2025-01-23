<form action="actions/insert.php" method="post">
    <table border="0">
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input required type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat</label></td>
            <td><input required type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td><label for="ttlahir">Tempat Tanggal Lahir</label></td>
            <td><input required type="text" name="ttlahir" id="ttlahir"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td><select name="jenis_kelamin" id="jenis_kelamin">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select></td>
        </tr>
        <tr>
            <td><label for="no_hp">Nomor Hp</label></td>
            <td><input required type="number" name="no_hp" id="no_hp"></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td><select name="jurusan" id="jurusan">
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TEI">Teknik Elektronika Industri</option>
                </select></td>
        </tr>
        <tr>
            <td><input required type="submit" name="insert" value="Simpan Data"></td>
        </tr>
    </table>
</form>