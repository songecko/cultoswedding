<?php

include 'guests.php';

foreach (getGuests() as $code => $guest)
{
	echo '<p>'.$guest['name'].'</p>';
	echo '<a href="http://54.214.4.55/?g='.$code.'" target="_blank">http://54.190.34.161/?g='.$code.'</a><br><br>';
}