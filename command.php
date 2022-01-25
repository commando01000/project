<php

interface Command {
    public function execute();
    public function undo();
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