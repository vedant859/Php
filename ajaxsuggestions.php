#HTML
<!DOCTYPE html>
<html>
<head>
<script>
function showSuggestions(str){
    if(str.length == 0){
        document.getElementById("output").innerHTML = "";
        return;
    }

    let x = new XMLHttpRequest();

    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("output").innerHTML = this.responseText;
        }
    };

    x.open("GET", "suggest.php?q=" + str, true);
    x.send();
}
</script>
</head>

<body>

<h2>Search Name:</h2>
<input type="text" onkeyup="showSuggestions(this.value)">

<div id="output"></div>

</body>
</html>


#suggest.php
<?php
$names = array("Rahul","Rohit","Virat","Dhoni","Ashwin","Harbhajan","Amit","Anita");

$q = $_GET['q'];

$suggestion = "";

if($q != ""){
    foreach($names as $name){
        if(stripos($name, $q) === 0){
            $suggestion .= $name . "<br>";
        }
    }
}

if($suggestion == "")
    echo "No suggestions";
else
    echo $suggestion;
?>
