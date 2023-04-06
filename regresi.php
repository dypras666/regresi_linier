<?php 

// Data penggunaan BBM
$x = array(10, 20, 30, 40, 50); // jarak tempuh
$y = array(1.5, 3.2, 4.8, 6.3, 8.2); // jumlah BBM yang digunakan

// Hitung jumlah data
$n = count($x);

// Hitung rata-rata jarak tempuh dan jumlah BBM yang digunakan
$sum_x = array_sum($x);
$sum_y = array_sum($y);
$avg_x = $sum_x / $n;
$avg_y = $sum_y / $n;

// Hitung nilai m (slope) dan b (intercept)
$sum_xy = 0;
$sum_xx = 0;
for ($i = 0; $i < $n; $i++) {
  $sum_xy += ($x[$i] - $avg_x) * ($y[$i] - $avg_y);
  $sum_xx += ($x[$i] - $avg_x) * ($x[$i] - $avg_x);
}
$m = $sum_xy / $sum_xx;
$b = $avg_y - $m * $avg_x;

// Hitung nilai prediksi
$x_test = 10; // jarak tempuh untuk prediksi
$y_pred = $m * $x_test + $b; // prediksi jumlah BBM yang digunakan

// Tampilkan hasil
echo "Nilai m (slope) = " . number_format($m, 2) . "\n";
echo "Nilai b (intercept) = " . number_format($b, 2) . "\n";
echo "Nilai prediksi untuk jarak tempuh " . $x_test . " km adalah " . number_format($y_pred, 2) . " liter.";
?>
