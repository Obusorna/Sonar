<?php

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

$contacts1 = RNCPHP\Contact::find("Name.Last = 'Smith'"); // NOK {{Use Fetch(ID) instead of Find() for better performance.}}
$contacts2 = RNCPHP\Contact::fetch($id); 
