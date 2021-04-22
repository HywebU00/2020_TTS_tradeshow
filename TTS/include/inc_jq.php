<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="vendor/jquery.easing.min.js"></script>
<!-- lity -->
<script src="vendor/lity/dist/lity.js"></script>
<!-- slick js -->
<script src="vendor/slick/slick.min.js "></script>
<script src="vendor/slick/slick-lightbox.js "></script>
<script src="vendor/WOW-master/dist/wow.min.js"></script>
<script src="vendor/colorbox/jquery.colorbox-min.js"></script>
<script src="js/masonry.pkgd.min.js" defer></script>

<!-- hyUI -->
<script src="js/hyui.js"></script>
<!-- 客製js -->
<script src="js/customize.js"></script>

<!-- wowload -->
<script type="text/javascript">
	var wow = new WOW({
	    boxClass:     'wow',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       true,       // trigger animations on mobile devices (default is true)
	    live:         true        // act on asynchronously loaded content (default is true)
	});
	wow.init();
</script>

<!-- tab setting -->
<script>
	$(".tab_content").hide();
	$(".tab_content:first").show();

	// if in tab mode 
	$("ul.tabs li").click(function() {

		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn();        

		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");

		$(".tab_drawer_heading").removeClass("d_active");
		$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");

	});
	// if in drawer mode 
	$(".tab_drawer_heading").click(function() {

		$(".tab_content").hide();
		var d_activeTab = $(this).attr("rel"); 
		$("#"+d_activeTab).fadeIn();

		$(".tab_drawer_heading").removeClass("d_active");
		$(this).addClass("d_active");

		$("ul.tabs li").removeClass("active");
		$("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");
	});

	//  Extra class "tab_last" 
	// to add border to right side
	// of last tab 
	$('ul.tabs li').last().addClass("tab_last");
</script>


<!-- colorbox setting -->
<script>
	$(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"fade", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:false, innerWidth:"80%", innerHeight:390});
		$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});

		$('.non-retina').colorbox({rel:'group5', transition:'none'})
		$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>

<!-- innerpage background animation canvas -->
<!-- <script type="text/javascript">
	let resizeReset = function() {
		w = canvasBody.width = window.innerWidth;
		h = canvasBody.height = window.innerHeight;
	}

	const opts = { 
		particleColor: "rgb(200,200,200)",
		lineColor: "rgb(200,200,200)",
		particleAmount: 30,
		defaultSpeed: 1,
		variantSpeed: 1,
		defaultRadius: 2,
		variantRadius: 2,
		linkRadius: 200,
	};

	window.addEventListener("resize", function(){
		deBouncer();
	});

	let deBouncer = function() {
		clearTimeout(tid);
		tid = setTimeout(function() {
			resizeReset();
		}, delay);
	};

	let checkDistance = function(x1, y1, x2, y2){ 
		return Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
	};

	let linkPoints = function(point1, hubs){ 
		for (let i = 0; i < hubs.length; i++) {
			let distance = checkDistance(point1.x, point1.y, hubs[i].x, hubs[i].y);
			let opacity = 1 - distance / opts.linkRadius;
			if (opacity > 0) { 
				drawArea.lineWidth = 0.5;
				drawArea.strokeStyle = `rgba(${rgb[0]}, ${rgb[1]}, ${rgb[2]}, ${opacity})`;
				drawArea.beginPath();
				drawArea.moveTo(point1.x, point1.y);
				drawArea.lineTo(hubs[i].x, hubs[i].y);
				drawArea.closePath();
				drawArea.stroke();
			}
		}
	}

	Particle = function(xPos, yPos){ 
		this.x = Math.random() * w; 
		this.y = Math.random() * h;
		this.speed = opts.defaultSpeed + Math.random() * opts.variantSpeed; 
		this.directionAngle = Math.floor(Math.random() * 360); 
		this.color = opts.particleColor;
		this.radius = opts.defaultRadius + Math.random() * opts. variantRadius; 
		this.vector = {
			x: Math.cos(this.directionAngle) * this.speed,
			y: Math.sin(this.directionAngle) * this.speed
		};
		this.update = function(){ 
			this.border(); 
			this.x += this.vector.x; 
			this.y += this.vector.y; 
		};
		this.border = function(){ 
			if (this.x >= w || this.x <= 0) { 
				this.vector.x *= -1;
			}
			if (this.y >= h || this.y <= 0) {
				this.vector.y *= -1;
			}
			if (this.x > w) this.x = w;
			if (this.y > h) this.y = h;
			if (this.x < 0) this.x = 0;
			if (this.y < 0) this.y = 0;	
		};
		this.draw = function(){ 
			drawArea.beginPath();
			drawArea.arc(this.x, this.y, this.radius, 0, Math.PI*2);
			drawArea.closePath();
			drawArea.fillStyle = this.color;
			drawArea.fill();
		};
	};

	function setup(){ 
		particles = [];
		resizeReset();
		for (let i = 0; i < opts.particleAmount; i++){
			particles.push( new Particle() );
		}
		window.requestAnimationFrame(loop);
	}

	function loop(){ 
		window.requestAnimationFrame(loop);
		drawArea.clearRect(0,0,w,h);
		for (let i = 0; i < particles.length; i++){
			particles[i].update();
			particles[i].draw();
		}
		for (let i = 0; i < particles.length; i++){
			linkPoints(particles[i], particles);
		}
	}

	const canvasBody = document.getElementById("canvas"),
	drawArea = canvasBody.getContext("2d");
	let delay = 500, tid,
	rgb = opts.lineColor.match(/\d+/g);
	resizeReset();
	setup();
</script> -->
