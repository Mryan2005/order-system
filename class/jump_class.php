<?php
class jump {
    public function jump($get_actions = '',$get_action_list = '',$count_get_action = ''){
        if($get_actions != ''){
            foreach($get_action_list as $i) {
                if($get_actions == $i) {
                    include($i.'.php');
                }
            }
        } 
    }
}