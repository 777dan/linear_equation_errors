<?php
// $a = 2;
// $b = 4;
// if ($a != 0) {
//   $x = -$b / $a;
//    echo "<p>Корень: <span style='color:blue;'>$x</span></p>";
// }
// else {
//   if ($b == 0)
//     echo "<p style='color:blue;'>Бесчисленное множество решений</p>";
//  else
//    echo "<p style='color:red;'>Нет решений</p>";
// }

function errorHandler1($errno)
{
    echo "Произошла ошибка с кодом $errno\n<br>";
    echo "Текст ошибки: Бесчисленное множество решений";
}

function errorHandler2($errno)
{
    echo "Произошла ошибка с кодом $errno\n<br>";
    echo "Текст ошибки: Нет решений";
}

set_error_handler("errorHandler1");
set_error_handler("errorHandler2");

$a = 0;
$b = 0;

if ($a != 0) {
    $x = -$b / $a;
    echo "<p>Корень: <span style='color:blue;'>$x</span></p>";
} else {
    if ($b == 0) trigger_error("errorHandler1");
    else trigger_error("errorHandler2");
}
