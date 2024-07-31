<?php


class Student
{
    public $table;
    public $conn;

    public function __construct($table)
    {
        $db = new DB();
        $this->conn = $db->conn;
        $this->table = $table;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM students";
        $data =  $this->conn->query($sql)->fetchAll(2);
        // dd($data);
        return $data;
    }
}
