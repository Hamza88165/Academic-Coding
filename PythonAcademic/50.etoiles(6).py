#creer un pyramid des etoiles
a=int(input("taper les nombres: "))
for i in range(1,a+1):
    esp=" "*(a-i)
    etoiles="*"*(2*i-1)
    print(esp+etoiles)