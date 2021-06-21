 users = [
            { username: "marc", password: "temp1234" },
            { username: "ziyan", password: "temp5678" },
            { username: "mike", password: "temp9012" },
            { username: "dave", password: "temp3456" },
            { username: "samia", password: "temp7890" }
          ]

def auth_user(username, password, list_of_users)
  list_of_users.each do |user_record|
    if user_record[:username] == username && user_record[:password] == password
      return user_record
    end
  end
  return "Credentials are not correct" # in Ruby the last return is implied can leave out
end

puts "Welcome to the authenticator"
25.times { print "*" }
puts
puts "This program will take input from the user and compare password"
puts "If password is correct, you will get back the user object"

attempts = 1
while attempts < 4
  print "Username: " # using print vs puts so it's on the same line
  username = gets.chomp
  print "Password: "
  password = gets.chomp
  authentication = auth_user(username, password, users)
  puts authentication
  puts "Press n to quit or any other key to continue: "
  input = gets.chomp.downcase
  break if input == "n"
  attempts += 1
 end
 puts "You have exceeded the number of attempts" if attempts == 4
