<?php switch_to_blog(1) ?>
<div id="im-navbar-wrap">
	<div id="im-navbar">
		<div id="im-navbar-inner">
			<div id="im-network">
				<a href="<?= get_bloginfo('url') ?>" id="important_media_network">Important Media Network&nbsp;&nbsp;&nbsp;&darr;</a>
			</div>
			<div id="im-sociallinks">
				<ul>
					<li><a href="<?= get_permalink(ubiq_get_ID_by_slug('feeds')) ?>" class="icon icn16-rss" title="RSS">RSS</a></li>
					<li><a href="http://twitter.com/importantmedia" class="icon icn16-twitter" name="@importantmedia" title="Twitter" target="_blank">@importantmedia</a></li>
					<li><a href="http://www.facebook.com/pages/Important-Media/125494827481361" class="icon icn16-fb" title="Facebook" target="_blank">Facebook</a></li>
					
				</ul>
			</div>
			<div id="im-sitelinks">
				<ul class="list">
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="<?= get_permalink(ubiq_get_ID_by_slug('about')) ?>" class="menu-title">About</a>
								<div class="dd-body">
									<ul class="dd-menu">
										<li><a href="<?= get_permalink(ubiq_get_ID_by_slug('about')) ?>">Learn about IM</a></li>
									<?php
										$child_of = ubiq_get_ID_by_slug('about');
										wp_list_pages("child_of=".$child_of."&echo=1&title_li=&depth=1");
										
									?>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="<?= get_permalink(ubiq_get_ID_by_slug('write')) ?>" class="menu-title">Write</a>
							</div>
							<div class="dd-body">
								<ul class="dd-menu">
								<li><a href="<?= get_permalink(ubiq_get_ID_by_slug('write')) ?>">Write with IM</a></li>
								<?php
									$child_of = ubiq_get_ID_by_slug('write');
									wp_list_pages("child_of=".$child_of."&echo=1&title_li=&depth=1");
								
								?>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="<?=get_permalink(ubiq_get_ID_by_slug('advertise')); ?>" class="menu-title">Advertise</a>
							</div>
							<div class="dd-body">
								<ul class="dd-menu">
									<li><a href="<?=get_permalink(ubiq_get_ID_by_slug('advertise')); ?>">Advertise on IM</a></li>
								<?php
									$child_of = ubiq_get_ID_by_slug('advertise');
									wp_list_pages("child_of=".$child_of."&echo=1&title_li=&depth=1");
									
								?>
								</ul>
							</div>
							
						</div>
					</li>
					<?php restore_current_blog() ?>
					<?php if(is_user_logged_in()): ?>
					<?php global $current_user;
					      get_currentuserinfo();
					      $img = ubiq_custom_avatar($current_user->ID);
					?>
					<li>
						<div class="dropdown">
							<div class="dd-header dd-header-user">
								<a href="<?=admin_url()?>" class="menu-title"><?=$current_user->user_login; ?>
								<?php if ($img): ?><span  class="user_avatar"><img src="<?=$img?>" width="20" height="20"><?php endif; ?></span></a>
							</div>
							<div class="dd-body">
								<ul class="dd-menu">
									<li><a href="<?=admin_url()?>" title="Dashboard">Dashboard</a></li>
									<li><a href="<?=admin_url()?>profile.php" title="My Profile">My Profile</a></li>
									<li><a href="http://p2.importantmedia.org" title="Watercooler">Watercooler</a></li>
									<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Logout">Logout</a></li>
								</ul>
							</div>
						</div>
					</li>
					<? else: ?>
					<li>
						<div class="dropdown">
							<div class="dd-header">
								<a href="<?=admin_url()?>" class="menu-title">Login</a>
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
								<li><a title="Inspired Economist" href="http://inspiredeconomist.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">The Inspired Economist</a></li>
								<li><a title="Ecopreneurist" href="http://ecopreneurist.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Ecopreneurist</a></li>
								<li><a title="Green Building Elements" href="http://greenbuildingelements.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Green Building Elements</a></li>
							</ul>
						</div>
										
						<div id="panel_3" class="panel">
							<h3>Priority 3: Daily Life</h3>
							<p>Family, household, community</p>
							<ul>
								<li><a title="Eat. Drink. Better." href="http://eatdrinkbetter.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Eat. Drink. Better.</a></li>
								<li><a title="Eat. Drink. Better." href="http://greenoptions.com?utm_source=importantmedia_corp&utm_medium=navbar&utm_campaign=Universal%2BNavbar" target="_blank">Green Options</a></li>
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
					<?php switch_to_blog(1) ?>
					<a href="<?=get_permalink(ubiq_get_ID_by_slug('about/faq')); ?>#maslow" id="what"><span class="q">?</span>What is this?</a>
					<?php restore_current_blog() ?>
				</div>
			</div>
		</div>
	</div>
</div>