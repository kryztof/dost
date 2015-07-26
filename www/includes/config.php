<?php 
    function db() {
        $link = mysql_connect('localhost', 'beers', 'beers');
        mysql_select_db('raspberrypints');
	}
    $rpintsversion="1.0.3.395";
?>