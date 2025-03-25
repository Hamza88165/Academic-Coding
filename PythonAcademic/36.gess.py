print("Devinez un nombre")
print("Indice1: le nombre entre 1 et 10")
print("Indice 2:le nombre est impaire")
print("Vous avez 3 fois")
a=int(input("Taper le nombre: "))
i=3
while i>0:
    if a==5:
        print("Vous avez gagné")
        break
    else:
         print("Nombre incorrect")
         i-=1
         if i>0:
             a=int(input("Taper le nombre: "))
         else:
             print("Vous avez échoué")

        


    
