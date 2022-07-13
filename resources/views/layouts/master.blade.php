<!DOCTYPE html>
<html lang="en">
<title>My Blog</title>
@include('layouts.partials.header')
<body id="blog">
    @include('layouts.partials.navbar')
    @yield('content')
    @include('layouts.partials.footer')

	<script src="{{ asset("js/jquery.js") }}"></script>

	<script src="{{ asset("js/popper.min.js") }}"></script>

	<script src="{{ asset("js/bootstrap.min.js") }}"></script>

	<script src="{{ asset("js/plugin.js") }}"></script>
	<script src="{{ asset("js/jQuery-plugin-progressbar.js") }}"></script>

	<script src="{{ asset("js/typed.min.js") }}"></script>

	<script src="{{ asset("js/jquery.buoyant.min.js") }}"></script>

	<script src="{{ asset("js/wow.js") }}"></script>

	<script src="{{ asset("js/main.js") }}"></script>

</body>
</html>