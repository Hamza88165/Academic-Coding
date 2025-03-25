'''creer un fonction qui donne Le nombre de valeurs communs de deux tuples? '''
valeur1 = list((1, 2, 3, 2, 5, 1, 2))
valeur2 = list((1, 5, 2, 7, 89, 4, 2))
def count_num(valeur1, valeur2):
    count_list = set(valeur1).intersection(valeur2)
    return count_list
num = len(count_num(valeur1, valeur2))
print(f"Le nombre de valeurs communs est {num}")


'''set(): remove duplication '''
'''The intersection(): method returns a ""set"" that contains 
    the similarity between two or more sets
'''

'''valeur1 = list((1, 2, 3, 2, 5, 1, 2))
valeur2 = list((1, 5, 2, 7, 89, 4, 2))
def count_num(valeur1, valeur2):
    count_list = set(valeur1) & set(valeur2)
    return count_list
num = len(count_num(valeur1, valeur2))
print(f"Le nombre de valeurs communs est {num}")'''