<?php

// JSON çıktısı
$json = '{
  "success": true,
  "message": "Bu Api LatesCheck İçin Yapılmış Uygulamanın Version Kontrolü Apisidir",
  "surum": "3.0"
}';

// JSON çıktısını diziye dönüştürme
$data = json_decode($json, true);

// Başarı durumunu kontrol etme
if ($data['success']) {
    // Mesajı ekrana yazdırma
    echo "Mesaj: " . $data['message'] . "\n";
    // Sürümü ekrana yazdırma
    echo "Sürüm: " . $data['surum'] . "\n";
} else {
    // Başarısız durumda hata mesajını ekrana yazdırma
    echo "Hata: API başarısız oldu.\n";
}
?>