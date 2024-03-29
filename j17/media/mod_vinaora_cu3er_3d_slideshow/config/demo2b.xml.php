﻿<?php
/**
 * @version		$Id: demo2b.xml.php 2011-07-20 vinaora $
 * @package		Vinaora Cu3er 3D Slideshow
 * @subpackage	mod_vinaora_cu3er_3d_slideshow
 * @copyright	Copyright (C) 2010 - 2011 VINAORA. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @website		http://vinaora.com
 * @twitter		http://twitter.com/vinaora
 * @facebook	http://facebook.com/vinaora
 */
 
$script		= $_SERVER['SCRIPT_NAME'];
$base_path	= substr($script, 0 , strpos($script, 'config/'));
header ("content-type: text/xml");
header ("Cache-Control: max-age=86400, must-revalidate");
?>
<data>
	<settings>
		<general slide_panel_width="300" slide_panel_height="250" />
		<prev_button>
			<defaults round_corners="25,0,25,0"/>
			<tweenIn x="227" y="219" width="34" height="34" />
			<tweenOver tint="0xFFFFFF" />
			<tweenOut tint="0x000000" />
		</prev_button>
		<prev_symbol>
			<defaults type="6" />
			<tweenIn x="227" y="219" scaleX=".4" scaleY=".4" />
			<tweenOver   tint="0x000000" scaleX=".5" scaleY=".5"/>
		</prev_symbol>
		<next_button>
			<defaults round_corners="0,25,0,25"/>
			<tweenIn x="262" y="219" width="34" height="34" />
			<tweenOver tint="0xFFFFFF" />
			<tweenOut tint="0x000000" />
		</next_button>
		<next_symbol>
			<defaults type="6" />
			<tweenIn x="262" y="219"  scaleX=".4" scaleY=".4" />
			<tweenOver   tint="0x000000" scaleX=".5" scaleY=".5"/>
		</next_symbol>
		<description>
			<defaults
				round_corners="0, 20, 0, 20"
				heading_font="Arial"
				heading_text_size="11"
				heading_text_align="left"
				heading_text_color="0xFFFFFF"
				heading_text_margin="7, 0, 0, 20"
			/>
			<tweenIn x="0" y="202" width="200" height="34" />
			<tweenOut x="-210" y="202" />
		</description>
		<transitions light_position="0,0,-100000" shader="flat" />
	</settings>
	<slides>
		<slide>
			<url><?php echo $base_path; ?>images/demo2/slide_1.jpg</url>
			<description>
				<heading>CU3ER - flash 3D image slider!</heading>
			</description>
		</slide>
		<transition num="3" slicing="vertical" direction="down" delay="0.03" z_multiplier="3" />
		<slide>
			<url><?php echo $base_path; ?>images/demo2/slide_2.jpg</url>
			<description>
				<heading>Customizable via XML ...</heading>
			</description>
		</slide>
		<transition num="3" direction="right" />
		<slide>
			<url><?php echo $base_path; ?>images/demo2/slide_3.jpg</url>
			<description>
				<heading>Real 3D transitions ...</heading>
			</description>
		</slide>
		<slide>
			<url><?php echo $base_path; ?>images/demo2/slide_4.jpg</url>
			<description>
				<heading>Flat &amp; phong shading ...</heading>
			</description>
		</slide>
		<transition num="6" slicing="vertical" direction="up" delay="0.02" z_multiplier="4" />
		<slide>
       		<url><?php echo $base_path; ?>images/demo2/slide_5.jpg</url>
			<description>
				<heading>Unique look &amp; feel ...</heading>
			</description>
        </slide>
	</slides>
</data>