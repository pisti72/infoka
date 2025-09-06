print("Egyszerű számológép")
szam1 = float(input("Add meg az első számot: "))
muvelet = input("Válassz műveletet (+, -, *, /): ")
szam2 = float(input("Add meg a második számot: "))

if muvelet == "+":
    eredmeny = szam1 + szam2
elif muvelet == "-":
    eredmeny = szam1 - szam2
elif muvelet == "*":
    eredmeny = szam1 * szam2
elif muvelet == "/":
    if szam2 != 0:
        eredmeny = szam1 / szam2
    else:
        eredmeny = "Hiba: Nullával való osztás!"
else:
    eredmeny = "Érvénytelen művelet!"

print(f"Eredmény: {eredmeny}")