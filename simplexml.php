#book.xml
<?xml version="1.0"?>
<books>
  <book>
    <title>Java</title>
    <author>James</author>
    <price>500</price>
  </book>
  <book>
    <title>Python</title>
    <author>Guido</author>
    <price>600</price>
  </book>
</books>

<?php
$xml = simplexml_load_file("book.xml");

foreach($xml->book as $b){
    echo "Title: ".$b->title."<br>";
    echo "Author: ".$b->author."<br>";
    echo "Price: ".$b->price."<br><br>";
}
?>
