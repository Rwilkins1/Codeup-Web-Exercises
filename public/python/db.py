import MySQLdb

db = MySQLdb.connect("localhost", "py_user", "pypass", "python_db")

cursor = db.cursor()

curssor.execute("SELECT VERSION()")

data = cursor.fetchone()

print "Database version: %s" % data

db.close()