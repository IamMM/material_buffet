<?php
/*
 Template Name: Konzept
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

        <div id="toggler" class="menu__toggler lg:hidden" onclick="toggle()">
            <span></span>
        </div>
        <header class="bg-bg-100 bg-opacity-90 mx-auto sticky top-0 w-full z-30"> 
            <nav class="lg:flex lg:flex-wrap lg:mx-auto lg:container lg:w-10/12 xl:w-8/12 2xl:w-7/12">
                <a href="/"><img id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="cursor-pointer hidden lg:block lg:relative z-20" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;load&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}" data-pg-ia-hide="" data-pg-ia-scene='{"s":"onLeave","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"height":"220px"}},{"t":"tween","p":0,"d":1.01,"l":{"height":"93px"}}]}]}}],"d":"25%"}'></a> 
                <div id="menu" class="absolute flex menu ml-auto mt-10 pl-5 space-y-2 z-50 lg:h-20 lg:items-center lg:relative lg:space-y-0 lg:text-right lg:w-auto" style="background-repeat: no-repeat; background-position: left top; background-size: contain; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element1.png');" data-name="nav-menu" data-pg-ia-scene='{"s":"onLeave","d":"25%","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"marginTop":40}},{"t":"tween","p":0,"d":0.99,"l":{"marginTop":15}}]}]}}],"on":"desktop"}'> 
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<a onclick="toggle()" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                            wp_nav_menu( array(
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
                                'walker' => new PG_Smart_Walker_Nav_Menu()
                        ) ); ?>
                    <?php endif; ?> 
                </div>
            </nav>             
        </header>
        <main id="main" class="mx-auto overflow-hidden relative lg:w-10/12 xl:w-8/12 2xl:w-7/12 text-center">
            <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe.jpeg'); background-position: center center; background-size: cover;">
                <div class="container flex flex-col-reverse h-full mx-auto p-4 relative md:h-80">
                    <h1 class="break text-6xl text-left text-white lg:text-8xl lg:absolute lg:bottom-0 lg:inset-x-0 lg:mb-10 lg:text-center"><?php the_title(); ?></h1>
                    <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_White-01.png" class="block bottom-20 h-52 left-0 z-20 lg:hidden" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;now&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}"></a>
                </div>
            </div>             
        </main>
        <section class="my-10 py-10 relative">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element2.png" class="absolute bottom-20 right-0 w-8/12 md:w-5/12 xl:w-4/12" data-pg-ia-scene="{&quot;s&quot;:&quot;auto&quot;,&quot;l&quot;:[{&quot;p&quot;:&quot;scroll&quot;,&quot;a&quot;:&quot;rotateInDownRight&quot;}]}"> 
            <div class="container mb-20 mx-auto relative lg:w-10/12 xl:w-8/12 2xl:w-7/12"> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element6.png" class="-top-10 absolute w-1/3 z-0" data-pg-ia-scene="{&quot;s&quot;:&quot;onEnter&quot;,&quot;l&quot;:[{&quot;name&quot;:&quot;gentleFadeInLeft&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;autoAlpha&quot;:0,&quot;x&quot;:&quot;-25%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;l&quot;:{&quot;autoAlpha&quot;:1,&quot;x&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}]}">
                <div class="flex flex-wrap items-center mb-20 px-4 z-20"> 
                    <div class="mb-10 mx-auto w-full"> 
                        <h1 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Rohstoffe verschwenden? Bäh', 'buffet_1_punkt_null' ); ?></h1> 
                        <p class="mb-4 text-xl md:text-2xl"><?php _e( 'Ob Theater oder Ausstellungshäuser, nach Events, Film- und Fernsehproduktionen, in Betrieben und bei Großveranstaltungen - überall landen wiederverwendbare Materialien im Müll: Holz, Farben, Textilien, Metall, Deko, Ausstattung, Büroartikel, Fehlproduktionen. Viel zu schade und scheiße für die Umwelt? That&apos;s what we thought.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="mb-10 mx-auto w-full"> 
                        <h1 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Lokale Materialkreisläufe fördern', 'buffet_1_punkt_null' ); ?></h1> 
                        <p class="mb-4 text-xl md:text-2xl"><?php _e( 'Unser Ziel ist es, Reststoffe vor der Entsorgung zu retten und zurück in den Kreislauf zu führen - indem wir sie Menschen wieder zugänglich machen. Dafür werden die Materialien bei uns gesammelt, aufbereitet, sortiert und schließlich weitergegeben. Ob Holz für&apos;s Hochbett, Stoffe für den Kids-Workshop, Deko für den nächsten Rave oder Teppiche für das Kunstfestival. Ob auf Dauer oder nur als Leihgabe. Wir haben was für jeden Geschmack.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="mb-10 mx-auto w-full"> 
                        <h1 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Rezepte für das gute Leben: das Bildungsbuffet', 'buffet_1_punkt_null' ); ?></h1> 
                        <p class="mb-4 text-xl md:text-2xl"><?php _e( 'Mit dem Bildungsbuffet planen wir ein breites Weiterbildungsangebot rund um Themen wie Zero Waste, Circular Society, Upcycling &amp; DIY. Wir glauben daran, dass nur durch Sensibilisierung, Bildung und Selbsterfahrung nachhaltiges Handeln in den Alltag implementiert werden kann. Und. Das. Müssen. Wir. Alle.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="mb-10 mx-auto w-full">
                        <h1 class="mb-4 text-3xl text-center md:text-5xl"><?php _e( 'Schmeckt Dir?', 'buffet_1_punkt_null' ); ?></h1>
                    </div>
                    <div class="mx-auto text-center">
                        <a href="/moneten-spenden" class="bg-pastel_buffet-300 duration-500 ease-in-out font-medium hover:-translate-y-1 hover:scale-110 hover:shadow-xl inline-block px-20 py-2 rounded-full text-center text-white text-xl transform transition uppercase w-full"><?php _e( 'Unterstütze Uns', 'buffet_1_punkt_null' ); ?></a>
                    </div>                     
                </div>
                <div class="flex flex-wrap items-start mb-4 px-4"> 
                    <div class="mx-auto w-full"> 
                        <h1 class="mb-4 text-3xl md:text-5xl pb-5"><?php _e( 'Wie viel CO2 können wir durch Wiederverwendung sparen', 'buffet_1_punkt_null' ); ?></h1> 
                    </div>
                    <div class="md:w-2/3 mb-10 mx-auto"> 
                        <p class="mb-5 text-xl md:text-2xl"><?php _e( 'wenn Materialien nicht entsorgt und für Andere nicht neu produziert werden müssen? Das haben wir uns auch gefragt und dir mal folgende Beispiele berechnet. Wissenschaft können wir nämlich auch.', 'buffet_1_punkt_null' ); ?></p> 
                        <p class="mb-5 text-xl md:text-2xl"><?php _e( 'Zum Vergleich: Pro Jahr bindet eine Buche ca. 12,5 Kilogramm CO2. Du müsstest also 80 Bäume pflanzen, um 1 Tonne CO2 durch Bäume wieder zu kompensieren.', 'buffet_1_punkt_null' ); ?></p>
                        <p class="mb-5 text-xl md:text-2xl"><?php _e( '*Kilogramm CO2-Äquivalent = Masseinheit zur Vereinheitlichung der Klimawirkung der unterschiedlichen Treibhausgase.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <img class="md:w-1/3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/Posterkomplett.png"/> 
                </div>
                <div class="mx-auto text-center text-xl w-full">
                    <a href="/material-spenden" class="bg-pastel_buffet-300 duration-500 ease-in-out font-medium hover:-translate-y-1 hover:scale-110 hover:shadow-xl inline-block px-20 py-2 rounded-full text-center text-white text-xl transform transition uppercase"><?php _e( 'Jetzt Material spenden und CO2 sparen', 'buffet_1_punkt_null' ); ?></a>
                </div>
            </div>             
        </section>
        <footer class="bg-pastel_buffet-500 overflow-hidden pt-12">
            <div class="container mx-auto px-4 relative"> 
                <div class="flex flex-wrap -mx-4"> 
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Spendenkonto', 'buffet_1_punkt_null' ); ?></h2> 
                        <p><b><?php _e( 'IBAN:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'DE50 4306 0967 1076 2640 00', 'buffet_1_punkt_null' ); ?></p>
                        <p><b><?php _e( 'BIC:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'GENODEM1GLS&nbsp;', 'buffet_1_punkt_null' ); ?></p>
                        <p><b><?php _e( 'Bank:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'GLS Gemeinschaftsbank eG', 'buffet_1_punkt_null' ); ?> </p>
                        <p><b><?php _e( 'Kontoinhaber:', 'buffet_1_punkt_null' ); ?></b> <?php _e( 'Materialbuffet e.V.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Folge uns auf Insta', 'buffet_1_punkt_null' ); ?><br></h2> 
                        <p class="mb-4"><?php _e( 'Für unser aktuelles Angebot. Dir wird das Wasser im Mund zusammenlaufen.', 'buffet_1_punkt_null' ); ?></p> 
                        <div class="flex-wrap inline-flex mx-auto space-x-3"> 
                            <a title="Instagram" href="https://www.instagram.com/materialbuffet_ev/?fbclid=IwAR3qxLQ41AZWTqjhaijiiX3cZEQ2eZEtahbVsooAfsbeJ_uxGuU4Edvyyng" target="_blank"><i class="fa-2x fa-instagram fab hover:text-bold_buffet-300"></i></a>
                            <a title="Email" href="mailto:hallo@materialbuffet.de"><i class="fa fa-2x fa-envelope hover:text-bold_buffet-300"></i></a>
                        </div>
                    </div>
                    <div class="p-4 w-full sm:w-1/2 lg:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Auf der Suche nach Leckerbissen?', 'buffet_1_punkt_null' ); ?></h2> 
                        <p class="mb-4"><?php _e( 'Newsletter gibt&apos;s noch nicht, aber bald. Meld dich am besten schonmal an, damit du keine Schmankerl verpasst!', 'buffet_1_punkt_null' ); ?></p> 
                        <form method="post" action="https://materialbuffet.de/?na=s">
                            <input type="hidden" name="nlang" value="">
                            <div class="tnp-field tnp-field-email bg-white border-2 border-gray-400 border-pastel_buffet-500 flex items-center mb-6 overflow-hidden p-1"> 
                                <input class="appearance-none border-none flex-1 focus:border-t-0 font-light outline-none p-2 w-full" placeholder="Deine E-Mail" type="email" name="ne" id="tnp-1" value="" required> 
                                <button type="submit" class="tnp-submit bg-pastel_buffet-500 font-medium inline-block px-6 py-2 text-center text-white uppercase" aria-label="submit" ype="submit" value="Submit">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 inline-block w-4"> 
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>                                         
                                    </svg>
                                </button>                                 
                            </div>                             
                        </form>
                        <div class="tnp tnp-subscription">
</div>                         
                    </div>                     
                </div>                 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element10.png" class="w-8/12" data-pg-ia-scene='{"s":"onEnter","d":"100%","l":[{"a":"fadeInRight"}],"o":"-200px"}'/>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element10.png" class="ml-40 w-8/12" data-pg-ia-scene='{"s":"onEnter","o":"-200px","l":[{"a":"fadeInRight"}],"d":"75%"}'/>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element10.png" class="ml-80 w-8/12" data-pg-ia-scene='{"s":"onEnter","o":"-200px","l":[{"a":"fadeInRight"}],"d":"50%"}'/>
                <div class="py-4 text-sm"> 
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

<?php get_footer(); ?>