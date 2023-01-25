<?php
$page_id = $_REQUEST['page_id']) ??  null;
$s_page_id = $_SESSION['$page_id'] ?? null;

if ($page_id != $s_page_id) {
    // TODO: replace with redirect to 1st page of wizard
    $cont = false;
}
