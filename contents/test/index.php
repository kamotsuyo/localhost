<?PHP


echo "<h1>多態性</h1>";

//function test(){
//    return "taa";
//}
function test($param="false"){
    return "引数は".$param;
}

echo "<h2>".test()."</h2>";
