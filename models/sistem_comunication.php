<?php 
    // metodi tutti publici 
    // padre privato
    class Comunication {
        private $sender;
        private $reciver;
        private $msgObject;
        private $content;
        public $notification = 'DRIN DREN DRUN';
        
        function __construct(String $sender, String $reciver, String $msgObject, String $content){
            $this->sender = $sender;
            $this->reciver = $reciver;
            $this->msgObject = $msgObject;
            $this->content = $content;
        }


        //Funzione per il sende
        public function getSender(){
            return $this->sender;
        }

        //Funzione per il reciver
        public function getRiciver(){
            return $this->reciver;
        }

        //Funzione per il msg
        public function getMsgObject(){
            return $this->msgObject;
        }
        
        //Funzione per il contenuto
        public function getContent(){
            return $this->content;
        }

        public function getSend(){
            return 'Sended';
        }
        
    }


?>