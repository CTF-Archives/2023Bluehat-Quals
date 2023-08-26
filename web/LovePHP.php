<?php 

class Saferman{
    public $check = True;
    public function __destruct(){
        if($this->check === True){
            file($_GET['secret']);
        }
    }
    public function __wakeup(){
        $this->check=False;
    }
}

echo $_GET['my_secret'];
if(isset($_GET['my_secret.flag'])){
    $a = $_GET['my_secret.flag'];
    unserialize($_GET['my_secret.flag']);
}else{
    highlight_file(__FILE__);
}