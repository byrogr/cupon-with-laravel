<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryContract
{
	protected $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function all()
	{
		return $this->model->all();
	}

	public function get($id)
	{
		return $this->model->findOrFail($id);
	}

	public function create(array $data)
	{
		return $this->model->create($data);
	}

	public function update(array $data, $id)
	{
		return $this->model->findOrFail($id)->update($data);
	}

	public function delete($id)
	{
		return $this->model->findOrFail($id)->delete();
	}
}