<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RefPartTypes Controller
 *
 * @property \App\Model\Table\RefPartTypesTable $RefPartTypes
 *
 * @method \App\Model\Entity\RefPartType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RefPartTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $refPartTypes = $this->paginate($this->RefPartTypes);

        $this->set(compact('refPartTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ref Part Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $refPartType = $this->RefPartTypes->get($id, [
            'contain' => []
        ]);

        $this->set('refPartType', $refPartType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $refPartType = $this->RefPartTypes->newEntity();
        if ($this->request->is('post')) {
            $refPartType = $this->RefPartTypes->patchEntity($refPartType, $this->request->getData());
            if ($this->RefPartTypes->save($refPartType)) {
                $this->Flash->success(__('The ref part type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref part type could not be saved. Please, try again.'));
        }
        $this->set(compact('refPartType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ref Part Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $refPartType = $this->RefPartTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $refPartType = $this->RefPartTypes->patchEntity($refPartType, $this->request->getData());
            if ($this->RefPartTypes->save($refPartType)) {
                $this->Flash->success(__('The ref part type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ref part type could not be saved. Please, try again.'));
        }
        $this->set(compact('refPartType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ref Part Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $refPartType = $this->RefPartTypes->get($id);
        if ($this->RefPartTypes->delete($refPartType)) {
            $this->Flash->success(__('The ref part type has been deleted.'));
        } else {
            $this->Flash->error(__('The ref part type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
