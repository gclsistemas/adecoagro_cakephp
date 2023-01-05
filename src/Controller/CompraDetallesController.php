<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompraDetalles Controller
 *
 * @property \App\Model\Table\CompraDetallesTable $CompraDetalles
 *
 * @method \App\Model\Entity\CompraDetalle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompraDetallesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Compras'],
        ];
        $compraDetalles = $this->paginate($this->CompraDetalles);

        $this->set(compact('compraDetalles'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra Detalle id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compraDetalle = $this->CompraDetalles->get($id, [
            'contain' => ['Compras'],
        ]);

        $this->set('compraDetalle', $compraDetalle);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compraDetalle = $this->CompraDetalles->newEntity();
        if ($this->request->is('post')) {
            $compraDetalle = $this->CompraDetalles->patchEntity($compraDetalle, $this->request->getData());
            if ($this->CompraDetalles->save($compraDetalle)) {
                $this->Flash->success(__('The compra detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra detalle could not be saved. Please, try again.'));
        }
        $compras = $this->CompraDetalles->Compras->find('list', ['limit' => 200]);
        $this->set(compact('compraDetalle', 'compras'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra Detalle id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compraDetalle = $this->CompraDetalles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compraDetalle = $this->CompraDetalles->patchEntity($compraDetalle, $this->request->getData());
            if ($this->CompraDetalles->save($compraDetalle)) {
                $this->Flash->success(__('The compra detalle has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The compra detalle could not be saved. Please, try again.'));
        }
        $compras = $this->CompraDetalles->Compras->find('list', ['limit' => 200]);
        $this->set(compact('compraDetalle', 'compras'));
    }

    /**
     * Store method from other control
     * @param $date
     * @return bool
     */
    public function store_from_another($data)
    {
        $compraDetalle = $this->CompraDetalles->newEntity();
        $compraDetalle = $this->CompraDetalles->patchEntity($compraDetalle, $data);
        if ($this->CompraDetalles->save($compraDetalle)) {
            return true;
        }
        return false;
    }

    /**
     * Update method from other control
     *
     * @param $id
     * @param $data
     * @return bool
     */
    public function update_from_another($id, $data)
    {
        $compraDetalle = $this->CompraDetalles->get($id, [ 'contain' => [], ]);
        $compraDetalle = $this->CompraDetalles->patchEntity($compraDetalle, $data);
        if ($this->CompraDetalles->save($compraDetalle)) {
            return true;
        }
        return false;
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra Detalle id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compraDetalle = $this->CompraDetalles->get($id);
        if ($this->CompraDetalles->delete($compraDetalle)) {
            $this->Flash->success(__('The compra detalle has been deleted.'));
        } else {
            $this->Flash->error(__('The compra detalle could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * Delete method from other control
     *
     * @param $id
     * @return bool
     */
    public function delete_from_another($id)
    {
        $compraDetalle = $this->CompraDetalles->get($id);
        if ($this->CompraDetalles->delete($compraDetalle)) {
            return true;
        }
        return false;
    }
}
