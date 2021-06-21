a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]
# remeber: zero-indexing so 1 is actually 0, etc.
puts a
# prints them vertically because "puts" stands for "put string"
print a
#prints them on one line
p a
# Arrays
# ordered lists of items/elements
# maintains an index

b = ("Marc"), ("Ziyan"), ("Mike"), ("Dave"), ("Nancy"), ("Pierre")
p b
p b.shuffle

#

x = 1..100
x.class
x.to_a
x.to_a.shuffle
x
x.to_a.shuffle!
z = x.to_a.shuffle!
z.class
w = (1..10).to_a
v = "a".."z"
v.to_a
t = v.to_a.shuffle

#

a.unshift(0)
a.append(12)
a.append(12)
a.uniq
a.uniq!
a.include?(2)
a.include?(a)
a.push("new item")
n = a.pop
a.append("Marc")
a.append("Manley")

#

c = a.join(", ")
c.split
puts c

#

d = [1, 2, 3, 4, 5, "Jack"]
d.join
d.join("-")

#

e = d.join("-")
e.split
e.split("-")

#

%w(Man this Ruby On Rails stuff sure is hard)
# this converts whatever is in the parenthises to an array
f = _
# the "_" recalls the last command.
# this then turns the last command into a new array
for i in f
  print f
end
