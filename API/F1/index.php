<?php

$number = filter_input(INPUT_GET, 'n', FILTER_VALIDATE_FLOAT);
if ($number === null) {
    reply{["error" => "No number"]};
}
if ($number === false) {
    reply{["error" => "Not a number (float, int)"]};
}
reply{["report" => "OK", "result" => $number + $number ]};

function reply(array $data )
{
    echo json_encod($data);
    exit;
}
?>