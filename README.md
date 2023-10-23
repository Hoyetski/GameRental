# GameRental

## Spis Treści:
- [Opis projektu i wyglądu](##opis-projektu-i-wyglądu)
	- [Wstęp](###wstęp)
	- [Strona logowania](####strona-logowania)
	- [Panel administratora](####panel-administratora)
		- [Pasek górny](####pasek-górny)
		- [Sekcja wypożyczania gier](####sekcja-wypożyczania-gier)
		- [Sekcja dostępnych gier](####sekcja-dostępnych-gier)
		- [Sekcja dodawnia gier](####sekcja-dodawnia-gier)
		- [Sekcja dostępnych klientów](####sekcja-dostępnych-klientów)
		- [Sekcja dodawnia klienta](####sekcja-dodawnia-klienta)
		- [Link wylogowywujący](####link-wylogowywujący)
		- [Footer](####footer)
- [Funkcjonalność](###funkcjonalność)
	- [Strona logowania](####strona-logowania)
	- [Panel administratora](####panel-administratora)
		- [Sekcja wypożyczania gier](####sekcja-wypożyczania-gier)
		- [Sekcja dostępnych gier](####sekcja-dostępnych-gier)
		- [Sekcja dodawnia gier](####sekcja-dodawnia-gier)
		- [Sekcja dostępnych klientów](####sekcja-dostępnych-klientów)
		- [Sekcja dodawnia klienta](####sekcja-dodawnia-klienta)
		- [Link wylogowywujący](https://github.com/Hoyetski/GameRental/ "link wylogowywujący")

## Opis projektu i wyglądu:

### Wstęp:
Projekt *GameRental* jest projektem strony internetowej za pomocą, której pracownicy naszej wypożyczalni gier *GameRental* będą mieli ułatwioną pracę.
Z naszej strony będą korzystać tylko pracownicy naszej wypożyczalni gier.
Logo strony *GameRental*:
![Logo GameRental](https://i.imgur.com/jQEIAJP.png)

### Strona logowania:
Strona logowania posiada 2 formularze, zarówno pierwszy jak i drugi posiadają pola na e-mail oraz hasło oraz przycisk do wysyłania formularza.
Formularze są obok siebie a nad nimi znajduje się wycentrowane logo strony *GameRental*
Zarówno formularze jak i logo są zamknięte w kontynerze, który jest wycentrowany horyzontalnie i poziomo.

### Panel administratora:

Panel administratora, posiada następujący układ od góry do dołu:
- [Pasek górny](####pasek-górny)
- [Sekcja wypożyczania gier](####sekcja-wypożyczania-gier)
- [Sekcja dostępnych gier](####sekcja-dostępnych-gier)
- [Sekcja dodawania gier](####sekcja-dodawania-gier)
- [Sekcja dostępnych klientów](####sekcja-dostępnych-klientów)
- [Sekcja dodawania klienta](####sekcja-dodawania-klienta)
- [Link wylogowywujący](####link-wylogowywujący)
- [Footer](####footer)

#### Pasek górny
Na samej górze strony logowania znajduje się pasek górny, który zawiera wycentrowane logo strony *GameRental*:

#### Sekcja wypożyczania gier:
W sekcji wypożyczania gier  znajduje się wycentrowany nagłówek *Sekcja wypożyczania gier* a pod nim formularz z polami na wpisanie tytułu gry oraz adres e-mail klienta, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.
Pola w formularzach mają atrybut *required*.

#### Sekcja dostępnych gier:
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych gier* a pod nim tabela z następującym układem:

| id | title |quantity|action|
|--|--|--|--|
| 1 | Minecraft |13|[***Remove***] [***Change***]|

Każdy rekord tabeli będzie zamknięty w formularzu a komórka *title* oraz *quantity* będą polami, w których będą z góry wpisane wartości.
W kolumnie action znajdują się przyciski *Remove* oraz *Change* służące do wysyłania  poszczególnego formularza.
Pola w formularzach mają atrybut *required*.

#### Sekcja dodawania gier:
W sekcji dodawania gier znajduje się wycentrowany nagłówek *Sekcja dodawania gier* a pod nim formularz z polami na wpisanie tytułu gry oraz ilość sztuk w magazynie, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.
Pola w formularzach mają atrybut *required*.

#### Sekcja dostępnych klientów:
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych klientów* a pod nim tabela z następującym układem:

| id | first-name | last-name | email | action |
|--|--|--|--|--|
| 1 | John |Joe | johnjoe@example.com | [***Remove***] [***Change***] |

Każdy rekord tabeli będzie zamknięty w formularzu a komórki *first-name, last-name oraz e-mail* będą polami, w których będą z góry wpisane wartości.
W kolumnie action znajdują się przyciski *Remove* oraz *Change* służące do wysyłania  poszczególnego formularza.
Pola w formularzach mają atrybut *required*.

#### Sekcja dodawania klientów:
W sekcji dodawania klientów będzie się znajdował wycentrowany nagłówek *Sekcja dodawania klientów* a pod nim formularz z polami na wpisanie imienia, nazwiska oraz adresu e-mail klienta, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.
Pola w formularzach mają atrybut *required*.

#### Link wylogowywujący
Jest w nim zawarty tekst *Logout* z czerwonym kolorem czcionki oraz usuniętą dekoracją dla linków.

#### Footer
Na samej dole podstrony znajduje footer, który zawiera w sobie wycentrowany tekst *© 2023 Kacper Chojecki*.

## Funkcjonalność:

#### Strona logowania:
Po wysłaniu formularza rejestracji użytkownik jest dodawany do bazy danych.
Po wysłaniu formularza logowania, tworzona jest sesja php a użytkownik jest przekierowywany do panelu administratora.
Jeśli użytkownik wejdzie na stronę logowania będąc zalogowanym to jest przenoszony do panelu administratora.

**Uwaga:**
- System rejestracji nie jest zabezpieczony na możliwość założenia 2 kont na ten sam adres e-mail!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Panel administratora:
Jeśli użytkownik niezalogowany spróbuje wejść do panelu administratora, to zostanie przekierowany do strony logowania.
Panel administratora będzie służył do:
- Dodawania nowych klientów do bazy danych
- Dodawania nowych gier do bazy danych
- Usuwania gier z bazy danych
- Zmieniania ilości gier w bazie danych
- Sprawdzania dostępności gier
- Wypożyczania gier
- Sprawdzania zaległości klientów

#### Sekcja wypożyczania gier:
Będzie służyła do tworzenia nowych wypożyczeń w bazie danych na podstawie podanego tytułu gry oraz adresu e-mail użytkownika w formularzu znajdującego się w tej sekcji.

**Uwaga:**
- System wypożyczania gier nie sprawdza ile użytkownik wypożyczył już gier!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dostępnych gier:
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych gier będą wypełniane informacjami adekwatnymi dla każdej gry znajdującej się w bazie danych.
Po wciśnięciu przycisku *Remove* zostanie wysłany formualrz, którzy usunie grę z bazy danych na podstawie jej id w formularzu.
Po wciśnięciu przycisku *Change* zostaną zmienione informacje w bazie danych o tytule oraz ilości sztuk gry w magazynie, na takie jakie są wpisane w polach formularza.

**Uwaga:**
- Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych gier będą wypełniane informacjami również o grach, których ilość sztuk w magazynie będzie równa 0.
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dodawania gier:
Sekcja dodawania gier będzie służyć do wprowadzania nowych gier do bazy danych na podstawie podanego tytułu oraz ilości sztuk gry w magazynie, które są wpisane w formularzu.

**Uwaga:**
- System dodawania gier nie jest zabezpieczony na możliwość dodania 2 różnych gier posiadających ten sam tytuł!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dostępnych klientów:
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych klientów będą wypełniane informacjami adekwatnymi do każdego klienta znajdującej się w bazie danych.
Po wciśnięciu przycisku *Remove* zostanie wysłany formualrz, którzy usunie klienta z bazy danych na podstawie jego id w formularzu.
Po wciśnięciu przycisku *Change* zostaną zmienione informacje o imieniu, naziwsku oraz adresie e-mail użytkownika w bazie danych na takie jakie są wpisane w polach formularza.

**Uwaga:**
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dodawania klientów:
Sekcja dodawania klientów będzie służyć do wprowadzania nowych klientów do bazy danych na podstawie podanego imienia, nazwiska oraz adresu e-mail użytkownika, wpisanych w formularzu

**Uwaga:**
- System dodawania klienta nie jest zabezpieczony na możliwość dodania 2 różnych klientów posiadających ten sam adres e-mail!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Link wylogowywujący
Po naciśnięciu linka sesja php użytkownika zostanie zniszczona a użytkownik zostanie przekierowany do strony logowania.

<!-- Zrobić ten opis projektu tak, że nie musi być taka jak finalny projekt jak go będziemy oddawać ale jak będziemy oddawać projekt to trzeba zaktualizować opis projektu do stanu faktycznego. -->
