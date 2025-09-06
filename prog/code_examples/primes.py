def primes_up_to_1000():
    # Egy lista, amely jelzi, hogy egy szám prím-e (True/False)
    is_prime = [True] * 1001  # 0-tól 1000-ig
    is_prime[0] = is_prime[1] = False  # 0 és 1 nem prímszámok

    # Eratoszthenész szitája
    for number in range(2, int(1000**0.5) + 1):  # Csak a négyzetgyökig megyünk
        if is_prime[number]:  # Ha a szám prím
            for multiple in range(number * number, 1001, number):  # A többszöröseit kizárjuk
                is_prime[multiple] = False

    # Prímszámok kigyűjtése
    primes = [number for number, prime in enumerate(is_prime) if prime]
    return primes

# Prímszámok listázása
primes = primes_up_to_1000()
print("Prímszámok 1000-ig:")
print(primes)