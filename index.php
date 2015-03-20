<?php

    echo "Hello World! ". 'from Sola'; 

    class MyClass
    {
	    var $p;
        var $q;
        function Foo( )
        {
    	    echo __METHOD__;
            $this->q= new MyClass();
        }
    
    }
    $a = new MyClass;
    $a->q->Foo();

?>