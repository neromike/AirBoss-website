<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="3">Specifications</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>BearJet</th>
      <th>Sport Bear</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Passengers</td><td>6</td><td>3</td></tr>
    <tr><td>Gross Weight</td><td>5,512 lb (2,500 kg)</td><td>2,020 lb (916 kg)</td></tr>
    <tr><td>Empty Weight</td><td>3,038 lb (1,500 kg)</td><td>1,055 lb (479 kg)</td></tr>
    <tr><td>Useful Load</td><td>2,474 lb (1,122 kg)</td><td>965 lb (437 kg)</td></tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr><td>Overall Length</td><td>34'-8" (10.3 m)</td><td>21'-11" (6.7 m)</td></tr>
    <tr><td>Fuselage Length</td><td>32'-2" (9.8 m)</td><td>19'-3" (5.9 m)</td></tr>
    <tr><td>Wingspan</td><td>36'-0" (11.0 m)</td><td>27'-11" (8.5 m)</td></tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr><td>Cabin Width</td><td>4'-10" (1.5 m)</td><td>4'-0" (1.2 m)</td></tr>
    <tr><td>Cabin Height</td><td>5'-0" (1.5 m)</td><td>4'-0" (1.2 m)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="3">Performance</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>BearJet</th>
      <th>Sport Bear</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Max Speed</td><td>415 kts (478 mph)</td><td>385 kt (443 mph)</td></tr>
    <tr><td>Cruise Speed<br />(long range)</td><td>415 kt (478 mph)</td><td>345 kt (397 mph)</td></tr>
    <tr><td>Stall Speed</td><td>61 kt (70.2 mph)</td><td>60 kt (69 mph)</td></tr>
    <tr><td>Range</td><td>1,400 nm (1,611 miles)</td><td>1,225 nm (1,410 miles)</td></tr>
    <tr><td>Rate of Climb</td><td>5,250 ft/min</td><td>4,100 ft/min</td></tr>
  </tbody>
</table>
HTML;

$project_list["bear_series_aircraft"] = array(
  "title"     => "Bear Series Aircraft",
  "summary"   => "The Bear Aircraft series are the only high-performance single engine jets on the market. This series of compact personal jets serve a niche market by combining superior range and speed with a low operational cost.",
  "stage"     => array('conc', 'engi'),
  "techspecs" => $techspecs,
  "image_width" => "530",
);

?>
