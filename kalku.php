<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(isset($_POST["kirim"])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $aksi = $_POST['aksi'];
        switch ($aksi) {
            case 'tambah':
                $output = $bil1 + $bil2;
                break;
            case 'kurang':
                $output = $bil1 - $bil2;
                break;
            case 'bagi':
                $output = $bil1 / $bil2;
                break;
            case 'kali':
                $output = $bil1 * $bil2;
                break;
        }
    }
    ?>
    <form method="POST">
        <div class="kal">
            <h1>Kalkulator</h1>
                <hr>
                     <p>Bilangan pertama:</p>
                        <input class="FormInput" type="number" name="bil1">
                     <p>Bilangan kedua:</p>
                        <input class="FormInput" type="number" name="bil2">
                     <p>aksi</p>
                        <select class="FormSelect" name="aksi">
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            <option value="bagi">/</option>
                            <option value="kali">*</option>
                        </select>
                        <button type="submit" name="kirim">Hitung</button>
                        <button type="submit"><a href="index.html">Kembali</a></button> 
                        <?php
                        if(empty($output)) {
                            $hasil = 0;
                        } else {
                            $hasil = $output;
                        }
                        ?>
                        <input class="FormHasil" type="number" value="<?= $hasil ?>" readonly>
        </div>
    </form>
</body>
</html>