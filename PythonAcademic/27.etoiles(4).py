a=int(input("taper le nombre : "))
for i in range(1, a + 1):
        for j in range(a - i):
            print(" ", end="")
        for k in range(1, 2*i):
            print("*", end="")
        print()
   
