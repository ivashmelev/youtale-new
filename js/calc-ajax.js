$(function(){
    $(".tab-description__landing").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"description":"Опиcание"});
    });
    $(".tab-calc__landing").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"calc":'<p>Сроки разработки: <span class="value-time">0ч</span> </p><div id="slider" class="time"></div><input type="checkbox" class="checkbox-tech_task">Техническое Задание</input><br><input type="checkbox" class="checkbox-design">Дизайн</input><hr><p><u>Цена</u> : <span class="cost"></span></p><a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-description__site").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"description":'Опиcание Сайта <a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-calc__site").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"calc":'<p>Сроки разработки: <span class="value-time">0ч</span> </p><div id="slider" class="time"></div><input type="checkbox" class="checkbox-tech_task">Техническое Задание</input><br><input type="checkbox" class="checkbox-design">Дизайн</input><hr><p><u>Цена</u> : <span class="cost"></span></p><a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-description__store").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"description":'Опиcание Интернет-магазина <a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-calc__store").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"calc":'<p>Сроки разработки: <span class="value-time">0ч</span> </p><div id="slider" class="time"></div><input type="checkbox" class="checkbox-tech_task">Техническое Задание</input><br><input type="checkbox" class="checkbox-design">Дизайн</input><hr><p><u>Цена</u> : <span class="cost"></span></p><a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-description__integration").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"description":'Опиcание Интеграции <a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
    $(".tab-calc__integration").click(function(){
        $(".data").load("data-ajax/data.php", 
            {"calc":'<p>Сроки разработки: <span class="value-time">0ч</span> </p><div id="slider" class="time"></div><input type="checkbox" class="checkbox-tech_task">Техническое Задание</input><br><hr><p><u>Цена</u> : <span class="cost"></span></p><a href="#feedback"><div class="button-consultation">ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</div></a>'});
    });
});