# Transform Strings to Arrays

$string = "Rain-Drops-On-Roses-And-Whiskers-On-Kittens";
$names = "Larry,David,Roger,Ken,Michael,Tom";

@string = split('-', $string);
@names = split(',', $names);

print "$string[3]\n";
print "$names[4]\n";