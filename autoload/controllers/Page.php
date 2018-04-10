<?php
namespace controllers;

class Page {
    public function mainPage($f3)
    {
        \views\Render::main($f3);
    }

    public function quiz1Page($f3)
    {
        \views\Render::quiz1($f3);
    }

    public function quiz2Page($f3)
    {
        \views\Render::quiz2($f3);
    }

    public function quiz3Page($f3)
    {
        \views\Render::quiz3($f3);
    }
}