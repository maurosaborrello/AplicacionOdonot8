<?php
App::uses('HistoriasClinica', 'Model');

/**
 * HistoriasClinica Test Case
 *
 */
class HistoriasClinicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.historias_clinica'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HistoriasClinica = ClassRegistry::init('HistoriasClinica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HistoriasClinica);

		parent::tearDown();
	}

}
