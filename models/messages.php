<?php 

    class Msg extends Comunication{
        private $setAsRead;
        private $accettazioneRisposta;  //????? in ogni caso booleano
        public static $ledColor = 'green';


        function __construct( String $sender, String $reciver, String $msgObject, String $content, String $setAsRead, Bool $accettazioneRisposta ){
            parent::__construct($sender, $reciver, $msgObject, $content);
            $this->getSetAsRead = $getSetAsRead;
            $this->accettazioneRisposta = $accettazioneRisposta;
        }

        public function getSetAsRead(){
            return $this->setAsRead;
        }

        public function getAccettazioneRisposta(){
            return $this->accettazioneRisposta;
        }
        
        public function getReply() {
            return 'Sms reply sent';
        }
        
        public function getSend(){
            return 'Sms sent';
        }
        

    }


?>