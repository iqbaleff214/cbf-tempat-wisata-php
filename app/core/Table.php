<?php 

class Table extends Database {

    private $table;
    private $fields;
    private $primary;

    
    public function __construct($table, $primary='id', $fields=[]) {
        $this->table = $table;
        $this->primary = $primary;
        $this->fields = $fields;
        parent::__construct();
    }

    public function getAll()
    {
        return parent::getAllDB($this->table);
    }

    public function getWhere($where)
    {
        return parent::getWhereDB($this->table, $where);
    }

    public function getGroup($column)
    {
        return parent::getGroupDB($this->table, $column);
    }

    public function getLike($where)
    {
        return parent::getLikeDB($this->table, $where);
    }

    public function getJoin($select, $joinOn)
    {
        return parent::getJoinDB($this->table, $joinOn, $select);
    }

    public function get($id)
    {
        return parent::getDB($this->table, $this->primary, $id);
    }

    public function insert($data)
    {
        return parent::insertDB($this->table, $data);
    }

    public function update($id, $data)
    {
        return parent::updateDB($this->table, $data, $this->primary, $id);
    }

    public function delete($id)
    {
        return parent::deleteDB($this->table, $this->primary, $id);
    }

    public function getTableName(): String
    {
        return $this->table;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

}