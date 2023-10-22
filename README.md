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
		- [Link wylogowywujący](####link-wylogowywujący)

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
Na samej górze podstrony znajduje się pasek górny, który zawiera wycentrowane logo strony *GameRental*:

#### Sekcja wypożyczania gier:
W sekcji wypożyczania gier będzie się znajdował wycentrowany nagłówek *Sekcja wypożyczania gier* a pod nią formularz z polami na wpisanie tytułu gry oraz adres e-mail klienta, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.

#### Sekcja dostępnych gier:
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych gier* a pod nią tabela z następującym układem:

| id | title |quantity|action|
|--|--|--|--|
| 1 | Minecraft |13|[***Remove***] [***Change***]|

Każdy rekord tabeli będzie zamknięty w formularzu a komórka*title* oraz *quantity* będą polami, w których będą z góry wpisane wartości.
W kolumnie action znajdują się przyciski *Remove* oraz *Change* służące do wysyłania formularza.

#### Sekcja dodawania gier:
W sekcji dodawania gier będzie się znajdował wycentrowany nagłówek *Sekcja dodawania gier* a pod nią formularz z polami na wpisanie tytułu gry oraz jej sztuk w magazynie, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.

#### Sekcja dostępnych klientów:
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych klientów* a pod nią tabela z następującym układem:

| id | first-name | last-name | email | action |
|--|--|--|--|--|
| 1 | John |Joe | johnjoe@example.com | [***Remove***] [***Change***] |

Każdy rekord tabeli będzie zamknięty w formularzu a komórki *first-name, last-name oraz e-mail* będą polami, w których będą z góry wpisane wartości.
W kolumnie action znajdują się przyciski *Remove* oraz *Change* służące do wysyłania formularza.

#### Sekcja dodawania klientów:
W sekcji dodawania klientów będzie się znajdował wycentrowany nagłówek *Sekcja dodawania klientów* a pod nią formularz z polami na wpisanie imienia, nazwiska oraz adresu e-mail klienta, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.

#### Link wylogowywujący
Jest w nim zawarty tekst *Logout* z czerwonym kolorem czconki.

#### Footer
Na samej dole podstrony znajduje footer, który zawiera w sobie wycentrowany text *© 2023 Kacper Chojecki*.

## Funkcjonalność:

#### Strona logowania:
Po wysłaniu formularza rejestracji użytkownik jest dodawany do bazy danych.
Po wysłaniu formularza logowania, tworzona jest sesja php a użytkownik jest przekierowywany do panelu administratora.
Jeśli użytkownik wejdzie na stronę logowania będąc zalogowanym to jest przenoszony do panelu administratora.

**Uwaga:**
System rejestracji nie jest zabezpieczony na możliwość założenia 2 kont na ten sam adres e-mail!

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
Będzie służyła do tworzenia nowych wypożyczeń w bazie danych na podstawie podanego tytułu gry oraz adresu e-mail użytkownika.

**Uwaga:**
System wypożyczania gier nie sprawdza ile użytkownik wypożyczył już gier!

#### Sekcja dostępnych gier:
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych gier będą wypełniane informacjami adekwatnymi do każdej gry znajdującej się w bazie danych.
Po wciśnięciu przycisku *Remove* zostanie usunięta następująca gra w bazie danych.
Po wciśnięciu przycisku *Change* zostaną zmienione informacje o tytule oraz ilości sztuk w magazynie danej gry na takie jakie widnieją w polach rekordu danej gry.

**Uwaga:**
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych gier będą wypełniane informacjami również o grach, których ilość sztuk w magazynie będzie równa 0.

#### Sekcja dodawania gier:
Sekcja dodawania gier będzie służyć do wprowadzania nowych gier do bazy danych na podstawie podanego tytułu oraz ilości sztuk gry w magazynie.

**Uwaga:**
System dodawania gier nie jest zabezpieczony na możliwość dodania 2 różnych gier posiadających ten sam tytuł!

#### Sekcja dostępnych klientów:
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych klientów będą wypełniane informacjami adekwatnymi do każdego klienta znajdującej się w bazie danych.
Po wciśnięciu przycisku *Remove* zostanie usunięty następujących klient w bazie danych.
Po wciśnięciu przycisku *Change* zostaną zmienione informacje o imieniu, naziwsku oraz adresie e-mail użytkownika na takie jakie widnieją w polach rekordu danego klienta.

#### Sekcja dodawania klientów:
Sekcja dodawania klientów będzie służyć do wprowadzania nowych klientów do bazy danych na podstawie podanego imienia, nazwiska oraz adresu e-mail użytkownika.

**Uwaga:**
System dodawania klienta nie jest zabezpieczony na możliwość dodania 2 różnych klientów posiadających ten sam adres e-mail!

#### Link wylogowywujący
Po naciśnięciu linka sesja php użytkownika zostanie zniszczona a użytkownik zostanie przekierowany do strony logowania.












<!-- Zrobić ten opis projektu tak, że nie musi być taka jak finalny projekt jak go będziemy oddawać ale jak będziemy oddawać projekt to trzeba zaktualizować opis projektu do stanu faktycznego. -->
