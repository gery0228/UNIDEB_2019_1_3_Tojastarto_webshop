**0. Bevezetés**

Ezen dokumentum célja, hogy ismertesse az alaklmazásunk futtatáshoz szükséges hardveres és 
szoftveres követelményeket, valamint betekintést nyújt az általunk legfontosabbnak tartott funkciók működésébe.

**1. Rendszerkövetelmények**

**1.1 Hardveres követelmények**

Az alkalmazás futtatásához olyan hardverre van szükség, amely képes a lentebb tárgyalt szoftverek futtatására, 
alkalmas nagy mennyiségű kérés kiszolgálására, valamint kellően nagy tárhelyen rendelkezik
 az adatok tárolásához. Jelen állapotban a szoftverünk futtatásához elegendőnek látjuk az 1Ghz-es
 órajelű processzorral, 512 MB memóriával illetve 40 Gb tárhellyel rendelkező számítógépet. 
További információkért forduljon az alább bemutatandó szoftverek gyártóihoz!

**1.2 Szoftveres követelmények**

A továbbiakban részletesebben tárgyaljuk az alkalmazásunk futtatásához elengedhetetlen szoftvertveres komponenseket.

**1.2.1 Webszerver**

Mivel az alkalmazásunk elsősorban WEB-en keresztül érhető el, ezért elengedhetetlen egy Webserver futtatása.
 Esetünkben az Apache HTTP Server 2.2.3-as változatát használjuk.

**Apache**

Az Apache HTTP Server (röviden Apache) egy nyílt forráskódú webkiszolgáló alkalmazás, szabad szoftver, mely sok szabványt támogat melyeknek nagy része 
fordított modulok formájában áll rendelkezésre a mag kiegészítéseként. Ezek a modulok sok területet lefednek a kiszolgálóoldali programnyelvtámogatástól 
kezdve a hitelesítési sémákig. Az ismertebb, támogatott programnyelv modulok a a mod_perl, a mod_python, a Tcl és a PHP. A népszerűbb hitelesítési modulok 
a mod_access, mod_auth és a mod_digest. Statikus és dinamikus weboldalak közzétételére egyaránt használják. Sok webalkalmazást az Apache által nyújtott 
környezethez és szolgáltatásokhoz terveznek. Az Apache alkotja a webszerver komponenst a népszerű LAMP alkalmazáscsomagban, melynek további komponensei 
a MySQL adatbázisszerver és a PHP/Perl/Python programozási nyelvek mellett.

Az Apache webszervert különböző kereskedelmi szoftvercsomagok (például az Oracle Database és az IBM WebSphere) részeként is terjesztik. 
A Mac OS X is magába foglalja az Apache-ot beépített webszerverként. A Novell NetWare 6.5 alapértelmezett webszervere is az Apache.

Az Apache nem csak weboldalak, hanem egyéb tartalom publikálására is használható, például tetszőleges file-ok megosztására is.

Az Apache legújabb verziója hozzáférhető a http://httpd.apache.org/download.cgi oldalról.

**1.2.2 Adatbázis**

Szükségünk van egy adatbázis szerverre, mivel az alkalmazás javarészt adatbázisokkal dolgozik. 
Minden információ megfelelő adatbázis táblákban érhető el. 
A megvalósítás során a pHpMyAdmin adatbáziskezelőt használtuk.

A MySQL egy többfelhasználós, többszálú, SQL-alapú relációs adatbázis-kezelő szerver.
A szoftver eredeti fejlesztője a svéd MySQL AB cég, 
amely kettős licenceléssel tette elérhetővé a MySQL-t; 
választható módon vagy a GPL szabad szoftver licenc, vagy egy zárt (tulajdonosi) 
licenc érvényes a felhasználásra.
A MySQL az egyik legelterjedtebb adatbázis-kezelő, aminek egyik oka lehet, 
hogy a teljesen nyílt forráskódú LAMP (Linux–Apache–MySQL–PHP) összeállítás részeként költséghatékony 
és egyszerűen beállítható megoldást ad dinamikus webhelyek szolgáltatására.

Egyedi illesztőfelületekkel az adatbázis-kezelő elérhető 
- C, 
- C++ , 
- C#, 
- Delphi, 
- Eiffel, 
- Smalltalk, 
- Java, 
- Lisp, 
- Perl, 
- PHP, 
- Python, 
- Ruby 
- és Tcl programozási nyelvvel. 

Egy MyODBC nevű ODBC interfész további, ODBC-t kezelő nyelvek számára is hozzáférhetővé teszi 
az adatbázis-kezelőt. A MySQL számára az ANSI C a natív nyelv.

Széles körben elterjedt és népszerű adminisztrációs eszköz a PHP nyelven írt, nyitott 
forráskódú phpMyAdmin. A phpMyBackupPro (amelyet szintén PHP-ban írtak) adatbázisok 
(akár időzített, ismétlődő) mentésére szolgál eszközül.

A MySQL 5.x képességei:

