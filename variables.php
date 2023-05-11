<?php

class variablesCSS {
    private $data;

    function __construct($file){
        $css = file_get_contents($file);
        preg_match_all( "/--([^:]+):[\s]+([^;\:]+);/", $css, $arr);

        for($i=0;$i<sizeof($arr[0]);$i++){
            $this->data[$arr[1][$i]] = $arr[2][$i];
        }
    }

    function __get($varName){
        if( isset($varName)) return $this->data[$varName];
        else return $this->data;
    }
}
$vars = new variablesCSS("variables.css");
print_r($vars);
echo($vars->colorError);

?>