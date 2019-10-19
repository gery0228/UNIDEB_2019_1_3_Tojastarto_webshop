**0. Bevezetés**

Ezen dokumentum célja, hogy ismertesse az alaklmazásunk futtatáshoz szükséges hardveres és szoftveres követelményeket, valamint betekintést nyújt az általunk legfontosabbnak tartott funkciók működésébe.

**1. Rendszerkövetelmények**

**1.1 Hardveres követelmények**

Az alkalmazás futtatásához olyan hardverre van szükség, amely képes a lentebb tárgyalt szoftverek futtatására, alkalmas nagy mennyiségű kérés kiszolgálására, valamint kellően nagy tárhelyen rendelkezik az adatok tárolásához. Jelen állapotban a szoftverünk futtatásához elegendőnek látjuk az 1Ghz-es órajelű processzorral, 512 MB memóriával illetve 40 Gb tárhellyel rendelkező számítógépet. További információkért forduljon az alább bemutatandó szoftverek gyártóihoz!

**1.2 Szoftveres követelmények**

A továbbiakban részletesebben tárgyaljuk az alkalmazásunk futtatásához elengedhetetlen szoftvertveres komponenseket.

**1.2.1 Webszerver**

Mivel az alkalmazásunk elsősorban WEB-en keresztül érhető el, ezért elengedhetetlen egy Webserver futtatása. Esetünkben az Apache HTTP Server 2.2.3-as változatát használjuk