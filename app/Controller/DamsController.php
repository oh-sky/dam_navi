<?php
/**
 * DamsController
 */

class DamsController extends AppController {

	public $layout = 'jquerymobile';

	public function index() {
		$this->set('damData', $this->Dam->find('all'));
	}

	public function order_by_distance_from() {
		if (
			isset($this->request->data['Dam']['latitude'])
			&& $this->request->data['Dam']['latitude']
			&& isset($this->request->data['Dam']['longitude'])
			&& $this->request->data['Dam']['longitude']
		) {
			$this->set(
				'damData',
				$this->Dam->orderByDistanceFrom(
					$this->request->data['Dam']['latitude'],
					$this->request->data['Dam']['longitude']
				));
			$this->set('latitude', $this->request->data['Dam']['latitude']);
			$this->set('longitude', $this->request->data['Dam']['longitude']);
		} else {
			$this->index();
		}
	}
}
