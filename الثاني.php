<?php
#التعامل مع الملفات في PHP
# فتح ملف
$file = fopen("test.txt", "r");
/*أوضاع الفتح الشائعة:
r   قراءة
w   كتابة (يمسح المحتوى)
a   إضافة
r+  قراءة وكتابة
قراءة ملف
*/
$content = fread($file, filesize("test.txt"));


#أو سطرًا سطرًا:

while (!feof($file)) {
    echo fgets($file);
}

# كتابة في ملف
$file = fopen("test.txt", "w");
fwrite($file, "Hello PHP");

# إغلاق الملف
fclose($file);

# اختصارات مهمة
file_get_contents("test.txt");
file_put_contents("test.txt", "Hello");

# التحقق من الملف
file_exists("test.txt");
is_file("test.txt");
filesize("test.txt");

# حذف / نسخ / إعادة تسمية
unlink("test.txt");
copy("a.txt", "b.txt");
rename("old.txt", "new.txt");

# دوال الوقت والتاريخ في PHP
# الوقت الحالي (Timestamp)
time();

# عرض التاريخ
echo date("Y-m-d");

/*
أشهر التنسيقات:

Y  السنة
m  الشهر
d  اليوم
H  الساعة
i  الدقيقة
s  الثانية


مثال:
*/
echo date("Y-m-d H:i:s");

# تحويل نص إلى وقت
strtotime("2026-01-01");
strtotime("+1 day");
strtotime("-2 hours");

# إنشاء وقت يدويًا
mktime(10, 30, 0, 1, 1, 2026);

# كائن التاريخ (DateTime)
$date = new DateTime();
echo $date->format("Y-m-d H:i:s");

# التعامل مع المنطقة الزمنية (Timezone)
# تعيين المنطقة الزمنية (مهم جدًا)
date_default_timezone_set("Asia/Aden");


# معرفة المنطقة الحالية
echo date_default_timezone_get();

# استخدام Timezone مع DateTime
$timezone = new DateTimeZone("Asia/Aden");
$date = new DateTime("now", $timezone);
echo $date->format("Y-m-d H:i:s");

# تغيير المنطقة الزمنية لكائن موجود
$date->setTimezone(new DateTimeZone("UTC"));
?>