# php

«Комментарии к изображению»

Технические ограничения:
1. Язык реализации PHP5 (Желателен объектно-ориентированный подход) 
2. Используемая База Данных – MySQL
3. В коде не должно быть @, запустить в режиме register_globals=0, 
error_reporting(E_ALL&E_STRICT) и display_errors=1
4. Желательно использовать ajax - запросы к серверу на javascript
5. Верстка и интерфейс на ваше усмотрение

Требования к продукту:
Описание
Есть страница с каким либо контентом. (Для примера пусть это будет любое изображение)
Снизу должен располагаться блок с комментариями. 
Он представляет собой: 
 -- Форма для добавления нового комментария со следующими полями: 
 -- Имя
 -- Текст комментария
 -- Желательно капча (просто выведите несколько случайных символов и поле для их
подтверждения) 
 -- Кнопка "Добавить комментарий" 
 -- Список добавленных ранее комментариев, упорядоченный по дате добавления
(сверху - последний), следующего вида: 
 -- Слева вверху - имя
 -- Справа вверху - время добавления комментария (например "24 апреля 2011 в
14:47") 
 -- Ниже - текст комментария
 -- Где угодно - кнопка для удаления комментария (кнопка, кружочек, квадратик, 
картинка) 
1. Базовый функционал, который должен быть реализован:
 -- При нажатии на кнопку добавления - появляется новый комментарий на странице, 
если правильно введен проверочный код (желательно без перезагрузки страницы -
JavaScript(jQuery) + ajax), при неверном вводе кода - соответствующее сообщение
a. -- При нажатии на кнопку удаления - удаляется соответствующий комментарий
(желательно без перезагрузки страницы - JavaScript(jQuery) + ajax)
2. User friendly – функционал, является дополнительным (бонус в реализации):
a. Возможность прикрепления картинок к записи
Веб-проекты. Продвижение. Брендинг.b. Начальное проектирование интерфейса, использование приемов верстки для
уменьшения объема загружаемой страницы
c. Использование html5