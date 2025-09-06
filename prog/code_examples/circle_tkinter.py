# Piros kör a tkinter könyvtár felhasználásával
import tkinter as tk

# Fő ablak létrehozása
root = tk.Tk()
root.title("Piros kör")  # Az ablak címe

# Vászon létrehozása
canvas = tk.Canvas(root, width=200, height=200, bg="white")
canvas.pack()

# Kör rajzolása
canvas.create_oval(50, 50, 150, 150, fill="red", outline="red")  # (x1, y1, x2, y2) határoló téglalap

# Fő ciklus indítása
root.mainloop()