<?php get_header(); ?>

        <header style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/shapes/Distress%20Press.png');" class="fixed w-full z-30"> 
            <nav class="container flex flex-wrap h-20 items-center mx-auto px-4 py-5">
                <img onclick="topFunction()" id="topBtn" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_Icon_Black-01.png" class="fixed left-10 top-0 w-28" data-pg-ia-hide data-pg-ia='{"l":[{"trg":"mouseenter","a":"pulse"},{"trg":"mousedown","a":"bounce"}]}' data-pg-ia-scene='{"dir":"a","s_t":"start","s_s":"start","s_scroller":"$.mb-5","e_t":"end","e_target":"$.mb-5","e_s":"start","l":[{"name":"roll-In","a":"rollIn","p":"scroll"}],"s":"onLeave"}'/> 
                <div class="hidden ml-auto space-y-2 w-full lg:flex lg:items-center lg:space-x-4 lg:space-y-0 lg:w-auto" data-name="nav-menu"> 
                    <div class="flex flex-col lg:flex-row"> 
                        <a href="#" class="font-light hover:text-color_buffet-100 px-0 py-2 uppercase lg:px-4"><?php _e( 'Das Konzept', 'buffet_1_punkt_null' ); ?></a> 
                        <a href="#section-speisekarte" class="font-light hover:text-color_buffet-200 px-0 py-2 uppercase lg:px-4"><?php _e( 'Speisekarte', 'buffet_1_punkt_null' ); ?></a> 
                        <a href="#section-lageplan" class="font-light hover:text-color_buffet-400 px-0 py-2 uppercase lg:px-4"><?php _e( 'Lageplan', 'buffet_1_punkt_null' ); ?></a> 
                        <a href="#section-support" class="font-light hover:text-color_buffet-600 px-0 py-2 uppercase lg:px-4"><?php _e( 'Unterstützen', 'buffet_1_punkt_null' ); ?></a> 
                    </div>                     
                </div>                 
            </nav>             
        </header>
        <main id="main">
            <section class="relative"> 
                <div class="w-full">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_icon&word_Black-01.png" data-pg-ia-scene='{"dir":"a","on":"off","s":"custom","s_t":"start","s_s":"start","e_t":"end","e_s":"start","l":[{"a":{"l":[{"t":"","l":[{"t":"tween","p":0,"d":1,"l":{"width":"10%","height":"10%"},"e":"Linear.easeNone"}]}]},"p":"scroll"}]}' class="mx-auto place-self-center w-10/12"/>
                </div>
                <div class="container mx-auto pt-16 px-4"> 
                    <div class="-mx-4 flex flex-wrap mx-auto"> 
                        <div class="mb-5 px-4 w-full"> 
                            <h1 class="font-extrabold mb-4 text-6xl"><?php _e( 'Verschwendung schmeckt scheiße.', 'buffet_1_punkt_null' ); ?></h1> 
                        </div>                         
                        <div class="mx-auto">
