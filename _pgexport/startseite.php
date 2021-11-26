<?php
/*
 Template Name: Startseite
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

        <div id="toggler" class="menu__toggler md:hidden" onclick="toggle()">
            <span></span>
        </div>
        <header class="bg-bg-100 bg-opacity-90 mx-auto sticky top-0 w-full z-30"> 
            <nav class="md:flex md:flex-wrap md:mx-auto md:container lg:w-10/12 xl:w-8/12 2xl:w-7/12">
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="cursor-pointer hidden md:block md:relative z-20" data-pg-ia="{&quot;l&quot;:[{&quot;trg&quot;:&quot;load&quot;,&quot;a&quot;:&quot;rollIn&quot;},{&quot;trg&quot;:&quot;mouseenter&quot;,&quot;a&quot;:&quot;swing&quot;}]}" data-pg-ia-hide="" data-pg-ia-scene='{"s":"onLeave","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"height":"220px"}},{"t":"tween","p":0,"d":1.01,"l":{"height":"93px"}}]}]}}],"d":"25%"}'> 
                <div id="menu" class="absolute flex md:h-20 md:items-center md:relative md:space-y-0 md:text-right md:w-auto menu ml-auto mt-10 pl-5 space-y-2 z-50" style="background-repeat: no-repeat; background-position: left top; background-size: contain; background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element1.png');" data-name="nav-menu" data-pg-ia-scene='{"s":"onLeave","d":"25%","l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"marginTop":40}},{"t":"tween","p":0,"d":0.99,"l":{"marginTop":15}}]}]}}],"on":"desktop"}'> 
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
        <main id="main" class="md:container md:mx-auto overflow-hidden relative lg:w-10/12 xl:w-8/12 2xl:w-7/12">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element2.png" class="absolute bottom-28 overflow-hidden right-28" data-pg-ia-hide="" data-pg-ia-scene='{"l":[{"a":"rotateIn"}]}'>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-24 overflow-hidden right-0" data-pg-ia-hide="" data-pg-ia-scene='{"l":[{"a":"rotateIn"}]}'>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-0 overflow-hidden right-24" data-pg-ia-hide="" data-pg-ia-scene='{"l":[{"a":"rotateIn"}]}'>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element3.png" class="absolute bottom-0 overflow-hidden right-0 w-10" data-pg-ia-hide="" data-pg-ia-scene='{"l":[{"a":"rotateIn"}]}'>
            <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
            <div class="title-image" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                <div class="container flex h-full items-center justify-center relative md:hidden">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_icon&word_White-01.png" class="w-11/12 z-20 md:hidden">
                </div>
            </div>
            <section class="container mx-auto relative xl:text-center" id="konzept"> 
                <div class="mx-auto p-4 md:text-center md:w-full"> 
                    <div class="flex flex-wrap mb-16 mx-auto"> 
                        <div class="mb-5 w-full xl:mt-10" id="hero-text"> 
                            <h1 class="font-extrabold mb-4 md:text-5xl text-3xl text-left"><?php _e( 'Mahlzeit!', 'buffet_1_punkt_null' ); ?> </h1>
                            <h1 class="font-extrabold mb-4 md:text-5xl text-3xl text-left"><?php _e( 'Wir sind das Materialbuffet -&nbsp;dein gemeinnütziger Second-Hand-Baumarkt in Leipzig', 'buffet_1_punkt_null' ); ?></h1>
                            <h1 class="font-extrabold mb-4 text-2xl md:text-4xl"></h1> 
                            <p class="font-light leading-tight mb-6 text-left text-xl md:text-2xl"><?php _e( 'Durch die Verwertung von Reststoffen vermeiden wir Müll und fördern Materialkreisläufe. Unsere Vision: ein Zentrum für gebrauchte Materialien, kreative Wiederverwendung und Ressourcenschonung in Leipzig. Yummy.', 'buffet_1_punkt_null' ); ?></p> 
                        </div>                         
                        <div class="mx-auto">
                            <a href="/rezept" class="bg-pastel_buffet-300 duration-500 ease-in-out font-medium hover:-translate-y-1 hover:scale-110 hover:shadow-xl inline-block px-20 py-2 rounded-full text-center text-white text-xl transform transition uppercase"><?php _e( 'Erfahre mehr', 'buffet_1_punkt_null' ); ?></a>
                        </div>                         
                    </div>                     
                </div>                 
            </section>
        </main>
        <section class="overflow-x-hidden py-20 relative" id="speisekarte"> 
            <div class="container mx-auto relative z-0 lg:w-10/12 xl:w-8/12 2xl:w-7/12"> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element6.png" class="-left-16 -top-12 absolute pointer-events-none w-1/3 lg:left-0" data-pg-ia-scene="{&quot;s&quot;:&quot;onEnter&quot;,&quot;l&quot;:[{&quot;name&quot;:&quot;gentleFadeInLeft&quot;,&quot;a&quot;:{&quot;l&quot;:[{&quot;t&quot;:&quot;&quot;,&quot;l&quot;:[{&quot;t&quot;:&quot;set&quot;,&quot;p&quot;:0,&quot;d&quot;:0,&quot;l&quot;:{&quot;autoAlpha&quot;:0,&quot;x&quot;:&quot;-25%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;},{&quot;t&quot;:&quot;tween&quot;,&quot;p&quot;:0,&quot;d&quot;:1,&quot;l&quot;:{&quot;autoAlpha&quot;:1,&quot;x&quot;:&quot;0%&quot;},&quot;e&quot;:&quot;Power1.easeOut&quot;}]}]}}]}">
                <div class="flex flex-wrap items-center mb-4 px-4"> 
                    <div class="mx-auto w-full"> 
                        <h2 class="mb-1 uppercase"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></h2>
                        <h2 class="mb-4 text-3xl md:text-5xl"><?php _e( 'Rette mit uns Reststoffe und Baumaterialien vor dem Müll!', 'buffet_1_punkt_null' ); ?> </h2> 
                        <p class="mb-4 text-xl md:text-2xl"><?php _e( 'Bei uns bekommst du lecker gebrauchtes Material, das wir von Kultureinrichtungen, Veranstaltungen und Unternehmen vor der Entsorgung retten.', 'buffet_1_punkt_null' ); ?> <?php _e( 'Empfehlung des Hauses: einfach vorbeikommen! Hier wird frisch aufgetischt.', 'buffet_1_punkt_null' ); ?></p> 
                    </div>                     
                </div>
                <div class="flex flex-wrap mb-20 text-center">
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/holz.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Theaterlatten', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'KVH', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'OSB', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'MDF', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'HDF', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Multiplex', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Sperrholz', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'Holz', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/metall.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Winkel', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Scharniere', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Beschläge', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Gittter', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Rundrohre', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Vierkantrohre', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'Metall', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/farbe.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Dispersionsfarbe', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Acrylfarbe', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Lacke', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Sprühdosen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Malzubehör', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'Farbe', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/elektro.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Glühbirnen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Leuchtstoffröhren', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'LED-Streifen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Lampenfassungen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Stromkabel', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Trafos', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'Kabel & Lampen', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/stoffe.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Molton', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Dekostoffe', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Netze', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Gazen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Mesh', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'PVC-Banner', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Planen', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'Stoffe', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <div class="w-6/12 md:w-4/12">
                        <div class="hvrbox duration-500 ease-in-out h-40 hover:scale-110 inline-block my-4 p-12 rounded-full w-40 md:h-60 md:w-60" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/nudeln.jpeg'); background-size: cover; background-position: center center;"> 
                            <div class="hvrbox-layer_top rounded-full">
                                <div class="hvrbox-text">
                                    <ol>
                                        <li>
                                            <?php _e( 'Requisiten', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Styropor', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Büromaterial', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Ausstattung', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Acrylglas', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Gummi', 'buffet_1_punkt_null' ); ?>
                                        </li>
                                        <li>...</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <p class="font-bold mb-2 text-xl"><?php _e( 'und andere Leckereien', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                </div>                 
            </div>
            <div class="h-36 md:h-60 xl:mx-auto xl:w-11/12" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element8.png'); background-repeat: repeat-x; background-size: cover; background-position: center center;" data-pg-ia-scene='{"l":[{"a":"fadeIn"}]}'></div>             
        </section>
        <section class="flex flex-wrap-reverse items-center mb-10 mx-auto p-4 relative md:container md:flex-wrap lg:w-10/12 xl:w-9/12 2xl:w-7/12" id="lageplan"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/bilder/anfahrt.png" class="mx-auto w-8/12 md:mx-0 md:relative md:w-6/12 xl:left-20">
            <div class="w-full md:absolute md:bottom-0 md:right-0 md:w-7/12 xl:w-5/12"> 
                <div class="bg-white m-5 md:m-0 shadow-xl z-10 p-10">
                    <h2 class="font-medium mb-1 uppercase"><?php _e( 'Lageplan &amp; Öffnungszeiten', 'buffet_1_punkt_null' ); ?></h2> 
                    <h2 class="font-bold leading-tight mb-6 text-2xl uppercase"><?php _e( 'So findest du uns', 'buffet_1_punkt_null' ); ?></h2> 
                    <p class="mb-2"><?php _e( 'Jeden zweiten &amp; vierten Freitag im Monat von 12 - 18 Uhr', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2"><?php _e( 'Ehemalige Kantine in der Diezmannstraße 20, Haus 3,, 04207 Leipzig', 'buffet_1_punkt_null' ); ?></p>
                    <p class="mb-2 md:hidden"><?php _e( 'Koordinaten:', 'buffet_1_punkt_null' ); ?> <a href="geo:51.3159863,12.3160746" target="_blank" class="text-bold_buffet-300"><?php _e( '51.3159863,12.3160746', 'buffet_1_punkt_null' ); ?></a></p>
                    <div class="mb-2 hidden md:block">
                        <?php _e( 'Koordinaten:', 'buffet_1_punkt_null' ); ?> 
                        <button data-tooltip-target="tooltip-click" data-tooltip-trigger="click" type="button" class="coordinates text-bold_buffet-300  " data-clipboard-text="51.3159863,12.3160746">
                            <?php _e( '51.3159863,12.3160746', 'buffet_1_punkt_null' ); ?>
                        </button>                         
                        <div id="tooltip-click" role="tooltip" class="tooltip absolute z-10 inline-block bg-gray-900 font-medium shadow-sm text-white py-2 px-3 text-sm rounded-lg opacity-0 invisible">
                            <?php _e( 'Kopiert! Einfügen in Karte deiner Wahl.', 'buffet_1_punkt_null' ); ?>
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <p><?php _e( 'ÖPNV: Tram Linie 1, 3 - Haltestelle Diezmannstraße', 'buffet_1_punkt_null' ); ?></p>
                </div>                 
            </div>             
        </section>
        <section class="mx-auto overflow-x-hidden py-20 md:container lg:w-10/12 xl:w-8/12 2xl:w-7/12" id="spenden"> 
            <div class="container mx-auto px-4 relative text-left" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_15_blue#1.png');"> 
                <h2 class="font-medium mb-1 uppercase"><?php _e( 'Unterstütze Uns', 'buffet_1_punkt_null' ); ?></h2>
                <h2 class="font-bold mb-4 relative text-3xl w-full md:text-5xl md:w-max"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/textures/Element9.png" class="-right-32 -top-10 absolute"><?php _e( 'Don´t waste it - taste it!', 'buffet_1_punkt_null' ); ?></h2> 
                <p class="font-light mb-6 text-xl md:text-2xl"><?php _e( 'Unterstütze unseren gemeinnützigen Verein und fördere so ressourcenschonende Materialkreisläufe. Für ein zukunftsweisendes Leipzig.', 'buffet_1_punkt_null' ); ?></p> 
                <div class="fitems-center grid grif-col-1 justify-center mb-10 md:grid-cols-2 text-center"> 
                    <a href="/material-spenden"><div class="p-4"> 
                            <div class="bg-pastel_buffet-300 duration-500 ease-in-out h-80 hover:-translate-y-1 hover:scale-110 hover:shadow-xl px-10 py-12 rounded-3xl shadow-lg transform transition"> 
                                <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Material', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                                <p class="pb-10"><?php _e( 'Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!', 'buffet_1_punkt_null' ); ?></p> 
                            </div>                             
                        </div> </a> 
                    <div class="p-4"> 
                        <a href="/moneten-spenden"><div class="bg-pastel_buffet-300 duration-500 ease-in-out h-80 hover:-translate-y-1 hover:scale-110 hover:shadow-xl px-10 py-12 rounded-3xl shadow-lg transform transition"> 
                                <h3 class="font-bold mb-4 text-2xl uppercase"><?php _e( 'Moneten', 'buffet_1_punkt_null' ); ?> <br><?php _e( 'Spenden', 'buffet_1_punkt_null' ); ?></h3> 
                                <p class="pb-10"><?php _e( 'Mit deiner Spende unterstützt du unsere Arbeit. Ob einmal oder dauerhaft - jeder Euro hilft uns dabei Material zu retten und weiter zu geben!', 'buffet_1_punkt_null' ); ?></p> 
                            </div></a>
                    </div>                     
                </div>                 
            </div>             
        </section>
        <section class="py-20 relative md:text-center 2xl:mx-auto 2xl:w-9/12" id="partnerInnen"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Form_04_turquise1.png" class="absolute left-0 top-10" data-pg-ia-scene='{"l":[{"a":{"l":[{"t":"","l":[{"t":"set","p":0,"d":0,"l":{"autoAlpha":0,"transformOrigin":"left bottom","rotationZ":-30},"e":"Power1.easeOut"},{"t":"tween","p":0,"d":1,"l":{"autoAlpha":1,"transformOrigin":"left bottom","rotationZ":0},"e":"Power1.easeOut"}]}]}}]}'>
            <div class="container mx-auto px-4 relative"> 
                <h2 class="font-bold leading-tight mb-4 text-3xl md:text-5xl"><?php _e( 'Auf den Geschmack gekommen', 'buffet_1_punkt_null' ); ?></h2> 
                <p class="text-xl md:text-2xl"><?php _e( 'Diese Unternehmen und Kulturbetriebe arbeiten bereits mit uns zusammen.', 'buffet_1_punkt_null' ); ?></p>
                <div class="flex flex-wrap items-center justify-around mt-20 md:justify-around md:text-center" id="logos"> 
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/mdbk.png"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/mediacityleipzig.png"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/grassi.png"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/posterlounge.png"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/dok.svg"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/gfzk.png"> 
                    </div>
                    <div class="p-2 w-1/2 md:w-1/4"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo_partner/trashgalore.png"> 
                    </div>                     
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
                        <p class="mb-4"><?php _e( 'Dort findest du unser aktuelles Angebot. Dir wird das Wasser im Mund zusammenlaufen.', 'buffet_1_punkt_null' ); ?></p> 
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
                            <p><?php _e( '&copy; 2021. All Rights Reserved - Materialbuffet e.V.', 'buffet_1_punkt_null' ); ?></p> 
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