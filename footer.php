        <footer>
            <div class="disnon mail-bottom">
                <form class="pop-up" method="post" action="./"><br/>
                    <input type="text" id='vardas' name="vardas" placeholder="Jūsų vardas" value="<?= $input->vardas; ?>"><br/>
                    <input type="text" id='pastas' name="pastas" placeholder="Jūsų el.paštas" value="<?= $input->pastas; ?>"><br/>
                    <input type="text" id='telefonas' name="telefonas" placeholder="Jūsų telefono numeris" value="<?= $input->telefonas; ?>"><br/>
                    <input type="text" id='tema' name="tema" placeholder="Tema" value="<?= $input->tema; ?>"><br/>
                    <textarea id='laiskas' name="laiskas" placeholder="Žinutės tekstas"><?= $input->laiskas; ?></textarea><br/>
                    <button class='siusti' type="button" onclick="getData()" >Siųsti žinutę</button>
                </form>
            </div>
            <div class="container">
                <div class="tab-bottom">
                    <div class='row'>
                        <div class="col-sm-4">
                            <div class="bottom-c">
                                <table align="center">
                                    <tr>
                                        <td class='telefonas'><img src="<?php echo $config->urls->templates?>images/phone.png"></td>
                                        <td><?php $i=1;foreach ($pages->get(1016)->telefonai as $telefonai){if($i==1){echo "<p>".$telefonai->telefonas.", </p>";$i++;}else{echo "<p>".$telefonai->telefonas."</p>";}} ?></td>
                                    <tr>
                                    <tr>
                                        <td><img src="<?php echo $config->urls->templates?>images/mail.png"></td>
                                        <td><?php echo $pages->get(1016)->pastas; ?></td>
                                    <tr>
                                </table>
                            </div>
                        </div>                
                        <div class="col-sm-4">
                            <div class="social-box">
                                <img class="mail" src="<?php echo $config->urls->templates?>images/mailb.png">
                                <a href="<?php echo $pages->get(1016)->facebook; ?>"> <img src="<?php echo $config->urls->templates?>images/fbb.png"></a>
                                <a href="<?php echo $pages->get(1016)->gplus; ?>"><img src="<?php echo $config->urls->templates?>images/g+.png"></a>
                            </div>
                        </div>                
                        <div class="col-sm-4">
                           <nav class=" nav navbar-default bottom-nav" >
                                <ul class="nav navbar-nav ">
                                    <li class="<?php if($page->id==1){echo "Here ";}?> menu-link durys"><a class="bottom" href="<?php echo $pages->get(1)->url?>">Šarvuotos durys</a></li>
                                    <li class='<?php if($page->id==1015){echo "Here ";}?> menu-link kainosb'><a class="bottom" href="<?php echo $pages->get(1015)->url?>">Kainos</a></li>
                                    <li class="<?php if($page->id==1016){echo "Here ";}?> menu-link kontaktai"><a class="bottom" href="<?php echo $pages->get(1016)->url?>">Kontaktai</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="mob-bottom">
                    <div class="bottom-c">
                        <table align="center">
                            <tr>
                                <td class='telefonas'><img src="<?php echo $config->urls->templates?>images/phone.png"></td>
                                <td><?php $i=1;foreach ($pages->get(1016)->telefonai as $telefonai){if($i==1){echo "<p>".$telefonai->telefonas.", </p>";$i++;}else{echo "<p>".$telefonai->telefonas."</p>";}} ?></td>
                            <tr>
                            <tr>
                                <td><img src="<?php echo $config->urls->templates?>images/mail.png"></td>
                                <td><?php echo $pages->get(1016)->pastas; ?></td>
                            <tr>
                        </table>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="bottom-navigation">
                                    <li class="<?php if($page->id==1){echo "Here ";}?> menu-link durys"><a class="bottom" href="<?php echo $pages->get(1)->url?>">Šarvuotos durys</a></li>
                                    <li class='<?php if($page->id==1015){echo "Here ";}?> menu-link kainos kainosb'><a class="bottom" href="<?php echo $pages->get(1015)->url?>">Kainos</a></li>
                                    <li class="<?php if($page->id==1016){echo "Here ";}?> menu-link kontaktai"><a class="bottom" href="<?php echo $pages->get(1016)->url?>">Kontaktai</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="social-box">
                        <img class="mail" src="<?php echo $config->urls->templates?>images/mailb.png">
                        <a href='<?php echo $pages->get(1016)->facebook; ?>'> <img src="<?php echo $config->urls->templates?>images/fbb.png"></a>
                        <a href='<?php echo $pages->get(1016)->gplus; ?>'> <img src="<?php echo $config->urls->templates?>images/g+.png"></a>
                    </div>
                </div>
                <div class="teises">
                    <p>© 2016 Visos teisės saugomos</p>
                </div>
                <div class="net">
                    <a href='http://netmaster.lt/'><img src="<?php echo $config->urls->templates?>images/netmasterbrown.png"></a>
                </div>
                <div class='seo'>
                <?php 
                    echo "<p>".$page->h1."</p>";
                foreach ($page->h2 as $h2) {
                    echo "<p>".$h2->h2seo."</p>";
                }
                foreach ($page->h3 as $h3) {
                    echo "<p>".$h3->h3seo."</p>";
                }
                ?>
                </div>
            </div>
        </footer>
        
        <script src = "//code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src = "<?php echo $config->urls->templates?>js/bootstrap.js" type="text/javascript" ></script>
        <script type="text/javascript" src="<?php echo $config->urls->templates?>js/functions.js"></script>
        <script type="text/javascript">
            <?php if($page->id==1015){echo"kainosDown();";}?>
            <?php if($page->id==1016){echo "kontaktaiDown();";} ?>
        </script>
    </body>
</html>