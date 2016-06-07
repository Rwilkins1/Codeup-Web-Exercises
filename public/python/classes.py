from Point import *

pt1 = Point()
pt2 = pt1
pt3 = pt1
print id(pt1), id(pt2), id(pt3)
del pt1
del pt2
del pt3