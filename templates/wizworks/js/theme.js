(function ($){
    'use strict';
    
    $(document).ready(function (){
        var menu = $('#bs-navbar ul.nav');
        menu.find('>li.deeper').each(function(){
            var el = $(this),
                cols = el.attr('cols'),
                items_lv2 = el.addClass('dropdown').find('>a').addClass('dropdown-toggle').attr('data-toggle','dropdown').append('<b class="caret"></b>')
                        .next('ul').addClass('dropdown-menu multi-column columns-'+ cols).wrapInner('<div class="row">').find('li.lvl-2'),
                num = parseInt(items_lv2.length / cols);
            for(var i=0;i<cols;i+=num) {
                items_lv2.slice(i,i+num).wrapAll('<div class="col-sm-'+ parseInt(12/cols)+'">').end().find('>ul').addClass('multi-column-dropdown');
            }
        }), menu.show();
    });
})(jQuery)
