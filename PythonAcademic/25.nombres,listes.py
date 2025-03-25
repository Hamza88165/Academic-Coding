'''afficher le nombre des nombres dans une liste et la somme'''
a=[1,2,3,4,5,3,8,5,1,6,3,8,2,7,4,1,2,3,5,6,8]
c=0
for i in a:
    if i==5:
        c+=1
print("le nombre des 5: ",c)
d=5*c
print("la somme des 5: ",d)
    
