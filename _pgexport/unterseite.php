<?php
/*
 Template Name: Unterseite
 Template Post Type: post, page
*/
?>
<?php get_header( 'unterseite' ); ?>

        <div id="toggler" class="menu__toggler fixed flex md:hidden" onclick="toggle()">
            <span></span>
        </div>
        <header class="w-full z-30 xl:mx-auto xl:w-8/12 2xl:w-7/12"> 
            <nav class="flex flex-wrap md:mb-5">
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="absolute h-52 hidden left-0 z-20 md:block md:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;load&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}" data-pg-ia-hide=""> 
                <div id="menu" class="absolute flex menu ml-auto mt-10 pl-5 space-y-2 w-full z-10 md:h-20 md:items-center md:relative md:space-x-1 md:space-y-0 md:text-right md:w-auto" data-name="nav-menu" style="background-repeat: no-repeat; background-position: left top; background-size: cover; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Distress%20Press.png');"> 
                    <a onclick="toggle()" href="/" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Startseite', 'buffet_1_punkt_null' ); ?></a>
                    <a onclick="toggle()" href="/konzept" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Das Konzept', 'buffet_1_punkt_null' ); ?></a>
                    <a onclick="toggle()" href="/#support" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></a> 
                </div>                 
            </nav>             
        </header>
        <main id="main" class="mx-auto overflow-hidden relative xl:w-8/12 2xl:w-7/12">
            <section class="relative xl:text-center"> 
                <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe.jpeg'); background-position: center center; background-size: cover; height: 250px;" class="flex flex-wrap-reverse mb-5 relative">
                    <h1 class="md:absolute md:bottom-0 md:inset-x-0 md:mb-10 md:text-8xl text-6xl text-secondary_buffet-600"><?php the_title(); ?></h1>
                    <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_White-01.png" class="block bottom-20 h-52 left-0 z-20 md:hidden md:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;now&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}">
                </div>                 
            </section>
        </main>
        <section class="py-10 relative md:capitalize">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_06_orange1.png" class="absolute bottom-20 right-0 w-8/12 md:w-5/12 xl:w-4/12" data-pg-ia-scene="{&quot;s&quot;:&quot;auto&quot;,&quot;l&quot;:[{&quot;p&quot;:&quot;scroll&quot;,&quot;a&quot;:&quot;rotateInDownRight&quot;}]}"> 
            <div class="container mb-20 mx-auto relative xl:w-8/12 2xl:w-7/12"> 
                <div class="flex flex-wrap items-center mb-4 px-4">
                    <div class="mb-10 mx-auto w-full">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>             
        </section>
        <section class="relative md:capitalize"> 
            <div class="container mb-20 mx-auto relative xl:w-8/12 2xl:w-7/12"> 
</div>             
        </section>
        <footer class="bg-primary_buffet-200 pt-12">
            <div class="container mx-auto px-4 relative"> 
                <div class="flex flex-wrap -mx-4"> 
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Spendenkonto', 'buffet_1_punkt_null' ); ?></h2> 
                        <p><b><?php _e( 'IBAN:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'DE50 4306 0967 1076 2640 00', 'buffet_1_punkt_null' ); ?></p>
                        <p><b><?php _e( 'BIC:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'GENODEM1GLS&nbsp;', 'buffet_1_punkt_null' ); ?></p>
                        <p><b><?php _e( 'Bank:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'GLS Gemeinschaftsbank eG', 'buffet_1_punkt_null' ); ?> </p>
                        <p><b><?php _e( 'Kontoinhaber:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'Materialbuffet e.V.', 'buffet_1_punkt_null' ); ?></p>
                        <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="bottom-28 left-5 w-28 md:bottom-20" data-pg-ia-hide="" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;pulse&quot;},{&quot;trg&quot;:&quot;mousedown&quot;,&quot;a&quot;:&quot;bounce&quot;}]}" data-pg-ia-scene="{&quot;dir&quot;:&quot;a&quot;,&quot;s_t&quot;:&quot;start&quot;,&quot;s_s&quot;:&quot;start&quot;,&quot;s_scroller&quot;:&quot;$.mb-5&quot;,&quot;e_t&quot;:&quot;end&quot;,&quot;e_target&quot;:&quot;$.mb-5&quot;,&quot;e_s&quot;:&quot;start&quot;,&quot;l&quot;:[{&quot;name&quot;:&quot;roll-In&quot;,&quot;a&quot;:&quot;rollIn&quot;,&quot;p&quot;:&quot;scroll&quot;}],&quot;s&quot;:&quot;onLeave&quot;}"> 
                    </div>
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Folge uns auf Insta', 'buffet_1_punkt_null' ); ?></h2> 
                        <p class="mb-4"><?php _e( 'F??r unser aktuelles Angebot. Dir wird das Wasser im Mund zusammenlaufen.', 'buffet_1_punkt_null' ); ?></p> 
                        <div class="flex-wrap inline-flex mx-auto space-x-3"> 
                            <a title="Instagram" href="https://www.instagram.com/materialbuffet_ev/?fbclid=IwAR3qxLQ41AZWTqjhaijiiX3cZEQ2eZEtahbVsooAfsbeJ_uxGuU4Edvyyng" target="_blank"><i class="fa-2x fa-instagram fab hover:text-bold_buffet-300"></i></a>
                            <a title="Email" href="mailto:hallo@materialbuffet.de"><i class="fa fa-2x fa-envelope hover:text-bold_buffet-300"></i></a>
                        </div>
                    </div>
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Auf der Suche nach Leckerbissen?', 'buffet_1_punkt_null' ); ?></h2> 
                        <p class="mb-4"><?php _e( 'Newsletter gibt&apos;s noch nicht, aber bald. Meld dich am besten schonmal an, damit du keine Schmankerl verpasst!', 'buffet_1_punkt_null' ); ?></p> 
                        <form> 
                            <div class="bg-white border-2 border-gray-400 border-pastel_buffet-500 flex items-center mb-6 overflow-hidden p-1"> 
                                <input class="appearance-none border-color_buffet-100 border-solid flex-1 font-light outline-none p-2 w-full" placeholder="Enter email..." type="email"> 
                                <button type="submit" class="bg-pastel_buffet-500 font-medium inline-block px-6 py-2 text-center text-white uppercase" aria-label="submit">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 inline-block w-4"> 
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>                                         
                                    </svg>
                                </button>                                 
                            </div>                             
                        </form>                         
                    </div>                     
                </div>                 
                <div class="mt-24 py-4 text-sm md:mt-0"> 
                    <hr class="border-gray-400 mb-4"> 
                    <div class="flex flex-wrap -mx-4 items-center"> 
                        <div class="px-4 py-2 w-full md:flex-1"> 
                            <p><?php _e( '&copy; 2021. All Rights Reserved - Material Buffet e.V.', 'buffet_1_punkt_null' ); ?></p> 
                        </div>                         
                        <div class="px-4 py-2 w-full sm:w-auto"> 
                            <a href="/datenschutz" class="hover:text-mpink-500"><?php _e( 'Datenschutz', 'buffet_1_punkt_null' ); ?></a> |                      
                            <a href="/impressum" class="hover:text-mpink-500"><?php _e( 'Impressum', 'buffet_1_punkt_null' ); ?></a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </footer>        

<?php get_footer( 'unterseite' ); ?>