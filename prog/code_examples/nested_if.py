# Bekérjük a képernyő előtt töltött időt és a testmozgás mennyiségét
percek = int(input("Mennyi időt töltöttél ma a képernyő előtt? (percben): "))
mozgas = int(input("Mennyi időt mozogtál ma? (percben): "))

# Egymásba ágyazott if-then-else elágazások
if percek > 300:  # Több mint 5 óra képernyőidő
    if mozgas == 0:
        print("5 óra képernyőidő és 0 perc mozgás? Te egy igazi bújócska vagy! 🦥")
    elif mozgas < 30:
        print("5 óra képernyőidő és kevés mozgás? Na, ezt még javítani kellene! 🏃‍♂️")
    else:
        print("5 óra képernyőidő, de legalább mozogtál! Nem vagy veszve! 😅")
elif 120 < percek <= 300:  # 2-5 óra képernyőidő
    if mozgas == 0:
        print("2-5 óra képernyőidő és 0 perc mozgás? Na, ez már gyanús! 🧐")
    elif mozgas < 30:
        print("2-5 óra képernyőidő és kevés mozgás? Talán egy kis séta jót tenne! 🚶‍♀️")
    else:
        print("2-5 óra képernyőidő, de legalább mozogtál! Nem rossz! 👍")
else:  # Kevesebb mint 2 óra képernyőidő
    if mozgas == 0:
        print("Kevesebb mint 2 óra képernyőidő, de 0 perc mozgás? Miért nem mozogsz? 🤔")
    elif mozgas < 30:
        print("Kevesebb mint 2 óra képernyőidő és kevés mozgás? Talán egy kis tornát beiktathatnál! 🧘‍♂️")
    else:
        print("Kevesebb mint 2 óra képernyőidő és sokat mozogtál? Te vagy a példakép! 🌟")