<main>

<section id="section-5"><h1>ВЕЛИКИЕ ЖИВОПИСЦЫ</h1></section>

<?php
// массив с данными 
$users = [
['id'=> 3, 'first_name' => 'Леона́рдо ди сер Пье́ро да Ви́нчи', 'birth_date' => '1452-1519',  
    'profile_img' => 'fasce2.jpg'],

['id'=> 4, 'first_name' => 'Микеланджело Буанаротти', 'birth_date' => '1475', 'death_date' => '1564', 
    'profile_img' => 'mikelangelo.jpg'],

['id'=> 5, 'first_name' => 'Иван Шишкин', 'birth_date' => '1832' , 'death_date' => '1898', 
    'profile_img' => 'shishkin.jpg'],

['id'=> 1, 'first_name' => 'Исаак Левитан', 'birth_date' => '1860', 'death_date' => '1900', 
 'profile_img' => 'levitan.jpg'],

['id'=> 2, 'first_name' => 'Клод Моне', 'birth_date' => '1840', 'death_date' => '1926', 
'profile_img' => 'klod.jpg'],
];

echo '<div class="users">';

foreach($users as $user){
echo '<div class="user">';
echo "<img src='$user[profile_img]'>";
echo "<p><span>  </span>$user[first_name]</p>";
//echo "<p><span> Год рождения: </span>$user[birth_date]</p>";
//echo "<p><span> Год смерти: </span>$user[death_date]</p>";
echo '</div>';
}

echo '</div>';
?>

<section id="section-2"><h1>ИСТОРИЧЕСКИЕ СПРАВКИ</h1></section>

