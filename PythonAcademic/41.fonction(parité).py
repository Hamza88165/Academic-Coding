'''Créer un fonction qui determine la parité d'un nombre'''
def Parite(x):
    if x%2==0:
        return f"Le nombre {x} est: paire"
    else:
        return f"Le nombre {x} est: impaire"
print(Parite(5))
print(Parite(8))
    
