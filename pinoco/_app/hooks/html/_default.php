<?php
$this->post = $this->db->prepare(
    'SELECT * FROM posts WHERE id=?;'
)->query($this->pathargs[0])->fetchOne();

if($this->post) {
    $this->page = '_detail.html';
}
else {
    $this->notfound();
}
