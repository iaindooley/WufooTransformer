<?php
    class Demo extends WufooTransformer
    {
        public function authenticate($handshake_key,&$normal_post)
        {   
            return ($handshake_key == 'YOUR SECRET KEY');
        }

        public function run()
        {   
            $this->transformPost();
            //WILL BE FAR MORE SANE THAN THE DEFAULT WUFOO POST
            die(print_r($_POST));
        }
    }
