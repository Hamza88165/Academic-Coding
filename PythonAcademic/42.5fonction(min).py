'''créer une fonction min '''
def Min_num(*x):
    valeur_min=x[0]
    for i in x:
        if i<valeur_min:
            valeur_min=i
    return valeur_min
print(Min_num(1,-50,2,6,2))

'''def min_args(*args):
    return min(args)
print(min_args(3, 5, 7, 2, 8))
'''