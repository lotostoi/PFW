<?php

		
$background_shape_def = [
	'duration'			=> '2500',
	'delay'				=> '0',
	'easing'			=> 'easeOutQuad',
	'elasticity'		=> '400',
	'scaleX'			=> '0.9',
	'scaleY'			=> '0.9',
	'translateX'		=> '0',
	'translateY'		=> '0',
	'rotate'			=> '0'
];

$path_def = [
	'duration'			=> '1500',
	'delay'				=> '0',
	'easing'			=> 'easeOutQuad',
	'elasticity'		=> '400',
	'scaleX'			=> '0.9',
	'scaleY'			=> '0.9',
	'translateX'		=> '0',
	'translateY'		=> '0',
	'rotate'			=> '0',
];

$image_def = [
	'duration'			=> '2000',
	'delay'				=> '0',
	'easing'			=> 'easeOutElastic',
	'elasticity'		=> '400',
	'scaleX'			=> '1.1',
	'scaleY'			=> '1.1',
	'translateX'		=> '0',
	'translateY'		=> '0',
	'rotate'			=> '0',
];

$background_shapes_array = [];
$foreground_shapes_array = [];

// Organic 1

$foreground_shapes_array[] = [ 
	'path-start' => 'm 442.47634,210.55411 c 0,-124.559998 -124.88,-155.139998 -200.56,-155.139998 -75.68001,0 -172.790004,64.579998 -162.720004,188.649998 10.73,132.33 135.000004,172.62 210.110004,163.2 89.41,-11.2 153.17,-72.18 153.17,-196.71 z', 
	'path-end' => 'm 442.47634,210.55411 c 0,-124.559998 -65.55797,-182.682371 -141.23797,-182.682371 -75.68001,0 -232.112034,92.122371 -222.042034,216.192371 10.73,132.33 135.000004,172.62 210.110004,163.2 89.41,-11.2 153.17,-72.18 153.17,-196.71 z',
	'path-duration' 	=> '1700',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutBack',
	'path-elasticity' 	=> '1500',
	'path-scaleX' 		=> '1.1',
	'path-scaleY' 		=> '1.1',
	'path-translateX' 	=> $path_def['translateX'],
	'path-translateY'	=> '-20',
	'path-rotate'		=> '15',
	'image-duration' 	=> $image_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeInOutQuart',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '40',
	'image-rotate'		=> $image_def['rotate']
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 100.82372,231.10236 C 116.77703,170.59494 118.47352,92.938469 172.4596,69.228584 256.45315,32.348504 350.37245,115.07463 415.93655,186.0165 461.68916,235.51213 486.7238,357.98451 351.1669,406.80256 236.0993,448.28662 138.5774,460.71563 94.292268,412.32431 56.038189,370.51972 76.107769,324.82927 100.82372,231.10236 Z',
	'deco-duration' 	=> '3000',
	'deco-delay' 		=> $background_shape_def['delay'],
	'deco-easing' 		=> 'easeInOutBack',
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '0.8',
	'deco-scaleY' 		=> '1',
	'deco-translateX' 	=> $background_shape_def['translateX'],
	'deco-translateY' 	=> '-10',
	'deco-rotate' 		=> '-20'
];

// Organic 2

