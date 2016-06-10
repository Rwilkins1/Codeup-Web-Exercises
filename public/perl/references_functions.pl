sub PrintHash{
	my(%hash) = @_;

	foreach $item(%hash) {
		print "Item: $item\n";
	}
}
%hash = ('name' => 'Tom', 'age' => 19);

$cref = \&PrintHash;

&$cref(%hash);