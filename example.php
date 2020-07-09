<?php
$executionStartTime = microtime(true);
require_once __DIR__."/sbBasicTree.php";
$test = [
	5=>["CatID"=>5,"PrID"=>1,"Title"=>"Bilgisayar"],
	6=>["CatID"=>6,"PrID"=>1,"Title"=>"Telefon"],
	7=>["CatID"=>7,"PrID"=>5,"Title"=>"laptop"],
	8=>["CatID"=>8,"PrID"=>5,"Title"=>"masaüstü"],
	9=>["CatID"=>9,"PrID"=>8,"Title"=>"anakart"],
	10=>["CatID"=>10,"PrID"=>8,"Title"=>"işlemci"],
	11=>["CatID"=>11,"PrID"=>6,"Title"=>"kulaklık"],
	12=>["CatID"=>12,"PrID"=>6,"Title"=>"tel batarya"],
	13=>["CatID"=>13,"PrID"=>2,"Title"=>"peynir"],
	14=>["CatID"=>14,"PrID"=>2,"Title"=>"et"],
	15=>["CatID"=>15,"PrID"=>2,"Title"=>"şarküteri"],
	16=>["CatID"=>16,"PrID"=>2,"Title"=>"balık"],
	17=>["CatID"=>17,"PrID"=>3,"Title"=>"outdoor"],
	18=>["CatID"=>18,"PrID"=>3,"Title"=>"indoor"],
	19=>["CatID"=>19,"PrID"=>17,"Title"=>"bisiklet"],
	20=>["CatID"=>20,"PrID"=>17,"Title"=>"yüzme"],
	21=>["CatID"=>21,"PrID"=>19,"Title"=>"gidon"],
	22=>["CatID"=>22,"PrID"=>19,"Title"=>"sele"],
	1=>["CatID"=>1,"PrID"=>0,"Title"=>"Elektronik"],
	2=>["CatID"=>2,"PrID"=>0,"Title"=>"Gıda"], 
	3=>["CatID"=>3,"PrID"=>0,"Title"=>"Spor"],
	4=>["CatID"=>4,"PrID"=>0,"Title"=>"Giyim"]
];
$MDTreeArray = new sbBasicTree($test); 
echo "TreeArray : <br><br><br>\n\n\n";
print_r($MDTreeArray->getTreeArray());
echo "<br><br><br>\n\n\nChildren : <br><br><br>\n\n\n";
print_r($MDTreeArray->getChildren(1));
echo "<br><br><br>\n\n\nParents : <br><br><br>\n\n\n";
print_r($MDTreeArray->getParents(19));

$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
echo "This script took $seconds to execute.";
?>