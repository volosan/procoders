# Ожидаемый результат
Результатом выполненного тестового задания мы ожидаем увидеть работающую программу, форматированную согласно стандартов Laravel.
# Задание
Реализовать систему ввода и отображения информации о студентах института, включающую следующие сущности и их атрибуты:

1. Студент:
  * Имя
  * Фамилия
  * Отчество
  * Дата рождения
  * Группа

2. Группа:
  * Номер
  * Курс
  * Название факультета

Система должна иметь следующие функции:

* Отображение списка групп
* Добавление новой группы, редактирование и удаление существующей
* Отображение списка студентов
* Добавление нового студента, редактирование и удаление существующего

# Требования
## Ограничения
* Для валидации используется RequestValidation
* 3+ нормальная форма для SQL
* Задание выполнено без использования готовых CMS

Используемые технологии:

* Laravel 6+
* MySQL 5.8+

## Пользовательский интерфейс
### Экраны системы:
1. Список групп – таблица, кнопки «Добавить», «Изменить», «Удалить»
2. Список студентов с фильтром - таблица, кнопки «Добавить», «Изменить», «Удалить» 
3. Редактирование группы — поля ввода атрибутов, кнопки «ОК», «Отменить»
4. Редактирование студента - поля ввода атрибутов, кнопки «ОК», «Отменить»