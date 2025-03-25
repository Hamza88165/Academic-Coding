'''metre un exercice qcm(questions/choix)'''
Questions = [
    {
    "Question" : "10x2=",
    "choix" : ["12","16","20","21"],
    "reponse_correcte":"20"
    },
    {
    "Question" : "What is the country neighboring Morocco?",
    "choix" : ["India","Tunisia","Algeria","Spain"],
    "reponse_correcte":"Algeria"
    },
    {
    "Question" : "How Many continents in the world are there ?",
    "choix" : ["8","7","3","4"],
    "reponse_correcte":"7"
    },
    {
    "Question" : "What is the capital of France??",
    "choix" : ["Berlin","Rabat","Paris","Madrid"],
    "reponse_correcte":"Paris"
    },
    {
    "Question" : "What is 5+3?",
    "choix" : ["53","2","8","4"],
    "reponse_correcte":"8"
    },
    {
    "Question" : "What planet is known as the Red Planet?",
    "choix" : ["Moon","Jupiter","Earth","Mars"],
    "reponse_correcte":"Mars"
    },
    {
    "Question" : "What is the boiling point of water in Celsius??",
    "choix" : ["100","99","96","25"],
    "reponse_correcte":"100"
    },
    {
    "Question" : "What team won the 2018 world cup?",
    "choix" : ["France","Brazil","England","Spain"],
    "reponse_correcte":"France"
    },
    {
    "Question" : "10x10=?",
    "choix" : ["110","1100","100","1000"],
    "reponse_correcte":"100"
    },
    {
    "Question" : "What year did the Titanic sink?",
    "choix" : ["2002","1945","1903","1912"],
    "reponse_correcte":"1912"
    },
    ]
score=0
for Question in Questions:
    print(Question["Question"])
    #Affichage des options avec leur index directement
    for index in range(len(Question["choix"])):
        print(f"{index+1}){Question['choix'][index]}" )
    try:
        reponse=int(input("your reponse(numero):"))
        if Question["choix"][reponse-1] == Question["reponse_correcte"]:
            print("Correct!")
            score+=1
        else:
            print(f"Incorrect! The correct answer was:{Question['reponse_correcte']}")
    except (ValueError,IndexError):
        print(f"Response Invalid! The right answer was:{Question['reponse_correcte']}")
print(f"Quiz ended!You have obtained {score}/{len(Questions)} right answer.")
