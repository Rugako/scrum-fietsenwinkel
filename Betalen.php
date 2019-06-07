<?php
/**
 * Created by PhpStorm.
 * User: jiand
 * Date: 6-6-2019
 * Time: 16:01
 */

include ("Header.php");
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
    function openING() {
        window.open("https://ideal.ing.nl/internetbankieren/SesamLoginServlet?trxid=0050003890667789&random=zc0f902f79fd60a7");
    }
    function openSNS() {
        window.open("https://diensten.snsbank.nl/online/ideal/#/sign?sp=47E36B94C6239F495F63692299368171A32C02D0000132260933&trxid=0050003890669021");
    }
    function openPaypal() {
        window.open("https://www.paypal.com/nl/home");
    }

</script>
<div class="container">

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <a href="Winkelmandje.php" style="font-size: 24px" class="text-muted">Uw producten</a>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product naam</h6>
                        <small class="text-muted">Beschrijving</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">tweede product</h6>
                        <small class="text-muted">Beschrijving</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">derde item</h6>
                        <small class="text-muted">Beschrijving</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>Voorbeeldcode</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (EUR)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Factuur adres</h4>
            <form class="needs-validation" novalidate="" method="post">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Voornaam</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Achternaam</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Gebruikersnaam</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">E-mail<span class="text-muted">(optioneel)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Straat</label>
                        <input type="text" class="form-control" id="country" required="">
                        <div class="invalid-feedback">
                            Geef een straat op..
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">Huisnummer</label>
                        <input type="text" class="form-control" id="state" required="">
                        <div class="invalid-feedback">
                            Geef een geldig huisnummer op.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Postcode</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback">
                            Postcode vereist.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Het verzendadres is hetzelfde als mijn factuuradres</label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Betaling</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="CreditCard" type="button" onclick="openING()" class="custom-control-input" required="">
                        <label class="custom-control-label" for="credit">ING</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="debit" name="DebitCard" type="button" onclick="openSNS()" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">SNS</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input id="paypal" name="Paypal" type="button" onclick="openPaypal()" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                </div>
                <hr class="mb-4">
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<?php
include("Footer.php");

?>
