<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parts Controller
 *
 * @property \App\Model\Table\PartsTable $Parts
 *
 * @method \App\Model\Entity\Part[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

 
class PartsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => []
        ];
        $parts = $this->paginate($this->Parts);

        $this->set(compact('parts'));
    }

    /**
     * View method
     *
     * @param string|null $id Part id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $part = $this->Parts->get($id, [
            'contain' => []
        ]);

        $this->set('part', $part);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $part = $this->Parts->newEntity();
        if ($this->request->is('post')) {
            $part = $this->Parts->patchEntity($part, $this->request->getData());
            if ($this->Parts->save($part)) {
                $this->Flash->success(__('The part has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The part could not be saved. Please, try again.'));
        }
        $cars = $this->Parts->Cars->find('list', ['limit' => 200]);
        $suppliers = $this->Parts->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('part'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Part id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $part = $this->Parts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $part = $this->Parts->patchEntity($part, $this->request->getData());
            if ($this->Parts->save($part)) {
                $this->Flash->success(__('The part has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The part could not be saved. Please, try again.'));
        }
        $cars = $this->Parts->Cars->find('list', ['limit' => 200]);
        $parentParts = $this->Parts->ParentParts->find('list', ['limit' => 200]);
        $suppliers = $this->Parts->Suppliers->find('list', ['limit' => 200]);
        $this->set(compact('part'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Part id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $part = $this->Parts->get($id);
        if ($this->Parts->delete($part)) {
            $this->Flash->success(__('The part has been deleted.'));
        } else {
            $this->Flash->error(__('The part could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getByCar() {
        $car_id = $this->request->query('car_id');
        $parts = $this->Parts->find('all', [
            'conditions' => ['parts.car_id' => $car_id],
        ]);
        $this->set('parts', $parts);
        $this->set('_serialize', ['parts']);
    }

    public function getPartsSortedByCars() {
        $cars = $this->Parts->Cars->find('all', [
            'contain' => ['Parts'],
        ]);
        $this->set('cars',$countries);
        $this->set('_serialize', ['cars']);
    }
}
