<?php
/*
 Template Name: Startseite
 Template Post Type: post, page
*/
?>
<?php get_header( 'startseite' ); ?>

        <div id="toggler" class="menu__toggler fixed flex lg:hidden" onclick="toggle()">
            <span></span>
        </div>
        <header class="bg-opacity-90 bg-pale_buffet-100 sticky top-0 w-full z-30 xl:mx-auto"> 
            <nav class="flex flex-wrap lg:mx-auto xl:w-8/12 2xl:w-7/12">
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="cursor-pointer hidden z-20 lg:block lg:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;load&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}" data-pg-ia-hide="" data-pg-ia-scene='{"s":"onLeave","d":"25%","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"height":"220px"}},{"t":"tween","p":0,"d":1.01,"l":{"height":"93px"}}]}]}}],"on":"desktop"}'> 
                <div id="menu" class="absolute flex lg:h-20 lg:items-center lg:relative lg:space-y-0 lg:text-right lg:w-auto menu ml-auto mt-10 pl-5 space-y-2 w-full z-10" data-name="nav-menu" style="background-repeat: no-repeat; background-position: left top; background-size: contain; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element1.png');" data-pg-ia-scene='{"s":"onLeave","d":"25%","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"marginTop":40}},{"t":"tween","p":0,"d":0.99,"l":{"marginTop":15}}]}]}}],"on":"desktop"}'> 
                    <a onclick="toggle()" href="#konzept" class="font-light hover:text-color_buffet-100 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Das Konzept', 'buffet_1_punkt_null' ); ?></a> 
                    <a onclick="toggle()" href="#speisekarte" class="font-light hover:text-color_buffet-200 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></a> 
                    <a onclick="toggle()" href="#support" class="font-light hover:text-color_buffet-600 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Unterstützen', 'buffet_1_punkt_null' ); ?></a>
                    <a onclick="toggle()" href="#lageplan" class="font-light hover:text-color_buffet-400 px-0 py-2 transition-colors uppercase md:px-4"><?php _e( 'Lageplan', 'buffet_1_punkt_null' ); ?></a> 
                </div>                 
            </nav>             
        </header>
        <main id="main" class="container mx-auto overflow-hidden relative xl:w-8/12 2xl:w-7/12">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element2.png" class="absolute bottom-28 overflow-hidden right-28" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;scrolling&quot;,&quot;a&quot;:&quot;rotateIn&quot;}]}" data-pg-ia-hide="">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-24 overflow-hidden right-0" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;scrolling&quot;,&quot;a&quot;:&quot;rotateIn&quot;}]}" data-pg-ia-hide="">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-0 overflow-hidden right-24" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;scrolling&quot;,&quot;a&quot;:&quot;rotateIn&quot;}]}" data-pg-ia-hide="">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-0 overflow-hidden right-0 w-10" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;scrolling&quot;,&quot;a&quot;:&quot;rotateIn&quot;}]}" data-pg-ia-hide="">
            <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
            <div style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/buffet.jpg'); background-position: center center; background-size: cover; height: 450px;<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>" class="flex flex-col-reverse flex-grow-0 mb-10 relative">
                <h1 class="mb-16 ml-4 text-6xl text-secondary_buffet-600 md:absolute md:bottom-0 md:inset-x-0 md:mb-10 md:text-8xl"><?php _e( 'material buffet', 'buffet_1_punkt_null' ); ?></h1>
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_White-01.png" class="block bottom-20 h-52 left-0 w-52 z-20 lg:hidden md:relative" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;now&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}">
            </div>
            <section class="relative xl:text-center" id="konzept"> 
                <div class="mx-auto px-4 md:text-center md:w-full"> 
                    <div class="flex flex-wrap mb-16 mx-auto"> 
                        <div class="mb-5 w-full xl:mt-10" id="hero-text"> 
                            <h1 class="font-extrabold mb-4 md:text-5xl text-3xl text-left"><?php _e( 'Mahlzeit! -&nbsp;Wir sind das Materialbuffet -&nbsp;dein gemeinnütziger Second-Hand-Baumarkt in Leipzig', 'buffet_1_punkt_null' ); ?></h1>
                            <h1 class="font-extrabold mb-4 text-2xl md:text-4xl"></h1> 
                            <p class="font-light leading-tight mb-6 text-2xl text-left"><?php _e( 'Durch die Verwertung von Reststoffen vermeiden wir Müll und fördern Materialkreisläufe. Unsere Vision: ein Zentrum für gebrauchte Materialien, kreative Wiederverwendung und Ressourcenschonung in Leipzig. Yummy.', 'buffet_1_punkt_null' ); ?></p> 
                        </div>                         
                        <div class="mx-auto">
                            <a href="/konzept" class="bg-pastel_buffet-300 duration-500 ease-in-out font-medium hover:-translate-y-1 hover:scale-110 hover:shadow-xl inline-block px-20 py-2 rounded-full text-center text-white transform transition uppercase"><?php _e( 'Erfahre mehr', 'buffet_1_punkt_null' ); ?></a>
                        </div>                         
                    </div>                     
                </div>                 
            </section>
        </main>
        <section class="overflow-x-hidden py-20 relative md:capitalize" id="speisekarte"> 
            <div class="container mx-auto relative xl:w-8/12 2xl:w-7/12"> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element6.png" class="-left-16 -top-12 absolute overflow-hidden w-1/3 z-0 lg:left-0" data-pg-ia-scene="{&quot;s&quot;:&quot;onEnter&quot;,&quot;l&quot;:[{&quot;name&quot;:&quot;gentleFadeInLeft&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;autoAlpha&quot;:0,&quot;x&quot;:&quot;-25%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;l&quot;:{&quot;autoAlpha&quot;:1,&quot;x&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}]}">
                <div class="flex flex-wrap items-center mb-4 px-4"> 
                    <div class="mx-auto w-full"> 
                        <h2 class="font-medium mb-1 uppercase lg:text-mpink-500"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></h2>
                        <h2 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Rette mit uns Reststoffe und Baumaterialien vor dem Müll!', 'buffet_1_punkt_null' ); ?> </h2> 
                        <p class="mb-4 text-2xl"><?php _e( 'Bei uns bekommst du lecker gebrauchtes Material von Kultureinrichtungen, Veranstaltungen und Unternehmen. Á la carte oder direkt vom Buffet - aber auf jeden Fall: 100% Bio, 100% Fairtrade. Dafür stehen wir mit unserem Namen.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>                     
                </div>
                <div class="flex flex-wrap mb-20 text-center md:-ml-4">
                    <div class="w-6/12 w-full md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/holz.jpeg'); background-size: cover; background-position: center center;"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Holz', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-size: cover; background-position: center center; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/metall.jpeg');"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Metall', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe.jpeg'); background-size: cover; background-position: center center;"></span>
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Farben', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/electro.jpeg'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Kabel &amp; Lampen', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/stoffe.jpeg'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'Stoffe', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                    <div class="w-full w-6/12 md:w-4/12">
                        <div> 
                            <span class="bg-white h-40 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60
" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/andereLeckerein.jpeg'); background-size: cover; background-position: center center;"></span> 
                            <p class="font-bold mb-2 text-xl"><?php _e( 'und andere Leckereien', 'buffet_1_punkt_null' ); ?></p> 
                        </div>
                    </div>
                </div>                 
            </div>
            <div class="h-36 md:h-60 xl:mx-auto xl:w-11/12" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element8.png'); background-repeat: repeat-x; background-size: cover; background-position: center center;" data-pg-ia-scene='{"l":[{"a":"fadeIn"}]}'></div>             
        </section>
        <section class="mx-auto overflow-x-hidden xl:w-8/12 2xl:w-7/12" id="support"> 
            <div class="container mx-auto px-4 relative text-center md:text-left" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_15_blue#1.png');"> 
                <h2 class="font-medium mb-1 uppercase"><?php _e( 'Unterstütze Uns', 'buffet_1_punkt_null' ); ?></h2>
                <h2 class="font-bold lg:text-5xl mb-4 relative text-3xl w-max"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element9.png" class="-right-32 -top-10 absolute"/><?php _e( 'Dont´t waste it - taste it!', 'buffet_1_punkt_null' ); ?></h2> 
                <p class="font-light mb-6 text-2xl"><?php _e( 'Unterstütze unseren gemeinnützigen Verein und fördere so ressourcenschonende Materialkreisläufe. Für ein zukunftsweisendes Leipzig.', 'buffet_1_punkt_null' ); ?></p> 
                <div class="fitems-center grid grif-col-1 justify-center mb-10 md:grid-cols-2 md:text-center"> 
                    <a href="/material-spenden"><div class="p-4"> 
                            <div class="bg-pastel_buffet-300 duration-500 ease-in-out hover:-translate-y-1 hover:scale-110 hover:shadow-xl px-10 py-12 rounded-3xl shadow-lg transform transition"> 
                                <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Material', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                                <p class="pb-10"><?php _e( 'Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!', 'buffet_1_punkt_null' ); ?></p> 
                            </div>                             
                        </div> </a> 
                    <div class="p-4"> 
                        <a href="/moneten-spenden"><div class="bg-pastel_buffet-300 duration-500 ease-in-out hover:-translate-y-1 hover:scale-110 hover:shadow-xl px-10 py-12 rounded-3xl shadow-lg transform transition"> 
                                <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Moneten', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                                <p class="pb-10"><?php _e( 'Mit deiner Spende unterstützt du unsere Arbeit. Ob einmal oder dauerhaft - jeder Euro hilft uns dabei Material zu retten und weiter zu geben!', 'buffet_1_punkt_null' ); ?></p> 
                            </div></a>
                    </div>                     
                </div>                 
            </div>             
        </section>
        <section class="py-20 text-center 2xl:mx-auto 2xl:w-9/12" id="partnerInnen"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_04_turquise1.png" class="absolute" data-pg-ia-scene='{"l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"autoAlpha":0,"transformOrigin":"left bottom","rotationZ":-30},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":1,"l":{"autoAlpha":1,"transformOrigin":"left bottom","rotationZ":0},"e":"Power1.easeOut"}]}]}}]}'>
            <div class="container mx-auto px-4 relative"> 
                <h2 class="font-bold leading-tight mb-4 text-3xl lg:text-5xl"><?php _e( 'Auf den Geschmack gekommen', 'buffet_1_punkt_null' ); ?></h2> 
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
        <section class="items-center mx-auto relative lg:mb-10 xl:w-9/12 2xl:w-7/12" id="lageplan"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/anfahrt.png" class="lg:relative lg:w-7/12 xl:block xl:left-20">
            <div class="w-full lg:absolute lg:bottom-0 lg:right-0 lg:w-6/12 xl:w-5/12"> 
                <div class="bg-white lg:relative p-10 shadow-xl sm:p-16 z-10">
                    <h2 class="font-medium mb-1 uppercase"><?php _e( 'Lageplan', 'buffet_1_punkt_null' ); ?></h2> 
                    <h2 class="font-bold leading-tight mb-6 text-2xl uppercase"><?php _e( 'So findest du uns', 'buffet_1_punkt_null' ); ?></h2> 
                    <p class="mb-2"><?php _e( 'eden zweiten &amp; vierten Freitag im Monat von 12-18 Uhr', 'buffet_1_punkt_null' ); ?><?php _e( 'Ehemalige Kantine in der Diezmannstraße 20, Haus 3.', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2"><?php _e( 'Jeden Freitag zwischen 10 und 18 Uhr.', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2 md:hidden"><?php _e( 'Koordinaten:', 'buffet_1_punkt_null' ); ?> <a href="geo:51.3159863,12.3160746" target="_blank" class="text-bold_buffet-300"><?php _e( '51.3159863,12.3160746', 'buffet_1_punkt_null' ); ?></a></p>
                    <div class="mb-2 hidden md:block">
                        <?php _e( 'Kopiere dir die Koordinaten:', 'buffet_1_punkt_null' ); ?> 
                        <button data-tooltip-target="tooltip-click" data-tooltip-trigger="click" type="button" class="coordinates text-bold_buffet-300  " data-clipboard-text="51.3159863,12.3160746">
                            <?php _e( '51.3159863,12.3160746', 'buffet_1_punkt_null' ); ?>
                        </button>                         
                        <div id="tooltip-click" role="tooltip" class="tooltip absolute z-10 inline-block bg-gray-900 font-medium shadow-sm text-white py-2 px-3 text-sm rounded-lg opacity-0 invisible">
                            <?php _e( 'Kopiert!', 'buffet_1_punkt_null' ); ?>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <p><?php _e( 'ÖPNV: Tram Linie 1, 3 Haltestelle Diezmannstraße', 'buffet_1_punkt_null' ); ?></p>
                </div>                 
            </div>             
        </section>
        <footer class="bg-pastel_buffet-500 pt-12">
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
                                <input class="appearance-none border-none flex-1 focus:border-t-0 font-light outline-none p-2 w-full" placeholder="Mail" type="email" name="ne" id="tnp-1" value="" required> 
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

<?php get_footer( 'startseite' ); ?>