'''tapez une valeur, savoir le type;nbre,lettre,caractère spéciale '''
A=input("Tappez votre valeur :")
if (A>="A"and A<="Z")or(A>="a"and A<="z"):
    print(A,"est une lettre")
elif A>="0"and A<="9":
    print(A,"est un nombre")
else:
    print(A,"est une caractère spéciale")
    

