<?php
// 1. Միացնում ենք Database ֆայլը
include_once 'Database.php';

// 2. Ստեղծում ենք օբյեկտը և միանում բազային
$database = new Database();
$db = $database->getConnection();

// 3. Ստուգում ենք՝ արդյոք կապը կա
if($db) {
    echo "<h1>Շնորհավորում եմ:</h1>";
    echo "<p>Տվյալների բազայի կապը հաջողությամբ հաստատվեց:</p>";
} else {
    echo "Կապ հաստատել չհաջողվեց:";
}
?>
