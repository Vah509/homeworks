<?php
//<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число.
// Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
//На экран выводить результат в зависимости от значений этих переменных.
// Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.

$a = 1; $b = 0; $operator = "/";
echo $a." ".$operator. " ".$b. " = ";
if ($operator == "/" && $b == 0)echo "Error: делить на 0 нельзя";
    else {
        switch ($operator){
            case "+": echo $a+$b; break;
            case "-": echo $a-$b; break;
            case "/": echo $a/$b; break;
            case "*": echo $a*$b; break;
            case "%": echo $a%$b; break;
            default : echo "Error: Неизвесный оператор";
        }
    }

?>