$foreground_shapes_array[] = [
	'path-start' => 'm 442.47634,234.91852 c 0,-124.56 -114.28678,-165.733222 -189.96678,-165.733222 -75.68001,0 -192.917122,48.690172 -182.847122,172.760172 10.73,132.33 109.576272,199.10305 184.686272,189.68305 89.41,-11.2 188.12763,-72.18 188.12763,-196.71 z',
	'path-end' => 'm 468.95939,210.55411 c 0,-124.559998 -161.95627,-161.49593 -237.63627,-161.49593 -75.68001,0 -154.78153,91.06305 -144.71153,215.13305 10.73,132.33 130.76272,194.86576 205.87272,185.44576 89.41,-11.2 176.47508,-114.55288 176.47508,-239.08288 z',
	'path-duration' 	=> '2500',
	'path-delay' 		=> $path_def['delay'],
	'path-rotate'		=> '10',
	'path-easing' 		=> 'easeOutElastic',
	'path-elasticity' 	=> '300',
	'path-scaleX' 		=> '1.1',
	'path-scaleY' 		=> '1.1',
	'path-translateX' 	=> '0',
	'path-translateY' 	=> $path_def['translateY'],
	'image-duration' 	=> $image_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> $image_def['easing'],
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> '5',
	'image-translateY'	=> '30',
	'image-rotate'		=> '-10'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 120.94888,257.86469 C 115.24533,195.54996 54.500245,114.24882 97.121314,73.504486 163.4357,10.121066 312.94334,31.017127 398.81699,75.256435 458.73888,106.1188 507.44242,305.51353 396.75736,397.75068 302.81757,476.08838 196.72882,458.8176 138.5636,428.49104 88.318515,402.29124 129.77998,354.39253 120.94888,257.86469 Z',
	'deco-duration' 	=> '1500',
	'deco-delay' 		=> '500',
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '1.1',
	'deco-scaleY' 		=> '1',
	'deco-translateX' 	=> $background_shape_def['translateX'],
	'deco-translateY' 	=> '-20',
	'deco-rotate' 		=> '20'
];

// Organic 3

$foreground_shapes_array[] = [ 
	'path-start' => 'm 468.95939,210.55411 c 0,-124.559998 -161.95627,-161.49593 -237.63627,-161.49593 -75.68001,0 -154.78153,91.06305 -144.71153,215.13305 10.73,132.33 130.76272,194.86576 205.87272,185.44576 89.41,-11.2 176.47508,-114.55288 176.47508,-239.08288 z',
	'path-end' => 'm 458.36617,210.55411 c 0,-124.559998 -145.00712,-148.784066 -220.68712,-148.784066 -75.68001,0 -195.035765,66.698646 -184.965765,190.768646 10.73,132.33 150.889835,184.27254 225.999835,174.85254 89.41,-11.2 179.65305,-92.30712 179.65305,-216.83712 z',
	'path-duration' 	=> '1700',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutBack',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1.1',
	'path-scaleY' 		=> '1.1',
	'path-translateX' 	=> $path_def['translateX'],
	'path-translateY'	=> '-20',
	'path-rotate'		=> $path_def['rotate'],
	'image-duration' 	=> $image_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeInOutQuart',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '40',
	'image-rotate'		=> $image_def['rotate']
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 44.545393,268.35144 C 38.841843,206.03671 69.481321,123.98652 112.10239,83.242185 178.41678,19.858765 296.14405,66.08047 380.8397,109.71291 439.93959,140.15191 481.22554,279.29665 370.54048,371.5338 276.60069,449.8715 198.22693,469.30435 140.06171,438.97779 89.816623,412.77799 53.376493,364.87928 44.545393,268.35144 Z',
	'deco-duration' 	=> $background_shape_def['duration'],
	'deco-delay' 		=> $background_shape_def['delay'],
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '0.6',
	'deco-scaleY' 		=> '1.1',
	'deco-translateX' 	=> $background_shape_def['translateX'],
	'deco-translateY' 	=> '-20',
	'deco-rotate' 		=> $background_shape_def['rotate']
];

// Organic 4

