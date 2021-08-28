<?php
  echo "Jarak kota A - Z = 360 Km</br>";
  echo "Kecepatan motor = 90</br>";
  echo "Waktu tempuh = ?</br>";
  echo "Jawaban : ... Menit</br>";
  echo "Jawab : </br>";
  $jarak = 360;
  $kec = 90;
  $lamajam = $jarak/$kec;
  $lamamen = $lamajam * 60;
  echo "Lama perjalanan = jarak/kecepatan = $jarak/$kec = $lamajam jam = $lamamen menit";
?>
