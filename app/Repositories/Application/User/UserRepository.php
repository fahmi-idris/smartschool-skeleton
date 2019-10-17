<?php
namespace Repositories\Application\User;
use Repositories\Entities\User\UserEntity;
use Repositories\Infrastructure\RepositoryInterface;
use Repositories\Infrastructure\Repository;
use Repositories\Infrastructure\TransactionManager;

Class UserRepository extends Repository {
    /**
     * @var UserEntity
     */
    protected $model;

    /**
     * @var TransactionManager
     */
    protected $transactionManager;


	public function __construct(UserEntity $model){
		$this->model = $model;
    }

	public function all($paginate = 'paginate', $count = int){
		if (isset($paginate) && $paginate == 'paginate' && isset($count)) {
			return $this->model->orderBy('id', 'desc')->paginate($count);
		}
		return $this->model->orderBy('id', 'desc')->get();
    }

    public function transactionExample($request){
        try {
            $this->transactionManager->begin();
            $service = new UserService(); // call class by service
            $service->store($request);
            $this->transactionManager->commit();
            return $data;
        } catch (\Exception $exception) {
            return $exception;
        }
	}
}
