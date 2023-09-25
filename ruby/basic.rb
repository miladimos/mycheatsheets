# puts "Hello World!"

# global -> $var
# class -> @@var
# interface -> @var
# local -> var
# block -> var

# =begin
# multiple comments
# =end

# puts <<HERE_DOC
#     LINE1
#     LIN2
# HERE_DOC

# 5.times do
#   puts "Hello"
# end

# 1.upto(5) { puts "Hello" }
# 5.downto(1) { puts "hello" }
# (1..5).each { puts "Hello" }

# 1.upto(5) do |i|
#   puts "Hello" + i.to_s
# end

# File.open("test.txt", "r") do |f|
#   f.each_line { |line| puts line }
# end

IO.foreach("test") { |line| puts line }
IO.
