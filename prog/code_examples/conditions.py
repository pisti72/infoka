# Bekérjük, hogy mennyi csokit evett a felhasználó
csoki = int(input("Mennyi csokit ettél ma? (0-10 közötti szám): "))

# Feltételes elágazás
if csoki == 0:
    print("Hős vagy! Csak nem diétázol? 🦸")
elif 1 <= csoki <= 3:
    print("Jól van, még belefér egy kis öröm. 😊")
elif 4 <= csoki <= 6:
    print("Na na, vigyázz, nehogy elszállj a cukortól! 🚀")
elif 7 <= csoki <= 9:
    print("Biztos vagy benne, hogy nem egy csokigyárban dolgozol? 🏭")
else:
    print("10 csoki? Gratulálok, te vagy a Csoki Császár! 👑")