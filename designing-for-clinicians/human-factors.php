<?php $pageTitle='Human Factors'; ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Inspired EHRs | <?php echo $pageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="./assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/Slider/component.css" />
	<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class="human-factors">
	<?php include './nav.php'; ?>
	
<div class="wrapper">
	<?php include './header.php'; ?>
		
	<section id="ch-7" class="chapter">
		<header class="chapterStart">
			<div class="container">
				<div class="sixteen columns">
					<h2>7</h2>
					<h2>Human Factors Principles</h2>
					<div class="subheader"><p>Systems that complement how we see, read, think and decide can improve our performance.</p></div>
				</div>
			</div>
		</header>
		<section id="human-factors-engineering" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<h3>What is Human Factors Engineering?</h3>
					</div>
					<p>Human Factors Engineering seeks to improve human performance by designing systems that are compatible with our perceptual, cognitive, and physical abilities. Imagine an EHR that requires a physician to cancel a prescribing task, then navigate through several screens, remember a value, and navigate back to complete the prescription. This EHR taxes the well-known limits of human memory. Over-taxing users’ memory causes them to make errors, especially if they’re interrupted while using the system – a common occurrence in healthcare.</p>
					<p>In contrast, an EHR that allows a physician to see at a glance how well a patient is controlling his diabetes and hypertension gives the physician the situational awareness (and time) he needs to begin to address his patient’s current concerns. The physician can focus attention on understanding the story of the human sitting across the room, instead of on remembering and finding the necessary information to make decisions.</p>
					<p>The Fundamental Theorem of Biomedical Informatics states “that a person working in partnership with an information resource is ‘better’ than that same person unassisted.” Human Factors Engineering involves building this partnership, designing hardware and software that make it as easy as possible for users to do tasks safely and efficiently. An EHR based on sound human factors engineering principles can help clinicians focus on the difficult task of caring for patients, rather than on figuring out how to use or work around the EHR. We must understand the ways people see, read, think and decide so that we can use this information to build systems that enhance people's job performance.</p>

				</div>
			</div>
		</section>

		<section id="how-people-perceive" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>7.1 How People Perceive</h3>
					</div>
					<h5 id="expectations">7.1.1 Our Eyes Have Expectations </h5>
					<p class="spacetop"><strong>Our eyes are drawn to familiar patterns. Sometimes we even see patterns we know and expect instead of what's actually there.</strong></p>
					<p>Your eyes take in data, but your brain 'perceives' this data and parses it into meaningful visual information. Our brains create shortcuts to help us make sense of the estimated 40 million sensory inputs they receive per second. They use our expectations, past experiences, associations, and learned rules of thumb to make guesses about what it is we're looking at. Everyone has seen something at a glance and thought it was a certain object, and then focused on it and realized it was actually something else.</p>
					<div class="example" id="fig-7-1">
						<div class="ex-title">
							<span class="ex-type">Figure 7.1</span>
							<span class="ex-caption">Read the Following Words:</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/thecat.png" title="Read the Following Words">
							<img src="./assets/images/examples/human-factors/thecat.png" class="scale-with-grid" alt="Tae Cat looks like The Cat when the tops of the A's are cut off" /></a>
					</div>
					<p>Most people read this as “The cat,” even though the middle letter in each word is exactly the same, and neither is a perfect H or A. Our perceptual system uses context (the letters around the middle letter) and expectations (predicated on our familiarity with common English words) to allow us to cope with and make sense of imperfect, noisy input. But the same properties that make our perceptual system robust can also lead us astray. For instance, can you name the first drug on this prescription (<a href="#fig-7-2">Figure 7.2</a>)?</p>
					<div class="example" class="fig-7-2">
						<div class="ex-title">
							<span class="ex-type">Figure 7.2</span>
							<span class="ex-caption">Handwritten Prescription <span class="capt-desc">&mdash; Name the first drug on the list <span class="smaller">(from <a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC1070756/" target="blank" class="link">Western Journal of Medicine</a>)</span></span></span>
						</div>
						<a href="./assets/images/examples/human-factors/handwritten-prescription.png" class="fancybox" title="Handwritten Prescription - Name the first drug on the list">
						<img src="./assets/images/examples/human-factors/handwritten-prescription.png" class="scale-with-grid" alt="Handwritten Prescription - Name the first drug on the list" /></a>
					</div>
					<p>The cardiologist who prescribed the medication wrote 'Isordil,' but the pharmacist read it as 'Plendil.' After taking the prescribed medication for two days, the patient had a heart attack. Several days after that, he died<sup>1</sup>. In this case, the pharmacist was led astray by the very same perceptual system that enabled him to do his job correctly most of the time. Our perceptual system makes assumptions so automatically that we often don’t even realize that it's doing so.</p>
					<p>Users come to computers with expectations (mental models) based on what they have seen before, and with an in-built tendency to make assumptions about what it is they're seeing. When we scan a screen, we look for digestible chunks: familiar things like navigation bars, buttons and logos. We also tend to look at the center of the screen rather than at the edges, because we expect the edges to display less important things, like logos and tools not relevant to the task at hand. We expect the core components of an interface to be front and center, easy to find.</p>
					<div class="example" class="fig-7-3">
						<div class="ex-title">
							<span class="ex-type">Figure 7.3</span>
							<span class="ex-caption">An Unclear Layout <span class="capt-desc">&mdash; Adding allergies without good ‘workflow’ guidance from the interface</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="fancybox" title="An Unclear Layout - Adding allergies without good ‘workflow’ guidance from the interface">
						<img src="./assets/images/examples/allergy-list/Um_Ehr_AllergyList_0004_cough-search.png" class="scale-with-grid" alt="An Unclear Layout - Adding allergies without good ‘workflow’ guidance from the interface" /></a>
					</div>
					<div class="example" class="fig-7-4">
						<div class="ex-title">
							<span class="ex-type">Figure 7.4</span>
							<span class="ex-caption">Meeting Our Expectations <span class="capt-desc">&mdash; We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order.</span></span>
						</div>
						<a href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="fancybox" title="Meeting Our Expectations - We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="scale-with-grid" alt="Meeting Our Expectations - We're still adding an allergy, but now the format is more familiar, and lists the tasks users need to complete in a sequential order."/></a>
					</div>
					<div class="example" class="fig-7-5">
						<div class="ex-title">
							<span class="ex-title">Figure 7.5</span>
							<span class="ex-caption">A few common affordances <span class="capt-desc">&mdash; 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" title="A few common affordances - 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it.">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0006_add-an-allergy.png" class="scale-with-grid" alt="A few common affordances - 1) These three words look like buttons, so users understand that if they click one, that will do something. 2) Users understand that the small icon of a calendar will expand into a full calendar menu if they click it." /></a>
					</div>
					<div class="example" class="fig-7-6">
						<div class="ex-title">
							<span class="ex-title">Figure 7.6</span>
							<span class="ex-caption">Disclosure Arrow Affordance <span class="capt-desc">&mdash; In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/Um_Ehr_0010_collapse-affordance.png" title="Disclosure Arrow Affordance - In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information">
							<img src="./assets/images/examples/human-factors/Um_Ehr_0010_collapse-affordance.png" class="scale-with-grid" alt="Disclosure Arrow Affordance - In this image, the arrow affordance lets users know that they can expand or collapse the entry to access more information" /></a>
					</div>
					<div class="example" class="fig-7-7">
						<div class="ex-title">
							<span class="ex-title">Figure 7.7</span>
							<span class="ex-caption">Sort Arrow Affordance <span class="capt-desc">&mdash; Here, the arrow indicates the ability to sort the list by different columns.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/Um_Ehr_0011_sort-affordance.png" title="Sort Arrow Affordance - Here, the arrow indicates the ability to sort the list by different columns.">
							<img src="./assets/images/examples/human-factors/Um_Ehr_0011_sort-affordance.png" class="scale-with-grid" alt="Sort Arrow Affordance - Here, the arrow indicates the ability to sort the list by different columns." /></a>
					</div>
					<p>Affordances tell users at a glance that particular elements of the graphical user interface are functional devices. Well-designed affordances also give users an idea of what will happen when they use them.</p>
					
					<h5 id="gestalts">7.1.2 We See in Gestalts</h5>
					<p class="spacetop"><strong>People perceive whole shapes, or gestalts, rather than disconnected forms.</strong></p>
					<p>Gestalt is a German word for form or shape. In English, it has come to have connotations of ‘wholeness’. When you walk into a room, you immediately form an overall sense of what's going on therein and its corresponding emotional tone. Most people understand when they've come in and interrupted a fight, even if they heard none of the previous conversation. When you view a webpage for the first time, you get a similar overall impression of it. You can say pretty quickly whether you think the site looks cluttered or appealing, modern or out of date. Several design elements feed into our gestalt impressions of sites and applications:</p>
					<h5 id="proximity">Proximity</h5>
					<p>The distance between objects determines what we perceive the relationships between those objects to be. If things are close together, we assume that's significant and 'group' them in our minds. If elements in a designed object are grouped together, we assume this was intentional and is meaningful.</p>
				</div>
				<div class="one-half column">
					<div class="example" id="fig-7-8">
						<div class="ex-title">
							<span class="ex-type">Figure 7.8</span>
							<span class="ex-caption">Our eyes notice the distribution of these dots...</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png" title="Our eyes notice the distribution of these dots...">
							<img src="./assets/images/examples/human-factors/UM_EHR_0001_spatial-grouping.png" class="scale-with-grid" alt="Our eyes notice the distribution of these dots..." /></a>
					</div>
				</div>
				<div class="one-helf column">
					<div class="example" id="fig-7-9">
						<div class="ex-title">
							<span class="ex-type">Figure 7.9</span>
							<span class="ex-caption">... and our brains group the closer objects automatically</span>
						</div>
						<a class="fancybox" data-fancybox-group="gallery-0" href="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png"title="... and our brains group the closer objects automatically">
							<img src="./assets/images/examples/human-factors/UM_EHR_0002_spatial-grouping-2.png" class="scale-with-grid" alt="... and our brains group the closer objects automatically" /></a>
					</div>
				</div>
				<div class="sixteen columns">
					<p><strong>Example:</strong> The medication reconciliation view below (<a href="#fig-7-10">Figure 7.10</a>) breaks medications into groups. It then places these groups in the same columns. Users can tell there are different groups (columns) at a glance, without having to focus on, read and understand all the information on the chart.</p>
					<div class="example" id="fig-7-10">
						<div class="ex-title">
							<span class="ex-type">Figure 7.10</span>
							<span class="ex-caption">Ambulatory Medication Reconciliation Workflow <span class="capt-desc">&mdash; Items in the center are most alike, and those at the sides are most different. Items in between need clarification.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png" title="Ambulatory Medication Reconciliation Workflow - Items in the center are most alike, and those at the sides are most different. Items in between need clarification.">
							<img src="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png" class="scale-with-grid" alt="Ambulatory Medication Reconciliation Workflow - Items in the center are most alike, and those at the sides are most different. Items in between need clarification." /></a>
					</div>
			
					<h5 id="closure">Closure</h5>
					<p>Our brains fill in visual blanks for us and draw conclusions with less than complete information. This helps us make sense of the world quickly. Sometimes we can draw the wrong conclusions, misleading our users. We need to keep the advantages and shortcomings of this perceptual habit in mind when we design systems. Designers can use our brains' tendency to quickly help users to understand a whole based on a partial picture, but design can also accidentally lead users to unintended and unhelpful 'false' gestalt impressions.</p>
					<p><strong>Example:</strong> Our minds take lines or curves and build objects out of them. This is how we can know we're looking at something that's supposed to represent a person when it's a stick figure. Even though the lines below don't add up into a circle and a rectangle, people can still see and identify both shapes.</p>
					<div class="example" id="fig-7-11">
						<div class="ex-title">
							<span class="ex-type">Figure 7.11</span>
							<span class="ex-caption">Closure</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0003_closure.png" title="Closure">
							<img src="./assets/images/examples/human-factors/UM_EHR_0003_closure.png" class="scale-with-grid" alt="Closure" /></a>
					</div>
					
					<h5 id="similarity">Similarity</h5>
					<p>We perceive visual elements that look <strong>similar</strong> as parts of a group. Designers can indicate that two objects are similar, and thus related, by giving the objects the same sizes, shapes or colors. Interfaces that visually group related items are easier to use than those that don't. As a general rule, items that users must process together should be grouped together, and items that need to be processed separately should not.</p>
					<div class="example" id="fig-7-12">
						<div class="ex-title">
							<span class="ex-type">Figure 7.12</span>
							<span class="ex-caption">Users Perceive That the Blue Dots Are Associated</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png" title="Users Perceive That the Blue Dots Are Associated">
							<img src="./assets/images/examples/human-factors/UM_EHR_0004_similarity.png" class="scale-with-grid" alt="Users Perceive That the Blue Dots Are Associated" /></a>
					</div>
					<p><strong>Example</strong>: In the medication reconciliation interface we looked at earlier, <strong>proximity</strong> marked certain groups of items as categories (columns). Now, when we add color, we create new groups (<a href="#fig-7-13">Figure 7.13</a>). Medications the user approves turn green, and medications the user deselects fade to light gray.</p>
					<div class="example" id="fig-7-13">
						<div class="ex-title">
							<span class="ex-type">Figure 7.13</span>
							<span class="ex-caption">Color creates new groups</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" title="Color creates new groups">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" alt="Color creates new groups" /></a>
					</div>
					
					<h5 id="symmetry">Symmetry</h5>
					<p>Our minds like to make sense of complex visual fields by assigning them a perceived center and attendant <strong>symmetry</strong>.</p>
					<p><strong>Example</strong>: <a href="#fig-7-14">Figure 7.14</a> shows us how our minds like to see two symmetrical diamonds rather than other, equally possible (but less pleasingly symmetrical) shapes.</p>
					<div class="example" id="fig-7-14">
						<div class="ex-title">
							<span class="ex-type">Figure 7.14</span>
							<span class="ex-caption">Symmetry <span class="capt-desc">&mdash; Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes.</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png" title="Symmetry - Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes.">
							<img src="./assets/images/examples/human-factors/UM_EHR_0005_symmetry.png" class="scale-with-grid" alt="Symmetry - Our brains try to resolve complex visual fields into combinations of simple, symmetrical shapes." /></a>
					</div>
					<p><strong>Example</strong>: When we first glance at <a href="#fig-7-15">Figure 7.15</a>, below, we see two columns. In fact a series of individual entries creates the illusion of columns.</p>
					<div class="example" id="fig-7-15">
						<div class="ex-title">
							<span class="ex-type">Figure 7.15</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0005_two-lists-side-by-side-before-matching-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5 id="figure-ground">Figure / Ground</h5>
					<p>Our brains perceive objects either as figures, in the foreground, or as part of the background. Whatever we're focusing on becomes the figure, and everything else shifts into the background accordingly.</p>
					<p><strong>Example</strong>: In <a href="#fig-7-16">Figure 7.16</a> below, the ampersand is the figure, distinct from the blue rectangle that serves as its ground or background. As the designer intended, users understand the figure to be more important than the ground.</p>
					<div class="example" id="fig-7-16">
						<div class="ex-title">
							<span class="ex-type">Figure 7.16</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0006_figure-ground.png" class="scale-with-grid" alt="&" /></a>
					</div>
					<p><strong>Example</strong>: <a href="#fig-7-17">Figure 7.17</a> below is the classic Edgar Rubin image in which viewers see either two faces or a vase, depending on where they focus their attention. Rubin was a practitioner of gestalt psychology.</p>
					<div class="example" id="fig-7-17">
						<div class="ex-title">
							<span class="ex-type">Figure 7.17</span>
							<span class="ex-caption">Ambiguous Figure/Ground Relationship</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png" title="Ambiguous Figure/Ground Relationship">
							<img src="./assets/images/examples/human-factors/UM_EHR_0007_figure-ground-2.png" class="scale-with-grid" alt="Ambiguous Figure/Ground Relationship" /></a>
					</div>
					
					<h5 id="continuity">Continuity</h5>
					<p>In day to day life, our perception combines and relies on all of these components. Alignment creates groupings of items, and these groupings are said to have <strong>continuity</strong>. Our brains expect, and try, to reconcile contours into continuous objects.</p>
					<div class="example" id="gal-7-1">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.1</span>
							<span class="ex-caption">The Continuity Principle</span>
						</div>
						<div id="cbp-fwslider" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 a</span> Though a rectangle 'blocks' parts of this curve...</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-1.png" class="scale-with-grid" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 b</span> ...humans perceive both the curve and the box as whole, uninterrupted entities...</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-2.png" class="scale-with-grid" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.1 c</span> ...rather than as a box and some line segments.</div>
									<a class="fancybox" data-fancybox-group="gallery-1" href="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png">
										<img src="./assets/images/examples/human-factors/UM_EHR_0008_continuity-3.png" class="scale-with-grid" /></a>
								</div></li>
							</ul>
						</div>
					</div><!--end gallery 7.1-->
					<p><strong>Example</strong>: <a href="#fig-7-18">Figure 7.18</a> demonstrates several of the things we've been talking about. When we look at it, our brains detect the proximity of different medication lists and categories and the similarity of 'selected' and 'deselected' groups of medications. The list also takes advantage of the contrast we perceive between figure and ground. The dark text seems closer to us, and the faded text seems further away.</p>
					<div class="example" id="fig-7-18">
						<div class="ex-title">
							<span class="ex-type">Figure 7.18</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0008_the-drug-becomes-bright-green-when-selected-clean.png">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_the-final-selection-clean.png" class="scale-with-grid" /></a>
					</div>
					
					<h5>7.1.3 I Can't See It but I Use It</h5>
					<p><strong>We use our peripheral vision to get a big picture of what we're seeing, and we use that big picture to help us decide what to focus on.</strong></p>
					<p>Our visual system consists of our eyes and the brain systems that work with them. This system does an amazing job of seeking out and providing us with visual information. It does so mostly without our being consciously aware of it. We are barely aware that only the very central part of our vision provides us with a sharp-focused image, detail rich, with color information. The periphery of our vision (outside of the central “peephole”) is fuzzy, and drained of color. That peripheral part of the vision is, however, able to detect features such as motion, edge and contrast. These features guide our brains in making their "visual query" of the views before us.</p>
					<p>Rapid eye movement enables our brains to sample the environment. The task we're trying to accomplish determines the details we unconsciously seek out. If we're looking for a friend, we notice faces in the crowd. If we're trying to find our way through the crowd, we notice the gaps between people.</p>
					<p>Animated ads are effective (and annoying) because our peripheral vision detects motion. We want to ignore the ads, but their design takes advantage of the way vision works. Our eyes are drawn to anything that stands out. Our brains are trying to recognize threats in our environment, and our peripheral vision is always alert to differences and changes.</p>
					<p><strong>Example</strong>: When we look at <a href="#fig-7-19">Figure 7.19</a>, below, our eyes first do a quick visual query. They seek out major landscape elements and the details that will help us accomplish whatever we're using this display to do. What we notice in the scene below will vary depending on whether we're driving, trying to decide whether we need to mow the lawn, or assessing whether the weather will be suitable for a picnic this afternoon.</p>
					<div class="example" id="fig-7-19">
						<div class="ex-title">
							<span class="ex-type">Figure 6.19</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/visualqueries3.png" title="">
							<img src="./assets/images/examples/human-factors/visualqueries3.png" class="scale-with-grid" alt="" /></a>
					</div>
					<p><strong>Example</strong>: When we look at a display like Gallery 7.2 below, we think we see something like the first image. Actually, what we really 'see' at any given instant is something more like the second image. We only 'focus' on a small area at any given moment. Our visual brain first latches onto a preattentive attribute like the red text, and is disproportionately drawn to that element. Then our eyes automatically scan to find the next point of visual interest.</p>
					<div class="example" id="gal-7-2">
						<div class="ex-title">
							<span class="ex-type">Gallery 7.2</span>
							<span class="ex-caption"></span>
						</div>
						<div id="cbp-fwslider-2" class="scale-with-grid cbp-fwslider">
							<ul>
								<li><div>
									<div class="caption"><span class="ex-type">7.2 a</span> We think we see this</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0000_we-think-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									
								</div></li>
								<li><div>
									<div class="caption"><span class="ex-type">7.2 b</span> ...but we actually see this.</div>
									<a class="fancybox" data-fancybox-group="gallery-2" href="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png">
									<img src="./assets/images/examples/human-factors/UM_EHR_0001_but-we-dont-we-see-this.png" class="scale-with-grid" alt="" title="" /></a>
									
								</div></li>
							</ul>
						</div>
					</div>
					<p>A peripheral glance tells people where they are and what to expect, and helps us decide what to focus on. We can only truly see what we focus on. The display can only effectively convey that information at any given time.</p>
					<p><strong>Design tip:</strong> Feedback and error messages should pop up near the area people will already be focusing on. While we do use our peripheral vision to orient ourselves and scan for things, we also tend to ignore our peripheral vision when we're trying to focus on the task at hand.</p>
					
					<h5 id="preattentive-attributes">7.1.4 Preattentive Attributes</h5>
					<p class="spacetop"><strong>Little, visual things people notice and understand quickly</strong></p>
					<p>We notice some visual features, such as color, size, shape, orientation, and motion, more quickly than others. We call the things that especially stand out to us <strong>preattentive attributes</strong>. Before we fully process visual information, our minds prompt us to focus on these attributes. Things that stand out from the rest of their environment, as in <a href="#fig-7-20">Figure 7.20</a> below, do so because of their attention-catching preattentive attributes.</p>
					<div class="example" id="fig-7-20">
						<div class="ex-title">
							<span class="ex-type">Figure 7.20</span>
							<span class="ex-caption">How can we use preattentive attributes to facilitate data presentation?</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png" title="How can we use preattentive attributes to facilitate data presentation?">
							<img src="./assets/images/examples/human-factors/UM_EHR_0009_attributes.png" class="scale-with-grid" alt="How can we use preattentive attributes to facilitate data presentation?" /></a>
					</div>
				</div>
			</div>
		</section><!--end section preattentive-attributes-->
		
		<section id="how-people-think" class="section">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>7.2 How People Think</h3>
					</div>
					<h5>7.2.1 The Two Ways People Think</h5>
					<p><strong>Everyone has two modes of thinking. There's a rapid mode that requires little conscious effort, and a slower mode that requires focus.</strong></p>
					<p>If a system is easy to understand and work with, users don't have to engage with it via their 'slow, focused' mode of thinking. They can just use their rapid mode, and can save their mental energy for more important matters. Daniel Kahneman wrote a great book about these modes, and our thinking builds on his work.</p>
					<p>The rapid mode of thinking is automatic and almost effortless. People often don't experience a sense of voluntary control over it. This mode allows us to:
						<ul class="disc">
							<li>see that something is larger than something else</li>
							<li>answer simple computations, like 2+2 = 4</li>
							<li>read words on a billboard</li>
							<li>understand simple sentences</li>
							<li>make rapid and simple associations, such as stereotypes (positive or negative)</li>
							<li>notice preattentive attributes</li>
						</ul></p>
					<p>Our focused mode of thinking is effortful, and allows us to perform more complex mental activities. We associate this mode of thinking with our experiences of agency, choice and concentration: in short, with our 'consciousness'. This mode allows us to:</p>
						<ul class="disc">
							<li>focus on listening to one voice in a noisy room</li>
							<li>recall information, like addresses and phone numbers</li>
							<li>evaluate the validity of a complex argument</li>
							<li>scan for a particular piece of information in a long article</li>
						</ul>
					<p>When creating an application, ask yourself whether you have any opportunities to convert tasks that require focused thinking into tasks that only require rapid thinking. Making the application perform complex calculations, sort information, and concisely present key details can free people up to do the focused thinking that only humans can.</p>
					<p>The Twinlist medication reconciliation prototype, <a href="#fig-7-21">Figure 7.21</a>, makes the focused task of scanning two lists and finding similar drugs into a rapid one. The prototype identifies similar drugs and sort them onto the same row. Twinlist also makes it easy for users to see the differences between similar drugs by highlighting these differences in yellow. A slow, visually and cognitively demanding search task involving two separate lists becomes a matter of brisk perception with Twinlist.</p>
					<div class="example" if="fig-7-21">
						<div class="ex-title">
							<span class="ex-type">Figure 7.21</span>
							<span class="ex-caption">The Twinlist Prototype Facilitates Fast Thinking</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0007_when-the-pointer-hovers-over-a-drug-clean.png" title=" The Twinlist Prototype Facilitates Fast Thinking">
							<img src="./assets/images/examples/human-factors/UM_EHR_0007_when-the-pointer-hovers-over-a-drug-clean.png" class="scale-with-grid" alt=" The Twinlist Prototype Facilitates Fast Thinking" /></a>
					</div>

					<h5 id="working memory">7.2.2 Working Memory</h5>
					<p><strong>Working memory demands effort and is limited. Try to design systems that place limited demands on users' working memory.</strong></p>
					<p>Working memory, or short-term memory, holds items like phone numbers until we can write them down or punch them into our phones. This type of memory stores information for less than a minute and demands focused thinking.</p>
					<p><strong>Design tip</strong>: Try not to ask people to look at information on one page, remember it, and then enter it into another field on another page.</p>
					<p>If you ask people to use their working memories, make sure that what you're asking them to remember is uncomplicated. Don't distract them with additional demands, information and options while they're focusing on remembering a given bit of information. A system that interrupts people while they're trying to use their working memories causes them to forget what they're doing and wastes time.</p>
					<p>People only keep three to four compound or complex items in their working memories at a time. The way interfaces display bits of information can influence users' working memory, however. If a design groups items together or breaks information down into manageable chunks, people can remember that information better. A phone number, for example, is easier to remember if it's been broken into chunks. Compare these numeric strings:</p>
						<div id="numeric-strings">
							<p><span class="grey">Difficult:</span> <span class="phoneno">9121889874</span></p>
							<p><span class="grey">Easier: </span> <span class="phoneno">912-188-9874</span></p>
							<p><span class="grey">Easiest: </span><span class="phoneno last">(912) 188-9874</span></p>
						</div>
					<p>The first phone number is difficult to even just dial. If the interface asks users to enter phone numbers, it should allow them to enter these with or without the intervening hyphens or parentheses. It should display them, however, in the easy-to-read format. When the interface needs to display an unmanageable amount of information, and the design's done all it can to alleviate this, the interface should then 'chunk' its information in the manner of the phone number example.</p>

					<h5 id="cognitive-load">7.2.3 Cognitive Load</h5>
					<p><strong>Loads are heavy, even mental ones. Help lighten the user’s load.</strong></p>
					<p>Our brains manage motor, visual and cognitive loads. The strain of managing and manipulating items within our working memory generates cognitive load. Motor load is the easiest for the brain to manage, while cognitive load is the most difficult.</p>
					<p>Designers seeking to lighten users' cognitive loads need to bear these details in mind:
						<ul class="disc">
							<li>Focused thinking causes greater cognitive strain than rapid thinking. People can give a task about ten minutes of focused attention, but then they'll need a short break, unless they're particularly interested in the task or in a flow state.</li>
							<li>People can’t truly multi-task. We can only attend to one task at a time. When we think we’re multitasking, we’re actually switching tasks rapidly, start-stop-start-stop-start-stop. This can tire us out and cause us to make mistakes.</li>
							<li>Recognizing is easy, remembering is difficult. We can recognize complex things like a map of Europe instantly, but most of us would likely have a hard time drawing such a map ourselves. Likewise, we find it easier to recognize patients' names than to recall them.</li>
							<li>Problem-solving and calculating are hard, while learning from experience and performing learned actions is easy.</li>
						</ul></p>
					<p><strong>Example</strong>: <a href="#fig-7-22">Figure 7.22 below demonstrates the mental work a doctor does when she reviews a medication list to try to understand what medications a patient is taking to control his blood pressure. She must read the list, recognize drugs' names, remember whether given drugs are prescribed for hypertension, recall from memory what the maximum doses for these medications are, and then check whether the patient has reached the maximum dosages for these medications. That's a lot of mental effort!</p>
					<div class="example" id="fig-7-22">
						<div class="ex-title">
							<span class="ex-type">Figure 7.22</span>
							<span class="ex-caption">Scanning for Hypertension Medications</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" title="Scanning for Hypertension Medications">
							<img src="./assets/images/examples/medication-list/UM_EHR_0006_mental-work.png" class="scale-with-grid" alt="Scanning for Hypertension Medications" /></a>
					</div>
					<p><a href="#fig-7-23">Figure 7.23</a>, below, sorts the list of drugs alphabetically by diagnosis. This allows our physician to access the same information, but costs her far less mental effort. Lightening the effort she has to expend on this task increases the amount of effort she can spend on other, more important tasks.</p>
					<div class="example" id="fig-7-23">
						<div class="ex-title">
							<span class="ex-type">Figure 7.23</span>
							<span class="ex-caption">Sort by Diagnosis <span class="capt-desc">&mdash; Makes it easier to search for hypertension medications</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0010_sort-condition-mental-effort.png" title="Sort by Diagnosis - Makes it easier to search for hypertension medications">
							<img src="./assets/images/examples/human-factors/UM_EHR_0010_sort-condition-mental-effort.png" class="scale-with-grid" title-"Sort by Diagnosis - Makes it easier to search for hypertension medications" /></a>
					</div>
					<p>If the interface can indicate whether a medication has reached the maximum dose, this will save the doctor the effort of making a series of annoying calculations.</p>
					<p><strong>Example</strong>: Auto-complete functions can also lighten users' cognitive loads. Users typing in the name of a drug in a window with a predictive text function can employ low-impact recognition mental processes rather than more difficult recollection processes. If users employ rapid thinking at this stage of the proceedings, however, there's a danger that they might mistake similarly-named drugs. Employ tallman lettering to alert users to be aware that a similar-looking drug exists.</p>
					<div class="example" id="fig-7-24">
						<div class="ex-title">
							<span class="ex-type">Figure 7.24</span>
							<span class="ex-caption">Recognizing Rather than Recalling - Drug searches that utilize auto-complete functions</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0010_autocomplete.png"><img src="./assets/images/examples/human-factors/UM_EHR_0010_autocomplete.png" class="scale-with-grid" /></a>
					</div>
				

					<h5 id="chunk">Everybody Likes a Chunk</h5>
					<p><strong>Breaking information down into small, digestible chunks helps people make sense of it.</strong></p>
					<p>Human brains can only apply focused thought to a relatively small amount of information at a time. Interfaces must break information into chunks. They should give users information in manageable, controlled courses, like a formal dinner.</p>
					<p><strong>Progressive disclosure</strong> gives people the information they need when they need it. The interface gradually provides users with more and more detail. Designers need to develop a good knowledge of users' work to understand what superficial information they should begin with, and then what details should be introduced at successive stages.Keep in mind that  people can only hold three to four things in their mind at once.</p>
					<p><strong>Example:</strong> The list in Figure 7.25 shows essential allergy information in four columns. The user has all the information she needs about the patient's medication allergies to make prescription decisions. If she needs additional information about the patient's allergies, she can select an entry to see more details.</p>
					<div class="example" id="fig-7-25">
						<div class="ex-title">
							<span class="ex-type">Figure 7.25</span>
							<span class="ex-caption"></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png">
							<img src="./assets/images/examples/allergy-list/Um_Ehr_0005_allergies-details.png" class="scale-with-grid" /></a>
					</div>
				
					<h5 id"decision-making">7.2.5 Goal, Execute, and Evaluate!</h5>
					<p><strong>Humans have a thought cycle that guides our decision making and it is Goal, Execute and Evaluate.</strong></p>
					<p>How do we get anything done? No, really. We start by forming a goal: get some food, edit a word document, impress our boss with our design skills, etc. Next we choose and execute actions that we think will help us accomplish that goal. Finally, we evaluate how well our actions worked. Were we able to accomplish our goal, or to at least make progress towards accomplishing it?</p>
					<p>Interfaces can support clinical decision making if their designers establish a shared understanding of goals with physicians. The interfaces must then provide users with clear paths by which to accomplish these goals, useful 'action' choices, and the feedback they need to quickly and accurately make choices and evaluate their progress. If interfaces don't provide appropriate or sufficient feedback, users make errors and find the interface unsatisfying to use. This is a common problem with interfaces.</p>
				
					<h5 id="flow-states">Go with the Flow</h5>
					<p><strong>People like to get into flow states; if we're engrossed in what we're doing, everything else falls away</strong></p>
					<p>We've all had moments where we get so involved in what we're doing that we lose track of time and get a lot done. This situation is called a 'flow state', and you can enter it doing professional or (more likely) recreational tasks. No one likes having their flow state interrupted.</p>
 					<p>Interfaces can help users get into and stay in flow states. Some facts to remember:
 					<ul class="disc">
						<li>People like being in control of themselves. Giving them control over their activities will help them get into the flow.</li>
						<li>Distractions, in the form of noisy interfaces or interruptions from co-workers, interrupt peoples' flow.</li>
						<li>People like goals that are challenging, but achievable.</li>
						<li>Break difficult tasks down like you would unmanageable gluts of information. Allow users to complete long or difficult tasks in clearly-defined stages.</li>
						<li>Give users feedback on their progress. Seeing how far they've come and how far they still have to go can motivate people.</li>
					</ul></p>
					<p><strong>Example</strong>: <a href="#fig-7-26">Figure 7.26</a> shows a medication list that a patient is in the process of updating. The page indicator on the bottom shows the patient he's on step 2 of 22. This information about his progress may help the user get into a flow.</p>
					<div class="example" id="fig-7-26">
						<div class="ex-title">
							<span class="ex-type">Figure 7.26</span>
							<span class="ex-caption">Tracking Progress via Page Indicators - The dots along the bottom of the screen</span>
						</div>
						<a class="fancybox" href="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" title="Tracking Progress via Page Indicators - The dots along the bottom of the screen">
						<img src="./assets/images/examples/medication-reconciliation/UmEhr_MedRec_0012_patient_stepmed_nottaking.png" class="scale-with-grid" alt="Tracking Progress via Page Indicators - The dots along the bottom of the screen" /></a>
					</div>
				</div>
			</div>
		</section>

		<section id="manage-information">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
						<h3>7.3 How People Manage Information</h3>
					</div>
 					<h5 id="info-chaos">7.3.1 Information Chaos</h5>
					<blockquote>Too much information going through my brain, too much information driving me insane - The Police</blockquote>
					<p>Five things lead to a state John Beasley and colleagues have called information chaos: information overload, information underload, information conflict, erroneous information and information scatter.</p>
					<p><strong>Information overload</strong> happens when we're being asked to make sense of information quickly, but there's too much information for us to do so. This makes us tired and even anxious. It also reduces our situational awareness. Without good situational awareness, we can miss important information because we're 'unable to hear the signal for the noise'.</p>
					<p><strong>Information underload</strong> happens when we lack sufficient information to make decisions.</p>
					<p><strong>Information conflict</strong> happens when an interface gives us contradictory information, or information that contradicts what we already know.</p>
					<p><strong>Erroneous information</strong> is of course information that, for whatever reason, isn't correct.</p>
					<p><strong>Information scatter</strong> happens when someone has access to all the information they need, but it's in several locations or formats and can't easily be reconciled into a complete picture.</p>
					<p>If an interface allows for any of the above issues, a doctor could miss noticing important information, like a dangerously high blood pressure reading, and put her patient at risk.</p>
					<p><strong>Example</strong>: This walkthrough demonstrates the factors involved in information chaos.</p>
					<div class="example" id="fig-7-27">
						<div class="ex-title">
							<span class="ex-type">Figure 7.27</span>
							<span class="ex-caption">Information Chaos <span class="smaller">Reproduced by permission of the American Board of Family Medicine</span></span>
						</div>
						<a class="fancybox" href="./assets/images/examples/human-factors/UM_EHR_0011_info-chaos.png" title="Information Chaos">
						<img src="./assets/images/examples/human-factors/UM_EHR_0011_info-chaos.png" class="scale-with-grid" title="Information Chaos" alt="Information Chaos" /></a>
					</div>
				
					<h5 id="situational-awareness">7.3.2 Situational Awareness</h5>
					<p><strong>Interfaces must help users put all the elements of complex situations into perspective so they can make good choices</strong></p>
					<p>Situational awareness is an important component of everything from quotidian tasks like driving a car to emergency services. Effective EHR displays can improve users' situational awareness by presenting them with key information without disrupting their work.</p>
					<p>It's difficult to design EHRs that can improve users' situational awareness, however, because the information users need varies depending on both the user and the on task at hand. What's important for the user to know about one patient may not be important for them to know about another. Yet despite the situation's complexity, designers can meet this challenge. If a patient has a chronic disease such as diabetes or hypertension, an interface can help users quickly assess and manage these conditions. The interface need never force users to stop, say, writing up an ePrescription to go look for the lab result they need in order to calculate a proper dose. Designers need to strike a balance between giving users lots of information to boost their situational awareness, and overwhelming them (see information overload).</p>
 					<p>Users' situational awareness suffers when they're distracted. If two children are arguing in the back seat, the car's driver won't be able to give her full attention to the road. Similarly, alerts about laboratory values may be important, but they may also distract a physician who's trying to order a medication and cause her to make a mistake.</p>
				</div>
			</div>
		</section>

		<section id="">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr/>
						<h3>7.4 Summary</h3>
						<ol>
							<li>Human Factors Engineering seeks to improve human performance by designing systems that are compatible with our physical, cognitive, and perceptual abilities.</li>
							<li>We subconsciously use expectations, past experience, associations, and rules of thumb to make guesses about what we are seeing. This lets us cope with noisy, incomplete data, but can also lead us astray.</li>
							<li>We have two modes of thinking, a fast one that happens with little conscious effort and a slow one that takes focus. Good design lets us use our fast system to do as much as possible.</li>
							<li>Working memory is limited to four things. Good design minimizes the need to  use working memory.</li>
							<li>The more we have to remember and calculate in our heads, the higher the cognitive load. Good design reduces cognitive load by reducing the need to remember information and displaying information that can be used in decision making without additional calculations or navigation.</li>
							<li>Good information system design allows a user to quickly gain or maintain the situational awareness needed to make safe and effective decisions.</li>
						</ol>
					</div>
				</div>
			</div>
		</section>

		
		<footer class="chapterEnd">
			<div class="container">
				<div class="sixteen columns">
					<div class="sectionStart">
						<hr />
					</div>
					<div class="cf">
						<div class="fleft" id="prevCh">
							<p class="pagination prev_ch"><a href="./drug-alerts.php"><span class="prev"></span>Drug Alerts</a></p></div>
						<div class="fright" id="nextCh">
							<p class="pagination next_ch"><a href="./design-principles.php">Design Principles<span class="next"></span></a></p></div>
					</div>
				</div>
			</div>
		</footer>
		<section class="citations">
			<div class="container">
				<div class="sixteen columns">
					<hr />
					<p>References</p>
					<div class="section_cite">
						<p class="grey"><strong>Our Eyes have expectations</strong></p>
						<p>Kannengiesser, U., & Gero, J. S. (2012). A process framework of affordances in design. <em>Design Issues</em>, 28(1), 50-62.</p>
						<p>Norman, D. A. (1999). Affordance, conventions, and design. <em>Interactions</em>, 6(3), 38-43.</p>
						<p>Roth, S. P., Schmutz, P., Pauwels, S. L., Bargas-Avila, J. A., & Opwis, K. (2010). Mental models for web objects: Where do users expect to find the most frequent objects in online shops, news portals, and company web pages?<em>Interacting with Computers</em>, 22(2), 140-152.</p>
						<p>van Schaik, p. & Ling, J. (2009). The role of context in perceptions of the aesthetics of web pages over time. <em>International Journal of Human-Computer Studies</em>, 67(1) 79-89.</p>
						<p>Weischenk, S.M. (2011). <em>100 Things Every Designer Needs to Know About People</em>. Berkeley, CA: New Riders. 13-14.</p>
					
						<p class="grey"><strong>Images</strong></p>
						<p><em>Figure 7.2</em>Charatan, Fred. “Compensation Awarded for Death after Illegible Prescription.” <em>Western Journal of Medicine</em>. 172, no. 2 (February 2000): 80. from: http://www.ncbi.nlm.nih.gov/pmc/articles/PMC1070756/</p>
						<p>Robert Martin user profile photo in interfaces by <a href="https://www.flickr.com/photos/pedronchi/" target="blank">pedronchi</a></p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>We See in Gestalts</strong></p>
						<p>Wolfe, J. M., Kluender, K., R.; Levi, D, M., Bartoshuk, L, M., Herz, R. S., Klatzky, R, L., Lederman, S. J. (2008). Gestalt Grouping Principles <em>Sensation and Perception</em> (2nd ed.). Sunderland, MA: Sinauer Associates. </p>
						<p>Johnson, J (2010). <em>Simple guide to understanding user interface design rules: Designing with the mind in mind.</em> Burlington, MA: Morgan Kaufman.</p>
						<p>Rubin, E. (1921) Visuell Wahrgenommene Figuren : <em>Studien in psychologischer Analyse</em>. Kobenhaven: Gyldendalske boghandel.</p>
					
						<p><em>Figure 7.11</em> <em>Gestalt_closure</em> [SVG file]. (2008). Retrieved January 28, 2014 from: http://en.wikipedia.org/wiki/File:Gestalt_closure.svg</p>
						<p><em>Figure 7.17</em> Ruben, E. (psychologist). (1921). <em>Faces-Vase</em> [SVG file], Retrieved January 28,2014 from: http://en.wikipedia.org/wiki/File:Cup_or_faces_paradox.svg</p>
						<p><em>Gallery 7.1</em> Few, Stephen (2013): Data Visualization for Human Perception. In: Soegaard, Mads and Dam, Rikke Friis (eds.). <em>The Encyclopedia of Human-Computer Interaction, 2nd Ed</em>. Aarhus, Denmark: The Interaction Design Foundation. Available online at http://www.interaction-design.org/encyclopedia/data_visualization_for_human_perception.html</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>I Can’t See It, but I Use It</strong></p>
						<p>Larson, A., &amp; Loschky, l. (2009). The contributions of central versus peripheral vision to scene gist recognitions. <em>Journal of Vision</em>, 9 (10:6), 1-16.</p>
						<p>Johnson, J (2010). <em>Simple guide to understanding user interface design rules: Designing with the mind in mind.</em> Burlington, MA: Morgan Kaufman.</p>
						<p>Ware, C. (2005). Visual queries: The foundation of visual thinking. <em>In Knowledge and information visualization</em> (pp. 27-35). Springer Berlin Heidelberg.</p>
						<p>Weischenk, S.M. (2011). <em>100 things every designer needs to know about people</em>. Berkeley, CA: New Riders.</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Pre-attentive Attributes</strong></p>
						<p>Atienza, M., Cantero, J. L., &amp; Escera, C. (2001). Auditory information processing during human sleep as revealed by event-related brain potentials. <em>Clinical Neurophysiology</em>, 112(11), 2031-2045.</p>
						<p>Appelbaum, L. G., &amp; Norcia, A. M. (2009). Attentive and pre-attentive aspects of figural processing. <em>Journal of Vision</em>, 9(11), 1-12.</p>
						<p>Egeth, H. E., Yantis, S. (1997). Visual attention: Control, representation, and time course. <em>Annual Review of Psychology</em>, 48, 269-297.</p>
						<p>Few, S. (2009).  <em>Now you see it: Simple visualization techniques for quantitative analysis</em>. Oakland, CA: Analytics Press.</p>
						<p>Kourtzi, Z., &amp; Kanwisher, N. (2000). Cortical regions involved in perceiving object shape. <em>Journal of Neuroscience</em>, 20, 3310-3318.</p>
						<p>Krummenacher, J., Grubert, A., &amp; Müller, H. J. (2010). Inter-trial and redundant-signals effects in visual search and discrimination tasks: Separable pre-attentive and post-selective effects. <em>Vision Research</em>, 50(14), 1382-1395.</p>
						<p>Van der Heijden, A. H. C. (1996). Perception for selection, selection for action, and action for perception. <em>Visual Cognition</em>, 3(4), 357-361.
						<p class="grey"><strong>Images</strong></p>
						<p><em>Figure 7.20 </em>Few, S. (2004). Data Presentation: Tapping the power of visual perception. <em>Information Week</em>. Retrieved from: http//www.informationweek.com/software/information-management/data-presentation-tapping-the-power-of-visual-perception/d/d-id/1026932?</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>The Two Ways People Think</strong></p>
						<p>Evans, J., &amp; Frankish, K. (Eds.) (2009). <em>In two minds: Dual processes and beyond</em>. New York, NY: Oxford University Press.</p>
						<p>Evans, J. (2008). Dual-processing accounts of reasoning, judgment, and social cognition. <em>Annual Review of Psychology</em> 59: 255-78.</p>
						<p>Kahneman, D. (2011). <em>Thinking, fast and slow</em>. New York, NY: Farrar, Straus and Giroux.</p>
						<p>Stanovich, K.E. West, R.F. (2000). Individual Differences in Reasoning: Implications for the Rationality Debate. <em>Behavioral and Brain Sciences</em> 23, 655-65.</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Working Memory</strong></p>
						<p>Cowan, Nelson (2008). What are the differences between long-term, short-term, and working memory? <em>Progressive Brain Research</em>. 169 (169): 323–338.</p>
						<p>Cowan, Nelson (2001). "The magical number 4 in short-term memory: A reconsideration of mental storage capacity". <em>Behavioral and Brain Sciences</em> 24: 87–185.</p>
						<p>Engle, R. W., Tuholski, S. W., Laughlin, J. E., Conway, A. R. (September 1999). "Working memory, short-term memory, and general fluid intelligence: a latent-variable approach". <em>Journal of Experimental Psychology: General</em> 128(3): 309–31.</p>
						<p>Revlin, Russell (2013). <em>Human cognition: Theory and practice</em>. New York, NY: Worth Publishers.</p>
						<p>Towse, J. N., Hitch, G. J., Hutton, U. (April 2000). "On the interpretation of working memory span in adults". <em>Memory &amp; Cognition</em> 28 (3): 341–8</p>
					</div>
					<div class="section_cite">
						<p class="grey"><strong>Cognitive Load</strong></p>
						<p>Cowan, Nelson (2010). The Magical Mystery Four How Is Working Memory Capacity Limited, and Why? <em>Current Directions in Psychological Science</em>, 19 (1): 51-57.</p>
						<p>DeLeeuw, K.E., &amp; Mayer, R.E. (2008). "A comparison of three measures of cognitive load: Evidence for separable measures of intrinsic, extraneous, and germane load". <em>Journal of Educational Psychology</em> 100 (1): 223–234.</p>
						<p>Paas, F., Renkel, A., &amp; Sweller, J. (2004). Cognitive load theory: Instructional implications of the interaction between information structures and cognitive architecture. <em>Instructional Science</em> 32: 1–8.</p>
						<p>Paas, F., Tuovinen, J.E., Tabbers, H.K., &amp; Van Gerven, P.W.M. (2003). "Cognitive load measurement as a means to advance cognitive load theory". <em>Educational Psychologist</em> 38 (1): 63–71.</p>
						<p>Plass, J.L., Moreno, R., &amp; Brünken, R., ed. (2010). <em>Cognitive Load Theory</em>. New York: Cambridge University Press.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Everybody Likes a Chunk</p>
						<p>Keller, J. M. (1987). Development and use of the ARCS model of instructional design. Journal of instructional development, 10(3), 2-10.</p>
						<p>Cowan, Nelson (2001). "The magical number 4 in short-term memory: A reconsideration of mental storage capacity". Behavioral and Brain Sciences, 24: 87–185.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Goal Execute and Evaluate</p>
						<p>Card, S. K., Moran, T. P., & Newell, A. (Eds.). (1986). The psychology of human-computer interaction. CRC Press.</p>
						<p>Norman, D. A. (1988). The Design of Everyday Things. New York, Doubleday/Currency Ed.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Go with the Flow</p>
						<p>Csikszentmihalyi, M. (1997). Flow and the Psychology of Discovery and Invention. Harper Perennial, New York.</p>
						<p>Csikszentmihlyi, M. (2008). Flow: The Psychology of Optimal Experience. New York: Harper and Row.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Information Chaos</p>
						<p>Beasley, J. W., Wetterneck, T. B., Temte, J., Lapin, J. A., Smith, P., Rivera-Rodriguez, A. J., & Karsh, B. T. (2011). Information chaos in primary care: implications for physician performance and patient safety. The Journal of the American Board of Family Medicine, 24(6), 745-751.</p>
						<p>Misra, S., & Stokols, D. (2012). Psychological and health outcomes of perceived information overload. Environment and behavior, 44(6), 737-759.</p>
					</div>
					<div class="section_cite">
						<p class="grey">Situational Awareness</p>
						<p>Banbury, S., & Tremblay, S. (Eds.). (2004). A cognitive approach to situation awareness: theory and application. Ashgate Publishing, Ltd..</p>
						<p>Bolstad, C. A., Cuevas, H., Gonzalez, C., & Schneider, M. (2005, May). Modeling shared situation awareness. In Proceedings of the 14th Conference on Behavior Representation in Modeling and Simulation (BRIMS), Los Angles, CA.</p>
						<p>Endsley, M. R. (1995). Toward a theory of situation awareness in dynamic systems. Human Factors: The Journal of the Human Factors and Ergonomics Society, 37(1), 32-64.</p>
						<p>Iyengar, S. (2010). The art of choosing. Hachette Digital, Inc..</p>
						<p>Iyengar, S. S., & Lepper, M. R. (2000). When choice is demotivating: Can one desire too much of a good thing?. Journal of personality and social psychology,79(6), 995.</p>
					</div>
				</div>
			</div>
		</section>
	</section>
	

</div><!--end wrapper-->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="./assets/js/modernizr.custom.js"></script>
	<script src="./assets/js/main.js" type="text/javascript"></script>
	<script type="text/javascript" src="./assets/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="./assets/js/jquery.cbpFWSlider.js"></script>
	<script type="text/javascript">
		$(function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
			$( '#cbp-fwslider-2' ).cbpFWSlider();
			$( '#cbp-fwslider-3' ).cbpFWSlider();
			$( '#cbp-fwslider-4' ).cbpFWSlider();
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox({
				closeEffect	: 'none',
				
				helpers : {
					title : {
						type : 'outside'
					}
				},
				
				afterLoad : function() {
					if (this.group.length > 1){
						this.title = (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
					}
				}
			});
		});
	</script>
</body>
</html>