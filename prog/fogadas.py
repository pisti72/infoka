import random

pénzed = 2000
while True:
    print(f"Most {pénzed} Ft pénzed van.")
    while True:
        fogadás = int(input("Mekkora összeggel fogadsz? "))
        if fogadás <= pénzed:
            pénzed = pénzed - fogadás
            print(f"Pénzed: {pénzed}")
            print(f"Tét: {fogadás}")
            break
        else:
            print("Nincs ennyi pénzed!")
    mire = input("Mire fogadsz? [f/i]")
    if mire=="f":
        print("Fejre fogadtál")
    else:
        print("Írásra fogadtál")
    dobás = random.randint(1,2)
    if dobás==1:
        print("Fej lett.")
    else:
        print("Írás lett.")
    nyertél = False
    if dobás == 1 and mire == "f":
        nyertél = True
    elif dobás == 2 and mire != "f":
        nyertél = True
    if nyertél:
        print("Nyertél!")
        pénzed = pénzed + 2 * fogadás
    else:
        print("Vesztettél")
        if pénzed == 0:
            print("Összes pénzed elfogyott! Vége a játéknak!")
            break
    