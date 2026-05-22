<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jemark & Marife | Archive</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        /* --- RESET & BASE --- */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            color: #1a1a1a;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* --- HEADER --- */
        header {
            padding: 100px 20px 60px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-style: italic;
            letter-spacing: -1px;
            color: #000;
        }

        header p {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: #b5838d;
            margin-top: 15px;
            font-weight: 600;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        /* --- SECTION TITLES --- */
        .section-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: #b5838d;
            text-transform: uppercase;
            letter-spacing: 3px;
            display: block;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
        }

        .section-label::after {
            content: '';
            display: block;
            width: 40px;
            height: 1px;
            background: #b5838d;
            margin: 10px auto 0;
        }

        /* --- PHOTO GRID --- */
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            margin-bottom: 120px;
        }

        .museum-card {
            background: #fff;
            padding: 0;
            transition: transform 0.3s ease;
        }

        .img-wrapper {
            overflow: hidden;
            background: #f9f9f9;
            padding: 15px;
            border: 1px solid #eee;
        }

        .museum-card img {
            width: 100%;
            height: 500px;
            object-fit: cover;
            display: block;
            filter: sepia(15%);
            transition: all 0.5s ease;
        }

        .museum-card:hover img {
            filter: sepia(0%);
            transform: scale(1.03);
        }

        .museum-card h3 {
            font-family: 'Playfair Display', serif;
            margin-top: 25px;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .museum-card p {
            font-size: 0.95rem;
            color: #777;
            margin-top: 10px;
            font-style: italic;
        }

        /* --- VIDEO SECTION --- */
        .video-wall-outer {
            background: #0f0f0f;
            padding: 80px 0;
            width: 100vw;
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
        }

        .video-grid {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            justify-content: center;
        }

        .video-container {
            width: 100%;
            transition: transform 0.3s ease;
        }

        .video-container:hover {
            transform: translateY(-5px);
        }

        video {
            width: 100%;
            height: auto;
            aspect-ratio: 9 / 16; /* Assumes vertical videos */
            border-radius: 4px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            display: block;
            background: #000;
            object-fit: cover;
        }

        /* --- FOOTER --- */
        footer {
            text-align: center;
            padding: 120px 20px;
            background: #fff;
        }

        .footer-tag {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            margin-bottom: 20px;
            display: block;
        }

        footer p {
            font-size: 0.7rem;
            color: #bbb;
            letter-spacing: 2px;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            header h1 { font-size: 2.5rem; }
            .museum-card img { height: 400px; }
            .video-grid { grid-template-columns: repeat(2, 1fr); gap: 15px; }
        }
        
        @media (max-width: 480px) {
            .video-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <header>
        <h1>Jemark & Marife</h1>
        <p>Archive Collective 2021 — 2026</p>
    </header>

    <main class="container">
        
        <span class="section-label">Selected Photography</span>
        
        <div class="photo-grid">
            <div class="museum-card">
                <div class="img-wrapper">
                    <img src="621671781_1432800804900123_2133177036111550048_n.jpg" alt="SHS">
                </div>
                <h3>Senior High Era</h3>
                <p>The foundation of our dreams. 2021-2023</p>
            </div>

            <div class="museum-card">
                <div class="img-wrapper">
                    <img src="618483634_1414361810132695_5405016233476092336_n.jpg" alt="Island">
                </div>
                <h3>The Island Trip</h3>
                <p>Olango Island, Cebu. Our first major adventure. 2024</p>
            </div>

            <div class="museum-card">
                <div class="img-wrapper">
                    <img src="623083381_1955927668633023_4792188590048733655_n.jpg" alt="Sunset">
                </div>
                <h3>Golden Hours</h3>
                <p>Moments caught between the light and shadows. 2024</p>
            </div>
        </div>

        <span class="section-label">Film & Motion</span>

        <section class="video-wall-outer">
            <div class="video-grid">
                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="7b444507-f7af-487f-b200-d945f9106c79.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="d324733c-052c-4960-b753-e1fd86b1a5e0.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="846eea42-46d4-40a6-afb3-33b16df84add.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="c3c6d674-8274-4305-81d1-5ff26efb8267.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="1ede7ba7-3041-4d1f-b6ff-7c797bfcc3b7.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="a0899037-8506-42ea-8d62-75b1f2d2e10f.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="video-container">
                    <video controls preload="metadata">
                        <source src="0b43e04d-aa02-4b61-9285-e1513cbb01fd.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <span class="footer-tag">End of Archive Vol. 1</span>
        <p>&copy; 2026 JMMALOVESTORY. ALL RIGHTS RESERVED.</p>
    </footer>

</body>
</html>