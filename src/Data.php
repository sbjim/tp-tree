<?php
require 'Tree.php';

class Data
{

    public  static function getData()
    {
        return [
            ['id' => '1', 'pid' => 0, 'name' => '一级栏目一1'],
            ['id' => '2', 'pid' => 0, 'name' => '一级栏目二2'],
            ['id' => '3', 'pid' => 1, 'name' => '二级栏目一3'],
            ['id' => '4', 'pid' => 1, 'name' => '二级栏目二4'],
            ['id' => '5', 'pid' => 2, 'name' => '二级栏目三5'],
            ['id' => '6', 'pid' => 3, 'name' => '三级栏目一6'],
            ['id' => '7', 'pid' => 3, 'name' => '三级栏目二7'],
        ];
    }

}


// 演示


$tree =Tree::instance();
$tree->init(Data::getData());
print_r($tree->getChild(1));
print_r($tree->getChildren(3,false));
print_r($tree->getChildren(3,true));





