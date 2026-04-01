#movie.xml
<?xml version="1.0"?>
<MovieInfo>
  <Movie>
    <MovieNo>1</MovieNo>
    <MovieTitle>RRR</MovieTitle>
    <ActorName>Ram Charan</ActorName>
    <ReleaseYear>2022</ReleaseYear>
  </Movie>
  <Movie>
    <MovieNo>2</MovieNo>
    <MovieTitle>Jawan</MovieTitle>
    <ActorName>Shah Rukh Khan</ActorName>
    <ReleaseYear>2023</ReleaseYear>
  </Movie>
</MovieInfo>

<?php
$dom = new DOMDocument();
$dom->load("Movie.xml");

$titles = $dom->getElementsByTagName("MovieTitle");
$actors = $dom->getElementsByTagName("ActorName");

for($i=0;$i<$titles->length;$i++){
    echo $titles[$i]->nodeValue." - ".$actors[$i]->nodeValue."<br>";
}
?>
