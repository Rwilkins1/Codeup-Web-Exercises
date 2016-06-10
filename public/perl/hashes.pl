# Extracting Keys and values

%data = ('JohnPaul' => 45, 'Lisa' => 30, 'Kumar' => 40);

@names = keys %data;

@ages = values %data;

print "$names[0] is $ages[0] years old\n";
print "$names[1] is $ages[1] years old\n";
print "$names[2] is $ages[2] years old\n";