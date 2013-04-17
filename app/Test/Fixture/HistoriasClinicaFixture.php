<?php
/**
 * HistoriasClinicaFixture
 *
 */
class HistoriasClinicaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'numero_historia' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'fecha_ingreso' => array('type' => 'date', 'null' => false, 'default' => null),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'primer_apellido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'segundo_apellido' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'numero_historia_UNIQUE' => array('column' => 'numero_historia', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'numero_historia' => 1,
			'fecha_ingreso' => '2013-04-16',
			'nombre' => 'Lorem ipsum dolor sit amet',
			'primer_apellido' => 'Lorem ipsum dolor sit amet',
			'segundo_apellido' => 'Lorem ipsum dolor sit amet'
		),
	);

}
