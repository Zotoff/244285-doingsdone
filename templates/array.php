<?php


$project = ["Все", "Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

$task_list = [
['title' => 'Собеседование в IT компании',
'Date' => '01.06.2107',
'project' => 'Работа',
'status' => 'No'
],
['title' => 'Выполнить тестовое задание',
'Date' => '25.05.2017',
'project' => 'Работа',
'status' => 'No'
],
['title' => 'Сделать задание первого раздела',
'Date' => '21.04.2017',
'project' => 'Учеба',
'status' => 'Yes'
],
['title' => 'встреча с другом',
'Date' => '22.04.2017',
'project' => 'Входящие',
'status' => 'No'
],
['title' => 'Купить корм для кота',
'Date' => 'нет',
'project' => 'Домашние дела',
'status' => 'No'
],
['title' => 'Заказать пиццу',
'Date' => '<script> <p>"нет"<p> </script>',  // проверка работы htmlspecialchars - НЕ работает на 05.16 13:21
'project' => 'Домашние дела',
'status' => 'No'
],
            ];

?>