$foreground_shapes_array[] = [ 
	'path-start' => 'M 387.29505,82.572056 C 307.22942,-12.846439 177.74357,59.853526 119.76932,108.49969 61.795067,157.14587 20.306644,290.09046 107.77137,378.66073 c 93.27974,94.47354 250.98557,77.00981 302.46811,21.51389 61.29282,-66.05134 57.10191,-222.20706 -22.94443,-317.602564 z',
	'path-end' => 'M 404.2442,109.05511 C 324.17857,13.636612 172.44696,71.506068 114.47271,120.15223 56.498457,168.79841 15.010034,297.50571 102.47476,386.07598 c 93.27974,94.47354 240.39235,82.30642 291.87489,26.8105 61.29282,-66.05134 89.94089,-208.43587 9.89455,-303.83137 z',
	'path-duration' 	=> '3500',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeOutElastic',
	'path-elasticity' 	=> '500',
	'path-scaleX' 		=> $path_def['scaleX'],
	'path-scaleY' 		=> $path_def['scaleY'],
	'path-translateX' 	=> '20',
	'path-translateY' 	=> '15',
	'path-rotate'		=> $path_def['rotate'],
	'image-duration' 	=> '1000',
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeOutQuint',
	'image-elasticity' 	=> '600',
	'image-scaleX' 		=> '0.8',
	'image-scaleY' 		=> '0.8',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '10',
	'image-rotate'		=> '10'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 223.93938,35.536315 C 82.353279,26.408962 31.59847,163.90251 27.94847,264.54251 c -5.32,147 96.00584,204.44684 237.88584,204.44684 141.88,0 204.78539,-83.9139 190.68167,-218.23223 C 445.99668,150.59367 365.52549,44.663668 223.93938,35.536315 Z',
	'deco-duration' 	=> '1300',
	'deco-delay' 		=> '0',
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> '300',
	'deco-scaleX' 		=> '0.9',
	'deco-scaleY' 		=> '0.9',
	'deco-translateX' 	=> '20',
	'deco-translateY' 	=> '10',
	'deco-rotate' 		=> '-75'
];

// Organic 5
	
$foreground_shapes_array[] = [ 
	'path-start' => 'M 225.72192,75 C 86.630916,75 53.818851,163.40428 50.240601,262.96791 45.025178,408.39572 124.86428,445 263.95528,445 403.04628,445 461.98448,382.6738 412.96735,246.14973 379.3318,152.47246 364.81292,75 225.72192,75 Z',
	'path-end' => 'M 225.72192,75 C 86.630916,75 53.818851,163.40428 50.240601,262.96791 45.025178,408.39572 124.86428,445 263.95528,445 403.04628,445 461.98448,382.6738 412.96735,246.14973 379.3318,152.47246 364.81292,75 225.72192,75 Z',
	'path-duration' 	=> '2000',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutQuint',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1',
	'path-scaleY' 		=> '1',
	'path-translateX' 	=> $path_def['translateX'],
	'path-translateY' 	=> $path_def['translateY'],
	'path-rotate'		=> '-30',
	'image-easing' 		=> 'easeOutElastic',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-duration' 	=> '3000',
	'image-delay' 		=> $image_def['delay'],
	'image-scaleX' 		=> $image_def['scaleX'],
	'image-scaleY' 		=> $image_def['scaleY'],
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '30',
	'image-rotate'		=> '-5'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'm 124.95827,242.36515 c 15.95331,-60.50742 8.77349,-131.81042 62.75957,-155.520309 83.99355,-36.88008 161.2659,21.046319 226.83,91.988189 45.75261,49.49563 81.16315,198.95655 -54.39375,247.7746 -115.0676,41.48406 -232.035,52.61116 -276.320129,4.21984 -38.254079,-41.80459 16.408359,-94.73541 41.124309,-188.46232 z',
	'deco-duration' 	=> '2000',
	'deco-delay' 		=> $background_shape_def['delay'],
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '0.9',
	'deco-scaleY' 		=> '0.9',
	'deco-translateX' 	=> $background_shape_def['translateX'],
	'deco-translateY' 	=> '20',
	'deco-rotate' 		=> '-30'
];

// Organic 6
	
