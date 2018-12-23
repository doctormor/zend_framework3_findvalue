<?php
namespace Test\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function indexAction()
    {

        // Function for finding X value 
        $num = 3;
        $multi = 0;
        $xval = '';

        for ($i = 1; $i <= 5; $i++) {
            $num = $num + $multi;

            if($i==5){
                $xval = $num;
            }

            $multi = $multi + 2;
        }

        $newxvalue = 4;


        // Function for finding X value 
        $num1 = 24;
        $num2 = 10;
        $num3 = 2;
        $num4 = 99;

        $yval = $num4 - ($num1+($num2*$num3));


        // Function for finding new X value 
        $newnum = 5;
        $addval = 2;
        $newxval = '';

        for ($ii = 1; $ii <= 5; $ii++) {

            if($ii==5){
                $newxval = $newnum;
            }

            $newnum = $addval.''.$newnum;
            $addval++;

        }


        return new ViewModel([
            'Xvalue' => $xval,  
            'Yvalue' => $yval,
            'newXvalue' => $newxval,
        ]);
    }

}