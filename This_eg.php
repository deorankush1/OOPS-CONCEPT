<?php
class This_eg
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}
$newThis = new This_eg();
$newThis -> displayVar();
?>
