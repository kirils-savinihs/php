<?php
require('bottle.php');

try{
        $testbottle = new bottle(10,5,"juice");
}
catch (Exception $e)
{
        echo $e->getMessage();
}

try{
        $testbottle = new bottle(-1,10,"juice");
}
catch (Exception $e)
{
        echo $e->getMessage();
}

try{
        $testbottle = new bottle(0,0,"juice");
}
catch (Exception $e)
{
        echo $e->getMessage();
}

try{
        $testbottle = new bottle(100,200,"juice");
        $testbottle->print();
        for ($i=0;$i<20;$i++)
        {
                $testbottle ->pour();
                $testbottle ->print();
        }

}
catch (Exception $e)
{
        echo $e->getMessage();
}

try{
        $testbottle = new bottle(100,200,"juice");
        $testbottle->print();
        $testbottle->fill();
        $testbottle->print();
        $testbottle->fill();
        $testbottle->print();

}
catch (Exception $e)
{
        echo $e->getMessage();
}






?>