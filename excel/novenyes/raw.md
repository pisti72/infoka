Köszönöm a visszajelzést! Az alábbiakban kiegészítem a feladatot az Ön által említett Excel függvényekkel (HA, SZUM, ÁTLAG, MAX, MIN), hogy a diákok ezeket is gyakorolhassák. A feladat mostantól tartalmazza ezeket a függvényeket is, amelyekkel további elemzéseket végezhetnek.

---

### Kiegészített Feladat: Növények növekedési adatainak elemzése

#### Feladatleírás:
Egy biológia órán a diákok különböző növények növekedési adatait mérték egy hónapig. A feladatod az, hogy az alábbi adatok alapján készíts egy Excel táblázatot, majd végezz elemzéseket, használva a **HA, SZUM, ÁTLAG, MAX, MIN** függvényeket, valamint készíts diagramokat.

#### Adatok:
| Növény neve | Kezdeti magasság (cm) | Hónap végén mért magasság (cm) | Növekedés (cm) | Növekedési ráta (%) |
|-------------|-----------------------|--------------------------------|----------------|--------------------|
| Borsó       | 10                    | 35                             |                |                    |
| Bab         | 12                    | 40                             |                |                    |
| Kukorica    | 15                    | 60                             |                |                    |
| Napraforgó  | 20                    | 80                             |                |                    |
| Búza        | 18                    | 50                             |                |                    |

---

### Feladatok:

1. **Adatbevitel és formázás:**
   - Hozd létre a fenti táblázatot Excelben.
   - Formázd a táblázatot úgy, hogy a fejlécek vastag betűkkel és középre igazítva legyenek.
   - Add hozzá a "Növekedés (cm)" és a "Növekedési ráta (%)" oszlopokat.

2. **Képletek használata:**
   - Számítsd ki a "Növekedés (cm)" oszlop értékeit a következő képlettel:  
     `Növekedés (cm) = Hónap végén mért magasság (cm) - Kezdeti magasság (cm)`
   - Számítsd ki a "Növekedési ráta (%)" oszlop értékeit a következő képlettel:  
     `Növekedési ráta (%) = (Növekedés (cm) / Kezdeti magasság (cm)) * 100`

3. **Függvények használata:**
   - **SZUM függvény:**  
     Számítsd ki a "Növekedés (cm)" oszlop összegét, hogy megtudd, mennyi volt az összes növény növekedése együtt.  
     Példa: `=SZUM(D2:D6)` (ahol D2:D6 a "Növekedés (cm)" oszlop).
   
   - **ÁTLAG függvény:**  
     Számítsd ki a növények növekedési rátájának átlagát.  
     Példa: `=ÁTLAG(E2:E6)` (ahol E2:E6 a "Növekedési ráta (%)" oszlop).
   
   - **MAX függvény:**  
     Add meg, hogy melyik növénynek volt a legnagyobb növekedési rátája.  
     Példa: `=MAX(E2:E6)` (ahol E2:E6 a "Növekedési ráta (%)" oszlop).
   
   - **MIN függvény:**  
     Add meg, hogy melyik növénynek volt a legkisebb növekedési rátája.  
     Példa: `=MIN(E2:E6)` (ahol E2:E6 a "Növekedési ráta (%)" oszlop).
   
   - **HA függvény:**  
     Készíts egy új oszlopot "Gyors növekedés" néven, amelyben a "Növekedési ráta (%)" alapján megállapítod, hogy a növény gyorsan nőtt-e. Ha a növekedési ráta nagyobb, mint 150%, akkor írd ki, hogy "Gyors", egyébként pedig "Lassú".  
     Példa: `=HA(E2>150;"Gyors";"Lassú")` (ahol E2 a "Növekedési ráta (%)" oszlop egy cellája).

4. **Diagramok készítése:**
   - Készíts egy oszlopdiagramot, amely a növények növekedési rátáját mutatja.
   - Készíts egy kördiagramot, amely a növények hónap végén mért magasságát mutatja.

5. **Elemzés:**
   - Rendezd a táblázatot a "Növekedési ráta (%)" oszlop szerint csökkenő sorrendbe.
   - Írd le, melyik növény nőtt a leggyorsabban és melyik a leglassabban.

---

#### Példa a megoldásra:

- **Növekedés (cm) oszlop:**  
  Például a Borsó növénynél: `=C2-B2` (ahol C2 a hónap végén mért magasság, B2 a kezdeti magasság).

- **Növekedési ráta (%) oszlop:**  
  Például a Borsó növénynél: `=(D2/B2)*100` (ahol D2 a növekedés, B2 a kezdeti magasság).

- **Gyors növekedés oszlop:**  
  Például a Borsó növénynél: `=HA(E2>150;"Gyors";"Lassú")`.

- **SZUM, ÁTLAG, MAX, MIN függvények:**  
  - `=SZUM(D2:D6)` (összes növekedés),  
  - `=ÁTLAG(E2:E6)` (átlagos növekedési ráta),  
  - `=MAX(E2:E6)` (legnagyobb növekedési ráta),  
  - `=MIN(E2:E6)` (legkisebb növekedési ráta).

---

#### Bónusz feladat:
- Készíts egy új oszlopot, amelyben kiszámolod, hogy ha a növények ugyanilyen ütemben növekednének, akkor mennyi idő alatt érnék el a 100 cm-es magasságot.  
  Példa: `=(100-B2)/D2` (ahol B2 a kezdeti magasság, D2 a növekedés).

---

Ez a kiegészített feladat lehetőséget ad a diákoknak, hogy gyakorolják az Excel alapvető függvényeit, miközben érdekes és gyakorlati példákon keresztül tanulnak.