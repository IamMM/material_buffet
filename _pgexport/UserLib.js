$(function() {

    //Wait for Pinegrow to wake-up
    $("body").one("pinegrow-ready", function(e, pinegrow) {

        //Create new Pinegrow framework object
        var f = new PgFramework("UserLib", "UserLib");

        //This will prevent activating multiple versions of this framework being loaded
        f.type = "UserLib";
        f.allow_single_type = true;
        f.user_lib = true

        var comp_comp1 = new PgComponentType('comp1', 'Comp 1 / Tooltip');
        comp_comp1.code = '<section class="py-20"> \
    <div class="container mx-auto px-4 relative  text-center"> \
        <h2 class="font-medium mb-1 uppercase">Unterstütze Uns</h2>\
        <h3 class="font-bold mb-4 text-4xl">Dont´t waste it - taste it!</h3> \
        <p class="font-light mb-6">Unterstütze uns und fördere so ressourcenschonende Materialkreisläufe. Für ein zirkuläres und zukunftsweisendes Leipzig.</p> \
        <div class="-mx-4 flex flex-wrap items-center justify-center mb-10"> \
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"> \
                <div class="bg-white px-10 py-12 rounded-lg shadow-lg"> \
                    <h3 class="font-bold mb-4 text-2xl uppercase">Material Spenden</h3> \
                    <p class="pb-10">Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!</p> \
                </div>                 \
            </div>             \
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"> \
                <div class="bg-white px-10 py-12 rounded-lg shadow-lg"> \
                    <h3 class="font-bold mb-4 text-2xl uppercase">Moneten Spenden</h3> \
                    <p class="pb-10">Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!</p> \
                </div>                 \
            </div>             \
            <div class="p-4 w-full md:w-6/12 lg:w-4/12"> \
                <div class="bg-white px-10 py-12 rounded-lg shadow-lg"> \
                    <h3 class="font-bold mb-4 text-2xl uppercase">Mitglied werden</h3> \
                    <p class="pb-10">Du bist ein Kulturbetrieb, Unternehmen oder eine Veranstaltung und hast Materialien übrig, die zu schade für die Tonne sind? Wir nehmen deine Reststoffe!</p> \
                </div>                 \
            </div>             \
        </div>         \
        <a href="#" class="bg-bold_buffet-300 border-black font-medium hover:shadow-xl inline-block px-10 py-2 text-center text-white uppercase">Kontaktiere Uns</a>\
    </div>     \
</section>';
        comp_comp1.parent_selector = null;
        f.addComponentType(comp_comp1);
        
        //Tell Pinegrow about the framework
        pinegrow.addFramework(f);
            
        var section = new PgFrameworkLibSection("UserLib_lib", "Components");
        //Pass components in array
        section.setComponentTypes([comp_comp1]);

        f.addLibSection(section);
   });
});