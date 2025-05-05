<?php

$states = array(
    "Alabama", "Alaska", "Arizona", "Arkansas", "California",
    "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
    "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
    "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
    "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
    "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
    "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
    "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
    "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
    "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
  );

  $capitals = array(
    "Montgomery", "Juneau", "Phoenix", "Little Rock", "Sacramento",
    "Denver", "Hartford", "Dover", "Tallahassee", "Atlanta",
    "Honolulu", "Boise", "Springfield", "Indianapolis", "Des Moines",
    "Topeka", "Frankfort", "Baton Rouge", "Augusta", "Annapolis",
    "Boston", "Lansing", "Saint Paul", "Jackson", "Jefferson City",
    "Helena", "Lincoln", "Carson City", "Concord", "Trenton",
    "Santa Fe", "Albany", "Raleigh", "Bismarck", "Columbus",
    "Oklahoma City", "Salem", "Harrisburg", "Providence", "Columbia",
    "Pierre", "Nashville", "Austin", "Salt Lake City", "Montpelier",
    "Richmond", "Olympia", "Charleston", "Madison", "Cheyenne"
  );

  $birds = array(
    "Yellowhammer", "Willow Ptarmigan", "Cactus Wren", "Northern Mockingbird", "California Quail",
    "Lark Bunting", "American Robin", "Blue Hen Chicken", "Northern Mockingbird", "Brown Thrasher",
    "Nene", "Mountain Bluebird", "Northern Cardinal", "Northern Cardinal", "Eastern Goldfinch",
    "Western Meadowlark", "Northern Cardinal", "Eastern Brown Pelican", "Chickadee", "Baltimore Oriole",
    "Black-capped Chickadee", "American Robin", "Common Loon", "Northern Mockingbird", "Eastern Bluebird",
    "Western Meadowlark", "Western Meadowlark", "Mountain Bluebird", "Purple Finch", "Eastern Goldfinch",
    "Greater Roadrunner", "Eastern Bluebird", "Northern Cardinal", "Western Meadowlark", "Northern Cardinal",
    "Scissor-tailed Flycatcher", "Western Meadowlark", "Ruffed Grouse", "Rhode Island Red", "Carolina Wren",
    "Ring-necked Pheasant", "Northern Mockingbird", "Northern Mockingbird", "California Gull", "Hermit Thrush",
    "Northern Cardinal", "Willow Goldfinch", "Northern Cardinal", "American Robin", "Western Meadowlark"
);

$flowers = array(
    "Camellia", "Forget-me-not", "Saguaro Cactus Blossom", "Apple Blossom", "California Poppy",
    "Rocky Mountain Columbine", "Mountain Laurel", "Peach Blossom", "Orange Blossom", "Cherokee Rose",
    "Hibiscus", "Syringa", "Violet", "Peony", "Wild Prairie Rose",
    "Sunflower", "Goldenrod", "Magnolia", "White Pine Cone and Tassel", "Black-eyed Susan",
    "Mayflower", "Apple Blossom", "Pink and White Lady's Slipper", "Magnolia", "Hawthorn",
    "Bitterroot", "Goldenrod", "Sagebrush", "Purple Lilac", "Violet",
    "Yucca Flower", "Rose", "Dogwood", "Wild Prairie Rose", "Scarlet Carnation",
    "Mistletoe", "Oregon Grape", "Mountain Laurel", "Violet", "Yellow Jessamine",
    "Pasque Flower", "Iris", "Bluebonnet", "Sego Lily", "Red Clover",
    "Dogwood", "Coast Rhododendron", "Rhododendron", "Wood Violet", "Indian Paintbrush"
);


function buildStateData($states, $capitals, $birds, $flowers) {
  $result = [];

  for ($i = 0; $i < count($states); $i++) {
      $result[] = [
          "state" => $states[$i],
          "capital" => $capitals[$i],
          "bird" => $birds[$i],
          "flower" => $flowers[$i]
      ];
  }

  return $result;
}

$statesData = buildStateData($states, $capitals, $birds, $flowers);

function printStateArray($statesInfo) {
  echo "\$statesInfo = [\n";
  foreach ($statesInfo as $entry) {
      echo "    [\n";
      echo "        'state' => '" . addslashes($entry['state']) . "',\n";
      echo "        'capital' => '" . addslashes($entry['capital']) . "',\n";
      echo "        'bird' => '" . addslashes($entry['bird']) . "',\n";
      echo "        'flower' => '" . addslashes($entry['flower']) . "'\n";
      echo "    ],\n";
  }
  echo "];\n";
}
printStateArray($statesData);
?>