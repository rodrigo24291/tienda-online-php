<?php
class configuracion{
    
    public static function db(){
        
        $cone=new mysqli("localhost", "root", "", "ramos");
        $cone->query("SET NAMES 'utf8'");
        
        return $cone;
    }
}

