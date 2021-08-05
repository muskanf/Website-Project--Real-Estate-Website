var tlSecondScroll = new TimelineMax();
tlSecondScroll
 .to(".wrapper-app", 2, {x: "0", y:"-10%", opacity:1 })

 gsap.registerPlugin(ScrollTrigger);
 gsap.to(".wrapper-app", {
  scrollTrigger: {
  start:"top center",
  ease: "none",
    trigger: ".app",
    scrub: true
  }, 
  y:"-10%", 
  opacity:1,
  duration:2
});