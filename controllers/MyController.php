<?php
namespace Controllers;

use Models\MyModel;

class MyController
{
    public function run()
    {
        $myModel = new MyModel;
        echo $myModel->testfunc();
    }
}
