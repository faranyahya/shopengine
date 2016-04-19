<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Routing\Route;

/**
 * Nodes Controller
 *
 * @property \App\Model\Table\NodesTable $Nodes
 */
class NodesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        /*$this->paginate = [
           'contain' => ['Apps', 'Categories']
       ];
       $nodes = $this->paginate($this->Nodes);

       $this->set(compact('nodes'));
       $this->set('_serialize', ['nodes']);*/

        $nodes = $this->DataTables->find('Nodes', 'all', [
            'contain' => ['Apps', 'Categories']
        ]);
        $this->set('nodes', $nodes);
        $this->set('_serialize', array_merge($this->viewVars['_serialize'], ['nodes']));
    }

    /**
     * View method
     *
     * @param string|null $id Node id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $node = $this->Nodes->get($id, [
            'contain' => ['Apps', 'Categories']
        ]);

        $this->set('node', $node);
        $this->set('_serialize', ['node']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($cat_id = null)
    {


        $node = $this->Nodes->newEntity();
        if ($this->request->is('post')) {
            $node = $this->Nodes->patchEntity($node, $this->request->data);
            if ($this->Nodes->save($node)) {
                $this->Flash->success(__('The node has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The node could not be saved. Please, try again.'));
            }
        }
        $apps = $this->Nodes->Apps->find('list', ['limit' => 200]);
        $categories = $this->Nodes->Categories->find('list', ['limit' => 200]);


        /* $nodes_table = TableRegistry::get('nodes');
         $nodes_columns = $nodes_table->schema()->columns();

         $nodes_columns = array_combine($nodes_columns, $nodes_columns);
         $this->UtilPhp->var_dump($nodes_columns);

         die;*/


        $fields = $this->getDefaultFields();
        $ud_fields = $this->getUserDefinedFields($cat_id);
        $fields = array_merge($fields, $ud_fields);

        $this->set(compact('node', 'apps', 'categories', 'fields'));
        $this->set('_serialize', ['node']);

    }

    /**
     * Edit method
     *
     * @param string|null $id Node id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $node = $this->Nodes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $node = $this->Nodes->patchEntity($node, $this->request->data);
            if ($this->Nodes->save($node)) {
                $this->Flash->success(__('The node has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The node could not be saved. Please, try again.'));
            }
        }
        $apps = $this->Nodes->Apps->find('list', ['limit' => 200]);
        $categories = $this->Nodes->Categories->find('list', ['limit' => 200]);
        $this->set(compact('node', 'apps', 'categories'));
        $this->set('_serialize', ['node']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Node id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $node = $this->Nodes->get($id);
        if ($this->Nodes->delete($node)) {
            $this->Flash->success(__('The node has been deleted.'));
        } else {
            $this->Flash->error(__('The node could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


    /* public function getDefaultFields()
     {
         $this->autoRender = false;
         $categories = TableRegistry::get('Categories');
         $fields = $categories->find('all')->contain(['Fields']);

         return $fields;
     }*/


    private function getDefaultFields()
    {
        $fields = $this->Nodes->schema()->columns();

        $default_fields_array = [];

        foreach ($fields as $field) {
            if (strpos($field, 'ud_') === false) {
                array_push($default_fields_array, $field);
            }
        }
        return $default_fields_array;
    }

    private function getUserDefinedFields($cat_id)
    {
        $ud_fields_array = [];
        $categories = TableRegistry::get('Categories');

        $fields = $categories->get($cat_id, [
            'contain' => ['Fields']
        ]);

        foreach ($fields->fields as $field) {
            array_push($ud_fields_array, $field->title);
        }

        return $ud_fields_array;
    }

}
