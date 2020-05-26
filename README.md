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

### Végpontok

### Szekvencia diagram

### Adatmodell

### Megjelenés

#### Bejelentkezés(Kezdő oldal):

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/login.PNG)

#### Főoldal:

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/home.PNG)

#### Hibaüzenet vendég számára:

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/error.PNG)

#### Város adatainak szerkesztése:

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/edit.PNG)

#### Új felhasználó:

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/createuser.PNG)

#### Felhazsnálók szerkesztése:

![alt text](https://github.com/sudi001/fdf26a_web3/blob/master/users.PNG)

## Implementáció

**Fejlesztői környezet: Apache NetBeans (Codeigniter Web Framework)**

  Használat: bármely böngészőben a ***localhost/fdf26a_web3/auth/login*** a kezdőoldal.
  A további oldalak pl: cities, auth nem érhetőek el bejelentkezés nélkül, ezt hibaüzenet közli a vendéggel.
		A használt adatbázis az ***init.sql*** fájlba lett exportálva.

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
