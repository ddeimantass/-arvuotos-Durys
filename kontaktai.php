<?php
include("./header.php");
include("./basic.php"); 
?>
<article class="container" >
    <section class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header">
                    <p id="kontaktai">Kontaktai</p>
                    <div class="line"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-12 kontaktai-left">
                        <?php echo $page->kontaktiniai_duomenys; ?>
                    </div>
                    <div class="col-sm-6 col-xs-12 kontaktai-right">
                        <form method="post" action="./"><br/>
                            <input type="text" id='vardas' name="vardas" placeholder="Jūsų vardas" value="<?= $input->vardas; ?>"><br/>
                            <input type="text" id='pastas' name="pastas" placeholder="Jūsų el.paštas" value="<?= $input->pastas; ?>"><br/>
                            <input type="text" id='telefonas' name="telefonas" placeholder="Jūsų telefono numeris" value="<?= $input->telefonas; ?>"><br/>
                            <input type="text" id='tema' name="tema" placeholder="Tema" value="<?= $input->tema; ?>"><br/>
                            <textarea id='laiskas' name="laiskas" placeholder="Žinutės tekstas"><?= $input->laiskas; ?></textarea><br/>
                            <button class='siusti' type="button" onclick="getData()">Siųsti žinutę</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

<div id="map-canvas" style="width:100%;height:750px;"></div>

<?php
include("./footer.php"); 
?>