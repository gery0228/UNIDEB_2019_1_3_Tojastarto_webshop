**1. Az alkalmazással kapcsolatos követelmények:**

Kereskedelmi szoftverről lévén szó, a legfontosabb elvárás a megbízhatóság, az adatok biztoságos tárolása, a 
bizalmasság, a letagadhatatlanság. A vásárlók adatainak és érdekeinek védelme éppoly létfontosságű, mint a 
felhasználó cég érdekeié. Ennek érdekében a szoftvert fel kell készíteni az ismert támadási formák ellen, 
a biztonság tovább fokozható a felhasználó oldalán tett megkötésekkel (például könnyű jelszavak tiltása), 
de ez nem mehet a többi aspektus rovására.

Kiemelt fontosságú a szoftver felületének kezelhetősége, áttekinthetősége, ugyanakkor meg kell felelnie a 
lehető legtöbb kényelmi elvárásnak is. Fontos továbbá, hogy a hozzá nem értő vásárló is könnyen boldoguljon, 
és mindez a nyilvántartott áruk mennyiségétől a lehető legkevésbé függjön. Természetesen ez vonatkozik az 
adminisztrátorok által használt kezelőfelületre, funkciókra is, hogy a cég alkalmazottjainak se legyen 
szüksége az általános műveltséget meghaladó informatikai ismeretekre.

Fontos a rendszer jó teljesítménye, jó válaszideje, mely lehetővé teszi a gyors ügyintézést, és használhatóvá 
teszi az alkalmazást nagyobb árumennyiség esetén is.

A szolgáltatás lehető legnagyobb rendelkezésre állása alapkövetelmény - bár ezt nagyban befolyásolja az 
alkalmazott adatbázis-szerver, az azzal létesített kapcsolat és annak karbantartása.

**2. Követelmények prioritása:**

1. Biztonság, bizalmasság, letagadhatatlanság és az alapvető működési funkciók:

A gyakorlatban ezt azt jelenti, hogy az adott információhoz csak az juthasson hozzá akinek ehhez joga van. 
Illetve kiemelten fontos a fals rendelések kiszűrése, és egyéb visszaélési kísérletek megelőzése.
A felhasználó azonosítása nélkül ne tehessen semmit ami a böngészésen túl mutat. 
Alapvető funkciók alatt értjük a termékek megjelenítését, a böngészést, és a vásárlást. 
Valamint a felhasználó menedzsmentet, a regisztrációt, és az azonosító rendszert (belépés). 
Minden további funkció a kényelmességet biztosítja.

2. A válaszidő minimális függése az adatok mennyiségétől:

A webáruház terjedelmének, forgalmának növekedésével ezen kérdés jelentősége egyenes arányban növekszik. 
Fontos tehát, hogy a rendszer rugalmasan kezeljen nagyobb adatmennyiséget is, 
ne okozzon gondot nagy áruházak üzemeltetése sem. Jól megtervezett és implementált adatbázis szükséges, 
és ennek integrálása a rendszerbe is kulcskérdés.

3. Felhasználói felület áttekinthetősége:

Kulcskérdés lehet egy webáruház sikerességében annak külleme, 
felülete, melynek megfelelő egyensúlyt kell teremtenie a dizájn és a funkcionalitás között, 
ez részben függ a rendszert üzembe helyező cégtől is. Az alapokat azonban jól kell megtervezni, 
és a webshop üzemeltetőjének utólagos munkáját is célszerű leegyszerűsíteni.Gondoskodni kell arról is, 
hogy a rendszer könnyen használható legyen bármilyen jellegű kereskedelmet folytató cégek esetében is.

4. Könnyű navigáció, kezelhetőség:

Ez a pont nagyban függ az üzembe helyező személyétől, 
de az alapok átgondolt tervezésével ez a függés csökkenthető. 
Fontos, hogy a felhasználó az általa fontosnak tartott funkciókat gyorsan elérhesse, 
illetve a termékek között nagy részletességig tudjon keresni, hogy a kívánt terméket 
minél hamarabb megtalálja.

5. A lehető legegyszerűbben ellátható adminisztrátori teendők

Az adminisztrációval megbízott munkatárstól nem várható el az alapokat jelentősen
meghaladó informatikai ismeretek birtoklása. Ennek szem előtt tartásával kell
optimalizálni és implementálni ezen alrendszert, mely szintén kulcsfontosságú
lehet az alkalmazás sikerességében, elterjedésében.