<?php

class db {

    public $connect;
    public function __construct()
    {
        try {

            // $this->connect = new PDO("mysql:host=sql109.epizy.com;dbname=epiz_29533591_links", 'epiz_29533591', 'zN4LgYtC95iuRX');
            $this->connect = new PDO("mysql:host=localhost;dbname=epiz_29533581_shortlink", 'root', '');

        } catch(PDOException $e){
            echo "Connection error: ". $e->getMessage();
        }
    }

}


?>
<!--"mysql:host=sql109.epizy.com;dbname=epiz_29533581_shortLink", 'epiz_29533581', 'k86fvBJZb2xha'-->