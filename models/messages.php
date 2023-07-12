<?php 

    class Msg extends Comunication{
        private $setAsRead;
        private $accettazioneRisposta;  //????? in ogni caso booleano
        public static $ledColor = 'green';


        function __construct( String $sender, String $reciver, String $msgObject, String $content, Bool $setAsRead, Bool $accettazioneRisposta ){
            parent::__construct($sender, $reciver, $msgObject, $content);
            $this->setAsRead = $setAsRead;
            $this->accettazioneRisposta = $accettazioneRisposta;
        }

        public function getSetAsRead(){
            return $this->setAsRead;
        }

        public function getAccettazioneRisposta(){
            return $this->accettazioneRisposta;
        }
        
        public function getReply() {
            return '<i class="fa-solid fa-comment-dots"></i>';
        }
        
        public function getSend(){
            return '<i class="fa-solid fa-check"></i>';
        }
        

    }


?>