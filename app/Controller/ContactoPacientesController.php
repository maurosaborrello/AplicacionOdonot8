<?php
App::uses('AppController', 'Controller');
/**
 * ContactoPacientes Controller
 *
 * @property ContactoPaciente $ContactoPaciente
 */
class ContactoPacientesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ContactoPaciente->recursive = 0;
		$this->set('contactoPacientes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ContactoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid contacto paciente'));
		}
		$options = array('conditions' => array('ContactoPaciente.' . $this->ContactoPaciente->primaryKey => $id));
		$this->set('contactoPaciente', $this->ContactoPaciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ContactoPaciente->create();
			if ($this->ContactoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The contacto paciente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacto paciente could not be saved. Please, try again.'));
			}
		}
		$historiasClinicas = $this->ContactoPaciente->HistoriasClinicas->find('list');
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
		if (!$this->ContactoPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid contacto paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ContactoPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The contacto paciente has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contacto paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ContactoPaciente.' . $this->ContactoPaciente->primaryKey => $id));
			$this->request->data = $this->ContactoPaciente->find('first', $options);
		}
		$historiasClinicas = $this->ContactoPaciente->HistoriasClinicas->find('list');
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
		$this->ContactoPaciente->id = $id;
		if (!$this->ContactoPaciente->exists()) {
			throw new NotFoundException(__('Invalid contacto paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ContactoPaciente->delete()) {
			$this->Session->setFlash(__('Contacto paciente deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contacto paciente was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
