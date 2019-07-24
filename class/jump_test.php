<?php
include('jump_class.php');
class jumpTest extends PHPUnit_Framework_TestCase {
	public function testjumpSuccess() {
        $get_actions = 'admin';
        $get_action_list = array(
            'admin',
            'login',
            'order'
        );
        $count_get_action = count($get_action_list);
		$jump = new jump;
        $actual = $jump->jump($get_actions, $get_action_list,$count_get_action);
        $this->assertEquals($actual);
	}
	function testLoginFail() {
		$get_actions = 'home';
        $get_action_list = array(
            'admin',
            'login',
            'order'
        );
        $count_get_action = count($get_action_list);
		$jump = new jump;
        $actual = $jump->jump($get_actions, $get_action_list,$count_get_action);
        $this->assertEquals($actual);
	}
}