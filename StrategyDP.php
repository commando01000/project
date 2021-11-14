<?php
    public class donator
    {
        public $IPay;
        function __construct($IPay)
        {
            $this->IPay = $IPay;
        }
        public function executeStrategy($x)
        {
            return $this->IPay->Pay($x);
        }
    }
    public class Pay_With_Fawry implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($x) 
        {
            
        }
    }
    public class Pay_With_Cash implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($x) 
        {
            
        }
    }
    public class Pay_With_Visa implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($x) 
        {
            
        }
    }
    public interface IPay
    {
        public function Pay($x);
    }
?>
