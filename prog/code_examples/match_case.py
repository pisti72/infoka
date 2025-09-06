# Bekérjük, hogy mennyi csokit evett a felhasználó
csoki = int(input("Mennyi csokit ettél ma? (0-10 közötti szám): "))

# Match-case szerkezet
match csoki:
    case 0:
        print("Hős vagy! Csak nem diétázol? 🦸")
    case 1 | 2 | 3:  # 1, 2 vagy 3 csoki
        print("Jól van, még belefér egy kis öröm. 😊")
    case 4 | 5 | 6:  # 4, 5 vagy 6 csoki
        print("Na na, vigyázz, nehogy elszállj a cukortól! 🚀")
    case 7 | 8 | 9:  # 7, 8 vagy 9 csoki
        print("Biztos vagy benne, hogy nem egy csokigyárban dolgozol? 🏭")
    case 10:  # Pontosan 10 csoki
        print("10 csoki? Gratulálok, te vagy a Csoki Császár! 👑")
    case _:  # Minden más eset (pl. 10-nél több)
        print("Hát, te már nem is ember vagy, hanem egy csokigép! 🤖")