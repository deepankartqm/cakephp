<?php


declare(strict_types=1);

namespace App\Controller;

class CustomerController extends AppController{

    public function insert()
    {
        
        $user = $this->Customer->newEmptyEntity(); 
        echo "hello";die;
        if ($this->request->is('post')) {
            $user = $this->Customer->patchEntity($user, $this->request->getData());

            // $user->email = $this->request->getData('email');
            // $user->password = $this->request->getData('password');

            if ($this->Customer->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        
    }
}



?>