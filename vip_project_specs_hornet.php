<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="2">Specifications</th></tr>
  </thead>
  <tbody>
    <tr><td>Number of Fans</td><td>4</td></tr>
    <tr><td>Fan Diameter</td><td>3'-3" (1.0 m)</td></tr>
    <tr><td>Gross Weight</td><td>277 lb (125.6 kg)</td></tr>
    <tr><td>Empty Weight</td><td>167 lb (75.7 kg)</td></tr>
    <tr><td>Payload</td><td>110 lb (50 kg)</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Length</td><td>8'-2" (2.5 m)</td></tr>
    <tr><td>Width</td><td>9'-0" (2.7 m)</td></tr>
    <tr><td>Height</td><td>3'-4" (1.0 m)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="2">Performance</th></tr>
  </thead>
  <tbody>
    <tr><td>Hover Ceiling</td><td>12,303 ft (3,750 m)</td></tr>
    <tr><td>Cruise Speed</td><td>40.8 kt (47 mph)</td></tr>
    <tr><td>Loiter Speed</td><td>19.1 kt (22 mph)</td></tr>
    <tr><td>Endurance</td><td>60 min</td></tr>
  </tbody>
</table>
HTML;

$project_list["hornet"] = array(
  "title"     => "Hornet",
  "summary"   => "The Hornet is a heavy-lift VTOL capable of carrying a 110 lb (50 kg) payload. This quad-fan drone can optionally be marinized to operate fully submerged, or weaponized with a Hellfire missile. The payload capability of the Hornet is useful not just for package delivery but also use cases such as search-and-rescue, oil and gas exploration, insurance and agricultural surveillance.",
  "stage"     => array('conc', 'engi'),
  "techspecs" => $techspecs,
  "image_width" => "430",
);

?>
