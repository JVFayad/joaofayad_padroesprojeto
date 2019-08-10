<?php

class Basket {

    private $accounting;
    private $quality;
    private $logistics;
    private $shipping;
    private $postOffice;

    public function __construct() {
        $this->accounting = new Accounting(50.0);
        $this->quality = new Quality();
        $this->logistics = new Logistics();
        $this->shipping = new Shipping();
        $this->postOffice = new PostOffice();
    }

    public function buy() {
        $this->accounting->pay();
        $this->quality->validate();
        $this->logistics->pack();
        $this->shipping->transport();
        $this->postOffice->deliver();
    }

}  

?>