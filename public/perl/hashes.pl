# Getting Hash Size

%data = ('JohnPaul' => 45, 'Lisa' => 30, 'Kumar' => 40);

@keys = keys %data;
$size = @keys;
print "1 - Hash size is $size\n";

@values = values %data;
$size = @values;
print "2 - Hash Size is $size\n";