<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offreusers Controller
 *
 * @property \App\Model\Table\OffreusersTable $Offreusers
 */
class OffreusersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Files', 'Offresemplois']
        ];
        $offreusers = $this->paginate($this->Offreusers);

        $this->set(compact('offreusers'));
        $this->set('_serialize', ['offreusers']);
    }

    /**
     * View method
     *
     * @param string|null $id Offreuser id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offreuser = $this->Offreusers->get($id, [
            'contain' => ['Users', 'Files', 'Offresemplois']
        ]);

        $this->set('offreuser', $offreuser);
        $this->set('_serialize', ['offreuser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $offreuser = $this->Offreusers->newEntity();
        if ($this->request->is('post')) {
            $offreuser = $this->Offreusers->patchEntity($offreuser, $this->request->data);
            if ($this->Offreusers->save($offreuser)) {
                $this->Flash->success(__('The offreuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offreuser could not be saved. Please, try again.'));
            }
        }
        $users = $this->Offreusers->Users->find('list', ['limit' => 200]);
        $files = $this->Offreusers->Files->find('list', ['limit' => 200]);
        $offresemplois = $this->Offreusers->Offresemplois->find('list', ['limit' => 200]);
        $this->set(compact('offreuser', 'users', 'files', 'offresemplois'));
        $this->set('_serialize', ['offreuser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offreuser id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offreuser = $this->Offreusers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offreuser = $this->Offreusers->patchEntity($offreuser, $this->request->data);
            if ($this->Offreusers->save($offreuser)) {
                $this->Flash->success(__('The offreuser has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offreuser could not be saved. Please, try again.'));
            }
        }
        $users = $this->Offreusers->Users->find('list', ['limit' => 200]);
        $files = $this->Offreusers->Files->find('list', ['limit' => 200]);
        $offresemplois = $this->Offreusers->Offresemplois->find('list', ['limit' => 200]);
        $this->set(compact('offreuser', 'users', 'files', 'offresemplois'));
        $this->set('_serialize', ['offreuser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offreuser id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
    }
    public function isAuthorized($user) {
        if(parent::isUser($user)){
            return true;
        }
        return parent::isAuthorized($user);
    }
}
