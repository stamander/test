
n = 1050 * 8 
s = n * 5
m = s * 4

p "日給は#{n}円です"
p "週給は#{s}円です"
p "月収は#{m}円です"


def introduce(name,age)
  puts "こんにちは"
  puts "私は#{name}です"
  puts "年齢は#{age}歳です"
end


def print_info(name)
  puts "#{name}でんきへようこそ！"
  puts "今日はヘッドホンがセール中です！"
end

introduce("ニンジャわんこ",12)
introduce("ミッキー",15)
introduce("ミニー",18)

# print_infoメソッドを呼び出してください
print_info("ats")
print_info("yuki")