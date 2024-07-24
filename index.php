<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="slider.css">
    <title>НАШЕ:36</title>
</head>
<noscript>В вашем браузере отключен JavaScript, включите для нормального функционирования сайта</noscript>
<body>
    <header id="header" class="header">
        <div class="container">
            <div class="navigation">
                <a href="#" class="nav_wrapp">Новости</a>
                <a href="#" class="nav_wrapp">Темы</a>
                <a href="#" class="nav_wrapp">Афиша</a>
                <a href="#" class="nav_wrapp">Рубрики</a>
                <a href="#" class="nav_wrapp">Видео</a>
                <img src="media/Наше_36.png" alt="LOGO" class="logo">
            </div>
        </div>
    </header>
    <!-- ПРЕВЬЮ С ВАЖНОЙ НОВОСТЬЮ ИЛИ ТЕМОЙ -->
    <div class="container">
        <div class="preview">
            <div class="main-theme-wrapp">
                <div class="main-theme">Экология</div>
                <div class="subhead">Будущее планеты: 10 важных вопросов об экологии</div>
            </div>
            <div class="question-wrapp">
            <div class="question">Как рост загразнения воздуха влияет на наше здоровье и окружающую среду?</div>
            <div class="question">Какие проблемы создают пластиковые отходы в наших океанах?</div>
            <div class="question">Почему вырубка лесов является серьезной экологической проблемой?</div>
            </div>
            <a href="https://youtu.be/Y7KsKtcm7yw?si=9kmA5g2Bdag5x9Ge" class="watch">СМОТРЕТЬ</a>
        </div>
    </div>
    <!-- ВАЖНО ЗНАТЬ -->
     <div class="container">
     <div class="title first-title">ВАЖНО ЗНАТЬ</div>
<div class="slider">
    <div class="card">
        <img src="media/img1.png" alt="Card 1">
        <p class="type">ГУБЕРНАТОР</p>
        <p class="slider-text">Губернатор наградил бывшего главу водоканала</p>
        <p class="slider-time">18 июля,12:35</p>
    </div>
    <div class="card active">
        <img src="media/img2.png" alt="Card 2">
        <p class="type">ГУБЕРНАТОР</p>
        <p class="slider-text">Власти снова планируют ввести безлимитный проездной в Воронеже</p>
        <p class="slider-time">18 июля,12:35</p>
    </div>
    <div class="card">
        <img src="media/img3.png" alt="Card 3">
        <p class="type">ГУБЕРНАТОР</p>
        <p class="slider-text">Штормовое предупреждение. Жара до 37° накроет Воронежскую область на несколько дней</p>
        <p class="slider-time">18 июля,12:35</p>
    </div>
    <!-- Добавьте дополнительные карточки здесь -->
</div>
<div class="buttons">
    <button class="button" id="prev">◀</button>
    <button class="button" id="next">▶</button>
</div>
<script>
const cards = document.querySelectorAll(".card");
let currentIndex = 1;

function updateCards() {
  cards.forEach((card, index) => {
    card.classList.remove("active");
    if (index === currentIndex) {
      card.classList.add("active");
    }
    const offset = (index - currentIndex) * 5; // Изменено смещение
    card.style.transform = `translateX(${offset}%)`;
    card.style.opacity = index === currentIndex ? 1 : 0.5;
  });
}

document.getElementById("next").addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % cards.length;
  updateCards();
});

document.getElementById("prev").addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + cards.length) % cards.length;
  updateCards();
});

