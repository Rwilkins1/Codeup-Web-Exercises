print <<EOF
	This is the first way of creating 
	here documents (i.e multiple line string).
EOF

print <<"EOF";
	This is the second way of creating 
	here documents.
EOF

print <<'EOC'
	echo hi there
	echo lo there
EOC

print <<"foo", <<"bar"
	I said foo.
foo
	I said bar.
bar
