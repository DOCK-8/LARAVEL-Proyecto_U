<header>
	<div id="sel">
		<div id="imagen">
			<img src="{{ asset('img/path1.png') }}" />
		</div>
		<div id="option">
			<a href="/pepe">Home</a>
			<a>Account</a>
			<a>Curses</a>
			<a>Logros</a>
			<a>Exit</a>
			<a>{{$slot}}</a>
		</div>
	</div>
</header>
