<?php /* Template Name: Manifesto */ ?>
<?php get_header(); ?>

<main id="content" class="manifesto">

	<?php /************************
	*
	*         Section 1
	* 
	* *************************/ ?>

	<div class="manifesto-section-1 relative pt-40 md:pt-245 bg-cover bg-center-top bg-manifesto-bg">
		<div class="relative max-w-1050 mx-auto px-5 py-0">

			<div class="animate-1-control-wrap relative block min-h-1000px">
				<div class="manifesto-content-section-1 relative max-w-680px">
					<?php if( get_field('manifesto_intro_title') ) { ?>
						<h1 class="line1 animateRise relative mb-6 x840:text-8xl text-calc-100-minus-320 font-poppins font-bold leading-96% text-primary_white tracking-tight"><?php echo get_field('manifesto_intro_title'); ?></h1>
					<?php } ?>
					<?php if( get_field('manifesto_intro_support_title') ) { ?>
						<div class="support-line animateRise relative font-semibold mb-12 text-26px md:text-4xl font-poppins  text-custom_gold leading-112%"><?php echo get_field('manifesto_intro_support_title'); ?></div>
					<?php } ?>
				</div>

				<div class="manifesto-content-section-2 relative md:pl-calc-100-minus-512">
					<?php if( get_field('manifesto_intro_content') ) { ?>
						<div class="prose text-white font-semibold font-poppins"><?php echo get_field('manifesto_intro_content'); ?></div>
						<span id="color-trigger-1"></span>
						<div class="hidden">
							<div id="manifesto-pop-1">
								
								<ul>
									<li>1 in 10 people in the world <a href="#1" class="small"><sup>1</sup></a> live in extreme poverty and make less than $1.90 per day.</li>
									<li>One out of five children live in extreme poverty, and the negative effects of poverty and deprivation in the early years have ramifications that can last a lifetime. <a href="#2" class="small"><sup>2</sup></a></li>
									<li>More than 700 million people, or 10 percent of the world&rsquo;s population, still live in extreme poverty today, struggling to fulfill the most basic needs like health, education, and access to water and sanitation. <a href="#3" class="small"><sup>3</sup></a></li>
									<li>One in every three global human trafficking victims is a child. <a href="#4" class="small"><sup>4</sup></a></li>
									<li>Globally, up to 1 billion children ages 2-17 have experienced physical, sexual, or emotional violence or neglect in the past year. <a href="#5" class="small"><sup>5</sup></a></li>
									<li>In 2020 there were an estimated 241 million cases of malaria worldwide and 627,000 estimated deaths. <a href="#6" class="small"><sup>6</sup></a></li>
									<li>785 million people lack even a basic drinking-water service, including 144 million people who are dependent on surface water.<a href="#7" class="small"><sup>7</sup></a></li>
									<li>An estimated 1.8 billion people do not have quality essential health services. A large proportion of preventable maternal, childhood, and neonatal deaths occur in these settings.<a href="#8" class="small"><sup>8</sup></a></li>
									<li>Despite the steady rise in literacy rates over the past 50 years, there are still 773 million illiterate adults around the world, most of whom are women.<a href="#9" class="small"><sup>9</sup></a></li>
									<li>100 million youth around the world lack basic literacy skills.<a href="#10" class="small"><sup>10</sup></a></li>
									<li>There are an estimated 40.3 million victims of human trafficking globally. 81% of them are trapped in forced labor, 75% are women and girls, and 1 in 4 victims of human trafficking are children.<a href="#11" class="small"><sup>11</sup></a></li>
									<li>71% of trafficking victims around the world are women and girls, and 29% are men and boys.<a href="#12" class="small"><sup>12</sup></a></li>
									<li>2.37 billion people face moderate or severe food insecurity. Half are in Asia, one-third are in Africa, and 11 percent are in Latin America and the Caribbean.<a href="#13" class="small"><sup>13</sup></a></li>
									<li>Between 720 and 811 million people in the world face hunger.<a href="#14" class="small"><sup>14</sup></a></li>
									<li>Nearly one in three people in the world did not have access to adequate food in 2020 &ndash; that&rsquo;s an increase of almost 320 million people in just one year.<a href="#15" class="small"><sup>15</sup></a></li>
								</ul>
								
								<p id="1" class="small"><sup>1</sup>Source: World Bank: <a href="https://www.worldbank.org/en/publication/poverty-and-shared-prosperity" target="_blank">https://www.worldbank.org/en/publication/poverty-and-shared-prosperity</a> </p>
								<p id="2" class="small"><sup>2</sup>Source: <a href="https://www.un.org/sustainabledevelopment/poverty/" target="_blank">https://www.un.org/sustainabledevelopment/poverty/</a></p>
								<p id="3" class="small"><sup>3</sup>Source: Goal 1: End Poverty in All Its Forms Everywhere — United Nations Sustainable Development.” United Nations Sustainable Development, <a href="https://www.un.org/sustainabledevelopment/poverty/" target="_blank">https://www.un.org/sustainabledevelopment/poverty/</a></p>
								<p id="4" class="small"><sup>4</sup>Source: Chapter 3, <a href="https://www.unodc.org/documents/data-and-analysis/tip/2021/GLOTiP_2020_15jan_web.pdf" target="_blank">https://www.unodc.org/documents/data-and-analysis/tip/2021/GLOTiP_2020_15jan_web.pdf</a></p>
								<p id="5" class="small"><sup>5</sup>Source: <a href="https://www.who.int/news-room/fact-sheets/detail/violence-against-children" target="_blank">https://www.who.int/news-room/fact-sheets/detail/violence-against-children</a></p>
								<p id="6" class="small"><sup>6</sup>Source: <a href="https://www.who.int/news-room/fact-sheets/detail/malaria" target="_blank">https://www.who.int/news-room/fact-sheets/detail/malaria</a></p>
								<p id="7" class="small"><sup>7</sup>Source: <a href="https://www.who.int/news-room/fact-sheets/detail/drinking-water" target="_blank">https://www.who.int/news-room/fact-sheets/detail/drinking-water</a></p>
								<p id="8" class="small"><sup>8</sup>Source: <a href="https://www.who.int/news-room/fact-sheets/detail/quality-health-services" target="_blank">https://www.who.int/news-room/fact-sheets/detail/quality-health-services</a></p>
								<p id="9" class="small"><sup>9</sup>Source: <a href="http://uis.unesco.org/en/topic/literacy " target="_blank">http://uis.unesco.org/en/topic/literacy </a></p>
								<p id="10" class="small"><sup>10</sup>Source: <a href="https://en.unesco.org/sites/default/files/ild-2021-fact-sheet.pdf" target="_blank">https://en.unesco.org/sites/default/files/ild-2021-fact-sheet.pdf</a></p>
								<p id="11" class="small"><sup>11</sup><a href="https://www.ilo.org/global/publications/books/WCMS_575479/lang--en/index.htm " target="_blank">https://www.ilo.org/global/publications/books/WCMS_575479/lang--en/index.htm </a></p>
								<p id="12" class="small"><sup>12</sup>Source: ILO</p>
								<p id="13" class="small"><sup>13</sup>Source: <a href="https://www.fao.org/3/cb4474en/online/cb4474en.html#chapter-2_1" target="_blank">https://www.fao.org/3/cb4474en/online/cb4474en.html#chapter-2_1</a></p>
								<p id="14" class="small"><sup>14</sup>Source: <a href="https://www.un.org/en/global-issues/food" target="_blank">https://www.un.org/en/global-issues/food</a></p>
								<p id="15" class="small"><sup>15</sup>Source: <a href="https://www.un.org/en/global-issues/food" target="_blank">https://www.un.org/en/global-issues/food</a></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="manifesto-content-section-3 relative pt-7 md:pt-18 pb-15 md:pb-28">
				<?php if( get_field('manifesto_bridge_image') ) { ?>
					<?php $theImage = get_field('manifesto_bridge_image'); ?>
					<img src="<?php echo $theImage ?>" alt="" class="animateRise2 block max-w-full h-auto" />
				<?php } ?>
			</div>

			<div class="manifesto-content-section-4 relative x840:pr-calc-100-minus-480 x840:pb-100px text-white font-semibold">
				<div class="font-semibold"><?php if( get_field('manifesto_middle_content') ) { ?></div>
					<?php echo get_field('manifesto_middle_content'); ?>
					<span id="color-trigger-2"></span>
					<div class="hidden">
						<div id="manifesto-pop-2">
							<p>Cross-border generosity results in $68 billion per year (excluding U.S. government aid (ODA), remittances and private investments) and is operationalized by thousands of nonprofit organizations. Child sponsorship connects millions of donors with millions of children, mobilizing $3.5-5 billion per year.</p>
 							<p class="leading-100%"><span class="break-words text-sm">¹Global Philanthropy Environment Index. https://globalindices.iupui.edu/tracker/themes/index.html</span></p>
						</div>
					</div>
				<?php } ?>
			</div>

			<div class="manifesto-content-section-5 relative x840:pt-100px text-white x840:pb-22">
				<div class="background-blue-part animateOpacity x14:w-115p x14:-right-190px absolute x12:block xl2:w-full xl2:h-full x12:top-0 x12:right-94px x12:bg-manifesto_background
				 x840:opacity-55 x840:block x840:absolute x840:h-full x840:w-11/12 x840:top-0 x840:-right-20px x840:bg-manifesto_background opacity-0"></div>

				<div class="inner-split-wrap-part grid x840:grid-cols-2 gap-10">
					<div class="col col1">
						<?php if( get_field('manifesto_blue_section_image') ) { ?>
							<?php $theImage = get_field('manifesto_blue_section_image'); ?>
							<img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise" />
						<?php } ?>
					</div>

					<div class="col col2">
						<?php if( get_field('manifesto_blue_section_content') ) { ?>
							<?php echo get_field('manifesto_blue_section_content'); ?>
							<span id="color-trigger-3"></span>
							<div style="display: none !important">
								<div id="manifesto-pop-3">
									<ul>
										<li>Failure to appreciate local assets and capacities</li>
										<li>Failure to discover the local vision, initiative or instill local ownership</li>
										<li>Displacing or undermining local producers/businesses</li>
										<li>Creating dependencies and lack of sustainability</li>
										<li>Reinforcing “marred identities” (the poor as needy victims; the rich as benevolent heroes)</li>
										<li>Turning “the poor” into products, especially children in child sponsorship</li>
										<li>Lack of monitoring, evaluation or learning systems</li>
										<li>Subordination of local community to foreign, money-powered agendas</li>
										<li>Nonprofit inefficiency, bureaucracy and thus low yield of value to the “beneficiaries”</li>
										<li>Pandering to a hero narrative, accommodating the pride of the non-poor</li>
										<li>Lack of accountability and/or transparency</li>
										<li>Failure to listen to those we claim to serve</li>
									</ul>
									<p style="line-height:100%;"><span style="font-size:14px; word-break:break-word;">²White Man’s Burden, Dead Aid, Walking with the Poor, When Helping Hurts, Toxic Charity, Amateurs without Borders</span></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<div class="manifesto-content-section-6 relative md:pt-[96px] md:pr-[calc(100%-554px)] text-white">
				<?php if( get_field('manifesto_bottom_content') ) { ?>
					<?php echo get_field('manifesto_bottom_content'); ?>
					<span id="color-trigger-4"></span>
				<?php } ?>
			</div>

			<?php if( have_rows('manifesto_bottom_orange_lines') ): ?>
				<div class="manifesto-content-section-7 relative pt-7 md:pt-[78px] pb-10 md:pb-[40px]  text-custom_gold">
				    <?php while( have_rows('manifesto_bottom_orange_lines') ) : the_row(); ?>
				    	<p class="special-orange animateSlideRight  text-custom_gold relative x840:mb-7 x840:text-4xl text-2xl font-semibold"><?php the_sub_field('content'); ?></p>
				    <?php endwhile; ?>

				    <div style="display: none !important">
						<div id="manifesto-pop-4">
							<p>Suppose a brother or a sister is without clothes and daily food. If one of you says to them, “Go in peace; keep warm and well fed,” but does nothing about their physical needs, what good is it? In the same way, faith by itself, if it is not accompanied by action, is dead (James 2:15-17, NIV).</p>
						</div>

						<div id="manifesto-pop-5">
							<p>… if I have a faith that can move mountains, but do not have love, I am nothing. If I give all I possess to the poor and give over my body to hardship that I may boast, but do not have love, I gain nothing (1 Corinthians 13:2b-3, NIV).</p>
						</div>

						<div id="manifesto-pop-6">
							<p>On one occasion an expert in the law stood up to test Jesus. “Teacher,” he asked, “what must I do to inherit eternal life?”<br><br>
								“What is written in the Law?” he replied. “How do you read it?”<br><br>
								He answered, “‘Love the Lord your God with all your heart and with all your soul and with all your strength and with all your mind’, and, ‘Love your neighbor as yourself.’”<br><br>
								“You have answered correctly,” Jesus replied. “Do this and you will live.”<br><br>
								But he wanted to justify himself, so he asked Jesus, “And who is my neighbor?”<br><br>
								In reply Jesus said: “A man was going down from Jerusalem to Jericho, when he was attacked by robbers. They stripped him of his clothes, beat him and went away, leaving him half dead. A priest happened to be going down the same road, and when he saw the man, he passed by on the other side. So too, a Levite, when he came to the place and saw him, passed by on the other side. But a Samaritan, as he traveled, came where the man was; and when he saw him, he took pity on him. He went to him and bandaged his wounds, pouring on oil and wine. Then he put the man on his own donkey, brought him to an inn and took care of him. The next day he took out two denarii and gave them to the innkeeper. ‘Look after him,’ he said, ‘and when I return, I will reimburse you for any extra expense you may have.’<br><br>
								“Which of these three do you think was a neighbor to the man who fell into the hands of robbers?”<br><br>
								The expert in the law replied, “The one who had mercy on him.”<br><br>
								Jesus told him, “Go and do likewise.”
								(Luke 10:25-37, NIV)
								</p>
						</div>
					</div>
				</div>
			<?php endif; ?>	

		</div>
	</div>

	<?php /************************
	*
	*         Section 2
	* 
	* *************************/ ?>

	<div class="manifesto-section-2  x12:overflow-hidden relative pt-16 bg-primary_white">
		<div class="relative max-w-1210 mx-auto px-5 py-0">

			<div class="manifesto-content-section-8 relative  x840:pr-calc-100-minus-608">
				<?php if( get_field('manifesto_2_first_content_section') ) { ?>
					<?php echo get_field('manifesto_2_first_content_section'); ?>
				<?php } ?>
			</div>

			<div class="manifesto-content-section-9  relative x840:pt-6 x840:pb-26 x840:pr-calc-100-minus-608 pt-3.5 pb-10">
				<?php if( get_field('manifesto_2_special_line') ) { ?>
					<div class="font-bold text-[#55524a] text-82p relative font-poppins leading-none tracking-tighter  animateSlideRight animateColor2"><?php echo get_field('manifesto_2_special_line'); ?></div>
				<?php } ?>
			</div>

			<div class="manifesto-content-section-10  x840:pb-22 pb-12 relative">
				<div class="split-content-special   x840:flex relative">
					<div class="x12:w-30p x12:mb-0 x12:pr-22 x840:mb-0 x840:pr-10 x840:w-3/6 mb-9 relative">
						<?php if( get_field('manifesto_2_second_content_section_image') ) { ?>
							<?php $theImage = get_field('manifesto_2_second_content_section_image'); ?>
							<img src="<?php echo $theImage['url']; ?>" alt="<?php echo $theImage['alt']; ?>" class="animateRise xl2:float-right relative block max-w-full h-auto" />
						<?php } ?>
					</div>

					<div class="col col2 x12:pl-0 x12:w-61p xl2:pr-0 x840:pl-12 x840:w-1/2 relative">
						<?php if( get_field('manifesto_2_second_content_section') ) { ?>
							<?php echo get_field('manifesto_2_second_content_section'); ?>
						<?php } ?>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php
	/************************
	 *
	 *         Section 3
	 *
	 *************************/
	?>

	<div class="our-pillars-section manifesto-section-3 bg-cover bg-no-repeat bg-center-top relative overflow-hidden text-left min-h-500px py-20 lg:py-22 xl:py-140 xl:pb-22 bg-our-pillars">
	  <div class="bg-part absolute inset-0 bg-cover bg-no-repeat bg-center-top bg-manifesto-bottom-bg"></div>

	  <div class="relative max-w-[1210px] mx-auto px-5 py-0">
	    <div class="top-text text-center">
	      <?php if (get_field('manifesto_3_intro_title_1')) { ?>
	        <div class="we-affirm-intro animateRise text-center mx-auto mb-2 max-w-[560px] text-white font-poppins font-semibold text-3xl leading-9">
	          <?php echo get_field('manifesto_3_intro_title_1'); ?>
	        </div>
	      <?php } ?>
	      <?php if (get_field('manifesto_3_intro_title_2')) { ?>
	        <h2 class="text-h1-special special animateRise animateColor3 text-center text-white font-poppins font-bold text-[68px] lg:text-[calc(43px+57*((100vw-320px)/960))] leading-[106%] mt-6">
	          <?php echo get_field('manifesto_3_intro_title_2'); ?>
	        </h2>
	      <?php } ?>
	    </div>

	    <?php $pillarCount = 0; ?>

	    <?php if (have_rows('manifesto_3_pillars')): ?>
	      <div class="pillar-contain-wrap grid grid-cols-1 gap-4 sm:gap-4 lg:gap-6 my-[40px] lg:my-[70px] xl:my-[80px]">
	        <?php while (have_rows('manifesto_3_pillars')): the_row(); ?>
	          <span class="a-pillar animateRise relative">
	            <div class="inside flex flex-col items-center justify-center text-center z-2 h-fit p-4 lg:p-[4%]   bg-primary_white">
	              <div class="label relative pb-2 w-full text-gold font-poppins font-bold text-[30px] text-left">
	                <span class="text-custom_gold text-left tracking-wide pb-2.5 block"><?php the_sub_field('title'); ?></span>
	                <?php the_sub_field('description'); ?>
	              </div>
	            </div>
	          </span>
	          <?php $pillarCount++; ?>
	        <?php endwhile; ?>
	      </div>
	    <?php endif; ?>

	    <?php if (get_field('manifesto_3_middle_title')) { ?>
	      <h2 class="text-h1-special special second-use text-center text-white font-poppins font-bold mt-22 xl:mt-[130px] mb-[60px] xl:mb-[90px] x960:text-7xl">
	        <?php echo get_field('manifesto_3_middle_title'); ?>
	      </h2>
	    <?php } ?>

	    <?php $colCount = 0; ?>

	    <?php if (have_rows('manifesto_3_support_columns')): ?>
	      <div class="support-cols grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[60px] md:gap-[50px] md:gap-y-[70px]">
	        <?php while (have_rows('manifesto_3_support_columns')): the_row(); ?>
	          <div class="col col<?php echo $colCount; ?> animateRise">
	            <?php if (get_sub_field('title')) { ?>
	              <div class="line1 font-poppins font-bold text-custom_gold"><?php the_sub_field('title'); ?></div>
	            <?php } ?>
	            <?php if (get_sub_field('content')) { ?>
	              <p class="mt-4 text-left text-white"><?php the_sub_field('content'); ?></p>
	            <?php } ?>
	          </div>
	          <?php $colCount++; ?>
	        <?php endwhile; ?>
	      </div>
	    <?php endif; ?>
	  </div>

	  	<div class="absolute block overflow-hidden w-calc-100-plus-20 -left-10 -top-px">
	  		<svg viewBox="0 0 1680 65" xmlns="http://www.w3.org/2000/svg">
				<path d="M1680 65V0H-3V64.9233C548.107 -8.56355 1128.89 -8.56355 1680 64.9233V65Z" fill="#FFF7E4"></path>
			</svg>
        </div>
	</div>


	
	<?php /************************
	*
	*      Section Reach Out
	* 
	* *************************/ ?>

	<div class="reach-out-simple manifesto  bg-manifesto-footer-bg bg-cover pt-2.5  x840:pt-25 x840:px-0 x840:pb-20 py-20" id="sign-this-declaration">
		<div class="relative max-w-1210 mx-auto px-5 py-0">

			<?php if( get_field('manifesto_4_intro_text') ) { ?>
				<div class="sign-dec-intro  relative max-w-550 text-white mx-auto mt-0 mb-24 font-poppins text-28 leading-9 font-bold"><?php echo get_field('manifesto_4_intro_text'); ?></div>
			<?php } ?>

			<?php if( get_field('manifesto_4_declaration_title') ) { ?>
				<h2 class="x960:text-8xl text-primary_white text-center animateRise mb-10 "><?php echo get_field('manifesto_4_declaration_title'); ?></h2>
			<?php } ?>

			<div class="form-wrap-outer  relative max-w-710 mx-auto my-0 text-center">
				<?php if( get_field('manifesto_4_declaration_form_title') ) { ?>
					<p class="text-white text-xl animateRise"><?php echo get_field('manifesto_4_declaration_form_title'); ?></p>
				<?php } ?>

				<div class="form-wrap-inner animateRise  max-w-624 mx-auto my-0">
					<?php if( get_field('manifesto_4_declaration_form_embed') ) { ?>
						<?php echo get_field('manifesto_4_declaration_form_embed'); ?>
					<?php } ?>
				</div>
			</div>

			<?php if( get_field('declaration_form_support_text') ) { ?>
				<div class="extra-form-line animateRise relative max-w-380 my-0 mx-auto pt-11 font-poppins text-white text-lg text-center font-medium"><?php echo get_field('declaration_form_support_text'); ?></div>
			<?php } ?>

		</div>
	</div>

	<?php /************************
	*
	*      Section Signatures
	* 
	* *************************/ ?>

	<div class="manifesto-signature-wrap  x840:pt-24 x840:px-0 x840:pb-30 relative text-center bg-primary_gray pt-20 px-0 pb-28">
		<div class="relative max-w-1210 mx-auto px-5 py-0">

			<?php $colCount = 0; ?>

			<?php if( have_rows('manifesto_4_signatures') ): ?>
				<div class="signature-cols-outer-wrap  ">
					<div class="signature-cols  x840:max-w-950 x840:ml-auto x840:mr-auto x840:grid-cols-3 x840:gap-x-16 x840:mb-16 relative grid ">
					    <?php while( have_rows('manifesto_4_signatures') ) : the_row(); ?>

					    	<?php if($colCount == 3) { ?>
					    		</div>
					    		</div>
					    		<div class="signature-cols-outer-wrap hidden" id="additional-signatures">
					    		<div class="signature-cols relative x840:max-w-950 x840:mx-auto x840:mb-16 x840:grid-cols-3 x840:gap-x-16 grid grid-cols-1 gap-y-14 mb-16">
					    	<?php } ?>

					    	<div class="relative  col col<?php echo $colCount; if($colCount < 3) { echo ' animateRise'; } ?>">
								<?php if( get_sub_field('signature_text') ) { ?>

									<div class="relaive mb-2.5 text-40 text-primary_white leading-10 font-yellowtail  line1 "><?php the_sub_field('signature_text'); ?></div>
								
									<?php } ?>

								<?php if( get_sub_field('country') ) { ?>
									<div class="relaive mb-2.5 font-medium text-base text-white leading-6 font-poppins  line2"><?php the_sub_field('country'); ?></div>
								<?php } ?>
								<div class="mt-1.5 relative font-medium font-poppins text-white leading-6 text-base     line2 line3"><?php if( get_sub_field('company') ) { ?><?php the_sub_field('company'); ?><?php } ?><?php if( get_sub_field('company') && get_sub_field('title') ) { ?> <span>|</span> <?php } ?><?php if( get_sub_field('title') ) { ?><?php the_sub_field('title'); ?><?php } ?></div>
							</div>

					    	<?php $colCount++; ?>
					    <?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if( get_field('manifesto_4_signature_button_text') ) { ?>
				<div class="signature-button-wrap">
					<a href="#" class="btn animateRise" id="show-more-signatures"><?php echo get_field('manifesto_4_signature_button_text'); ?></a>
				</div>
			<?php } ?>

		</div>
	</div>

</main>

<?php get_footer(); ?>