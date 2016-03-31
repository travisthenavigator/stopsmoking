<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
/*******************************************************************************
 *                  Developed by: Travis Stevenson
 ******************************************************************************/

// get the data from the form
$date_started = strtotime( $_GET['started'] );
$packs_per_day = $_GET['packs_per_day'];
$brand_name = $_GET['brand_name'];

// CALCULATE NUMBER OF DAYS (and hours) THAT HAVE PASSED
$seconds_since = time() - $date_started;
$days = floor( $seconds_since / (60 * 60 * 24) );
$hours = round( ( $seconds_since - $days * 60 * 60 * 24 ) / ( 60 * 60 ) );

// CALCULATE MONEY SAVED
$money_saved = ($days * $packs_per_day) * $brand_name;

// apply currency formatting to the dollar amount
$money_saved_formatted = "$".number_format($money_saved, 2);

if ( $days == 1 ) {
	$start = 0;
} elseif ( $days >= 10 && $days <= 15 ) {
	$start = 1;
} elseif ( $days >= 15 && $days <= 30 ) {
	$start = 2;
} elseif ( $days >= 30 && $days <= 60 ) {
	$start = 3;
} elseif ( $days >= 60 && $days <= 120 ) {
	$start = 4;
} elseif ( $days >= 120 && $days <= 240 ) {
	$start = 5;
} elseif ( $days >= 240 && $days <= 240 ) {
	$start = 6;
} elseif ( $days >= 240 && $days <= 300 ) {
	$start = 7;
} else {
	$start = 8;
}

$year = date( 'Y', strtotime( $_GET['started'] ) );
$month = date( 'm', strtotime( $_GET['started'] ) );
$day = date( 'd', strtotime( $_GET['started'] ) );

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/timeline.css">
    </head>
    <body>
        <main>
            <h1>stopsmoking.com</h1>
            <h3>stop smoking, start living!</h3>
            <label>Congratulations! You have been smoke-free for <?php echo htmlspecialchars($days); ?> days &amp have saved:</label>
            <span><?php echo htmlspecialchars($money_saved_formatted); ?></span>

            <div id="nuknightlab_timeline" style="min-height:400px">
            </div>
						<script src="js/timeline.js"></script>
						 <script>
							 var timeline = new TL.Timeline(
								'nuknightlab_timeline',
								'milestones.json.php?year=<?php echo $year; ?>&month=<?php echo $month; ?>&day=<?php echo $day; ?>', // let's tell the JSON when he or she has quite smoking, so we can have a relative timeline, since this timeline plugin seems to have no method to create like periodical timelines, only works based on actual dates.
								{ // Please refer to the README.md of the TimelineJS package:
									height: '500px',
									width: '700px',
									start_at_slide: <?php echo $start; ?>
								});
							 window.onresize = function(event) {
								 timeline.updateDisplay();
							 };
						</script>
        </main>
    </body>
</html>