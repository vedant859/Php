#XML
<?xml version="1.0" encoding="UTF-8"?>
<items>
    <item>
        <item_name>Laptop</item_name>
        <item_rate>55000</item_rate>
        <item_quantity>10</item_quantity>
    </item>

    <item>
        <item_name>Mobile</item_name>
        <item_rate>20000</item_rate>
        <item_quantity>25</item_quantity>
    </item>

    <item>
        <item_name>Keyboard</item_name>
        <item_rate>800</item_rate>
        <item_quantity>50</item_quantity>
    </item>

    <item>
        <item_name>Mouse</item_name>
        <item_rate>500</item_rate>
        <item_quantity>60</item_quantity>
    </item>

    <item>
        <item_name>Printer</item_name>
        <item_rate>12000</item_rate>
        <item_quantity>8</item_quantity>
    </item>
</items>



#PHP
<?php
$xml = simplexml_load_file("item.xml");

echo "<table border=1>";
foreach($xml->item as $i){
    echo "<tr><td>$i->name</td><td>$i->rate</td></tr>";
}
echo "</table>";
?>
