<?php
require_once "Admin/Config/config.php";
require_once "Class/Core.php";
require_once "Class/config.php";
require_once "Class/Index.php";
require_once "Class/Errors.php";
$err=new Errors();
$config=new config();
$url = $_SERVER['REQUEST_URI'];
foreach ($config->get_routes() as $url_adress) {
        foreach ($config->get_errors() as $errors) {
            $brand = "/" . $url_adress;
            $error = $brand."/". $errors;
            if ($url === "/") {
                break;
            } elseif ($url == $brand) {
                include "brands.php";
                exit();
            } elseif (strcasecmp($url,$error)==0) {
                include "errors.php";
                exit();
            }
        }
}

if (($url !=="/")) {
    http_response_code(404);
    include_once '404.php';
    exit();
}
 ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Все ошибки газовых котлов в одном месте. Расшифровка всевозможных неисправностей и варианты их устранения. Что делать, чтобы неисправность больше не появлялась в устройстве.">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="icon" href="/favicon.png" type="image/png">
    <title>Коды ошибок газовых котлов - расшифровка, как устранить</title>
<!-- Yandex.RTB -->
<script>window.yaContextCb=window.yaContextCb||[]</script>
<script src="https://yandex.ru/ads/system/context.js" async></script>
</head>
<body class="body">
<?php
$obj=new Index();
$obj->get_body();
$obj->get_adv_content();
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pretext text-center">
                <h1>Расшифровка кодов ошибок газовых котлов</h1>
                <p>*Выберите нужный Вам бренд и посмотрите интересующую неисправность.</p>
            </div>
            <div class="col-lg-12">
                <div class="row text-center car-menu">
                    <?php foreach ($obj->get_brand_index() as $index_brands) {?>
                <div class="col-2 col-lg-2  col-sm-2 col-md-2">
                    <a target="_blank" href="<?php echo INDEX."/".$index_brands['url_brands']?>"> <img src="images/brands/<?php echo $index_brands['img_brands']?>" class="car-icon" alt="иконка <?php echo $index_brands['brand_name']?>">
                    <p><?php echo $index_brands['brand_name']?></p>
                    </a>
                </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="statistic">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">На Котле появилась ошибка? - Портал kotel-error.ru справится с ней</h2>
        </div>
        <div class="col-lg-6">
            <div class="col-lg-12 text-center">
                <img src="./images/config/logo.webp" alt="Портал проверки кодов ошибки посудомоек" width="100" height="100">
            </div>

            <p>"Kotel-error.ru - это свежая база всех популярных неисправностей газовых котлов. Мы делаем интернет лучше, тем, что предоставляем пользователям расшифровку ошибок по интересующим их маркам.</p>
            <p>Портал собран таким образом, чтобы Вы могли в кратчайшие сроки найти и ознакомиться с правильной интерпретацией той или иной проблемы.</p>
            <p>Благодаря детальной проработке каждой поломки и отзывам пользователей, мы собрали не только сухую формулировку дальнейших действий с ошибкой, но и обоснованно и детально даем совет, как код необходимо исправлять.</p>
            <p>*Настоятельно рекомендуем Вам не применять указанные варианты исправлений без надзора специалиста."</p>
        </div>
        <div class=" video-promo d-none d-lg-block d-xl-blockcol-lg-6 text-center">
            <video class="promo-video" controls poster = "./images/video/what-servis.webp">
                <source src = "<?php echo INDEX?>/images/video/bolergas.mp4" type = 'video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src = "<?php echo INDEX?>/images/video/bolergas.ogg" type = 'video/ogg; codecs="theora, vorbis"'>
                <source src="<?php echo INDEX?>/images/video/bolergas.webm" type='video/webm; codecs="vp8, vorbis"'>
            </video>
        </div>
    </div>
    </div>
</section>
<section class="sliders">
    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 id="otzyv" class="text-center col-lg-12">Отзывы владельцев</h2>
        </div>
        <div class="col-lg-2">
            <img src="images/config/avto-bacground.webp" class="sliders-avto" alt="Проверка неисправности посудомоечной машины">
        </div>
        <div class="col-lg-10 text-center slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <h3>Всегда старайтесь исправлять ошибки</h3>
                        <p>" В том году я купил себе финский котел. Хотел поставить его на дачу.</p>
                        <p>Площадь в доме небольшая в районе 125кв.м. Ну приехал и установил вроде нормально.</p>
                        <p>Газовик все проверил, дал подтверждение и печать поставил на гарантийном талоне, мы рады были. Однако на первую неделю только.</p>
                        <p>Потом на этом чуде стала появляться ошибка. Я испугался, расшифровал, но она как понял не критичная. Думаю не притерся еще котел.</p>
                        <p>Спустя 4 месяца он вовсе отказался работать. Как потом я понял, у него заводской брак был и нужно было бы сразу его поменять, а я поленился. Хорошо успел в гарантию.</p>
                        <p>Не делайте моих ошибок, лучше проверяйте все досконально, тем более оборудование не из дешевых"</p>

                    </div>
                    <div class="carousel-item">
                        <h3>Выбирайте котел со специалистом</h3>
                        <p>"В начале месяца я заказал в интернете один популярный котел.</p>
                        <p>Меня в первую очередь устроила цена, ну и по отзывам вроде как аппарат стоящий. Заказал. Привезли.</p>
                        <p>Поставил все. Меняю уже не первый раз, руки набиты. Думал я по крайней мере.</p>
                        <p>Не прошло и года, как котел у меня течь начал. В чем думаю причина, вызвал мастера знакомого.</p>
                        <p>Оказалось, что на данной моделе очень тонкий теплообменник. Он при агресивной воде быстро стирается. Даже представить себе не мог, что такое возможно</p>
                        <p>Неисправность я заметил благодаря появившейся ошибке. Там немного капало и все. Иначе бы я совсем запустил бы котел, что потом мы его бы не наладили"</p>
                    </div>
                    <div class="carousel-item v">
                        <h3>На работающем котле не должно быть ошибок, даже несущественных</h3>
                        <p>"Понял эту мысль не сразу. После покупки котла прошло больше 2х лет.</p>
                        <p>Гарантия естественно прошла уже. Последние 12-13 месяцев стала выскакивать ошибка с электроникой. </p>
                        <p>Долго ленился ее расшифровывать, пока у Вас случайно не наткнулся. Как оказалось, у меня начал барахлить пьезо-элемент.</p>
                        <p>Я дотянул до того, что весь блок с пьезо у меня выгорел напрочь</p>
                        <p>Раскрутил, в руках осталось только несколько датчиков и оголенных проводов.</p>
                        <p>Не допускайте до такого и лучше сразу проверяйте. Если не умеете, то лучше специалиста вызывайте"</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<section class="stat-numbers">
    <div class="container">
        <div class="row icon-statistic text-center">
            <div class="col-lg-4 ">
                <h3>Расшифровали:</h3>
                <img src="images/statistic/number1.webp" alt="Сколько кодов опубликовано" class="number1">
                <p><?php echo $config->get_num_errors(); ?> код</p>
            </div>
            <div class="col-lg-4">
                <h3>Производителей:</h3>

                <img src="images/statistic/number2.webp" alt="Сколько брендов на сайте" class="number1">
                <p><?php echo $config->get_num_brands(); ?></p>
            </div>
            <div class="col-lg-4">
                <h3>Решили проблему:</h3>
                <img src="images/statistic/number4.webp" alt="Уже помогли" class="number1">
                <p><?php echo $config->get_num_comments(); ?> раз</p>
            </div>
        </div>
    </div>
</section>
<footer>
    <?php $obj->get_footer(); ?>
</footer>
</body>
</html>