import re

line = "Dogs are better than cats"

match = re.match(r'cats', line, re.M|re.I)
if match:
	print "We've got a match!: ", match.group()
else:
	print "No match!"

search = re.search(r'cats', line, re.M|re.I)
if search:
	print "We've got a result!: ", search.group()
else:
	print "Nothing found!"