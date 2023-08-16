<?php
App::uses('AppController', 'Controller');
/**
 * OrdersItems Controller
 *
 * @property OrdersItem $OrdersItem
 */
class OrdersItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OrdersItem->recursive = 0;
		$this->set('ordersItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OrdersItem->id = $id;
		if (!$this->OrdersItem->exists()) {
			throw new NotFoundException(__('Invalid orders item'));
		}
		$this->set('ordersItem', $this->OrdersItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrdersItem->create();
			if ($this->OrdersItem->save($this->request->data)) {
				$this->Session->setFlash(__('The orders item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orders item could not be saved. Please, try again.'));
			}
		}
		$orders = $this->OrdersItem->Order->find('list');
		$items = $this->OrdersItem->Item->find('list');
		$this->set(compact('orders', 'items'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OrdersItem->id = $id;
		if (!$this->OrdersItem->exists()) {
			throw new NotFoundException(__('Invalid orders item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrdersItem->save($this->request->data)) {
				$this->Session->setFlash(__('The orders item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orders item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OrdersItem->read(null, $id);
		}
		$orders = $this->OrdersItem->Order->find('list');
		$items = $this->OrdersItem->Item->find('list');
		$this->set(compact('orders', 'items'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->OrdersItem->id = $id;
		if (!$this->OrdersItem->exists()) {
			throw new NotFoundException(__('Invalid orders item'));
		}
		if ($this->OrdersItem->delete()) {
			$this->Session->setFlash(__('Orders item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Orders item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