$foreground_shapes_array[] = [ 
	'path-start' => 'M 404.2442,109.05511 C 324.17857,13.636612 172.44696,71.506068 114.47271,120.15223 56.498457,168.79841 15.010034,297.50571 102.47476,386.07598 c 93.27974,94.47354 240.39235,82.30642 291.87489,26.8105 61.29282,-66.05134 89.94089,-208.43587 9.89455,-303.83137 z',
	'path-end' => 'M 428.60861,122.8263 C 348.54298,27.407798 172.44696,71.506068 114.47271,120.15223 56.498457,168.79841 15.010034,297.50571 102.47476,386.07598 c 93.27974,94.47354 240.39235,82.30642 291.87489,26.8105 61.29282,-66.05134 114.3053,-194.66468 34.25896,-290.06018 z',
	'path-duration' 	=> '2000',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutQuint',
	'path-elasticity' 	=> '800',
	'path-scaleX' 		=> '0.95',
	'path-scaleY' 		=> '1',
	'path-translateX' 	=> '-10',
	'path-translateY' 	=> '-10',
	'path-rotate'		=> '60',
	'image-easing' 		=> 'easeOutExpo',
	'image-elasticity' 	=> '300',
	'image-duration' 	=> '1000',
	'image-delay' 		=> $image_def['delay'],
	'image-scaleX' 		=> '0.8',
	'image-scaleY' 		=> '0.8',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '0',
	'image-rotate'		=> $image_def['rotate']
];

$background_shapes_array[] = [
	'deco-path' 		=> 'm 100.82372,231.10236 c 15.95331,-60.50742 28.88561,-126.17903 82.87169,-149.888915 83.99355,-36.88008 141.95826,54.834695 207.52236,125.776565 45.75261,49.49563 82.77212,122.53046 -52.78478,171.34851 C 223.36539,419.82258 138.5774,460.71563 94.292268,412.32431 56.038189,370.51972 76.107769,324.82927 100.82372,231.10236 Z',
	'deco-duration' 	=> '1200',
	'deco-delay' 		=> '1000',
	'deco-easing' 		=> 'easeOutElastic',
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '0.85',
	'deco-scaleY' 		=> '0.85',
	'deco-translateX' 	=> '-5',
	'deco-translateY' 	=> '-3',
	'deco-rotate' 		=> '60'
];

// Organic 7

$foreground_shapes_array[] = [ 
	'path-start' => 'M 427.54928,120.70765 C 347.48365,25.289154 175.62493,75.743356 117.65068,124.38952 59.676423,173.0357 2.2981696,305.98029 89.762896,394.55056 183.04264,489.0241 357.69762,488.50952 409.18016,433.0136 470.47298,366.96226 507.59562,216.10315 427.54928,120.70765 Z',
	'path-end' => 'M 425.43064,102.69918 C 345.36501,7.2806798 194.69272,40.785729 136.71847,89.431891 78.74422,138.07807 -15.710305,271.02266 71.754421,359.59293 165.03416,454.06647 329.09592,499.10274 380.57846,443.60682 441.87128,377.55548 505.47698,198.09468 425.43064,102.69918 Z',
	'path-duration' 	=> '1500',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutQuart',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1.05',
	'path-scaleY' 		=> '1.1',
	'path-translateX' 	=> '-10',
	'path-translateY' 	=> '-10',
	'path-rotate'		=> '20',
	'image-duration' 	=> '2500',
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeOutCubic',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> $image_def['scaleX'],
	'image-scaleY' 		=> $image_def['scaleY'],
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> $image_def['translateY'],
	'image-rotate'		=> '-10'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'm 194.3109,54.094767 c -141.879992,0 -179.950645,151.212843 -150.416431,247.490893 41.594974,135.55732 62.523181,182.35162 204.403181,182.35162 141.88,0 177.49808,-78.90894 208.74108,-228.35162 C 477.64696,157.00233 336.1909,54.094767 194.3109,54.094767 Z',
	'deco-duration' 	=> '1500',
	'deco-delay' 		=> '500',
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> $background_shape_def['scaleX'],
	'deco-scaleY' 		=> $background_shape_def['scaleY'],
	'deco-translateX' 	=> '35',
	'deco-translateY' 	=> '35',
	'deco-rotate' 		=> '-35'
];

