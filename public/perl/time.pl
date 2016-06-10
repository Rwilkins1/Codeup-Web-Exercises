# Epoch time
$datestring = localtime();
print "Current date and time $datestring\n";

$epoc = time() - 12 * 60 * 60;

$dateyest = localtime($epoc);

print "Yesterday's date and time $dateyest\n";
