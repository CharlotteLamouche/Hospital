<?php
    function fConnect () {
    $vHost="tuxa.sme.utc";
    $vPort="5432";
    $vDbname="dbnf17p061";
    $vUser="nf17p061";
    $vPassword="U8tEmVko";
    $vConn = pg_connect("host=$vHost port=$vPort dbname=$vDbname user=$vUser password=$vPassword");
    return $vConn;
    }
?>
