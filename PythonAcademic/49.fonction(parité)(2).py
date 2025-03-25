#filter les nombres paires d'une liste
list_num=[1,2,3,45,2,88]
def numPaire(list_num):
    list_num_paire=[]
    for i in list_num:
        if i%2==0:
            list_num_paire.append(i)
    return list_num_paire
list_num=numPaire(list_num)
print(f"les nombres paires {list_num}")
