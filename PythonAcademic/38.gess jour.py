a=input("Deviner un jour de semaine(capitalize): ")
jours=["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"]
tries=3
while tries>0:
    if a=="Vendredi":
        print("Vous avez gagné")
        break
    else:
        tries-=1
        if tries>0:
            if a in jours:
                pos_a=jours.index(a)
                diff = abs(pos_a - jours.index("Vendredi"))
                print(f"Incorrect!!Difference de {diff} jours")
                a=input("Deviner un jour de semaine(capitalize): ")
            else:
                print("Valeur invalid")
                a=input("Deviner un jour de semaine(capitalize): ")
        else:
            print("Vous Avez echouer!!") 
            
        