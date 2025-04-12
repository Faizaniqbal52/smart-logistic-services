document.addEventListener('DOMContentLoaded', function () {
    const container = document.createElement('div');
    container.className = 'particles';
    document.body.appendChild(container);

    const particleCount = 30;
    const colors = [
        'rgba(255, 255, 255, 0.5)',
        'rgba(255, 255, 255, 0.3)',
        'rgba(255, 255, 255, 0.7)'
    ];

    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';

        const size = Math.random() * 20 + 5;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.position = 'absolute';

        particle.style.animationDelay = Math.random() * 5 + 's';
        particle.style.animationDuration = (Math.random() * 8 + 8) + 's';

        particle.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];

        if (Math.random() > 0.5) {
            particle.style.filter = 'blur(' + (Math.random() * 2) + 'px)';
        }

        container.appendChild(particle);
    }

    document.addEventListener('mousemove', function (e) {
        const particles = document.querySelectorAll('.particle');
        const mouseX = e.clientX / window.innerWidth;
        const mouseY = e.clientY / window.innerHeight;

        particles.forEach((particle, index) => {
            const speed = index % 5 + 1;
            const offsetX = (mouseX - 0.5) * speed;
            const offsetY = (mouseY - 0.5) * speed;

            particle.style.transform = `translate(${offsetX * 20}px, ${offsetY * 20}px)`;
        });
    });

    for (let i = 0; i < 5; i++) {
        const glowParticle = document.createElement('div');
        glowParticle.className = 'particle';

        const size = Math.random() * 15 + 30;
        glowParticle.style.width = size + 'px';
        glowParticle.style.height = size + 'px';

        glowParticle.style.left = Math.random() * 100 + '%';
        glowParticle.style.top = Math.random() * 100 + '%';

        glowParticle.style.animationDelay = Math.random() * 5 + 's';
        glowParticle.style.animationDuration = (Math.random() * 10 + 15) + 's';

        glowParticle.style.backgroundColor = 'rgba(255, 255, 255, 0.2)';
        glowParticle.style.boxShadow = '0 0 20px 5px rgba(255, 255, 255, 0.2)';
        glowParticle.style.filter = 'blur(3px)';
        glowParticle.style.zIndex = '-1';
        glowParticle.style.position = 'absolute';

        container.appendChild(glowParticle);
    }
});
