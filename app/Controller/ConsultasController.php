<?php
App::uses('AppController', 'Controller');
/**
 * Consultas Controller
 *
 * @property Consulta $Consulta
 */
class ConsultasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Consulta->recursive = 0;
		$this->set('consultas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Consulta->exists($id)) {
			throw new NotFoundException(__('Invalid consulta'));
		}
		$options = array('conditions' => array('Consulta.' . $this->Consulta->primaryKey => $id));
		$this->set('consulta', $this->Consulta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Consulta->create();
			if ($this->Consulta->save($this->request->data)) {
				$this->Session->setFlash(__('The consulta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consulta could not be saved. Please, try again.'));
			}
		}
		$historiasClinicas = $this->Consulta->HistoriasClinicas->find('list');
		$this->set(compact('historiasClinicas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Consulta->exists($id)) {
			throw new NotFoundException(__('Invalid consulta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Consulta->save($this->request->data)) {
				$this->Session->setFlash(__('The consulta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The consulta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Consulta.' . $this->Consulta->primaryKey => $id));
			$this->request->data = $this->Consulta->find('first', $options);
		}
		$historiasClinicas = $this->Consulta->HistoriasClinicas->find('list');
		$this->set(compact('historiasClinicas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Consulta->id = $id;
		if (!$this->Consulta->exists()) {
			throw new NotFoundException(__('Invalid consulta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Consulta->delete()) {
			$this->Session->setFlash(__('Consulta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Consulta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
