<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entreprises Controller
 *
 * @property \App\Model\Table\EntreprisesTable $Entreprises
 */
class EntreprisesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ]; 
        $entreprises = $this->paginate($this->Entreprises);

        $this->set(compact('entreprises'));
        $this->set('_serialize', ['entreprises']);
    }

    /**
     * View method
     *
     * @param string|null $id Entreprise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entreprise = $this->Entreprises->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('entreprise', $entreprise);
        $this->set('_serialize', ['entreprise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $entreprise = $this->Entreprises->newEntity();
        if ($this->request->is('post')) {
            $entreprise = $this->Entreprises->patchEntity($entreprise, $this->request->data);
            if ($this->Entreprises->save($entreprise)) {
                $this->Flash->success(__('The entreprise has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
            }
        }
        $users = $this->Entreprises->Users->find('list', ['limit' => 200]);
        $this->set(compact('entreprise', 'users'));
        $this->set('_serialize', ['entreprise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entreprise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entreprise = $this->Entreprises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entreprise = $this->Entreprises->patchEntity($entreprise, $this->request->data);
            if ($this->Entreprises->save($entreprise)) {
                $this->Flash->success(__('The entreprise has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entreprise could not be saved. Please, try again.'));
            }
        }
        $users = $this->Entreprises->Users->find('list', ['limit' => 200]);
        $this->set(compact('entreprise', 'users'));
        $this->set('_serialize', ['entreprise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entreprise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entreprise = $this->Entreprises->get($id);
        if ($this->Entreprises->delete($entreprise)) {
            $this->Flash->success(__('The entreprise has been deleted.'));
        } else {
            $this->Flash->error(__('The entreprise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
