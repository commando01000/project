<?php
    include_once 'StrategyDP.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $paytype = trim($_POST["paytype"]);
        $amount = trim($_POST["amount"]);
        $money = trim($_POST["money"]);
        $id = trim($_POST["id"]);
        $donnator_id = trim($_POST["donnator_id"]);
        if($typeofpay== "cash")
        {
            $pay1 = new donator(new Pay_With_Cash());
            $pay1->Pay($id,$donator_id,$amount,$money);
        }
        if($typeofpay== "visa")
        {
            $pay1 = new donator(new Pay_With_Visa());
            $pay1->Pay($id,$donator_id,$amount,$money);
        }
        if($typeofpay== "fawry")
        {
            $pay1 = new donator(new Pay_With_Fawry());
            $pay1->Pay($id,$donator_id,$amount,$money);
        }
       
    }
?>
