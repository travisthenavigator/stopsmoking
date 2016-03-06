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

// TIMELINE INFO
$m1 = <<<EOM
    The heart attack rate for smokers is 70 percent higher than for nonsmokers. But, believe or not, just one full day after quitting smoking, your risk for heart attack will already have begun to drop. While you're not quite out of the woods yet, you're on your way!
EOM;

$m2 = <<<EOM
    Deadened senses—specifically, smell and taste—are one of the more obvious consequences of smoking. Luckily, after 48 hours without a cigarette, your nerve endings will start to re-grow, and your ability to smell and taste is enhanced.
EOM;

$m3 = <<<EOM
        

At this point, the nicotine will be completely out of your body. Unfortunately, that means that the symptoms of nicotine withdrawal will generally peak around this time. You may experience some physical symptoms such as headaches, nausea, or cramps. In addition, you may also experience some emotional symptoms such as anxiety, tension, or frustration.

To fight the mental symptoms, reward yourself for not smoking; use the money you would have spent on cigarettes to treat yourself to something nice.
EOM;

// TIMELINE START
$timeline_array = array('Milestone 1' => $m1, 'Milestone 2' => $m2, 'Milestone 3' => $m3);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <main>
            <h1>stopsmoking.com</h1>
            <h3>stop smoking, start living!</h3>
            <label>Congratulations! You have been smoke-free for <?php echo htmlspecialchars($days); ?> days &amp have saved:</label>
            <span><?php echo htmlspecialchars($money_saved_formatted); ?></span>
            <p><?php echo $timeline_array['Milestone 1']?></p>
        </main>
    </body>
</html>