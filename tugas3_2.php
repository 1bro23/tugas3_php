<?php
  echo "Tabungan Awal = Rp 150000</br>";
  echo "Bunga Setahun = 12.5%</br>";
  echo "Total Tabungan Setahun = ?</br>";
  echo "Jawaban : Rp ...</br>";
  echo "Jawab : </br>";
  $tabungan = 150000;
  $bunga = 12.5/100;
  $jumlahtab = $tabungan*(1+$bunga);
  echo "Jumlah Tabungan = tabungan * (1+bunga) = $tabungan * (1+$bunga) = Rp. $jumlahtab";
?>
