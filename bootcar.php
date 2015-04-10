htmlwrite+="<div id='carousel-example-generic' class='carousel slide' data-ride='carousel'><ol class='carousel-indicators'><li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li><li data-target='#carousel-example-generic' data-slide-to='1'></li><li data-target='#carousel-example-generic' data-slide-to='2'></li></ol>";

htmlwrite+="<div class='carousel-inner' role='listbox'><div class='item active'><img src='+"+data.chart['1year'].url+"' alt='First Slide'><div class='carousel-caption'>This is caption 1</div></div><div class='item'><img src='"+data.chart['5years'].url+"' alt='Second Slide'><div class='carousel-caption'>This is caption 2</div></div><div class="item"><img src='"+data.chart['10years'].url+"' alt="Third slide"><div class="carousel-caption">This Caption 3</div></div></div>";

htmlwrite+="<a class='left carousel-control' href='#carousel-example-generic' role='button' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span><span class='sr-only'>Previous</span></a><a class='right carousel-control' href='#carousel-example-generic' role='button' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span><span class='sr-only'>Next</span></a></div>";



    htmlwrite+="<div id='myCarousel' class='carousel slide'>";
              htmlwrite+="<ol class='carousel-indicators'>";
              htmlwrite+="<li data-target='#myCarousel' data-slide-to='0'";
              htmlwrite+="class='active'></li>";
              htmlwrite+="<li data-target='#myCarousel' data-slide-to='1'></li>";
              htmlwrite+="<li data-target='#myCarousel' data-slide-to='2'></li>";
              htmlwrite+="</ol>";
              htmlwrite+="<div class='carousel-inner'>";
              htmlwrite+="<div class='item active'>";
              htmlwrite+="<img src='"+data.chart['1year'].url+"' width='600' height='300' alt='First slide'>";
              htmlwrite+="<div class='carousel-caption'>This Caption 1</div></div>";
              htmlwrite+="<div class='item'>";
              htmlwrite+="<img src='"+data.chart['5years'].url+"' width='600' height='300' alt='Second slide'>";
              htmlwrite+="<div class='carousel-caption'>This Caption 2</div>";
              htmlwrite+="</div>";
              htmlwrite+="<div class='item'>";
              htmlwrite+="<img src='"+data.chart['10years'].url+"' width='600' height='300' alt='Third slide'>";
              htmlwrite+="<div class='carousel-caption'>This Caption 3</div>";
              htmlwrite+="</div>";
              htmlwrite+="</div>";
              htmlwrite+="<a class='carousel-control left' href='#myCarousel'";
              htmlwrite+="data-slide='prev'>&lsaquo;</a>";
              htmlwrite+="<a class='carousel-control right' href='#myCarousel'";
              htmlwrite+="data-slide='next'>&rsaquo;</a>";
              htmlwrite+="</div>";