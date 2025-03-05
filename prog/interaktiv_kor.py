import tkinter as tk
from tkinter import simpledialog

# Fő ablak létrehozása
root = tk.Tk()
root.title("Piros kör")

# Vászon létrehozása
canvas = tk.Canvas(root, width=200, height=200, bg="white")
canvas.pack()

# Kör méretének és színének bekérése
sugar = simpledialog.askinteger("Kör sugara", "Add meg a kör sugarát (pixelben):", minvalue=10, maxvalue=100)
szin = simpledialog.askstring("Kör színe", "Add meg a kör színét (pl. red, blue, green):")

# Kör rajzolása
x1 = 100 - sugar
y1 = 100 - sugar
x2 = 100 + sugar
y2 = 100 + sugar
canvas.create_oval(x1, y1, x2, y2, fill=szin, outline=szin)

# Fő ciklus indítása
root.mainloop()