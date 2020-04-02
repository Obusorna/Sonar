<?php

foo();                  
foo(1);                 

bar();                  
bar(1);                 

class obj {
    function Foo() {
        return "foo";
    }

    function Bar() {
        return "bar";
    }
};

$myObj = new Obj();

$myObj->foo();            
$myObj->bar();            

try{
	$x = 4;   
	$result = ROQL::queryObject("SELECT Contact From Contact"); 
}
catch(Exception $e){
       $result = 2;
}
try{
    $RESULT1 = 1;
}
catch(Exception $e){
     $result1 = 2;
}

$contacts = RNCPHP\Contact::find("Name.Last = 'Smith'"); // NOK {{ROQL/RNCPHP must be placed inside a try-catch block.}}
$result = ROQL::queryObject("SELECT Contact From Contact"); // NOK {{ROQL/RNCPHP must be placed inside a try-catch block.}}
