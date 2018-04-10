<?php
namespace views;

class shvRender {
    public static function main($f3)
    {
        $template = \Template::instance();
		echo $template->render("index.html"); // Вставить путь относительно папки ui
    }

    public static function quiz1($f3)
    {
        $template = \Template::instance();
		echo $template->render("quiz1.html"); // Вставить путь относительно папки ui
    }

    public static function quiz2($f3)
    {
        $template = \Template::instance();
		echo $template->render("quiz2.html"); // Вставить путь относительно папки ui
    }

    public static function quiz3($f3)
    {
        $template = \Template::instance();
		echo $template->render("quiz3.html"); // Вставить путь относительно папки ui
    }
}
