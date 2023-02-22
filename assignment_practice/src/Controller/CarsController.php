<?php
declare(strict_types=1);

namespace App\Controller;


class CarsController extends AppController
{

    public function index()
    {
        $this->loadModel('Brands');
        $this->viewBuilder()->setLayout('admin');
        // $this->paginate = [
        //     'contain' => ['Users'],
        // ];
        $user = $this->Authentication->getIdentity();
        $cars = $this->Paginate($this->Cars);

        $this->set(compact('cars', 'user'));
        $brand = $this->paginate($this->Brands);
        $this->set(compact('brand'));
    }


    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('admin');
        $car = $this->Cars->get(6, [
            'contain' => ['Brands'], // , 'Ratings'
        ]);
        // dd($car);
        $this->set(compact('car'));
    }

 
    public function add()
    {
        $this->viewBuilder()->setLayout('admin');

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


    // public function editcar($id = null)
    // {
    //     $this->viewBuilder()->setLayout('admin');
    //     $user = $this->Authentication->getIdentity();

    //     $car = $this->Cars->get($id, [
    //         'contain' => [],
    //     ]);

    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $car = $this->Cars->patchEntity($car, $this->request->getData());
    //         if ($this->Cars->save($car)) {
    //             $this->Flash->success(__('The car has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The car could not be saved. Please, try again.'));
    //     }
    //     $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
    //     $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
    //     $this->set(compact('car', 'users', 'brands', 'user'));
    // }

// /---------------------editcar----------------------------/

    public function editcar($id = null) {

        if ($this->request->is(['patch', 'post', 'put'])) {

            $data = $this->request->getData();
            $id = $this->request->getData("id");

            $car = $this->Cars->get($id, [
                'contain' => ['Brands'],
            ]);

                $car = $this->Cars->patchEntity($car, $this->request->getData());

                if ($this->Cars->save($car)){
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

        $this->set(compact('car'));

    }


    
    // public function edit($id = null)
    // {
    //     $this->viewBuilder()->setLayout('admin');
    //     $user = $this->Authentication->getIdentity();
    //     $car = $this->Cars->get($id, [
    //         'contain' => [],
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $car = $this->Cars->patchEntity($car, $this->request->getData());
    //         if ($this->Cars->save($car)) {
    //             $this->Flash->success(__('The car has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The car could not be saved. Please, try again.'));
    //     }
    //     $users = $this->Cars->Users->find('list', ['limit' => 200])->all();
    //     $brands = $this->Cars->Brands->find('list', ['limit' => 200])->all();
    //     $this->set(compact('car', 'users', 'brands', 'user'));
    // }

    public function delete($id = null)
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


    // Car Status Function
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
        return $this->redirect(['controller'=> 'Cars', 'action'=> 'index']);
        
    }


    // /-------------------Sending User_Id TO fetch Data  ----------------/

    public function ajaxedit($id = null){
        $this->loadModel('Brands');
        $car = $this->Cars->get($id,[
            'contain' => ['Brands']
        ]);

        echo json_encode($car);
        exit;
    }



    public $paginate = ['limit'=> 5];
}
