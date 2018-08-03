<?php
namespace App\Repositories;

interface RepositoryContract
{
	public function all();

	public function get($id);

	public function create(array $data);

	public function update(array $data, $id);

	public function delete($id);
}