# 12. Sminktermék készlet ellenőrző 
# Sminktermékek listája
smink_termekek = ["rúzs", "szempillaspirál", "szemhéjpaletta", "pirosító"]

# Ellenőrizzük, hogy van-e alapozó a listában
if "alapozó" not in smink_termekek:
    print("Ideje beszerezni egy alapozót!")
else:
    print("Van alapozód, szuper!")
    
    



# Üdvözlés és történet bevezetése
print("Üdvözöllek a kalandjátékban!")
print("Egy sötét erdőben találod magad. Két út áll előtted: balra és jobbra.")

# Első választás
valasztas = input("Melyik utat választod? (balra/jobbra): ").lower()

# Történet folytatása az első választás alapján
if valasztas == "balra":
    print("\nBalra mentél, és egy folyóhoz értél.")
    print("Átúszol a folyón, vagy keresel egy hidat?")
    valasztas2 = input("Válassz: (uszás/híd): ").lower()

    if valasztas2 == "uszás":
        print("\nÁtúsztál a folyón, de egy veszélyes állat megtámadott. Vesztettél!")
    elif valasztas2 == "híd":
        print("\nMegtaláltad a hidat, és biztonságosan átjutottál. Nyertél!")
    else:
        print("\nÉrvénytelen választás. A játék véget ért.")

elif valasztas == "jobbra":
    print("\nJobbra mentél, és egy sötét barlanghoz értél.")
    print("Belemész a barlangba, vagy visszafordulsz?")
    valasztas2 = input("Válassz: (barlang/vissza): ").lower()

    if valasztas2 == "barlang":
        print("\nA barlangban egy kincset találtál. Nyertél!")
    elif valasztas2 == "vissza":
        print("\nVisszafordultál, de az erdőben eltévedtél. Vesztettél!")
    else:
        print("\nÉrvénytelen választás. A játék véget ért.")

else:
    print("\nÉrvénytelen választás. A játék véget ért.")