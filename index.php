<?php
class thewtichers {
    public $jeux;
    public $color;
    public function __construct($jeux, $color) {
        $this->jeux = $jeux;
        $this->color = $color;
    }
    public function thewitcher() {
        echo "The fruit is {$this->jeux} and the color is {$this->color}.";
    }
}
class fraise extends thewtichers {
    public function ciri() {
        echo "bonjour ";

    }
}
$fraise = new fraise("gerald", "yeux gris");
$fraise->ciri();
$fraise->thewitcher();
?>

