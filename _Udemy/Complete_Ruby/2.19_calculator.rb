# puts "Simple Calculator - Multiplication!"
# 25.times { print "*" }
# puts "\nEnter the first number!"
# num_1 = gets.chomp
# puts "Enter the second number!"
# num_2 = gets.chomp
# puts "The first number times the second number is: #{num_1.to_f * num_2.to_f}."
# puts
# puts "Simple Calculator - Division!"
# 26.times { print "*" }
# puts "\nEnter the third number!"
# num_3 = gets.chomp
# puts "Enter the fourth number!"
# num_4 = gets.chomp
# puts "The third number divided by the fourth number is: #{num_3.to_f / num_4.to_f}."
# puts
# puts "Simple Calculator - Addition"
# 27.times { print "*" }
# puts "\nEnter the fifth number!"
# num_5 = gets.chomp
# puts "Enter the sixth number!"
# num_6 = gets.chomp
# puts "The fifth number added to the sixth number is: #{num_5.to_f + num_6.to_f}."
# puts
# puts "Simple Calculator - Subtraction!"
# 28.times { print "*" }
# puts "\nEnter the third number!"
# num_7 = gets.chomp
# puts "Enter the fourth number!"
# num_8 = gets.chomp
# puts "The seventh number subtracted from the eighth number is: #{num_7.to_f - num_8.to_f}."
# puts
# puts "Simple Calculator - Modulus!"
# 29.times { print "*" }
# puts "\nEnter the ninth number!"
# num_9 = gets.chomp
# puts "Enter the tenth number!"
# num_10 = gets.chomp
# puts "The ninth number modulated by the tenth number is: #{num_9.to_f % num_10.to_f}."

puts "A Slightly More Advanced Calculator"
20.times { print "س"}
puts
puts "Please enter your first number:"
av_calc_first_num = gets.chomp
puts "Please enter your second number:"
av_calc_second_num = gets.chomp
puts "What operation would you like to perform?"
puts "Enter (1) for (*), (2) for (/), (3) for (+), (4) for (-), (5) for (%%)"
av_calc_user_entry = gets.chomp
# puts "You selected #{av_calc_user_entry}"
if av_calc_user_entry == "1"
  puts "We will now perform multiplication"
  puts "#{av_calc_first_num} times #{av_calc_second_num} equals #{av_calc_first_num.to_f * av_calc_second_num.to_f}."
elsif av_calc_user_entry == "2"
  puts "We will now perform division"
  puts "#{av_calc_first_num} divided by #{av_calc_second_num} equals #{av_calc_first_num.to_f / av_calc_second_num.to_f}."
elsif av_calc_user_entry == "3"
  puts "We will now perform addition"
  puts "#{av_calc_first_num} plus #{av_calc_second_num} equals #{av_calc_first_num.to_f + av_calc_second_num.to_f}."
elsif av_calc_user_entry == "4"
  puts "We will now perform subtraction"
  puts "#{av_calc_first_num} minus #{av_calc_second_num} equals #{av_calc_first_num.to_f - av_calc_second_num.to_f}."
elsif av_calc_user_entry == "5"
  puts "We will now perform modulus"
  puts "#{av_calc_first_num} divided by #{av_calc_second_num} leaves a remainder of #{av_calc_first_num.to_f % av_calc_second_num.to_f}."
else
  puts "Please enter a choice from the list (1-5)."
end
