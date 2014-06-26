@extends(theme_path('layout'))

@section('title')
	{{ $post->title }} | 
@stop

@section('bodyclass')
showpost
@stop

@section('content')
	<article class="hentry showpost" itemscope itemtype="http://schema.org/Article">
		<header>
			<h2 class="title entry-title" itemprop="headline">{{ $post->title }}</h2>
			<span class="meta">
				<time class="date updated" itemprop="dateModified" datetime="{{ date("c", strtotime($post->publish_date)) }}" content="{{ date("c", strtotime($post->publish_date)) }}" pubdate>{{ date("d-M-Y", strtotime($post->publish_date)) }}</time>
				-
				<span class="byline author vcard" itemprop="author" itemscope itemtype="http://schema.org/Person">
					<span class="fn" itemprop="name">Camilla Gejl Olsen</span>
				</span>
			</span>
		</header>
		<section class="entry-content" itemprop="articleBody">
			{{ md($post->content) }}
		</section>
	</article>

	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'camillasblog'; // required: replace example with your forum shortname

		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<!--<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->
		
@stop

