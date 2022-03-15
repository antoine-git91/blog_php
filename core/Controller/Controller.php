<?php

namespace Core\Controller;

class Controller {

    protected $view_path;
    protected $template;

    public function render($view, $data = [])
    {
        ob_start();
        extract($data);
        require ($this->view_path . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require ($this->view_path . 'templates/' . $this->template . '.php');
    }

    protected function notFound()
    {
        header("HTTP/1.0 404 Not Found");
        header("Location: index.php?p=404");
    }

    protected function forbidden(){
        header('HTTP/1.0 403 Forbidden');
        die('access interdit');
    }
}