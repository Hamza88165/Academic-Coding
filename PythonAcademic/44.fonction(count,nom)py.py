'''savoir le nombre d'apparition d'un nom'''
def compter_repetitions(noms, nom):
    return noms.count(nom)
noms = input("Entrez une liste de noms séparés par des virgules : ").split(',')
nom_a_verifier = input("Entrez le nom à vérifier : ")
repetition = compter_repetitions(noms, nom_a_verifier)
print(f"Le nom '{nom_a_verifier}' apparaît {repetition} fois dans {noms}.")


#split():Split a string into a list 
#        (where each word is a list item)
#You can specify the separator, 
# default separator is any whitespace.