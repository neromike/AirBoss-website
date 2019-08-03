<?php require 'header.php'; ?>


<style>
.service_container {
  margin-bottom: 2em;
}
.service_img img {
  width: 100%;
}
.service_link:hover {
  text-decoration: none;
  color: <?php echo $color_base_dark; ?>;
  cursor: pointer;
}
.service_blurb2_hidden {
  opacity: 0;
  font-size: 0px;
  height: 0px;
}
.serivce_blurb2_visible {
  opacity: 1;
  font-size: 1em;
  transition: font-size 300ms ease-in, opacity 300ms;
}
.service_read_more {
  font-weight: bold;
}
</style>
<div class="row text-center">
  <h1 class="col-12">Services</h1>

  <?php
	$services = array(
	  array("Conceptual Design & Preliminary Engineering",
          "services_conceptual-design",
          "<ul>
           <li>Develop initial concepts for stated mission</li>
           <li>Perform preliminary design review</li>
           </ul>",
          "<p>AirBoss Aviation works with our clients to first define the overall conceptual design of the project. We lay out the vehicle in Computer-aided Design (CAD) software and make continual adjustments until the basic criterion is met. With the latest in three-dimensional solid modeling software, the aircraft is then &quot;built&quot; in the computer. The ability to spin the aircraft and look from any angle, inside or out, is a tremendous advantage in conceptual design.</p>
           <p>After the conceptual design is complete, we perform a Preliminary Design Review (PDR). During the PDR, we address technical objectives, feasibility, functional/performance requirements, preliminary mechanical/structural/thermal/aerodynamic analysis, software requirements, and parts/materials selection.</p>
           <p>The completion of a successful PDR marks the end of the preliminary design phase of the project and the beginning of detailed engineering.</p>"),
	  array("Detailed Engineering",
          "services_detailed-engineering",
          "<ul>
           <li>Computational fluid dynamics (CFD)</li>
           <li>Finite element analysis (FEA)</li>
           <li>Thermal Analysis - thermal analysis</li>
           <li>Structural and subsystem design</li>
           <li>Subsonic/Transonic/Supersonic flutter analysis</li>
           </ul>",
          "<p>By designing in three-dimensional software, we can convert the conceptual design into a computational fluid dynamic (CFD) model. With leading experts in the field, we explore aerodynamic flow, Mach effects, and body interaction. We then combine CFD with finite element analysis to study flow and heating issues. Utilizing powerful finite element analysis programs, we analyze parts as individual components and complete systems.</p>
           <p>The next step is the detailed structural and system design. We analyze systems for stresses, deflections, modal frequencies, mode shapes, heat transfer, event simulation, and a host of other factors. Using modal data, we determine preliminary flutter speeds to correlate in future flight testing.</p>
           <p>After every phase of engineering and analysis, we generate a report to cover the methods and results of the analysis. Using the results, we identify and specify composite laminate schedules on accompanying part drawings. Every part we design is individually documented in CAD with a part number. Parts are easily identified down to the nut and bolt. We maintain all revision history through Product Data Management (PDM) software systems.</p>
           <p>We can deliver supporting design documentation in a variety of formats. This enables us to send solid model information directly to a Computer Numerical Control (CNC) subcontractor to generate rapid prototype tools, parts, or models. We also integrate all vendor information into the design to keep an accurate bill of materials for the project and to produce detailed assembly drawings for installation.</p>"),
    array("Prototype Construction",
          "services_prototype-construction",
          "<ul>
           <li>Composite component fabrication</li>
           <li>Prototype construction</li>
           <li>Prototype or production tooling</li>
           <li>Prototype or production jigs and fixtures (manual or automated)</li>
           <li>Production Set-up</li>
           </ul>",
          "<p>We can manage and build your prototype. We have partnered with some of the best talent when it comes to building a proof of concept, flight worthy aircraft. Composites Universal Group, located in Scappoose, Oregon has worked closely with us to bring many projects to reality. We have also worked closely with Phoenix Technology Works, and use their Computer Numerical Control (CNC) plug and mold making capabilities.</p>
           <p>Other specialists are brought in during the fabrication of the prototype. AirBoss oversees the entire systems integration into the vehicle as the systems are developed and installed. We ensure that at the end of prototype construction, all supporting documentation and drawings reflect the numerous changes that come with the first prototype fabrication.</p>
           <p>When the time comes, we will show up at the job site with our staff of engineers and support.  We can bring fabricators, engineers, outside specialists, and even test pilots. On-site program management is critical for the success of the program.</p>"),
    array("Flight Testing",
          "services_flight-testing",
          "<ul>
           <li>Flight or system tests</li>
           <li>Test plan development</li>
           </ul>",
          "<p>AirBoss works closely with Skip Holm, the highest decorated combat pilot in the modern jet era and five time Reno Unlimited Gold Race winner, for some of the test flying needs. Skip is a former test pilot for Lockheed and performed secret tests for the U-2 and the Have Blue (F-117) projects, as well as the SR-71...and many more he won't talk about.</p>
           <p>AirBoss also works closely with Len Fox. Len has flown nearly all of our projects to date. Len received the Spirit of Flight award at Oshkosh 2005, a yearly award presented by the Society of Experimental Test Pilots.</p>
           <p>Both pilots provide an extensive and well thought out flight test program to any project, keeping safety paramount.</p>"),
	  array("Project Management",
          "services_project-management",
          "<ul>
           <li>Project management</li>
           <li>R&D program planning</li>
           <li>Critical path development</li>
           <li>Production Assessment</li>
           <li>Part vs. Production Compatibility</li>
           </ul>",
          "<p>Taking a design from conception to completion is a very complex process. Many factors must be taken into account and scheduled. AirBoss handles this task early on with task management and critical path analysis. We can chart out the timelines for design, construction, and subsequent production.</p>
           <p>We assist our clients in financial planning. Our team will:
           <ul>
           <li>Identify, categorize, and schedule the financial requirements</li>
           <li>Identify development costs for both long term and short term</li>
           <li>Identify the ramp-up costs associated with subsequent production</li>
           <li>Offer a cash flow analysis and income analysis for both prototype and production.</li>
           </ul>
           </p>
           <p>Once the timelines and financial outlays are identified, critical paths are determined. These paths, as the name implies, are the driving forces of the project. If the critical path is violated, the project schedule suffers. AirBoss identifies the critical paths and through proper project management, ensures that the schedule is met in a timely fashion.</p>
           <p>AirBoss strives to be a single source where dreams can become reality. We are proud of our services and ensure that our clients are too. Together, we can lay out the best course that will ensure the successful completion of the project.</p>")
	);
	?>

	<?php foreach ($services as $service) { ?>
    <div class="d-none d-md-block col-md-1"></div>
    <div class="service_container col-12 col-md-10">
			<div class="row">
				<div class="service_img col-12 col-md-3">
          <img src="img/service/<?php echo $service[1]; ?>.jpg" />
				</div>
				<div class="col-12 col-md-9 text-left service_link" id="<?php echo $service[1]; ?>">
          <h3 class="service_name"><?php echo $service[0]; ?></h3>
          <div class="service_blurb">
            <?php echo $service[2]; ?>
            <div class="service_blurb2 service_blurb2_hidden"><?php echo $service[3]; ?></div>
            <div class="service_read_more">Read more <i class='fas fa-sort-down'></i></div>
          </div>
        </div>
			</div>
		</div>
    <div class="d-none d-md-block col-md-1"></div>
	<?php } ?>

  <script>
    let message_read_more = "Read more <i class='fas fa-sort-down'></i>";
    let message_collapse = "Collapse <i class='fas fa-sort-up'></i>";
    $('.service_link').click(function() {
      let this_id = $(this).attr('id');
      let curr_closed = $('#' + this_id + ' .service_read_more').html().indexOf('Read more') != -1;
      $('#' + this_id + ' .service_blurb2').toggleClass('serivce_blurb2_visible');
      $('#' + this_id + ' .service_blurb2').toggleClass('service_blurb2_hidden');
      if (curr_closed) {
        $('#' + this_id + ' .service_read_more').html(message_collapse);
      } else {
        $('#' + this_id + ' .service_read_more').html(message_read_more);
      }
    })
  </script>
  
  <style>
  #scroll_to_top {
    font-size: 3em;
    position: fixed;
    bottom: 1em;
    right: 1em;
    z-index: 1000;
    color: <?php echo $color_base_dark; ?>;
    text-shadow: 0px 0px 6px <?php echo $color_light; ?>;
    cursor: pointer;
    display: none;
  }
  </style>
  <div id="scroll_to_top">
    <i class="fas fa-chevron-circle-up"></i>
  </div>
  <script>
  $('#scroll_to_top').click(function() {
    $('html, body').animate({
      scrollTop: 0,
    }, 500, 'linear');
  });
  window.onload = (function(){
    $(window).scroll(function () {
      // scroll to top only appears after the user has scrolled down some amount
      if ( $(window).scrollTop() > 100 ) {
        $('#scroll_to_top').show();
      } else {
        $('#scroll_to_top').hide();
      }
    });
  });
  </script>
</div>


<?php require 'footer.php'; ?>
