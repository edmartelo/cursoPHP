<?php

  

function teste() {
  echo gettype("5" * 12) . "<br>";

}

teste();

function teste2() {
  echo gettype("5" * 14.3) . "<br>"; // double ou float
  echo gettype("texto") . "<br>";
  echo gettype([]) . "<br>";
}

teste2();