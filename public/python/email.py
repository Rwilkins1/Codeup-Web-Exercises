import smtplib

sender = "reagan@screenlight.com"
receiver = "reagan.wilkins@gmail.com"

message = """From: Reagan from Screenlight <reagan@screenlight.com>
To: Reagan Wilkins <reagan.wilkins@gmail.com>
Subject: SMTP e-mail test

This is a test e-mail message."""

# try:
# 	smtpObj = smtplib.SMTP('localhost')
# 	smtpObj.sendmail(sender, receivers, message)
# 	print "Successfully sent email"