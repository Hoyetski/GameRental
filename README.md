# GameRental

## Spis Treści:

- [Opis projektu](##Opis)

- [Funkcjonalność](###funkcjonalność)

  - [Strona logowania](####strona-logowania)

  - [Panel administratora](####panel-administratora)

    - [Pasek górny](####pasek-górny)

    - [Sekcja dostępnych gier](####sekcja-dostępnych-gier)
 
    - [Sekcja dodawnia gier](####sekcja-dodawnia-gier)

    - [Sekcja dostępnych klientów](####sekcja-dostępnych-klientów)

    - [Sekcja dodawnia klienta](####sekcja-dodawnia-klienta)

    - [Footer](####footer)

---


## Opis:

Projekt *GameRental* jest projektem strony internetowej za pomocą, której pracownicy naszej wypożyczalni gier *GameRental* będą mieli ułatwioną pracę.

Z naszej strony będą korzystać tylko pracownicy naszej wypożyczalni gier.

Strona będzie miała ekran logowania, w którym będziemy mieli formularz do logowania oraz rejestracji.

Po zalogowaniu lub rejestracji użytkownik zostanie przekierowany do panelu administratora.  

W panelu administratora

## Funkcjonalność:

  
#### Strona logowania:

Strona logowania posiada logo strony GameRental:
![Logo GameRental](https://i.imgur.com/jQEIAJP.png)


oraz 2 formularze, które służą do logowania oraz rejestracji administratora.

Po zarejestrowaniu użytkownik jest automatycznie logowany i przenoszony do panelu administratora, po zalogowaniu użytkownika następuje to samo.

---

#### Panel administratora:

Panel administratora będzie służył do:


- Dodawania nowych klientów do bazy danych

- Dodawania nowych gier do bazy danych

- Usuwania gier z bazy danych

- Zmieniania ilości gier w bazie danych

- Sprawdzania dostępności gier

- Wypożyczania gier

- Sprawdzania zaległości klientów

---

#### Pasek górny:

Pasek górny posiada na środku logo strony:

![Logo GameRental](https://i.imgur.com/jQEIAJP.png)

---

#### Sekcja dostępnych gier:

W tej sekcji będzie tabela z wszystkimi dostępnymi grami w bazie danych mająca następującą strukturę:

| id | title |quantity|action|
|--|--|--|--|
| 1 | Minecraft |13|***Remove***|

W kolumnie **action** będzie się znajdować przycisk ***Remove*** dla każdej gry, który będzie służył do usuwania danej gry z bazy danych.

---

#### Sekcja dodawania gier:

Sekcja dodawania gier będzie służyć do wprowadzania nowych gier do bazy danych.

Będzie się w niej znajdować formularz z **inputami** na:

- tytuł gry

- ilość sztuk danej gry

---

#### Sekcja dostępnych klientów:

W tej sekcji będzie tabela z wszystkimi dostępnymi klientami w bazie danych mająca następującą strukturę:

| id | first-name | last-name | email | action |
|--|--|--|--|--|
| 1 | John |Joe | johnjoe@example.com | ***Remove*** |

W kolumnie **action** będzie się znajdować przycisk ***Remove*** dla każdego klienta, który będzie służył do usuwania danego klienta z bazy danych.

---

#### Sekcja dodawania klientów:

Sekcja dodawania klientów będzie służyć do wprowadzania nowych klientów do bazy danych.

Będzie się w niej znajdować formularz z **inputami** na:

- imię

- nazwisko

- adres e-mail

---

Zrobić ten opis projektu tak, że nie musi być taka jak finalny projekt jak go będziemy oddawać ale jak będziemy oddawać projekt to trzeba zaktualizować opis projektu do stanu faktycznego.
