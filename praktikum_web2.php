<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Praktikum 2</title>
</head>

<body>
    <h2>PRAKTIKUM</h2>
    <form class="form" method="post">
        <label>Nama: </label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>Tanggal Lahir: </label>
        <br>
        <input type="text" name="tgl_lahir">
        <br>
        <label>Pekerjaan: </label>
        <br>
        <select name='pekerjaan'>
            <option value="-"> --- Pilih Pekerjaan --- </option>
            <option value='Content Creator'>Content Creator</option>
            <option value='Player Esport'>Player Esport</option>
            <option value='Player Football'>Player Football</option>
        </select>
        <br>
        <br>
        <button type="submit">Kirim</button>
    </form>
    <h2>HASIL</h2>

    <?php
    # Memanggil Nama
    echo 'Nama: ' . $_POST['nama'];

    # Merubah Tanggal Lahir menjadi Umur (Tahun)
    $tgl_lahir = @$_POST['tgl_lahir'];

    $lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();

    $diff = $hari_ini->diff($lahir);

    # Memanggil fungsi umur yg sudah dibuat diatas
    echo "<br> Umur: " . $diff->y . " Tahun";

    # Memanggil pekerjaan
    echo "<br> Pekerjaan: " . $_POST['pekerjaan'];

    # Kondisi if pekerjaan untuk menentukan gaji
    $pekerjaan = @$_POST['pekerjaan'];

    if ($pekerjaan == "Content Creator") {
        echo '<br> Gaji: Rp. 5.000.000,-';
    } elseif ($pekerjaan == "Player Esport") {
        echo '<br> Gaji: Rp. 6.000.000,-';
    } elseif ($pekerjaan == "Player Football") {
        echo '<br> Gaji: Rp. 13.000.000,-';
    }

    ?>
</body>

</html>