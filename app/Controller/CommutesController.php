<?php
class CommutesController extends AppController {

    public function logout(){
    // $this->Session->write('user', $user);
    // $this->Session->write('email', $email);
    // $this->Session->write('pic', $pic);
    // $this->Session->write('id', $id);
      $this->Session->destroy();
      $this->redirect($this->Auth->logout());
    }


    public function add() {
      //set vars
      $user=$this->Session->read('user', $user);
      $pic=$this->Session->read('pic', $pic);
      $id=$this->Session->read('id', $id);
      $token==$this->Session->read('token', $token);

      //if not found, register
       if(empty($findUser)){
             $this->User->create();
             $this->User->set(array(
               'id'=>$id,
               'user' => $user));
            $this->User->saveAll();
            return $this->redirect( array('controller' => 'Commute', 'action' => 'add'));
          } else{
           return $this->redirect( array('controller' => 'Commute', 'action' => 'add'));
      }


}