'''donner le nombre de teams afficher le tournois'''
num_teams = int(input("Enter the number of teams: "))
print("Match Schedule:")
for i in range(1,num_teams+1):
    for j in range(1,num_teams+1):
        if i !=j:
            print("Team",i,"Vs","Team",j)
        
