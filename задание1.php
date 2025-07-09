<?php

// 1 и 2 задания
function sumArray($arr) {
    if (empty($arr)) {
        return 0;
    }
    return array_sum($arr);
}

// 3 задание
function maxInArray($arr) {
    if (empty($arr)) {
        return null;
    }
    return max($arr);
}

// 4 задание
function countUnique($arr) {
    return count(array_unique($arr));
}

// Примеры использования
$numbers = [1, 2, 2, 3, 4, 5];

echo "Сумма: " . sumArray($numbers) . "<br>";
echo "Максимум: " . maxInArray($numbers) . "<br>";
echo "Уникальных элементов: " . countUnique($numbers) . "<br>";

?>
