<?php

class Home extends Controller
{
    public function __construct()
    {
        //Em dùng để gọi method todo
        $this->TodoModel = $this->model('Todo');
    }

    public function index()
    {
        //Em gọi đến method getTodo
        $todo = $this->TodoModel->getTodo();

        //Gọi và show dữ liệu ra ngoài view
        $this->view('index', [
            'todo' => $todo
        ]);
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $result = $this->TodoModel->createTodo($_POST['Tentodo'], $_POST['Noidung'], $_POST['Trangthai']);
            if ($result) {
                header('location:' . URLROOT . '/views/index');
            }
        }
        $this->view('create');
    }

    public function update($id)
    {

        $findTodo = $this->TodoModel->findTodoById($id);

        if (isset($_POST['submit'])) {
            $update = $this->TodoModel->updateTodo($id, $_POST['Tentodo'], $_POST['Noidung'], $_POST['Trangthai']);
            if ($update) {
                header('location:' . URLROOT . '/views/index');
            }
        }

        $this->view('update', [
            'findTodo' => $findTodo
        ]);
    }

    public function delete($id)
    {
        $delete = $this->TodoModel->deleteTodo($id);
        if ($delete) {
            header('location:' . URLROOT . '/views/index');
        }
        $this->view('index');
    }
}
