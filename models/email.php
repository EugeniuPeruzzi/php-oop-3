<?php 

    class Email extends Comunication{
        public $attachment;
        private $deliveryNotify; // booleano
        public static $ledColor;

        function __construct( String $sender, String $reciver, String $msgObject, String $content, String $attachment, Bool $deliveryNotify ){
            parent::__construct($sender, $reciver, $msgObject, $content);
            $this->deliveryNotify = $deliveryNotify;
        }

        public function getDeliveryNotify(){
            return $this->deliveryNotify;
        }

        public function getForwad(){
            return 'Message forwarder';
        }
        public function getPrint() {
            return 'Message printed';
        }

    }


?>