(function($){

    $.fn.notif = function(options){
            
        var options = $.extend({
            html : '<br><br>\
            <div class="horodatage">Il y a 4 minutes :</div>\
            <div class="float">\
            <div class="bus-N1">\
            <div class="line-N1">N1</div>\
        </div>\
        </div>\
            <div class="infos">\
                <span class="title">Arret :</span> Cité-Providence <br>\
                <span class="title">Direction :</span> Bertangles\
        </div>\
        </div>\
        <br>\
        <hr> '          
        }, options);

        return this.each(function(){
           var $this = $(this);
            var $notif = $('> .notifications', this);
            if($notif.length == 0){
                $notif = $('<div class="notifications"/>'
                );
                $this.append($notif);
            }
            $notif.append(options.html);
        })

    }

    $('body').notif({title:'Mon titre', content:'Mon titre'})

})(jQuery);