<?php include "header.php" ?>

<div class="container"> 
    <?php include "aside.php" ?>
    
    <main>
        
        <section class="contract">

            <h1>Kapcsolat</h1>
            <p>
                Mobil: +36 (30) 5811 423 <br>
                E-mail cím: info@dekorosmuvek.hu
            </p>
            <h3>Cégadatok</h3>
            <p>Cégnév: Jansik György egyéni vállalkozó<br>
                Egyéni vállakozó nyilvántartási szám: 22789684<br>
                Adószám:  60787059-1-26<br>
                Cím: 6728 Szeged, 4. u. 9.<br>
                Kibocsájtó hivatal: Csongrád Megyei Kormányhivatal Szegedi Járási Hivatala<br>
                Szerződés nyelve: magyar
            </p>

        </section>

        <form action="" class="contact-form">
            <h2>Kapcsolatfelvétel</h2>

            <label for="name">Név</label>
            <input type="text" name="name" id="name">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">

            <label for="phone-number">Telefonszám</label>
            <input type="number" name="phone-number" id="phone-number">

            <label for="message">Üzenet</label>
            <textarea name="message" id="message"></textarea>

            <div class="agree-box">
                <label for="agree">Egyetértek a személyes adatok feldolgozásával</label>
                <input type="checkbox" id="agree">
            </div>

            <button type="submit">Küldés</button>
        </form>
        
    </main>
</div>

<?php include "footer.php" ?>