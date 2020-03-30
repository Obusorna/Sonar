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
       

$query = "SELECT Contact.Name.First from Contact where ID = 408";
$q = ROQL::query($query)->next()->next();		// NOK {{Use RNCPHP instead of ROQL for better performance.}}
$incident = RNCPHP\Contact::fetch(408);
