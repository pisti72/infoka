# 1. For ciklus 1-től 10-ig
print("For ciklus 1-től 10-ig:")
for i in range(1, 11):  # range(1, 11) -> 1-től 10-ig
    print(i, end=" ")
print("\n")  # Új sor

# 2. While ciklus 1-től 10-ig
print("While ciklus 1-től 10-ig:")
i = 1
while i <= 10:
    print(i, end=" ")
    i += 1  # i növelése 1-gyel
print("\n")  # Új sor

# 3. For ciklus 10-től 1-ig
print("For ciklus 10-től 1-ig:")
for i in range(10, 0, -1):  # range(10, 0, -1) -> 10-től 1-ig, -1-es lépéssel
    print(i, end=" ")
print("\n")  # Új sor

# 4. While ciklus 10-től 1-ig
print("While ciklus 10-től 1-ig:")
i = 10
while i >= 1:
    print(i, end=" ")
    i -= 1  # i csökkentése 1-gyel
print("\n")  # Új sor