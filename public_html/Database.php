<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 13-5-2019
 * Time: 09:21
 */

class Database
{

    public function __construct()
    {

        $this->load();
    }
    public function load ()
    {

        $dbname ="fiets";
        $dbuser ="root";
        $dbpass="";
        $dbhost="localhost";

        $link = mysqli_connect($dbhost,$dbuser,$dbuser,$dbpass)or die("Unable to Connect to '$dbhost'");
        mysqli_select_db($link,$dbname)or die ("Could not open the db'$dbname'");

        $test_query = "SHOW TABLES FROM  $dbname";
    }
}