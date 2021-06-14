<?php

class Database {

    // objek koneksi database
    protected $conn = null;

    public function __construct() {
        // inisialisasi objek database saat pertama kali method dipanggil
        $this->conn = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    }

    public function __destruct() {
        // menghancurkan objek koneksi database saat objek dari class Database dihancurkan
        $this->conn->close();
    }

    public function getAllDB($table)
    {
        $sql = "SELECT * FROM {$table}";
        $res = $this->conn->query($sql);
        $ret = [];
        while ($row = $res->fetch_assoc()) $ret[] = $row;
        return $ret;
    }

    public function getWhereDB($table, $where = [])
    {
        $sql = "SELECT * FROM {$table} ";
        if (!empty($where)) {
            $sql .= "WHERE ";
            foreach ($where as $field => $value) {
                $sql .= "{$field}='{$value}'";
                if ($field!==array_key_last($where)) $sql .= " AND ";
            }
        }
        $res = $this->conn->query($sql);
        $ret = [];
        while ($row = $res->fetch_assoc()) $ret[] = $row;
        return $ret;
    }

    public function getLikeDB($table, $like = [])
    {
        $sql = "SELECT * FROM {$table} ";
        if (!empty($like)) {
            $sql .= "WHERE ";
            foreach ($like as $field => $value) {
                $sql .= "{$field} LIKE '%{$value}%'";
                if ($field!==array_key_last($like)) $sql .= " OR ";
            }
        }
        $res = $this->conn->query($sql);
        $ret = [];
        while ($row = $res->fetch_assoc()) $ret[] = $row;
        return $ret;
    }
    
    public function getJoinDB($table1, $joinOn, $select = [])
    {
        $sql = "SELECT ";
        if (empty($select) OR $select == '*') {
            $sql .= "*";
        } else {
            foreach ($select as $key => $value) {
                $sql .= "{$key}.{$value}";
                if ($key!==array_key_last($select)) $sql .= ", ";
            }
        }
        $sql .= " FROM {$table1} ";
        foreach ($joinOn as $table => $field) {
            $sql .= "JOIN {$table} ON {$field} ";
        }
        $res = $this->conn->query($sql);
        $ret = [];
        while ($row = $res->fetch_assoc()) $ret[] = $row;
        return $ret;
    }

    public function getDB($table, $primary, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE {$primary} = {$id}";
        $res = $this->conn->query($sql);
        $ret = [];
        while ($row = $res->fetch_assoc()) $ret[] = $row;
        return $ret[0];
    }

    public function insertDB($table, $data)
    {
        $sql = "INSERT INTO {$table}(";
        foreach ($data as $key => $value) {
            $sql .= "{$key}";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= ") VALUES (";
        foreach ($data as $key => $value) {
            $sql .= "'{$value}'";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= ")";
        return $this->conn->query($sql) ?: $this->conn->error;
    }

    public function updateDB($table, $data, $primary, $id)
    {
        $sql = "UPDATE {$table} SET ";
        foreach ($data as $key => $value) {
            $sql .= "{$key}='{$value}'";
            if ($key!==array_key_last($data)) $sql .= ", ";
        }
        $sql .= " WHERE {$primary}='{$id}'";
        // return $sql;
        return $this->conn->query($sql) ?: $this->conn->error;
    }

    public function deleteDB($table, $primary, $id)
    {
        $sql = "DELETE FROM {$table} WHERE {$primary} = {$id}";
        return $this->conn->query($sql);
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function checkConnection(): String
    {
        return $this->conn->connect_error ?: 'Berhasil';
    }
}