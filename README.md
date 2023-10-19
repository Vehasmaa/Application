# Application
## Tulevaisuus?
  - Lisää mahdollisuus käyttää PreRoute tyylistä moduulia käsittelemään muuttujat, riippuen reitistä joka olisi tarkoitus kulkea.
      - Edellyttää enemmänkin muutoksia miten reititys hoidetaan
  - Lisää esimerkki käyttäjätunnuksen luomisesta lomakeella ja lomakkeen käsittely
  - Edellä olevasta kirjautumis versio (olemassa olevan käyttäjä)
  - Lisää esimerkki sivusta joka vaatii kirjautumisen, ohjaa kirjautumiseen jos ei kirjauduttu, muuten näyttää haettua sisältöä..
  - Esimerkki template käytöstä kun generoidaan dynaamisesti enemmän elementtejä näkymään
  - Esimerkki tuotesivusta jossa haku ja näkymä muuttuu dynaamisesti
  - Käydään läpi koodin toiminta, siivotaan esitystapaa ja kommentointia paremmaksi

### isot asiat - Big things for future
  - Riippuvuus injektiot toteutukseen
  - JWT tokeni tuki
  - Luokkien autoload
  - Turvallisuuden lisääminen muuttujien tuonnissa

  - Depency injection to implementation
  - JWT token support
  - Class autoloading
  - Security measures on variable importing

## Aloitettu
  18.3.2023 -> Ensimmäinen video 20.3.2023
  Kirjoittaja: Jurva-Markus Vehasmaa
  Lisenssi: Vapaasti käytettävissä, en takaa toimivuutta, virheettömyyttä tai ota vastuuta vahingoista

## Tämä on micro-MVC
Projekti jota koodaan samalla kun teen siittä viikottaisen videon.

Lisäominaisuutena toteutetaan mallitiedostojen käyttäminen ulkoasulle.

Tänne Github repoon tulee koodi saataville aina videon tekemisen pääteeksi,
ei tarvitse yrittää videolta kirjoittaa jotain talteen kiireessä.

Kirjoitus koodi kielenä tietysti PHP.

Testiympäristönä VirtualBox, jossa Ubuntu 22.04 Palvelin asennus
  (Apache2 + PHP 8 tuki + MySQL)

## .htaccess tiedosto
Sovelluksen juuressa on .htaccess jolla ohjataan asioita oikein.

Esim. selaimen osoite pyyntö on: http://127.0.0.1/~jurva/Application/main/test
Se ohjataan Application hakemistossa olevaan index.php tiedostoon josta se ohjautuu PHP:n omilla ohjauksilla oikein.

Myös http://127.0.0.1/~jurva/Application toimii ja antaa oletuksena Main controllerin test sivun.

Lisäksi .htaccess sisältää tuen ohjata static hakemistoon stattiset tiedostot, kuvat, pdf, jne.


## In English
This is small software project i code and make videos about.

Its small MVC-implementation written in PHP, with template system as extra feature.

Server is run in VirtualBox and consists Ubuntu 22.4 Server install wiht usual Apache2, PHP 8 support and MySQL database.

## Sovelluksen pää polku
Suoritus alkaa index.php aina (Tunnetaan myös frontloader design patterninä)
  - Se lataa bootstrap.php joka tekee alustuksia sovellusta varten (Kevyt service design pattern)
  - Sitten router.php (App/Core) joka hoitaa oikean luokan lataamisen ja tarkistuksia ennen suorituksen siirtämistä luokkaan.
    - Sitten varsinaiset kontrollerin suoritus App/Controller hakemistossa (Tämä on se C osa MVC lyhenteessä)
      - Lataa tarvitsemansa model luokat ja suorittaa ne (App/Model) (Tämä on se M osa MVC lyhenteessä)
      - Lataa tarvitsemansa view luokan ja suorittaa sen (App/View) (Tämä on se V osa MVC lyhenteessä)

App/Library varattu sovelluksen tarvitsemille yleisemmille luokille
  Esimerkiksi nykyiset Template.php ja Database.php joita kaikki tarvitsee.

### Julkaistut osat youtubessa:

20.3.2023 Osa 1, Projektin aloitus ja template luokka.
  https://youtu.be/-G3Ibx2Hwnc

26.3.2023 Osa 2, Projektin jatkoa.
  https://youtu.be/YqwTZ0LoOfk
 -Osoitteiden uudelleen kirjoitus palvelimella
 -MVC mallin Controllerin toiminta
 -Router index.php ja controllerin välissä

28.3.2023 Osa 3 - 1, Näkymä
  https://youtu.be/vh94OAokH50
 -Views

29.3.2023 Osa 3 - 2, Datamalli
  https://youtu.be/NWAZEfby0AM
 -Models

2.4.2023 Osa 3 - 3, Tietokannan lisääminen
  https://youtu.be/gJOEn8FRjOY
 -Database


