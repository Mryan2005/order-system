<?php
class jump {
    public function jump($get_actions = '',$get_action_list = '',$count_get_action = ''){
        if($get_actions != ''){
            $times = 0;
            foreach($get_action_list as $i) {
                $times++;
                if($get_actions == $i) {
                    include($i.'.php');
                } else if($times >= $count_get_action) {
                    echo '<h4>we will help you go back</h4>
                    <a href="index.php">go back</a>';
                }
            }
        } 
    }
}