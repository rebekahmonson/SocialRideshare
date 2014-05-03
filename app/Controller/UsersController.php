<?php
class UsersController extends AppController {
    public $helpers = array('Html', 'Text', 'Time', 'Form');

function beforeFilter()
{
    parent::beforeFilter();
    $this->Auth->allow('logout');
}
    
    public function login(){
    // $this->Session->write('user', $user);
    // $this->Session->write('email', $email);
    // $this->Session->write('pic', $pic);
    // $this->Session->write('id', $id);
       return $this->redirect(
             array('controller' => 'app', 'action' => 'index')
             );
    }

    public function logout(){
    // $this->Session->write('user', $user);
    // $this->Session->write('email', $email);
    // $this->Session->write('pic', $pic);
    // $this->Session->write('id', $id);
      $this->Session->destroy();
      $this->redirect($this->Auth->logout());
    }


     public function opauth_complete() {
       debug($this->data);
   }


}