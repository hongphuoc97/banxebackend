<div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="{{ asset('images/xe1.jpg') }}" alt="xuclatmientrung"
            style=" object-fit: cover;">
      </div>
      <div class="item">
         <img src="{{ asset('images/xe2.jpg') }}" alt="xuclatdanang"
            style=" object-fit: cover;">
      </div>
      <div class="item">
         <img src="{{ asset('images/xe3.jpg') }}" alt="danang"
            style=" object-fit: cover;">
      </div>
      <div class="item">
         <img src="{{ asset('images/xe5.jpg') }}" alt="xexuclat"
            style="object-fit: cover;">
      </div>
   </div>
   <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span> <span
      class="sr-only">Previous</span>
   </a> <a class="right carousel-control" href="#myCarousel"
      data-slide="next"> <span
      class="glyphicon glyphicon-chevron-right"></span> <span
      class="sr-only">Next</span>
   </a>
</div>
