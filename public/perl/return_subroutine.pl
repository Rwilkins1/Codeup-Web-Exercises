sub Average{
	$n = scalar(@_);
	$sum = 0;

	foreach $item(@_) {
		$sum += $item;
	}
	$average = $sum / $n;

	return $average;
}

$num = Average(10, 20, 30, 40, 50, 60);
print "Average for the given numbers: $num\n";