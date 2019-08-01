<?php require 'header.php'; ?>


<style>
.service_container {
  margin-bottom: 2em;
}
.service_link:hover {
  text-decoration: none;
  color: <?php echo $color_base_dark; ?>;
  cursor: pointer;
}
.service_read_more {
  font-weight: bold;
}3
</style>
<div class="row text-center">
  <h1 class="col-12">Services</h1>

	<?php
	$services = array(
	  array("Conceptual Design",
          "services_conceptual-design",
          "<p>AirBoss works with our clients to define the overall conceptual design of the project. From there, the vehicle is laid out in CAD and tweaked and tugged until the basic criterion is met.  The aircraft is then modeled in three dimensional CAD with definitive mold lines.</p>",
          "<p>Once the mold lines are determined, the detailed design begins.  The parts are designed and analyzed, AirBoss then documents the design in CAD for fabrication.</p>
          <p>Using the latest in solid modeling software, the aircraft is 'built' in the computer first.  This resolves a host of issues such as aerodynamics, actuation of assemblies, interference, and part count and identification.  The ability to spin the aircraft and look from any angle, inside or out, is a tremendous advantage in design.</p>
          <p>The generated computer output can be sent directly to the manufacturer in a variety of formats.  From there, CNC tooling will generated composite parts.  Individual part fabrication is simplified from the simplest part to the most complex machining.</p>"),
	  array("Structural Analysis",
          "services_structural-analysis",
          "<p>AirBoss offers structural analysis services.  Utilizing powerful finite element analysis programs, parts can be analyzed as an individual or in complete systems.</p>",
          "<p>Systems can be analyzed for stresses, deflections, modal frequencies, mode shapes, heat transfer, and a host of other things.  Event simulation can also be analyzed.  Using modal data, preliminary flutter speeds can be determined and correlated in future flight testing.</p>
          <p>After every phase of engineering and analysis, a report is generated to cover the methods and results of the analysis.  Using the results, composite laminate schedules can be identified and specified on accompanying part drawings.  Every part we design is individually documented in CAD with a part number.  Parts are easily identified down to the nut and bolt.</p>"),
	  array("Project Management",
          "services_project-management",
          "<p>Taking a design from conception to completion is a very complex process. Many factors must be taken into account and scheduled. AirBoss handles this task early on with task management and critical path analysis. We can chart out the timelines for design, construction, and subsequent production.</p>",
          "<p>These tasks are usually associated with financial outlays as a function of project development. AirBoss can identify, categorize, and subsequently schedule the financial requirements as a function of timeline development. We can identify development costs for both long term and short term. We can identify the ramp-up costs associated with subsequent production. We can offer a cash flow analysis and income analysis for both prototype and production. Knowing beforehand is the strongest form of knowledge.</p>
          <p>Once the timelines and financial outlays are identified, critical paths are determined. These paths, as the name implies, are the driving forces of the project. If the critical path is violated, the project schedule suffers. AirBoss identifies the critical paths and through proper project management, ensures that the schedule is met in a timely fashion.</p>
          <p>AirBoss strives to be a single source where dreams can become reality. We are proud of our services and ensure that our clients are too. Together, we can lay out the best course that will ensure the successful completion of the project.</p>"),
	  array("Prototype Construction",
          "services_prototype-construction",
          "<p>AirBoss can manage and build your prototype.  We have partnered with some of the best talent when it comes to building a proof of concept, flight worthy aircraft.  Composites Universal Group, located in Scappoose, Oregon has worked closely with us to bring many projects to reality.</p>",
          "<p>AirBoss has also worked closely with Phoenix Technology Works, and use their CNC plug and mold making capabilities.</p>
          <p>Other specialists are brought in during the fabrication of the prototype.  AirBoss can oversee the entire systems integration into the vehicle as the systems are developed and installed.</p>
          <p>AirBoss can also ensure that at the end of prototype construction, all supporting documentation and drawings reflect the numerous changes that come with the first prototype fabrication.</p>"),
	  array("Flight Testing",
          "services_flight-testing",
          "<p>AirBoss works closely with Skip Holm, the highest decorated combat pilot in the modern jet era as well as a five time Reno Unlimited Gold Race winner, for some of the test flying needs.</p>",
          "<p>Skip is a former test pilot for Lockheed and performed secret tests for the U-2 and the Have Blue (F-117) projects as well as the SR-71...and many more he won't talk about.</p>
          <p>AirBoss also works closely with Len Fox.  Len has flown nearly all of our projects to date.  Len recieved the Spirit of Flight award at Oshkosh 2005, a yearly award presented by the Society of Experimental Test Pilots.</p>
          <p>Both pilots provide an extensive and well though out flight test program to any project, keeping safety paramount.</p>")
	);
	?>
  <script>
  var service_blurb_extension = [];
  </script>

	<?php foreach ($services as $service) { ?>
    <div class="d-none d-md-block col-md-1"></div>
    <div class="service_container col-12 col-md-10">
			<div class="row">
				<div class="service_img col-12 col-md-3">
          <img src="img/services/<?php echo $service[1]; ?>.jpg" />
				</div>
				<div class="col-12 col-md-9 text-left service_link" id="<?php echo $service[1]; ?>">
          <h3 class="service_name"><?php echo $service[0]; ?></h3>
          <div class="service_blurb">
            <?php echo $service[2]; ?>
            <div class="service_blurb2"></div>
            <div class="service_read_more">Read more <i class='fas fa-sort-down'></i></div>
          </div>
        </div>
			</div>
		</div>
    <div class="d-none d-md-block col-md-1"></div>
    <script>
      service_blurb_extension["<?php echo $service[1] ?>"] = `<?php echo $service[3]; ?>`;
    </script>
	<?php } ?>

  <script>
    let message_read_more = "Read more <i class='fas fa-sort-down'></i>";
    let message_collapse = "Collapse <i class='fas fa-sort-up'></i>";
    $('.service_link').click(function() {
      let this_id = $(this).attr('id');
      let curr_closed = $('#' + this_id + ' .service_read_more').html().indexOf('Read more') != -1;
      if (curr_closed) {
        $('#' + this_id + ' .service_blurb2').html( service_blurb_extension[this_id] );
        $('#' + this_id + ' .service_read_more').html(message_collapse);
      } else {
        $('#' + this_id + ' .service_blurb2').html('');
        $('#' + this_id + ' .service_read_more').html(message_read_more);
      }
    })
  </script>
</div>


<?php require 'footer.php'; ?>