// Organic 8

$foreground_shapes_array[] = [ 
	'path-start' => 'm 442.47634,210.55411 c 0,-124.559998 -124.88,-155.139998 -200.56,-155.139998 -75.68001,0 -172.790004,64.579998 -162.720004,188.649998 10.73,132.33 135.000004,172.62 210.110004,163.2 89.41,-11.2 153.17,-72.18 153.17,-196.71 z',
	'path-end' => 'm 445.65431,163.94394 c 0,-124.559997 -121.70204,-98.99593 -197.38204,-98.99593 -75.68001,0 -199.273053,17.969829 -189.203053,142.03983 10.73,132.33 155.127123,209.69627 230.237123,200.27627 89.41,-11.2 156.34797,-118.79017 156.34797,-243.32017 z',
	'path-duration' 	=> '1500',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutQuart',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1',
	'path-scaleY' 		=> '1',
	'path-translateX' 	=> $path_def['translateX'],
	'path-translateY' 	=> $path_def['translateY'],
	'path-rotate'		=> '-15',
	'image-duration' 	=> '2300',
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeInOutQuart',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.4',
	'image-scaleY' 		=> '1.4',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '-60',
	'image-rotate'		=> $image_def['rotate']
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 355.44531,41.171875 C 314.29165,41.735418 225.58151,50.007516 185.5492,69.770085 121.46489,101.39536 64.331147,156.93579 48.193359,226.25586 c -7.511869,32.26418 18.450996,72.72751 48.689453,86.7832 56.954398,26.51412 113.046978,11.04522 169.067698,39.47603 59.52201,30.24102 35.04764,98.31137 101.36004,105.87163 65.14532,7.34728 128.16796,-88.59173 121.27148,-153.22656 -5.19891,-49.40785 -46.57015,-72.09331 -65.88031,-117.98724 -20.47727,-48.76895 6.14652,-102.677864 -35.6568,-135.559639 -9.0732,-7.128998 -19.06176,-10.23061 -29.64648,-10.435547 -0.64883,-0.01256 -1.29989,-0.0148 -1.95313,-0.0059 z',
	'deco-duration' 	=> '1500',
	'deco-delay' 		=> '0',
	'deco-easing' 		=> 'easeInOutQuart',
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> $background_shape_def['scaleX'],
	'deco-scaleY' 		=> $background_shape_def['scaleY'],
	'deco-translateX' 	=> '-10',
	'deco-translateY' 	=> '20',
	'deco-rotate' 		=> '-15'
];

// Organic 9

$foreground_shapes_array[] = [ 
	'path-start' => 'm 442.47634,210.55411 c 0,-124.559998 -124.88,-155.139998 -200.56,-155.139998 -75.68001,0 -172.790004,64.579998 -162.720004,188.649998 10.73,132.33 135.000004,172.62 210.110004,163.2 89.41,-11.2 153.17,-72.18 153.17,-196.71 z',
	'path-end' => 'm 430.89449,123.69557 c -49.50365,-114.26771 -130.41932,-1.49085 -205,-18.44 -73.75927,-16.762481 -193.412547,-69.134746 -171.680005,110.07 15.966934,131.80068 139.500005,239.44 214.590005,230 89.41,-11.18 194.92898,-245.82881 162.09,-321.63 z',
	'path-duration' 	=> $path_def['duration'],
	'path-delay' 		=> '300',
	'path-easing' 		=> $path_def['easing'],
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1.1',
	'path-scaleY' 		=> '1.1',
	'path-translateX' 	=> '-10',
	'path-translateY' 	=> '0',
	'path-rotate'		=> '30',
	'image-duration' 	=> $path_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> $image_def['easing'],
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> $image_def['translateY'],
	'image-rotate'		=> '15'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 204.60931,44.940626 C 62.729317,44.940626 22.370129,199.58627 51.904343,295.86432 93.499317,431.42164 213.5934,497.71958 348.9932,455.33059 480.5748,414.13695 317.0903,377.56592 348.3333,228.12324 368.94153,129.53991 346.48931,44.940626 204.60931,44.940626 Z',
	'deco-duration' 	=> '3000',
	'deco-delay' 		=> $background_shape_def['delay'],
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> $background_shape_def['scaleX'],
	'deco-scaleY' 		=> $background_shape_def['scaleY'],
	'deco-translateX' 	=> '-40',
	'deco-translateY' 	=> '20',
	'deco-rotate' 		=> '30'
];

