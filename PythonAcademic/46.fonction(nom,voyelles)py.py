#savoir les nombres des voyelles dans un chaine de caracteres
def voyel_le(v):
    voyelles="aeyuioAEYUIO"
    num_voy=0
    for i in v:
        if i in voyelles:
            num_voy+=1
    return num_voy
a=input("taper la valeur: ")
result=voyel_le(a)
print(f"le nombre de voyelles: {result}")
            
