<?php
       try{
                $baglanti  = new PDO("mysql:host=localhost; dbname=dbders; charset=utf8","root","");
               
       }catch(Exception $e){
                echo $e->getMessage();
       }
?>      