
    <section id="banner">
                    <header>
                        <h2><!--[-->Hi. You're looking at <strong>Helios</strong>.<!--]--></h2>
                        <p>
                            <!--[-->A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
                            Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.<!--]-->
                        </p>
                        
                    </header>
                </section>
<section class="carousel">
                    <div class="reel" style="overflow: visible; transform: translate(0px, 0px);">
<?php
                foreach ($gallaries as $key) {
                    # code...
                
?>
                        <article class="">
                            <a href="#" class="image featured"><img width="288px" height="201px" src="backend/images/gallary/<?php echo $key['image']; ?>" alt=""></a>
                            <header>
                                <h3><a href="#"><?php echo $key['caption']; ?></a></h3>
                            </header>
                            <p><!-- Commodo id natoque malesuada sollicitudin elit suscipit magna. --><?php echo $key['description']; ?></p>
                        </article>
<?php
        }
?>

                    </div>
                <span class="forward" style="display: block;"></span><span class="backward" style="display: block;"></span></section>