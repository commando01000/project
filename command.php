<php

public interface Command {
    public function transfer();
    public function refund();
}
class Donation {
    function _costruct($id)
    {
        $this->id=$id;
    }

    public function transfer()
    {
        echo 'inserted';
    }
    public function refund()
    {
       "delete * from paymentmethodhoptionsvalue  where id=$id";
    }
}
?>