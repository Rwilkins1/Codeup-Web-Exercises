$var = 10;
$r = \$var;
print "Value of $var is: ", $$r, "\n";

@var = (1, 2, 3);

$r = \@var;
print "Value of @var is: ", @$r, "\n";

%var = ('key1' => 10, 'key2' => 20);

$r = \%var;

print "Value of %var is: ", %$r, "\n";