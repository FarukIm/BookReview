<?php

$link = mysqli_connect("localhost", "root", "", "bookreview");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$title = mysqli_real_escape_string($link, $_REQUEST['title']);
$author = mysqli_real_escape_string($link, $_REQUEST['author']);
$genre = mysqli_real_escape_string($link, $_REQUEST['genre']);
$review = mysqli_real_escape_string($link, $_REQUEST['review']);
 
$sqlInsert = "INSERT INTO posts (title, author, genre, review) VALUES ('$title', '$author', '$genre', '$review')";
if(mysqli_query($link, $sqlInsert)){
    echo "Your review has been successfully added! The site will reload shortly so you can see your review";
} else{
    echo "ERROR: Could not able to execute $sqlInsert. " . mysqli_error($link);
}

$sqlOutput = "SELECT id, author, title, genre, review FROM posts";
$result = $link->query($sqlOutput);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo  "Title: " . $row["title"]. " Author: " . $row["author"]. " Genre: " . $row["genre"]. " Review: " . $row["review"]. "<br>";
  }
} else {
  echo "0 results";
}


mysqli_close($link);
?>