// Organic 10

$foreground_shapes_array[] = [ 
	'path-start' => 'M 81.348321,223.61182 C 97.301631,163.1044 129.70933,104.92333 183.69541,81.213445 267.68896,44.333365 337.63853,98.59545 403.20263,169.53732 448.95524,219.03295 478.48421,356.48641 342.92731,405.30446 227.85971,446.78852 138.5774,460.71563 94.292268,412.32431 56.038189,370.51972 56.63237,317.33873 81.348321,223.61182 Z',
	'path-end' => 'M 81.348321,223.61182 C 97.301631,163.1044 129.70933,104.92333 183.69541,81.213445 267.68896,44.333365 337.63853,98.59545 403.20263,169.53732 448.95524,219.03295 478.48421,356.48641 342.92731,405.30446 227.85971,446.78852 138.5774,460.71563 94.292268,412.32431 56.038189,370.51972 56.63237,317.33873 81.348321,223.61182 Z',
	'path-duration' 	=> $path_def['duration'],
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeOutElastic',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1.05',
	'path-scaleY' 		=> '1.05',
	'path-translateX' 	=> '0',
	'path-translateY' 	=> '0',
	'path-rotate'		=> '-10',
	'image-duration' 	=> $path_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeOutElastic',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.4',
	'image-scaleY' 		=> '1.4',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> $image_def['translateY'],
	'image-rotate'		=> '10'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 70.082975,142.5458 C 44.730858,282.14237 35.169179,401.66535 127.90668,440.92717 258.48634,496.19814 359.77192,490.78328 414.33338,359.8139 467.35624,232.53778 420.07548,203.82025 325.67836,83.826822 263.40586,4.6718611 93.769893,12.118327 70.082975,142.5458 Z',
	'deco-duration' 	=> '2000',
	'deco-delay' 		=> '100',
	'deco-easing' 		=> 'easeOutElastic',
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '1.05',
	'deco-scaleY' 		=> '1.05',
	'deco-translateX' 	=> '0',
	'deco-translateY' 	=> '0',
	'deco-rotate' 		=> '20'
];

// Organic 11

$foreground_shapes_array[] = [ 
	'path-start' => 'M 72.359676,204.13642 C 88.312986,143.629 129.70933,94.436577 183.69541,70.726692 c 83.99355,-36.88008 153.94312,11.389575 219.50722,82.331448 45.75261,49.49563 78.2778,219.90745 -57.2791,268.7255 C 230.85593,463.2677 140.07551,445.73455 95.790376,397.34323 57.536297,355.53864 47.643725,297.86333 72.359676,204.13642 Z',
	'path-end' => 'M 72.359676,204.13642 C 88.312986,143.629 129.70933,94.436577 183.69541,70.726692 c 83.99355,-36.88008 153.94312,11.389575 219.50722,82.331448 45.75261,49.49563 78.2778,219.90745 -57.2791,268.7255 C 230.85593,463.2677 140.07551,445.73455 95.790376,397.34323 57.536297,355.53864 47.643725,297.86333 72.359676,204.13642 Z',
	'path-duration' 	=> '2500',
	'path-delay' 		=> '300',
	'path-easing' 		=> 'easeOutElastic',
	'path-elasticity' 	=> '400',
	'path-scaleX' 		=> '0.95',
	'path-scaleY' 		=> '1.0',
	'path-translateX' 	=> '0',
	'path-translateY' 	=> '30',
	'path-rotate'		=> '30',
	'image-duration' 	=> $path_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> $image_def['easing'],
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> $image_def['translateY'],
	'image-rotate'		=> '-10'
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 54.063228,239.80855 C 28.711111,379.40512 102.68097,370.77012 195.41847,410.03194 325.99813,465.30291 399.82129,487.35047 454.38275,356.38109 507.40561,229.10497 425.79682,43.622779 308.51434,40.344651 207.8393,37.532616 77.750145,109.38108 54.063228,239.80855 Z',
	'deco-duration' 	=> '3000',
	'deco-delay' 		=> $background_shape_def['delay'],
	'deco-easing' 		=> 'easeOutElastic',
	'deco-elasticity' 	=> '600',
	'deco-scaleX' 		=> $background_shape_def['scaleX'],
	'deco-scaleY' 		=> $background_shape_def['scaleY'],
	'deco-translateX' 	=> '-20',
	'deco-translateY' 	=> '0',
	'deco-rotate' 		=> '-15'
];

