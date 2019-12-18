<?php

//Задача: Получить  все  четырехзначные  числа,  в  записи  которых  встречаются только цифры 0,2,3,7.

//Функция поиска вхождения цифр в число
function isNums(int $number): bool
{
    while ($number>0) {
        return $number%10 == 0 || $number%10 == 2 || $number%10 ==3 || $number%10 == 7?
            isNums($number/10) :
            false;
    }
    return true;
}

//перебор чисел
for ($i=1000; $i<10000;$i++) {
    if (isNums($i)){
        echo $i."\n";
    }
}
