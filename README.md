# Application

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


### Suunniteltu/tulevat osat

4 - Kirjautumis systeemi, salasana turvallisuus

5 - Tietokannan turvallinen käyttö,
    Datan validointi ulkoa,
    regexp/pcre

