const lines = document.querySelectorAll('.melissa-animate');
lines.forEach(function (line) {
    const offset = line.getTotalLength();
    line.setAttribute('stroke-dashoffset', offset);
    line.setAttribute('stroke-dasharray', offset);
});
//                   [m1   m2   m3   m4   m5   e1   e2   l    i    ss   a,   i(dot)];
let letterDuration = [0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.2, 0.3, 0.27, 0.6, 0.4, 0.3];
let letterDelay =    [0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0,   0.3];
marianeTl = gsap.timeline({repeat: 0});
lines.forEach(function (line, idx) {
    marianeTl
        .set(line, {
            attr: {'opacity': 1}
        })
        .to(line, {
            duration: letterDuration[idx],
            attr: {'stroke-dashoffset': 0},
            ease: 'none'
        }, ">+" + letterDelay[idx]);
});
