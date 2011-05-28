<div id="im-navbar-wrap">
	<div id="im-navbar">
		<div id="im-navbar-inner">
			<div id="im-network">
				<a href="<?php echo  get_bloginfo('url') ?>" id="important_media_network">Important Media Network&nbsp;&nbsp;&nbsp;&darr;&nbsp;&nbsp;(click to expand once page loads)</a>
			</div>
			<div id="im-sociallinks">
				<ul>
					<li><a href="<?php echo  get_permalink(ubiq_get_ID_by_slug('feeds')) ?>" class="icon icn16-rss" title="RSS">RSS</a></li>
					<li><a href="http://twitter.com/importantmedia" class="icon icn16-twitter" name="@importantmedia" title="Twitter" target="_blank">@importantmedia</a></li>
					<li><a href="http://www.facebook.com/importantmedia" class="icon icn16-fb" title="Facebook" target="_blank">Facebook</a></li>
					
				</ul>
			</div>
			<div id="im-sitelinks">
				<ul class="list">
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="http://importantmedia.org/about/" class="menu-title">About</a>
								<div class="dd-body">

									<ul class="dd-menu">
									<li><a href="http://importantmedia.org/about/">Learn about IM</a></li>
									<li class="page_item page-item-623"><a href="http://importantmedia.org/about/faq/" title="FAQ">FAQ</a></li>
									<li class="page_item page-item-300"><a href="http://importantmedia.org/about/people/" title="People">People</a></li>
									<li class="page_item page-item-99"><a href="http://importantmedia.org/about/legal/" title="Legal">Legal</a></li>
									<li class="page_item page-item-463"><a href="http://importantmedia.org/about/contact/" title="Contact">Contact</a></li>
									</ul>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="http://importantmedia.org/write/" class="menu-title">Join Us</a>

							</div>
							<div class="dd-body">
								<ul class="dd-menu">								
								<li><a href="http://importantmedia.org/write/">Write with IM</a></li>
								<li class="page_item page-item-393"><a href="http://importantmedia.org/write/contributors/" title="Guest Contributors">Guest Contributors</a></li>
								<li class="page_item page-item-386"><a href="http://importantmedia.org/write/authors/" title="Freelance Authors">Freelance Authors</a></li>
								<li><a href="http://importantmedia.org/about/hiring/" title="We're Hiring!">Central Team</a></li>
								<li class="page_item page-item-406"><a href="http://importantmedia.org/write/apply/" title="Apply">Apply Now!</a></li>

								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="http://importantmedia.org/advertise/" class="menu-title">Advertise</a>

							</div>
							<div class="dd-body">
								<ul class="dd-menu">
								<li class="page_item page-item-322"><a href="http://buyads.com/group/important-media" title="Self-service!">Our Network on BuyAds</a></li>
								<li class="page_item page-item-511"><a href="http://importantmedia.org/advertise/quote/" title="Get a Quote">Get a Quote</a></li>
								<li class="page_item page-item-314"><a href="http://importantmedia.org/advertise/specs/" title="Advertising Specs">Advertising Specs</a></li>

								</ul>
							</div>
							
						</div>
					</li>
					<?php if(is_user_logged_in()): ?>
					<?php global $current_user;
					      get_currentuserinfo();
					      $img = ubiq_custom_avatar($current_user->ID);
					?>
					<li>
						<div class="dropdown">
							<div class="dd-header dd-header-user">
								<a href="<?php echo admin_url()?>" class="menu-title"><?php echo 
								$current_user->user_login; ?>
								<?php if ($img): ?><span  class="user_avatar"><img src="<?php echo $img?>" width="20" height="20"><?php endif; ?></span></a>
							</div>
							<div class="dd-body">
								<ul class="dd-menu">
									<li><a href="<?php echo admin_url()?>" title="Dashboard">Dashboard</a></li>
									<li><a href="<?php echo admin_url()?>profile.php" title="My Profile">My Profile</a></li>
									<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a></li>
								</ul>
							</div>
						</div>
					</li>
					<?php else: ?>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="<?php echo admin_url()?>" class="menu-title">Login</a>
							</div>
						</div>
					</li>
					<?php endif; ?>
				</ul>
			</div>  
		</div>
		<div id="im-navbar-slider">
			<div id="im-navbar-slidebox">
				<div id="udm">
					<div id="udm_images" class="clean">
						<div id="panel_1" class="panel">
							<div class="label"><div class="lt">Nature</div></div>
						</div>
						<div id="panel_2" class=" panel">
							<div class="label"><div class="lt">Civilization</div></div>
						</div>
						<div id="panel_3" class=" panel">
							<div class="label"><div class="lt">Daily Life</div></div>
						</div>
						<div id="panel_4" class=" panel">
							<div class="label"><div class="lt">Society</div></div>
						</div>
						<div id="panel_5" class=" panel">
							<div class="label"><div class="lt">Creativity</div></div>
						</div>
					</div>
					<div id="udm_tabs">
						<div id="panel_0" class="panel active"><div id="centerme" class="label"><div class="lt"><div class="larr">&larr;</div>Please&nbsp;make&nbsp;a&nbsp;selection.</div></div></div>
						<div id="panel_1" class="panel">
							<h3>Priority 1: Nature</h3>
							<p>Air, water, planet, and its ecosystems</p>
							<ul>
								<li><a title="Planetsave" href="http://planetsave.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">PlanetSave</a></li>
								<li><a title="Ecoscraps." href="http://ecoscraps.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">EcoScraps</a></li>
							</ul>
						</div>
						
						<div id="panel_2" class="panel">
							<h3>Priority 2: Civilization</h3>
							<p>Business, economics, self-sufficiency, energy, infrastructure, transportation, industrial design</p>
							<ul>
								<li><a title="CleanTechnica" href="http://cleantechnica.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">CleanTechnica</a></li>
								<li><a title="Gas 2.0" href="http://gas2.org?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Gas 2.0</a></li>
								<li><a title="Green Building Elements" href="http://greenbuildingelements.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Green Building Elements</a></li>
								<li><a title="Inspired Economist" href="http://inspiredeconomist.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">The Inspired Economist</a></li>
								<li><a title="Ecopreneurist" href="http://ecopreneurist.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Ecopreneurist</a></li>
								
								
								
							</ul>
						</div>
										
						<div id="panel_3" class="panel">
							<h3>Priority 3: Daily Life</h3>
							<p>Family, household, community</p>
							<ul>
								<li><a title="Eat. Drink. Better." href="http://eatdrinkbetter.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Eat. Drink. Better.</a></li>
								<li><a title="Insteading" href="http://insteading.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Insteading</a> (new!)</li>
								<li><a title="Blue Living Ideas" href="http://bluelivingideas.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Blue Living Ideas</a></li>
								<li><a title="Green Living Ideas" href="http://greenlivingideas.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Green Living Ideas</a></li>
								<li><a title="Green Options" href="http://greenoptions.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Green Options</a>, a <a title="HUddler" href="http://huddler.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Huddler</a> community</li>
							</ul>
						</div>
						
						<div id="panel_4" class="panel">
							<h3>Priority 4: Society</h3>
							<p>Civic affairs, politics, social justice, internet society, opinions and profiles of thought leaders</p>
							<ul>
								<li><a title="Red, Green and Blue" href="http://redgreenandblue.org?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar">Red, Green &amp; Blue</a></li>
								<li><a title="EcoLocalizer" href="http://ecolocalizer.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">EcoLocalizer</a></li>
							</ul>
						</div>
						
						<div id="panel_5" class="panel">
							<h3>Priority 5: Creativity</h3>
							<p>Art, philosophy, crafts, fashion, culture</p>
							<ul>
								<li><a title="Crafting A Green World" href="http://craftingagreenworld.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Crafting A Green World</a></li>
								<li><a title="FeelGood Style" href="http://feelgoodstyle.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">FeelGood Style</a></li>
							</ul>
						</div>
					</div>
					<a href="http://importantmedia.org/about/faq/#maslow" id="what"><span class="q">?</span>What is this?</a>
				</div>
			</div>
		</div>
	</div>
</div>