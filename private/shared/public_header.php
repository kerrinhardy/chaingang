<!DOCTYPE html>
<html class='h-full'>
<head>
    <meta charset='UTF-8'>
    <title><?php if (isset($page_title)) {
            echo h($page_title);
        } ?> | Chain Gang</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class='flex flex-col h-full'>
<header>
    <nav class="flex items-center justify-between flex-wrap bg-white px-6 py-2 border-t-4 border-blue-700">
        <div class="flex items-center flex-shrink-0 text-blue-700 mr-6">
            <svg class="h-8 w-8 mr-2 fill-current text-blue-700 -mt-1" version="1.1" id="Layer_1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 653 379"
                 overflow="visible" xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" d="M427.353,260.018l85.418-13.943l-53.834-69.928
	C431.033,200.476,427.563,229.684,427.353,260.018z M403.856,265.133c-0.139-3.032-0.625-7.905-0.625-11.317
	c0-34.603,11.193-68.229,41.575-96.178l-31.642-37.883l-48.973,149.4L403.856,265.133z M215.885,116.44l2.716-8.314l174.429-0.229
	l-46.401,140.668l-2-14.676h5.336l-0.667-9.339H325.95l0.666,8.672h6.004l1.334,16.01
	C333.954,249.232,216.553,117.108,215.885,116.44z M138.632,251.566c23.425-18.604,41.658-36.339,54.806-71.825
	c20.753,18.825,32.592,46.056,32.592,74.074c0,55.644-45.383,101.026-101.026,101.026S23.977,309.459,23.977,253.815
	s45.383-101.026,101.026-101.026c17.759,0,35.912,5.13,50.55,13.771c-9.908,31.311-19.547,47.458-50.033,71.999
	c-7.4,0.313-13.028,6.254-13.028,13.342c0,7.348,5.993,13.341,13.341,13.341C133.181,265.241,138.632,259.248,138.632,251.566z
	 M430.933,281.481c11.427,42.58,52.075,73.362,97.063,73.362c55.645,0,101.028-45.384,101.028-101.028
	s-45.384-101.027-101.028-101.027c-17.759,0-38.308,4.19-53.298,12.967l54.834,72.804c6.707,0.104,12.545,6.098,12.545,13.342
	c0,7.348-5.994,13.341-13.342,13.341c-2.033,0-4.169-0.521-5.973-1.37L430.933,281.481z M182.766,143.177l35.788-98.732
	l-11.341-19.344l22.681-24.682h48.695l0.667,14.009h-42.691l-8.672,9.339l10.006,18.01l-12.582,44.596h174.757l2.67-8.156
	c-14.046-1.828-38.271-10.48-44.057-15.507s-0.719-9.647,5.871-9.862c34.492-1.467,85.734-4.356,95.469-4.398
	c9.734-0.043,10.73,4.852,4.215,11.98c-6.517,7.127-12.211,13.543-36.898,17.369l-6.671,18.011l41.354,51.229
	c19.49-11.831,43.064-17.987,65.97-17.987c68.72,0,124.767,56.047,124.767,124.766s-56.047,124.766-124.767,124.766
	c-56.534,0-106.245-38.989-120.856-92.874l-37.997,6.828c-1.626,4.48-5.419,7.914-9.948,10.603l6.779,32.145h8.672l0.666,8.672
	l-27.35,1.334v-9.339h6.672l-8.264-32.126c-12.291-2.012-18.732-12.535-15.072-22.979l-124.131-140.39l-5.559,15.062
	c30.128,23.732,48.16,60.285,48.16,98.3c0,68.719-56.047,124.766-124.766,124.766S0.237,322.534,0.237,253.815
	S56.284,129.05,125.003,129.05C144.985,129.05,165.455,133.923,182.766,143.177z"/>
</svg>
            <span class="font-semibold text-xl tracking-tight"><a href="
<?php echo url_for('/index.php'); ?>" class="no-underline hover:text-blue-800 font-sans">Chain Gang</a></span>
        </div>
    </nav>
</header>
<div>
    <div class="bg-blue-700 py-6 border-b border-blue-800 shadow-xl">
        <div class="px-4">
            <div>
                <a href="<?php echo url_for('/bicycles.php'); ?>" class="no-underline text-white hover:text-blue-300 ml-2 px-1">View our
                    inventory</a>
                <a href="<?php echo url_for('/about.php'); ?>" class="no-underline text-white hover:text-blue-300 ml-2 px-1">About Us</a>
            </div>
        </div>
    </div>
</div>
<?php if (isset($super_hero_image)) { ?>
    <div>
        <?php $image_url = url_for('/images/' . $super_hero_image); ?>
        <img class="object-cover h-64 w-full border-b border-blue-800" src="<?php echo $image_url; ?>"/>
    </div>
<?php } ?>

<div id='content' class='flex-1 mx-auto p-8'>