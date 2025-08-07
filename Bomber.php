<?php
// شروع کردن جلسه
session_start();

// مسیر فایل شمارش بازدیدها و فایل کاربران آنلاین
$visitor_file = 'visitor_count.txt';
$online_file = 'online_users.txt'; // فایل برای ذخیره کاربران آنلاین
$numbers_file = 'numbers.txt';  // فایل برای ذخیره شماره‌ها

// اگر فایل شمارش بازدیدها وجود ندارد، آن را ایجاد و مقدار اولیه 0 را در آن ذخیره کنید
if (!file_exists($visitor_file)) {
    file_put_contents($visitor_file, "0");
}

// خواندن تعداد بازدیدها از فایل
$visitor_count = (int)file_get_contents($visitor_file);

// بررسی اینکه آیا این کاربر قبلاً وارد شده است یا خیر
if (!isset($_SESSION['visited'])) {
    // اگر کاربر وارد نشده باشد، تعداد بازدیدها را افزایش می‌دهیم
    $visitor_count++;

    // ذخیره تعداد جدید بازدیدها در فایل
    file_put_contents($visitor_file, $visitor_count);

    // تنظیم یک متغیر session برای اینکه مشخص کنیم این کاربر قبلاً وارد شده
    $_SESSION['visited'] = true;
}

// ذخیره کردن آی‌پی کاربر برای مدیریت کاربران آنلاین
$user_ip = $_SERVER['REMOTE_ADDR'];

// بررسی اینکه آیا کاربر قبلاً آنلاین بوده یا خیر
$online_users = file_exists($online_file) ? file($online_file, FILE_IGNORE_NEW_LINES) : [];
$online_count = count($online_users);

// اگر این کاربر در لیست آنلاین‌ها وجود ندارد، آن را به لیست اضافه می‌کنیم
if (!in_array($user_ip, $online_users)) {
    file_put_contents($online_file, $user_ip . PHP_EOL, FILE_APPEND);
}

// خواندن تعداد کاربران آنلاین از فایل
$online_users = file($online_file, FILE_IGNORE_NEW_LINES);
$online_count = count($online_users);

// حذف کاربر از فایل آنلاین‌ها هنگام خروج یا بسته شدن صفحه
if (isset($_SESSION['online']) && $_SESSION['online'] == true) {
    register_shutdown_function(function() use ($user_ip, $online_file) {
        // حذف آی‌پی کاربر از فایل آنلاین‌ها
        $online_users = file($online_file, FILE_IGNORE_NEW_LINES);
        $online_users = array_filter($online_users, function($ip) use ($user_ip) {
            return $ip !== $user_ip;
        });
        file_put_contents($online_file, implode(PHP_EOL, $online_users) . PHP_EOL);
    });
}

// بررسی و ذخیره شماره جدید
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['phone'])) {
    $phone_number = trim($_POST['phone']);

    // خواندن شماره‌های قبلی از فایل
    if (file_exists($numbers_file)) {
        $saved_numbers = file($numbers_file, FILE_IGNORE_NEW_LINES);
    } else {
        $saved_numbers = [];
    }

    // بررسی اینکه آیا شماره وارد شده قبلاً ثبت شده است یا خیر
    if (!in_array($phone_number, $saved_numbers)) {
        // اگر شماره جدید باشد، آن را به فایل اضافه می‌کنیم
        file_put_contents($numbers_file, $phone_number . PHP_EOL, FILE_APPEND);
    }
}
?>

<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>اس ام اس بمبر</title>
</head>
<body>
    <div style="text-align: center; font-size: 20px; margin-top: 10px;">
       <h2> کل افراد وارد شده به پنل: <?php echo $visitor_count; ?></h2>
       
       <br> 
       
       <h3> کاربران آنلاین: <?php echo $online_count; ?></h3>
    </div>
    <form action="sms.php" class="bomber-form" method="POST">
        <?php
        if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
            <div id="error" class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
        <?php } elseif (isset($_GET['ok']) && $_GET['ok'] == true) { ?>
            <div id="done" class="done">ارسال پیامک ها با موفقیت به اتمام رسید</div>
        <?php } elseif (isset($_GET['okCall']) && $_GET['okCall'] == true) { ?>
            <div id="doneCall" class="done">ارسال تماس ها با موفقیت به اتمام رسید</div>
        <?php } ?>

        <div id="pending" class="pending" style="display:none;">در حال ارسال پیامک ها</div>
        <div id="pendingCall" class="pending" style="display:none;">در حال ارسال تماس ها</div>

        <h3>اس ام اس بمبر 💣</h3>
        <label for="phone">شماره تلفن(با صفر)</label>
        <input id="phone" name="phone" placeholder="09XXXXXXXXX" type="text">
        <button onclick="sending();scrollToBottom()" name="submit">پیامک</button>
        <button onclick="sendingCall();scrollToBottom()" name="call">تماس</button>
        <a href="https://tlgrm.in/ourbots_bot" target="_blank"><img alt="Sitzo.ir" class="git" src="assets/img/github.JPEG"></a>
        <label for="logText">👆 هفت ربات پر استفاده در تلگرام</label>
        <textarea id="logText" rows="7" cols="30" readonly></textarea>
    </form>
    <script>
        function sending() {
            if (document.getElementById('error') !== null) {
                let error = window.getComputedStyle(document.getElementById('error')).display;
                if (error === 'block') {
                    document.getElementById('error').style.display = 'none';
                }
            }
            if (document.getElementById('done') !== null) {
                let done = window.getComputedStyle(document.getElementById('done')).display;
                if (done === 'block') {
                    document.getElementById('done').style.display = 'none';
                }
            }
            document.getElementById("pending").style.display = "block";
        }

        function sendingCall() {
            if (document.getElementById('error') !== null) {
                let error = window.getComputedStyle(document.getElementById('error')).display;
                if (error === 'block') {
                    document.getElementById('error').style.display = 'none';
                }
            }
            if (document.getElementById('doneCall') !== null) {
                let doneCall = window.getComputedStyle(document.getElementById('doneCall')).display;
                if (doneCall === 'block') {
                    document.getElementById('doneCall').style.display = 'none';
                }
            }
            document.getElementById("pendingCall").style.display = "block";
        }

        function readLogFile() {
            fetch('log.txt')
                .then(response => response.text())
                .then(data => {
                    document.getElementById('logText').value = data;
                });
        }
        const textarea = document.getElementById('logText');
        function scrollToBottom() {
            textarea.scrollTop = textarea.scrollHeight;
        }

        readLogFile();
        setInterval(readLogFile, 1000);

        // ارسال درخواست حذف کاربر از لیست آنلاین‌ها هنگام خروج
        window.onbeforeunload = function() {
            fetch('remove_user.php', {
                method: 'POST',
                body: JSON.stringify({ ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>' })
            });
        };
    </script>
</body>
</html>
