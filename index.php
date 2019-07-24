<?php
header('Content-Type:text/html; charset=utf-8;');
require('./core/page.php');
function jump($get_actions,$get_action_list,$count_get_action){
    if($get_actions != ''){
        $times = 0;
        foreach($get_action_list as $i) {
            if($get_actions == $i) {
                include($i.'.php');
            }
        }
    } 
}
function error($sthing){
    if(count($sthing) == 1){
        echo '<p>
        <h2>我们发现了一个错误：</h2>
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
jump($_GET['action'],$list_GET['action'],$count_list_GET['action']);
?>