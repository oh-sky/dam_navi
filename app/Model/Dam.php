<?php
App::uses('AppModel', 'Model');
/**
 * Dam Model
 *
 * @property Type $Type
 * @property BasinSystem $BasinSystem
 * @property River $River
 * @property Purpose $Purpose
 */
class Dam extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'BasinSystem' => array(
			'className' => 'BasinSystem',
			'foreignKey' => 'basin_system_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'River' => array(
			'className' => 'River',
			'foreignKey' => 'river_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Purpose' => array(
			'className' => 'Purpose',
			'joinTable' => 'dams_purposes',
			'foreignKey' => 'dam_id',
			'associationForeignKey' => 'purpose_id',
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

	/**
	 * virtualFields
	 *
	 *@var array
	 */
	public $virtualFields = array(
		'latitude' => 'Y(Dam.point)',
		'longitude' => 'X(Dam.point)',
	);

	/**
	 * 指定した座標からの距離の近い順に返す
	 */
	public function orderByDistanceFrom($latitude, $longitude) {
		$options = array(
			'fields' => array(
				'Dam.*',
				"((ACOS(SIN( {$latitude} * PI() / 180) * SIN( Y(`Dam`.`point`) * PI() / 180) + COS( {$latitude} * PI() / 180) * COS( Y(`Dam`.`point`) * PI() / 180) * COS(( {$longitude} - X(`Dam`.`point`) ) * PI() / 180)) * 180 / PI()) * 60 * 1.1515) AS Dam__distance",
				'BasinSystem.*',
				'River.*',
			),
			'order' => array(
				'Dam__distance',
			),
			'group' => array(
				'Dam.id HAVING Dam__distance IS NOT NULL',
			),
		);
		return $this->find('all', $options);
	}
}
