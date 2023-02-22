<?php
declare(strict_types=1);

namespace App\Controller;

class BrandsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $brands = $this->paginate($this->Brands);

        $this->set(compact('brands'));
    }


    public function view($id = null)
    {
        $brand = $this->Brands->get($id, [
            'contain' => ['Users', 'Cars'],
        ]);

        $this->set(compact('brand'));
    }


    public function add()
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


    public function edit($id = null)
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


    public function delete($id = null)
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
}
