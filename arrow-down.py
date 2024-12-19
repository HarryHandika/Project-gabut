bagian_atas = 11
bagian_bawah = 17

for i in range(1, bagian_atas + 1):
  print(" " * bagian_atas + "*" * bagian_atas)
for a in range(1, bagian_bawah + 1):
  print(" " * a + "*" * (bagian_bawah * 2 - a - a - 1))