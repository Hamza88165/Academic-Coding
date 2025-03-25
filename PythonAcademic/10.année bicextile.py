'''Si une année est divisible par 4, 100 et 400, il s’agit d’une année bissextile.
Si une année est divisible par 4 mais pas par 100, il s’agit d’une année bissextile.'''
A=int(input("Tapez votre année : "))
if(A%4==0 and A%100!=0 or A%400==0):
    print("L'annee est une annee bissextile!")
else:
    print("L'annee n'est pas une annee bissextile!")


