<?php
namespace Admin\Project3005\Models;
use Admin\Project3005\Commons\Model;


class User extends Model
{
    protected string $tableName="users";
    public function findByEmail($email)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('email = ?')
            ->setParameter(0, $email)
            ->fetchAssociative();
    }
}