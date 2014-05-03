<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel{
    public $name = 'User';
	
	public $hasMany = array(
	    'commutes'=> array(
            'className' => 'Commute',
            'foreignKey' => 'user_id'
        ),
    );

  }
