<!DOCTYPE html>
<?php
$peldaprogramok = [
    [
        'title' => 'Sima egyszerű Helló Világ',
        'description' => '',
        'file' => 'prog/code_examples/hello.py'
    ],
    [
        'title' => 'Üdvözlő',
        'description' => '',
        'file' => 'prog/code_examples/input.py'
    ],
    [
        'title' => 'Feltételes elágazások (if-then-else)',
        'description' => '',
        'file' => 'prog/code_examples/conditions.py'
    ],
    [
        'title' => 'Feltételes elágazások (match-case, switch-case)',
        'description' => '',
        'file' => 'prog/code_examples/match_case.py'
    ],
    [
        'title' => 'Ciklusok',
        'description' => '',
        'file' => 'prog/code_examples/loops.py'
    ],
    [
        'title' => 'Prímszámok listázása 1000-ig',
        'description' => 'Ez a program, amely kilistázza az összes prímszámot 1000-ig. A program a prímszámok megtalálására a klasszikus "Sieve of Eratosthenes" (Eratoszthenész szitája) algoritmust használja, amely hatékony és könnyen megvalósítható.',
        'file' => 'prog/code_examples/primes.py'
    ],
    [
        'title' => 'Számkitalálós játék',
        'description' => 'Ebben a játékban a gép gondol egy számra 1 és 100 között. A játékosnak ezt a számot kell kitalálni.',
        'file' => 'prog/code_examples/game_guess.py'
    ],
    [
        'title' => 'Kő-Papír-Olló játék',
        'description' => 'Ez egy klasszikus játék, ahol a játékos a gép ellen játszik.',
        'file' => 'prog/code_examples/game_rps.py'
    ],
    [
        'title' => 'Számológép',
        'description' => 'Egy egyszerű számológép, amely alapműveleteket végez.',
        'file' => 'prog/code_examples/calculator.py'
    ],
    [
        'title' => 'Kalandjáték',
        'description' => 'A szöveges kalandjátékok (angolul text-based adventure games) az 1970-es és 1980-as években váltak népszerűvé...',
        'file' => 'prog/code_examples/adventure.py'
    ],
    [
        'title' => 'Piros kör 🔴',
        'description' => 'Az alábbi programokban megnézzük a Python grafikai és animációs képességeit pár egyszerű példán keresztül.',
        'file' => 'prog/code_examples/circle_turtle.py'
    ],
    [
        'title' => 'Piros kör 🔴 tkinter könyvtárral',
        'description' => '',
        'file' => 'prog/code_examples/circle_tkinter.py'
    ],
    [
        'title' => 'Interaktív kör 🔴 🔵 🟢 🟡',
        'description' => '',
        'file' => 'prog/code_examples/circle_interactive.py'
    ],
    [
        'title' => 'Pattogó kör ((((🔴',
        'description' => '',
        'file' => 'prog/code_examples/circle_bounce.py'
    ],
    [
        'title' => 'Pattogó piros kör 🔴 és mozgatható ütő',
        'description' => '',
        'file' => 'prog/code_examples/circle_paddle.py'
    ]
];
?>
<html lang="hu">

<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7NS9ZEREH1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-7NS9ZEREH1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programozás</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="assets/prism.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <script src="assets/script.js"></script>
</head>

