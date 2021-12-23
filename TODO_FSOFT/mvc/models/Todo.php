<?php
class Todo
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getTodo()
    {
        $sql = "SELECT * FROM fsoft_todo";
        $result = $this->db->select($sql);
        return $result;
    }

    public function createTodo($tentodo, $noidung, $trangthai)
    {
        $sql = "INSERT INTO fsoft_todo (tentodo,noidung,trangthai)
                VALUES ('$tentodo','$noidung','$trangthai')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function findTodoById($id)
    {
        $sql = "SELECT * FROM fsoft_todo WHERE id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateTodo($id, $tentodo, $noidung, $trangthai)
    {
        $sql = "UPDATE fsoft_todo SET  tentodo = '$tentodo',
                                       noidung = '$noidung',
                                       trangthai = '$trangthai'
                                WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTodo($id)
    {
        $sql = "DELETE FROM fsoft_todo WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
