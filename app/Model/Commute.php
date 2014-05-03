<?php
App::uses('AppModel', 'Model');
class User extends AppModel{
	public $name = 'Commute';

	public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

}