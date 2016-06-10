sub PrintHash{
	my(%hash) = @_;

	foreach my $key (keys %hash) {
		my $value = $hash{$key};
		print "$key: $value\n";
	}
}
%hash = ('name' => 'Tom', 'age' => 19, 'height' => "5'10", 'weight' => '180lb');

PrintHash(%hash);