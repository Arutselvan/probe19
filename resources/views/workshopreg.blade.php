@if ($regbool==1 && $ispaid==1)
<script type="text/javascript">
    window.location = "{{ url('/workshops') }}"+"/"+"{{ $workshop }}";//here double curly bracket
</script>
@endif
<!DOCTYPE HTML>
<html>
	<head>
		<title>{{ $workshop }} Registration | PROBE 2019</title>
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
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2><b>{{ $workshop }} | Workshop registration</b></h2>
                        </header>
                        <p style = "text-align: center;">Please enter registration details carefully. Details once entered can't be changed.</p>"
                        @if ($message = session('message'))
                            <p style="text-align: center;">{{ $message }}</p>
                        @endif
						@if ($regbool!=1)
                        <form method="post" action="{{action('UserController@regworkshop')}}">
                            <div class="row gtr-uniform gtr-50">
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p1" id="p1" placeholder="Participant 1's PROBE ID" value="{{ session('pid') }}" required readonly/>
                                </div>
								@if ($mc >= 2)
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p2" id="p2" placeholder="Participant 2's PROBE ID" />
                                </div>
								@endif
								@if ($mc >= 3)
                                <div class="col-12 col-12-xsmall">
                                    <input type="text" name="p3" id="p3" placeholder="Participant 3's PROBE ID" />
                                </div>
								@endif
								<div class="col-12 col-12-xsmall">
                                    <input type="text" name="workshop" id="workshop" value="{{ $workshop }}" placeholder="workshop" required readonly/>
                                </div>
                                <div class="col-12">
                                    <ul class="actions">
                                        <li style="margin:auto"><input id="submit" type="submit" value="REGISTER" class="primary"/></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
						@endif
						@if ($ispaid==0 && $regbool==1)
						<p style="text-align: center;">Complete your registration for the {{$workshop}} workshop by paying the registration fee (for the team) using the link below</p>
						<div style="margin:auto;text-align: center;">
							<h4>Registration Details</h4>
							<p>Participant 1: {{$p1}}</p>
							@if ($mc >= 2)
							<p>Participant 2: {{$p2}}</p>
							@endif
							@if ($mc >= 3)
							<p>Participant 3: {{$p3}}</p>
							@endif
							<strong>For successful payment please do not edit the pre-filled details</strong><br/><br/>
							<button onclick="popupWithAutoFill(getPreFilledDataTS({{ $mc }}));" class="button primary fit">Pay and complete registration</button>
							
						</div>
						@endif
					</div>
				</div>

			<!-- Footer -->
				<footer style="margin-bottom:0" id="footer">
					<ul class="copyright">
						<li>&copy; PROBE 2019. All rights reserved.</li>
					</ul>
				</footer>

		</div>

        <!-- Scripts -->
		<script>
			function getPreFilledDataTS(max_count){

				if(max_count==2){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						ticketvalue1: 1,
					}
						
				}

				if(max_count==3){

					return {
						eventcode:    "{{ $ec }}",
						name:         "{{ session('name') }}",
						emailid:      "{{ session('email') }}",
						ticketname1:  "{{ $workshop }}",
						cq1:          "{{ $p1 }}",
						cq2:          "{{ $p2 }}",
						cq3:          "{{ $p3 }}",
						ticketvalue1: 1,
					}
					
				}

				return {
					eventcode:    "{{ $ec }}",
					name:         "{{ session('name') }}",
					emailid:      "{{ session('email') }}",
					ticketname1:  "{{ $workshop }}",
					cq1:          "{{ $p1 }}",
					ticketvalue1: 1,
				}
			}
		</script>
		<noscript id="tsNoJsMsg">Javascript on your browser is not enabled.</noscript>
		<script src="https://www.townscript.com/popup-widget/townscript-widget.nocache.js" type="text/javascript"></script>
		
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
