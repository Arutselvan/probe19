<!DOCTYPE HTML>
<html>
	<head>
		<title>TECH TALKS | PROBE 2019</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}"  />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
                    <h1 id="logo"><a href="/"><img width="100px" style="margin-top: 10px;" src="/images/whitelogo.png"></a></h1>
					<nav id="nav">
						<ul>
                            <li><a href="/events">Events</a></li>
                            <li><a href="/workshops">Workshops</a></li>
                            <li><a href="/techtalk">Tech Talks</a></li>
							<li><a href="/sponsors">Sponsors</a></li>
                            <li><a href="/contact">Contact us</a></li>
							@if ($name = session('name'))
							<li>{{ $name }}</li>
							<li><a href="/logout" class="button primary">Log out</a></li>
                        	@endif
							@if (!session('name'))
							<li><a href="/register" class="button primary">Register</a></li>
							<li><a href="/login" class="button primary">Log in</a></li>
                        	@endif
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
                <section id="four" class="wrapper style1 special fade-up">
                    <div class="container">
                        <header class="major">
                            <h2>Tech Talks | PROBE 2019</h2>
                        </header>
                        <div class="box alt">
                            <div class="row gtr-uniform">
                                <section class="col-6 col-12-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/techtalk/qualcomm">
                                    <img src="/images/qualcommworkshoplogo.png" style="cursor: pointer;" class="icon alt major">
                                    <h3>Qualcomm : Wifi Technology</h3>
                                    </a>
                                </section>
                                <section class="col-6 col-12-medium col-12-xsmall">
                                    <a style="cursor: pointer;" href="/techtalk/ssir">
                                    <img src="/images/samsunglogo.png" style="cursor: pointer;" class="icon alt major">
                                    <h3>Samsung : Evolution of memory</h3>
                                    </a>
                                </section>
                                <!--section class="col-12 col-12-medium col-12-xsmall">
                                    <h3 style="text-align:center;">More workshops coming soon</h3>
                                </section-->
                            </div>
                        </div>
                    </div>
                </section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; PROBE 2019. All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/jquery.dropotron.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
	</body>
</html>