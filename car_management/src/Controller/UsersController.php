<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void
    {
        parent::initialize();

        $this->Model = $this->loadModel('Cars');
        $this->Model = $this->loadModel('Ratings');
        $this->Model = $this->loadModel('Brands');
        $this->viewBuilder()->setLayout('home');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Brands', 'Cars', 'Ratings'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

        public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['login','add','home']);
    }

    public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            // redirect to /articles after login success
            // $redirect = $this->request->getQuery('redirect', [
            //     'controller' => 'Users',
            //     'action' => 'index',
            // ]);
            $user = $this->Authentication->getidentity();

            if ($this->Authentication->getidentity()){
                $login = true;
            }else{
                $login = false;
            }

            if ($user->role == '1'){
               
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'index',
            ]);
            }
            elseif($user->role == '0') {

                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Users',
                    'action' => 'home',
                ]);

            }

            if ($user->status == '1'){

                $this->Flash->error(__('Your Account Is Deactivated'));

                $redirect = $this->request->getQuery('redirect', [
                    'controller' => 'Users',
                    'action' => 'home',
                ]);
            }


            return $this->redirect($redirect);
        }
        // display error if user submitted and authentication failed
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('Invalid email or password'));
        }

        // $this->set(compact('user'));
    }

        // in src/Controller/UsersController.php
    public function logout()
    {
        $result = $this->Authentication->getResult();
        // regardless of POST or GET, redirect if user is logged in
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'home']);
        }
    }


    public function home(){

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));

        $this->paginate = [
            'contain' => ['Users', 'Brands'],
            'order'=>['id'=>'DESC'],
        ];
        $cars = $this->paginate($this->Cars);

