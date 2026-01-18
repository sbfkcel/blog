document.addEventListener('DOMContentLoaded', () => {
    initThree();
    initLanguage();
    initSmoothScroll();
    initRevealAnimations();
    initActiveNav();
});

function initThree() {
    const canvas = document.querySelector('#three-canvas');
    if (!canvas) return;

    const renderer = new THREE.WebGLRenderer({
        canvas,
        antialias: true,
        alpha: true
    });
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    renderer.setSize(window.innerWidth, window.innerHeight);

    const scene = new THREE.Scene();
    const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);

    const vertexShader = `
        varying vec2 vUv;
        void main() {
            vUv = uv;
            gl_Position = vec4(position, 1.0);
        }
    `;

    const fragmentShader = `
        uniform float uTime;
        uniform vec2 uResolution;
        uniform vec2 uMouse;
        varying vec2 vUv;

        mat2 rot(float a) {
            float s = sin(a), c = cos(a);
            return mat2(c, -s, s, c);
        }

        vec3 permute(vec3 x) { return mod(((x*34.0)+1.0)*x, 289.0); }
        float snoise(vec2 v) {
            const vec4 C = vec4(0.211324865405187, 0.366025403784439, -0.577350269189626, 0.024390243902439);
            vec2 i  = floor(v + dot(v, C.yy) );
            vec2 x0 = v -   i + dot(i, C.xx);
            vec2 i1;
            i1 = (x0.x > x0.y) ? vec2(1.0, 0.0) : vec2(0.0, 1.0);
            vec4 x12 = x0.xyxy + C.xxzz;
            x12.xy -= i1;
            i = mod(i, 289.0);
            vec3 p = permute( permute( i.y + vec3(0.0, i1.y, 1.0 )) + i.x + vec3(0.0, i1.x, 1.0 ));
            vec3 m = max(0.5 - vec3(dot(x0,x0), dot(x12.xy,x12.xy), dot(x12.zw,x12.zw)), 0.0);
            m = m*m ; m = m*m ;
            vec3 x = 2.0 * fract(p * C.www) - 1.0;
            vec3 h = abs(x) - 0.5;
            vec3 a0 = x - floor(x + 0.5);
            vec3 g = a0 * vec3(x0.x,x12.xz) + h * vec3(x0.y,x12.yw);
            return 130.0 * dot(m, g);
        }

        void main() {
            vec2 uv = vUv;
            vec2 p = (uv - 0.5) * vec2(uResolution.x / uResolution.y, 1.0);
            
            p += uMouse * 0.05;
            
            float time = uTime * 0.15;
            vec3 finalColor = vec3(0.0);
            
            vec3 colDeep = vec3(0.005, 0.015, 0.03);
            vec3 colBlue = vec3(0.1, 0.3, 0.6);
            vec3 colAzure = vec3(0.1, 0.5, 0.8);
            vec3 colTeal = vec3(0.1, 0.6, 0.5);
            vec3 colGreen = vec3(0.2, 0.7, 0.4);
            vec3 colCyan = vec3(0.3, 0.8, 0.9);
            
            for(float i=1.0; i<5.0; i++) {
                vec2 p2 = p;
                p2 *= rot(time * 0.03 * i);
                float n = snoise(p2 * 1.2 + time * 0.1);
                float n2 = snoise(p2 * 1.5 - time * 0.05);
                
                float line = abs(0.025 / (n + n2 + 0.01));
                line = smoothstep(0.0, 1.0, line);
                
                float mixFactor = n * 0.5 + 0.5;
                vec3 colorLayer = mix(colBlue, colTeal, mixFactor);
                colorLayer = mix(colorLayer, colAzure, sin(uTime * 0.2 + i));
                colorLayer = mix(colorLayer, colGreen, n2 * 0.4);
                colorLayer = mix(colorLayer, colCyan, abs(sin(uTime * 0.1)) * 0.3);
                
                finalColor += colorLayer * line * 0.3 * smoothstep(1.8, 0.6, length(p));
            }
            
            float core = 0.03 / (length(p) + 0.3);
            finalColor += mix(colBlue, colTeal, 0.5) * core;
            
            float stars = pow(max(0.0, snoise(uv * 140.0)), 40.0);
            finalColor += mix(colAzure, colGreen, 0.5) * stars * 0.2;
            
            finalColor = mix(colDeep, finalColor, 0.9);
            
            gl_FragColor = vec4(finalColor, 1.0);
        }
    `;

    const geometry = new THREE.PlaneGeometry(2, 2);
    const uniforms = {
        uTime: { value: 20 },
        uResolution: { value: new THREE.Vector2(window.innerWidth, window.innerHeight) },
        uMouse: { value: new THREE.Vector2(0, 0) }
    };

    const material = new THREE.ShaderMaterial({
        vertexShader,
        fragmentShader,
        uniforms
    });

    const mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    let mouseX = 0;
    let mouseY = 0;
    document.addEventListener('mousemove', (e) => {
        mouseX = (e.clientX / window.innerWidth - 0.5);
        mouseY = (0.5 - e.clientY / window.innerHeight);
    });

    const animate = () => {
        requestAnimationFrame(animate);
        uniforms.uTime.value += 0.01;
        uniforms.uMouse.value.x += (mouseX - uniforms.uMouse.value.x) * 0.05;
        uniforms.uMouse.value.y += (mouseY - uniforms.uMouse.value.y) * 0.05;
        renderer.render(scene, camera);
    };

    window.addEventListener('resize', () => {
        renderer.setSize(window.innerWidth, window.innerHeight);
        uniforms.uResolution.value.set(window.innerWidth, window.innerHeight);
    });

    animate();
}

