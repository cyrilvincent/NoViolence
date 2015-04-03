<?php include 'header.php'?>

<link rel="stylesheet" type="text/css" href="sliderpro/dist/css/slider-pro.min.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="sliderpro/examples/css/examples.css" media="screen"/>
<script type="text/javascript" src="sliderpro/dist/js/jquery.sliderPro.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#example1' ).sliderPro({
			width: 960,
			height: 400,
			arrows: true,
			buttons: false,
			waitForLayers: true,
			thumbnailWidth: 200,
			thumbnailHeight: 100,
			thumbnailPointer: true,
			autoplay: true,
			autoScaleLayers: false,
			breakpoints: {
				500: {
					thumbnailWidth: 120,
					thumbnailHeight: 50
				}
			}
		});
	});
</script>

<div class="container body-content">
  <div class="row">
    <div class="col-sm-12">

      <div id="example1" class="slider-pro">
        <div class="sp-slides">

          <div class="sp-slide">
            <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/gandhi.jpg"/>

            <h3 class="sp-layer sp-black sp-padding"
              data-horizontal="40" data-vertical="10%"
              data-show-transition="left" data-hide-transition="left">
              Journée Internationale de la Non Violence de l'ONU
            </h3>

            <p class="sp-layer sp-white sp-padding hide-medium-screen"
              data-horizontal="40" data-vertical="22%"
              data-show-transition="left" data-show-delay="200" data-hide-transition="left" data-hide-delay="200">
              A lieu chaque année le 2 Octobre
            </p>

            <p class="sp-layer sp-black sp-padding hide-medium-screen"
              data-horizontal="40" data-vertical="34%" data-width="350"
              data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
              Date anniversaire de la naissance du Mahatma Gandhi, figure majeure de l'indépendance indienne et pionnier de la non-violence.
            </p>
          </div>

          <div class="sp-slide">
            <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/FBBanner.jpg"/>

            <h3 class="sp-layer sp-black sp-padding hide-medium-screen"
              data-horizontal="40" data-vertical="10%"
              data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
              Journée Internationale de la Non Violence
            </h3>

            <p class="sp-layer sp-black sp-padding"
              data-horizontal="40" data-vertical="30%"
              data-show-transition="left" data-hide-transition="up" data-show-delay="600" data-hide-delay="100">
              Le 2 Octobre 2015 en Isère et partout en France
            </p>
          </div>



          <div class="sp-slide">
            <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/relais.jpg"/>
          </div>

          <div class="sp-slide">
            <a href="contact.php">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
                    data-src="Content/i/mb.jpg" />

              <p class="sp-layer sp-black sp-padding"
                  data-position="bottomLeft"
                  data-show-transition="up" data-hide-transition="down">
                Organisé par les collectifs Marche Blanche et Villeneuve Debout
              </p>
            </a>
          </div>

          <div class="sp-slide">
            <a href="actions.php#sionseme">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/sionseme.jpg"/>
            </a>
          </div>

          <div class="sp-slide">
            <a href="actions.php#vincent">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/vincent.jpg"/>

              <p class="sp-layer sp-white sp-padding"
                data-horizontal="10" data-vertical="10" data-width="35%">
                Atelier de photographie <span class="hide-medium-screen">"C'est mon parc"</span>
              </p>
            </a>
          </div>

          <div class="sp-slide">
            <a href="actions.php">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
              data-src="Content/i/mariecurie.jpg"/>

              <p class="sp-layer sp-black sp-padding"
                data-position="bottomLeft" data-vertical="10" data-horizontal="2%" data-width="96%"
                data-show-transition="up" data-show-delay="400" data-hide-transition="down">
                De nombreuses actions organisées dans une centaine d'écoles <span class="hide-medium-screen">à travers la France jusqu'à Haiti</span>
              </p>
            </a>
          </div>

          <div class="sp-slide">
            <a href="actions.php#ruban">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
           data-src="Content/i/ruban.jpg"/>

              <p class="sp-layer sp-black sp-padding"
                data-position="bottomLeft" data-vertical="10" data-horizontal="2%" data-width="96%"
                data-show-transition="up" data-show-delay="400" data-hide-transition="down">
                Le ruban blanc est notre signe
              </p>
            </a>
          </div>

          <div class="sp-slide">
            <a href="actions.php#ecoles">
              <img class="sp-image" src="sliderpro/src/css/images/blank.gif"
                data-src="Content/i/respaix.jpg"/>

              <p class="sp-layer sp-black sp-padding"
                data-position="bottomLeft" data-vertical="10" data-horizontal="2%" data-width="96%"
                data-show-transition="up" data-show-delay="400" data-hide-transition="down">
                Une centaine d'écoles ont participées à cette journée
              </p>
            </a>
          </div>

        </div>

        <div class="sp-thumbnails hide-small-screen">
          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Journée Internationale de la Non Violence</div>
            <div class="sp-thumbnail-description">Le 2 Octobre 2015</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">ONU</div>
            <div class="sp-thumbnail-description">Date anniversaire de la naissance de Gandhi</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Le relais de la paix</div>
            <div class="sp-thumbnail-description">Course de 33Km</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Organisé par</div>
            <div class="sp-thumbnail-description">Les Collectifs Marche Blanche et Villeneuve Debout</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Si on sème dans nos vie</div>
            <div class="sp-thumbnail-description">Atelier géant de poésie</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Atelier de photographie</div>
            <div class="sp-thumbnail-description">C'est mon parc</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">De nombreuses actions</div>
            <div class="sp-thumbnail-description">organisées dans des écoles</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Ruban blanc</div>
            <div class="sp-thumbnail-description">Signe de non violence</div>
          </div>

          <div class="sp-thumbnail">
            <div class="sp-thumbnail-title">Respaix</div>
            <div class="sp-thumbnail-description">Dans les écoles</div>
          </div>

        </div>
      </div>
    </div>
    <hr/>
    <br/>
    <div class="row">
      <div class="col-sm-6">
        <p>
          Le 2 octobre 2015, la journée mondiale de la non violence aura lieu en Isère et partout en France.<br/>
          Le 2 octobre 2012 est également la date de la marche blanche d'Echirolles en banlieue de Grenoble en mémoire de Kevin et Sofiane assassinés pour un mauvais regard.
          Cette marche avait réuni 20000 personnes, ému la France entière et fait déplacer le président de la république François Hollande.<br/>
          <img src="Content/i/mb.jpg" width="480"/>
        </p>
        <p>
          Résumé de la dernière Journée Internationale de la Non Violence.<br/>
          <iframe frameborder="0" width="480" height="270" src="//www.dailymotion.com/embed/video/x273qgj" allowfullscreen=""></iframe>
        </p>
        <hr/>
        <p>
          Vous voulez organiser une action contre la violence? N'hésitez pas à nous <a href="contact.php">contacter</a>.
        </p>
        <hr/>
        <p>
          <a href="https://twitter.com/LaNonViolence">#NonViolence</a>.
        </p>
        <hr/>
        <p>
          Le ruban blanc a été choisi comme logo, de nombreux ateliers sont organisés sur ce thème.<br/>
          <img src="Content/i/ruban.jpg" width="480"/>
        </p>
      </div>
      <div class="col-sm-6">
        <p>
          La Journée internationale de la non-violence se déroule annuellement le 2 octobre, date anniversaire de la naissance du Mahatma Gandhi, figure majeure de l'indépendance indienne et pionnier de la non-violence. Cette journée a été choisie par l'assemblée générale des Nations unies et annoncée le 15 juin 2007.<br/>
          <img src="Content/i/gandhi.jpg" width="480"/>
        </p>
        <hr/>
        <p>
          Nous organisons avec l'aide de centaines de citoyens <a href="actions.php">des actions dans toute la France</a> et au delà (Haïti, Maroc, Sénégal, ...)<br/>
          <img src="Content/i/FBBanner.jpg" width="480"/>
        </p>
        <hr/>
        <p>
          Le chanteur Calogero, nous soutient dans nos actions.<br/>
          <iframe width="480" height="270" src="http://api.dmcloud.net/player/pubpage/4e709e80f325e11e5f000025/540dace506361d6031c31cbf/c23b8cde345e4274ad33cfb3008b2127?wmode=opaque&start=89" frameborder="0" allowfullscreen=""></iframe>
        </p>
      </div>

    </div>
  </div>
  <hr />
  <?php include 'footer.php'?>
