<?php
include_once 'Node.php';
include_once 'LinkList.php';


$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes;
print_r($linkData);
echo implode('-', $linkData);
$linkedList->add(3, 1111);
print_r($linkData);
