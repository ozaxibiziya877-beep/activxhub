<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tony's Authentic Pizzeria - Fresh Italian Pizza in Downtown | ActivXHub</title>
    <meta name="description" content="Tony's Authentic Pizzeria serves the finest handcrafted Italian pizzas using traditional recipes passed down through generations. Located in downtown, we offer dine-in, takeout, and delivery services. Click here to continue exploring our authentic Italian cuisine, wood-fired pizzas, fresh ingredients, and family-friendly atmosphere that has been serving the community since 1987.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #333;
            background-color: #faf8f5;
        }

        .header-container-xyz789 {
            background: linear-gradient(135deg, #d32f2f, #b71c1c);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-abc123 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-def456 {
            font-size: 2.2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .navigation-menu-ghi789 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .navigation-menu-ghi789 a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .navigation-menu-ghi789 a:hover {
            background-color: rgba(255,255,255,0.2);
            color: #ffeb3b;
        }

        .hero-banner-jkl012 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content-mno345 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-pqr678 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.5);
        }

        .hero-subtitle-stu901 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-vwx234 {
            display: inline-block;
            background: #ff6f00;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255,111,0,0.3);
        }

        .cta-button-vwx234:hover {
            background: #e65100;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255,111,0,0.4);
        }

        .content-section-yza567 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-block-bcd890 {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            border-left: 5px solid #d32f2f;
        }

        .section-title-efg123 {
            font-size: 2.5rem;
            color: #d32f2f;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .text-content-hij456 {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        .history-timeline-klm789 {
            background: #f5f5f5;
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
            position: relative;
        }

        .timeline-item-nop012 {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline-year-qrs345 {
            background: #d32f2f;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-tuv678 {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .specialties-grid-wxy901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .specialty-card-zab234 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
            border-top: 4px solid #ff6f00;
        }

        .specialty-card-zab234:hover {
            transform: translateY(-5px);
        }

        .card-icon-cde567 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .reviews-container-fgh890 {
            background: linear-gradient(135deg, #2e7d32, #388e3c);
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .review-card-ijk123 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            margin: 1.5rem 0;
            backdrop-filter: blur(10px);
        }

        .reviewer-name-lmn456 {
            font-weight: bold;
            color: #ffeb3b;
            margin-top: 1rem;
        }

        .ingredients-showcase-opq789 {
            background: url('https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg') center/cover;
            padding: 4rem 2rem;
            position: relative;
            margin: 3rem 0;
        }

        .ingredients-overlay-rst012 {
            background: rgba(0,0,0,0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 20px;
        }

        .ingredients-content-uvw345 {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .community-section-xyz678 {
            background: #fff3e0;
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
            text-align: center;
        }

        .team-grid-abc901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .team-member-def234 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        .footer-container-ghi567 {
            background: #2c2c2c;
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-content-jkl890 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-mno123 h3 {
            color: #ff6f00;
            margin-bottom: 1rem;
        }

        .contact-link-pqr456 {
            color: #ff6f00;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-link-pqr456:hover {
            color: #ffeb3b;
        }

        .modal-overlay-stu789 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-vwx012 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
        }

        .close-modal-yza345 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #d32f2f;
        }

        .continue-link-bcd678 {
            display: inline-block;
            background: #4caf50;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            margin: 1rem 0;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .continue-link-bcd678:hover {
            background: #388e3c;
        }

        .image-gallery-efg901 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .gallery-image-hij234 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .navigation-menu-ghi789 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-pqr678 {
                font-size: 2.5rem;
            }
            
            .nav-wrapper-abc123 {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <header class="header-container-xyz789">
        <nav class="nav-wrapper-abc123">
            <div class="logo-section-def456">Tony's Authentic Pizzeria</div>
            <ul class="navigation-menu-ghi789">
                <li><a href="#about-klm567">About Us</a></li>
                <li><a href="#history-nop890">Our History</a></li>
                <li><a href="#specialties-qrs123">Specialties</a></li>
                <li><a href="#ingredients-tuv456">Fresh Ingredients</a></li>
                <li><a href="#reviews-wxy789">Reviews</a></li>
                <li><a href="#community-zab012">Community</a></li>
                <li><a href="#team-cde345">Our Team</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-banner-jkl012">
        <div class="hero-content-mno345">
            <h1 class="hero-title-pqr678">Authentic Italian Pizza</h1>
            <p class="hero-subtitle-stu901">Handcrafted with traditional recipes since 1987</p>
            <a href="#about-klm567" class="cta-button-vwx234">Discover Our Story</a>
        </div>
    </section>

    <main class="content-section-yza567">
        <section id="about-klm567" class="about-block-bcd890">
            <h2 class="section-title-efg123">Welcome to Tony's Family</h2>
            <div class="text-content-hij456">
                <p>At Tony's Authentic Pizzeria, we believe that great pizza starts with passion, tradition, and the finest ingredients. Our family-owned restaurant has been serving the downtown community for over three decades, bringing authentic Italian flavors to every table. Each pizza is carefully handcrafted using time-honored techniques passed down through generations of Italian pizza makers.</p>
                
                <p>Our wood-fired brick oven, imported directly from Naples, reaches temperatures of over 900 degrees Fahrenheit, creating the perfect crispy crust with a tender, chewy interior that defines authentic Neapolitan pizza. We source our ingredients locally whenever possible, supporting area farmers and ensuring the freshest flavors in every bite.</p>
                
                <a href="#specialties-qrs123" class="continue-link-bcd678">Click here to continue exploring our menu</a>
                
                <p>From our signature San Marzano tomato sauce to our house-made mozzarella, every element of our pizzas is crafted with meticulous attention to detail. We take pride in creating not just a meal, but an experience that transports you to the bustling pizzerias of Italy.</p>
            </div>
        </section>

        <section id="history-nop890" class="history-timeline-klm789">
            <h2 class="section-title-efg123">Our Journey Through Time</h2>
            <div class="timeline-item-nop012">
                <div class="timeline-year-qrs345">1987</div>
                <div class="timeline-content-tuv678">
                    <h3>The Beginning</h3>
                    <p>Tony Marcelli arrived from Sicily with his grandmother's secret pizza recipes and a dream to share authentic Italian cuisine with his new community. He opened the first Tony's Pizzeria in a small storefront with just four tables and an old brick oven he built himself.</p>
                </div>
            </div>
            <div class="timeline-item-nop012">
                <div class="timeline-year-qrs345">1995</div>
                <div class="timeline-content-tuv678">
                    <h3>Growing Recognition</h3>
                    <p>After years of perfecting recipes and building a loyal customer base, Tony's was featured in the local newspaper as "Downtown's Hidden Gem." The restaurant expanded to include outdoor seating and began offering catering services for local events and celebrations.</p>
                </div>
            </div>
            <div class="timeline-item-nop012">
                <div class="timeline-year-qrs345">2003</div>
                <div class="timeline-content-tuv678">
                    <h3>Family Tradition Continues</h3>
                    <p>Tony's son Marco joined the business, bringing fresh ideas while respecting traditional methods. Together, they renovated the restaurant, adding the current dining room and installing the authentic Neapolitan wood-fired oven that remains the heart of our kitchen today.</p>
                </div>
            </div>
            <div class="timeline-item-nop012">
                <div class="timeline-year-qrs345">2018</div>
                <div class="timeline-content-tuv678">
                    <h3>Community Cornerstone</h3>
                    <p>Tony's became an official community gathering place, hosting local art exhibitions, charity fundraisers, and cultural events. We launched our farm-to-table initiative, partnering with local organic farms to source the freshest ingredients for our dishes.</p>
                </div>
            </div>
        </section>

        <section id="specialties-qrs123" class="specialties-grid-wxy901">
            <div class="specialty-card-zab234">
                <div class="card-icon-cde567">🍕</div>
                <h3>Wood-Fired Classics</h3>
                <p>Our traditional Margherita, Marinara, and Quattro Stagioni pizzas are prepared exactly as they would be in Naples, with hand-stretched dough, San Marzano tomatoes, and fresh buffalo mozzarella. Each pizza is fired in our authentic brick oven for just 90 seconds at 900°F.</p>
                <a href="#ingredients-tuv456" class="continue-link-bcd678">Click here to continue learning about our ingredients</a>
            </div>
            <div class="specialty-card-zab234">
                <div class="card-icon-cde567">🌿</div>
                <h3>Garden Fresh Creations</h3>
                <p>Our seasonal vegetable pizzas feature ingredients harvested from local organic farms within 50 miles of our restaurant. From roasted eggplant and zucchini to fresh arugula and heirloom tomatoes, these pizzas celebrate the bounty of our region's agriculture.</p>
            </div>
            <div class="specialty-card-zab234">
                <div class="card-icon-cde567">🧀</div>
                <h3>Artisan Cheese Selection</h3>
                <p>We craft our own mozzarella daily and source specialty cheeses from local artisan producers. Our cheese selection includes aged Parmigiano-Reggiano, creamy Gorgonzola, and seasonal varieties that showcase the best of regional dairy craftsmanship.</p>
            </div>
        </section>

        <section id="ingredients-tuv456" class="ingredients-showcase-opq789">
            <div class="ingredients-overlay-rst012"></div>
            <div class="ingredients-content-uvw345">
                <h2 class="section-title-efg123">Farm to Table Excellence</h2>
                <p>Every ingredient tells a story of quality and care. Our tomatoes are grown in volcanic soil, our olive oil is cold-pressed from century-old groves, and our herbs are picked fresh daily from our rooftop garden. We believe that exceptional pizza begins with exceptional ingredients, sourced responsibly and prepared with respect for traditional methods.</p>
                
                <div class="image-gallery-efg901">
                    <img src="https://images.pexels.com/photos/533325/pexels-photo-533325.jpeg" alt="Fresh tomatoes" class="gallery-image-hij234">
                    <img src="https://images.pexels.com/photos/4198021/pexels-photo-4198021.jpeg" alt="Fresh herbs" class="gallery-image-hij234">
                    <img src="https://images.pexels.com/photos/1435735/pexels-photo-1435735.jpeg" alt="Olive oil" class="gallery-image-hij234">
                    <img src="https://images.pexels.com/photos/773253/pexels-photo-773253.jpeg" alt="Fresh mozzarella" class="gallery-image-hij234">
                </div>
            </div>
        </section>

        <section id="reviews-wxy789" class="reviews-container-fgh890">
            <h2 class="section-title-efg123">What Our Customers Say</h2>
            <div class="review-card-ijk123">
                <p>"I've traveled throughout Italy, and Tony's pizza is as authentic as anything I had in Naples. The crust has that perfect char and chew, and you can taste the quality in every ingredient. This place is a true neighborhood treasure."</p>
                <div class="reviewer-name-lmn456">- Sarah Mitchell, Food Blogger</div>
            </div>
            <div class="review-card-ijk123">
                <p>"My family has been coming to Tony's for fifteen years, and it never disappoints. The atmosphere is warm and welcoming, the staff treats you like family, and the pizza is consistently outstanding. It's our go-to place for celebrations and casual dinners alike."</p>
                <div class="reviewer-name-lmn456">- Robert Chen, Local Resident</div>
            </div>
            <div class="review-card-ijk123">
                <p>"As someone with dietary restrictions, I appreciate how accommodating Tony's is. They offer excellent gluten-free options that don't compromise on flavor, and the staff is knowledgeable about ingredients and preparation methods."</p>
                <div class="reviewer-name-lmn456">- Maria Rodriguez, Regular Customer</div>
            </div>
            <div class="review-card-ijk123">
                <p>"The wood-fired oven makes all the difference. You can see the flames dancing as they prepare your pizza, and the aroma fills the entire restaurant. It's dinner and entertainment rolled into one amazing experience."</p>
                <div class="reviewer-name-lmn456">- James Thompson, Pizza Enthusiast</div>
            </div>
        </section>

        <section id="community-zab012" class="community-section-xyz678">
            <h2 class="section-title-efg123">Serving Our Community</h2>
            <div class="text-content-hij456">
                <p>Tony's Pizzeria is more than just a restaurant – we're an active member of the downtown community. We host monthly charity events, sponsor local youth sports teams, and provide meeting space for neighborhood organizations. Our walls showcase artwork from local artists, and we regularly feature live acoustic music from area musicians.</p>
                
                <p>Every month, we donate fresh pizzas to the downtown homeless shelter and participate in the annual food drive for local families in need. We believe in giving back to the community that has supported us for over three decades.</p>
                
                <a href="#team-cde345" class="continue-link-bcd678">Click here to continue meeting our team</a>
                
                <p>Our commitment extends to environmental responsibility as well. We compost our organic waste, use biodegradable packaging for takeout orders, and source ingredients from farms that practice sustainable agriculture. We're proud to be a certified green business in our city.</p>
            </div>
        </section>

        <section id="team-cde345" class="team-grid-abc901">
            <div class="team-member-def234">
                <h3>Tony Marcelli</h3>
                <p><strong>Founder & Head Chef</strong></p>
                <p>Born in Palermo, Sicily, Tony brought his family's pizza-making traditions to America in 1987. He still hand-selects every tomato and personally trains each new chef in the art of authentic Neapolitan pizza making.</p>
            </div>
            <div class="team-member-def234">
                <h3>Marco Marcelli</h3>
                <p><strong>Co-Owner & Operations Manager</strong></p>
                <p>Marco grew up in the restaurant and learned the business from the ground up. He manages daily operations while maintaining the family traditions that make Tony's special. He's also our resident wine expert, curating our selection of Italian wines.</p>
            </div>
            <div class="team-member-def234">
                <h3>Isabella Santos</h3>
                <p><strong>Head Server & Customer Relations</strong></p>
                <p>Isabella has been with Tony's for twelve years and knows most of our regular customers by name and favorite order. Her warm personality and attention to detail ensure every dining experience is memorable.</p>
            </div>
            <div class="team-member-def234">
                <h3>Giuseppe Romano</h3>
                <p><strong>Pizza Chef & Dough Specialist</strong></p>
                <p>Giuseppe joined our team five years ago, bringing expertise in traditional dough fermentation techniques. He arrives at 5 AM every day to prepare our signature dough, which ferments for 24 hours for optimal flavor and texture.</p>
            </div>
        </section>

        <section class="about-block-bcd890">
            <h2 class="section-title-efg123">Visit Us Today</h2>
            <div class="text-content-hij456">
                <p>Whether you're craving an authentic Italian meal, looking for a cozy place to gather with friends, or want to experience the best pizza in downtown, Tony's Authentic Pizzeria welcomes you. Our dining room accommodates both intimate dinners and larger celebrations, and our experienced staff is ready to help you create the perfect meal.</p>
                
                <p>We're open seven days a week, serving lunch and dinner with the same commitment to quality and authenticity that has defined us for over thirty years. Reservations are recommended for weekend evenings, but we always try to accommodate walk-in guests.</p>
                
                <a href="tel:+15551234567" class="continue-link-bcd678">Click here to continue - Call us now!</a>
                
                <p>Join us for an authentic taste of Italy right here in downtown. From our family to yours, we look forward to serving you soon at Tony's Authentic Pizzeria, where every meal is prepared with amore.</p>
            </div>
        </section>
    </main>

    <footer class="footer-container-ghi567">
        <div class="footer-content-jkl890">
            <div class="footer-section-mno123">
                <h3>Contact Information</h3>
                <p>📍 456 Main Street, Downtown District</p>
                <p>📞 <a href="tel:+15551234567" class="contact-link-pqr456">(555) 123-4567</a></p>
                <p>✉️ info@tonysauthenticpizza.com</p>
                <p>🕒 Mon-Thu: 11am-10pm</p>
                <p>🕒 Fri-Sat: 11am-11pm</p>
                <p>🕒 Sunday: 12pm-9pm</p>
            </div>
            <div class="footer-section-mno123">
                <h3>Services</h3>
                <p>• Dine-in Restaurant</p>
                <p>• Takeout Orders</p>
                <p>• Local Delivery</p>
                <p>• Catering Services</p>
                <p>• Private Events</p>
                <p>• Cooking Classes</p>
            </div>
            <div class="footer-section-mno123">
                <h3>Legal</h3>
                <p><a href="#" onclick="showModal('privacy')" class="contact-link-pqr456">Privacy Policy</a></p>
                <p><a href="#" onclick="showModal('terms')" class="contact-link-pqr456">Terms of Service</a></p>
                <p>© 2024 Tony's Authentic Pizzeria</p>
                <p>All rights reserved</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-stu789">
        <div class="modal-content-vwx012">
            <span class="close-modal-yza345" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>Tony's Authentic Pizzeria collects information you provide directly to us, such as when you make a reservation, place an order, sign up for our newsletter, or contact us. This may include your name, email address, phone number, and dining preferences.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and events.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at (555) 123-4567 or info@tonysauthenticpizza.com.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-stu789">
        <div class="modal-content-vwx012">
            <span class="close-modal-yza345" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using Tony's Authentic Pizzeria services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Restaurant Services</h3>
            <p>Tony's Authentic Pizzeria provides dining, takeout, delivery, and catering services. All orders are subject to availability and acceptance by our restaurant.</p>
            
            <h3>Reservations and Cancellations</h3>
            <p>Reservations are recommended but not guaranteed. We reserve the right to cancel reservations due to unforeseen circumstances. For large parties or special events, advance notice may be required.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment is due at the time of service. We accept cash, credit cards, and approved payment methods. Prices are subject to change without notice.</p>
            
            <h3>Liability Limitations</h3>
            <p>Tony's Authentic Pizzeria shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our services.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Changes will be effective immediately upon posting.</p>
            
            <h3>Contact Information</h3>
                        <p>For questions regarding these terms, contact us at (555) 123-4567 or info@tonysauthenticpizza.com.</p>
        </div>
    </div>

    <script>
        function showModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-stu789')) {
                event.target.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.specialty-card-zab234, .team-member-def234');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add click tracking for continue buttons
            const continueButtons = document.querySelectorAll('.continue-link-bcd678');
            continueButtons.forEach(button => {
                button.addEventListener('click', function() {
                    console.log('Continue button clicked:', this.textContent);
                });
            });
        });

        // Simple form validation for future contact forms
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add some dynamic content loading
        function loadMoreContent() {
            // Placeholder for dynamic content loading
            console.log('Loading additional content...');
        }

        // Mobile menu toggle functionality
        function toggleMobileMenu() {
            const nav = document.querySelector('.navigation-menu-ghi789');
            nav.classList.toggle('mobile-active');
        }

        // Add scroll-to-top functionality
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                document.body.classList.add('scrolled');
            } else {
                document.body.classList.remove('scrolled');
            }
        });

        // Image lazy loading for better performance
        function lazyLoadImages() {
            const images = document.querySelectorAll('img[data-src]');
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }

        // Initialize lazy loading when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', lazyLoadImages);
        } else {
            lazyLoadImages();
        }

        // Add animation on scroll
        function animateOnScroll() {
            const elements = document.querySelectorAll('.about-block-bcd890, .specialty-card-zab234, .review-card-ijk123');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            elements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        }

        // Initialize animations
        animateOnScroll();

        // Add search functionality for future use
        function searchContent(query) {
            const content = document.body.innerText.toLowerCase();
            return content.includes(query.toLowerCase());
        }

        // Newsletter signup validation
        function validateNewsletterSignup(email) {
            if (!validateEmail(email)) {
                alert('Please enter a valid email address');
                return false;
            }
            return true;
        }

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const openModals = document.querySelectorAll('.modal-overlay-stu789[style*="block"]');
                openModals.forEach(modal => {
                    modal.style.display = 'none';
                });
            }
        });

        // Performance monitoring
        window.addEventListener('load', function() {
            const loadTime = performance.now();
            console.log('Page loaded in:', loadTime, 'milliseconds');
        });

        // Add touch gesture support for mobile
        let touchStartX = 0;
        let touchEndX = 0;

        document.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });

        document.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    // Swipe left
                    console.log('Swiped left');
                } else {
                    // Swipe right
                    console.log('Swiped right');
                }
            }
        }

        // Add cookie consent functionality
        function setCookie(name, value, days) {
            const expires = new Date();
            expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + '=' + value + ';expires=' + expires.toUTCString() + ';path=/';
        }

        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for(let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Initialize cookie consent
        if (!getCookie('cookieConsent')) {
            // Show cookie consent banner if needed
            console.log('Cookie consent not given');
        }

        // Add social sharing functionality
        function shareOnSocialMedia(platform, url, text) {
            const encodedUrl = encodeURIComponent(url);
            const encodedText = encodeURIComponent(text);
            let shareUrl = '';

            switch(platform) {
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`;
                    break;
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${encodedUrl}&text=${encodedText}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodedUrl}`;
                    break;
            }

            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        // Add print functionality
        function printPage() {
            window.print();
        }

        // Add accessibility features
        function increaseFontSize() {
            const body = document.body;
            const currentSize = window.getComputedStyle(body).fontSize;
            const newSize = parseFloat(currentSize) * 1.1;
            body.style.fontSize = newSize + 'px';
        }

        function decreaseFontSize() {
            const body = document.body;
            const currentSize = window.getComputedStyle(body).fontSize;
            const newSize = parseFloat(currentSize) * 0.9;
            body.style.fontSize = newSize + 'px';
        }

        // Add high contrast mode
        function toggleHighContrast() {
            document.body.classList.toggle('high-contrast');
        }

        // Add focus management for accessibility
        function manageFocus() {
            const focusableElements = document.querySelectorAll(
                'a[href], button, textarea, input[type="text"], input[type="radio"], input[type="checkbox"], select'
            );
            
            focusableElements.forEach((element, index) => {
                element.addEventListener('keydown', function(e) {
                    if (e.key === 'Tab') {
                        if (e.shiftKey && index === 0) {
                            e.preventDefault();
                            focusableElements[focusableElements.length - 1].focus();
                        } else if (!e.shiftKey && index === focusableElements.length - 1) {
                            e.preventDefault();
                            focusableElements[0].focus();
                        }
                    }
                });
            });
        }

        // Initialize accessibility features
        manageFocus();

        // Add error handling
        window.addEventListener('error', function(e) {
            console.error('JavaScript error:', e.error);
        });

        // Add performance optimization
        function debounce(func, wait) {
            let timeout;
            return function executedFunction(...args) {
                const later = () => {
                    clearTimeout(timeout);
                    func(...args);
                };
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
            };
        }

        // Debounced scroll handler
        const debouncedScrollHandler = debounce(function() {
            // Handle scroll events efficiently
            const scrollTop = window.pageYOffset;
            if (scrollTop > 100) {
                document.body.classList.add('scrolled-down');
            } else {
                document.body.classList.remove('scrolled-down');
            }
        }, 10);

        window.addEventListener('scroll', debouncedScrollHandler);

        // Add local storage functionality
        function saveToLocalStorage(key, value) {
            try {
                localStorage.setItem(key, JSON.stringify(value));
            } catch (e) {
                console.error('Error saving to localStorage:', e);
            }
        }

        function getFromLocalStorage(key) {
            try {
                const item = localStorage.getItem(key);
                return item ? JSON.parse(item) : null;
            } catch (e) {
                console.error('Error reading from localStorage:', e);
                return null;
            }
        }

        // Save user preferences
        function saveUserPreferences() {
            const preferences = {
                fontSize: document.body.style.fontSize,
                highContrast: document.body.classList.contains('high-contrast'),
                lastVisit: new Date().toISOString()
            };
            saveToLocalStorage('userPreferences', preferences);
        }

        // Load user preferences
        function loadUserPreferences() {
            const preferences = getFromLocalStorage('userPreferences');
            if (preferences) {
                if (preferences.fontSize) {
                    document.body.style.fontSize = preferences.fontSize;
                }
                if (preferences.highContrast) {
                    document.body.classList.add('high-contrast');
                }
            }
        }

        // Initialize user preferences
        loadUserPreferences();

        // Save preferences before page unload
        window.addEventListener('beforeunload', saveUserPreferences);
    </script>

    <style>
        /* Additional styles for enhanced functionality */
        .high-contrast {
            filter: contrast(150%) brightness(120%);
        }

        .scrolled-down .header-container-xyz789 {
            background: rgba(211, 47, 47, 0.95);
            backdrop-filter: blur(10px);
        }

        .mobile-active {
            display: flex !important;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #d32f2f;
            padding: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .navigation-menu-ghi789 {
                display: none;
            }
        }

        /* Print styles */
        @media print {
            .header-container-xyz789,
            .footer-container-ghi567,
            .modal-overlay-stu789 {
                display: none !important;
            }
            
            body {
                font-size: 12pt;
                line-height: 1.4;
            }
            
            .hero-banner-jkl012 {
                height: auto;
                background: none;
                color: black;
            }
        }

        /* Focus styles for accessibility */
        a:focus,
        button:focus,
        input:focus,
        textarea:focus,
        select:focus {
            outline: 3px solid #ff6f00;
            outline-offset: 2px;
        }

        /* Reduced motion preferences */
        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Dark mode support */
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1a1a1a;
                color: #e0e0e0;
            }
            
            .about-block-bcd890,
            .specialty-card-zab234,
            .team-member-def234 {
                background: #2d2d2d;
                color: #e0e0e0;
            }
        }

        /* Additional responsive improvements */
        @media (max-width: 480px) {
            .hero-title-pqr678 {
                font-size: 2rem;
            }
            
            .section-title-efg123 {
                font-size: 2rem;
            }
            
            .content-section-yza567 {
                padding: 2rem 1rem;
            }
        }
    </style>
</body>
</html>

