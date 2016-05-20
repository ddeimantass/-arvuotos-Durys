<?php
include("./header.php");
include("./basic.php"); 
?>
<article class="container" >
    <section class="container" id="kainoslangu">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header" >
                    <p>Šarvuotų Durų kainos</p>
                    <div class="line"></div>
                </div>
                <p class='durysTitle' > <?php echo $page->durys_title; ?><p>
                <div class='kainos-durys'>
                    <?php $i=1;foreach ($page->duru_kainos as $durys){echo "<h3>".$durys->durys."<label>".$durys->kaina."</label></h3>";}?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="page-header" >
                    <p>Plastikinių langų kainos</p>
                    <div class="line"></div>
                </div>
                <table class='langas'>
                    <tr>
                        <td><img src="<?php echo $config->urls->templates?>images/layer_1_1.png"></td>
                        <td><?php echo $page->virtuves_langas;?></td>
                    <tr>
                    <tr>
                        <td><img src="<?php echo $config->urls->templates?>images/layer_2_2.png"></td>
                        <td><?php echo $page->didysis_langas;?></td>
                    <tr>
                    <tr>
                        <td><img src="<?php echo $config->urls->templates?>images/layer_3_4.png"></td>
                        <td><?php echo $page->balkono_langas;?></td>
                    <tr>
                </table>
            </div>
        </div>
    </section>
</article>
<?php
include("./footer.php"); 
?>