- ANSI SQL 99, számos kiegészítéssel
- Keresztplatformos elérhetőség
- Tárolt eljárások
- Adatbázis triggerek
- Kurzor adatbázisok
- "View" adatbázisok
- VARCHAR támogatás
- INFORMATION_SCHEMA támogatás
- "Strict" (szigorú) mód
- X/Open XA elosztott tranzakció-feldolgozás (DTP) támogatása; az Innobase InnoDB motorjának használata
- Különálló tároló motorok,(MyISAM olvasási sebességért, InnoDB a tranzakciókhoz és a referenciális 
integrációhoz, MySQL Archive az elavult adatok kevés helyen történő tárolására
- Tranzakciók az InnoDB, BDB és Cluster tároló motorokkal
- SSL támogatás
- Lekérdezés gyorstár (cache)
- Egymásba ágyazott SELECT -ek
- Szöveges indexelés és keresés a MyISAM motorral
- Beágyazott adatbázis-könyvtár
- Részleges Unicode támogatás
- ACID megfelelés az InnoDB-vel, BDB-vel és Cluster-rel
- Továbbfejlesztett MySQL Cluster
- „Példányosítás”

A MySQL legújabb verziója letölthető a https://dev.mysql.com/downloads/ címen.

**1.2.3 PHP**

__PHP__

A PHP (PHP: Hypertext Preprocessor) nyílt forráskódú, számítógépes szkriptnyelv, 
legfőbb felhasználási területe a dinamikus weboldalak készítése. Emiatt a PHP-t 
jórészt szerver-oldalon használják, bár létezik parancssori interfésze is, illetve önálló, 
grafikus felületű alkalmazások is létrehozhatóak vele. Egy php oldal elérésekor, 
a kiszolgáló először feldolgozza a PHP utasításokat, és csak a kész (HTML) kimenetet 
küldi el a böngészőnek, így a programkód nem is látható kliens oldalról. 
Ehhez egy ún. interpretert (értelmezőt) használ, amely általában egy külső modulja a webszervernek.
Ilyen például a bejelentkezés, az adatbáziskezelés, filekezelés, kódolás, adategyeztetés, 
kapcsolatok létrehozása, e-mail küldése, adatfeldolgozás, dinamikus listakészítés stb. Minden olyan 
esetben, ahol nagyszámú ismétlődő feladatsort kell végrehajtani (például képek listázása és linkelése, 
listakészítés stb.), ott ez a programnyelv nagyszerű segítség.

Népszerűbb verziók és megjelenési évük:
- PHP 4.0:          2000    
- PHP 4.1:          2001    
- PHP 4.2:          2002    
- PHP 4.3:          2002    
- PHP 4.4:          2005    
- PHP 5.0:          2004    
- PHP 5.1:          2005    
- PHP 5.2:          2006

A PHP 4 fejlesztése 2007 végén maradt abba, az utolsó megjelent verziója a 4.4.8 .
A PHP 5 legnagyobb újdonsága a 4-eshez képest a teljes körű objektumorientáltság, jelenleg csak ezt a 
változatot fejlesztik, legutóbbi kiadása a 5.2.6 verziószámú, amely 2008. május 1-jén jelent meg.
A PHP, mint kiszolgáló-oldali programozási nyelv, dokumentációja (kézikönyve) magyarul is elérhető a php.net oldalon.
Az általunk fejlesztett webshop a PHP7-es verzióját is támogatja.

**2. Az adatbázis**

Az adatbázisban 4 tábla található: 

vevo ( felhnev char(20), jelszo char(20), vnev char(20), knev char(20), email char(20),
telefon integer, cím char (255)) 

termek (cikksz integer, termeknev char(255), ar integer, mennyiseg integer, leiras text)

kosar (felhn char (20), cikk integer, db integer)

rendeles ( felhn char (20), cikk integer, db integer)

Az adatbázis táblák között ergyelőre nem valósul meg kapcsolat, mivel a webalkalmazásunk
jelenlegi működéséhez nem szükséges.

**3. Legfontosabb funkciók**

Véleményünk szerint a webáruházunk működtetésének elengedhetetlen funkciói a következők:

**3.1 Bejelentkezés**

Legelső dolog, amit a szoftverünk használatával megpillantunk a bejelentkező képernyő.
Tartalmaz két szövegmezőt, ahol az előzőleg regisztrált felhasználónév és jelszó segítségével
bejelentkezhetünk. A bejelentkezés során a rendszer a bejelentkezes.php oldalon keresztül
ellenőrzi, hogy az adatbázis vevő táblájában a megfelelő névhez.

**3.2 Regisztráció**

Ahhoz, hogy a szotvert használhassuk szükség van regisztrációra.

A regisztrációs űrlapon az alábbi mezők találhatók:

Felhasználónév (maximum 20 karakter) 

Jelszó (maximum 20 karakter)

Vezetéknév (maximum 20 karakter)

Keresztnév (maximum 15 karakter)

E-mail (maximum 255 karakter) 

Telefon (maximum 15 karakter)

Cím (maximum 255 karakter)

Ezen az oldalon található a Regisztráció gomb, amelynek megnyomására az űrlap adatait
elküldi a regisztracio.php oldalnak, ami a bevitt adatokat az adatbázis "vevo" táblájába.
Ha valamelykötelezően kitöltendő mező üresen marad, akkor hibaüzenetet kapunk.
Amennyiben olyan mezőt hagyunk üresen, amely kitöltése nem kötelező, akkor az üres 
mezőként kerül be az adatbázisba.

**3.3 Böngészés**

A böngésző ablak bejelentkezés után érhető el. Megtalálható rajta az árlista, ami a
"termek" tábla mezőiből épül fel dinamikusan, található egy űrlap két szövegmezővel,
az egyiken a termekmek cikkszámát, a másikon a kívánt mennyiséget adhatjuk meg.
A "Kosárba" gomb lenyomására a rendszer ellenőrzi, , hogy a beírt mennyiseg nem nagyobb e