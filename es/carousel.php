<section id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="8000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <aside class="carousel-inner" role="listbox">
      <figure class="item active">

        <picture>
          <source srcset="img/large_carousel_1.jpg" media="(min-width: 900px)"> <!-- large -->
          <source srcset="img/medium_carousel_1.jpg" media="(min-width: 600px)"> <!-- medium -->
          <img src="img/small_carousel_1.jpg" alt="Image" class="carousel-image-1"> <!-- small -->
        </picture>

        <figcaption class="carousel-caption">
          <p><form id="searchForm" class="form">
          <input type="text" name="cityOrPostal" id="cityOrPostal" placeholder="Cuidad or Codigo Postal" class="form">
          <button id="searchButton" class="form" on-click="return false;">Buscar Casa</button>
        </form></p>
        </figcaption>
      </figure >

      <figure  class="item">

        <picture>
          <source srcset="img/large_carousel_2.jpg" media="(min-width: 900px)"> <!-- large -->
          <source srcset="img/medium_carousel_2.jpg" media="(min-width: 600px)"> <!-- medium -->
          <img src="img/small_carousel_2.jpg" alt="Image" class="carousel-image-1"> <!-- small -->
        </picture>

        <figcaption class="carousel-caption">
          <h3>Buscando Vender?</h3>
          <p><a href="consejos.php#selling_tips" class="form"><button>Vender Su Casa</button></a></p>
        </figcaption>
      </figure >
    </aside>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Suigiente</span>
    </a>
  </section>