</div>                         
                    </div>                     
                </div>                 
            </section>
        </main>
        <section> 
            <div class="container mb-20 mx-auto px-4 relative text-center lg:text-left"> 
                <div class="-mx-4 mb-10 text-center"> 
                    <div class="ml-auto mr-auto p-4 text-justify w-full lg:w-8/12"> 
                        <p class="mb-2"><?php _e( 'In Kulturbetrieben wie Theatern oder Ausstellungshäusern, nach Events, Film- und Fernsehproduktionen und im produzierenden Gewerbe, landen viele wiederverwendbare Materialien im Müll: Holz, Farben, Textilien, Metalle, Deko, Ausstattung, Büroartikel, Fehlproduktionen.', 'buffet_1_punkt_null' ); ?></p>
                        <p class="mb-2"><?php _e( 'Unser Ziel ist es, diese Reststoffe in Zusammenarbeit mit einem wachsendem Netzwerk an öffentlichen und privaten Kooperationspartnern vor der Entsorgung zu retten, um  eine möglichst umfassende Abfallvermeidung in Leipzig voran zu treiben und ressourcenschonende Materialkreisläufe zu fördern. Im Materialbuffet werden die Materialien dafür gesammelt, aufbereitet, sortiert und schließlich weitergegeben.', 'buffet_1_punkt_null' ); ?></p>
                        <p class="mb-2"><?php _e( 'Vereine, Kultureinrichtungen, kreative und soziale Initiativen, Studierende, Schulen und Künstler*innen, aber auch Privatpersonen, können das Material bei uns bekommen - und für immer behalten oder ausleihen und zurückbringen.', 'buffet_1_punkt_null' ); ?></p>
                        <p class="mb-2"><?php _e( 'Neben der Materialweitergabe, planen wir mit dem Bildungsbuffet außerdem ein breites Weiterbildungsangebot rund um Themen wie Circular Society, Upcycling &amp; DIY. Wir glauben daran, dass nur durch Sensibilisierung, Bildung und Selbsterfahrung nachhaltiges Handeln in den Alltag implementiert werden kann.', 'buffet_1_punkt_null' ); ?></p>
                        <p class="mb-2"><?php _e( 'Mit einem Besuch, einer Spende oder Mitgliedschaft im Materialbuffet e.V. unterstützt ihr ein gemeinnütziges Projekt und tragt einen wichtigen Teil zur Entwicklung eines abfallfreien, zirkulären Leipzigs bei!', 'buffet_1_punkt_null' ); ?></p> 
                    </div>
                    <a href="#" class="bg-bold_buffet-300 border-black font-medium hover:shadow-xl inline-block px-24 py-2 rounded-full rounded-t-none text-center text-white uppercase"><?php _e( 'Kontaktiere Uns', 'buffet_1_punkt_null' ); ?></a> 
                </div>                 
            </div>             
        </section>
        <section class="py-8"> 
            <div class="container mx-auto px-4 relative text-center"> 
                <h2 class="font-medium mb-1 lg:text-mpink-500"><?php _e( 'Team', 'buffet_1_punkt_null' ); ?></h2>
                <h1 class="mb-4 text-5xl"><?php _e( 'Team', 'buffet_1_punkt_null' ); ?></h1>
                <p class="mb-4"><?php _e( 'Bei uns bekommst du lecker gebrauchtes Material von Kultureinrichtungen, Veranstaltungen und Unternehmen. Á la carte oder direkt vom Buffet - aber auf jeden Fall: 100% Bio, 100% Fairtrade.', 'buffet_1_punkt_null' ); ?></p>
                <div class="flex flex-wrap -mx-4  justify-center"> 
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Dianne Russell', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Founder', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Dianne Russell', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Founder', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDd8fGNhdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Kathryn Murphy', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Chief Technology Officer', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1517101724602-c257fe568157?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDZ8fHBhcnJvdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Darrell Steward', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Administrative Manager', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDd8fGNhdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Kathryn Murphy', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Chief Technology Officer', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="p-4 w-full md:w-6/12 lg:w-4/12"> 
                        <div class="bg-gray-100 p-4"> 
                            <img src="https://images.unsplash.com/photo-1517101724602-c257fe568157?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDZ8fHBhcnJvdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="mb-3 mx-auto w-full" alt="..." width="400" height="400"/> 
                            <div> 
                                <h3 class="font-bold text-2xl text-gray-900"><?php _e( 'Darrell Steward', 'buffet_1_punkt_null' ); ?></h3> 
                                <h4 class="font-light mb-3 text-gray-700"><?php _e( 'Administrative Manager', 'buffet_1_punkt_null' ); ?></h4> 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </section>
        <footer class="bg-bold_buffet-200 pt-12">
            <div class="container mx-auto px-4 relative"> 
                <div class="flex flex-wrap -mx-4"> 
                    <div class="mr-auto p-4 w-4/12"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/logo/MB_icon&word_White-01.png"/> 
                        <p class="mb-4"> <?php _e( 'Duis pharetra venenatis felis, ut tincidunt ipsum consequat nec. Fusce et porttitor libero, eu aliquam nisi. Nam finibus ullamcorper semper.', 'buffet_1_punkt_null' ); ?> </p> 
                        <div class="flex-wrap inline-flex space-x-3"> 
                            <a href="https://www.instagram.com/materialbuffet_ev/?fbclid=IwAR3qxLQ41AZWTqjhaijiiX3cZEQ2eZEtahbVsooAfsbeJ_uxGuU4Edvyyng" class="hover:text-blue-600 hover:text-bold_buffet-300" aria-label="instagram"> <svg viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5"> 
                                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/> 
                                </svg></a>
                            <a href="mailto:hallo@materialbuffet.de" class="hover:text-color_buffet-400" aria-label="youtube"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/svg_shapes/email-svgrepo-com.svg" class="h-5 w-5"/></a> 
                        </div>                         
                    </div>                     
                    <div class="p-4 w-full md:w-6/12 xl:w-4/12"> 
                        <h2 class="font-bold mb-8 text-lg uppercase"><?php _e( 'Auf der Suche nach Leckerbissen?', 'buffet_1_punkt_null' ); ?></h2> 
                        <p class="mb-4"><?php _e( 'Sagt uns was ihr braucht und wir sagen euch, wenn wir es finden. Jetzt für unseren Newsletter anmelden!', 'buffet_1_punkt_null' ); ?></p> 
                        <form> 
                            <div class="bg-white border-2 border-gray-400 border-pastel_buffet-500 flex items-center mb-6 overflow-hidden p-1"> 
                                <input class="appearance-none border-color_buffet-100 border-solid flex-1 font-light outline-none p-2 w-full" placeholder="Enter email..." type="email"/> 
                                <button type="submit" class="bg-pastel_buffet-500 font-medium inline-block px-6 py-2 text-center text-white uppercase" aria-label="submit">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 inline-block w-4"> 
                                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"/> 
                                    </svg>
                                </button>                                 
                            </div>                             
                        </form>                         
                    </div>                     
                </div>                 
                <div class="py-4 text-sm"> 
                    <hr class="border-gray-400 mb-4"> 
                    <div class="flex flex-wrap -mx-4  items-center"> 
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

<?php get_footer(); ?>