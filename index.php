<?php
$ip_address = $_SERVER['REMOTE_ADDR'];

// Đường dẫn đến tệp tin (có thể là tệp mới hoặc tệp đã có sẵn)
$file = 'ips.txt';
file_put_contents($file, $ip_address.PHP_EOL, FILE_APPEND);

date_default_timezone_set('Asia/Ho_Chi_Minh');
$current_time = date("Y-m-d H:i:s");

// Mở tệp tin trong chế độ "a" (append - thêm nội dung vào cuối tệp)
$handle = fopen($file, 'a');

// Kiểm tra nếu mở tệp thành công
if ($handle) {
    // Ghi thời gian hiện tại vào tệp tin, kèm theo xuống dòng
    fwrite($handle, "Current Time: " . $current_time . "\n");

    // Đóng tệp tin sau khi ghi xong
    fclose($handle);

    echo "Đã ghi thời gian vào tệp tin thành công!";
} else {
    echo "Không thể mở tệp tin.";
}

header("Location: https://vfin.com.vn/");
exit();
?>