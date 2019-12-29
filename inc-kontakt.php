<section id="contact">
        <svg id="curveDownColor1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%"
            height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 0 C 50 100 80 100 100 0 Z"></path>
        </svg>

        <div class="bird">
            <img class="layer" data-speed="-1" src="images/logoped-logopedski-tretmani-logoped-borča-ptica.png"
                alt="logoped-logopedski-tretmani-logoped-borča-kontakt">
        </div>

        <div class="puz">
            <div class="img layer__5" data-speed="-4"></div>
            <script>
                document.addEventListener('scroll', parallax4);

                function parallax4(e) {
                    this.querySelectorAll('.layer__5').forEach(layer => {
                        var speed = layer.getAttribute('data-speed')
                        // var x = (window.innerWidth - e.pageX * speed) / 100;
                        var x = (window.innerWidth - window.scrollY * speed) / 100;
                        layer.style.transform = `translateX(${x}px)`;
                    })
                }
            </script>
        </div>


        <h3>Kontakt</h3>
        <div class="tedy">
            <img src="images/logoped-logopedski-tretmani-logoped-borča-tedy.svg"
                alt="logoped-logopedski-tretmani-logoped-borča-tedy">
        </div>
        <div class="container">

            <div class="contakt__form__wraper">
                <div class="contact__right">

                    <h5>Pošaljite nam poruku</h5>

                    <!-- https://script.google.com/macros/s/AKfycbwn5q4euYnS2W2IGjJuecoXl7tRviUqQQEdJ181FQ/exec -->

                    <!-- ==================================================================================== -->
                    <form class="gform pure-form pure-form-stacked" method="POST" data-email=""
                        action="https://script.google.com/macros/s/AKfycbwn5q4euYnS2W2IGjJuecoXl7tRviUqQQEdJ181FQ/exec">
                        <!-- change the form action to your script url -->
                        <div class="form-elements">
                            <div class="half">
                                <label for="name">Ime: </label>
                                <input type="text" id="name" name="name" />
                                <label for="name">Naslov: </label>
                                <input type="text" id="poruka" name="naslov" />
                                <label for="email">Email Adresa:</label>
                                <input id="email" name="email" type="email" autocomplete="off" value="" required
                                    placeholder="your.name@email.com" />
                                <p class="email-invalid" style="display:none">
                                    Email adresa mora biti validna</p>
                            </div>
                        </div>
                        <p class="full">
                            <textarea id="message" name="message" rows="7" placeholder="Poruka"></textarea>
                        </p>
                        <button>Pošalji</button>
                        <div class="thankyou_message">
                            <h2><em>Hvala</em> na poslatoj poruci! <br>
                                Odgovorićemo Vam uskoro!</h2>
                        </div>
                        <input class="agreemment" type="checkbox" name="" value="quwry" checked>
                        <span class="contact__p wrongForm"> <small> Saglasan sam da se na ovu E-mail adresu mogu slati
                                povremena obaveštenja o organizovanju radionica, novitetima i popustima u logopedskom
                                centru Logobell.</small></span><br><br>
                    </form>
                    <!-- END -->
                </div>
            </div>

            <div class="info_right">
                <div class="info">
                    <h5>Posetite nas ili pozovite</h5>
                    <div class="info__wrap">
                        <div class="adress">


                            <span>
                                <!-- <img src="images/placeholder.svg" alt="Lager-service-location-icon"> -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54.757 54.757">
                                    <path
                                        d="M40.94 5.617A19.052 19.052 0 0027.38 0a19.05 19.05 0 00-13.56 5.617c-6.703 6.702-7.536 19.312-1.804 26.952L27.38 54.757 42.721 32.6c5.755-7.671 4.922-20.281-1.781-26.983zM27.557 26c-3.859 0-7-3.141-7-7s3.141-7 7-7 7 3.141 7 7-3.141 7-7 7z"
                                        fill="#E21C3F" /></svg>
                            </span>
                            <h6> <strong class="company__name"> Logoped Miljana </strong> | Bratstva i Jedinstva 6,
                                10000
                                Beograd - Borča
                            </h6>

                        </div>

                        <div class="adress">
                            <div class="contact__span"><img
                                    src="./images/logoped-logopedska-ordinacija-logoped-borca-kontakt-telefon.svg"
                                    alt="logoped-logopedska-ordinacija-logoped-borca-kontakt-telefon"></div>
                            <p class="contact__p">Telefon: <a href="tel:+381694941428">+381 69 4941428</a></p>
                        </div>

                    </div>
                </div>
                <div class="mapa">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2826.7193925903093!2d20.45503361505078!3d44.88835917970272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a637949f8e639%3A0xbec017760cfc5d66!2zQnJhdHN0dmEgaSBKZWRpbnN0dmEgNiwg0JHQvtGA0YfQsA!5e0!3m2!1ssr!2srs!4v1573735102805!5m2!1ssr!2srs"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        title="google map"></iframe>
                </div>
            </div>

        </div>
        <div class="beetwen"></div>
    </section>