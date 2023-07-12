<?php 

    class Email extends Comunication{
        public $attachment;
        private $deliveryNotify; // booleano
        public static $ledColor = 'yellow';

        function __construct( String $sender, String $reciver, String $msgObject, String $content, String $attachment, Bool $deliveryNotify ){
            parent::__construct($sender, $reciver, $msgObject, $content);
            $this->attachment = $attachment;
            $this->deliveryNotify = $deliveryNotify;
        }

        public function getDeliveryNotify(){
            return $this->deliveryNotify;
        }

        public function getForwad(){
            return '<i class="fa-solid fa-share-from-square"></i>';
        }
        
        public function getPrint() {
            return '<i class="fa-solid fa-print"></i>';
        }
        
        public function getSend(){
            return '<i class="fa-regular fa-paper-plane"></i>';
        }
        
    }


?>