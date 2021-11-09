const lines = document.querySelectorAll('.melissa-animate>*');
lines.forEach(function (line) {
    const offset = line.getTotalLength();
    line.setAttribute('stroke-dashoffset', offset);
    line.setAttribute('stroke-dasharray', offset);
});
//                   [m1    m2      m3      m4      e1      e2      l1      l2      l3      i1      i2      i3        i4       i5   i6  i7    i8     i9    i10   c     a1   a2    m1,  m2,  m3,  i1,    i2,  i3];
let letterDuration = [0.2,  0.2,    0.2,    0.2,    0.2,    0.2,    0.2,    0.2,    0.05,    0.05,    0.2,    0.08,    0.03,    0.1, 0.2, 0.2, 0.03, 0.07, 0.1,  0.4, 0.4, 0.03, 0.1, 0.4, 0.03, 0.03, 0.2, 0.03];

let letterDelay =    [0,    0,      0,      0];
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
