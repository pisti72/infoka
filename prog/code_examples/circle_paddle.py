import tkinter as tk

# Ablak létrehozása
root = tk.Tk()
root.title("Pattogó piros kör és ütő")
canvas = tk.Canvas(root, width=400, height=400, bg="white")
canvas.pack()

# Kör létrehozása
kör = canvas.create_oval(10, 10, 60, 60, fill="red")

# Ütő létrehozása
ütő = canvas.create_rectangle(150, 380, 250, 390, fill="blue")

# Kezdeti sebesség és irány
sebesség_x = 5  # vízszintes sebesség
sebesség_y = 5  # függőleges sebesség

# Ütő mozgatása
def ütő_mozgat(event):
    pozíció = canvas.coords(ütő)
    if event.keysym == "Left" and pozíció[0] > 0:  # Balra nyíl
        canvas.move(ütő, -20, 0)
    elif event.keysym == "Right" and pozíció[2] < 400:  # Jobbra nyíl
        canvas.move(ütő, 20, 0)

# Billentyű események figyelése
root.bind("<Left>", ütő_mozgat)
root.bind("<Right>", ütő_mozgat)

def mozgat():
    global sebesség_x, sebesség_y

    # Kör pozíciójának lekérése
    pozíció = canvas.coords(kör)
    x1, y1, x2, y2 = pozíció

    # Ütközés észlelése a képernyő szélein
    if x1 <= 0 or x2 >= 400:  # Bal vagy jobb szél
        sebesség_x *= -1  # Vízszintes irány megfordítása
    if y1 <= 0:  # Felső szél
        sebesség_y *= -1  # Függőleges irány megfordítása
    elif y2 >= 400:  # Alsó szél (játék vége)
        print("Játék vége! A kör leesett.")
        root.destroy()  # Ablak bezárása
        return

    # Ütközés észlelése az ütővel
    ütő_pozíció = canvas.coords(ütő)
    if y2 >= ütő_pozíció[1] and x1 >= ütő_pozíció[0] and x2 <= ütő_pozíció[2]:
        sebesség_y *= -1  # Függőleges irány megfordítása

    # Kör mozgatása
    canvas.move(kör, sebesség_x, sebesség_y)

    # Animáció frissítése (20 ms után újra meghívjuk a mozgat függvényt)
    root.after(20, mozgat)

# Animáció indítása
mozgat()

# Fő ciklus indítása
root.mainloop()