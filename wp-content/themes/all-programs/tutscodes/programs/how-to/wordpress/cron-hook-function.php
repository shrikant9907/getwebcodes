<?php
/* 
* Create a function for task or event | Site - allprograms.
* You can create custom hook like incrementCounterHook here.
*/
add_action( 'incrementCounterHook', 'incrementCounterEvery2Hours' );
function incrementCounterEvery2Hours() {

	// Get counter value from options
	$counter = get_option('counter_value');

	if (!$counter) {

		// Assign 1 if $counter is empty
		$counter = 1;	

	} else {

		// Increment the value
		$counter = $counter + 1;

	}

	// Update the value
	update_option('counter_value', $counter);
}