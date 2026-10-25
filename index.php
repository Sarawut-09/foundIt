<?php
// Serve the homepage directly. A permanent redirect to index.html can remain
// cached by browsers or point to a missing file after an incomplete upload.
$homepage = __DIR__ . '/index.html';

if (is_file($homepage)) {
    readfile($homepage);
    exit;
}

http_response_code(404);
?><!doctype html>
<html lang="th">
<meta charset="utf-8">
<title>ไม่พบหน้าแรก | FoundIt</title>
<p>ไม่พบไฟล์หน้าแรก กรุณาตรวจสอบว่าอัปโหลด index.html ไว้ในโฟลเดอร์เว็บไซต์แล้ว</p>