updateCards(); // Инициализация слайдера
</script>
     </div>
     <!-- КОНЕЦ ВАЖНО ЗНАТЬ -->
      <!-- СТАТЬИ И СВЕЖАК -->
    <div class="container">
        <div class="article-sveshak-wrapp">
            <div class="article-wrapp">
        <p class="article-text">СТАТЬИ</p>
                <div class="article">
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article1.png">
                    <p class="article-main-theme">Какой недорогой и качественный квас покупать летом</p>
                    <p class="article-subhead">18 июля, 08:01</p>
                    </div>
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article2.png">
                    <p class="article-main-theme">Народные приметы:самые денежные дни недели</p>
                    <p class="article-subhead">17 июля, 10:01</p>
                    </div>
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article3.png">
                    <p class="article-main-theme">3 важных правила выращивания баклажанов</p>
                    <p class="article-subhead">8 июля, 23:01</p>
                    </div>
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article4.png">
                    <p class="article-main-theme">6 причин, по которым у томатов скручиваются листья</p>
                    <p class="article-subhead">6 апреля, 15:21</p>
                    </div>
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article5.png">
                    <p class="article-main-theme">Знаки зодиака, которым чаще всего отказывают в кредите</p>
                    <p class="article-subhead">13 марта, 21:31</p>
                    </div>
                    <div class="article-card">
                    <img class="article-img" src="/media/article/article6.png">
                    <p class="article-main-theme">Номер дома имеет значение</p>
                    <p class="article-subhead">10 февраля, 10:10</p>
                    </div>
                </div>
                <form class="article-form" action="#">
                    <button class="article-button">УЗНАТЬ БОЛЬШЕ!</button>
                </form>
            </div>
            <div class="sveshak-wrapp">
        <p class="sveshak-text">СВЕЖАК</p>
                <div class="sveshak">
                    <div class="sveshak-card">
                        <img class="sveshak-img" src="/media/sveshak/sveshak1.png">
                        <p class="sveshak-main-theme">Сегодня в Воронеже кот зафлексил прямо у пятерочки</p>
                    </div>
                    <div class="sveshak-card">
                        <p class="sveshak-main-theme">Главное за ночь "Ласточка" врезалась в легковушку: погибла семья с близнецами</p>
                        <img class="sveshak-img" src="/media/sveshak/sveshak2.png">
                    </div>
                    <div class="sveshak-card">
                        <img class="sveshak-img" src="/media/sveshak/sveshak3.png">
                        <p class="sveshak-main-theme">"Все погасло!" Центр Воронежа остался без света</p>
                    </div>
                    <div class="sveshak-card">
                        <p class="sveshak-main-theme">Обиженная воронежанка вонзила нож мужу в живот и бросила его умирать</p>
                        <img class="sveshak-img" src="/media/sveshak/sveshak4.png">
                    </div>
                    <div class="sveshak-card">
                        <img class="sveshak-img" src="/media/sveshak/sveshak5.png">
                        <p class="sveshak-main-theme">Восемь новых дорожных знаков повились в Воронежской области</p>
                    </div>
                    <div class="sveshak-card">
                        <p class="sveshak-main-theme">Масштабное отключение холодной воды ждет воронежцев в жуткую жару</p>
                        <img class="sveshak-img" src="/media/sveshak/sveshak6.png">
                    </div>
                </div>
                <form class="sveshak-form" action="#">
                    <button class="sveshak-button">ЧИТАТЬ ЕЩЕ...</button>
                </form>
            </div>
        </div>
    </div>
    <!-- КОНЕЦ СТАТЬИ И СВЕЖАК -->
    <!-- НАЧАЛО АФИШИ СОБЫТИЙ -->
    <div class="container">
        <div class="poster">Афиша событий</div>
        <div class="event-wrapp">
            <div class="event-card">
                <img class="event-img" src="/media/event/event1.png">
                    <div class="event-text-wrapp">
                <p class="event-title">Посещение Океанариума</p>
                <p class="event-subhead">Воронежский океанариум - единственный в Центральном Черноземье (экономической зоне, обьяединяющий 5 федеральных субьектов).</p>
                <div class="event-time">До 31 августа</div>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event2.png">
                    <div class="event-text-wrapp">
                <p class="event-title">"БеспринцЫпные чтения". Гала-концерт</p>
                <p class="event-subhead">БеспринцЫпные чтения - один из самых ярких и необычных проектов последнего времени, в рамках которо современную отечественную...</p>
                <div class="event-time">10 и 11 августа</div>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event3.png">
                    <div class="event-text-wrapp">
                <p class="event-title">IOWA. Summer Sound x билайн</p>
                <p class="event-subhead">Этим летом Москва и Екатеринбург будут петь самые знаменитые хиты группы IOWA. Нам же нравится одно и то же? Мы угадали?</p>
                <div class="event-time">25 июля в 19:30</div>
                    </div>
            </div>
            <div class="event-card">
                <img class="event-img" src="/media/event/event4.png">
                    <div class="event-text-wrapp">
                <p class="event-title">Турнир по баскетболу 2x2 и NBA2K</p>
                <p class="event-subhead">Заявляйся в отрытые турниры по баскетболу 2x2 и по кибербаскетболу и выигрывай джерси игроков сборной России.</p>
                <div class="event-time">20 июля в 14:00</div>
                    </div>
            </div>
        </div>
        <form class="events-form" action="#">    
        <button class="events-button">ДРУГИЕ МЕРОПРИЯТИЯ</button>
        </form>
        </div>
    </div>
    <!-- КОНЕЦ АФИШИ СОБЫТИЙ -->
    <!-- НАЧАЛО FOOTER -->
    <div class="container">
    </div>
    <!-- КОНЕЦ FOOTER -->
</body>
</html>