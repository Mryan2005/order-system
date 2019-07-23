<?php
header('Content-Type:text/html; charset=utf-8;');
require('./core/page.php');
function jump($get_action,$get_action_list,$count_get_action){
    $times = 0;
    foreach ($get_action_list as $i){
        if($get_action == $i) {
            include($i.'.php');
        } else {
            $times++;
            if($times >= $count_get_action){
                error('No found the page or the page is a error.');
            } 
        }
    }
}
function error($sthing){
    if(count($sthing) == 1){
        echo '<p>
        <h2>我们发现了以下错误：</h2>
        <h3>'.$sthing.'</h3>
        </p>';
    } else {
        echo '<h2>我们发现了以下错误：</h2>';
        $times = 0;
        foreach($sthing as $i){
            $times++;
            echo '<h3>'.$times.'.'.$i.'</h3>';
        }
         
    }
}
$count_list_GET['action'] = count($list_GET['action']);
jump('home',$list_GET['action'],$count_list_GET['action']);
?>