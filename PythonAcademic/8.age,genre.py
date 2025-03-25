'''your age,genre ,if "h">20 impot contraire sans impot
if 18>="f"<=35 impot contairesans impot'''
B=input("genre")
A=int(input("your age"))
if A>0 and A<100:
    if B=="H":
        if A>20:
            print("impot")
        else:
            print("sans impot")
    elif B=="F" :
        if A>=18 and A<=35 :
            print("impot")
        else:
            print("sans impot")
    else:
        print("erreur")
else:
    print("taper votre vrai age")
        
    
