<?php
include 'Calendar.php';
$calendar = new Calendar('2021-06-02');
$calendar1 = new Calendar('2021-05-02');
for ($i=0; $i < 8; $i++) { 
    $rnd = rand(1,30);
    //$color = ($rnd == date('d')) ? 'red':'green';
    switch ($rnd) {
        case ($rnd == (date('d') - 1) || $rnd == date('d')):
            $color = 'red'; $msg = 'Clean';
            break;
        case $rnd > date('d'):
            $color = 'green';$msg = 'Due';
            break;
        default:
            $color = 'gray';$msg = 'Cleaned';
            break;
    }
    //add event to calendar
    $calendar->add_event($msg, "2021-06-$rnd", 1, $color);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>
