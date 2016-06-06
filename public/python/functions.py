def changeme(list):
	list.append([1,2,3,4]);
	print "Values inside the function: ", list
	return

list = [10,20,30];
changeme(list);
print "Values outside the function: ", list