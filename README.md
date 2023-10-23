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
		- [Sekcja dodawania klienta](#sekcja-dodawania-klientów)
		- [Link wylogowywujący](#link-wylogowywujący)
		- [Footer](#footer)

## Wstęp:
Projekt *GameRental* jest projektem strony internetowej za pomocą, której pracownicy naszej wypożyczalni gier *GameRental* będą mieli ułatwioną pracę.
Z naszej strony będą korzystać tylko pracownicy naszej wypożyczalni gier.
Logo strony *GameRental*:
![Logo GameRental](https://i.imgur.com/jQEIAJP.png)

## Opis wyglądu i funkcjonalności:

### Strona logowania:
**Opis wyglądu:**
Strona logowania posiada 2 formularze, zarówno pierwszy jak i drugi posiadają pola na e-mail oraz hasło oraz przycisk do wysyłania formularza.
Formularze są obok siebie a nad nimi znajduje się wycentrowane logo strony *GameRental*
Zarówno formularze jak i logo są zamknięte w kontynerze, który jest wycentrowany horyzontalnie i poziomo.

**Opis funkcjonalności:**
Po wysłaniu formularza rejestracji użytkownik jest dodawany do bazy danych.
Po wysłaniu formularza logowania, tworzona jest sesja php a użytkownik jest przekierowywany do panelu administratora.
Jeśli użytkownik wejdzie na stronę logowania będąc zalogowanym to jest przenoszony do panelu administratora.

**Uwaga:**
- System rejestracji nie jest zabezpieczony na możliwość założenia 2 kont na ten sam adres e-mail!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

### Panel administratora:
**Opis wyglądu:**
Panel administratora, posiada następujący układ od góry do dołu:
- [Pasek górny](#pasek-górny)
- [Sekcja wypożyczania gier](#sekcja-wypożyczania-gier)
- [Sekcja wszystkich wypożyczeń](#sekcja-wszystkich-wypożyczeń)
- [Sekcja dostępnych gier](#sekcja-dostępnych-gier)
- [Sekcja dodawania gier](#sekcja-dodawania-gier)
- [Sekcja dostępnych klientów](#sekcja-dostępnych-klientów)
- [Sekcja dodawania klienta](#sekcja-dodawania-klientów)
- [Link wylogowywujący](#link-wylogowywujący)
- [Footer](#footer)

**Opis funkcjonalności:**
Jeśli użytkownik niezalogowany spróbuje wejść do panelu administratora, to zostanie przekierowany do strony logowania.
Panel administratora będzie służył do:
- Dodawania nowych klientów do bazy danych
- Dodawania nowych gier do bazy danych
- Usuwania gier z bazy danych
- Zmieniania ilości gier w bazie danych
- Sprawdzania dostępności gier
- Wypożyczania gier
- Sprawdzania zaległości klientów

#### Pasek górny
**Opis wyglądu:**
- Na samej górze strony logowania znajduje się pasek górny, który zawiera wycentrowane logo strony *GameRental*:

#### Sekcja wypożyczania gier:
**Opis wyglądu:**
- W sekcji wypożyczania gier  znajduje się wycentrowany nagłówek *Sekcja wypożyczania gier* a pod nim formularz.
- W formularzu znadują się 2 pola na wpisanie tytułu gry oraz adres e-mail klienta, pola te są wymagane do uzupełnienia.
- Oprócz tego w formularzu będzie się znajdował przycisk *Rent*.

**Opis funkcjonalności:**
- Po naciśnięciu przycisku *Rent*, zostatnie wysłany formualrz, który wypożyczy daną grę dla danego użytkownika.
- Jeśli dana gra jest niedostępna lub nie istnieje to wyświetla się alert o braku dostępności gry a wypożyczenie nie zostanie stworzone.
- Jeśli dany użytkownik nie istnieje to wyświetla się alert o nieistniejącym użytkowniku a wypożyczenie nie zostanie stworzone.

**Uwaga:**
- System wypożyczania gier nie sprawdza ile użytkownik wypożyczył już gier!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

### Sekcja wszystkich wypożyczeń:
**Opis wyglądu:**
- Znajduje się w niej wycentrowany nagłówek *Sekcja wszystkich wypożyczeń* a pod nim tabela z następującym układem:

| id | e-mail | title | deadline (days) | action |
|--|--|--|--|--|
| 4 | johnbob@o2.pl | Minecraft | 28 | [Remove] |

- Każdy rekord tabeli będzie zamknięty w formularzu, pierwsze 4 komórki rekordu będą polami przeznaczonymi tylko do odczytu.
- W kolumnie action dla każdego rekordu znajduje się przycisk *Remove*.

**Opis funkcjonalności:**
- Przycisk *Remove* wysyła formularz, który usunie poszczególne wypożyczenie z bazy danych.

**Uwaga:**
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dostępnych gier:
**Opis wyglądu:**
- Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych gier* a pod nim tabela z następującym układem:

| id | title |quantity|action|
|--|--|--|--|
| 1 | Minecraft |13|[***Remove***]|

- Każdy rekord tabeli będzie zamknięty w formularzu, pierwsze 4 komórki rekordu będą polami przeznaczonymi tylko do odczytu.
- W kolumnie action dla każdego rekordu znajduje się przycisk *Remove*.

**Opis funkcjonalności:**
- Przycisk *Remove* wysyła formularz, który usunie poszczególną grę z bazy danych.

**Uwaga:**
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dodawania gier:
**Opis wyglądu:**
W sekcji dodawania gier znajduje się wycentrowany nagłówek *Sekcja dodawania gier* a pod nim formularz z polami na wpisanie tytułu gry oraz ilość sztuk w magazynie, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.
Pola w formularzach mają atrybut *required*.

**Opis funkcjonalności:**
Sekcja dodawania gier będzie służyć do wprowadzania nowych gier do bazy danych na podstawie podanego tytułu oraz ilości sztuk gry w magazynie, które są wpisane w formularzu.

#### Sekcja dostępnych klientów:
**Opis wyglądu:**
Znajduje się w niej wycentrowany nagłówek *Sekcja dostępnych klientów* a pod nim tabela z następującym układem:

| id | first-name | last-name | email | rented | deadline |action |
|--|--|--|--|--|--|--|
| 1 | John | Joe | johnjoe@example.com | Minecraft| 23 days|[***Remove***] [***Change***] |

Każdy rekord tabeli będzie zamknięty w formularzu a komórki *first-name, last-name, e-mail, rented, deadline* będą polami, w których będą z góry wpisane wartości.
W kolumnie action znajdują się przyciski *Remove* oraz *Change* służące do wysyłania  poszczególnego formularza.
Pola w formularzach mają atrybut *required*.

**Uwaga:**
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.
- System nie jest zabezpieczony przed edycją adresu e-mail na taki, który jest zajęty w bazie danych.

**Opis funkcjonalności:**
Pola każdego rekordu tabeli znajdującej się w sekcji dostępnych klientów będą wypełniane informacjami adekwatnymi do każdego klienta znajdującej się w bazie danych.
Po wciśnięciu przycisku *Remove* zostanie wysłany formualrz, którzy usunie klienta z bazy danych na podstawie jego id w formularzu.
Po wciśnięciu przycisku *Change* zostaną zmienione informacje o imieniu, naziwsku oraz adresie e-mail użytkownika w bazie danych na takie jakie są wpisane w polach formularza.

**Uwaga:**
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Sekcja dodawania klientów:
**Opis wyglądu:**
W sekcji dodawania klientów będzie się znajdował wycentrowany nagłówek *Sekcja dodawania klientów* a pod nim formularz z polami na wpisanie imienia, nazwiska oraz adresu e-mail klienta, oprócz tego w formularzu będzie się znajdował przycisk do wysyłania formularza.
Pola w formularzach mają atrybut *required*.

**Opis funkcjonalności:**
Sekcja dodawania klientów będzie służyć do wprowadzania nowych klientów do bazy danych na podstawie podanego imienia, nazwiska oraz adresu e-mail użytkownika, wpisanych w formularzu

**Uwaga:**
- System dodawania klientów nie jest zabezpieczony na możliwość dodania 2 różnych klientów posiadających ten sam adres e-mail!
- System nie jest zabezpieczony przed wysyłaniem pustego formularza poprzez programy inne niż przeglądarki.

#### Link wylogowywujący
**Opis wyglądu:**
- Jest w nim zawarty tekst *Logout* z czerwonym kolorem czcionki oraz usuniętą dekoracją dla linków.

**Opis funkcjonalności:**
- Po naciśnięciu linka sesja php użytkownika zostaje zniszczona a użytkownik zostaje przekierowany do strony logowania.

#### Footer
**Opis wyglądu:**
- Na samej dole podstrony znajduje footer, który zawiera w sobie wycentrowany tekst *© 2023 Kacper Chojecki*.


<!-- Zrobić ten opis projektu tak, że nie musi być taka jak finalny projekt jak go będziemy oddawać ale jak będziemy oddawać projekt to trzeba zaktualizować opis projektu do stanu faktycznego. -->
