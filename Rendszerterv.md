**0. Bevezetés**

Ezen dokumentum célja, hogy ismertesse az alaklmazásunk futtatáshoz szükséges hardveres és szoftveres követelményeket, valamint betekintést nyújt az általunk legfontosabbnak tartott funkciók működésébe.

**1. Rendszerkövetelmények**

**1.1 Hardveres követelmények**

Az alkalmazás futtatásához olyan hardverre van szükség, amely képes a lentebb tárgyalt szoftverek futtatására, alkalmas nagy mennyiségű kérés kiszolgálására, valamint kellően nagy tárhelyen rendelkezik az adatok tárolásához. Jelen állapotban a szoftverünk futtatásához elegendőnek látjuk az 1Ghz-es órajelű processzorral, 512 MB memóriával illetve 40 Gb tárhellyel rendelkező számítógépet. További információkért forduljon az alább bemutatandó szoftverek gyártóihoz!

**1.2 Szoftveres követelmények**

A továbbiakban részletesebben tárgyaljuk az alkalmazásunk futtatásához elengedhetetlen szoftvertveres komponenseket.

**1.2.1 Webszerver**

Mivel az alkalmazásunk elsősorban WEB-en keresztül érhető el, ezért elengedhetetlen egy Webserver futtatása. Esetünkben az Apache HTTP Server 2.2.3-as változatát használjuk.

**Apache**

Az Apache HTTP Server (röviden Apache) egy nyílt forráskódú webkiszolgáló alkalmazás, szabad szoftver, mely sok szabványt támogat melyeknek nagy része fordított modulok formájában áll rendelkezésre a mag kiegészítéseként. Ezek a modulok sok területet lefednek a kiszolgálóoldali programnyelvtámogatástól kezdve a hitelesítési sémákig. Az ismertebb, támogatott programnyelv modulok a a mod_perl, a mod_python, a Tcl és a PHP. A népszerűbb hitelesítési modulok a mod_access, mod_auth és a mod_digest. Statikus és dinamikus weboldalak közzétételére egyaránt használják. Sok webalkalmazást az Apache által nyújtott környezethez és szolgáltatásokhoz terveznek. Az Apache alkotja a webszerver komponenst a népszerű LAMP alkalmazáscsomagban, melynek további komponensei a MySQL adatbázisszerver és a PHP/Perl/Python programozási nyelvek mellett.

Az Apache webszervert különböző kereskedelmi szoftvercsomagok (például az Oracle Database és az IBM WebSphere) részeként is terjesztik. A Mac OS X is magába foglalja az Apache-ot beépített webszerverként. A Novell NetWare 6.5 alapértelmezett webszervere is az Apache.

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