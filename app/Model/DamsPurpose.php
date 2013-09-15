<?php
App::uses('AppModel', 'Model');
/**
 * DamsPurpose Model
 *
 * @property Dam $Dam
 * @property Purpose $Purpose
 */
class DamsPurpose extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dam' => array(
			'className' => 'Dam',
			'foreignKey' => 'dam_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Purpose' => array(
			'className' => 'Purpose',
			'foreignKey' => 'purpose_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
