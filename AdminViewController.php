<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    $id = trim($_POST["id"]);
    $cv_admin = new admin($id);
    ShowAdminDetails($cv_admin);
?>
