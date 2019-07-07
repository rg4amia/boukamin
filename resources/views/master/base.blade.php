<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hireo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
@include('inc.styles')

</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
        @include('inc.header')
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Intro Banner
================================================== -->
<!-- add class "disable-gradient" to enable consistent background overlay -->

    @include('inc.banner')


<!-- Content ================================================== -->
<!-- Category Boxes -->
    @yield('content')
<!-- Membership Plans / End-->

<!-- Footer
================================================== -->
    @include('inc.footer')
<!-- Footer / End -->

</div>
<!-- Wrapper / End -->
@include('inc.scripts')

</body>
</html>