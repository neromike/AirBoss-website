<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="2">Specifications</th></tr>
  </thead>
  <tbody>
    <tr><td>Passengers</td><td>1</td></tr>
    <tr><td>Fan Diameter</td><td>2'-0" (0.6 m)</td></tr>
    <tr><td>Gross Weight</td><td>650 lb (294.8 kg)</td></tr>
    <tr><td>Payload</td><td>300 lb (136.1 kg)</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Length</td><td>9'-11" (3.0 m)</td></tr>
    <tr><td>Width</td><td>8'-9" (2.7 m)</td></tr>
    <tr><td>Height</td><td>4'-4" (1.3 m)</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Hover Altitude<br />(8 motors)</td><td>18,700 ft (5,700 m)</td></tr>
    <tr><td>Hover Altitude<br />(1 motor out)</td><td>8,156 ft (2,486 m)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="4">Performance</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>300 lb payload</th>
      <th>200 lb payload</th>
      <th>100 lb payload</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Cruise Speed</td><td>40 kt (46 mph)</td><td>40 kt (46 mph)</td><td>40 kt (46 mph)</td></tr>
    <tr><td>Endurance</td><td>50 min</td><td>84 min</td><td>107 min</td></tr>
    <tr><td>Range</td><td>38 nm (43.7 mi)</td><td>56 nm (64.4 mi)</td><td>71 nm (81.7 mi)</td></tr>
  </tbody>
</table>
HTML;

$project_list["angel_lift"] = array(
  "title"       => "Angel Lift",
  "summary"     => "The Angel Lift is designed and engineered to accomplish three missions:<ol><li>Autonomous extraction vehicle</li><li>Heavy-lift delivery vehicle</li><li>Piloted multi-copter</li></ol>All three concepts are fully electric vehicles. This ducted VTOL vehicle requires a significantly smaller landing zone than a helicopter, allowing the Angel Lift to takeoff and land closer to a medical evacuation point or your garage.",
  "stage"       => array('conc', 'engi'),
  "techspecs"   => $techspecs,
  "image_width" => "1000",
);

?>
