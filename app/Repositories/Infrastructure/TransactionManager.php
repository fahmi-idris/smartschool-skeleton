<?php
namespace Repositories\Infrastructure;
use Illuminate\Database\Connection;
/**
 * Class TransactionManager
 */
class TransactionManager {
    /**
     * @var Connection
     */
    private $db;
    /**
     * TransactionManager constructor.
     * @param Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    /**
     *
     */
    public function begin() {
        $this->db->beginTransaction();
    }
    /**
     *
     */
    public function commit() {
        $this->db->commit();
    }
    /**
     *
     */
    public function rollback() {
        $this->db->rollback();
    }
}