// seaching bar
        $key = $this->request->getQuery('key');
        if ($key) {
            $query = $this->Cars->find('all')->where(['Cars.name Like'=>'%'.$key.'%']);
            // $query = $this->Cars->find('all')->where('or'=>['name Like'=>'%'.$key.'%', 'make Like'=>'%'.$key.'%', 'model Like'=>'%'.$key.'%', 'model Like'=>'%'.$key.'%']);
        } 
        else 
        {
            $query = $this->Cars;
        }
        $cars = $this->paginate($query);
        $this->set(compact('cars'));

    }

    public function indexcar()
    {
        $this->paginate = [
            'contain' => ['Users', 'Brands'],
        ];
        $cars = $this->paginate($this->Cars);

        $this->set(compact('cars'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewcar($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => ['Users', 'Brands', 'Ratings'],
        ]);

        $this->set(compact('car'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function addcar()
    {
        $car = $this->Cars->newEmptyEntity();
        // echo '<pre>';
        // print_r($car);die();
        if ($this->request->is('post')) {

            $image = $this->request->getData('image_file');
            $name = $image->getClientFilename();
            $targetPath = WWW_ROOT.'img'.DS.$name;
            if($name){
                $image->moveTo($targetPath);
            }
            $car->image = $name;

            $car = $this->Cars->patchEntity($car, $this->request->getData());
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car could not be saved. Please, try again.'));
        }
        $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
        $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
        $this->set(compact('car', 'users', 'brands'));
        
    }


    public function editcar($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $car = $this->Cars->patchEntity($car, $this->request->getData());
            if ($this->Cars->save($car)) {
                $this->Flash->success(__('The car has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The car could not be saved. Please, try again.'));
        }
        $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
        $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
        $this->set(compact('car', 'users', 'brands'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deletecar($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $car = $this->Cars->get($id);
        if ($this->Cars->delete($car)) {
            $this->Flash->success(__('The car has been deleted.'));
        } else {
            $this->Flash->error(__('The car could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function carStatus($id = null, $status = null){
        $this->request->allowMethod(['post']);
        $car = $this->Cars->get($id);
        if ($status == 1){
            $car->status = 0;
        }else {
            $car->status = 1;
        }
        if ($this->Cars->save($car));{
            $this->Flash->success(__('The car status has changed'));
        }
        return $this->redirect(['controller'=> 'Users', 'action'=> 'indexcar']);

    }

    public function userStatus($id = null, $status = null){

        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
        if ($status == 1){
            $user->status = 0;
        }else {
            $user->status = 1;
        }
        if ($this->Users->save($user));{
            $this->Flash->success(__('The car status has changed'));
        }
        return $this->redirect(['controller'=> 'Users', 'action'=> 'index']);
        
    }
    
    // Rating Functions--------------------------------/
    
    public function indexrating()
    {
        $this->paginate = [
            'contain' => ['Users', 'Cars'],
        ];
        $ratings = $this->paginate($this->Ratings);
        
        $this->set(compact('ratings'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewrating($id = null)
    {
        $rating = $this->Ratings->get($id, [
            'contain' => ['Users', 'Cars'],
        ]);
        
        $this->set(compact('rating'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function addrating()
    {
        $rating = $this->Ratings->get($id, [
            'contain' => ['Users', 'Cars','Ratings'],
        ]);
        $rating = $this->Ratings->newEmptyEntity();
       
        // if ($this->request->is('post')) {
        //     $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
        //     if ($this->Ratings->save($rating)) {
        //         $this->Flash->success(__('The rating has been saved.'));

        //         return $this->redirect(['action' => 'viewcardetails']);
        //     }
        //     $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        // }
        // $users = $this->Ratings->Users->find('list', ['limit' => 200])->all();
        // $cars = $this->Ratings->Cars->find('list', ['limit' => 200])->all();
        // $this->set(compact('rating', 'users', 'cars'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editrating($id = null)
    {
        $rating = $this->Ratings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
            if ($this->Ratings->save($rating)) {
                $this->Flash->success(__('The rating has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        }
        $users = $this->Ratings->Users->find('list', ['limit' => 200])->all();
        $cars = $this->Ratings->Cars->find('list', ['limit' => 200])->all();
        $this->set(compact('rating', 'users', 'cars'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rating id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleterating($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rating = $this->Ratings->get($id);
        if ($this->Ratings->delete($rating)) {
            $this->Flash->success(__('The rating has been deleted.'));
        } else {
            $this->Flash->error(__('The rating could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    // Rating Functions end--------------------------------/
    

    // Brand Function--------------------------------------/
    
    public function indexbrand()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $brands = $this->paginate($this->Brands);

        $this->set(compact('brands'));
    }
    
    /**
     * View method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function viewbrand($id = null)
    {
        $brand = $this->Brands->get($id, [
            'contain' => ['Users', 'Cars'],
        ]);

        $this->set(compact('brand'));
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function addbrand()
    {
        $brand = $this->Brands->newEmptyEntity();
        if ($this->request->is('post')) {
            $brand = $this->Brands->patchEntity($brand, $this->request->getData());
            if ($this->Brands->save($brand)) {
                $this->Flash->success(__('The brand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The brand could not be saved. Please, try again.'));
        }
        $users = $this->Brands->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('brand', 'users'));
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function editbrand($id = null)
    {
        $brand = $this->Brands->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $brand = $this->Brands->patchEntity($brand, $this->request->getData());
            if ($this->Brands->save($brand)) {
                $this->Flash->success(__('The brand has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The brand could not be saved. Please, try again.'));
        }
        $users = $this->Brands->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('brand', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deletebrand($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $brand = $this->Brands->get($id);
        if ($this->Brands->delete($brand)) {
            $this->Flash->success(__('The brand has been deleted.'));
        } else {
            $this->Flash->error(__('The brand could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    // Brand Function end--------------------------------------/
    
    
    
    public function viewcardetails($id = null)
    {
        $car = $this->Cars->get($id, [
            'contain' => ['Users', 'Brands', 'Ratings'],
        ]);
    
        

        // $rating = $this->Ratings->get($id, [
        //     'contain' => ['Users', 'Cars','Ratings'],
        // ]);
        // $rating = $this->Ratings->newEmptyEntity();
       
        // if ($this->request->is('post')) {
        //     $rating = $this->Ratings->patchEntity($rating, $this->request->getData());
        //     if ($this->Ratings->save($rating)) {
        //         $this->Flash->success(__('The rating has been saved.'));

        //         return $this->redirect(['action' => 'viewcardetails']);
        //     }
        //     $this->Flash->error(__('The rating could not be saved. Please, try again.'));
        // }
        // $users = $this->Ratings->Users->find('list', ['limit' => 200])->all();
        // $cars = $this->Ratings->Cars->find('list', ['limit' => 200])->all();
        // $this->set(compact('rating', 'users', 'cars'));




        $this->set(compact('car'));


    }
    

    
    public $paginate = ['limit' => 4];
}
