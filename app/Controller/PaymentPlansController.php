<?php
App::uses('AppController', 'Controller');
/**
 * PaymentPlans Controller
 *
 * @property PaymentPlan $PaymentPlan
 */
class PaymentPlansController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentPlan->recursive = 0;
		$this->set('paymentPlans', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PaymentPlan->id = $id;
		if (!$this->PaymentPlan->exists()) {
			throw new NotFoundException(__('Invalid payment plan'));
		}
		$this->set('paymentPlan', $this->PaymentPlan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentPlan->create();
			if ($this->PaymentPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The payment plan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment plan could not be saved. Please, try again.'));
			}
		}
		$projects = $this->PaymentPlan->Project->find('list', array(
        									'fields' => array('Project.project_name')));
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PaymentPlan->id = $id;
		if (!$this->PaymentPlan->exists()) {
			throw new NotFoundException(__('Invalid payment plan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentPlan->save($this->request->data)) {
				$this->Session->setFlash(__('The payment plan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment plan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PaymentPlan->read(null, $id);
		}
		$projects = $this->PaymentPlan->Project->find('list');
		$this->set(compact('projects'));
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
		$this->PaymentPlan->id = $id;
		if (!$this->PaymentPlan->exists()) {
			throw new NotFoundException(__('Invalid payment plan'));
		}
		if ($this->PaymentPlan->delete()) {
			$this->Session->setFlash(__('Payment plan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment plan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
