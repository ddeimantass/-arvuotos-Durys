       <article class="container">
            <section class="container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <h1>Šarvuotos Durys</h1>
                            <div class="line"></div>
                        </div>
                        <div class="row info-box">
                            <?php $i=1; foreach($pages->get(1)->akcija as $akcija) {
                                if(1==$i){
                                echo
                                '<div class="col-xs-6 col-sm-3 akc1">
                                    <div class="imgframe">
                                        <a id="durys1"><img class="image" src="'.$akcija->akcija_image->url.'"></a>
                                    </div>
                                    <h2 id="d1" class="d">'.$akcija->akcija_title.'</h2>
                                    <div class="akcija-box">
                                        <p class="akcija">Akcija</p>
                                        <p class="tag">
                                            <label class="old">'.$akcija->kaina_sena.'</label>
                                            <label class="new"> '.$akcija->kaina_nauja.'</label>
                                        </p>
                                    </div>
                                </div>
                                  ';}
                                if(2==$i){
                                echo
                                    '<div class="col-xs-6 col-sm-3 akc2">
                                        <div class="imgframe">
                                            <a id="durys2"><img class="image" src="'.$akcija->akcija_image->url.'"></a>
                                        </div>
                                        <h2 id="d2" class="d">'.$akcija->akcija_title.'</h2>
                                        <div class="akcija-box">
                                            <p class="akcija">Akcija</p>
                                            <p class="tag">
                                                <label class="old">'.$akcija->kaina_sena.'</label>
                                                <label class="new"> '.$akcija->kaina_nauja.'</label>
                                            </p>
                                        </div>
                                    </div>
                                ';
                                   $j=1; foreach ($pages->get(1)->akcija as $akcija) {
                                    echo'
                                        <div class="col-xs-12 aprasymas disnon" id="ap'.$j.'-mob">
                                            '.$akcija->akcija_desc.'
                                        </div>
                                        ';if(2==$j){break;};$j++;}
                                    }
                                if(3==$i){
                                    echo
                                        '<div class="col-xs-6 col-sm-3 akc3">
                                            <div class="imgframe">
                                                <a id="durys3"><img class="image" src="'.$akcija->akcija_image->url.'"></a>
                                            </div>
                                            <h2 id="d3" class="d">'.$akcija->akcija_title.'</h2>  
                                            <div class="akcija-box">
                                                <p class="akcija">Akcija</p>
                                                <p class="tag">
                                                    <label class="old">'.$akcija->kaina_sena.'</label>
                                                    <label class="new"> '.$akcija->kaina_nauja.'</label>
                                                </p>
                                            </div>
                                        </div>
                                    ';}
                                if(4==$i){
                                    echo
                                        '<div class="col-xs-6 col-sm-3 akc4">
                                            <div class="imgframe">
                                                <a id="durys4"><img class="image" src="'.$akcija->akcija_image->url.'"></a>
                                            </div>
                                            <h2 id="d4" class="d">'.$akcija->akcija_title.'</h2>
                                            <div class="akcija-box">
                                                <p class="akcija">Akcija</p>
                                                <p class="tag">
                                                    <label class="old">'.$akcija->kaina_sena.'</label>
                                                    <label class="new"> '.$akcija->kaina_nauja.'</label>
                                                </p>
                                            </div>
                                        </div>        
                                    </div>
                                    ';}
                                $i++;}

                                echo "<div class='row'>";
                                $j=1; foreach ($pages->get(1)->akcija as $akcija) {
                                    echo'
                                        <div class="col-xs-12 aprasymas disnon" id="ap'.$j.'">
                                            '.$akcija->akcija_desc.'
                                        </div>
                                        ';$j++;}
                                ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <p>Durys</p>
                            <div class="line"></div>
                        </div>
                        <div class="row info-box">
                            <div class="col-xs-6 col-sm-3 plotis1"  id='ic1-1'>
                                <div class='imgframe'>
                                    <div id='shadow1' class='iconShadow1'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon1.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic1-1 ic1'>Šarvuotos durys butamas</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis1" id='ic1-2'>
                                <div class='imgframe'>
                                    <div id='shadow2' class='iconShadow1'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon2.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic1-2 ic1'>Lauko apšiltintos šarvo durys</p>
                            </div>
                            <div class='col-xs-12 aprasymas1 disnon' id="ap1-1-mob">
                                <?php echo $pages->get(1)->durys_butams; ?>
                            </div>
                            <div class='col-xs-12 aprasymas1 disnon' id="ap1-2-mob">
                                <?php echo $pages->get(1)->durys_lauko; ?>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis1" id='ic1-3'>
                                <div class='imgframe'>
                                    <div id='shadow3' class='iconShadow1'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon3.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic1-3 ic1'>Pramoninės apsauginės durys</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis1" id='ic1-4'>
                                <div class='imgframe'>
                                    <div id='shadow4' class='iconShadow1'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon4.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic1-4 ic1'>Šarvuotų durų spynos</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-xs-12 aprasymas1 disnon ' id="ap1-1">
                                <?php echo $pages->get(1)->durys_butams; ?>    
                            </div>
                            <div class='col-xs-12 aprasymas1 disnon' id="ap1-2">
                                <?php echo $pages->get(1)->durys_lauko; ?>
                            </div>
                            <div class='col-xs-12 aprasymas1 disnon' id="ap1-3">
                                <?php echo $pages->get(1)->durys_pramonines; ?>
                            </div>
                            <div class='col-xs-12 aprasymas1 disnon' id="ap1-4">
                                <?php echo $pages->get(1)->durys_spynos; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="page-header">
                            <p>Kiti gaminiai</p>
                            <div class="line"></div>
                        </div>
                        <div class="row info-box">
                            <div class="col-xs-6 col-sm-3 plotis2" id='ic2-1'>
                                <div class='imgframe'>
                                    <div id='shadow5' class='iconShadow2'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon5.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic2-1 ic'>Metaliniai laiptai</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis2" id='ic2-2'>
                                <div class='imgframe'>
                                    <div id='shadow6' class='iconShadow2'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon6.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic2-2 ic'>Metaliniai vartai, tvoros</p>
                            </div>
                            <div class='col-xs-12 aprasymas2 disnon' id="ap2-1-mob">
                                <?php echo $pages->get(1)->laiptai; ?>
                            </div>
                            <div class='col-xs-12 aprasymas2 disnon' id="ap2-2-mob">
                                <?php echo $pages->get(1)->vartai; ?>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis2" id='ic2-3'>
                                <div class='imgframe'>
                                    <div id='shadow7' class='iconShadow2'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon7.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic2-3 ic'>Metalinės grotos</p>
                            </div>
                            <div class="col-xs-6 col-sm-3 plotis2" id='ic2-4'>
                                <div class='imgframe'>
                                    <div id='shadow8' class='iconShadow2'>
                                        <div class='sh'>
                                            <img class="icon" src="<?php echo $config->urls->templates?>images/icon8.png">
                                        </div>
                                    </div>
                                </div>
                                <p class='ic2-4 ic' >Kiti gaminiai iš metalo</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class='col-xs-12 aprasymas2 disnon ' id="ap2-1">
                                <?php echo $pages->get(1)->laiptai; ?>
                            </div>
                            <div class='col-xs-12 aprasymas2 disnon' id="ap2-2">
                                 <?php echo $pages->get(1)->vartai; ?>
                            </div>
                            <div class='col-xs-12 aprasymas2 disnon' id="ap2-3">
                                <?php echo $pages->get(1)->grotos; ?>
                            </div>
                            <div class='col-xs-12 aprasymas2 disnon' id="ap2-4">
                                <?php echo $pages->get(1)->kiti_gaminiai; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>