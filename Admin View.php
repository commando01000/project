<?php
class Adminview()
{
    function ShowAdminDetails($Admin)
    {
        echo "id: ".$Admin->id;
        echo "name: ".$Admin->name;
        echo "usertypeID ".$Admin->usertypeObj->name;
        echo "username ".$Admin->username;
        echo "passwordd ".$Admin->password;
    }
}
?>