// Organic 12

$foreground_shapes_array[] = [ 
	'path-start' => 'M 174.97,61.21256 C 98.325567,87.631239 56.474886,188.33787 48.620077,269.02627 c -3.822796,39.26961 12.290916,83.85752 40.8313,111.10018 49.542243,47.28956 132.304483,87.15026 195.942193,61.83272 C 384.73893,402.43573 478.15198,262.07701 441.37348,161.68306 408.727,72.568275 264.69577,30.284855 174.97,61.21256 Z',
	'path-end' => 'M 174.97,61.21256 C 98.007502,86.689796 29.429107,190.26065 48.620077,269.02627 c 6.746146,27.68825 51.402893,25.88827 73.040613,44.43439 48.72155,41.76021 59.88283,148.79229 124.03303,147.22485 C 364.38199,457.78549 492.94409,291.92403 461.59793,177.41319 434.37802,77.975972 272.84228,28.813467 174.97,61.21256 Z',
	'path-duration' 	=> '1700',
	'path-delay' 		=> $path_def['delay'],
	'path-easing' 		=> 'easeInOutBack',
	'path-elasticity' 	=> $path_def['elasticity'],
	'path-scaleX' 		=> '1',
	'path-scaleY' 		=> '1',
	'path-translateX' 	=> $path_def['translateX'],
	'path-translateY'	=> '-20',
	'path-rotate'		=> $path_def['rotate'],
	'image-duration' 	=> $image_def['duration'],
	'image-delay' 		=> $image_def['delay'],
	'image-easing' 		=> 'easeInOutQuart',
	'image-elasticity' 	=> $image_def['elasticity'],
	'image-scaleX' 		=> '1.3',
	'image-scaleY' 		=> '1.3',
	'image-translateX' 	=> $image_def['translateX'],
	'image-translateY'	=> '-40',
	'image-rotate'		=> $image_def['rotate']
];

$background_shapes_array[] = [
	'deco-path' 		=>  'M 138.19105,411.51643 C 228.8322,520.66822 236.26304,371.60473 336.56577,380.61002 459.40798,391.62936 515.74013,281.73765 450.4832,155.75565 387.06647,33.326264 184.51187,8.6560643 106.61295,96.392516 39.746147,171.70653 53.503469,309.53404 138.19105,411.51643 Z',
	'deco-duration' 	=> '1500',
	'deco-delay' 		=> '500',
	'deco-easing' 		=> $background_shape_def['easing'],
	'deco-elasticity' 	=> $background_shape_def['elasticity'],
	'deco-scaleX' 		=> '1.1',
	'deco-scaleY' 		=> '1',
	'deco-translateX' 	=> $background_shape_def['translateX'],
	'deco-translateY' 	=> '-20',
	'deco-rotate' 		=> '20'
];