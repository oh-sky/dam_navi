<?php
App::uses('AppModel', 'Model');
/**
 * Purpose Model
 *
 * @property Dam $Dam
 */
class Purpose extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Dam' => array(
			'className' => 'Dam',
			'joinTable' => 'dams_purposes',
			'foreignKey' => 'purpose_id',
			'associationForeignKey' => 'dam_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