function initLanguage() {
    const toggleBtn = document.querySelector('#lang-toggle');
    if (!toggleBtn) return;
    
    const safeSetStorage = (key, value) => {
        try {
            localStorage.setItem(key, value);
        } catch (e) {}
    };

    const safeGetStorage = (key) => {
        try {
            return localStorage.getItem(key);
        } catch (e) {
            return null;
        }
    };

    const updateLang = (lang) => {
        document.querySelectorAll('[data-lang]').forEach(el => {
            if (el.getAttribute('data-lang') === lang) {
                el.style.display = '';
            } else {
                el.style.display = 'none';
            }
        });

        safeSetStorage('v2add_lang', lang);
        
        const titleZh = "让AI技术真正服务于生产";
        const titleEn = "Empowering Production with AI";
        document.title = lang === 'zh' ? `微元智方 Vect²Add - ${titleZh}` : `Vect²Add - ${titleEn}`;
        document.documentElement.lang = lang === 'zh' ? 'zh-CN' : 'en';
    };

    toggleBtn.addEventListener('click', function() {
        const currentLang = safeGetStorage('v2add_lang') || getDefaultLang();
        const nextLang = currentLang === 'zh' ? 'en' : 'zh';
        updateLang(nextLang);
    });
    
    function getDefaultLang() {
        const saved = safeGetStorage('v2add_lang');
        if (saved) return saved;
        
        const ua = navigator.userAgent.toLowerCase();
        const isBot = /googlebot|bingbot|baiduspider|slurp|yandexbot|duckduckbot/i.test(ua);
        if (isBot) return 'en';
        
        const userLang = navigator.language || navigator.userLanguage;
        return (userLang.toLowerCase().includes('zh')) ? 'zh' : 'en';
    }

    updateLang(getDefaultLang());
}

function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });
}

function initRevealAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.hero-content, .product-card, .advantage-item, .section-title, .about-text').forEach(el => {
        el.classList.add('reveal-on-scroll');
        observer.observe(el);
    });
}

function initActiveNav() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');

    window.addEventListener('scroll', () => {
        let current = '';
        const scrollPos = window.scrollY + 100;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
}
