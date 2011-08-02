<?php
$this->posts = $this->db->prepare(
    'SELECT * FROM posts LIMIT 20;'
)->query()->fetchAll();
