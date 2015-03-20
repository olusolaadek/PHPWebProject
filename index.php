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
         * @
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
    // TODO: To implement this later
    $a = new MyClass;
    $a->Foo(); 
    echo '\n';
    $a->q->Foo();

?>