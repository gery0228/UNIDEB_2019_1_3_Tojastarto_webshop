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