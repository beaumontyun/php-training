<?php $number = 0; ?>
<ul>
    <?php 
    while($number < 10) {
        echo '<li>' . $number . '</li>';
        $number++;
    }
    ?>

    <?php do {
        echo '<li>' . $number . '</li>';
        $number++;
    } while ($number < 10)
    ?>

    <?php 

    $days_of_week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    
    for($i = 0; $i < count($days_of_week); $i++ ) {
        echo '<li>' . $days_of_week[$i] . '</li>';
    }

    foreach($days_of_week as $day) {
        echo '<li>' . $day . '</li>';
    }
    ?>
</ul>