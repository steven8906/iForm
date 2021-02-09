<?php

$model = array(
    'name'    => $_POST['name'],
    'email'   => $_POST['email'],
    'company' => $_POST['company'],
    'phone'   => $_POST['phone'],
    'message' => $_POST['message'],
);

$res = array(
    'success' => true,
    'data'    => $model
);

header('Content-Type: application-json');
exit(json_encode($res));