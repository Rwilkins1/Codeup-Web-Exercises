def functionname(level):
	if level <= 1:
		raise "Invalid level!", level
	else:
		print "Level is greater than 1"

functionname(1)