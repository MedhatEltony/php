<?php
// NameSpace 
/***
 * 
 * 1-what are namespace and why to use them
 *      - definition 
 *      - problem solving 
 * 
 * 2-affected types by namespaces are traits , classes , interface , functions and constants
 * 3-Defining namespaces using the namespace keyword 
 * 4-Defining sub-namespace 
 * 5-Defining multiple namespace in the file 
 * 6-combining global non-namespace code with namespace code 
 * 7-understanding how namespace are interpreted 
 * 8-Accessing global function , classes . etc
 * 9-Namespace ans Dynamic language feature 
 * 
 * 
 * 
 * 
 * 
 */

namespace Main;

class Datatime
{
    public function sayhello()
    {

        echo 'hello awake ';
    }
}

$opj = new Datatime();
$opj->sayhello();
