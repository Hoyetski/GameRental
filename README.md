# GameRental

## Spis Treści:
- [Wstęp](#wstęp)
- [Opis wyglądu i funkcjonalności](#opis-wyglądu-i-funkcjonalności)
	- [Strona logowania](#strona-logowania)
	- [Panel administratora](#panel-administratora)
		- [Pasek górny](#pasek-górny)
		- [Sekcja wypożyczania gier](#sekcja-wypożyczania-gier)
		- [Sekcja wszystkich wypożyczeń](#sekcja-wszystkich-wypożyczeń)
		- [Sekcja dostępnych gier](#sekcja-dostępnych-gier)
		- [Sekcja dodawania gier](#sekcja-dodawania-gier)
		- [Sekcja dostępnych klientów](#sekcja-dostępnych-klientów)
		- [Sekcja dodawania klientów](#sekcja-dodawania-klientów)
		- [Link wylogowywujący](#link-wylogowywujący)
		- [Footer](#footer)

## Wstęp:
- Projekt *GameRental* jest projektem strony internetowej za pomocą, której pracownicy naszej wypożyczalni gier *GameRental* będą mieli ułatwioną pracę.
- Z naszej strony będą korzystać tylko pracownicy naszej wypożyczalni gier.
![Logo GameRental](https://i.imgur.com/jQEIAJP.png)
- Powyżej znajduje się logo strony *GameRental*: 
## Opis wyglądu i funkcjonalności:

### Strona logowania:
**Opis wyglądu:**
- Strona logowania posiada 2 formularze, posiadają one pola na tylko na e-mail oraz tylko na hasło, pola te są wymagane to wypełnienia.
- Formularz logowania posiada nagłówek *Login* oraz przycisk *Login*.
- Formularz rejestracji posiada nagłówek *Register* oraz przycisk *Register*.
- Formularze są obok siebie a nad nimi znajduje się wycentrowane logo strony *GameRental*.
- Zarówno formularze jak i logo są zamknięte w kontynerze, który jest wycentrowany horyzontalnie i poziomo.

**Opis funkcjonalności:**
- Po wysłaniu formularza rejestracji użytkownik jest dodawany do bazy danych.
- Po wysłaniu formularza logowania, tworzona jest sesja php a użytkownik jest. przekierowywany do panelu administratora.
- Jeśli użytkownik wejdzie na stronę logowania będąc zalogowanym to jest przenoszony do panelu administratora.
- Jeśli użytkownik wprowadzi złe dane do logowania i wyśle formularz, to zostanie mu wyświetlony alert o nieprawidłowych danych logowania.

**Uwaga:**
- System rejestracji nie jest zabezpieczony na możliwość założenia 2 kont na ten sam adres e-mail!
- System logowania i rejestracji nie jest zabezpieczony przed wysyłaniem pustego formularza lub formularza z niepoprawnymi typami danych poprzez programy inne niż przeglądarki.

### Panel administratora:
**Opis wyglądu:**
- Panel administratora, posiada następujący układ od góry do dołu:
	- [Pasek górny](#pasek-górny)
	- [Sekcja wypożyczania gier](#sekcja-wypożyczania-gier)
	- [Sekcja wszystkich wypożyczeń](#sekcja-wszystkich-wypożyczeń)
	- [Sekcja dostępnych gier](#sekcja-dostępnych-gier)
	- [Sekcja dodawania gier](#sekcja-dodawania-gier)
	- [Sekcja dostępnych klientów](#sekcja-dostępnych-klientów)
	- [Sekcja dodawania klientów](#sekcja-dodawania-klientów)
	- [Link wylogowywujący](#link-wylogowywujący)
	- [Footer](#footer)

**Opis funkcjonalności:**
- Jeśli użytkownik niezalogowany spróbuje wejść do panelu administratora, to zostanie przekierowany do strony logowania.
- Panel administratora będzie służył do:
	- Dodawania nowych klientów do bazy danych
	- Dodawania nowych gier do bazy danych
	- Usuwania gier z bazy danych
	- Usuwania klientów z bazy danych
	- Zmieniania ilości gier w bazie danych
	- Zmieniania danych klienta w bazie danych
	- Sprawdzania dostępności gier
	- Dodawania nowych wypożyczeń do bazy danych
	- Usuwania wypożyczeń z bazy danych
	- Sprawdzania zaległości klientów
- Po każdej przeprowadzonej operacji w panelu administratora, zostanie on automatycznie odświeżony.

**Uwaga:**
- System panelu administratora nie jest zabezpieczony przed wysyłaniem pustych formularzy lub formularzy z niepoprawnymi typami danych poprzez programy inne niż przeglądarki

#### Pasek górny
**Opis wyglądu:**
- Na samej górze panelu administratora znajduje się pasek górny, który zawiera wycentrowane logo strony *GameRental*:

#### Sekcja wypożyczania gier:
**Opis wyglądu:**
- W sekcji wypożyczania gier  znajduje się wycentrowany nagłówek *Sekcja wypożyczania gier* a pod nim formularz.
- W formularzu znadują się 2 pola na wpisanie tytułu gry oraz adres e-mail klienta, pola te są wymagane do uzupełnienia.
- Pole na tytuł gry jest tekstowe a pole na adres e-mail przyjmuje tylko adres e-mail.
- Oprócz tego w formularzu będzie się znajdował przycisk *Rent*.

**Opis funkcjonalności:**
- Po naciśnięciu przycisku *Rent*, zostatnie wysłany formualrz, który wypożyczy daną grę dla danego użytkownika.
- Jeśli dana gra jest niedostępna lub nie istnieje to wyświetla się alert o braku dostępności gry a wypożyczenie nie zostanie stworzone.
- Jeśli dany użytkownik nie istnieje to wyświetla się alert o nieistniejącym użytkowniku a wypożyczenie nie zostanie stworzone.

**Uwaga:**
- System wypożyczania gier nie sprawdza ile użytkownik wypożyczył już gier!

#### Sekcja wszystkich wypożyczeń:
**Opis wyglądu:**
- Znajduje się w niej wycentrowany nagłówek *Sekcja wszystkich wypożyczeń* a pod nim tabela z następującym układem:

| id | e-mail | title | deadline (days) | action |
|--|--|--|--|--|
| 4 | johnbob@o2.pl | Minecraft | 28 | [***Remove***] |

- Każdy rekord tabeli będzie zamknięty w formularzu, pierwsze 4 komórki rekordu będą polami przeznaczonymi tylko do odczytu.
- W kolumnie action dla każdego rekordu znajduje się przycisk *Remove*.

**Opis funkcjonalności:**
- Przycisk *Remove* wysyła formularz, który usunie poszczególne wypożyczenie z bazy danych.

#### Sekcja dostępnych gier:
**Opis wyglądu:**
- Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych gier* a pod nim tabela z następującym układem:

| id | title |quantity|action|
|--|--|--|--|
| 1 | Minecraft |13|[***Remove***] [***Change***]|

- Każdy rekord tabeli będzie zamknięty w formularzu.
- *id* oraz *title* są komórkami, w których znajdują się pola przeznaczone tylko do odczytu
- *quantity* jest komórką, w której znajduje się pole tylko na liczby z 0 jako minimalną wartością, pole te jest wymagane do uzupełnienia.
- W kolumnie action dla każdego rekordu znajduje się przycisk *Remove* oraz *Change*.

**Opis funkcjonalności:**
- Przycisk *Remove* wysyła formularz, który usunie poszczególną grę z bazy danych.
- Przycisk *Change* wysyła formularz, który zmieni ilość sztuk danej gry w bazie danych.

#### Sekcja dodawania gier:
**Opis wyglądu:**
- W sekcji dodawania gier znajduje się wycentrowany nagłówek *Sekcja dodawania gier*.
-  Pod nagłówkiem znajduje się formularz z polami na wpisanie tytułu gry oraz ilość sztuk gry w magazynie, pola te są wymagane to wypełnienia, pole na tytuł gry jest tekstowe a pole na ilość sztuk gry jest polem na liczby z minimalną wartością równą 0.
- W formularzu będzie się znajdował przycisk *Add*.

**Opis funkcjonalności:**
- Po naciśnięciu przycisku *Add*, zostanie wysłany formularz, który doda grę do bazy danych.

**Uwaga:**
- System dodawania gier nie sprawdza czy dana gra już istnieje!

#### Sekcja dostępnych klientów:
**Opis wyglądu:**
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych klientów* a pod nim tabela z następującym układem:

| id | first-name | last-name | e-mail | action |
|--|--|--|--|--|
| 1 | John | Joe | johnjoe@example.com | [***Remove***] [***Change***] |

- Każdy rekord tabeli jest zamknięty w formularzu.
- *id* jest kolumną, w której znajdują się pola przeznaczone tylko do odczytu
- *first-name* oraz *last-name* są kolumnami, w których znajdują się pola tekstowe, są one wymagane do uzupełnienia.
- *e-mail* jest kolumną, w której znadują się pola na adres e-mail, są ona wymagane do uzupełniania.
- W kolumnie action dla każdego rekordu znajduje się przycisk *Remove* oraz *Change*.

**Opis funkcjonalności:**
- Po wciśnięciu przycisku *Remove* zostanie wysłany formualrz, którzy usunie danego klienta z bazy danych
- Po wciśnięciu przycisku *Change* zostanie wysłany formularz, który zmieni informacje o kliencie w bazie danych.

**Uwaga:**
- System nie jest zabezpieczony przed zmienieniem adresu e-mail użytkownika na taki, który jest już zajęty.

#### Sekcja dodawania klientów:
**Opis wyglądu:**
- W sekcji dodawania klientów znajduje się wycentrowany nagłówek *Sekcja dodawania klientów*
- Pod nagłówkiem znajduje się formularz z polami na wpisanie imienia, naziwska oraz adresu e-mail klienta, pola te są wymagane to wypełnienia, pola na imię oraz nazwisko  jest tekstowe a pole na adres e-mail jest polem, które przyjmuje tylko adres e-mail.
-W formularzu będzie się znajdował przycisk *Add*

**Opis funkcjonalności:**
- Po naciśnięciu przycisku *Add*, zostanie wysłany formularz, który doda klienta do bazy danych na podstawie podanego imienia i nazwiska oraz adresu e-mail, które są wpisane w formularzu.

**Uwaga:**
- System nie jest zabezpieczony przed dodawaniem nowego klienta na adres e-mail, który jest już zajęty.

#### Link wylogowywujący
**Opis wyglądu:**
- Jest w nim zawarty tekst *Logout* z czerwonym kolorem czcionki oraz usuniętą dekoracją dla linków.

**Opis funkcjonalności:**
- Po naciśnięciu linka sesja php użytkownika zostaje zniszczona a użytkownik zostaje przekierowany do strony logowania.

#### Footer
**Opis wyglądu:**
- Na samym dole panelu administratora znajduje footer, który zawiera w sobie wycentrowany tekst *© 2023 Kacper Chojecki*.


<!-- Zrobić ten opis projektu tak, że nie musi być tak jak finalny projekt ale jak go będziemy oddawać to trzeba zaktualizować opis projektu do stanu faktycznego. -->
