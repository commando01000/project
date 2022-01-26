<?php
class Adminview()
{
    function ShowAdminDetails($Admin)
    {
        echo "username:". " " . $Admin->username . " ";
        echo "usertypeID:". " " .$Admin->usertype_id->name . " ";
        echo "password:". " " . $Admin->password . " ";
    }
}
?>
