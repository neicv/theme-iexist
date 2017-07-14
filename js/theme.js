(function($){

    $(function(){

        // fit footer
        (function(main, meta, fn){

            if (!main.length) return;

            fn = function() {

                main.css('min-height','');

                meta = document.body.getBoundingClientRect();

                if (meta.height < window.innerHeight) {
                    main.css('min-height', (main.outerHeight() + (window.innerHeight - meta.height))+'px');
                }

                return fn;
            };

            UIkit.$win.on('load resize', fn());

        })($('#tm-main'));
		
		
		/* $('[data-uk-nav-follower]').each(function(){

            var ele      = $(this),
                follower = $('<div class="tm-dotnav-follower"></div>').prependTo(this),
                nav      = ele.find('ul:first'),
                children = nav.children();

            var ids     = [],
                links   = ele.find("a[href^='#']").each(function(){ if(this.getAttribute("href").trim()!=='#') ids.push(this.getAttribute("href")); }),
                targets = $(ids.join(',')),
                inviews;



            ele.on('inview.uk.scrollspynav', function() {

                inviews = [];

                for (var i=0 ; i < targets.length ; i++) {

                    if (UIkit.Utils.isInView(targets.eq(i), {topoffset:-40})) {
                        inviews.push(children.eq(i));
                    }
                }

                follower.css({
                    top:inviews[0].position().top,
                    left:inviews[0].position().left,
                    height: inviews.length * inviews[0].outerHeight(true) - parseInt(inviews[0].css('margin-top'))
                });

            });
        }); */
		
		$('[data-tw]', '#tm-top').each(function() {
            UIkit.scrollspy(this).on('inview.uk.scrollspy', function() {
                Typewrite(this);
            });
        });

    });

})(jQuery);
