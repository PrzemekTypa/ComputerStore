<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a href="#"><img width="210" src="images/logo.jpeg" alt="logo" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong> Sejmowa 5A, 59-220 Legnica, Polska</p>
                        <p><strong>TELEFON:</strong> 665-062-694</p>
                        <p><strong>EMAIL:</strong> admin@gmail.com</p>
                        <!-- Dodajemy miejsce na informacje o pogodzie -->
                        <p><strong>Pogoda Legnica :</strong> <span id="weather"></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="{{'/'}}">Strona główna</a></li>
                                        <li><a href="#">O nas</a></li>
                                        <li><a href="#klienci">Opinie</a></li>
                                        <li><a href="#stopka">Kontakt</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <h2 style="padding: 20px; text-align: center;">Tu Jesteśmy:</h2>
                        <!-- Mapa Google -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d787.3869081666267!2d16.149660034980258!3d51.204393525251746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470f128c143643e9%3A0xd13d291bc4044b4c!2sCollegium%20Witelona%20Uczelnia%20Pa%C5%84stwowa!5e0!3m2!1spl!2spl!4v1717709427090!5m2!1spl!2spl" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- Koniec Mapy Google -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        const apiKey = 'f37126bd8272a2688959246037cdc78b'; 
        const city = 'Legnica';
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

        // Pobieranie danych z API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const weatherInfo = `${data.main.temp}°C, ${data.weather[0].description}`;
                document.getElementById('weather').textContent = weatherInfo;
            })
            .catch(error => {
                console.error('Błąd pobierania danych:', error);
            });
    </script>
</footer>
