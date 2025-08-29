<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHAD Foundation - Announcements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            width: 100%;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        .header {
            background: #0056b3;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }
        
        .header p {
            font-size: 16px;
            opacity: 0.9;
        }
        
        .logo {
            width: 120px;
            margin-bottom: 15px;
        }
        
        /* Announcement bar styling */
        .announcement-container {
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            position: relative;
            overflow: hidden;
        }
        
        .announcement-wrapper {
            display: flex;
            align-items: center;
            padding: 0 15px;
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            height: 60px;
        }
        
        .announcement-icon {
            margin-right: 15px;
            color: #d32f2f;
            font-size: 20px;
            animation: pulse 2s infinite;
        }
        
        .marquee {
            flex: 1;
            overflow: hidden;
            position: relative;
        }
        
        .marquee-content {
            display: inline-block;
            white-space: nowrap;
            animation: marquee 25s linear infinite;
            padding-right: 50px;
        }
        
        .marquee-content a {
            display: inline-block;
            color: #194b85;
            text-decoration: none;
            font-weight: 600;
            margin: 0 20px;
            transition: all 0.3s ease;
            padding: 5px 10px;
            border-radius: 4px;
        }
        
        .marquee-content a:hover {
            color: #ff6600;
            background: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }
        
        .alert {
            background: #ffebee;
            padding: 8px 15px;
            border-radius: 20px;
            border-left: 4px solid #d32f2f;
        }
        
        .new {
            background: #e8f5e9;
            padding: 8px 15px;
            border-radius: 20px;
            border-left: 4px solid #388e3c;
        }
        
        .marquee-controls {
            display: flex;
            margin-left: 15px;
        }
        
        .marquee-controls button {
            background: #0056b3;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 6px 12px;
            cursor: pointer;
            margin-left: 8px;
            transition: background 0.3s;
        }
        
        .marquee-controls button:hover {
            background: #003d82;
        }
        
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .content {
            padding: 30px;
            line-height: 1.6;
        }
        
        .content h2 {
            color: #0056b3;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }
        
        .content p {
            margin-bottom: 15px;
        }
        
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 25px 0;
        }
        
        .feature {
            flex: 1;
            min-width: 250px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }
        
        .feature i {
            font-size: 24px;
            color: #0056b3;
            margin-bottom: 15px;
        }
        
        .footer {
            text-align: center;
            padding: 20px;
            background: #0056b3;
            color: white;
            margin-top: 30px;
            border-radius: 0 0 12px 12px;
        }
        
        @media (max-width: 768px) {
            .marquee-content {
                animation-duration: 35s;
            }
            
            .marquee-content a {
                margin: 0 10px;
                font-size: 14px;
            }
            
            .announcement-wrapper {
                height: auto;
                padding: 10px;
            }
            
            .marquee-controls {
                flex-direction: column;
                gap: 5px;
            }
        }
        
        @media (max-width: 480px) {
            .marquee-content {
                animation-duration: 40s;
            }
            
            .header h1 {
                font-size: 22px;
            }
            
            .feature {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>SHAD Foundation</h1>
            <p>Committed to social welfare and community development</p>
        </div>
        
        <div class="announcement-container">
            <div class="announcement-wrapper">
                <div class="announcement-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="marquee">
                    <div class="marquee-content">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeQJVX1RKB3cbBondon1m7fpf0Q7K-E3k9nPCZ82eJ_yrbt_w/viewform" target="_blank" class="new">
                            <i class="fas fa-briefcase"></i> Hiring a Taekwondo Trainer: Click Here to Apply Online
                        </a>
                        <a href="https://shadfoundation.org.pk/donate" class="alert">
                            <i class="fas fa-hand-holding-heart"></i> 🚨 Flood Relief Appeal: Dain Valley needs your urgent support. Donate now!
                        </a>
                        <a href="https://theplatinumpartnership.com/in-continuous-voter-registration/" target="_blank">
                            <i class="fas fa-blog"></i> See Blog for news on Nigerian election.
                        </a>
                    </div>
                </div>
                <div class="marquee-controls">
                    <button onclick="pauseMarquee()"><i class="fas fa-pause"></i></button>
                    <button onclick="playMarquee()"><i class="fas fa-play"></i></button>
                </div>
            </div>
        </div>
        
        <div class="content">
            <h2>About SHAD Foundation</h2>
            <p>The SHAD Foundation is a non-profit organization dedicated to social welfare, community development, and humanitarian aid. We work tirelessly to support communities in need through various initiatives and programs.</p>
            
            <div class="features">
                <div class="feature">
                    <i class="fas fa-hands-helping"></i>
                    <h3>Community Support</h3>
                    <p>We provide essential services and support to communities facing challenges.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-heartbeat"></i>
                    <h3>Emergency Relief</h3>
                    <p>Quick response to natural disasters and emergency situations with aid and supplies.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education Programs</h3>
                    <p>Educational initiatives to empower individuals and create opportunities.</p>
                </div>
            </div>
            
            <p>Your support enables us to continue our vital work in communities that need it most. Whether through donations, volunteering, or spreading awareness, every contribution makes a difference.</p>
        </div>
        
        <div class="footer">
            <p>© 2023 SHAD Foundation. All rights reserved.</p>
        </div>
    </div>

    <script>
        const marqueeContent = document.querySelector('.marquee-content');
        let marqueePaused = false;
        
        function pauseMarquee() {
            if (!marqueePaused) {
                marqueeContent.style.animationPlayState = 'paused';
                marqueePaused = true;
            }
        }
        
        function playMarquee() {
            if (marqueePaused) {
                marqueeContent.style.animationPlayState = 'running';
                marqueePaused = false;
            }
        }
        
        // Pause marquee when hovered
        document.querySelector('.marquee').addEventListener('mouseenter', pauseMarquee);
        document.querySelector('.marquee').addEventListener('mouseleave', function() {
            if (marqueePaused) {
                // Only resume if not manually paused
                playMarquee();
            }
        });
    </script>
</body>
</html>