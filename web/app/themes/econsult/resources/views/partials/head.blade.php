<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <script>
  	document.documentElement.className = document.documentElement.className.replace(/(\s|^)no-js(\s|$)/, '$1js$2');
  </script>
	@php
	$image = get_field('favicon', 'options');	
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	@endphp
	@if($image)
		<link rel="icon" type="image/png" sizes="32x32" href="{{ $image['url'] }}">
	@endif
	
	@php wp_head() @endphp
</head>
