import turtle

def draw_fern(t, size, angle, depth):
    if depth > 0:
        # Főszár
        t.forward(size)
        
        # Jobb ág
        t.right(angle)
        draw_fern(t, size * 0.7, angle, depth - 1)
        
        # Bal ág
        t.left(angle * 2)
        draw_fern(t, size * 0.7, angle, depth - 1)
        
        # Vissza a középponthoz
        t.right(angle)
        t.backward(size)

# Beállítások
screen = turtle.Screen()
screen.bgcolor("white")
artist = turtle.Turtle()
artist.speed(0)
artist.color("green")
artist.left(90)  # A páfrányt függőlegesen rajzoljuk

# Rajzolás (méret=100, szög=30, rekurziós mélység=5)
draw_fern(artist, 100, 40, 7)

artist.hideturtle()
screen.mainloop()