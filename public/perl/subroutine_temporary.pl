$string = "Hello, World!";

sub PrintHello{
	local $string;
	$string = "Hello, Perl!";
	PrintMe();
	print "Inside the function PrintHello $string\n";
}

sub PrintMe{
	print "Inside the function PrintMe $string\n";
}

PrintHello();
print "Outside the function $string\n";