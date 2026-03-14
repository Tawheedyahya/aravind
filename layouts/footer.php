<style>
    #site-footer {
    background: #17663F;
    color: rgba(255,255,255,0.85);
    padding: 60px 8% 30px;
}

/* ===== Grid Layout ===== */
.footer-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 40px;
    margin-bottom: 40px;
}

/* Column */
.footer-col h3,
.footer-col h4 {
    color: white;
    margin-bottom: 15px;
}

.footer-col p {
    line-height: 1.6;
}

.footer-col ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-col ul li {
    margin-bottom: 10px;
}

.footer-col a {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: 0.3s ease;
}

.footer-col a:hover {
    opacity: 0.7;
}

/* Contact list spacing */
.contact-list li {
    line-height: 1.6;
}

/* Bottom Section */
.footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.15);
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 15px;
}

.footer-legal a {
    margin-right: 20px;
}
@media (max-width: 1024px) {
    .footer-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }
}
@media (max-width: 768px) {

    #site-footer {
        padding: 50px 6% 25px;
    }

    .footer-container {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .footer-bottom {
        flex-direction: column;
        text-align: center;
    }

    .footer-legal a {
        margin-right: 10px;
    }
}
</style>
<footer id="site-footer">

    <div class="footer-container">

        <!-- Column 1 -->
        <div class="footer-col">
            <h3>SLS GROUP</h3>
            <p>
                Diversified business excellence across Engineering, Construction, Energy, 
                Hospitality, and Agriculture sectors. Establishing digital credibility since our inception.
            </p>
        </div>

        <!-- Column 2 -->
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="/about">About Us</a></li>
                <li><a href="/businesses">Our Businesses</a></li>
                <li><a href="/projects">Projects</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <!-- Column 3 -->
        <div class="footer-col">
            <h4>Our Divisions</h4>
            <ul>
                <li><a href="#">SLS Contracting</a></li>
                <li><a href="#">SLS Blue Metals</a></li>
                <li><a href="#">SLS Agency</a></li>
                <li><a href="#">SLS Marriage Hall</a></li>
                <li><a href="#">SLS Farm</a></li>
            </ul>
        </div>

        <!-- Column 4 -->
        <div class="footer-col">
            <h4>Contact Us</h4>
            <ul class="contact-list">
                <li>Main office - 232/1A , VEPPANTHATTAI SOUTH, PERAMBALUR - 621116</li>
                <li>+919087202312</li>
                <li>info@slsgroup.com</li>
            </ul>
        </div>

    </div>

    <!-- <div class="footer-bottom">
        <p>© 2026 SLS Group of Companies. All rights reserved.</p>
        <div class="footer-legal">
            <a href="#" style="color: white;">Privacy Policy</a>
            <a href="#" style="color: white;">Terms of Service</a>
            <a href="#" style="color: white;">Admin Tools</a>
        </div>
    </div> -->

</footer>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            } else {
                entry.target.classList.remove("active"); 
            }

        });
    }, {
        threshold: 0.2
    });

    document.querySelectorAll(".fade-up").forEach(el => {
        observer.observe(el);
    });

});
</script>