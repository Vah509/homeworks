<?php

 $name = "Vahtang";
 $age = 60;
 echo "Меня зовут:{$name} <br>";
 echo "Мне {$age} года<br>";

//6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии,
// что значение переменной age больше 59.

if ($age >= 18 && $age <= 59) echo "Вам еще работать и работать";
 else if ($age > 59 ) echo "Вам пора на пенсию";

?>