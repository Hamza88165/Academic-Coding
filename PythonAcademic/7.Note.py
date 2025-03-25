'''d'apres votre note,évhoué[0,9],passable[10,12[,
assez bien[12,14[,bien[14,16[,tres bien[16,20]'''
A=int(input("Note : " ))
if A>=0 and A<=9 :
    print("échoue")
elif A>=10 and A<12 :
    print("Passable")
elif A>=12 and A<14:
    print("Assez bien")
elif A>=14 and A<16:
    print("Bien")
elif A>=16 and A<=20: 
    print("Très bien")
else:
    print("erreur")

