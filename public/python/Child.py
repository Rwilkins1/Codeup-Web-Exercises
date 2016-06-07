from Parent import *

class Child(Parent):
	def __init__(self):
		print "Calling child constructor"

	def childMethod(self):
		print "Calling child method"