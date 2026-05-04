<?php
// 1. Inisialisasi variabel (contoh nilai)
$r = 7;        // Jari-jari alas
$s = 15;       // Garis pelukis (sisi miring kerucut)
$phi = 3.14;   // Nilai pi

// 2. Menghitung Luas Alas (L = pi * r * r)
$luasAlas = $phi * $r * $r;

// 3. Menghitung Luas Permukaan (Lp = Luas Alas + (pi * r * s))
$luasPermukaan = $luasAlas + ($phi * $r * $s);

// 4. Menampilkan hasil
echo "<h2>Perhitungan Bangun Ruang Kerucut</h2>";
echo "Jari-jari (r) : $r <br>";
echo "Garis Pelukis (s) : $s <br>";
echo "----------------------------------- <br>";
echo "Luas Alas Kerucut adalah : " . $luasAlas . "<br>";
echo "Luas Permukaan Kerucut adalah : " . $luasPermukaan . "<br>";
?>