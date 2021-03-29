let waitTime = 0;
$.each(letterDuration,function(){waitTime += this;})
setTimeout(function(){
    $('#welcome-links').css('opacity', 1);
}, (waitTime+0.5)*1000);
setTimeout(function(){
    $('.wedding').css('opacity', 1);
}, (waitTime+1)*1000);
