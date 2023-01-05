<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Compras Controller
 *
 * @property \App\Model\Table\ComprasTable $Compras
 *
 * @method \App\Model\Entity\Compra[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ComprasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Proveedores'],
        ];
        $compras = $this->paginate($this->Compras);

        $this->set(compact('compras'));
    }

    /**
     * View method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => ['Proveedores', 'CompraDetalles'],
        ]);

        $this->set('compra', $compra);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $compra = $this->Compras->newEntity();
        if ($this->request->is('post')) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $ctrlCompraDetalle = new CompraDetallesController();
                $lstDetalle = $this->request->getData()['detalle'];
                foreach ($lstDetalle as $detalle) {
                    $detalle['compra_id'] = $compra->id;
                    $ctrlCompraDetalle->store_from_another($detalle);
                }

                $this->Flash->success(__('La compra ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar la compra. Inténtalo de nuevo.'));
        }
//        $proveedores = $this->Compras->Proveedores->find('list', ['limit' => 200]);
        $proveedores = $this->Compras->Proveedores->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $this->set(compact('compra', 'proveedores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $compra = $this->Compras->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $compra = $this->Compras->patchEntity($compra, $this->request->getData());
            if ($this->Compras->save($compra)) {
                $ctrlCompraDetalle = new CompraDetallesController();
                $lstDetalle = $this->request->getData()['compras_detalle_del_ids'];
                foreach ($lstDetalle as $detalle) {
                    $ctrlCompraDetalle->delete_from_another($detalle);
                }
                $lstDetalle = $this->request->getData()['detalle'];
                foreach ($lstDetalle as $detalle) {
                    $detalle['compra_id'] = $compra->id;
                    if (!array_key_exists('id', $detalle)) {
                        $ctrlCompraDetalle->store_from_another($detalle);
                    } else {
                        $ctrlCompraDetalle->update_from_another($detalle['id'], $detalle);
                    }
                }

                $this->Flash->success(__('La compra ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se pudo guardar la compra. Inténtalo de nuevo.'));
        }
//        $proveedor = $this->Compras->Proveedores->find('list', ['limit' => 200]);
        $proveedores = $this->Compras->Proveedores->find('list', ['keyField' => 'id', 'valueField' => 'nombre']);
        $compraDetalles = $this->Compras->CompraDetalles->find('all')->toList();
//        dd($compraDetalles);
//        dd($this->Compras->CompraDetalles->find('all')->toList());
        $this->set(compact('compra', 'proveedores', 'compraDetalles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Compra id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $compra = $this->Compras->get($id);
        if ($this->Compras->delete($compra)) {
            $this->Flash->success(__('La compra ha sido eliminada.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar la compra. Inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
