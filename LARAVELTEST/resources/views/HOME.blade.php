<?php


?>


<h1>This is a new view.</h1>
<p>This is a country. Its name is Bangladesh.</p>


<a href="<?php echo route('/'); ?>">Home</a>
<a href="<?php echo route('/about'); ?>">About</a>

<br>

<a href="{{ route('/') }}">Home</a>
<a href="{{ route('/about') }}">About</a>

<br>

<a href="{!! route('/') !!}">Home</a>
<a href="{!! route('/about') !!}">About</a>