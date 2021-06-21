def multiply(first_num, second_num)
  first_num.to_f * second_num.to_f
end

def divide(first_num, second_num)
  first_num.to_f / second_num.to_f
end

def subtract(first_num, second_num)
  first_num.to_f - second_num.to_f
end

def add(first_num, second_num)
  first_num.to_f + second_num.to_f
end

def mod(first_num, second_num)
  first_num.to_f % second_num.to_f
end

puts "Simple Calculator"
33.times { print "*" }
puts
puts "Please enter the first number:"
first_number = gets.chomp
puts "Please enter your second number:"
second_number = gets.chomp
puts "The first number times the second number is: #{multiply(first_number, second_number)}"
puts "The first number divided by the second number is: #{divide(first_number, second_number)}"
puts "The first number subtracted from the second number is: #{subtract(first_number, second_number)}"
puts "The first number added to the second number is: #{add(first_number, second_number)}"
puts "The first number modulated by the second number is: #{mod(first_number, second_number)}"
