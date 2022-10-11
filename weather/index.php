<?php
$types_of_weather = array("Облачно", "Дождь", "Ясно", "Снег", "Град", "Жара");
$weather = array_rand($types_of_weather);
if ($weather == 0) {
    echo "Сегодня может понадобиться зонтик";
} elseif ($weather == 1) {
    echo "Сегодня точно нужно взять зонтик";
} elseif ($weather == 2) {
    echo "Сегодня можно не брать зонтик";
} elseif ($weather == 3) {
    echo "Сегодня лучше надеть пуховик";
} elseif ($weather == 4) {
    echo "Сегодня лучше не выходить из дома";
} elseif ($weather == 5) {
    echo "Сегодня можно одеться по-летнему";
}
?>
//попытка в парсинг погоды
<?php
$file = simplexml_load_file("https://xml.meteoservice.ru/export/gismeteo/point/120.xml?data_req=".date("d/m/y"));
$xml = $file->xpath("//TEMPERATURE[@ID='']");

?>
