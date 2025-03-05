# A helyszínek és az útvonalak dictionary-ben tárolva
helyszinek = {
    "erdő": {
        "leírás": "Egy sötét erdőben találod magad. Két út áll előtted: balra és jobbra.",
        "lehetőségek": {"balra": "folyó", "jobbra": "barlang"}
    },
    "folyó": {
        "leírás": "Egy folyóhoz értél. Átúszol a folyón, vagy keresel egy hidat?",
        "lehetőségek": {"uszás": "vesztes", "híd": "nyertes"}
    },
    "barlang": {
        "leírás": "Egy sötét barlanghoz értél. Belemész a barlangba, vagy visszafordulsz?",
        "lehetőségek": {"barlang": "nyertes", "vissza": "vesztes"}
    },
    "nyertes": {
        "leírás": "Gratulálok, nyertél! A kaland sikeresen véget ért.",
        "lehetőségek": {}
    },
    "vesztes": {
        "leírás": "Sajnos vesztettél. A kaland véget ért.",
        "lehetőségek": {}
    }
}

# Kezdő helyszín
jelenlegi_hely = "erdő"

# Játék ciklus
while True:
    # Helyszín leírásának kiírása
    print(helyszinek[jelenlegi_hely]["leírás"])

    # Ha nincsenek további lehetőségek, a játék véget ér
    if not helyszinek[jelenlegi_hely]["lehetőségek"]:
        break

    # Lehetőségek kiírása
    print("Lehetőségeid:")
    for lehetoseg, cel in helyszinek[jelenlegi_hely]["lehetőségek"].items():
        print(f"- {lehetoseg}")

    # Felhasználó választása
    valasztas = input("Mit választasz? ").lower()

    # Ellenőrizzük, hogy a választás érvényes-e
    if valasztas in helyszinek[jelenlegi_hely]["lehetőségek"]:
        jelenlegi_hely = helyszinek[jelenlegi_hely]["lehetőségek"][valasztas]
    else:
        print("Érvénytelen választás. Próbáld újra!")