class Point:
	def __init(self, x=0, y=0):
		self.x = x
		self.y = y
	def __del__(self):
		class_name = self.__class__.__name__
		print class_name, "destroyed"