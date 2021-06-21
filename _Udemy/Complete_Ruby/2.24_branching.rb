#if/else
if true
  puts "Salaams!"
  #else
  #execute some other code
end

if true
  puts "السلام عليكم"
else
  puts "وعليكم السلام"
end
# when the "if" statment is "true" it executes the "puts" and then skips
# everything else in the block
puts "How are you doing?"

if !true
  puts "السلام عليكم"
else
  puts "وعليكم السلام"
end
puts "See you next time, in sha'Allah."

condition = true
another_condition = true
if condition && another_condition
  puts "السلام عليكم (Haqq)"
else
  puts "وعليكم السلام (Bāṭil)"
end
puts "La la la"

condition = true
another_condition = false
if condition && another_condition
  puts "السلام عليكم (Haqq)"
else
  puts "وعليكم السلام (Bāṭil)"
end
puts "La la la"

# || - the double pipes == "or"
condition = true
another_condition = true
if condition || another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = true
another_condition = false
if condition || another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = false
another_condition = false
if condition && another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = false
another_condition = false
if condition || another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = false
another_condition = false
if !condition && !another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = false
another_condition = false
if !condition || !another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

condition = false
another_condition = false
if !condition || another_condition
  puts "Haqq"
else
  puts "Bāṭil"
end
puts "La la la"

puts
puts "السلام عليكم"

name = "Marc"
if name == "Marc"
  puts "Welcome, Marc."
elsif name == "Boo Radley"
  puts "Welcome, Boo Radley"
elsif name == "Ziyan"
  puts "Go do your homework!!"
else
  puts "I don't think we've met yet."
end

name = "Boo Radley"
if name == "Marc"
  puts "Welcome, Marc."
elsif name == "Boo Radley"
  puts "Welcome, Boo Radley"
elsif name == "Ziyan"
  puts "Go do your homework!!"
else
  puts "I don't think we've met yet."
end

name = "Ziyan"
if name == "Marc"
  puts "Welcome, Marc."
elsif name == "Boo Radley"
  puts "Welcome, Boo Radley"
elsif name == "Ziyan"
  puts "Go do your homework!!"
else
  puts "I don't think we've met yet."
end

name = "Rodger Dodger"
if name == "Marc"
  puts "Welcome, Marc."
elsif name == "Boo Radley"
  puts "Welcome, Boo Radley"
elsif name == "Ziyan"
  puts "Go do your homework!!"
else
  puts "I don't think we've met yet."
end
