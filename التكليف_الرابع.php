<?php
/*
bindParam
يربط المتغير نفسه بالاستعلام

يتم أخذ القيمة عند تنفيذ execute()

أي تغيير على المتغير بعد الربط يؤثر على الاستعلام

مفيد داخل الحلقات (loops)
مثال:
*/
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");

$id = 1;
$stmt->bindParam(':id', $id);

$id = 5; // سيتم استخدام 5
$stmt->execute();

/*

bindValue
يربط القيمة مباشرة

لا يتأثر بتغيير المتغير بعد الربط

أوضح وأكثر أمانًا في الحالات الحساسة

مثال:
*/

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");

$id = 1;
$stmt->bindValue(':id', $id);

$id = 5; // لا يؤثر
$stmt->execute();


/*
السيناريو الحرج (Critical Scenario)
مثال: تحويل رصيد بين حسابين

العمليات:
 خصم مبلغ من الحساب الأول
 إضافة المبلغ للحساب الثاني

 إذا نجحت الأولى وفشلت الثانية → خلل خطير في البيانات



*/
$pdo->exec("UPDATE accounts SET balance = balance - 100 WHERE id = 1");
$pdo->exec("UPDATE accounts SET balance = balance + 100 WHERE id = 2");
//لو فشل الاستعلام الثاني → ضاع المال


//التنفيذ الصحيح باستخدام Transactions

try {
    $pdo->beginTransaction();

    $stmt1 = $pdo->prepare(
        "UPDATE accounts SET balance = balance - :amount WHERE id = :from"
    );
    $stmt1->bindValue(':amount', 100);
    $stmt1->bindValue(':from', 1);
    $stmt1->execute();

    $stmt2 = $pdo->prepare(
        "UPDATE accounts SET balance = balance + :amount WHERE id = :to"
    );
    $stmt2->bindValue(':amount', 100);
    $stmt2->bindValue(':to', 2);
    $stmt2->execute();

    $pdo->commit(); // تأكيد العمليات
} catch (Exception $e) {
    $pdo->rollBack(); // إلغاء كل شيء
}
/*

لماذا نستخدم bindValue داخل المعاملات؟

يمنع التلاعب بالقيم أثناء التنفيذ

يقلل الأخطاء

أوضح في الكود الحساس (أموال – صلاحيات – حجوزات)

خلاصة

bindParam → يربط متغير

bindValue → يربط قيمة

المعاملات تحمي البيانات في الحالات الحرجة

أي عملية مالية أو حساسة = Transaction + bindValue

*/

?>
