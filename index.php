<?php
    $ogImage = "https://happy2change.be/img/H2Comslag.png";
    $ogTitle = "Happy 2 Change laat je met plezier AI ontdekken";
    $ogDescription = "Jouw organisatie veranderen aan de hand van AI? Happy 2 Change helpt je graag op weg. ";
    $ogUrl = "https://happy2change.be/index.php";
    include 'header.php';
?>

<header class="jumbotron jumbotron-fluid bg-info text-white">
    <div class="container">
        <h1>Pre-order Happy 2 Change</h1>
        <p class="lead">Bestel nu al jouw exemplaar</p>
    </div>
</header>

<div class="row">
    <div class="column">
        <div class="card mb-4 no-border">
            <div class="card-body">
                <div id="generated-text-container" class="blinking-dots">GPT druk aan het werk. Even geduld aub ... Prompt: <i>Genereer een tekst waarin je enerzijds vraagt of de bezoeker interesse heeft in een pre-order van het boek aan slechts 29 euro en geef op een inspirerende manier aan dat we ook nog op zoek zijn naar bedrijven die als sponsor met inspirerende case in het boek willen komen. Het antwoord bevat maximaal 250 tokens.</i></div>
            </div>
            <iframe
                src="https://www.chatbase.co/chatbot-iframe/lOBXmv4wXtRt4yJPSaqGn"
                width="100%"
                height="500"
                frameborder="0"
            ></iframe>
        </div>
    </div>
    <div class="column">
        <article class="card mb-4  no-border">
            <img id="book-cover" src="/img/H2Comslag.png" alt="Boekomslag">
            <div class="card-body">
            Verandering begint hier, bij jou. We zijn verheugd om je de kans te geven om deel uit te maken van deze reis door een pre-order van ons boek te plaatsen voor slechts €29. Dit boek is niet alleen een gids voor positieve verandering, maar ook een platform voor inspirerende verhalen.
            <br/>Daarnaast zijn we op zoek naar bedrijven die willen bijdragen aan deze beweging. Door sponsor te worden, krijgt jouw bedrijf de kans om met een inspirerende case in ons boek te verschijnen. Samen kunnen we een golf van verandering creëren.
            </div>
            <form id="preorder-form" action="send_email.php" method="post">
                <label for="name">Naam:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <input type="submit" value="Pre-order">
            </form>
            <p class="message"></p>
        </article>
    </div>
    <div class="column">
        <article class="card mb-4 no-border">
            <img src="/img/nieuws van de week.png" class="card-img-top" alt="Nieuws van de week">
            <div class="card-body">
                <h5 class="card-title">Nieuws van de week</h5>
                <p class="card-text">Een overzicht van de nieuwsberichten van 5 tot 7 juni 2023</p>
                <a href="nieuwsberichten/nieuws-2.php" class="btn btn-teal">Lees meer</a>
            </div>
        </article>
    </div>
</div>

<div id="footer"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        console.log("DOM geladen");
        // Selecteer het container-element voor de gegenereerde tekst
        const generatedTextContainer = document.getElementById("generated-text-container");

        // Laad de gegenereerde tekst met behulp van Fetch API
        fetch("generate_text.php", {
            method: "POST", // Set de HTTP-methode in op POST
            headers: {
                "Content-Type": "application/json"
            }
        })
            .then(response => response.text())
            .then(data => {
                // Maak een nieuw HTML-element voor de gegenereerde tekst
                const generatedTextElement = document.createElement("div");
                generatedTextElement.id = "generated-text";
                generatedTextElement.textContent = data;

                // Voeg het gegenereerde tekst-element toe aan het container-element
                generatedTextContainer.textContent = "";
                generatedTextContainer.appendChild(generatedTextElement);
                generatedTextContainer.classList.remove("blinking-dots");
            })
            .catch(error => {
                console.log("Er is een fout opgetreden bij het ophalen van de gegenereerde tekst:", error);
            });
    });

    // script om het formulier in te dienen met AJAX
    $(document).ready(function(){
        var baseURL;
        if (window.location.hostname === 'localhost') {
            baseURL = 'http://localhost:8000';
        } else {
            baseURL = 'https://happy2change.be';
        }

        $("#preorder-form").submit(function(e){
            e.preventDefault(); // voorkomt dat de pagina wordt ververst
            $.post(baseURL + "/send_email.php", $("#preorder-form").serialize())
                .done(function(data){
                    console.log(data);
                    if(data.success) {
                        $(".message").text("Bedankt voor je pre-order! We nemen zo snel mogelijk contact met je op.");
                    } else {
                        $(".message").text("Dank je wel voor de pre-order. Aarzel niet om je feedback te bezorgen aan info@happy2change.be!");
                    }
                })
                .fail(function(){
                    $(".message").text("Fail - Er is iets misgegaan bij het plaatsen van je pre-order. Probeer het later opnieuw.");
                });
        });
    });

</script>

<?php include 'footer.php'; ?>

