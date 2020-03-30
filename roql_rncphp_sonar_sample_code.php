<?php

foo();                  
foo(1);                 

bar();                  
bar(1);                 

class Obj {
    function foo() {
        return "foo";
    }

    function bar() {
        return "bar";
    }
};

$myObj = new Obj();

$myObj->foo();            
$myObj->bar();            

try{
	$x = 4;   
	$result = RNCPHP\ROQL::queryObject("SELECT Contact From Contact"); 
}
catch(Exception $e){
       $result = 2;
}
try{
    $result1 = 1;
}
catch(Exception $e){
     $result1 = 2;
}

$contacts = RNCPHP\Contact::find("Name.Last = 'Smith'"); // NOK {{ROQL/RNCPHP must be placed inside a try-catch block.}}
$result = RNCPHP\ROQL::queryObject("SELECT Contact From Contact"); // NOK {{ROQL/RNCPHP must be placed inside a try-catch block.}}
