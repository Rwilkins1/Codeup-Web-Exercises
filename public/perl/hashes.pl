# Add/Remove Elements

%data = ('JohnPaul' => 45, 'Lisa' => 30, 'Kumar' => 40);

@keys = keys %data;
$size = @keys;
print "1 - Hash size is $size\n";

$data{'Ali'} = 55;
@keys = keys %data;
$size = @keys;
print "2 - Hash size is $size\n";

delete $data{'Ali'};
@keys = keys %data;
$size = @keys;
print "3 - Hash size is $size\n";