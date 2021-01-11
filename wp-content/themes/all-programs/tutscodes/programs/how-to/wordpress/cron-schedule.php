<?php 
/* 
* Create a cron schedule or interval | Site - allprograms.tech
*/
add_filter( 'cron_schedules', 'cronSchedules2Hours' );
function cronSchedules2Hours( $schedules ) {
    $schedules['every_2_hours'] = array(
        'interval' => 2 * 60 * 60, // Interval in seconds - 2 hour
        'display'  => __( 'Every 2 Hours' ),
    );
    return $schedules;
}