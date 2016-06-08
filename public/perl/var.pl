# Array Variables Exercise
$var1 = 25;
$var2 = 30;
$var3 = 40;
@ages = ($var1, $var2, $var3);
@names = ("Paul", "George", "Ringo", "John");

# Use Escape characters to just print the word $ages, otherwise it will be interpreted
print "\$ages[0] = $ages[0]\n";
print "\$ages[1] = $ages[1]\n";
print "\$ages[2] = $ages[2]\n";
print "\$names[0] = $names[0]\n";
print "\$names[1] = $names[1]\n";
print "\$names[2] = $names[2]\n";