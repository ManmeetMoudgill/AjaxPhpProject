<?php
$select=$_GET['select'];
$select=strtolower($select);


/* CREATING  THREE ARRAYS EACH ONE OF  GONNA CONTAINS A SOME FRAMEWORKS*/
$phpFramework=array('Symfony','Laravel','CodeIgniter','CakePHP','Zend');
$jsFrameWorks=array('Angular','React','Angular JS','Jquery','Express');
$pythonFramwWorks=array('Django','Flask','Web2py','CherryPy');

switch($select){
    case 'php': foreach($phpFramework as $php){
        echo "<option>$php</option>";
    }
    break;

    case 'javascript': foreach($jsFrameWorks as $js){
        echo "<option>$js</option>";
    }
    break;
    case 'python': foreach($pythonFramwWorks as $python){
        echo "<option>$python</option>";
    }
    break;
}


?>