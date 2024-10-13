weight = float(input("Enter your weight in kg: "))
height = float(input("Enter your height in m: "))

bmi = weight / height ** 2

if bmi < 18.5:
    print(bmi)
    print("Underweight")
elif bmi >= 18.5 and bmi < 25:
    print(bmi)
    print("Normal")
elif bmi >= 25 and bmi < 30:
    print(bmi)
    print("Overweight")
elif bmi >= 30:
    print(bmi)
    print("Obesity")