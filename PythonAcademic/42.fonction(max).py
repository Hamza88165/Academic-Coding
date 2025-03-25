'''créer une fonction max '''
def Max_num(*x):
    valeur_max=x[0]
    for i in x:
        if i>valeur_max:
            valeur_max=i
    return valeur_max
print(Max_num(1,2,35,30))


'''the *x :syntax allows the function to accept 
    a variable number of positional arguments,
      and these arguments are collected into a 
      tuple named x.'''

'''def max_args(*args):
    return max(args)
print(max_args(3, 5, 7, 2, 8))'''

    

