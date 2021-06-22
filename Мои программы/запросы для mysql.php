<?php
function sql_query($db, $select, $from, $where) {

    $link = mysqli_connect("localhost","root","","$db");
    mysqli_query($link, "SET NAMES 'utf-8'");
    
    if ( !empty($where) ):

       $query = mysqli_query($link, "SELECT $select FROM $from WHERE $where ");

    else: 

        $query = mysqli_query($link, "SELECT $select FROM $from ");

    endif;

    $result = mysqli_fetch_all($query);

    mysqli_error($link);
}
?>