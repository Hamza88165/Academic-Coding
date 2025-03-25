num1=int(input("taper le premier nombre: "))
num2=int(input("taper le deuxieme nombre: "))
def calculator(num1,num2):
    addition=num1+num2
    soustraction=num1-num2
    multiplication=num1*num2
    if num2!=0:
        division=round(num1 / num2, 2)
    else:
        division="Error;on ne peut pas diviser par '0'!!"
    return addition,soustraction,multiplication,division
results = calculator(num1, num2)
print(f"Addition: {results[0]}")
print(f"Soustraction: {results[1]}")
print(f"Multiplication: {results[2]}")
print(f"Division: {results[3]}")

#return;return values as a tuple



#round(x,y):specifie the number of decimal places
# x:valeur_decimal|| y=num_place

