from Employee import * 

emp1 = Employee("Zara", 2000)

emp2 = Employee("Manni", 5000)

emp1.displayEmployee()

emp2.displayEmployee()

print "Total Employee %d" % Employee.empCount
emp1.age = 24

print hasattr(emp1, 'age')
print getattr(emp1, 'age')
print setattr(emp1, 'age', 25)
print hasattr(emp1, 'age')
print getattr(emp1, 'age')
print delattr(emp1, 'age')
print hasattr(emp1, 'age')