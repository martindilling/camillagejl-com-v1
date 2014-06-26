<div class="post">
	<h1><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h1>
	<div class="date">{{ date("d-M-Y", strtotime($post->publish_date)) }} - <a href="{{ url('post/'.$post->slug) }}#disqus_thread">Comments</a></div>
	<div class="content">
		{{ $post->parsed_content }}
        <div class="read-more">
            <a href="{{ url('post/'.$post->slug) }}">Continue reading...</a>
        </div>
	</div>
</div>