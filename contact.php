<?php
header('Content-Type: application/json; charset=utf-8');

$config = require_once __DIR__ . '/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Geçersiz istek yöntemi.']);
    exit;
}

// Girdi temizleme (filter_var ile her ortamda güvenli)
$name = trim(filter_var($_POST['name'] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));
$email = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$scope = trim(filter_var($_POST['scope'] ?? 'Genel', FILTER_SANITIZE_SPECIAL_CHARS));
$budget = trim(filter_var($_POST['budget'] ?? 'Standart', FILTER_SANITIZE_SPECIAL_CHARS));
$notes = trim(filter_var($_POST['notes'] ?? '', FILTER_SANITIZE_SPECIAL_CHARS));

// Doğrulama
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Lütfen geçerli bir isim ve e-posta adresi girin.']);
    exit;
}

if (empty($notes)) {
    echo json_encode(['success' => false, 'message' => 'Lütfen proje veya mesaj detaylarınızı belirtin.']);
    exit;
}

$newMessage = [
    'id' => uniqid('msg_'),
    'date' => date('Y-m-d H:i:s'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1',
    'name' => $name,
    'email' => $email,
    'scope' => $scope,
    'notes' => $notes,
];

// Local test için mesajı data/messages.json dosyasına kaydet
$dataFile = __DIR__ . '/data/messages.json';
$messages = [];

if (file_exists($dataFile)) {
    $existing = json_decode(file_get_contents($dataFile), true);
    if (is_array($existing)) {
        $messages = $existing;
    }
}

array_unshift($messages, $newMessage);
file_put_contents($dataFile, json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

// Canlı Plesk sunucusunda e-posta bildirimi (opsiyonel)
$to = $config['contact']['email'] ?? '';
$isLocal = in_array($_SERVER['SERVER_NAME'] ?? '', ['localhost', '127.0.0.1', '']);

if (!empty($to) && filter_var($to, FILTER_VALIDATE_EMAIL) && !$isLocal) {
    $subject = "Yeni Portfolyo Mesajı ({$scope}) - {$name}";
    $body = "Ad Soyad: {$name}\nE-posta: {$email}\nKonu / İlgi Alanı: {$scope}\n\nMesaj:\n{$notes}\n\nTarih: " . date('d.m.Y H:i:s');
    $headers = "From: noreply@sametuzun.com.tr\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8\r\n";
    @mail($to, $subject, $body, $headers);
}

echo json_encode([
    'success' => true,
    'message' => 'Harika! Mesajınız başarıyla iletildi. En kısa sürede sizinle iletişime geçeceğim.',
]);
