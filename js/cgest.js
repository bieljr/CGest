(function () {
    
    console.log('i\'m loaded!')
    
    if (SAPO.Dom.Selector.select('.clickable').length > 0) {    
        clickableElms = SAPO.Dom.Selector.select('.clickable');
        SAPO.Utility.Array.each(clickableElms, function (elm) {      
            SAPO.Dom.Event.observe(s$(elm), 'click', function (e) {
                SAPO.Dom.Event.stop(e);
                linkSource = SAPO.Dom.Selector.select('td a', s$(elm));
                // window.location = linkSource;
                console.log(linkSource);   
            });      
        });
    }
}());