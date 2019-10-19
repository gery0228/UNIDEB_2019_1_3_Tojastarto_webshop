**1.0 Az alkalmazás funkciói:**

 


**1.1 Vásárlók számára elérhető funkciók:**

**1.1.1 Navigáció az áruk között:**

Az alkalmazás bárki által használható funkciója az áruk közötti navigáció.

A felhasználónak lehetősége van egy mindig látható menü segítségével az áruk között navigálni 
kategóriákba sorolva. A megfelelő menüpontra kattintva megjelenik az adott kategóriához tartozó 
termékek listája. A megjelenő találatok számának szűkétésére lehetőség van szűrők használatával, a 
találati oldalon megjelenő listboxokból kiválasztható szűrési kulcsszavak segítségével.

A termék nevére való kattintással megjelenik a termék adatlapja, amelyen megtalálhatóak a termék 
tulajdonságai, képe (ha elérhető). A termék leírása alatt elérhetővé válik az adott kategórián 
belüli legtöbbször megtekintett, a legtöbbször megvásárolt, illetve a legolcsóbb termékek linkje.

A felhasználónak lehetősége van az áruk közötti keresésre, egy erre szolgáló állandóan elérhető 
keresési szövegmező használatával. Egy külön oldalon megjelik azon termékek listája amelyekben a 
megadott kulcsszó valamilyen formában előfordul.

**1.1.2 Regisztráció:**

A felhasználók vársárlási lehetőségének előfeltétele az előzetes regisztráció. Bizonyos egyéb funkciók 
is csak regisztráció után válnak elérhetővé. Erre egy külön oldalon megjelenő űrlapon van lehetőség. 

Az űrlap tervezett mezői:

- Vezetéknév*
- Keresztnév*
- Cégnév
- Telefon
- Szállítási cím*
- Számlázási cím
- Felhasználónév*
- Jelszó*
- Jelszó mégegyszer*
- Email cím*

(A csillaggal megjelölt mezők kitöltését kötelezővé tennénk)

A megadott adatok egy adatbázisban kerülnek tárolásra.

**1.1.3 Bejelentkezés:**

A regisztráció során megadott felhasználó névvel és jelszóval lehetőség nyílik a bejelentkezésre, 
amely ugyancsak a vásárlás valamint bizonyos funciók elérésének feltétele. 
Erre egy külön bejelentkező oldalon van lehetőség, amely két szövegmezőt tartalmaz:

- Felhasználónév
- Jelszó

**A bejelentkezés után elérhető funkciók:**

A bejelentkezést követően az áruk adatlapjainál a felhasználó számára megjelenik a "Kosárba" gomb, 
amely hozzáadja az árut a kiszemelt áruk listájához (kosár).

**Kosár:**

A kiszemelt áruk listája itt kerül tárolásra mely egy gomb lenyomásával bármikor megtekinthető.
A kosarat lehet szerkeszteni, például törölni az árukat.

**Kivánságlistához adás:**

A termékeket hozzá lehet adni a kívánságlistához, majd onnan lehet törölni is
azokat.

**Gyors megtekintés:**

Ezzel a funkcióval elérhetőek az eszközök, ruhák valamennyi információja.

**Hozzászólás:**

Bejelentkezés után a felhasználóknak lehetősége nyílik az áruk szöveges értékelésére egy külön e 
célt szolgáló szövegdoboz segítségével.

**Értékelés:**

A felhasználó 1-től 10-ig értékelheti a megtekintett árut egy legördülő menü segítségével.

**Megrendelés:**

Csak akkor elérhető, ha a kosárba legalább egy áru bekerült. 
A megrendelés gomb lenyomása után egy külön oldalon megjelnnek a rendelni kívánt áruk, 
valamint a szállítási cím.Egy véglegesítés gomb lenyomása után a rendelés részleteiről 
értesítést kap az adminisztrátor és maga a felhasználót is emailben.

**1.2 Adminisztrátor számára elérhető funkciók:**

**1.2.1 Bejelentkezés:**

Az adminisztrátorok ugyanazon a bejelentkező képernyőn jelentkeznek be,
mint a felhasználók.

**1.2.2 Árukészlet menedzselés:**

Áru hozzáadása:

Egy ezt a célt szolgáló űrlapon az adminisztrátor megadhatja a felvinni
kívánt áru adatait.

A tervezett mezői:

Áru megnevezése
Áru egységára
Áru mennyisége
Áru tulajdonságai
Megjegyzés

Áru törlése:

Egy korábban felvitt termék törlése az adatbázisból, amire egy korábban
automatikusan generált cikkszám egy új oldalon megjelenő szövegdobozba
történő begépelésével történik.

Áru adatainak módosítása:

Az áru hozzáadása űrlap jelenik meg, a már korábban kitöltött mezőkkel.
A "módosítás" gomb lenyomására az új adatok felülírva a régit, elmentésre
kerülnek.

**1.2.3 Felhasználók menedzselése:**

A felhasználók azonosítására email címük szolgál, az adminisztrátor ez
alapján kereshet a felhasználók között. A találati oldalon megjelennek 
a felhasználó adatai, amelyet módosíthat, illetve egy törlés gomb segítségével
törölheti a felhasználót az adatbázisból.

**1.2.4 Megrendelések menedzselése:**

A megrendelések között a rendelési szám segítségével lehet keresni. A
találati oldalon megjelennek a megrendelés adatai, amelyet módosíthat,