<?php $x=0;$dbe='header';?>
<div class="header edx">
	<?=edx($dbe)?>
	<h1 <?=dbe("$dbe.1",5,'midle')?>><?=data("$dbe.1",5)?></h1>
	<div class="midle" uk-grig>
		<div class="info">
			<h2 <?=dbe("$dbe.2",4,'')?>><?=data("$dbe.2",4)?></h2>
			<ul class="uk-list">
				<li <?=dbe("$dbe.3",1,'')?>><?=data("$dbe.3",1)?></li>
				<li <?=dbe("$dbe.4",1,'')?>><?=data("$dbe.4",1)?></li>
				<li <?=dbe("$dbe.5",1,'')?>><?=data("$dbe.5",1)?></li>
				<li <?=dbe("$dbe.6",1,'')?>><?=data("$dbe.6",1)?></li>
				<li <?=dbe("$dbe.7",1,'')?>><?=data("$dbe.7",1)?></li>
				<li <?=dbe("$dbe.8",1,'')?>><?=data("$dbe.8",1)?></li>
			</ul>
			<div class="link">
				<a <?=dbe("$dbe.10",2,'pulsar zzz')?> href="#oferta"><?=data("$dbe.10",2)?></a>
				<span <?=dbe("$dbe.11",1,'')?>><?=data("$dbe.11",1)?></span>
			</div>
		</div>
		<div class="produto">
			<img <?=dbe("$dbe.12",3,'')?>>
		</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
		<path class="elementor-shape-fill" fill="#FFFFFF" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
		c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
		c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
	</svg>
</div>