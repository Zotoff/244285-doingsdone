<?php

// в индекс. дает подключение файла main и массива задач, удаление тегов, буферизация, проверка наличия файла
function includePathEndArray($template_path, $task_list) {
    ob_start();
    foreach ($task_list as $task_list_key => $task) {
        if (is_file($template_path)) {
            include $template_path;
            foreach ($task as $task_key => $task_value) {
                $task_list[$task_list_key][$task_key] = htmlspecialchars($task_value);
            }
        }
        return ob_get_flush();
    }
}

//количество задач в текущем проекте
function amountTaskInProject($task_list, $nameCategory)
{

    if (!$nameCategory) {
        return 0;
    }
    if ($nameCategory == 'Все') {
        return count($task_list);
    }
    $countTask = 0;

    foreach ($task_list as $key => $value) {
        if ($value['project'] == $nameCategory) {
            $countTask++;
        }
    }
    return $countTask;
}

function searchUserByEmail($email, $users) {
    $result = null;
    
    foreach ($users as $user) {
        
        if ($user['email'] == $email) {
            $result = $user;
            break;
        }
    }
    return $result;
}