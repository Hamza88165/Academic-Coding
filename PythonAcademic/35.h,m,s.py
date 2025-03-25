'''donner une valeur afficher heure minute second'''
a=int(input("taper le nombre : "))
h=a//3600
b=a%3600
m=b//60
s=b%60
print("heure:",h,"minute: ",m,"second: ",s)
