$string = "Hello, World!";

sub PrintHello{
	my $string;
	$string = "Hello, Perl!";
	print "Inside the function $string\n";
}

PrintHello();
print "Outside the function $string\n";