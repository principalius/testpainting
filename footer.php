<footer>

<section id="section-1"><h2>ГАЛЕРЕЯ</h2></section>

<div class="container_slider_css">
  <img class="photo_slider_css" src="sl1.jpg" alt="Рожь">
  <img class="photo_slider_css" src="sl2.jpg" alt="Сосновый бор">
  <img class="photo_slider_css" src="sl3.jpg" alt="Утро в сосновом лесу">
  <img class="photo_slider_css" src="sl4.jpg" alt="Впечатление.Восход солнца">
  <img class="photo_slider_css" src="sl5.jpg" alt="Кувшинки">
  <img class="photo_slider_css" src="sl6.jpg" alt="Осенний вечер">
  <img class="photo_slider_css" src="sl7.jpg" alt="Закат">
  <img class="photo_slider_css" src="sl8.jpg" alt="Мельница в Зандаме">
</div> 


<section id="section-3"><h2>ТЕСТ</h2>
<div class="container_section-3">
<form action="" method="POST">
<div>
  <label for="question_1"><h3>Вопрос № 1. Кто из перечисленных художников был «универсальным человеком»?</h3></label>
  <input type="text" id="question_1" name="question_1" value="">
  <label for="question_2"><h3>Вопрос № 2. Кто из русских живописцев является «певцом русского леса»?</h3></label>
  <input type="text" id="question_2" name="question_2" value="">
  <label for="question_3"><h3>Вопрос № 3. Назовите имя художника-импрессиониста, который рисовал на больших панно кувшинки,
потому что почти ослеп.</h3></label>
  <input type="text" id="question_3" name="question_3" value="">
  <label for="question_4"><h3>Вопрос № 4. Кого из итальянских гениев эпохи Возрождения называют величайшим скульптором в мире?</h3></label>
  <input type="text" id="question_4" name="question_4" value="">
  <label for="question_5"><h3>Вопрос № 5. Полотна, которые улыбаются, их называют «пейзажами настроения».
Кому из русских художников они принадлежат?</h3></label>
  <input type="text" id="question_5" name="question_5" value=""><br> <br>
  
  <input type="submit" value="Отправить ответы">
</div>
</form>
</div>
</section> 



<section id="section-4"><h2>РЕГИСТРАЦИЯ</h2></section> 
<div class="container_section-4">

<?php
error_reporting(E_ERROR); // указываем, что выводим только ошибки

require('functions.php');

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ){ // если форма отправлена методом POST

    list($errors, $input) = validate_form(); // разделяем фозвращаемый двумерный массив на два одномерных

    if ( $errors ){
        show_form($errors, $input);
    } else {
        process_form($input);
    }


} else { // если форма загружена впервые
    show_form(); // показываем форму
}
?>
</div> 

</footer>
