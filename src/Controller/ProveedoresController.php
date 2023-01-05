<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Proveedores Controller
 *
 * @property \App\Model\Table\ProveedoresTable $Proveedores
 *
 * @method \App\Model\Entity\Proveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProveedoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $proveedores = $this->paginate($this->Proveedores);

        $this->set(compact('proveedores'));
    }

    /**
     * View method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proveedor = $this->Proveedores->get($id, [
            'contain' => [],
        ]);

        $this->set('proveedor', $proveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proveedor = $this->Proveedores->newEntity();
        if ($this->request->is('post')) {
            $proveedor = $this->Proveedores->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedores->save($proveedor)) {
                $this->Flash->success(__('El proveedor ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el proveedor. Inténtalo de nuevo.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proveedor = $this->Proveedores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proveedor = $this->Proveedores->patchEntity($proveedor, $this->request->getData());
            if ($this->Proveedores->save($proveedor)) {
                $this->Flash->success(__('El proveedor ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar el proveedor. Inténtalo de nuevo.'));
        }
        $this->set(compact('proveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proveedore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proveedor = $this->Proveedores->get($id);
        if ($this->Proveedores->delete($proveedor)) {
            $this->Flash->success(__('El proveedor ha sido eliminado.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar el proveedor. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
