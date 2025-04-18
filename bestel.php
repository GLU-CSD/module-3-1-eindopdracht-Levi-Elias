<?php
include("includes/header.php");
?>

<body>
    <!-- Blue top bar -->
    <header class="top-bar">
        <h1>Information and Payment</h1>
    </header>

    <!-- Main content -->
    <div class="container">
        <form method="POST" action="bedankt.php">
            <table>
                <tr>
                    <td colspan="2" class="title">JE GEGEVENS<span class="orange">.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="subtitle">Wat moet er op het factuur staan?</td>
                </tr>

                <tr>
                    <td class="name">Type bestelling</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <label><input type="radio" name="order_type" checked><span class="checkmark"></span>
                                Particulier</label>
                            <label><input type="radio" name="order_type"><span class="checkmark"></span>
                                Zakelijk</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">Aanhef</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <label><input type="radio" name="salutation" checked><span class="checkmark"></span>
                                Dhr.</label>
                            <label><input type="radio" name="salutation"><span class="checkmark"></span> Mevr.</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">Naam</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <input type="text" name="firstname" placeholder="Voornaam">
                            <input type="text" name="middlename" placeholder="Tussenv.">
                            <input type="text" name="lastname" placeholder="Achternaam">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">Postcode</td>
                    <td class="inputsCell">
                        <input type="text" name="postcode" placeholder="1234AB">
                    </td>
                </tr>
                <tr>
                    <td class="name">Huisnummer</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <input type="text" name="housenumber" placeholder="Nr.">
                            <input type="text" name="housenumberadd" placeholder="Toev.">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">Land</td>
                    <td class="inputsCell">Nederland <a href="#">In België laten bezorgen</a></td>
                </tr>
                <tr>
                    <td class="name">Afleveradres</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <label><input type="radio" name="shipping" checked> Op bovenstaand adres bezorgen</label>
                            <label><input type="radio" name="shipping"> Op ander adres bezorgen</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">E-mailadres</td>
                    <td class="inputsCell">
                        <input type="email" name="email" placeholder="E-mailadres" required>
                    </td>
                </tr>
                <tr>
                    <td class="name">Telefoonnummer</td>
                    <td class="inputsCell">
                        <input type="tel" name="phone">
                    </td>
                </tr>
                <tr>
                    <td class="name">Geboortedatum</td>
                    <td class="inputsCell">
                        <input type="text" name="dateOfBirth" placeholder="dd-mm-jjjj">
                    </td>
                </tr>
                <tr>
                    <td class="name">Verzendwijze factuur</td>
                    <td class="inputsCell">
                        <div class="inputs">
                            <label><input type="radio" name="invoice" checked> Factuur per e-mail</label>
                            <label><input type="radio" name="invoice"> Factuur geprint bij de bestelling</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="name">Nieuwsbrief</td>
                    <td class="inputsCell">
                        <input type="checkbox" name="newsletter" checked>
                        <label>Ja, ik wil de nieuwsbrief met <span class="orange" style="font-weight: 700;">&euro;5,-
                                cadeaubon</span> voor mijn volgende bestelling</label>
                    </td>
                </tr>
                <tr>
                    <td class="name">Kleur verpakking</td>
                    <td class="inputsCell">
                        <input type="color" name="color">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="title">BEWAAR JE GEGEVENS<span class="orange">.</span></td>
                </tr>
                <tr>
                    <td colspan="2" class="subtitle">Handig voor de volgende keer.</td>
                </tr>
                <tr>
                    <td class="name">Wachtwoord</td>
                    <td class="inputsCell">
                        <input type="password" name="password" placeholder="Wachtwoord" required>
                        <p class="description">Minimaal 6 karakters.<br>Verder doen we niet zo moeilijk.</p>
                    </td>
                </tr>
                <tr>
                    <td class="name">Wachtwoord bevestigen</td>
                    <td class="inputsCell">
                        <input type="password" name="passwordConfirm">
                    </td>
                </tr>
            </table>

            <div class="submitBar">
                <button type="submit">Verder</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <div class="info">
        <div class="left">
            <div class="phoneNumberContainer">
                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                <div class="phoneNumber">
                    <p class="title">BEL 010 7988999<span class="orange">.</span></p>
                    <p class="description">Voor acute service.</p>
                </div>
            </div>
            <p class="title">Onze klantenservice is nu open.</p>
            <p class="description">Je kunt ons 7 dagen per week bereiken. Vandaag is de klantenservice tot 23.59 uur
                open.</p>
        </div>
        <div class="right">
            <p class="title">SERVICE<span class="orange">.</span></p>
            <p class="description">Onderdeel van Fresh Kicks.</p>
            <p class="item"><span class="check"><i class="fa-solid fa-check"></i></span> Gratis verzenden en retourneren
            </p>
            <p class="item"><span class="check"><i class="fa-solid fa-check"></i></span> Voor 23.59 uur besteld, morgen
                in huis</p>
            <p class="item"><span class="check"><i class="fa-solid fa-check"></i></span> Track & Trace, volg je pakket
            </p>
            <p class="item"><span class="check"><i class="fa-solid fa-check"></i></span> Statusupdates via e-mail</p>
            <p class="item"><span class="check"><i class="fa-solid fa-check"></i></span> Winkels in Amsterdam,
                Eindhoven, Groningen, Rotterdam en Utrecht</p>
        </div>
    </div>

    <!-- Payment Methods -->
    <div class="paymentMethods">
        <img src="./assets/img/thuiswinkel.png" alt="Thuiswinkel">
        <img src="./assets/img/ideal.png" alt="iDEAL">
        <img src="./assets/img/mastercard.png" alt="Mastercard">
        <img src="./assets/img/visa.png" alt="Visa">
        <img src="./assets/img/paypal.png" alt="PayPal">
        <img src="./assets/img/postnl.png" alt="PostNL">
    </div>
</body>

<?php
include("includes/footer.php");
?>

</html>