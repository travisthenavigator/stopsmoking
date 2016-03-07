<?php

/*******************************************************************************
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 ******************************************************************************/

// TIMELINE INFO
    # Day 1
$m1 = <<<EOM
    The heart attack rate for smokers is 70 percent higher than for nonsmokers. But, believe or not, just one full day after quitting smoking, your risk for heart attack will already have begun to drop. While you're not quite out of the woods yet, you're on your way!
EOM;
    # Day 2
$m2 = <<<EOM
    Deadened senses—specifically, smell and taste—are one of the more obvious consequences of smoking. Luckily, after 48 hours without a cigarette, your nerve endings will start to re-grow, and your ability to smell and taste is enhanced.
EOM;
    # Days 3-4
$m3 = <<<EOM
    At this point, the nicotine will be completely out of your body. Unfortunately, that means that the symptoms of nicotine withdrawal will generally peak around this time. You may experience some physical symptoms such as headaches, nausea, or cramps. In addition, you may also experience some emotional symptoms such as anxiety, tension, or frustration.
    To fight the mental symptoms, reward yourself for not smoking; use the money you would have spent on cigarettes to treat yourself to something nice.
EOM;

    # Days 5-9
$m4 = <<<EOM
        The "average" ex-smoker will encounter an "average" of three cue induced crave episodes per day. Although we may not be "average" and although serious cessation time distortion can make minutes feel like hours, it is unlikely that any single episode will last longer than 3 minutes. Keep a clock handy and time them.
EOM;

    # Day 10
$m5 = <<<EOM
        10 days - The "average" ex-user is down to encountering less than two crave episodes per day, each less than 3 minutes.
EOM;

    # Days 11-14
$m6 = <<<EOM
        Recovery has likely progressed to the point where your addiction is no longer doing the talking. Blood circulation in your gums and teeth are now similar to that of a non-user.
EOM;

    # Days 15-28
$m7 = <<<EOM
        Cessation related anger, anxiety, difficulty concentrating, impatience, insomnia, restlessness and depression have ended. If still experiencing any of these symptoms get seen and evaluated by your physician.
        Your heart attack risk has started to drop. Your lung function is beginning to improve.
EOM;

    # Days 29-270
$m8 = <<<EOM
        Starting about a month after you quit, your lungs begin to repair. Inside them, the cilia—the tiny, hair-like organelles that push mucus out—will start to repair themselves and function properly again. With the cilia now able to do their job, they will help to reduce your risk of infection. With properly functioning lungs, your coughing and shortness of breath may continue to decrease dramatically.
        Even for the heaviest smokers, withdrawal symptoms will go away no more than several months after quitting.
EOM;

    # Days 271-365
$m9 = <<<EOM
        The one-year mark is a big one. After a year without smoking, your risk for heart disease is lowered by 50 percent compared to when you were still smoking (CDC, 2004). Another way to look at it is that a smoker is more than twice as likely as you are to have any type of heart disease.
EOM;

// TIMELINE ARRAY
$timeline_array = array('Milestone 1' => $m1, 'Milestone 2' => $m2, 'Milestone 3' => $m3, 'Milestone 4' => $m4, 'Milestone 5' => $m5, 'Milestone 6' => $m6, 'Milestone 7' => $m7, 'Milestone 8' => $m8, 'Milestone 9' => $m9);

// CONVERT ARRAY TO JSON
echo json_encode($timeline_array);

?>