<?php

namespace App\Core;
class Controller
{
    protected Request $request;
    public function __construct(Request $request)
    {
        $this->request=$request;
    }
    public function render(string $path, array $data = [])
    {
        $data["constantes"]=\Constantes::class;
        $data["request"]=$this->request;
        ob_start();
        extract($data);
        require_once (\Constantes::VIEWS().$path.".html.php");
        $content_for_views=ob_get_clean();
        require_once (\Constantes::VIEWS()."layout/base.html.php");
    }
    public function redirectToRoute($uri)
    {
        header("location:".\Constantes::WEB_ROOT.$uri);
    }
}