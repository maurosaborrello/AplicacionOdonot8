<?php
class UsersController extends AppController {
var $name = 'Users';
var $helpers = array('Html','Form', 'Js'=>array('jquery-1.8.3'));
function index() {
$this->set('users', $this->User->find('all'));
}
function add() {
if (!empty($this->data)) {
$this->User->create();
if ($this->User->save($this->data)) {
$this->Session->setFlash('El usuario ha sido registrado');
$this->redirect(array('action'=>'index'), null, true);
} else {
$this->Session->setFlash('Usuario no registrado. Intentar de nuevo');
}
}
}

function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Usuario o Contrase&ntilde;a Invalida'));
        }
    }
}

function logout() {
    $this->redirect($this->Auth->logout());
}

function home()
{
	$this->set('users',$this->User->find('all'));
}

}
?>