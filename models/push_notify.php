<?php
    class Push extends Comunication{

        private $visible;
        private $icon;
        public static $ledColor = 'White';

            function __construct(String $sender, String $receiver, String $msgObject, String $content, Bool $visible, String $icon){
                parent::__construct($sender, $receiver, $msgObject, $content);
                $this->visible = $visible;
                $this->icon = $icon;
            }

            public function getVisible(){
                return $this->visible;
            }

            public function getIcon(){
                return $this->icon;
            }

            public function click(){
                return 'Marked as read';
            }

            public function send(){
                return 'Notification sent';
            }

    }
?>