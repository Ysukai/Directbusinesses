<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Offresemplois Controller
 *
 * @property \App\Model\Table\OffresemploisTable $Offresemplois
 */
class OffresemploisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $offresemplois = $this->paginate($this->Offresemplois);
        $userId = $this->Auth->user('id');
        $this->set(compact('offresemplois', 'userId'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * View method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $offresemplois = $this->Offresemplois->get($id, [
            'contain' => []
        ]);

        $this->set('offresemplois', $offresemplois);
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $offresemplois = $this->Offresemplois->newEntity();
        if ($this->request->is('post')) {
            $offresemplois = $this->Offresemplois->patchEntity($offresemplois, $this->request->data);
            $offresemplois->user_id = $this->Auth->user('id');
            if ($this->Offresemplois->save($offresemplois)) {
                $this->Flash->success(__('The offresemplois has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offresemplois could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('offresemplois'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $offresemplois = $this->Offresemplois->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $offresemplois = $this->Offresemplois->patchEntity($offresemplois, $this->request->data);
            if ($this->Offresemplois->save($offresemplois)) {
                $this->Flash->success(__('The offresemplois has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The offresemplois could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('offresemplois'));
        $this->set('_serialize', ['offresemplois']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Offresemplois id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $offresemplois = $this->Offresemplois->get($id);
        if ($this->Offresemplois->delete($offresemplois)) {
            $this->Flash->success(__('The offresemplois has been deleted.'));
        } else {
            $this->Flash->error(__('The offresemplois could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function beforeFilter(\Cake\Event\Event $event) {
        $this->Auth->allow(['index']);
        parent::beforeFilter($event);
    }
    
    public function isAuthorized($user) {
        
        $ok = false;
        if(parent::isAdmin($user)){
            $ok = true;
        }
        if(parent::isUser($user)){
            if($this->request->action === 'view'){
                $ok = true;
            }
        }
        if(parent::isEntreprise($user)){
            if($this->request->action === 'add'){
                $ok = true;
            }
            if(in_array($this->request->action, ['edit', 'delete'])){
                $offreId = (int)  $this->request->param['pass'][0];
                if($this->Offresemplois->isOwnedBy($offreId, $user['id'])){
                    $ok = true;
                }
            }
        }
        return $ok;
    }
    
}
