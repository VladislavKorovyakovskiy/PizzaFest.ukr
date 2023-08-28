<?php
require "db_connect/config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>PizzaFest</title>
</head>

<body>
    <div class="container-index">
        <div class="item header"> <?php include('block/head.php') ?> </div>
        <div class="item navigarion"> <?php include('block/navigarion.php') ?> </div>
        <div class="item aboutUs">
            <div class="aboutUsItem history">
                <div class="aboutUsHead">
                    <h1>История пиццерии "PizzaFest"</h1>
                </div>
                <div class="block-content-even">
                    <div class="content-about-us">
                        <div class="aboutUsText">
                            <div class="img"></div>В далеком <b>1995 году</b>, когда главный шеф-повар Джулио приехал из Италии в небольшой городок на побережье Средиземного моря, он привез с собой не только традиционные рецепты итальянской кухни, но и искреннюю любовь к пицце. Путешествие Джулио было наполнено удивительными встречами и приключениями, которые закрепили его решение открыть собственную пиццерию.
                        </div>
                    </div>
                </div>
                <div class="block-content-odd">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div>Так появилась <b>"PizzaFest"</b> - уютное заведение, где каждый посетитель погружается в атмосферу настоящего праздника, окунаясь в ароматы свежей выпечки и вкуснейших ингредиентов. "PizzaFest" быстро стало любимым местом для семейных ужинов, дружеских посиделок и романтических свиданий. Вкусные пиццы, приготовленные по традиционным итальянским рецептам, не оставляют равнодушными никого.
                    </div>
                    </div>
                </div>
            </div>
            <div class="aboutUsItem values">
                <div class="aboutUsHead">
                    <h1>Ценности "PizzaFest"</h1>
                </div>
                <div class="block-content-even">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Качество продуктов:</b> "PizzaFest" уделяет особое внимание качеству ингредиентов. Свежие овощи, отборные мясные деликатесы и ароматные травы - все это делает наши пиццы настоящими шедеврами кулинарии.
                    </div>
                    </div>
                </div>
                <div class="block-content-odd">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Традиции и страсть:</b> Мы ценим и уважаем итальянские кулинарные традиции, передавая их из поколения в поколение. Наша команда шеф-поваров исполняет свою работу с искренней страстью к готовке и желанием радовать гостей.
                    </div>
                    </div>
                </div>
                <div class="block-content-even">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Гостеприимство:</b> В "PizzaFest" каждый гость - это особый человек, и мы стремимся сделать его визит незабываемым. Дружелюбная обстановка, внимательный персонал и радушие создают атмосферу домашнего уюта.
                    </div>
                    </div>
                </div>
            </div>
            <div class="aboutUsItem personal">
                <div class="aboutUsHead">
                    <h1>Команда "PizzaFest"</h1>
                </div>
                <div class="block-content-odd">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Джулио (Шеф-повар и основатель):</b> Правая рука ресторана, который с любовью и страстью готовит уникальные рецепты итальянской пиццы.
                    </div>
                    </div>
                </div>
                <div class="block-content-even">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Анна (Менеджер ресторана):</b> Ответственная за работу всего заведения, обеспечивает гармоничную работу команды и уютную атмосферу для гостей.
                    </div>
                    </div>
                </div>
                <div class="block-content-odd">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Марко (Пекарь):</b> Мастер своего дела, который заботится о том, чтобы каждая пицца была идеально испечена и ароматна.
                    </div>
                    </div>
                </div>
                <div class="block-content-even">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div><b>Лука (Официант):</b> Дружелюбный и приветливый официант, который знает все о наших блюдах и готов помочь гостям с выбором.
                    </div>
                    </div>
                </div>
                <div class="block-content-odd">
                    <div class="content-about-us">
                    <div class="aboutUsText">
                        <div class="img"></div>Вместе команда <b>"PizzaFest"</b> создает настоящий праздник для всех, кто приходит к нам насладиться вкусом настоящей итальянской пиццы и приятным времяпрепровождением. Мы гордимся тем, что наша пиццерия стала местом, где встречаются друзья, любимые и близкие люди.
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item footer">footer</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/script.js"></script>
    <script>
        function checkScreenWidth() {
    if (window.innerWidth < 1280) {
        const imgPosition = document.querySelectorAll('.img')
        for (let i = 0; i < imgPosition.length; i++) {
            imgPosition[i].addEventListener('click', function() {
                imgPosition[i].classList.add("animationImg");
            })
        }
    }
}
window.addEventListener('load', checkScreenWidth);
window.addEventListener('resize', checkScreenWidth);
    </script>
</body>

</html>