<body>
    <header>
        <h1><a href="index.html" class="logo">Infoka.hu</a></h1>
    </header>
    <div class="container">
        <h2>Programozás</h2>
        <p>Ezen az oldalon programozással kapcsolatos oktatási anyagokat találsz.</p>
        <h3>Tananyagok</h3>
        <table>
            <thead>
                <tr>
                    <th>Micsoda</th>
                    <th>Link vagy fájl</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="assets/nkp_logo.svg" class="icon">Tankönyvben
                    </td>
                    <td>
                        <a href="https://www.nkp.hu/tankonyv/digitalis_kultura_9_nat2020/lecke_05_001"
                            target="_blank"><img src="assets/www.png" class="icon">nkp Programozás</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/nkp_logo.svg" class="icon">Okosgyűjtemény
                    </td>
                    <td>
                        <a href="https://www.nkp.hu/tankonyv/digitalis-kultura-okosgyujtemeny-9-12/lecke_01_001"
                            target="_blank"><img src="assets/www.png" class="icon">nkp Programozás - Alapok</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/python-logo-only.svg" class="icon">Python
                    </td>
                    <td>
                        <a href="https://www.python.org/" target="_blank"><img src="assets/www.png"
                                class="icon">www.python.org</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/w3schools_logo.svg" class="icon">Python W3School
                    </td>
                    <td>
                        <a href="https://www.w3schools.com/python/" target="_blank"><img src="assets/www.png"
                                class="icon">www.w3schools.com/python/</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/python-logo-only.svg" class="icon">Online Python
                    </td>
                    <td>
                        <a href="https://www.online-python.com/" target="_blank"><img src="assets/www.png"
                                class="icon">www.online-python.com</a>
                    </td>
                </tr>
                <tr>
                    <td><img src="assets/lexaloffle-pico8.png" class="icon">
                        Pico 8 Education
                    </td>
                    <td>
                        <a href="https://www.pico-8-edu.com/" target="_blank"><img src="assets/www.png"
                                class="icon">www.pico-8-edu.com</a><br>
                        <a href="pico8.html"><img src="assets/lexaloffle-pico8.png"
                                class="icon">PICO-8 Letöltések</a>
                                <p>Pico-8 5 percben:<p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/vEWvlmK5WO4?si=q4sPtBszHUsfhZJ6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                <p>Játék fejlesztés Pico-8 -al:<p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/YtylfQq2JII?si=G0sLqpP0w9jpY5kj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </td>
                </tr>
                <tr>
                    <td><img src="assets/tic80-logo64.png" class="icon">
                        TIC-80
                    </td>
                    <td>
                        <a href="https://tic80.com/create" target="_blank"><img src="assets/www.png"
                                class="icon">tic80.com/create</a>
                    </td>
                </tr>
                <tr>
                    <td><img src="assets/microbit-logo.svg" class="icon"></td>
                    <td>
                        <a href="https://makecode.microbit.org/#"><img src="assets/www.png"
                                class="icon">makecode.microbit.org</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="assets/scratch-logo.svg" class="icon">
                    </td>
                    <td>
                        <a href="https://scratch.mit.edu/">
                            <img src="assets/www.png" class="icon">scratch.mit.edu</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Microbit prezi
                    </td>
                    <td>
                        <a href="prog/microbit_feladatok_középsuli.pptx">
                            <img src="assets/ppt.png" class="icon">microbit_feladatok_középsuli.pptx</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Bevezetés a programozás világába
                    </td>
                    <td>
                        <a href="prog/Bevezetés a Programozás Világába.pptx">
                            <img src="assets/ppt.png" class="icon">Bevezetés a Programozás Világába.pptx</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Üdvözlés 3 féle nyelven
                    </td>
                    <td>
                        <a href="prog/welcome.html"><img src="assets/html.png" class="icon">welcome.html</a><br>
                        <a href="prog/welcome.xlsm"><img src="assets/excel.png" class="icon">welcome.xlsm</a><br>
                        <a href="prog/welcome.py"><img src="assets/py.png" class="icon">welcome.py</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Programozási nyelvek megoszlása
                    </td>
                    <td>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/qQXXI5QFUfw?si=JPYpN0vnuMpPI79u"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </td>
                </tr>


            </tbody>
        </table>
        <h3>Feladatok</h3>
        <table>
            <thead>
                <tr>
                    <th>Feladat</th>
                    <th>Leírás 🔒</th>
                    <th>Forrás fájl 🔒</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Egyszerű feladatok</td>
                    <td>
                        <a href="prog/prog_feladatok.pdf" id="31"><img src="assets/pdf.png"
                                class="icon">prog_feladatok.pdf</a>
                    </td>
                    <td>
                        <a href="prog/prog_feladatok.pdf" id="32"><img src="assets/py.png" class="icon">nope.py</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3>Godot</h3>
        <table>
            <thead>
                <tr>
                    <th>Feladat</th>
                    <th>Forrás fájlok</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Godot 4.4.1 telepítése</td>
                    <td>
                        <a href="prog/godot_telepites.pdf"><img src="assets/pdf.png"
                                class="icon">godot_telepites.pdf</a>
                    </td>
                </tr>
                <tr>
                    <td>Mario ugrálós</td>
                    <td>
                        <img src="prog/godot/mario/mario_assets.png" width="200px" alt="Mario assets"
                            style="image-rendering: pixelated;"><br>
                        <a href="prog/godot/mario/mario3.gd"><img src="assets/Godot_icon.svg" class="icon">mario3.gd</a>
                        <a href="prog/godot/mario/mario4.gd"><img src="assets/Godot_icon.svg" class="icon">mario4.gd</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <h3>Példaprogramok</h3>
        <?php foreach ($peldaprogramok as $program): ?>
            <h3><?php echo $program['title']; ?></h3>
            <?php if ($program['description']): ?>
                <p><?php echo $program['description']; ?></p>
            <?php endif; ?>
            <pre><code class="language-python"><?php include $program['file']; ?></code></pre>
        <?php endforeach; ?>

        <script src="assets/prism.js"></script>
    </div>
    <div id="doorkeeper">
        <p>Add meg a 4 jegyű kódot:</p>
        <form>
            <input type="text" id="pin" maxlength="4" size="4" oninput="reveal()">
        </form>
    </div>
    <div id="pin-error" role="alert" aria-live="polite">
        Hibás kód!
    </div>
    <footer>
        <p>&copy; <script>document.write(new Date().getFullYear());</script> | Készítette: Szalontai István</p>
    </footer>
</body>

</html>