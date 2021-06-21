student_grades = [9.1, 10.0, 8.8, 7.5, 10.0, 5.3, 7.4, 9.9, 10.0, 3.25]

mysum = sum(student_grades)
length = len(student_grades)
mean = mysum / length
max_value = max(student_grades)
c = student_grades.count(10.0)
print("This is the mean of student grades:", mean)
print("The highest grade is", max_value)
print("The average grade is", mean,
      "and the highest grade is", max_value, ".")
print(c)

# how to user lower function()

username = "Python3"
print(username.lower())

# display a list range
print(list(range(1, 10)))

# display a list range every other number
print(list(range(1, 10, 2)))

weeks_in_year = 52
current_number_of_weeks = 22

w2 = weeks_in_year
w1 = current_number_of_weeks

weeks_remaining_in_year = w2 - w1

w = weeks_remaining_in_year
print("There are", w, "weeks left in the year.")

remaining_pay = 600
rp = remaining_pay
remaining_annual_pay = rp * 6
print("Your remaining annual pay is", remaining_annual_pay)

mateen = 500

bonus = mateen * w
print("Dr. Mateen bonus for the rest of 2021:", bonus)
print("Total annual bonus including Dr. Mateen's bonus, annual pay, plus medical insurance stipend:",
      bonus + remaining_annual_pay + 6000)

# a list within a list!

rainfall = [1.1, 2, "hello", [8, 9, 10]]
print("This is the rainfaill list:", rainfall)

print("If you saved $150 per month, you'd have",
      150*12, "at the end of the year.")

tundra = 725
tundra_annual_payment = tundra * 12
print("Annual cost of Toyota Tundra:", tundra_annual_payment)

chase = 250
cap1 = 250
barclay = 150
boa_mc1 = 175

cc_payments = chase + cap1 + barclay + boa_mc1
print("Monthly credit card payments, on average:", cc_payments)
annual_cc_payments = cc_payments * 12
print("Annual credit card payments, on average:", annual_cc_payments)

t = "Your total annual truck and credit card payments are:"
print(t, tundra_annual_payment + annual_cc_payments)

monthly_payments = tundra_annual_payment + annual_cc_payments
print("Average monthly cost of truck and credit card payments:", monthly_payments / 12)
