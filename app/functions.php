<?php

function loadJson($file) {
    if (!file_exists($file)) {
        file_put_contents($file, "[]");
    }

    return json_decode(file_get_contents($file), true);
}

function saveJson($file, $data) {
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

function findUser($username, $password) {
    $users = loadJson(__DIR__ . "/usersData.json");

    foreach($users as $u) {
        if($u["username"] === $username && password_verify($password, $u["password"])) {
            return true;
        }
    }
    return false;
}