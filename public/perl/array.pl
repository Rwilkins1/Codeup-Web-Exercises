# Transform Arrays to Strings

$string = "Rain-Drops-On-Roses-And-Whiskers-On-Kittens";
$names = "Larry,David,Roger,Ken,Michael,Tom";

@string = split('-', $string);
@names = split(',', $names);

$string1 = join('-', @string);
$string2 = join(',', @names);

print "$string1\n";
print "$string2\n";