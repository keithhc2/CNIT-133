<?php
// Array with names
$a[] = "Amanda";
$a[] = "Andrew";
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Chandler";
$a[] = "Cinderella";
$a[] = "Cindy";
$a[] = "Diana";
$a[] = "Donna";
$a[] = "Doris";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Eva";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Fiona";
$a[] = "Gundam";
$a[] = "Harvey";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Jessica";
$a[] = "Joey";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Liza";
$a[] = "Mike";
$a[] = "Monica";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Pheebs";
$a[] = "Rachel";
$a[] = "Raquel";
$a[] = "Ross";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Vicky";
$a[] = "Violet";
$a[] = "Wenche";



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "No suggestion" : $hint;
?>