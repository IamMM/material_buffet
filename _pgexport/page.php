<?php get_header( 'page' ); ?>

        <div id="toggler" class="menu__toggler fixed flex md:hidden" onclick="toggle()">
            <span></span>
        </div>
        <header class="w-full z-30 xl:mx-auto xl:w-8/12 2xl:w-7/12"> 
            <nav class="flex flex-wrap md:mb-5">
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="absolute h-52 hidden left-0 z-20 md:block md:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;load&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}" data-pg-ia-hide=""> 
                <div id="menu" class="absolute flex menu ml-auto mt-10 pl-5 space-y-2 w-full z-10 md:h-20 md:items-center md:relative md:space-x-1 md:space-y-0 md:text-right md:w-auto" data-name="nav-menu" style="background-repeat: no-repeat; background-position: left top; background-size: contain; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Distress%20Press.png');"> 
                    <a onclick="toggle()" href="#konzept" class="font-light hover:text-color_buffet-100 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Das Konzept', 'buffet_1_punkt_null' ); ?></a> 
                    <a onclick="toggle()" href="#speisekarte" class="font-light hover:text-color_buffet-200 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></a> 
                    <a onclick="toggle()" href="#lageplan" class="font-light hover:text-color_buffet-400 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Lageplan', 'buffet_1_punkt_null' ); ?></a> 
                    <a onclick="toggle()" href="#support" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Unterstützen', 'buffet_1_punkt_null' ); ?></a> 
                </div>                 
            </nav>             
        </header>
        <main id="main" class="mx-auto overflow-hidden relative xl:w-8/12 2xl:w-7/12">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_02_turquise1.png" class="absolute bottom-0 left-1/2 overflow-hidden" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;scrolling&quot;,&quot;a&quot;:&quot;rotateIn&quot;}]}" data-pg-ia-hide="">
            <section class="relative xl:text-center"> 
                <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe.jpeg'); background-position: center center; background-size: cover; height: 450px;" class="flex flex-col-reverse flex-grow-0 mb-10 relative">
                    <h1 class="mb-16 ml-4 text-6xl text-secondary_buffet-600 md:absolute md:bottom-0 md:inset-x-0 md:mb-10 md:text-8xl"><?php _e( 'material buffet', 'buffet_1_punkt_null' ); ?></h1>
                    <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_White-01.png" class="block bottom-20 h-52 left-0 w-52 z-20 md:hidden md:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;now&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}">
                </div>
                <div class="mx-auto px-4 md:text-center md:w-full" id="konzept"> 
                    <div class="flex flex-wrap mb-16 mx-auto"> 
                        <div class="mb-5 w-full xl:mt-10" id="hero-text"> 
                            <h1 class="font-extrabold mb-4 md:text-5xl text-3xl text-left"><?php _e( 'Mahlzeit! -&nbsp;Wir sind das Materialbuffet -&nbsp;dein gemeinnütziger Second-Hand-Baumarkt in Leipzig', 'buffet_1_punkt_null' ); ?></h1>
                            <h1 class="font-extrabold mb-4 text-2xl md:text-4xl"></h1> 
                            <p class="font-light leading-tight mb-6 text-2xl text-left"><?php _e( 'Durch die Verwertung von Reststoffen vermeiden wir Müll und fördern Materialkreisläufe. Unsere Vision: ein Zentrum für gebrauchte Materialien, kreative Wiederverwendung und Ressourcenschonung in Leipzig. Yummy.', 'buffet_1_punkt_null' ); ?></p> 
                        </div>                         
                        <div class="mx-auto">
                            <a href="/konzept.html" class="bg-secondary_buffet-300 font-medium inline-block px-20 py-2 rounded-full rounded-tl-none text-center text-white uppercase transition duration-500 ease-in-out transform hover:bg-primary_buffet-300 hover:shadow-xl hover:-translate-y-1 hover:scale-110"><?php _e( 'Erfahre mehr', 'buffet_1_punkt_null' ); ?></a>
                        </div>                         
                    </div>                     
                </div>                 
            </section>
        </main>
        <section class="overflow-x-hidden py-20 relative md:capitalize" id="speisekarte">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_01_blue1.png" class="absolute overflow-hidden" data-pg-ia-scene="{&quot;s&quot;:&quot;onEnter&quot;,&quot;l&quot;:[{&quot;name&quot;:&quot;gentleFadeInLeft&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;autoAlpha&quot;:0,&quot;x&quot;:&quot;-25%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;l&quot;:{&quot;autoAlpha&quot;:1,&quot;x&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}]}">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_06_orange1.png" class="absolute bottom-20 right-0 w-8/12 md:w-5/12 xl:w-4/12" data-pg-ia-scene="{&quot;s&quot;:&quot;auto&quot;,&quot;l&quot;:[{&quot;p&quot;:&quot;scroll&quot;,&quot;a&quot;:&quot;rotateInDownRight&quot;}]}"> 
            <div class="container mx-auto relative xl:w-8/12 2xl:w-7/12"> 
                <div class="flex flex-wrap items-center mb-4 px-4"> 
                    <div class="mx-auto w-full"> 
                        <h2 class="font-medium mb-1 lg:text-mpink-500"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></h2>
                        <h1 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Rette mit uns Reststoffe und Baumaterialien vor dem Müll!', 'buffet_1_punkt_null' ); ?> </h1> 
                        <p class="mb-4 text-2xl"><?php _e( 'Bei uns bekommst du lecker gebrauchtes Material von Kultureinrichtungen, Veranstaltungen und Unternehmen. Á la carte oder direkt vom Buffet - aber auf jeden Fall: 100% Bio, 100% Fairtrade. Dafür stehen wir mit unserem Namen.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>                     
                </div>
                <div class="flex flex-wrap text-center md:-ml-4">
                    <div class="w-6/12 w-full md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/Holz.JPG'); background-size: cover; background-position: center center;"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Holz', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/schrauben.JPG'); background-size: cover; background-position: center center;"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Schrauben', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe2.jpeg'); background-size: cover; background-position: center center;"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Farben', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/kabel.JPG'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Kabel &amp; Lampen', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/stoffe.jpg'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Stoffe', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60
" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/andereLeckerein.JPG'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'und andere Leckereien', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                </div>                 
            </div>             
        </section>
        <section class="bg-gray-50 items-center mx-auto my-20 relative lg:my-20 xl:w-9/12 2xl:w-7/12" id="lageplan"> 
            <img class="-right-20 absolute hidden z-20 md:block xl:right-20" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_05_red.png" data-pg-ia-scene="{&quot;l&quot;:[{&quot;a&quot;:&quot;lightSpeedIn&quot;}]}">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/anfahrt.png" class="hidden lg:block lg:left-10 lg:relative xl:block xl:left-20">
            <div class="w-full lg:absolute lg:bottom-0 lg:right-10 lg:w-6/12 xl:w-5/12"> 
                <div class="bg-white p-10 shadow-xl z-10 sm:p-16 lg:relative xl:relative"> 
                    <h2 class="font-bold leading-tight mb-6 text-2xl uppercase"><?php _e( 'So findest du uns', 'buffet_1_punkt_null' ); ?></h2> 
                    <p class="mb-2"><?php _e( 'eden zweiten &amp; vierten Freitag im Monat von 12-18 Uhr', 'buffet_1_punkt_null' ); ?><?php _e( 'Ehemalige Kantine in der Diezmannstraße 20, Haus 3.', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2"><?php _e( 'Jeden Freitag zwischen 10 und 18 Uhr.', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2"><?php _e( 'Koordinaten:', 'buffet_1_punkt_null' ); ?> <a href="geo:51.3159863,12.3160746" target="_blank" class="text-primary_buffet-300"><?php _e( '51.3159863,12.3160746', 'buffet_1_punkt_null' ); ?></a></p>
                    <p><?php _e( 'ÖPNV: Tram Linie 1, 3 Haltestelle Diezmannstraße', 'buffet_1_punkt_null' ); ?></p>
                </div>                 
            </div>             
        </section>
        <section class="mx-auto overflow-x-hidden py-20 xl:w-8/12 2xl:w-7/12" id="support"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_01_magenta1.png" class="absolute right-0" data-pg-ia-scene="{&quot;l&quot;:[{&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;autoAlpha&quot;:0,&quot;x&quot;:&quot;25%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;l&quot;:{&quot;autoAlpha&quot;:1,&quot;x&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}],&quot;s&quot;:&quot;onEnter&quot;}">
            <div class="container mx-auto px-4 relative text-center md:text-left" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_15_blue#1.png');"> 
                <h2 class="font-medium mb-1 uppercase"><?php _e( 'Unterstütze Uns', 'buffet_1_punkt_null' ); ?></h2>
                <h3 class="font-bold mb-4 text-3xl lg:text-4xl"><?php _e( 'Dont´t waste it - taste it!', 'buffet_1_punkt_null' ); ?></h3> 
                <p class="font-light mb-6 text-2xl"><?php _e( 'Unterstütze unseren gemeinnützigen Verein und fördere so ressourcenschonende Materialkreisläufe. Für ein zukunftsweisendes Leipzig.', 'buffet_1_punkt_null' ); ?></p> 
                <div class="fitems-center grid grif-col-1 justify-center mb-10 md:grid-cols-2 md:text-center"> 
                    <a href=""><div class="p-4"> 
                            <div class="bg-white px-10 py-12 rounded-3xl shadow-lg transition duration-500 ease-in-out transform hover:bg-secondary_buffet-300 hover:shadow-xl hover:-translate-y-1 hover:scale-110"> 
                                <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Material', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                                <p class="pb-10"><?php _e( 'Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!', 'buffet_1_punkt_null' ); ?></p> 
                            </div>                             
                        </div> </a> 
                    <div class="p-4"> 
                        <div class="bg-white duration-500 ease-in-out hover:-translate-y-1 hover:bg-secondary_buffet-400 hover:scale-110 hover:shadow-xl px-10 py-12 rounded-3xl shadow-lg transform transition"> 
                            <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Moneten', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                            <p class="pb-10"><?php _e( 'Mit deiner Spende unterstützt du unsere Arbeit. Ob einmal oder dauerhaft - jeder Euro hilft uns dabei Material zu retten und weiter zu geben!', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>                     
                </div>                 
            </div>             
        </section>
        <section class="py-20 text-center 2xl:mx-auto 2xl:w-9/12" id="partnerInnen"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_04_turquise1.png" class="absolute" data-pg-ia-scene="{&quot;l&quot;:[{&quot;a&quot;:&quot;rotateInDownLeft&quot;}]}">
            <div class="container mx-auto px-4 relative"> 
                <h2 class="font-bold leading-tight mb-4 text-3xl lg:text-4xl"><?php _e( 'Auf den Geschmack gekommen', 'buffet_1_punkt_null' ); ?></h2> 
                <p class="text-2xl"><?php _e( 'Diese Unternehmen und Kulturbetriebe arbeiten bereits mit uns zusammen.', 'buffet_1_punkt_null' ); ?></p>
                <div class="grid grid-cols-6 items-center justify-items-center mt-20" style="grid-gap:40px;" id="logos"> 
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/mdbk.png"> 
                    </div>
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/mediacityleipzig.png"> 
                    </div>
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/grassi.png"> 
                    </div>
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/posterlounge.png"> 
                    </div>
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/dok.svg"> 
                    </div>
                    <div class="col-span-2 md:col-span-1"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/gfzk.png"> 
                    </div>                     
                </div>
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
                        <p class="mb-4"><?php _e( 'Für unser aktuelles Angebot. Dir wird das Wasser im Mund zusammenlaufen.', 'buffet_1_punkt_null' ); ?></p> 
                        <div class="flex-wrap inline-flex mx-auto space-x-3"> 
                            <a href="https://www.instagram.com/materialbuffet_ev/?fbclid=IwAR3qxLQ41AZWTqjhaijiiX3cZEQ2eZEtahbVsooAfsbeJ_uxGuU4Edvyyng" class="hover:text-blue-600 hover:text-bold_buffet-300" aria-label="instagram"> <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"> 
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"></path>                                     
                                </svg></a>
                            <a href="mailto:hallo@materialbuffet.de" class="hover:text-color_buffet-400" aria-label="youtube"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/svg_shapes/email-svgrepo-com.svg" class="h-5 w-5"></a> 
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
                            <a href="#" class="hover:text-mpink-500"><?php _e( 'Datenschutz', 'buffet_1_punkt_null' ); ?></a> |                      
                            <a href="#" class="hover:text-mpink-500"><?php _e( 'Impressum', 'buffet_1_punkt_null' ); ?></a> 
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </footer>        

<?php get_footer( 'page' ); ?>