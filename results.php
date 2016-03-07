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
            
            <div id="nuknightlab_timeline"> 
                <script>
                    var timeline = new TL.Timeline('nuknightlab_timeline', 'milestones.json.php', options);
                    window.onresize = function(event) {
                        timeline.updateDisplay();
    };
                </script>
            </div>
            
        </main>
        <script src="js/timeline.js"></script>
    </body>
</html>