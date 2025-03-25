'''inverser un objet'''
a=input("taper le nombre")
b=""
c=len(a)-1
while c>=0:
    b+=a[c]
    c-=1
print(b) 
