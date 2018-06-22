<?php
$arFileList = glob("*.php");
echo "<pre>";
var_dump($arFileList);
?>



// variant 2


<?php
$dir    = 'C:\xampp';
function searchdir($dir, $word){
    $arr=(scandir($dir));
    for ($i = 0; $i < count($arr); $i++) {
        $pos=strpos($arr[$i],$word);
        if($pos!==false){
            $result[]=$arr[$i];
        }
    }return $result;
}
echo "<pre>",print_r(searchdir(__DIR__,'.php'));
?>