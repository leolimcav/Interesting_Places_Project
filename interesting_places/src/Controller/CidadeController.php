<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cidade Controller
 *
 *
 * @method \App\Model\Entity\Cidade[] paginate($object = null, array $settings = [])
 */
class CidadeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cidade = $this->paginate($this->Cidade);

        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * View method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => []
        ]);

        $this->set('cidade', $cidade);
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cidade = $this->Cidade->newEntity();
        if ($this->request->is('post')) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cidade = $this->Cidade->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cidade = $this->Cidade->patchEntity($cidade, $this->request->getData());
            if ($this->Cidade->save($cidade)) {
                $this->Flash->success(__('The cidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cidade could not be saved. Please, try again.'));
        }
        $this->set(compact('cidade'));
        $this->set('_serialize', ['cidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cidade = $this->Cidade->get($id);
        if ($this->Cidade->delete($cidade)) {
            $this->Flash->success(__('The cidade has been deleted.'));
        } else {
            $this->Flash->error(__('The cidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
