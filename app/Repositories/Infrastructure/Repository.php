<?php
namespace Repositories\Infrastructure;
use Repositories\Infrastructure\RepositoryInterface;
use Illuminate\Container\Container as App;
use DB;

abstract class Repository implements RepositoryInterface {

    // initiate model
    protected $model;

    // abstraction for find function
	public function find($id){
		return $this->model->whereId($id)->first();
    }

    // abstraction for store function
	public function store($data){
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		return $this->model->create($data);
    }

    // abstraction for update function
	public function update($id, $data){
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		return $this->model->whereId($id)->update($data);
    }

    // abstraction for delete function
	public function delete($id){
		return $this->model->whereId($id)->delete();
	}
}
