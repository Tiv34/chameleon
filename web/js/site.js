window.onload = function() {
    Particles.init({
        selector: '.background',
        // color: '#75A5B7',
        color: '#ff9800',
        maxParticles: 70,
        connectParticles: true,
        responsive: [
            {
                breakpoint: 768,
                options: {
                    maxParticles: 80
                }
            }, {
                breakpoint: 375,
                options: {
                    maxParticles: 50
                }
            }
        ]
    });
};