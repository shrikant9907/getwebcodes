<?php
/* 
* Run the schedule | Site - allprograms.
*/

// Check if the next schedule of hook
if ( ! wp_next_scheduled( 'incrementCounterHook' ) ) {
	// It will set the event with given interval
	wp_schedule_event( time(), 'every_2_hours', 'incrementCounterHook' );
}