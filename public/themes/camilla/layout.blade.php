<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>@yield('title') 
		<?php echo Config::get('wardrobe.title') ?></title>
	<meta name="author"          content="Camilla Gejl Olsen" />
	<meta name="description"     content="">
	<meta name="keywords"        content="Politics, Writing" />
	<meta name="viewport"        content="width=device-width, initial-scale=1">
	<meta http-equiv="cleartype" content="on">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url(theme_path('img/touch/apple-touch-icon-144x144-precomposed.png')) }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url(theme_path('img/touch/apple-touch-icon-114x114-precomposed.png')) }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url(theme_path('img/touch/apple-touch-icon-72x72-precomposed.png')) }}">
	<link rel="apple-touch-icon-precomposed" href="{{ url(theme_path('img/touch/apple-touch-icon-57x57-precomposed.png')) }}">
	<link rel="shortcut icon" href="{{ url(theme_path('img/touch/favicon.ico')) }}">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="{{ url(theme_path('img/touch/apple-touch-icon-144x144-precomposed.png')) }}">
	<meta name="msapplication-TileColor" content="#008d36">

	<link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
	<link href='//fonts.googleapis.com/css?family=Crimson+Text:400,600,400italic' rel='stylesheet' type='text/css'/>
	<link href="{{ url(theme_path('css/style.css')) }}" rel="stylesheet" />
	<link href="{{ url(theme_path('css/print.css')) }}" rel="stylesheet" media="print" />
</head>
<body class="@yield('bodyclass')">
	<!--[if lt IE 9]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

    <div id="subscribe">
        
        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form action="http://camillagejl.us8.list-manage.com/subscribe/post?u=d8499ee525aeb39e24a3b0524&amp;id=8dcd4b6854" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <label for="mce-EMAIL">Subscribe to my newsletter.</label>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_d8499ee525aeb39e24a3b0524_8dcd4b6854" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </form>
        </div>
        <!--End mc_embed_signup-->

        <div id="expand">
            <img src="{{ url(theme_path('img/subscribe.png')) }}">
        </div>
    </div>

	<div id="container" class="container">
		<header>
			<h1><a href="{{ url('/') }}" class="noprint">{{ site_title() }}</a></h1>
			<div class="onlyprint">{{ URL::full(); }}</div>
			<nav>
				<ul>
					<li class="home"><a href="{{ url('/') }}">Home</a></li>
					<li class="about"><a href="{{ url('about') }}">About</a></li>
					<li><a href="{{ url('rss') }}">RSS</a></li>
				</ul>
			</nav>
			<div class="categories">
				<ul>
					@if (!isset($tag))
						<?php $tag = ''; ?>
					@endif
					@foreach (Wardrobe::tags() as $item)
						@if ($item['tag'] != "")
							<li class="<?php if ($tag == $item['tag']){echo 'active';} ?>"><a href="{{ url('/tag/'.$item['tag']) }}">{{ $item['tag'] }}</a></li>
						@endif
					@endforeach
				</ul>
			</div>
		</header>
		<main role="main" class="content">
			@yield('content')
		</main>
		<footer>
			<p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
		</footer>
	</div>

	<script>
        document.getElementById('expand').onclick = function() {
            var box = document.getElementById('subscribe');
            var className = ' ' + box.className + ' ';

            if ( ~className.indexOf(' show ') ) {
                box.className = className.replace(' show ', ' ');
            } else {
                box.className += ' show';
            }
        }

        document.getElementById('container').onclick = function() {
            var box = document.getElementById('subscribe');
            var className = ' ' + box.className + ' ';

            box.className = className.replace(' show ', ' ');
        }

		var links = document.links;

		for (var i = 0, linksLength = links.length; i < linksLength; i++) {
			if (links[i].hostname != window.location.hostname) {
				links[i].target = '_blank';
			}
		}
	</script>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'camillasblog'; // required: replace example with your forum shortname

		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function () {
			var s = document.createElement('script'); s.async = true;
			s.type = 'text/javascript';
			s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
			(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		}());
	</script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-42229702-1', 'camillagejl.com');
		ga('send', 'pageview');
	</script>
</body>
</html>
