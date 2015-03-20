<?php

    echo "Hello World! ". 'from Sola\n'; 

    /**
     * Summary of MyClass
     
     */
    class MyClass
    {
	    var $p;
        var $q;
        /**
         * Summary of Foo
     * @todo: makes some sense
         */
        function Foo( )
        {
    	    echo __METHOD__;
            $this->q= new MyClass();
        }
        
        function Bar( )
        {
        	
        }
        
    
    }
    
    $a = new MyClass;
    $a->Foo(); 
    echo '\n';
    $a->q->Foo();
    
// TODO: To implement this later
?>