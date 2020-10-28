<!DOCTYPE html>
<head>
	<title>Send Message to Staff</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/solar/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="{{ asset('js/inputEmoji.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.3.92/css/materialdesignicons.min.css">
    <link href="{{asset('css/tower-file-input.css')}}" rel="stylesheet" />


	<script>
		$(function () {
			$('textarea').emoji({place: 'after'});
		})
	</script>
</head>
<body>
	  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		  <header class="masthead mb-auto">
		    <div class="inner">
		      <h3 class="masthead-brand" style="text-align: center;">Adorable E-system</h3>
		      <nav class="nav nav-masthead justify-content-center">
		        <a class="nav-link active" href="#">Home</a>
		        <a class="nav-link" href="#">Features</a>
		        <a class="nav-link" href="#">Contact</a>
		      </nav>
		    </div>
		  </header>
		 </div>


	<div class="container" style="margin-top:50px">
	<h1>Y'ello! Send a Message to {!! $staffemail->firstname_staff !!}</h1>
	<div class="form-group">
		<form action="{{URL::to('/staff/profile/sendmessage')}}" method="POST">
			@csrf
			<h4>To:</h4>
			<input type="email" name="email" placeholder="admin@example.com" class="form-control" value="{!! $staffemail->email_staff !!}">

			<h4>Subject:</h4>
			<input type="text" name="subject" placeholder="Subject" class="form-control">
			</div>
			<div class="form-group">
			<h4>Message:</h4>
			<textarea name="mes" placeholder="type message here..." class="form-control"></textarea>
			<div class="tower-file">
                <input type="file" id="demoInput5" multiple />
                <label for="demoInput5" class="btn btn-primary">
                    <span class="mdi mdi-upload"></span>Attachment (MAX 2MB)
                </label>
                <button type="button" class="tower-file-clear btn btn-secondary align-top">Clear</button>
            </div>
               <div id="demo-code-5" class="collapse">
                <pre><code>&lt;div class=&quot;tower-file&quot;&gt;
			    &lt;input type=&quot;file&quot; id=&quot;demoInput5&quot; /&gt;
			    &lt;label for=&quot;demoInput5&quot; <span class="highlight">class=&quot;btn btn-primary&quot;</span>&gt;
			        &lt;span class=&quot;mdi mdi-upload&quot;&gt;&lt;/span&gt;Select Files
			    &lt;/label&gt;
			    &lt;button type=&quot;button&quot; <span class="highlight">class=&quot;tower-file-clear btn btn-secondary</span> align-top&quot;&gt;
			        Clear
			    &lt;/button&gt;
				&lt;/div&gt;
				</code>
				<code>$('#demoInput5').fileInput({
				    iconClass: 'mdi mdi-fw mdi-upload'
				});</code></pre>
			   </div>

			</div>

			<input type="submit" class="btn btn-danger" value="Submit">
		</form>
				
	</div>
</body>
<script src="{{asset('js/tower-file-input.js')}}"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


          $('#demoInput5').fileInput({
            iconClass: 'mdi mdi-fw mdi-upload'
        });

</script>
</html>
