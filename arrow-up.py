tinggi_segitiga_atas = 17
tinggi_kotak = 11
for i in range(1, tinggi_segitiga_atas + 1):
  print(" " * (tinggi_segitiga_atas - i) + "*" * (2 * i - 1))
for a in range(1, tinggi_kotak + 1):
  print(" " * tinggi_kotak + "*" * tinggi_kotak + " " * tinggi_kotak)