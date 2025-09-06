import random

# Lehetséges választások
valasztasok = ["kő", "papír", "olló"]

print("Üdvözöllek a Kő-Papír-Olló játékban!")
jatekos_valasztasa = input("Válassz: kő, papír vagy olló: ").lower()
gep_valasztasa = random.choice(valasztasok)

print(f"A gép választása: {gep_valasztasa}")

# Eredmény meghatározása
if jatekos_valasztasa == gep_valasztasa:
    print("Döntetlen!")
elif (jatekos_valasztasa == "kő" and gep_valasztasa == "olló") or \
        (jatekos_valasztasa == "papír" and gep_valasztasa == "kő") or \
        (jatekos_valasztasa == "olló" and gep_valasztasa == "papír"):
    print("Nyertél!")
else:
    print("Vesztettél!")