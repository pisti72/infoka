import random

# Véletlenszerű szám generálása 1 és 100 között
szam = random.randint(1, 100)
tipp = None  # Kezdetben nincs tipp

print("Üdvözöllek a számkitalálós játékban!")
print("Gondoltam egy számra 1 és 100 között. Próbáld meg kitalálni!")

# Addig fut a ciklus, amíg a játékos el nem találja a számot
while tipp != szam:
    # Játékos tippjének bekérése
    tipp = int(input("Add meg a tipped: "))

    # Tipp ellenőrzése
    if tipp < szam:
        print("A tipped kisebb, mint a gondolt szám. Próbáld újra!")
    elif tipp > szam:
        print("A tipped nagyobb, mint a gondolt szám. Próbáld újra!")
    else:
        print(f"Gratulálok, eltaláltad! A gondolt szám {szam} volt.")