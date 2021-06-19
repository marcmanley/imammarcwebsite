# strftime() function

from datetime import datetime as dt

# getting current date and time
now = dt.now()
print("Without formatting", now)

# Full day name
s = now.strftime("%B %A %-d %Y %-I %-M %p")
print('\nExample 2:', s)
