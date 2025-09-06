import tkinter as tk

# Ablak létrehozása
root = tk.Tk()
root.title("Pattogó piros kör")
canvas = tk.Canvas(root, width=400, height=400, bg="white")
canvas.pack()

# Kör létrehozása
kör = canvas.create_oval(10, 10, 60, 60, fill="red")

# Kezdeti sebesség és irány
sebesség_x = 5  # vízszintes sebesség
sebesség_y = 5  # függőleges sebesség

def mozgat():
    global sebesség_x, sebesség_y

    # Kör pozíciójának lekérése
    pozíció = canvas.coords(kör)
    x1, y1, x2, y2 = pozíció

    # Ütközés észlelése a képernyő szélein
    if x1 <= 0 or x2 >= 400:  # Bal vagy jobb szél
        sebesség_x *= -1  # Vízszintes irány megfordítása
    if y1 <= 0 or y2 >= 400:  # Felső vagy alsó szél
        sebesség_y *= -1  # Függőleges irány megfordítása

    # Kör mozgatása
    canvas.move(kör, sebesség_x, sebesség_y)

    # Animáció frissítése (20 ms után újra meghívjuk a mozgat függvényt)
    root.after(20, mozgat)

# Animáció indítása
mozgat()

# Fő ciklus indítása
root.mainloop()