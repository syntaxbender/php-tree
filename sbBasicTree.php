<?php
class sbBasicTree{
	public $newarr = [];
	public $arr;
	function __construct($arr) {
		$this->arr=$arr;
		foreach($this->arr as $item){
			$parents = $this->getParents($item["CatID"]); // önce parentlere doğru çıkıyorum sonra onları terse çeviriyorum.
			$ref = &$this->newarr;
			$level = 0;
			foreach ($parents as $parent){ // sonra bi daha parentlerden aşağı inip vakit kaybediyorum mükemmel xd
				$level++;
				$ref = &$ref[$parent]["SubCats"];
			}
			$ref['CatID'] = $item['CatID'];
			$ref['Title'] = $item['Title'];
			$ref['Level'] = $level;
		}
	}
	function getParents($id){
		$temp = [];
		$temp[] = $id;
		while($this->arr[$id]["PrID"] != 0){
			$temp[] = $this->arr[$id]["PrID"];
			$id=$this->arr[$id]["PrID"];
		}
		$temp = array_reverse($temp);
		return $temp;
	}
	function getChildren($id,$recursiveCarrier=[]){
		foreach($this->arr as $item){
			if($item["PrID"] == $id){
				$recursiveCarrier[] = $item["CatID"];
				$oyy = $this->getChildren($item["CatID"],$recursiveCarrier);
				$recursiveCarrier = $oyy;
			}
		}
		return $recursiveCarrier;
	}
	function getTreeArray(){
		return $this->newarr;
	}
}
?>