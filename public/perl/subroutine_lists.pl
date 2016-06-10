sub PrintList{
	my @list = @_;
	print "Given list is @list\n";
}

$a = 10;
@b = (1, 2, 3, 4);

PrintList($a, @b);