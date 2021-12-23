<?php
class App{
    protected $controller = 'Home';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->urlProcess();

        //lọc controller
        if(isset($url[0])){
            //nếu người dùng nhập vào controller nào tồn tại thì sẽ gắn controller đó
            if(file_exists('./mvc/controllers/'.$url[0].'.php')){
                $this->controller = $url[0];
            }
            unset($url[0]);
        }
        //nếu người dùng nhập controller ko tồn tại hoặc ko nhập controller thì mặc định controller = 'Home'
        require_once './mvc/controllers/'.$this->controller.'.php';
        //Em khởi tại controller mới
        $this->controller = new $this->controller;
        //lọc action
        if(isset($url[1])){
            //nếu action người dùng nhập vào có tồn tại trong controller thì
            if(method_exists($this->controller, $url[1])){
                //gán action đó
                $this->action = $url[1];
            }
            unset($url[1]);
        }
        //nếu tồn tại tham số thì gán nếu không tham số params là rỗng
        $this->params = $url ? array_values($url) : [];

        //Em khởi tạo class từ controller
        call_user_func_array([$this->controller,$this->action], $this->params);

    }
    //Em dùng hàm cắt các dấu '/' trong url
    public function urlProcess(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $filter = filter_var($url);
            return explode('/',$filter);
        }
    }
}
?>