<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stalker-by-serhii.D
 */

get_header();
$properties = function_exists('get_fields') ? get_fields() : [];
?>
<main id="primary" class="site-main">
	<div class="page-portfolio-single">
		<div class="container">
			<div class="breadcrumb">
				<ul>
					<li class="opacity-0">
						<a href="/">Home</a>
					</li>
					<li class="opacity-0">
						<a href="/portfolio">Works</a>
					</li>
					<li class="opacity-0">
						<?php the_title('<span>', '</span>'); ?>
					</li>
				</ul>
			</div>
			<div class="title-holder opacity-0">
				<?php the_title('<h1 style="background:' . $properties["gradient_color"] . ';background-clip: text;" class="h1 text-gradient">', '</h1>'); ?>
				<?php
				$portfolio_tags_ids = get_post_meta(get_the_ID(), 'portfolio_tags', true);

				if (!empty($portfolio_tags_ids) && is_array($portfolio_tags_ids)) {
					echo '<ul class="page-tags">';

					foreach ($portfolio_tags_ids as $tag_id) {

						$term = get_term($tag_id);


						if ($term && !is_wp_error($term)) {

							echo '<li><span>' . esc_html($term->name) . '</span></li>';
						}
					}

					echo '</ul>';
				}
				?>
			</div>
			<div class="two-text-blocks">
				<div class="row">
					<div class="col-6">
						<div class="block-content opacity-0">
							<span class="block-title">
								<?= $properties['intro_blocks']['left_block']['title'] ?>
							</span>
							<div class="text-holder">
								<?= $properties['intro_blocks']['left_block']['text'] ?>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="block-content opacity-0">
							<span class="block-title">
								<?= $properties['intro_blocks']['right_block']['title'] ?>
							</span>
							<div class="text-holder">
								<?= $properties['intro_blocks']['right_block']['text'] ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-logo block-content">
				<div class="icon-holder">
					<img src="<?= $properties['logo']['url'] ?>" alt="<?= $properties['logo']['alt'] ?>">
				</div>
				<svg width="1424" height="318" viewBox="0 0 1424 318" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_14_3)">
						<path d="M2182.4 862.119L2165.27 856.943L2148.99 848.792L2135.25 839.241L2122.62 828.839L2108.59 817.881L2098.21 808.895L2085.58 799.058L2074.08 791.471L2062.58 784.45L2051.07 777.706L2037.6 771.519L2020.49 764.219L2000.85 758.319L1985.69 754.66L1971.11 749.889L1963.53 746.231L1954.55 740.33L1948.38 731.901L1943.89 721.507L1941.92 714.486L1940.24 698.183L1940.24 632.998L1937.16 609.674L1934.35 592.259L1929.3 566.971L1922.01 541.682L1915.55 522.008L1906.86 495.877L1894.78 468.624L1884.68 447.551L1874.03 429.006L1861.68 411.026L1846.25 393.881L1833.9 379.837L1819.59 368.314L1810.33 361.006L1792.93 349.205L1776.94 340.219L1762.92 334.032L1739.62 325.602L1720.54 319.988L1700.06 314.088L1681.27 309.586L1644.78 304.815L1615.61 302.565L1554.16 304.251L1518.24 307.622L1484.57 312.958L1447.26 320.831L1413.03 329.261L1376.83 338.533L1324.08 353.419L1301.07 359.885L1277.23 365.221L1247.48 371.121L1214.37 378.994L1190.53 385.738L1170.04 392.481L1150.12 402.032L1131.32 413.555L1117.29 426.199L1101.3 442.493L1086.43 465.817L1076.05 488.855L1068.19 511.614L1058.09 545.897L1048.83 576.243L1040.13 596.187L1030.87 608.275L1023.86 614.175L1016.28 619.789L1008.99 622.605L996.924 624.004L982.328 625.133L966.334 624.291L953.994 622.883L931.545 618.668L913.026 616.704L892.546 615.575L873.464 616.139L850.173 620.919L829.129 629.626L810.611 640.863L789.289 655.758L773.86 669.523L757.303 685.261L741.309 703.805L723.355 723.05L711.284 738.931L695.291 757.475L684.912 770.963L675.93 784.45L668.355 797.094L660.501 813.953L654.609 827.153L650.964 840.362L647.597 859.472L647.597 868.744L647.597 901.332L650.678 953.881L656.292 991.249L661.907 1024.12L664.432 1032.55" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.41 802.624L2160.78 799.058L2139.45 794L2118.16 785.293L2101.32 777.42L2088.41 768.434L2074.94 757.754L2062.6 745.388L2043.24 725.157L2032.3 709.706L2021.36 691.439L2013.78 676.831L2003.39 652.108L1996.66 635.805L1985.44 600.402L1977.59 573.714L1971.13 552.354L1962.71 523.694L1956.82 505.149L1951.49 489.133L1946.15 474.803L1939.14 460.473L1931.29 446.143L1922.87 432.943L1907.16 411.026L1888.36 388.545L1868.41 368.879L1853.54 356.235L1831.37 338.533L1814.82 327.575L1795.77 317.173L1774.72 306.501L1742.74 293.014L1722.25 285.706L1704.86 280.648L1684.09 273.905L1666.14 269.69L1644.81 264.632L1623.21 260.696L1605.25 257.61L1566.81 253.109L1533.7 251.423L1504.77 251.423L1479.8 255.082L1452.33 263.224L1429.88 272.497L1410.25 283.742L1393.12 293.014L1372.64 305.372L1354.4 314.644L1342.91 321.109L1331.96 326.445L1319.05 330.946L1308.95 333.753L1298.85 335.439L1256.76 335.439C1256.76 335.439 1226.46 335.718 1225.62 335.439C1224.77 335.161 1203.45 334.032 1203.45 334.032L1188.3 330.946L1173.43 325.889L1158 316.052L1148.46 304.529L1137.8 289.356L1129.1 272.219L1122.08 251.423L1118.44 237.093L1114.79 220.234L1112.27 205.061L1112.27 143.813L1114.51 125.547L1119 108.123L1127.42 89.8647L1141.73 66.8187L1152.95 54.4611L1172.59 35.9164L1185.5 24.9581L1202.05 12.0274L1216.92 -1.45964L1230.67 -14.1038L1242.45 -26.7479L1252 -41.078L1259.57 -53.4355L1264.06 -67.4873L1265.46 -86.875L1263.78 -101.205L1260.13 -115.535L1253.12 -129.587L1246.66 -137.73L1238.24 -143.917L1228.14 -148.41L1218.33 -150.661L1189.98 -150.661L1174.83 -148.688L1154.35 -142.231L1139.48 -133.237L1120.12 -114.97L1103.56 -96.1474L1089.82 -74.5091L1074.94 -47.8215L1060.63 -16.3461L1046.32 13.1569L1037.35 41.5304L1031.17 70.7553L1027.25 90.143L1021.91 123.582L1016.86 169.38L1011.26 215.177L1006.48 237.658L995.263 260.982L985.439 276.711L970.01 289.92L955.414 300.036L937.46 309.873L919.783 317.738L904.909 323.638L886.677 329.261L855.532 335.439L834.488 340.497L809.236 346.676L790.431 353.141L767.426 364.664L745.819 382.644L726.744 403.996L709.909 428.163L693.63 455.702L678.201 483.797L661.366 522.851L653.226 550.954L645.372 583.264L638.638 618.668L635.835 638.056L632.746 678.517L629.943 716.449L626.854 764.497L621.803 801.022L614.505 823.225L604.691 844.299L593.184 861.436L580.28 875.766L570.457 883.917L555.027 892.06L531.879 905.269L507.889 913.698L486.846 918.756L464.96 921.284L440.549 921.284L419.085 919.177L397.62 914.119L376.155 904.426L359.32 890.939L337.856 872.815L323.546 856.799L309.657 842.048L289.034 816.76L266.728 790.207L251.997 772.084L233.479 751.431L217.065 732.887L196.863 710.549L176.661 690.74L154.354 673.459L137.098 660.815L118.58 649.435L103.849 642.692L83.6471 635.527L68.4956 632.577L37.3509 632.155L-0.107006 634.684L-27.8848 640.163L-63.6591 649.435L-91.016 657.865L-119.215 669.666L-146.572 683.153L-175.612 702.962L-197.918 721.928L-226.959 750.589L-248.423 779.249L-263.154 801.165L-275.359 825.61L-289.248 852.585L-304.4 888.831L-314.501 914.541L-325.023 952.473L-330.073 982.398L-333.44 1014.01L-333.44 1032.55" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.33 738.096L2164.14 730.215L2147.87 721.229L2130.2 709.984L2108.59 692.004L2092.6 675.145L2080.81 663.066L2066.79 641.428L2053.32 619.09L2043.22 595.487L2033.96 572.728L2027.22 548.283L2017.97 516.672L2011.23 494.756L2005.34 473.261L1998.61 449.237L1991.87 430.271L1984.3 407.09L1976.72 390.652L1963.25 372.95L1949.36 354.406L1935.47 338.811L1920.74 327.01L1902.22 313.945L1885.39 302.565L1857.61 286.127L1836.57 276.012L1804.16 263.368L1776.38 252.41L1749.45 243.559L1725.04 235.129L1698.1 226.7L1677.06 220.799L1646.33 213.634L1624.45 209.841L1587.83 205.205L1558.58 203.098L1537.54 203.098L1503.24 203.098L1473.56 205.837L1452.1 211.316L1428.74 220.589L1400.54 234.286L1374.03 247.352L1350.46 257.889L1328.99 267.583L1313.84 273.062L1295.32 277.698L1279.33 279.384L1240.19 279.384L1227.14 276.855L1217.46 272.219L1205.26 263.789L1196 251.567L1188.42 236.815L1186.32 224.593L1183.79 197.618L1185.9 159.264L1190.95 140.298L1201.47 120.911L1211.99 106.581L1224.2 93.515L1243.98 73.2843L1268.39 51.3678L1285.64 35.3519L1302.48 16.8072L1315.1 1.63422L1326.05 -17.332L1331.94 -29.5547L1336.57 -46.4135L1340.78 -61.5865L1342.04 -75.0736L1341.62 -109.634L1339.51 -127.757L1334.46 -146.302L1323.52 -164.847L1314.26 -177.07L1293.22 -197.722L1273.86 -209.944L1259.13 -217.531L1239.77 -224.274L1218.3 -228.911L1177.9 -228.911L1151.38 -223.431L1125.29 -210.366L1102.14 -197.3L1078.57 -174.541L1059.21 -153.046L1042.38 -131.129L1025.12 -106.684L1012.07 -82.6601L994.818 -38.8271L981.35 -5.10935L969.145 36.6163L961.148 71.1769L951.047 105.738L940.525 140.298L930.424 171.066L915.694 203.519L900.542 224.171L886.233 237.658L869.398 250.302L851.3 261.26L823.943 273.483L799.532 281.913L779.33 286.127L749.027 295.4L715.778 309.308L680.425 329.539L656.856 348.927L640.441 370.422L621.923 405.825L607.613 445.865L595.408 491.384L582.782 544.911L574.785 601.388L569.734 644.378L567.209 729.094L564.684 781.356L560.475 803.694L549.112 831.933L537.327 851.742L525.543 863.964L511.233 875.766L499.448 880.823L483.876 883.774L461.99 883.774L433.792 877.451L408.539 866.493L380.762 850.477L345.829 821.396L317.209 790.207L299.954 767.447L286.906 750.167L273.438 727.408L264.179 713.078L250.29 690.74L232.614 663.344L213.253 638.056L191.789 616.561L177.9 603.495L161.907 592.115L142.546 582L125.711 575.257L106.772 569.777L84.4655 565.984L56.6878 563.455L28.91 563.034L2.81577 566.827L-31.696 574.414L-65.7869 583.686L-101.982 597.594L-134.389 610.66L-171.006 630.891L-199.625 649.857L-225.719 672.616L-263.177 706.334L-299.373 749.324L-316.628 778.827L-335.989 813.809L-352.403 857.642L-364.187 897.261L-377.234 949.944L-383.968 1007.69L-383.968 1032.55" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.33 689.914L2173.27 683.996L2163.17 667.559L2154.75 648.593L2147.59 627.941L2138.34 598.859L2128.66 563.455L2118.55 531.002L2104.67 487.591L2092.88 459.352L2076.89 425.634L2065.52 401.821L2049.11 374.636L2035.64 355.249L2018.39 335.439L1995.66 307.201L1969.14 281.913L1948.1 262.946L1926.21 246.088L1901.8 226.278L1868.55 200.147L1838.67 179.074L1803.32 156.736L1775.54 138.191L1745.66 121.753L1713.67 104.052L1693.47 95.2008L1672.43 85.9284L1653.49 80.8707L1632.44 78.3419L1614.77 78.3419L1587.41 80.4492L1569.31 88.8787L1542.38 105.738L1510.81 132.712L1483.03 156.736L1455.68 179.074L1435.05 192.561L1415.27 203.097L1385.39 213.213L1355.93 218.692L1315.53 218.692L1283.96 214.477L1262.07 207.734L1247.76 199.304L1238.93 189.189L1236.82 177.388L1240.19 165.165L1248.61 153.785L1259.97 142.827L1287.75 119.646L1314.26 96.0437L1334.89 78.3419L1351.3 59.7971L1373.18 32.823L1382.87 16.8071L1396.75 -13.5389L1405.17 -40.9345L1409.8 -58.6363L1411.91 -84.7675L1411.06 -114.271L1406.01 -150.66L1399.7 -170.748L1389.6 -193.086L1377.39 -213.738L1364.77 -231.861L1352.56 -246.191L1333.62 -266L1316.37 -279.909L1296.59 -292.974L1278.49 -302.247L1261.23 -308.147L1245.24 -312.784L1220.83 -316.998L1190.53 -319.527L1152.23 -316.577L1127.39 -308.99L1102.56 -298.032L1078.57 -280.33L1056.27 -257.149L1038.17 -231.44L1022.18 -203.623L1006.6 -164.426L991.03 -118.485L978.404 -72.1656L970.408 -34.6125L962.832 1.21257L952.31 44.2026L941.788 78.7633L929.583 111.217L914.852 141.563L903.488 162.636L890.862 177.809L873.606 193.825L861.822 202.676L846.67 209.841L828.573 213.634L809.212 214.899L761.233 212.37L740.61 211.105L715.357 214.056L692.209 225.014L672.428 240.187L657.697 254.095L640.021 273.483L623.606 293.714L605.93 318.58L585.307 353.563L567.63 392.481L553.32 429.849L539.011 469.889L528.489 520.044L526.384 549.968L526.384 625.412L531.014 662.501L538.169 712.513L540.694 740.052L539.011 768.29L533.118 790.207L520.071 807.066L505.341 819.288L491.452 827.718L475.879 833.618L460.307 836.147L445.576 836.147L429.583 833.618L414.432 825.189L401.805 813.809L384.97 791.471L367.714 763.233L354.246 736.68L339.937 710.97L327.31 689.897L311.738 667.559L297.007 645.221L286.065 628.783L266.704 604.338L247.344 583.686L221.671 560.926L201.469 544.068L177.058 526.366L148.439 509.085L126.132 498.549L102.142 488.433L73.9437 480.847L52.8999 477.475L22.176 477.475L-4.3391 480.847L-26.6455 486.747L-54.4232 497.284L-77.9922 509.928L-103.666 528.895L-127.235 546.175L-156.696 569.777L-181.948 592.115L-207.201 613.189L-228.245 631.312L-248.447 649.014L-269.07 666.716L-285.063 681.889L-307.79 705.491L-324.625 724.879L-342.723 749.324L-358.295 770.398L-370.5 793.579L-380.601 815.917L-394.069 850.056L-406.275 892.203L-418.059 940.672L-424.793 979.447L-428.16 1006.84L-428.16 1032.55" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.15 561.171L2174.74 528.052L2168.85 508.032L2157.27 474.947L2143.81 446.286L2129.5 415.519L2121.5 401.821L2109.72 378.851L2093.72 352.72L2083.62 335.44L2069.31 311.837L2056.26 292.871L2041.53 273.905L2020.91 249.038L1999.87 226.7L1980.51 205.626L1967.04 191.718L1949.36 176.966L1931.26 160.95L1909.8 143.249L1886.65 125.547L1861.82 107.845L1840.36 92.2505L1816.37 74.5487L1792.8 56.8469L1762.49 37.8807L1736.82 24.3936L1717.04 18.493L1694.73 13.0139L1670.32 10.4851L1637.07 13.4354L1620.24 18.493L1595.41 27.7654L1563.84 45.0457L1540.69 63.169L1522.17 80.0278L1500.29 104.052L1477.98 127.233L1457.78 144.091L1440.52 155.471L1418.22 168.115L1392.97 178.652L1366.45 184.131L1333.2 186.239L1300.37 185.817L1288.17 183.288L1281.85 179.917L1279.33 173.173L1283.12 166.008L1294.48 159.264L1309.21 150.835L1329.83 136.926L1355.51 117.96L1374.87 101.523L1392.54 81.7137L1410.64 58.5328L1424.11 40.4095L1440.52 10.4851L1453.15 -14.8032L1458.62 -35.4553L1465.36 -54.0001L1470.41 -72.1655L1473.35 -88.9822L1475.88 -129.443L1474.19 -160.632L1471.67 -182.549L1467.46 -198.986L1460.73 -215.845L1451.89 -233.968L1441.79 -249.141L1430 -265.157L1411.91 -286.652L1396.33 -300.982L1378.66 -315.734L1360.14 -329.221L1344.57 -338.072L1326.05 -346.923L1310.47 -353.245L1283.12 -361.674L1263.76 -366.31L1244.4 -368.418L1205.68 -368.418L1162.75 -366.31L1132.86 -360.831L1108.03 -352.823L1075.21 -335.964L1049.95 -314.891L1031.85 -291.71L1015.44 -263.05L1000.29 -223.432L988.505 -192.243L976.299 -154.31L961.148 -112.163L948.101 -75.9166L934.633 -28.7118L924.742 5.42735L911.906 42.5168L899.49 81.2922L885.39 120.489L871.081 143.248L860.559 153.785L848.353 161.793L831.098 168.115L815.525 171.066L786.064 173.594L753.236 172.33L725.879 172.751L698.101 176.966L664.431 189.61L640.862 204.362L620.239 218.692L588.673 243.98L564.684 273.483L540.694 308.044L527.226 331.646L515.441 361.006L508.286 383.487L501.131 420.577L497.764 460.616L500.29 533.109L505.34 586.215L511.232 635.527L513.337 696.784L509.549 732.044L504.919 755.646L497.764 772.505L485.138 786.414L472.091 797.372L463.253 802.43L452.731 805.38L443.892 805.38L434.212 802.008L423.69 789.364L412.327 772.084L394.229 729.094L384.128 700.434L372.344 662.923L362.243 637.213L352.563 615.296L342.041 597.173L324.364 568.513L305.845 543.225L290.694 525.523L269.65 504.028L251.132 488.012L225.458 469.046L206.098 455.137L180.004 440.95L158.118 429.427L139.179 422.262L115.189 415.519L91.1992 411.304L55.4248 409.197L30.1723 410.461L-5.6021 417.205L-39.2721 426.477L-73.7839 437.435L-100.299 450.922L-126.393 464.41L-159.642 481.69L-186.999 498.97L-220.248 519.201L-255.602 545.753L-288.009 572.728L-312.42 598.859L-333.464 624.99L-358.295 659.551L-380.181 703.805L-393.649 737.523L-407.538 776.72L-426.056 835.726L-442.05 882.509L-453.413 924.656L-464.356 964.274L-470.669 993.356L-473.615 1016.54L-473.615 1032.55" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.15 319.837L2154.61 285.428L2129.92 256.768L2101.85 230.915L2076.6 208.998L2055.84 189.332L2035.08 168.537L2014.31 147.741L1995.79 126.954L1957.07 85.9284L1927.9 57.833L1901.52 31.9801L1872.34 10.6282L1843.16 -4.54473L1810.05 -17.4754L1775.82 -27.5908L1742.15 -32.6484L1716.9 -36.0202L1692.21 -36.0202L1660.22 -30.3977L1636.09 -21.1254L1588.95 7.25644L1565.95 22.4294L1537.33 42.66L1510.95 60.0753L1494.67 69.6342L1480.64 76.3777L1472.51 77.4989L1469.14 74.6919L1469.14 68.2265L1472.51 61.2048L1481.77 49.4036L1499.45 27.2005L1511.51 8.09938L1517.97 -6.51722L1522.6 -27.8689L1523.86 -57.7934L1523.02 -93.197L1520.49 -121.857L1517.97 -150.66L1517.97 -192.243L1518.39 -240.29L1516.28 -267.686L1513.34 -283.702L1510.39 -292.974L1501.55 -305.197L1486.82 -319.527L1469.14 -333.014L1443.47 -347.344L1411.48 -362.096L1374.87 -375.583L1336.99 -392.02L1311.74 -402.978L1274.7 -416.044L1255.76 -421.945L1239.77 -427.424L1224.19 -431.217L1203.99 -433.746L1176.64 -433.746L1143.39 -430.796L1118.98 -423.209L1097.51 -413.094L1068.47 -393.706L1047.85 -377.269L1021.75 -352.402L1000.29 -326.692L980.087 -296.346L962.832 -263.893L951.889 -235.654L939.263 -200.251L930.845 -162.74L922.428 -127.336L915.694 -72.1657L909.38 -32.5052L903.488 -3.42364L890.862 31.98L874.027 61.4829L861.401 80.4492L849.195 92.6718L830.677 109.109L812.579 120.91L799.111 128.918L783.118 134.397L758.707 138.612L732.192 142.405L699.785 145.356L673.269 148.728L650.963 153.364L619.818 166.008L588.253 187.081L558.791 213.634L531.014 243.98L513.337 267.582L495.239 302.565L473.775 356.513L463.674 389.388L458.202 421.419L454.414 501.078L454.414 575.256L451.047 603.917L446.839 615.296L442.209 619.09L430.004 621.197L422.007 621.197L409.381 614.875L393.388 602.231L383.287 591.272L373.606 575.678L363.926 558.398L353.404 525.944L344.566 504.449L334.465 482.533L324.364 467.781L313 454.294L290.273 428.584L268.388 411.304L249.448 399.081L227.563 386.859L201.469 375.058L176.216 367.893L156.435 363.256L131.603 359.885L104.246 356.513L86.9906 356.513L40.2734 356.513L8.28693 359.042L-13.5986 362.835L-43.4807 371.264L-80.5177 385.173L-107.454 395.71L-130.181 404.139L-206.359 440.95L-245.501 460.616L-297.268 492.648L-323.363 514.143L-347.773 539.431L-369.238 565.141L-391.123 598.016L-411.746 636.791L-423.952 665.451L-436.157 702.119L-447.942 739.63L-457.622 777.141L-465.618 811.28L-476.14 860.171L-486.241 900.211L-496.763 936.036L-508.969 967.225L-518.649 982.819L-526.224 992.935L-533.8 1000.52L-541.797 1003.47L-553.16 1003.47L-567.891 996.728L-579.676 985.769L-591.881 972.282L-608.295 955.002L-622.605 938.565L-638.598 925.921L-658.379 912.855L-676.898 904.847L-695.416 901.897L-724.877 899.789L-747.605 900.632L-763.177 901.475" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.15 116.248L2153.49 85.084L2131.18 58.1098L2102.98 28.042L2079.41 2.75383L2045.74 -24.7769L2024.98 -39.3934L2002.53 -51.751L1981.21 -61.3099L1954.83 -69.1746L1911.62 -77.604L1866.16 -80.9758L1805 -80.9758L1741.58 -80.9758L1701.18 -84.3476L1663.59 -89.4052L1643.39 -97.27L1625.99 -112.443L1615.89 -127.616L1610.27 -152.904L1610.27 -184.38L1618.13 -228.912L1624.87 -266.423L1628.23 -300.141L1627.67 -328.801L1623.74 -354.089L1610.27 -386.686L1595.68 -410.288L1578.85 -430.519L1546.86 -461.986L1518.81 -479.966L1491.87 -490.646L1462.12 -500.761L1432.95 -506.384L1399.28 -510.877L1331.37 -510.877L1248.32 -507.505L1155.73 -501.883L1088.95 -496.268L1030.03 -484.467L994.111 -470.98L967.739 -456.364L945.853 -436.133L929.582 -413.66L913.867 -383.314L902.082 -341.723L894.229 -295.648L889.178 -233.827L881.88 -154.59L871.215 -85.4688L854.666 -37.7076L839.793 -3.42515L817.907 22.4279L794.902 41.529L762.352 58.9527L731.485 68.5032L688.278 80.8692L653.488 89.8633L610.273 102.786L576.047 117.116L550.231 132.01L518.244 159.541L494.675 186.515L475.037 220.798L459.322 261.259L446.418 305.657L435.189 341.06L421.721 364.663L404.33 378.706L388.615 383.764L371.215 383.764L344.844 378.706L308.926 361.004L278.623 340.495L246.081 319.144L223.632 309.028L197.259 296.098L178.741 290.484L155.172 284.861L121.502 274.746L92.8824 269.688L59.7679 266.316L-6.44412 265.752L-45.1646 269.688L-96.7976 278.682L-145.055 293.855L-193.313 311.271L-232.033 332.066L-275.249 356.511L-311.158 378.15L-342.024 401.819L-383.969 440.949L-420.03 482.11L-436.301 508.519L-451.452 541.68L-465.484 575.955L-473.616 613.609L-480.072 676.551L-491.856 741.736L-504.205 791.748L-519.912 835.581L-531.696 858.627L-540.678 870.428L-552.462 879.414L-563.683 882.086L-570.417 882.086L-582.622 874.921L-596.511 861.855L-611.242 850.054L-631.444 832.352L-647.437 822.237L-657.538 816.758L-666.94 813.386L-680.131 810.857L-693.034 810.579L-701.174 811.7L-707.908 811.136L-715.198 807.207L-721.932 801.585L-729.087 791.891L-731.191 780.09L-731.191 762.81L-728.245 733.307L-721.511 699.589L-710.568 671.35L-700.888 641.847L-691.629 611.501L-684.053 586.213L-675.215 555.024L-671.006 535.637L-666.797 504.026L-663.009 473.68L-663.009 430.269L-664.272 378.006L-667.639 349.346L-673.952 308.042L-679.844 266.738L-688.262 225.012L-695.416 187.923L-704.676 152.941L-714.777 117.958L-726.14 80.4476L-739.608 50.5231L-752.235 24.8133L-762.251 8.99963" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2182.13 -97.3524L2159.66 -115.813L2114.79 -150.66L2081.12 -169.761L2031.17 -197.865L1994.7 -216.41L1943.07 -234.39L1905.47 -245.626L1868.44 -260.243L1833.08 -273.165L1801.1 -292.274L1777.53 -313.061L1759.01 -336.108L1749.47 -368.417L1742.74 -395.67L1739.37 -423.209L1730.95 -470.978L1723.65 -503.567L1714.12 -533.912L1696.15 -559.765L1677.08 -578.31L1650.14 -596.29L1618.71 -610.342L1577.19 -622.708L1514.34 -632.823L1455.98 -638.437L1385.27 -643.495L1329.15 -647.431L1264.62 -651.924L1198.97 -654.74L1127.7 -654.74L1086.73 -646.867L1048.57 -636.195L1012.65 -624.394L985.718 -610.342L955.415 -588.426L927.923 -568.76L895.373 -535.042L877.418 -506.382L861.703 -470.978L848.799 -433.746L841.501 -384.998L841.501 -214.159L837.856 -163.582L831.122 -101.626L823.125 -59.4791L810.078 -28.7117L790.297 -3.00193L776.408 11.3281L748.209 33.6661L731.795 42.0955L704.438 53.8967L680.028 60.2188L643.411 65.2764L613.529 65.2764L572.284 61.4832L539.034 54.3181L518.832 51.7893L497.368 52.2108L474.641 58.5328L456.122 68.6482L434.657 85.0855L404.91 114.589L388.075 139.312L367.317 177.531L354.969 204.505L339.253 237.658L325.23 253.396L305.028 269.125L283.698 273.062L262.94 273.062L237.688 268.569L205.701 256.768L164.733 234.851L124.893 211.249L81.1223 185.606L45.2048 162.358L8.73173 144.37L-36.7228 126.39L-67.0258 115.71L-115.292 103.908L-146.714 99.4155L-200.022 101.101L-246.605 107.845L-281.394 120.211L-315.064 137.07L-348.17 157.3L-373.423 177.531L-419.441 222.485L-449.744 261.26L-473.591 296.664C-473.591 296.664 -492.951 330.382 -492.951 332.068C-492.951 333.753 -508.103 369.722 -508.103 369.722L-520.451 412.99L-526.621 440.95L-529.988 474.247L-529.988 542.803L-523.818 586.071L-517.648 615.861L-518.204 642.27L-527.75 668.123L-538.406 687.225L-551.319 700.155L-567.026 707.455L-579.938 710.271L-590.595 710.271L-597.329 705.769L-606.874 689.475L-611.925 666.994L-611.925 579.328L-606.874 530.437L-598.457 482.111L-592.278 443.901L-585.544 405.682L-581.057 373.65L-578.81 329.261L-578.254 275.869L-577.69 215.741L-581.621 166.286L-591.722 117.395L-602.379 80.8707L-618.658 33.6659L-634.929 -3.42355L-657.379 -56.8072L-684.315 -118.629L-700.586 -150.66L-722.471 -186.62L-741.554 -213.038L-758.288 -231.583L-762.497 -234.955" stroke="white" stroke-width="2" stroke-miterlimit="10" />
						<path d="M2584.94 267.626L2431.92 -31.0467L2157.29 -193.833L2126.57 -206.477L2097.32 -218.699L2076.49 -229.868L2049.2 -250.588L2030.11 -272.226L2019.74 -285.713L2011.32 -307.352L2006.83 -323.368L2004.02 -343.876L2004.02 -381.244L2007.39 -413.562L2011.04 -459.781L2010.62 -490.97L2009.36 -507.407L2004.02 -524.266L1997.99 -537.753L1988.31 -551.662L1975.27 -564.727L1962.22 -576.529L1947.91 -586.222L1931.92 -595.073L1917.61 -603.081L1897.83 -611.089L1870.89 -620.783L1849 -628.37L1823.75 -637.221L1805.23 -642.7L1780.4 -650.286L1742.52 -662.087L1714.74 -669.674L1674.34 -684.425L1642.77 -695.384L1607.42 -709.292L1572.91 -721.515L1546.39 -729.944L1518.2 -740.06L1491.26 -747.646L1459.27 -758.183L1438.23 -762.819L1413.82 -767.877L1391.09 -770.406L1371.73 -770.406L1300.18 -770.406L1255.15 -767.034L1210.12 -760.29L1159.61 -749.754L1110.37 -738.795L1062.39 -726.151L1027.46 -715.193L993.785 -704.235L963.903 -690.748L931.496 -670.938L909.61 -654.079L886.041 -633.427L864.577 -608.982L837.22 -574L814.493 -533.539L801.446 -506.564L789.661 -472.847L782.927 -445.451L778.718 -414.262L778.718 -319.853L776.193 -215.328L773.247 -178.238L765.671 -143.678L758.095 -114.596L748.415 -88.0434L740.141 -65.4273L725.267 -39.9956L713.903 -21.8723L698.752 -5.85644L680.233 4.25888L662.977 10.5809L646.143 10.5809L620.048 8.05213L596.9 3.8374L569.964 -4.59203L541.765 -12.6L513.146 -17.2362L485.789 -15.5503L452.961 -0.798815L425.604 20.2748L408.769 38.398L378.045 76.3305L354.897 107.098L330.486 135.758L305.654 159.36L287.977 172.004L270.722 177.062L252.203 177.062L230.739 172.004L206.749 161.889L189.072 150.931L157.506 126.907L126.782 103.726L101.109 86.4457L75.0147 69.5869L48.9204 59.4716L23.6681 53.571L8.0956 49.3563L-19.6822 47.6704L-91.2308 51.0421L-147.207 61.1574L-185.507 71.6942L-222.123 80.5451L-250.322 87.2887L-271.366 91.5034L-305.877 97.404L-343.335 100.354L-371.534 99.5113L-400.574 95.2966L-421.618 85.1813L-436.769 72.5371L-449.816 56.5212L-460.759 38.398L-472.123 4.68024L-478.857 -23.5584L-487.274 -65.4274L-496.955 -110.381L-509.16 -149.578L-530.624 -195.94L-549.985 -225.865L-570.608 -247.781L-602.173 -276.02L-627.005 -296.672L-656.045 -313.531L-684.244 -327.439L-706.971 -338.398L-722.123 -343.034L-735.591 -344.298" stroke="white" stroke-width="2" stroke-miterlimit="10" />
					</g>
					<defs>
						<clipPath id="clip0_14_3">
							<rect width="1424" height="318" fill="white" />
						</clipPath>
					</defs>
				</svg>
			</div>
		</div>
		<?php
		the_content();
		?>
	</div>
</main><!-- #main -->
<?php

get_footer();