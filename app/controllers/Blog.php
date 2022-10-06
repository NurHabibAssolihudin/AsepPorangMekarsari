<?php

/**
 * 
 */
class Blog extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('blog/index');
        $this->view('templates/footer');
    }
}
