<?php
include("./header.php");
include("./basic.php"); 
?>
<article class="container">
    <section class="container">
        <div>
            <div id='mazas'>
                <?php echo $page->apie_trumpas; ?>
            </div>
            <div id="didelis" class='disnon'>
                <?php echo $page->apie_ilgas; ?>
            </div>
        </div>
        <div class="row sk-box">
            <div class="col-sm-4 col-xs-3 top-border"></div>
            <div class="col-sm-4 col-xs-6 skaityti">Skaityti plačiau</div>
            <div class="col-sm-4 col-xs-3 top-border"></div>
        </div>
    </section>
</article>
<?php
include("./footer.php"); 
?>