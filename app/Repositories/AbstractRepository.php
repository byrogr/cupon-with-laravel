<?php

namespace App\Repositories;

abstract class AbstractRepository
{
	protected $model;

	public function getAll()
	{
		return $this->model->all();
	}

	public function getById($id)
	{
		$entity = $this->model->find($id);
		if (!$entity) {
			abort(404);
		}
		return $entity;
	}
}