<?php
/**
 *
 * функция для проверки полей ввода
 *
 */
function validate_form(){
    // массивы для данных и ошибок
    $errors = []; // массив для ошибок
    $input = []; // массив для данных

    // забираем введенные пользователем данные и кладем в массив $input
    $input['first_name'] = htmlspecialchars( trim($_POST['first_name']) );
    $input['last_name'] = htmlspecialchars( trim($_POST['last_name']) );
    $input['login'] = htmlspecialchars( trim($_POST['login']) );
    $input['password'] = htmlspecialchars( trim($_POST['password']) );
    $input['email'] = htmlspecialchars( trim($_POST['email']) );

    //забираем введенные ответы на вопросы и кладем в массив $input
    $input['question_1'] = htmlspecialchars( trim($_POST['question_1']) );
    $input['question_2'] = htmlspecialchars( trim($_POST['question_2']) );
    $input['question_3'] = htmlspecialchars( trim($_POST['question_3']) );
    $input['question_4'] = htmlspecialchars( trim($_POST['question_4']) );
    $input['question_5'] = htmlspecialchars( trim($_POST['question_5']) );

        /**
     * функция для проверки имени
     */
    // объявляем функцию
    function validate_first_name( $first_name ){
        $reg_exp = "/^[а-яё]{2,}$/ui";

        if( empty($first_name) ){
            return 'Введите имя!';
        } elseif( mb_strlen($first_name) < 2 ){
            return 'Имя должно состоять не менее чем из двух букв!';
        } elseif( !preg_match($reg_exp, $first_name) ){
            return 'Имя должно состоять только из русских букв!';
        }
    }
    // вызываем функцию для проверки имени
    if( validate_first_name( $input['first_name'] ) ){
        $errors['first_name'] = validate_first_name( $input['first_name'] );
    }

    /**
     * функция для проверки фамилии
     */
    // объявляем функцию
    function validate_last_name ($last_name) {
        $reg2_exp = '/^[а-яё]{2,}$/ui';

        if (empty($last_name)){
            return "Введите фамилию!";
        }
        elseif (mb_strlen($last_name) < 2){
            return "Фамилия должна содержать не меньше двух букв";
        }
        elseif (!preg_match($reg2_exp,$last_name)){
            return "Фамилия должна состоять только из русских букв";
        }
    }
    // вызываем функцию для проверки имени
    if( validate_last_name($input['last_name'])){
        $errors['last_name'] = validate_last_name($input['last_name']);
    }

    /**
     * функция для проверки логина
     */
    // объявляем функцию
    function validate_login($login){
        $reg_exp = "/^[a-z][a-z0-9]{2,}$/ui";

        if( strlen($login) === 0 ){
            return 'Введите логин';
        } elseif( strlen($login) < 2 ){
            return 'Логин должен быть не короче двух символов';
        } elseif ( !preg_match($reg_exp, $login) ){
            return 'Логин должен содержать только латинские буквы или цифры и должен начинаться с буквы';
        }

    }
    // вызываем функцию для проверки логина
    if( validate_login($input['login']) ){
        $errors['login'] = validate_login($input['login']);
    }

    /**
     * функция для проверки емейла
     */
    // объявляем функцию
    function validate_email($email){
        $reg_exp = "/^.+@.+$/u";

        if(strlen($email) === 0){
            return 'Введите адрес электронной почты';
        } elseif (!preg_match($reg_exp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }
    }
    // вызываем функцию для проверки емейла
    if( validate_email($input['email']) ){
        $errors['email'] = validate_email($input['email']);
    }

    /**
     * функция для проверки пароля
     */
    // объявляем функцию
    function validate_password($password){
        $reg_exp = "/^.{8,}$/u";

        if(strlen($password) === 0){
            return 'Введите пароль';
        }elseif(!preg_match($reg_exp, $password)){
            return 'Пароль должен состоять минимум из восьми произвольных символов';
        }
    }
    // вызываем функцию для проверки пароля
    if( validate_password($input['password']) ){
        $errors['password'] = validate_password($input['password']);
    }

      
    
    
// объявляем функцию для ОТВЕТОВ
//function validate_question_1( $question_1 ){
   
   // $reg_exp = "/^[а-яё]{2,}$/ui";
     //if( empty($question) ){
     //      return 'Введите ответ!';
     //  } elseif( mb_strlen($question_1) < 2 ){
     //     return 'Ответ должен состоять не менее чем из шести слов!';
      // } elseif( !preg_match($reg_exp, $question_1) ){
      //     return 'Ответ должен состоять только из русских букв!';
       //}
   //}
   // вызываем функцию для проверки Ответа
   //if( validate_question_1( $input['question'] ) ){
   //    $errors['question_1'] = validate_question_1( $input['question'] );
   //}


    // возвращаем массив с данными, введенными пользователем и ошибками если они есть
    return [$errors, $input];
}

/**
 *
 * Функция отображения данных при успешной обработке формы
 *
 */
function process_form($input = []){
    echo <<<_HTML_
    
        <h1>Вы успешно зарегистрировались, $input[first_name]</h1>

        <h2>Ваше имя: $input[first_name]</h2>
        <h2>Ваша фамилия: $input[last_name]</h2>
        <h2>Ваш логин: $input[login]</h2>
        <h2>Ваш адрес электронной почты: $input[email]</h2>
        <h2>Ваш пароль: $input[password]</h2>

<h1>Ваши ответы, $input[first_name]</h1>

        <h2>Ваш ответ: $input[question_1]</h2>
        <h2>Ваш ответ: $input[question_2]</h2>
        <h2>Ваш ответ: $input[question_3]</h2>
        <h2>Ваш ответ: $input[question_4]</h2>
        <h2>Ваш ответ: $input[question_5]</h2>

        
        
_HTML_;

}

/**
 *
 * Функция отображения формы
 *
 */
function show_form($errors = [], $input = []){

    echo <<<_HTML_
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>ТЕСТ ПО ИСТОРИИ ЖИВОПИСИ</title>
            <style>
           
                div{
                margin: 7px;
                }
                span{
                color: 	LightYellow;
                }
 
            </style>
        </head>
        <body>
            <form action="" method="POST">
                               
                <div>
                    <label for="first_name">Имя:</label><br>
                    <input type="text" name="first_name" placeholder="Только русские буквы" value="$input[first_name]">
                    <span>$errors[first_name]</span>
                </div>
                
                <div>
                    <label for="last_name">Фамилия:</label><br>
                    <input type="text" name="last_name" placeholder="Только русские буквы" value="$input[last_name]">
                    <span>$errors[last_name]</span>
                </div>
                
                <div>
                    <label for="login">Логин:</label><br>
                    <input type="text" name="login" placeholder="Только латинские буквы и цифры" value="$input[login]" size="30">
                    <span>$errors[login]</span>
                </div>
                
                <div>
                    <label for="email">Электронная почта:</label><br>
                    <input type="email" name="email" value="$input[email]">
                    <span>$errors[email]</span>
                </div>
                
                <div>
                    <label for="password">Пароль:</label><br>
                    <input type="password" name="password" placeholder="Не менее восьми произвольных символов" value="$input[password]" size="40">
                    <span>$errors[password]</span>
                </div>

                <input type="submit" value="Регистрация">


        <div>
                <label for="question_1"> Ответ на вопрос № 1:</label><br>
                <input type="question_1" name="question_1" placeholder="Не более шести слов" value="$input[question_1]" size="40">
                <span>$errors[question_1]</span>
            </div>
        
            <div>
                <label for="question_2">Ответ на вопрос № 2:</label><br>
                <input type="question_2" name="question_2" placeholder="Не более шести слов" value="$input[question_2]" size="40">
                <span>$errors[question_2]</span>
            </div>
        
            <div>
                <label for="question_3">Ответ на вопрос № 3:</label><br>
                <input type="question_3" name="question_3" placeholder="Не более шести слов" value="$input[question_3]" size="40">
                <span>$errors[question_3]</span>
            </div>
        
            <div>
                <label for="question_4">Ответ на вопрос № 4:</label><br>
                <input type="question_4" name="question_4" placeholder="Не более шести слов" value="$input[question_4]" size="40">
                <span>$errors[question_4]</span>
            </div>
        
            <div>
                <label for="question_5">Ответ на вопрос № 5:</label><br>
                <input type="question_5" name="question_5" placeholder="Не более шести слов" value="$input[question_5]" size="40">
                <span>$errors[question_5]</span>
            </div>

                                      
                


        </form>
        </body>
       </html>     

_HTML_;

}
