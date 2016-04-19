<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Phinx\Db\Table;
use Cake\Datasource\ConnectionManager;
//App::uses('ShellDispatcher', 'Console');
use Cake\Console\Shell;


/**
 * Fields Controller
 *
 * @property \App\Model\Table\FieldsTable $Fields
 */
class FieldsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fieldtypes', 'Apps']
        ];
        $fields = $this->paginate($this->Fields);

        $this->set(compact('fields'));
        $this->set('_serialize', ['fields']);
    }

    /**
     * View method
     *
     * @param string|null $id Field id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => ['Fieldtypes', 'Apps']
        ]);

        $this->set('field', $field);
        $this->set('_serialize', ['field']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        /*$nodes = TableRegistry::get('nodes');
        if($nodes->hasField('middle_name')){
            echo 'yes';
        }else{
            echo 'no';
        }*/
        //$nodes = $nodes->schema()->columns();

        //debug($nodes);

        //die;
        //$this->update_nodes();
        //die();
        $field = $this->Fields->newEntity();
        if ($this->request->is('post')) {
            $field = $this->Fields->patchEntity($field, $this->request->data);
            $nodes = TableRegistry::get('nodes');
            if(!$nodes->hasField($field->title)) {
                if ($this->Fields->save($field)) {
                    $this->addNewColumn($field->title);
                    $this->Flash->success(__('The field has been saved.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The field could not be saved. Please, try again.'));
                }
            }else{
                $this->Flash->error(__('The field already exists. Please, try another.'));
            }
        }
        $fieldtypes = $this->Fields->Fieldtypes->find('list', ['limit' => 200]);
        $apps = $this->Fields->Apps->find('list', ['limit' => 200]);
        $this->set(compact('field', 'fieldtypes', 'apps'));
        $this->set('_serialize', ['field']);
    }

    /**
     * @param $col_name
     */
    public function addNewColumn($col_name){
        $connection = ConnectionManager::get('default');
        $results = $connection->execute("ALTER TABLE nodes ADD $col_name varchar(250)");
    }

    public function update_nodes() {
        $command = '-app '.APP.' AclExtras.AclExtras aco_sync -r adminControllers -p UserAdmin';
        $command = 'Console/cake bake template ';
        //$args = explode(' ', $command);
        //$dispatcher = new Shell($args, false);
        /*if($dispatcher->dispatch()) {
            $this->Session->flash('OK');
        } else {
            $this->Session->flash('Error');
        }*/
        //Shell::dispatchShell($args);
        //$shell = new Shell();
        //$shell->startup();
        //$shell->dispatchShell($command);
        
        
        return $this->redirect(array('action' => 'index'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Field id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $field = $this->Fields->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $field = $this->Fields->patchEntity($field, $this->request->data);
            if ($this->Fields->save($field)) {
                $this->Flash->success(__('The field has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The field could not be saved. Please, try again.'));
            }
        }
        $fieldtypes = $this->Fields->Fieldtypes->find('list', ['limit' => 200]);
        $apps = $this->Fields->Apps->find('list', ['limit' => 200]);
        $this->set(compact('field', 'fieldtypes', 'apps'));
        $this->set('_serialize', ['field']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Field id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $field = $this->Fields->get($id);
        if ($this->Fields->delete($field)) {
            $this->Flash->success(__('The field has been deleted.'));
        } else {
            $this->Flash->error(__('The field could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
