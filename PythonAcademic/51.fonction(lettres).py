#filter des lettres d'une liste
liste=[2,3,2,'s','t',8,'r']
def filtre(liste):
    list_string=[]
    for i in liste:
        #if type(i)==str:
        if isinstance(i,str):
            list_string.append(i)
    return list_string
liste=filtre(liste)
print(f"les strings :{liste}")

'''--isinstance(object, type)--

The isinstance() function returns True
if the specified object is of the specified type,
 otherwise False.'''
