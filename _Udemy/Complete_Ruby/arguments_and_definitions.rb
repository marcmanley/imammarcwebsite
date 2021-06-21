#an example of arguments and definitions

def opening_greeting(greeting)
  puts greeting
end

opening_greeting "Salaams to all!\n\n"

#string concatenation
first_name = "Marc"
last_name = "Manley"
puts first_name + " " + last_name + "\n\n"

#string interpolation
print "This is an example of string interpolation. You must use double quotes:\n"
puts "My first name is #{first_name} and my last name is #{last_name}.\n\n"

#string interpolation only works with double quotes
print "String interpolation only works with double quotes:\n"
puts 'My first name is #{first_name} and my last name is #{last_name}.'

print "One more example:\n"
full_name = "#{first_name} #{last_name}."
puts full_name
