<?php

$string = file_get_contents('./todolist.json');

$to_do_list = json_decode($string, true);

/* $to_do_list = [
    [
        'to_do' => 'Spesa',
        'done' => false
    ],
    [
        'to_do' => 'Spesa',
        'done' => false
    ],
    [
        'to_do' => 'Spesa',
        'done' => false
    ],
    [
        'to_do' => 'Spesa',
        'done' => false
    ],
    [
        'to_do' => 'Spesa',
        'done' => false
    ],
]; */

$new_to_do = [
    'to_do' => 'Spazzatura',
    'done' => false
];

array_push($to_do_list, $new_to_do);
$todolist_json = json_encode($to_do_list);

/* var_dump($to_do_list); */

header ('Content-Type: application/json');

echo json_encode($to_do_list);

?>