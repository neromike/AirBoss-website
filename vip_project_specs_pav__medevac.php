<?php

$techspecs = <<<HTML
<table>
  <thead>
    <tr><th colspan="3">Specifications</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>PAV</th>
      <th>MedVac</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Passengers<br />(includes pilot)</td><td>2</td><td>4</td></tr>
    <tr><td>Fan Diameter</td><td>4'-6" (1.4 m)</td><td>4'-6" (1.4 m)</td></tr>
    <tr><td>Gross Weight</td><td>2,290 lb (1,038.7 kg)</td><td>2,685 lb (1,217.9 kg)</td></tr>
    <tr><td>Payload</td><td>660 lb (299.4 kg)</td><td>870 lb (394.6 kg)</td></tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr><td>Length</td><td>15'-3" (4.6 m)</td><td>15'-10" (4.8 m)</td></tr>
    <tr><td>Width</td><td>15'-2" (4.6 m)</td><td>15'-2" (4.6 m)</td></tr>
    <tr><td>Height</td><td>7'-4" (2.2 m)</td><td>7'-4" (2.2 m)</td></tr>
    <tr><td>Height (folded)</td><td>6'-8" (2.0 m)</td><td>6'-8" (2.0 m)</td></tr>
    <tr><td colspan="3">&nbsp;</td></tr>
    <tr><td>Cabin Length</td><td>4'-8" (1.4 m)</td><td>6'-10" (2.1 m)</td></tr>
    <tr><td>Cabin Width</td><td>4'-7" (1.4 m)</td><td>4'-7" (1.4 m)</td></tr>
    <tr><td>Cabin Height</td><td>4'-0" (1.2 m)</td><td>4'-0" (1.2 m)</td></tr>
  </tbody>
</table>

<table>
  <thead>
    <tr><th colspan="3">Performance</th></tr>
    <tr>
      <th>&nbsp;</th>
      <th>PAV</th>
      <th>MedVac</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>Ceiling</td><td>15,000 ft (4,572 m)</td><td>16,500 ft (5,029 m)</td></tr>
    <tr><td>Max Speed</td><td>90 kt (104 mph)</td><td>90 kt (104 mph)</td></tr>
    <tr><td>Cruise Speed</td><td>70 kt (81 mph)</td><td>70 kt (81 mph)</td></tr>
    <tr><td>Range</td><td>200 nm (230.2 mi)</td><td>250 nm (287.7 mi)</td></tr>

  </tbody>
</table>
HTML;

$project_list["pav__medevac"] = array(
  "title"     => "PAV / MedVac",
  "summary"   => "The PAVMED program consists of two separate aircraft with 85% similarity:<ol><li>PAV – personal air vehicle intended for commutes 25 to 200 miles</li><li>MEDVAC – aerial ambulance for transporting injured victims</li></ol>Both concepts include a hybrid power system and eight independent propellers and motors. Both duct pods can be folded down allowing the vehicle to fit into a standard house garage.",
  "stage"     => array('conc', 'engi'),
  "techspecs" => $techspecs,
  "image_width" => "1000",
);

?>
