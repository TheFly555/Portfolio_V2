<?php

// Verkrijg de PHP oprachten van Van Helden
function getPhpOpdrachtenVanHelden (){

  include "connect.php";

  $query = "SELECT * FROM php_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg de C# Opdrachten van Van Helden
function getCsharpOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM csharp_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg de HTML Opdrachten van Van Helden
function getHtmlOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM html_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijgen van Javascript opdrachten van Van Helden
function getJavascriptpOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM javascript_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijgen van JQuery Opdrachten van Van Helden
function getJqueryOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM jquiry_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijgen van de Labs Frontend opdrachten van Van Helden
function getFrontendLabsOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM frontend_labs_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg van de Materials Frontend opdrachten van Van Helden
function getFrontendMaterialsOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM frontend_materials_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg van de Materials Frontend opdrachten van Van Helden
function getFrontendWebbouwOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM frontend_webbouw_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg van de Oefeningen Frontend opdrachten van Van Helden
function getFrontendoefeningenOpdrachtenVanHelden (){

  include "connect.php";
  $query = "SELECT * FROM frontend_oefeningen_van_helden";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg van de Opdrachten van Wigmans
function getOpdrachtenWigmans (){

  include "connect.php";
  $query = "SELECT * FROM opdrachten_wigmans";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg de Presentaties
function getPresentaties (){

  include "connect.php";
  $query = "SELECT * FROM presentaties";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

// Verkrijg de Overige Projecten
function getOverigeProjecten (){

  include "connect.php";
  $query = "SELECT * FROM overige_projecten";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $beschrijving = $row["beschrijving"];
      $link = $row["link"];

      echo "<a href=" . $link . " class='list-group-item list-group-item-action'>" . $beschrijving . "</a>";
      }
    }
}

 ?>
