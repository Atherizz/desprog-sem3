<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "<b>Operator Aritmatika</b><br>";
echo "Hasil Tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<b>Operator Perbandingan</b><br>";
echo "Apakah \$a == \$b? : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah \$a != \$b? : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah \$a < \$b? : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah \$a > \$b? : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah \$a <= \$b? : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah \$a >= \$b? : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";


echo "Nilai awal a: {$a} <br>";
echo "Nilai b: {$b} <br><br>";

$a += $b;
echo "Setelah a += b: {$a} <br>";

$a -= $b;
echo "Setelah a -= b: {$a} <br>";

$a *= $b;
echo "Setelah a *= b: {$a} <br>";

$a /= $b;
echo "Setelah a /= b: {$a} <br>";

$a %= $b;
echo "Setelah a %= b: {$a} <br>";


$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? ";
echo ($hasilIdentik ? "Ya" : "Tidak") . "<br>";

echo "Apakah a tidak identik dengan b? ";
echo ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";

$jumlahKursi = 45;
echo "Jumlah kursi: {$jumlahKursi}<br>";
$kursiTerisi = 28;
echo "Kursi terisi: {$kursiTerisi}<br>";
$sisaKursi = $jumlahKursi - $kursiTerisi;
$persentaseKursiKosong = ($sisaKursi / $jumlahKursi) * 100;
echo "Persentase kursi kosong: {$persentaseKursiKosong}%<br>";



$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilai);

$nilaiTersisa = array_slice($nilai, 2, -2);

$total = array_sum($nilaiTersisa);

// hitung rata-rata
$rata = $total / count($nilaiTersisa);

echo "Total nilai : $total<br>";
echo "Rata-rata nilai: $rata<br>";

$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.2 * $harga; 
}

$hargaAkhir = $harga - $diskon;

echo "Harga awal: Rp {$harga}<br>";
echo "Diskon: Rp {$diskon}<br>";
echo "Harga yang harus dibayar: Rp {$hargaAkhir}<br>";


$totalSkor = 550; 

echo "Total skor pemain adalah: {$totalSkor}<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . ($totalSkor > 500 ? "YA" : "TIDAK");



?>