<?php
// массив с данными БИОГРАФИЙ
$users_1 = [
['id'=> 33, 'first_name' => 'Леона́рдо ди сер Пье́ро да Ви́нчи', 'biography' => 'Леонардо да Винчи – итальянский деятель эпохи Ренессанса, проявивший свой гений в науке, искусстве, инженерном деле. 
Автор знаменитой «Мона Лизы» и один из самых известных «универсальных людей».
Он родился 15 апреля 1452 года в селении Анкиано в окрестностях городка Винчи, что неподалеку от Флоренции. 
Леонардо принято считать самым известным «универсальным человеком» как гениального изобретателя, скульптора, 
живописца, философа и ученого. Разброс интересов великого итальянца поражает воображение, 
а его личность и биография вот уже несколько сотен лет вызывает неподдельный интерес как историков,
так и обычных обывателей. Основную часть жизни гений посвятил инженерным разработкам как для военных, 
так и для мирных целей. В своей мастерской итальянец создавал прототипы танков, летательных аппаратов, 
катапульт, мобильного моста и даже пулемета. Многие чертежи ученого до сих пор до конца не разгаданы.' ],

['id'=> 44, 'first_name' => 'Микеланджело Буанаротти', 'biography' => 'Микеланджело Буонарроти (1475-1564) – великий итальянский художник эпохи Ренессанса. Также известен как скульптор,
мыслитель, архитектор и поэт. В его творениях присутствует хвала физической и духовной красоте человека, его поистине безграничных возможностей.
Он первый из всех скульпторов был знаком со строением организма человека и высек его из мрамора, показав всем, насколько прекрасно человеческое тело.
Очень много планов и идей мастера так и не были реализованы, большая часть его наследия до наших дней не сохранилось, хотя и то, что осталось после него,
поражает величественностью и красотой. Величайший из художников не любил традиционную живопись. Пейзажи и натюрморты вызывали в нем отвращение,
он считал, что нечего тратить на них свое время, и проводить жизнь за созданием пустых картинок для дам.
Своему сломанному носу Микеланджело обязан собственному учителю.  Микеланджело Буонарроти называют самым удивительным и непостижимым мастером эпохи Возрождения. 
Он настоящий универсал – великий скульптор, гениальный живописец, поэт, архитектор, мыслитель.'],

['id'=> 55, 'first_name' => 'Иван Шишкин', 'biography' => 'Иван Шишкин – выдающийся художник-пейзажист, рисовальщик, живописец, гравер-аквафортист. 
На полотнах величайшего художника-пейзажиста Ивана Шишкина оживает первозданный лес, с его величественной красотой, расплескались бескрайние просторы полей,
веет холодом сурового края. Всматриваясь в его картины, понимаешь, настолько они реалистичны, так и хочется подставить лицо дуновению легкого ветерка или посмотреть,
под лапами какого животного трещат сучья. Давая оценку таланту художника, поклонники его творчества сравнивали Ивана с биологом.
Романтизированная красота природы его не прельщала, Шишкин стремился к реалистичным изображениям. С этой целью перед написанием очередного полотна,
Иван старался очень внимательно изучить все растения. Перед началом работы Шишкин рассматривал меленькие листочки, интересовался травой и мхами.
Живопись была для Шишкина всем, самой жизнью, и даже свой смертный час художник встретил за мольбертом, с неизменной кистью, зажатой в руке. 
Шишкин оставил после себя наследие, которому суждено обрести бессмертие на века. Славу и известность он получил еще при жизни, о нем говорили – «певец русского леса»,
преклоняясь перед его мастерством. ' ],

['id'=> 11, 'first_name' => 'Исаак Левитан', 'biography'=> 'Исаак Левитан обладал талантом не только видеть красоту природы, но и чувствовать ее. Эти чувства он передавал с помощью своих «пейзажей настроения». Он так и не получил художественное образование,
но его картины высоко ценились почитателями изобразительного искусства, они украшали лучшие музеи и художественные выставки. Левитан прожил короткую жизнь,
однако успел оставить после себя колоссальное творческое наследие, в котором прославляется красота родной природы. Близкое окружение художника считало, что его полотна «улыбаются». 
После многочисленных пленэров Исаак пишет свою картину «На Волге», которая отмечена наградой конкурса, организованного Московским обществом любителей художеств. 
Лучшие полотна художника были созданы в мастерской, которую он получил в дар от мецената Сергея Морозова.
Картины Левитана сегодня известны всему миру. Он написал гениальные полотна «Золотая осень» и «Весна. Большая вода». Последняя сочетает в себе жизнеутверждающие оттенки – голубые, зеленые, желтые.' ],

['id'=> 22, 'first_name' => 'Клод Моне', 'biography' => 'Оскар Клод Моне появился на свет в Париже 14 ноября 1840 года в семье бакалейщика. 
С малых лет увлекался рисованием и даже умудрялся на этом зарабатывать, продавая карикатуры в бакалейной лавке отца. 
В 1861 году Моне призвали на службу в армию на 7 лет. Его подразделение находилось в Алжире, где спустя 2 года Моне заражается брюшным тифом.
Эта болезнь позволила ему покинуть армию. В 1870 году Моне женился, а после начала франко-прусской войны решает переехать в Англию, затем в Нидерланды.
Нидерландский период стал самым продуктивным периодом его творчества. Пребывая в Зандаме, он написал 25 картин. Вскоре он вернулся в Париж и поселился 
на берегу реки Сены. На родине Моне создает знаменитое полотно «Впечатление. Восходящее солнце»,
которое будет показано на первой выставке импрессионистов. Затем Моне переезжает в городок Живерни. В 1912 году переносит сложную операцию на глазах вследствие двойной катаракты.
Однако, несмотря на угасающее зрение, продолжает рисовать и разрабатывать новые стили, техники и методы масляной живописи.
Великий гений импрессионизма умер от рака легких в декабре 1926 года.'],
];

echo '<div class="users_1">';

foreach($users_1 as $user_1){
    echo '<div class="user_1">';
    echo "<p><span>  </span>$user_1[first_name]</p>";
    echo "<p><span>  </span>$user_1[biography]</p>";

echo '</div>';
}

echo '</div>';
?>


</main>