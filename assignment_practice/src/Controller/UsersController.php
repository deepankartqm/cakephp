<?php 

namespace App\Controller;
use App\Controller\AppController;
use App\Form\ContactForm;
use App\Form\EmailForm;

class UsersController extends AppController{

    public function initialize(): void

    {
        parent::initialize();
        // $this->paginate = ['limit' => 4];

        

        // $this->Model = $this->loadModel('Cars');
        // $this->Model = $this->loadModel('Ratings');
        // $this->Model = $this->loadModel('Brands');
        // $this->viewBuilder()->setLayout('home');
        // $this->loadComponent('RequestHandler');
        // $this->loadComponent('Flash');

        // if($this->Authentication->getIdentity()){
            
        //     $user = $this->Authentication->getIdentity();
            
        //     $this->set(compact('user'));
        // }else{
        //     $user = null;
     
        //     $this->set(compact('user'));

        // }

    }

    public function index(): void
    {
        
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login','signUp']);
    }
    
    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        
        // regardless of POST or GET, redirect if user is logged in
        if ($result && $result->isValid()) {
            // redirect to /articles after login success
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'dashboard',
            ]);
    
            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }

    // adisign up---
    public function signUp()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {

            // $image = $this->request->getData('image_file');
            // $name = $image->getclientFilename();
            // $path = WWW_ROOT.'img'.DS.$name;
            // if($name)
            //     $image->moveTo($path);
            
            // $user->image = $name;
            // dd($path);
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                // return $this->redirect(['action' => 'login']);
            }else{
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            }
            $this->set(compact('user'));

            }

            // /--------------logout--------------/

                public function logout()
            {
                $result = $this->Authentication->getResult();
                // regardless of POST or GET, redirect if user is logged in
                if ($result && $result->isValid()) {
                    $this->Authentication->logout();
                    return $this->redirect(['controller' => 'Users', 'action' => 'index']);
                }
            }
            

            // /---------------------listTable--------------------/
        
            public function listTable(){

                $this->viewBuilder()->setLayout('admin');
                $users = $this->paginate($this->Users);
                $this->set(compact('users'));
            }


            // /---------------------Dashboard--------------------/

            public function dashboard(){
                $this->viewBuilder()->setLayout('admin');
            }

            
            
            
            // /---------------------Dashboard--------------------/

            public function carsTable(){

            }

        //---------------------Function for Adding users--------------------------------// 

            public function adduser(){

                $user = $this->Users->newEmptyEntity();
                if ($this->request->is('post')) {
        
                    // $image = $this->request->getData('image_file');
                    // $name = $image->getclientFilename();
                    // $path = WWW_ROOT.'img'.DS.$name;
                    // if($name)
                    //     $image->moveTo($path);
                    
                    // $user->image = $name;
                    // dd($path);
                    $user = $this->Users->patchEntity($user, $this->request->getData());
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('The user has been saved.'));
        
                        return $this->redirect(['action' => 'listTable']);
                    }else{
                    $this->Flash->error(__('The user could not be saved. Please, try again.'));
                    }
                }
                $this->set(compact('user'));

            }


            // public function delete($id)
            // {
                
            //     $this->request->allowMethod(['post', 'delete']);
            //     $user = $this->Users->get($id);
            //     if ($this->Users->delete($user)) {
            //         $this->Flash->success(__('The user has been deleted.'));
            //     } else {
            //         $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            //     }

            //     return $this->redirect(['action' => 'listTable']);

            // }

            // /-------------------Sending User_Id TO fetch Data  ----------------/

            public function delete()

            {
                if($this->request->is('ajax')){

                    $id = $this->request->getQuery('id');

                    $user = $this->Users->get($id);
                    
                    if ($user->delete_status == 1){
                        $user->delete_status= 0;
                    }else {
                        $user->delete_status = 1;
                    }
                
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('The user has been deleted.'));
                    } else {
                        $this->Flash->error(__('The user could not be deleted. Please, try again.'));
                    }
                    
                    return $this->redirect(['action' => 'listTable']);
                }
            }


            // /-------------------Sending User_Id TO fetch Data  ----------------/

            public function ajaxedit($id = null){

                $user = $this->Users->get($id,[
                    'contain' => []
                ]);
                echo json_encode($user);
                exit;
            }

            
            // /-------------------User Edit code with ajax----------------/

            public function edituser($id = null) {
                              
                if ($this->request->is(['ajax'])) {
                    $data = $this->request->getData();

                    // dd($data);
                    $id = $this->request->getData("iddd");

                    $user = $this->Users->get($id, [
                        'contain' => [],
                    ]);

                        $user = $this->Users->patchEntity($user, $this->request->getData());

                        if ($this->Users->save($user)){
                            echo json_encode(array(
                                "status" => 1,
                                "message" => "The User has been saved.",
                            ));
                            exit;
                        }
                        echo json_encode(array(
                            "status" => 0,
                            "message" => "The User  could not be saved. Please, try again.",
                        ));
                        exit;
                }

                $this->set(compact('user'));

            }
           

            // public function edituser($id = null)
            // {
            //     $user = $this->Users->get($id, [
            //         'contain' => [],
            //     ]);

            //     $result = $this->Authentication->getIdentity();
            //     if ($this->request->is(['patch', 'post', 'put'])) {
            //         $user = $this->Users->patchEntity($user, $this->request->getData());



            //         if ($this->Users->save($user)) {
            //             $this->Flash->success(__('The user has been saved.'));
        
            //             return $this->redirect(['action' => 'index']);
            //         }
            //         $this->Flash->error(__('The user could not be saved. Please, try again.'));
            //     }
            //     $this->set(compact('user'));
            // }

            // /--------------------view--------------------/
            
            public function view($id = null){
                
                $this->viewbuilder()->setLayout('admin');
                $user = $this->Users->get($id, [
                    'contain' => [],
                ]);
                $this->set(compact('user'));
                
                
            }
            
            // /--------------------User Profile--------------------/
            
            public function profile(){
                
                $user = $this->Authentication->getIdentity();
                
                $this->set(compact('user'));
                
            }
            
            
            // /--------------------User status function--------------------/

            public function userStatus($id = null, $status = null){

                $this->request->allowMethod(['post']);
                $user = $this->Users->get($id);
                
                if ($status == 1){
                    $user->status = 0;
                }else {
                    $user->status = 1;
                }
                if ($this->Users->save($user));{
                    $this->Flash->success(__('The User status has changed'));
                }
                return $this->redirect(['controller'=> 'Users', 'action'=> 'listTable']);
                
            }

            

                public $paginate = ['limit'=> 5];

                public function contact(){
                    $contact = new ContactForm();
                    if($this->request->is('post')){
                        if($contact->execute($this->request->getData())){
                            $this->Flash->success('Contact form Data');
                        }else{
                            $this->Flash->success('Contact form Data not');
                        }
                    }
                    $this->set(compact('contact'));
                }

                // /--------------- Email Send ----------------/

                public function email()
                {
                    $contact = new EmailForm();
                    if ($this->request->is('post')) {
                        if ($contact->execute($this->request->getData())) {
                            $this->Flash->success('We will get back to you soon.');
                        } else {
                            $this->Flash->error('There was a problem submitting your form.');
                        }
                    }
                    $this->set('contact', $contact);
                }

        }


?>