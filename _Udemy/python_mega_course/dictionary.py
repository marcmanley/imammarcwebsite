# this is a list
student_grades = [9.1, 8.8, 7.5]

# this is a dictionary
# a dictionary has items made of keys and values()
# if you append the dictionary with the .values() method you can run functions/operations on it
student_grades = {"Mary": 9.1, "Sim": 8.8, "John": 7.5}

mysum = sum(student_grades.values())
length = len(student_grades)
mean = mysum / length
print(mean)

# TUPLES
# tuples are immutable

monday_temps = (62.4, 79.3, 101.9)
# tuples cannot be changed so there is no .append() method
# monday_temps.append(88.8)

# LISTS

monday_temps2 = [62.4, 79.3, 101.9]
monday_temps2.append(88.8)

print(monday_temps)
print(monday_temps2)
