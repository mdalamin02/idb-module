
<?php

$date1 = new DateTime("2020-02-02");
$date2 = new DateTime("2025-07-05");

$diff = $date1->diff($date2);

echo "Difference:" . $diff->format('%y Year, %m Month, %d Days');
echo "<br>";

$now = new DateTime();
$olddate = new DateTime("2000-07-19");

$diff = $olddate->diff($now);
echo "Your Job Life is:" . $diff->format("%y Years, %m Months, %d Days");
echo "<br>";

$date1 = new DateTime("2025-07-01");
$date2 = new DateTime("2025-07-12");

$diff = $date1->diff($date2);

echo "Total Days:" . $diff->days;

echo "<br>";

$olddate = new DateTime("2024-06-05");
$now = new DateTime("2025-05-12");

$diff = $olddate->diff($now);

echo "Total Days:" . $diff->days;

echo "<br>";
$olddate = new DateTime("2024-06-05");
$now = new DateTime();

$diff = $olddate->diff($now);

if ($diff->y >= 1) {
    echo "Yes, the difference is more than or equal to 1 year";
} else {
    echo "No, the differnce is not more than 1 year";
}
?>
