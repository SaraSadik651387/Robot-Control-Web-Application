<?php
// تحميل مكتبة Firebase
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

// إعداد Firebase
$firebaseConfigPath = __DIR__ . '/robotcontrol-a8c92-firebase-adminsdk-fbsvc-c3d83fa559.json';
$databaseUri = 'https://robotcontrol-a8c92-default-rtdb.firebaseio.com'; // الرابط الجديد

// تهيئة Firebase
$factory = (new Factory)
    ->withServiceAccount($firebaseConfigPath)
    ->withDatabaseUri($databaseUri);

$database = $factory->createDatabase();

// استرجاع آخر قيمة من قاعدة البيانات
try {
    $directionsRef = $database->getReference('directions'); // المسار إلى البيانات
    $directions = $directionsRef->getValue(); // قراءة جميع البيانات

    if ($directions) {
        $lastDirection = end($directions); // الحصول على آخر قيمة
        echo "Last Direction: " . $lastDirection['direction'] . " at " . $lastDirection['timestamp'];
    } else {
        echo "No data found in the database.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
