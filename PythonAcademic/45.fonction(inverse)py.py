#creer une fonction inverser
def inverser(x):
    return x[::-1]
a=input("taper la valeur: ")
print(f"the result: {inverser(a)}")

'''Syntaxe du slicing:
sequence[start:stop:step]
start : (inclus).
stop :(exclus).
step : incrément(default:1)'''
