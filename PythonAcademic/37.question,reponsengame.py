print("Repond aux questions suivants")
a=["1.(1+1)?","2.largest continent?(capitalize)","3.largest country in the world?(capitalize)","4.'Morroco'in french?(capitalize)","5.the capital of Morocco?(capitalize)"]
b=["2","Asia","Russia","Maroc","Rabat"]
reponses_justes=0
i=0
while i<5:
        print(a[i])
        r=input("reponse: ")
        if r==b[i]:
                print("la reponse est correct")
                reponses_justes+=1
        else: print("la reponse est :",b[i])
        i+=1
print("le nombre des reponses justes est: ",reponses_justes)
