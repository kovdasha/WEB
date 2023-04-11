--Создать файл my.sql, в котором должна создаваться таблица с информацией об одногруппниках. 
--В таблице должно быть четыре поля: id, name, age, address. 
--Все поля в таблице обязательны для заполнения.
--Необходимо добавить 5-10 одногруппников в данную таблицу.
--Необходимо написать запрос на получение имен всех одногруппников (только имен, без всего остального), 
--которые живут в Москве и их возраст находится в диапазоне [18, 30) лет.

CREATE TABLE CLASSMATES (
  Id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  adress TEXT NOT NULL
);


INSERT INTO CLASSMATES VALUES (01, 'Агата', 18, 'Москва');
INSERT INTO CLASSMATES VALUES (02, 'Борис', 20, 'Мирный');
INSERT INTO CLASSMATES VALUES (03, 'Вениамин', 22, 'Санкт-Петербург');
INSERT INTO CLASSMATES VALUES (04, 'Галина', 25, 'Москва');
INSERT INTO CLASSMATES VALUES (05, 'Дарья', 29, 'Троицк');
INSERT INTO CLASSMATES VALUES (06, 'Егор', 30, 'Москва');
INSERT INTO CLASSMATES VALUES (07, 'Жанна', 33, 'Нижний Новгород');


SELECT name FROM CLASSMATES WHERE adress = 'Москва' and age >=18 and age <30;