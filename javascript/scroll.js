
$(document).ready(function(){
    var controller = new ScrollMagic.Controller();
    var scene2 = new ScrollMagic.Scene({
        triggerElement:'.downloadapp',
        duration:"100%"
        })

.setClassToggle('.downloadapp', 'fade-in')
.addTo(controller)
.setTween('.downloadapp')
.addTo(controller);});

$(document).ready(function(){
    var controller0 = new ScrollMagic.Controller();
    var scene0 = new ScrollMagic.Scene({
        triggerElement:'.appleapp',
        duration:"100%"
        })
.setClassToggle('.appleapp', 'fade-in')
.addTo(controller0)
.setTween('.appleapp')
.addTo(controller0);});


$(document).ready(function(){
    var controller0 = new ScrollMagic.Controller();
    var scene0 = new ScrollMagic.Scene({
        triggerElement:'.androidapp',
        duration:"100%"
        })
.setClassToggle('.androidapp', 'fade-in')
.addTo(controller0)
.setTween('.androidapp')
.addTo(controller);});

$(document).ready(function(){
var controller1 = new ScrollMagic.Controller();
var scene3 = new ScrollMagic.Scene({
    triggerElement:'.hotproperties',
    duration:"100%"
    })
.setClassToggle('.hotproperties', 'fade-in')
.addTo(controller1)
.setTween('.hotproperties')
.addTo(controller1);
});

$(document).ready(function(){
    var controller2 = new ScrollMagic.Controller();
    var scene4 = new ScrollMagic.Scene({
        triggerElement:'.textql',
        duration:"100%"
        })
    .setClassToggle('.textql', 'fade-in')
    .addTo(controller2)
    .setTween('.textql')
    .addTo(controller2);
    });
    $(document).ready(function(){
        var controller3 = new ScrollMagic.Controller();
        var scene5 = new ScrollMagic.Scene({
            triggerElement:'.page_home',
            duration:"100%"
            })
    .setClassToggle('.page_home', 'fade-out')
    .addTo(controller3)
    .setTween('.page_home')
    .addTo(controller3);});