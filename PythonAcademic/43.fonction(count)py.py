'''count how many repeated number'''
liste=[1,2,3,5,3,5,2]
def cou_nt(liste):
    counts={}
    for i in liste:
        if i not in counts:
            counts[i]=1
        else:
            counts[i]+=1
    nombres_repeter=0
    for j in counts.values():
        if j>1:
            nombres_repeter+=1
    return nombres_repeter
print(cou_nt(liste))
