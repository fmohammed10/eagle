<?php
App::uses('AppController', 'Controller');
/**
 * Mutualfunds Controller
 *
 * @property Mutualfund $Mutualfund
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MutualfundsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mutualfund->recursive = 0;
		$this->set('mutualfunds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mutualfund->exists($id)) {
			throw new NotFoundException(__('Invalid mutualfund'));
		}
		$options = array('conditions' => array('Mutualfund.' . $this->Mutualfund->primaryKey => $id));
		$this->set('mutualfund', $this->Mutualfund->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mutualfund->create();
			if ($this->Mutualfund->save($this->request->data)) {
				$this->Session->setFlash(__('The mutualfund has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mutualfund could not be saved. Please, try again.'));
			}
		}
		$customers = $this->Mutualfund->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Mutualfund->exists($id)) {
			throw new NotFoundException(__('Invalid mutualfund'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Mutualfund->save($this->request->data)) {
				$this->Session->setFlash(__('The mutualfund has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mutualfund could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mutualfund.' . $this->Mutualfund->primaryKey => $id));
			$this->request->data = $this->Mutualfund->find('first', $options);
		}
		$customers = $this->Mutualfund->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Mutualfund->id = $id;
		if (!$this->Mutualfund->exists()) {
			throw new NotFoundException(__('Invalid mutualfund'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Mutualfund->delete()) {
			$this->Session->setFlash(__('The mutualfund has been deleted.'));
		} else {
			$this->Session->setFlash(__('The mutualfund could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
