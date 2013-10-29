<?php
session_start();
?>

<!DOCTYPE html>
<!--[if IE 8]>               <html class="no-js lt-ie9" lang="nl" > <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="nl">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width" name="viewport">
    <title>Ernest van Aaken &raquo; Contact</title>
    <!-- I can haz SEO & sozial?! -->
    <meta property="og:site_name" content="Ernest van Aaken">
    <meta property="og:type" content="website">
    <meta property="og:description" content="De officiele website van gitaarvirtuoos Ernest van Aaken">
    <meta property="og:locale" content="nl_NL" />
    <link rel="apple-touch-icon" href="inc/img/etc/itouch.png">
    <!-- I can haz teh layout?! -->
    <link href="inc/css/foundation.css" rel="stylesheet">
    <link href="inc/css/typography.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Oswald|Lato" rel="stylesheet" type="text/css">    <link href="inc/css/eva.css" rel="stylesheet">
    <link href="inc/css/lightbox.css" rel="stylesheet">
    <link href="inc/css/jplayer.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div id="navigatie">
            <div class="row">
                <div class="small-12 large-3 columns" id="logo">
                    <a href="index.html"><img alt="Logo" src="inc/img/logo-top.png"></a>
                </div>

                <div class="small-12 large-9 columns">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="overernest.html">Over Ernest</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="agenda.html">Agenda</a></li>
                        <li><a href="nieuws.html">Nieuws</a></li>
                        <li class="actief"><a href="contact.php">Contact</a></li>
                </div>
            </div>
        </div>
    </nav>

    <div class="row content">
        <div class="row">
            <div class="socialmedia">
                <a href="https://www.facebook.com/ernest.vanaaken"><img src="inc/img/social-icons/header_fb.png"></a>
                <a href="https://twitter.com/evamuziek"><img src="inc/img/social-icons/header_twit.png"></a>
                <a href="http://www.youtube.com/user/ernestvanaaken"><img src="inc/img/social-icons/header_yt.png"></a>
            </div>

            <div class="small-12 large-8 columns">
                <div class="artikel">
                    <h2>Contact</h2>

                    <p>Op dit moment sta ik open voor boekingen in de regio Noord-Brabant. Heb je interesse in een boeking, of heb je een vraag voor me? Stuur me dan een e-mail of vul onderstaand contactformulier in en ik neem zo spoedig mogelijk contact met je op. Voor boekingen kun je ook telefonisch bij me terecht.</p>
                    <p><span style="color: #bc181f;"><strong>E-mailadres:</strong></span> ernest@checkdezewebsite.nl</p>
                    <p><span style="color: #bc181f;"><strong>Telefoonnummer:</strong></span> 0900-BOEKERNESTNU</p>
                    <p><img src="inc/img/layout/divider.png"></p>
                    <?php
                    $mail_ontv = 'jeroen@laylo.nl';

                    if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                    	if (empty($_POST['naam']))
                    		$naam_fout = 1;
                    	if (function_exists('filter_var') && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
                    		$email_fout = 1;
                    	if (!empty($_SESSION['antiflood']))
                    	{
                    		$seconde = 20;
                    		$tijd = time() - $_SESSION['antiflood'];
                    		if($tijd < $seconde)
                    		$antiflood = 1;
                    	}
                    }

                    if (($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($antiflood) || empty($_POST['naam']) || !empty($naam_fout) || empty($_POST['mail']) || !empty($email_fout) || empty($_POST['bericht']) || empty($_POST['onderwerp']))) || $_SERVER['REQUEST_METHOD'] == 'GET')
                    {
                    	if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    	{
                    		if (!empty($naam_fout))
                    			echo '<p>Uw naam is niet ingevuld.</p>';
                    		elseif (!empty($email_fout))
                    			echo '<p>Uw e-mailadres is niet juist.</p>';
                    		elseif (!empty($antiflood))
                    			echo '<p>U mag slechts &eacute;&eacute;n bericht per ' . $seconde . ' seconde versturen.</p>';
                    		else
                    			echo '<p>U bent uw naam, e-mailadres, onderwerp of bericht vergeten in te vullen.</p>';
                    	}

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

                    }
                    else
                    {
                      $datum = date('d/m/Y H:i:s');
                      $inhoud_mail = "===================================================\n";
                      $inhoud_mail .= "Ingevuld contact formulier " . $_SERVER['HTTP_HOST'] . "\n";
                      $inhoud_mail .= "===================================================\n\n";
                      $inhoud_mail .= "Naam: " . htmlspecialchars($_POST['naam']) . "\n";
                      $inhoud_mail .= "E-mail adres: " . htmlspecialchars($_POST['mail']) . "\n";
                      $inhoud_mail .= "Bericht:\n";
                      $inhoud_mail .= htmlspecialchars($_POST['bericht']) . "\n\n";
                      $inhoud_mail .= "Verstuurd op " . $datum . " via het IP adres " . $_SERVER['REMOTE_ADDR'] . "\n\n";
                      $inhoud_mail .= "Het ingevulde telefoonnummer: " . $telnummer . "\n\n";
                      $inhoud_mail .= "===================================================\n\n";
                      $headers = 'From: ' . htmlspecialchars($_POST['naam']) . ' <' . $_POST['mail'] . '>';
                      $headers = stripslashes($headers);
                      $headers = str_replace('\n', '', $headers);
                      $headers = str_replace('\r', '', $headers);
                      $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers));

                      $_POST['onderwerp'] = str_replace('\n', '', $_POST['onderwerp']);
                      $_POST['onderwerp'] = str_replace('\r', '', $_POST['onderwerp']);
                      $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp']));

                      if (mail($mail_ontv, $_POST['onderwerp'], $inhoud_mail, $headers))
                      {
                    	  $_SESSION['antiflood'] = time();
                    	  echo '<h2>Het contactformulier is verzonden</h2>
                    	  <p>Bedankt voor het invullen van het contactformulier. We zullen zo spoedig mogelijk contact met u opnemen.</p>';
                      }
                      else
                      {
                    	  echo '<h2>Het contactformulier is niet verzonden</h2>
                    	  <p><b>Onze excuses.</b> Het contactformulier kon niet verzonden worden.</p>';
                      }
                    }

                    ?>
                </div>
            </div>

            <div class="small-12 large-4 columns">
                <div class="artikel">
                    <h2>Agenda</h2>

                    <div class="agenda-item">
                        <a href="agenda1.html" class="agenda-datum"><span>17</span><br>sept</a>
                        <div class="agenda-titel">
                            <p>
                                Tuney Thursday<br>
                                Showtime <em>(Eindhoven)</em>
                            </p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <a href="agenda2.html" class="agenda-datum"><span>28</span><br>sept</a>
                        <div class="agenda-titel">
                            <p>
                                Ad van Meurs presenteert&hellip;<br>
                                De Afzakkerij <em>(Veghel)</em>
                            </p>
                        </div>
                    </div>
                    <div class="agenda-item">
                        <a href="agenda3.html" class="agenda-datum"><span>01</span><br>okt</a>
                        <div class="agenda-titel">
                            <p>
                                Live in 3voor12 caf&eacute; <br>
                                3voor12 caf&eacute; <em>(Eindhoven)</em>
                            </p>
                        </div>
                    </div>

                    <a href="agenda.html" class="leesmeer rechts">Naar de agenda</a>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="overernest.html">Over Ernest</a></li>
                        <li><a href="media.html">Media</a></li>
                        <li><a href="agenda.html">Agenda</a></li>
                        <li><a href="nieuws.html">Nieuws</a></li>
                        <li><a href="contact.php">Contact</a></li>
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
</body>
</html>