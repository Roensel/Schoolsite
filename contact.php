<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="nl" > <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="nl">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <title>Ernest van Aaken » Contact</title>
    <!-- I can haz SEO & sozial?! -->
    <meta property="og:site_name" content="Ernest van Aaken">
    <meta property="og:type" content="website">
    <meta property="og:description" content="De officiele website van gitaarvirtuoos Ernest van Aaken">
    <meta property="og:locale" content="nl_NL" />
    <link rel="apple-touch-icon" href="inc/img/etc/itouch.png">
    <!-- I can haz teh layout?! -->
    <link href="inc/css/foundation.css" rel="stylesheet">
    <link href="inc/css/typography.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
    <link href="inc/css/eva.css" rel="stylesheet">
    <link href="inc/css/lightbox.css" rel="stylesheet">
    <link href="inc/css/jplayer.blue.monday.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div id="navigatie">
            <div class="row">
                <div class="small-12 large-4 columns" id="logo">
                    <a href="index.html"><img alt="Logo" src="inc/img/logo-top.png"></a>
                </div>

                <div class="small-12 large-8 columns">
                    <ul>
                        <li class="actief"><a href="index.html">Home</a></li>
                        <li><a href="overernest.html">Over Ernest</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Nieuws</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="row content">
        <div class="row">
            <div class="small-12 large-8 columns">
                <div class="artikel">
                    <h2>Contact</h2>

                    <p>Op dit moment sta ik open voor boekingen in de regio Noord-Brabant. Heb je interesse in een boeking, of heb je een vraag voor me? Stuur me dan een e-mail of vul onderstaand contactformulier in en ik neem zo spoedig mogelijk contact met je op. Voor boekingen kun je ook telefonisch bij me terecht.</p>
                    <p><span style="color: #bc181f;"><strong>E-mailadres:</strong></span> ernest@checkdezewebsite.nl</p>
                    <p><span style="color: #bc181f;"><strong>Telefoonnummer:</strong></span> 0900-BOEKERNESTNU</p>
                    <p><img src="inc/img/layout/divider.png"></p>
                    <?php
                    echo '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" />
                      <p>
                          <label for="naam">Naam:</label>
                          <input  class="input" type="text" id="naam" name="naam" value="' . (isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : '') . '" /><br />
                      </p>
                      <p>    
                          <label for="mail">E-mailadres:</label>
                          <input class="input" type="text" id="mail" name="mail" value="' . (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') . '" /><br />
                      </p>
                      <p>   
                          <label for="onderwerp">Onderwerp:</label>
                          <input class="input" type="text" id="onderwerp" name="onderwerp" value="' . (isset($_POST['onderwerp']) ? htmlspecialchars($_POST['onderwerp']) : '') . '" /><br />
                      </p>
                      <p>    
                          <label for="bericht">Bericht:</label><br />
                          <textarea id="bericht" name="bericht" rows="8">' . (isset($_POST['bericht']) ? htmlspecialchars($_POST['bericht']) : '') . '</textarea><br />
                      </p>
                      <p>   
                          <input type="submit" class="knopje" name="submit" value=" Versturen " />
                      </p>
                      </form>';
                    ?>
                </div>

                <div class="artikel">
                    <h2>Fotogallerij</h2>

                    <div>
                        <a href="inc/img/gallery/large1.jpg" class="th"><img src="inc/img/gallery/thumb1.jpg" alt=""></a>
                        <a href="inc/img/gallery/large2.jpg" class="th"><img src="inc/img/gallery/thumb2.jpg" alt=""></a>
                        <a href="inc/img/gallery/large3.jpg" class="th"><img src="inc/img/gallery/thumb3.jpg" alt=""></a>
                    </div>
                    <div>
                        <a href="#" class="leesmeer rechts">Meer foto&rsquo;s</a>

                    </div>
                </div>
            </div>

            <div class="small-12 large-4 columns">
                <div class="artikel">
                    <h2>Agenda</h2>

                    <div class="agenda-item">
                        <div class="agenda-datum"><span>17</span><br>sept</div>
                        <div class="agenda-titel">
                            <p>
                                Blues a billy<br>
                                Effenaar <em>(Eindhoven)</em>
                            </p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-datum"><span>28</span><br>sept</div>
                        <div class="agenda-titel">
                            <p>
                                Prive concert<br>
                                Kraaij en Balder <em>(Eindhoven)</em>
                            </p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <div class="agenda-datum"><span>01</span><br>okt</div>
                        <div class="agenda-titel">
                            <p>
                                Blues live on stage<br>
                                Paradiso <em>(Amsterdam)</em>
                            </p>
                        </div>
                    </div>

                    <a href="#" class="leesmeer rechts">Naar de agenda</a>
                </div>

                <div class="artikel">
                    <h2>Muziek</h2>

                    <div class="jp-jplayer" id="jplayer_sidebar"></div>

                    <div class="jp-audio" id="jp_container_1">
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface">
                                <ul class="jp-controls">
                                    <li><a class="jp-play" href="javascript:;" tabindex="1">play</a></li>
                                    <li><a class="jp-pause" href="javascript:;" tabindex="1">pause</a></li>
                                    <li><a class="jp-stop" href="javascript:;" tabindex="1">stop</a></li>
                                </ul>

                                <div class="jp-progress">
                                    <div class="jp-current-time"></div>
                                    <div class="jp-duration"></div>
                                    <div class="jp-seek-bar">
                                        <div class="jp-play-bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="jp-playlist">
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div id="voet">
                <div class="small-12 large-3 columns">
                    <h2>Sitemap</h2>

                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Over Ernest</a></li>
                        <li><a href="#">Media</a></li>
                        <li><a href="#">Agenda</a></li>
                        <li><a href="#">Nieuws</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="small-12 large-3 columns">
                    <h2>Links</h2>

                    <ul>
                        <li><a href="http://wwww.kraaienbalder.nl">Kraaienbalder</a></li>
                        <li><a href="http://www.ticketservice.nl">Ticketservice</a></li>
                        <li><a href="http://wwww.paradiso.nl">Paradiso</a></li>
                    </ul>
                </div>

                <div class="small-12 large-3 columns">
                    <h2>Copyright</h2>

                    <p>
                        &copy; 2013 Copyrighted by Ernest van Aaken | Alle rechten voorbehouden
                    </p>
                </div>

                <div class="small-12 large-3 columns footer-socialmedia">
                    <h2>Social media</h2>

                    <a href="https://www.facebook.com/ernest.vanaaken"><img src="inc/img/social-icons/footer_fb.png"></a>
                    <a href="https://twitter.com/evamuziek"><img src="inc/img/social-icons/footer_twit.png"></a>
                    <a href="http://www.youtube.com/user/ernestvanaaken"><img src="inc/img/social-icons/footer_yt.png"></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Load teh scriptz -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="inc/js/foundation.min.js"></script>
    <script src="inc/js/jplayer/jquery.jplayer.min.js"></script>
    <script src="inc/js/jplayer/add-on/jplayer.playlist.min.js"></script>
    <script src="inc/js/toelie.js"></script>
    <script>
    $(document).ready(function() {
      $('.th').magnificPopup({type:'image'});
    });
    </script>
</body>
</html>