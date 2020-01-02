<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="2">Specifications</th></tr>
  </thead>
  <tbody>
    <tr><td>Passengers</td><td>2</td></tr>
    <tr><td>Gross Weight</td><td>26,500 lb (12,020 kg)</td></tr>
    <tr><td>Empty Weight</td><td>14,000 lb (6,350 kg)</td></tr>
    <tr><td>Useful Load</td><td>12,500 lb (5,670 kg)</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Length</td><td>50'-6" (15.4 m)</td></tr>
    <tr><td>Wingspan</td><td>69'-8" (21.2 m)</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Cargo Bay Length</td><td>18'-4" (5.6 m)</td></tr>
    <tr><td>Cargo Bay Width</td><td>9'-6" (2.9 m)</td></tr>
    <tr><td>Cargo Bay Height</td><td>8'-3" (2.5 m)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="2">Performance</th></tr>
  </thead>
  <tbody>
    <tr><td>Ceiling</td><td>20,000 ft (6,096 m)</td></tr>
    <tr><td>Max Speed<br />(@ 20,000 ft)</td><td>271 kt (312 mph)</td></tr>
    <tr><td>Max Speed<br />(@ sea level)</td><td>252 kt (290 mph)</td></tr>
    <tr><td>Cruise Speed<br />(@ 20,000 ft)</td><td>226 kt (260 mph)</td></tr>
    <tr><td>Cruise Speed<br />(@ 7,500 ft)</td><td>248 kt (285 mph)</td></tr>
    <tr><td>Stall Speed<br />(@ gross wt)</td><td>70 kt (81 mph)</td></tr>
    <tr><td>Stall Speed<br />(@ min wt)</td><td>54.3 kt (63 mph)</td></tr>
    <tr><td>Range</td><td>1,050 nm (1,208 miles)</td></tr>
    <tr><td>Rate of Climb</td><td>3,154 ft/min</td></tr>
    <tr><td colspan="2">&nbsp;</td></tr>
    <tr><td>Take-off distance</td><td>1,532 ft (467 m)</td></tr>
    <tr><td>Landing distance</td><td>2,698 ft (822 m)</td></tr>
  </tbody>
</table>
HTML;

$project_list["regional_cargo_aircraft"] = array(
  "title"     => "Regional Cargo Aircraft",
  "summary"   => "The Regional Cargo Aircraft is designed to meet the cargo carrier's need for containerized transport. This twin turboprop is the only aircraft in its class able to carry an A1 and LD-3 container. The aircraft is designed to support a broad performance range:<ul><li>Large 31.5-inch tires in tandem gear bogies allow use of un-improved field operations</li><li>Excellent visibility with a high look down angle</li><li>Long range of 1,050 nm (1,208 mi)</li><li>Internal winches allow the aircraft crew to load and unload</li><li>Advanced flight deck design allows for single pilot operation in restricted category</li></ul>",
  "stage"     => array('conc', 'engi'),
  "techspecs" => $techspecs,
  "image_width" => "960",
);

?>
