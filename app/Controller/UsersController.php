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

    //echo '<br><br><br><br><br><br>';

   $this->set('opauth_data', $this->data);
      
    debug($this->data);

    //   $user=$this->data['auth']['info']['name'];
    //   $email=$this->data['auth']['info']['email'];
    //   $pic=$this->data['auth']['info']['photo'];
    //   $token=$this->data['auth']['credentials']['token'];
    //   $id=$this->data['auth']['uid'];

    // $this->Session->write('user', $user);
    // $this->Session->write('email', $email);
    // $this->Session->write('pic', $pic);
    // $this->Session->write('id', $id);



      // debug($user);
      // debug($email);
      // debug($pic);
      // debug($token);
      // debug($id);

      //find the user in the user table
       // $findUser = $this->User->find('first', array( 
       //   'conditions'=>array(
       //     'User.user'=>$this->$user)
       //   ));
       // //if not found, register
       // if(empty($findUser)){
       //    $this->User->create();
       //     $this->User->set(array(
       //     'id'=>$id,
       //     'user' => $user,
       //     'email' => $email,
       //     'role' => 'contributor',
       //     'pic'=>$pic,
       //     'token'=>$token ));

       //     $this->User->save();
       //     $this->Auth->login(array('id' => $id));
       //     return $this->redirect(
       //      array('controller' => 'website', 'action' => 'index')
       //      );
            // return $this->redirect(
            // array('controller' => 'website', 'action' => 'index')
            // );


          //return $this->redirect(
          //  array('controller' => 'website', 'action' => 'index'));

        }
        //   //then login
        //    $newUser = $this->User->find('first', array( 
        //      'conditions'=>array(
        //      'User.user'=>$this->$user)
        //      ));
        //   $this->Auth->login(
        //       array(
        //         'username'=>$newUser,
        //         'password'=>$token
        //         )
        //     );
        //   $this->Session->setFlash(__('Welcome, '.$user.'!'));
        // }
        // //return $this->redirect(array('controller'=>'website', 'action' => 'index'));
        else{
           // $this->Auth->login(
           //   array(
           //       'username'=>$user,
           //       'password'=>$token
           //       )
           //   );
           $this->Auth->login(array('id' => $id));
           return $this->redirect(
            array('controller' => 'website', 'action' => 'index')
            );
           
         }
        //return $this->redirect(array('controller'=>'website', 'action' => 'index'));
  }


}