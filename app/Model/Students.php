<?php
App::uses('AppModel','Model');

class Students extends AppModel{
    public $validate = array(
        'name'=>array('rule'=>'notEmpty'),
        'address'=>array('rule'=>'notEmpty'),
        'phone'=>array('rule'=>'notEmpty')
    ); 
}
?>