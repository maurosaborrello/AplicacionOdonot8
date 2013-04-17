<?php
App::uses('ContactoPaciente', 'Model');

/**
 * ContactoPaciente Test Case
 *
 */
class ContactoPacienteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.contacto_paciente',
		'app.historias_clinicas'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ContactoPaciente = ClassRegistry::init('ContactoPaciente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContactoPaciente);

		parent::tearDown();
	}

}
