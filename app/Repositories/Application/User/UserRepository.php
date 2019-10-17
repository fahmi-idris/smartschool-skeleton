<?php
namespace Repositories\Application\User;
use Repositories\Entities\User\UserEntity;
use Repositories\Infrastructure\RepositoryInterface;
use Repositories\Infrastructure\Repository;

Class UserRepository extends Repository {

    protected $model;

	public function __construct(User $model){
		$this->model = $model;
    }

	public function all($paginate = 'paginate', $count = int){
		if (isset($paginate) && $paginate == 'paginate' && isset($count)) {
			return $this->model->orderBy('id', 'desc')->paginate($count);
		}
		return $this->model->orderBy('id', 'desc')->get();
	}
}
