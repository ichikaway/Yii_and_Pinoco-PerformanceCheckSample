<?php
header("Content-Type: text/html;charset=utf-8");

$this->db = Pinoco::newObj('Pinoco/PDOWrapper.php/Pinoco_PDOWrapper',
    'mysql:host=localhost;dbname=blog;',
    'ichikawa', 'hogehoge'
);
$this->db->setAfterConnection(function($owner) {
    $owner->execute("SET NAMES utf8;");
});
