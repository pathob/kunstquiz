<?php

// require_once('class.base.php');

class Question /* extends Base */ {

//    public function __construct() {
//        parent::__construct();
//    }

    public function GET($verb, $args) {

        // return random querstion
        if ($verb == '') {

            $questions = array(
                "key" => "value",
                "bla" => "blubb",
            );

            // JSON Objekt hier´zusammenbasteln

            return json_encode($questions[rand(0, sizeof($questions)-1)]);
        }

		return;
	}
}

?>
