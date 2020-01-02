<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="4">Specifications</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>Drone</th>
      <th>Manned<br />(single seat)</th>
      <th>Tandem<br />(two seats)</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Passengers</td><td>0</td><td>1</td><td>2</td></tr>
    <tr><td>Gross Weight</td><td>5,500 lb (2,495 kg)</td><td>5,500 lb (2,495 kg)</td><td>6,050 lb (2,744 kg)</td></tr>
    <tr><td>Empty Weight</td><td>2,750 lb (1,247 kg)</td><td>2,950 lb (1,338 kg)</td><td>3,300 lb (1,497 kg)</td></tr>
    <tr><td>Useful Load</td><td>2,750 lb (1,247 kg)</td><td>2,550 lb (2,495 kg)</td><td>2,750 lb (2,744 kg)</td></tr>
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr><td>Overall Length</td><td>31'-7" (9.3 m)</td><td>31'-7" (9.3 m)</td><td>34'-6" (10.2 m)</td></tr>
    <tr><td>Fuselage Length</td><td>28'-10" (8.3 m)</td><td>28'-10" (8.3 m)</td><td>31'-8" (9.2 m)</td></tr>
    <tr><td>Wingspan</td><td>22'-6" (6.9 m)</td><td>22'-6" (6.9 m)</td><td>22'-6" (6.9 m)</td></tr>
    <tr><td>Height</td><td>9'-3" (2.7 m)</td><td>9'-3" (2.7 m)</td><td>10'-10" (2.8 m)</td></tr>
    <tr><td colspan="4">&nbsp;</td></tr>
    <tr><td>Engine</td><td>William FJ-44-3</td><td>William FJ-44-3</td><td>William FJ-44-4</td></tr>
    <tr><td>Fuel Capacity</td><td>2,150 lb (975.2 kg)</td><td>2,150 lb (975.2 kg)</td><td>2,150 lb (975.2 kg)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="4">Performance</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>Drone</th>
      <th>Manned<br />(single seat)</th>
      <th>Tandem<br />(two seats)</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Ceiling</td><td>49,000 ft (14,935 m)</td><td>49,000 ft (14,935 m)</td><td>49,000 ft (14,935 m)</td></tr>
    <tr><td>Max Speed<br />(@ sea level)</td><td>425 kt (489 mph)</td><td>425 kt (489 mpg)</td><td>425 kt (489 mph)</td></tr>
    <tr><td>Max Speed<br />(@ 36,000 ft)</td><td>Mach .90-.92</td><td>Mach .82-.85</td><td>Mach .82-.85</td></tr>
    <tr><td>Stall Speed<br />(38 deg flap)</td><td>78 kt (89.8 mph)</td><td>78 kt (89.8 mph)</td><td>84 kt (96.7 mph)</td></tr>
    <tr><td>Range</td><td>1,250 nm (1,438.5 mi)</td><td>1,250 nm (1,438.5 mi)</td><td>1,150 nm (1,323.4 mi)</td></tr>
    <tr><td>Rate of Climb</td><td>14,500 ft/min</td><td>14,500 ft/min</td><td>10,500 ft/min</td></tr>

  </tbody>
</table>
HTML;

$project_list["peregrine_jet"] = array(
  "title"     => "Peregrine Jet",
  "summary"   => "The Peregrine Jet is designed and engineered to fly as an UAV. However, a manned version (both single and two seat) was designed to establish the flight control laws.<ul><li>Uses a Toray carbon composite structure to cut down on weight</li><li>Incorporates a Williams FJ-44-3/4 engine to develop 3,000-3,500 lb. static thrust</li><li>Designed with a low observable form on the front to provide head-on stealth</li></ul>The only difference between the manned and unmanned variants is the use of a closeout canopy when in UAV mode. This allows the Peregrine Jet to be used in either a manned or non-piloted configuration, including missions where both fly simultaneously.",
  "stage"     => array('conc', 'engi', 'prot', 'flig'),
  "techspecs" => $techspecs,
);

?>
