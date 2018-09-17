<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RefPartManufacturers Controller
 *
 * @property \App\Model\Table\RefPartManufacturersTable $RefPartManufacturers
 *
 * @method \App\Model\Entity\RefPartManufacturer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RefPartManufacturersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $refPartManufacturers = $this->paginate($this->RefPartManufacturers);

        $this->set(compact('refPartManufacturers'));
    }

    /**
     * View method
     *
     * @param string|null $id Ref Part Manufacturer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $refPartManufacturer = $this->RefPartManufacturers->get($id, [
            'contain' => []
        ]);

        $this->set('refPartManufacturer', $refPartManufacturer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $refPartManufacturer = $this->RefPartManufacturers->newEntity();
        if ($this->request->is('post')) {
            $refPartManufacturer = $this->RefPartManufacturers->patchEntity($refPartManufacturer, $this->request->getData());
            if ($this->RefPartManufacturers->save($refPartManufacturer)) {
                $this->Flash->success(__('The ref part manufacturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref part manufacturer could not be saved. Please, try again.'));
        }
        $this->set(compact('refPartManufacturer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ref Part Manufacturer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $refPartManufacturer = $this->RefPartManufacturers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $refPartManufacturer = $this->RefPartManufacturers->patchEntity($refPartManufacturer, $this->request->getData());
            if ($this->RefPartManufacturers->save($refPartManufacturer)) {
                $this->Flash->success(__('The ref part manufacturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref part manufacturer could not be saved. Please, try again.'));
        }
        $this->set(compact('refPartManufacturer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ref Part Manufacturer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $refPartManufacturer = $this->RefPartManufacturers->get($id);
        if ($this->RefPartManufacturers->delete($refPartManufacturer)) {
            $this->Flash->success(__('The ref part manufacturer has been deleted.'));
        } else {
            $this->Flash->error(__('The ref part manufacturer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
