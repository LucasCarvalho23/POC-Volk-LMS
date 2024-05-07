<?php 

    require '../../Private/php/register.php';

    class UpdateInfo {
        
        private $register;

        public function __construct(Register $register) {
            $this->register = $register;

            echo ("<pre>");
            print_r ($this->register);
            echo ("</pre>");
            echo ("<hr>");
        }

    }

    echo ("<pre>");
    print_r ($_POST);
    echo ("</pre>");
    echo ("<hr>");


?>