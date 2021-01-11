<?php
// This is array of names
$names_list = array('Aisha', 'Jaxx', 'Julie', 'James');

echo "Names list: <br />";
foreach($names_list as $name) {
    if ($name == 'Jaxx') {
        continue;
    }
    echo $name . '<br />'; 
}