<?php
class UsersController extends AppController {
  public function login(){}    

    public function logout(){
    // $this->Session->write('user', $user);
    // $this->Session->write('email', $email);
    // $this->Session->write('pic', $pic);
    // $this->Session->write('id', $id);
      $this->Session->destroy();
      $this->redirect($this->Auth->logout());
    }


    public function opauth_complete() {
      //debug($this->data);
      //send to view
      $this->set('opauth_data', $this->data);
       //set vars
      $user=$this->data['auth']['info']['name'];
      $pic=$this->data['auth']['info']['image'];
      $token=$this->data['auth']['credentials']['token'];
      $id=$this->data['auth']['uid'];
      //write to session
      $this->Session->write('user', $user);
      $this->Session->write('pic', $pic);
      $this->Session->write('id', $id);
      $this->Session->write('token', $token);

       // //find the user
       // $findUser = $this->User->findById('$id');;
       // echo '<br/><br/><br/>';
       // debug($id);
       // debug($user);
       // debug($findUser);
       // //if found, send to commute form
       //  if (!empty($findUser)){
       //     return $this->redirect( array('controller' => 'Commute', 'action' => 'add'));
       //  }
       //   else{ 
       //  //save user
       //       $this->User->create();
       //       $this->User->set(array(
       //             'id'=>$id,
       //             'user' => $user));
       //       $this->User->save();
       //  //then send to commute form
       //   return $this->redirect( array('controller' => 'Commute', 'action' => 'add'));
       //  }
     }
}