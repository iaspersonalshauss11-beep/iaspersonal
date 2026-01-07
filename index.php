<!DOCTYPE html>
<html>
<head>
<title>Zozor: la página web</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<style type="text/css">
  *{
    margin: 0px;
    padding: 0px;

  }
  .general{
    margin: auto;
    margin-top: 50px;
    width: 80%;
    max-width: 1000px;
    height: 800px;
  }
  .oferta{
    width: 30%;
    padding: 20px;
    box-sizing: border-box;
    background: #ccc;
    float: left;
  }
  .novedades{
    width: 70%;
    background:#fff;
    padding: 20px;
    float: left;
    box-sizing: border-box;
  }
  .ho{
    width: 50%;
    height: auto;
    
  }
  .titu{
    background: #EB4A33;
    margin: 20px 0;
    text-align:center;
  }
  .body{
    clear: both;
    float: left;
    margin-top: 20px;
    box-sizing: border-box;
    width: 100%;
    padding: 20px;
    color: #fff;
    background: #000;
  }
  @media screen and (max-width:800px){
   .novedades{
    width: 100%;
  }
  .oferta{
    width: 100%;
  }
  
   }
  @media screen and (max-width: 400px){
    .general{
      width: 100%;
    }
  }
</style>
<body>
<div class="general">
  <h1 class="titu">titular de mi sitio web</h1>
  <div class="oferta">a historia del Perú es la historia del territorio del actual Perú, que abarca desde los restos más antiguos de ocupación humana, hasta nuestros días. Los primeros grupos humanos llegaron hacia fines de la glaciación wisconsiense (XI milenio a. C.) como cazadores-recolectores (periodo lítico). Sus descendientes empezaron a desarrollar la horticultura hacia el VIII milenio a. C. (periodo arcaico), época en la que también se domesticaron los camélidos sudamericanos y empezaron a aparecer las primeras aldeas.</div>
  <div class="novedades">
  <img class="ho" src="frase.jpg">
  <br>
  El nacimiento de la civilización en el Perú corresponde a la civilización Caral, cuyo centro fue la ciudad de Caral, en la costa central peruana. Esta cultura se desarrolló entre 3200 y 1800 a. C.. Es la más antigua de las civilizaciones de América y contemporánea de otros grandes centros de irradiación cultural del mundo, como Sumeria, Egipto, China e India.</div>
  <div class="body">Desvanecida la civilización Caral hacia el 1800 a. C., esta dio paso a nuevas centros culturales en la costa, al norte y al sur. Surgió la cultura de Cupisnique y posteriormente, hacia el 1200 a. C., la Chavín, un importante centro que articuló las sociedades agrícolas de su época hasta el 200 a. C. El templo de Chavín de Huántar fue sin duda un importante santuario del Antiguo Perú que atraía a numerosos peregrinos. Tal debió ser la importancia de Chavín, de carácter religioso y cultural, más que política o militar.</div>
</div>
<video width="640" height="360" controls autoplay preload>
 
<source src="triste.mp4" type='video/mp4; codecs="avc1,mp4a"' />
<source src="mivideo.ogv" type='video/ogg; codecs="theora,vorbis"' />
<source src="mivideo.webm" type='video/webm; codecs="vp8,vorbis"' />
 
</video>
</body>
</html>
