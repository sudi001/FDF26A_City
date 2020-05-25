# FDF26A_WEB3
 
## Követelményanalízis

### Előzetes követelmények az alábbiak:

 - Működő weboldal MVC keretrendszerben.
 - A kapcsolódó adatmodell legalább 6 táblát tartalmaz.
 - Adminisztrációs felület + publikus felület.
 - Felhasználók kezelése: A weboldal szolgáltatásai (vagy annak bizonyos rétege) csak előzetes bejelentkeztetés után, a megfelelő jogosultság birtoklásával érhető el. A beadandó feladatban legalább két jogosultsági szint megkülönböztetése: Szuperadmin: minden adathoz és funkcióhoz korlátlanul hozzáfér, felhasználók kezelése Korlátozott felhasználói jogosultság: az adatok bizonyos köréhez és/vagy bizonyos szolgáltatásokhoz fér hozzá
 -  Kimenetek generálása: a web alkalmazás valamely funkcióiban kimeneti fájlokat generál (.csv, .pdf, stb.) 
 - Importálási lehetőség támogatása: az adatok kezelése során bizonyos adatcsoportok importálása biztosított megfelelő felépítésű fájlból.
 - Reszponzív design: a webalkalmazás egyaránt működik asztali gépen/táblagépen/mobil készüléken.
 - CSS alkalmazása
 - Fájlkezelés: az oldalon keresztül kell fájlokat fel/le tölteni.

### Funkcionális követelmények

-   Bejelntkezés nélkül egyik oldal sem látható a loginon kívül
-   Korlátozott felhasználói jogosultság mellett listázhatóak a városok és adataik
-   Korlátozott felhasználói jogosultság mellett exportálhatóak a városok adataik
-   Szuperadmin jogosultsággal lehetőség van települések módosítására
-   Szuperadmin jogosultsággal lehetőség van települések törlésére
-   Szuperadmin jogosultsággal lehetőség van települések hozzáadására
-   Szuperadmin jogosultsággal lehetőség van település képének hozzáadására
-   Szuperadmin jogosultsággal lehetőség van felhasználok hozzáadására
-   Szuperadmin jogosultsággal lehetőség van felhasználok törlésére
-   Szuperadmin jogosultsággal lehetőség van felhasználok aktivitásának kezelésére
-   Szuperadmin jogosultsággal lehetőség van felhasználok csoportosítására
-   Szuperadmin jogosultsággal lehetőség van felhasználók szerkesztésére

### Nem funkcionális követelmények

-   Felhasználóbarát, ergonomikus elrendezés és kinézet.
-   Gyors működés.
-   Biztonságos működés: jelszavak tárolása, funkciókhoz való hozzáférés.

### Szerepkörök
-   Vendég
-   Korlátozott felhasználó
-   Szuperadmin

### Szekvencia diagram

### Adatmodell

### Megjelenés

#### Főoldal:

![enter image description here](home.jpg)

#### Hibaüzenet vendég számára:

![enter image description here](error.jpg)

#### Város adatainak szerkesztése:

![enter image description here](edit.jpg)

#### Új felhasználó:

![enter image description here](createuser.jpg)

#### Felhazsnálók szerkesztése:

![enter image description here](users.jpg)

#### Bejelentkezés(Kezdő oldal):

![enter image description here](login.jpg)

## Implementáció

**Fejlesztői környezet: Apache NetBeans (Codeigniter Web Framework)**

  Használat: bármely böngészőben a ***localhost/fdf26a_web3/auth/login*** a kezdőoldal.
  A további oldalak nem érhetőek el bejelentkezés nélkül, ezt hibaüzenet közli a vendéggel.


**Regisztrációs adatok validálása**  
 - Leírás: Regisztráció során ellenőrzi, hogy a felhasználó megfelelő adatokat adott-e meg:  
  * Felhasználónév: csak ékezet nélküli betű és szám
  * Email: email formátumnak megfelelő
  * Jelszó: Legalább 8 karakter
  
**Kijelentkezés**
 - Leírás: Egy már belépett felhasználó kijelentkeztetése

**Használathoz szükséges:**
- tetszőleges operációs rendszer
- böngésző (Chrome, Firefox, stb...)
- webszerver (xampp, wamp, stb...)

**Használat rövid leírása:**
- bejelentkezés/elfelejtett jelszó
- települések listázása
- tábla exportálása .csv fájlként
- települések módosítása (admin)
- települések hozzáadás (admin)
- települések törlése (admin)
- település képének hozzáadása (admin)
- felhasználok szerkesztése (admin)
- felhasználok csoportosítása (admin)
- felhasználok aktivitásának kezelése (admin)
- felhasználok törlése (admin)
- felhasználok hozzáadása (admin)
