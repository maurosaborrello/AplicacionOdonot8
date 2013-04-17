<?php
App::uses('AppController', 'Controller');
/**
 * HistoriasClinicas Controller
 *
 * @property HistoriasClinica $HistoriasClinica
 */
class HistoriasClinicasController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->HistoriasClinica->recursive = 0;
		$this->set('historiasClinicas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoriasClinica->exists($id)) {
			throw new NotFoundException(__('Invalid historias clinica'));
		}
		$options = array('conditions' => array('HistoriasClinica.' . $this->HistoriasClinica->primaryKey => $id));
		$this->set('historiasClinica', $this->HistoriasClinica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoriasClinica->create();
			if ($this->HistoriasClinica->save($this->request->data)) {
				$this->Session->setFlash(__('The historias clinica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historias clinica could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistoriasClinica->exists($id)) {
			throw new NotFoundException(__('Invalid historias clinica'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HistoriasClinica->save($this->request->data)) {
				$this->Session->setFlash(__('The historias clinica has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The historias clinica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoriasClinica.' . $this->HistoriasClinica->primaryKey => $id));
			$this->request->data = $this->HistoriasClinica->find('first', $options);
		}
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
		$this->HistoriasClinica->id = $id;
		if (!$this->HistoriasClinica->exists()) {
			throw new NotFoundException(__('Invalid historias clinica'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistoriasClinica->delete()) {
			$this->Session->setFlash(__('Historias clinica deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Historias clinica was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
