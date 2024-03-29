<?php

class HomeController
{
    use Response;
    public function index()
    {
        $this->render("acceuilTemplate");   
     }

    public function pageNotFound()
    {
        echo ('<p>Page introuvable</p>');
    }
}
