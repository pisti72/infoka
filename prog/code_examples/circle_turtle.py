# Piros kör a teknöc könyvtár felhasználásával
import turtle

# Turtle beállítása
t = turtle.Turtle()
t.shape("turtle")  # Teknőc alak beállítása
t.color("red")     # A toll színének beállítása pirosra

# Kör rajzolása
t.begin_fill()     # Kitöltés kezdése
t.circle(100)      # 100 pixel sugarú kör rajzolása
t.end_fill()       # Kitöltés befejezése

# Ablak bezárása kattintásra
turtle.done()