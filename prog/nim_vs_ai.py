import random

def nim_jatek_geppel():
    """Nim játék a gép ellen, ahol a gép optimális stratégiát alkalmaz"""
    golyok = random.randint(10, 20)  # Véletlenszerű kezdő szám (10-20 között)
    jatekos = 1  # 1 = ember, 2 = gép
    
    print("Üdvözöllek a Nim játékban!🎮")
    print(f"Kezdetben {golyok} golyó van. Minden körben 1, 2 vagy 3 golyót vehetsz el.")
    print("Az nyer, aki az utolsó golyót elveszi.\n")
    
    while golyok > 0:
        print(f"\nMaradt {golyok} golyó.")
        
        if jatekos == 1:
            # Ember lépése
            while True:
                try:
                    elvett = int(input("Mennyit szeretnél elvenni (1-3)? "))
                    if 1 <= elvett <= 3 and elvett <= golyok:
                        break
                    print("Érvénytelen lépés! 1, 2 vagy 3 golyót vehetsz el.")
                except ValueError:
                    print("Számot adj meg!")
        else:
            # Gép lépése - nyerő stratégia
            if golyok % 4 == 0:
                # Ha a golyók száma osztható 4-gyel, véletlenszerű lépés (veszítő pozíció)
                elvett = random.randint(1, min(3, golyok))
            else:
                # Optimális lépés: hagyjunk 4-gyel osztható számot
                elvett = golyok % 4
            
            print(f"A gép {elvett} golyót vesz el.")
        
        golyok -= elvett
        jatekos = 2 if jatekos == 1 else 1
    
    # Győztes kiírása
    if jatekos == 1:
        print("\nGratulálok, nyertél! A gép veszített.")
    else:
        print("\nA gép nyert! Legközelebb szerencsésebb leszel!")

# Játék indítása
nim_jatek_geppel()