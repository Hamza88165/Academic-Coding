'''d'apres votre age'''
A=int(input("Age : " ))
if A>=1 and A<=9 :
    print("PS")
elif A>=10 and A<=12:
    print("CD")
elif A>=13 and A<=17:
    print("Mineur")
elif A>17:
    print("Agé")
else :
    print("erreur")



