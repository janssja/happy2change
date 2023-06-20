<?php
    $ogImage = "https://happy2change.be/img/nieuws van de week.png";
    $ogTitle = "AI-nieuws van de week";
    $ogDescription = "het belangrijkse AI-nieuws van de eerste week van juni 2023";
    $ogUrl = "https://happy2change.be/nieuwsberichten/nieuws-2.php";
    include '../header.php';
?>

<header class="jumbotron jumbotron-fluid bg-info text-white position-relative" style="background-image: url('/img/nieuws van de week.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="container position-relative">
        <div class="text-box">
            <h1 class="display-4">AI-nieuws van de week</h1>
            <p class="lead">Door Jackie Janssen</p>
        </div>
    </div>
</header>

<main class="container mt-4">

    <article>
        <p>Enkele weken geleden heb ik in <a href="https://www.linkedin.com/pulse/linkedin-artikel-maken-met-python-jackie-janssen">een artikel</a> uitgelegd hoe je zelf, aan de hand van een prompt, dit soort artikels kan schrijven. De prompt van toen is inmiddels wel een beetje aangepast. In ons wekelijks nieuws maken we voortaan, elke dinsdag, een onderscheid tussen nieuwe tools, belangrijk AI onderzoek, ontwikkelingen bij de big tech’s, zinvolle open source projecten en de impact van AI op ons allemaal.</p>
        
        <h2>Belangrijk onderzoek</h2>
        <p>
            <ul>
                <li><a href="https://magic.dev/blog/ltm-1">LTM1</a> is een nieuw netwerkarchitectuur ontworpen voor code completion. Het heeft 5 miljoen prompt tokens, wat gelijk staat aan 500.000 regels code. Ik heb me ingeschreven op de waitlist en kijk er naar uit om dit te testen. Als dit werkt is dit voor code-generatie en voor development baanbrekend te noemen. Met 5 miljoen tokens in een prompt kan je ganse projecten optimaliseren en code laten aanpassen met nieuwe functionaliteiten.</li>
                <center><iframe width="720" height="405" src="https://www.youtube.com/embed/E0YFFhBt8-Y" title="LTM-1 Code Completion Demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
                <li>Sorteren is altijd belangrijk geweest in ontwikkelingen. Denk maar aan lijsten met geprioriteerde taken, een tijdslijn op sociale media, etc … optimaal en performant sorteren was lang het terrein van wetenschappelijk onderzoek. Google’s DeepMind publiceerde <a href="https://www.deepmind.com/blog/alphadev-discovers-faster-sorting-algorithms">AlphaDev</a>, een AI-systeem dat aan de hand van reïnforcement learning snellere sorteeralgoritmen ontdekt die alle huidige standaarden overtreffen. DeepMind ziet dit als een stap naar AI-tools die het hele computer-ecosysteem kunnen optimaliseren.</li>
            </ul>
        </p>
        <h2>Lanceringen bij de Big techs</h2>
        <p>
            <ul>
                <li>Meta, het bedrijf achter Facebook, is van plan om generatieve AI te integreren in WhatsApp, Messenger en Instagram. Tijdens <a href="https://www.techzine.nl/nieuws/applications/524810/meta-komt-met-generatieve-ai-in-whatsapp-messenger-en-instagram/">een recente interne bijeenkomst</a> toonde CEO Mark Zuckerberg nieuwe AI-functionaliteiten, waaronder AI-bots met 'unieke persona's' voor WhatsApp en Messenger, en AI-stickers voor Messenger die woorden omzetten in grafische beelden. Instagram zal ook generatieve AI-technologie krijgen die het mogelijk maakt om foto's of stories te bewerken met tekstprompts. Zuckerberg gaf ook aan dat deze technologie mogelijk verder zal worden uitgerold in andere producten en toepassingen, waaronder de smart glasses die Meta momenteel ontwikkelt in samenwerking met Ray-Ban.</li>
                <li>Adobe heeft een <a href="https://www.theverge.com/2023/6/8/23753564/adobe-firefly-enterprise-generative-ai-express-commercial">nieuw platform onthuld</a> voor zijn generatieve AI-model, Firefly, dat is ontworpen om organisaties te helpen bij het aanpakken van de groeiende vraag naar contentcreatie. Adobe Firefly voor Enterprise stelt elke werknemer in staat om direct afbeeldingen of teksten te genereren vanuit tekstbeschrijvingen, die vervolgens kunnen worden gebruikt in marketingcampagnes, sociale media promoties, bedrijfspresentaties en meer. Bedrijven kunnen Firefly ook in hun eigen ecosysteem integreren door het AI-model te trainen met hun eigen merkactiva. Er is nog geen exacte prijs of releasedatum voor Firefly voor Enterprise. </li>
            </ul>
        </p>
        <h2>Open Source Projecten</h2>
        <p>
            <ul>
                <li>Hugging Chat, een open source alternatief voor ChatGPT, heeft een webzoekfunctie toegevoegd.</li>
                <li>In de race naar AGI dook vorige week <a href="https://github.com/TransformerOptimus/SuperAGI">SuperAGI</a> op. Het is een nieuw project dat autonome AI-agents implementeert. Het stelt ontwikkelaars in staat om autonome AI-agents te bouwen en te beheren. Deze agents kunnen zelfstandig taken uitvoeren, leren van hun ervaringen en zich aanpassen aan nieuwe situaties. Samen kunnen deze technologieën taken automatiseren die traditioneel menselijke intelligentie vereisen, wat kan leiden tot grote efficiëntieverbeteringen in vele sectoren. SuperAGI is momenteel trending op GitHub. Vorige maand experimenteerde ik met AutoGPT. De autonomie vond ik knap. Het was soms zelfs creatief wat er door de agents zelf werd bedacht maar het eindresultaat stelde vaak te weinig voor. De komende weken zal ik de experimenten eens herhalen met Super AGI.</li>
            </ul>
        </p>
        <h2>Impact op de Samenleving</h2>
        <p>
            <ul>
                <li>In een rapport van <a href=https://omscgcinc.wpenginepowered.com/wp-content/uploads/2023/06/The-Challenger-Report-May23.pdf">Challenger, Gray & Christmas</a> lezen we dat in de US er 4000 banen verloren zijn gegaan door AI. Volgens het artikel komt dit doordat bedrijven snel geavanceerde AI-technologieën adopteren om een reeks taken te automatiseren, waaronder creatief werk zoals schrijven, evenals administratief en klerkwerk. AI was verantwoordelijk voor ongeveer 5% van alle banen die in mei verloren gingen. Tegelijkertijd wordt verwacht dat de AI-industrie zal groeien tot meer dan $1 biljoen, aangedreven door grote technologische vooruitgang. Ondanks de banenverliezen merkt het artikel op dat generatieve AI al nieuwe banen creëert en dat de opkomende industrie nog maar net begint.</li>
                <li>De Britse premier Rishi Sunak heeft aangekondigd dat het Verenigd Koninkrijk een <a href="https://datanews.knack.be/nieuws/innovatie/ai-robotica/britse-premier-sunak-kondigt-ai-top-aan-in-verenigd-koninkrijk/">wereldtop over AI</a> zal organiseren. De top, die in de herfst zal plaatsvinden, zal zich richten op de noodzaak van internationale maatregelen om de risico's van technologische vooruitgang te beperken. Sunak benadrukte het ongelooflijke potentieel van AI om ons leven ten goede te veranderen, maar benadrukte ook de noodzaak om de ontwikkeling en het gebruik ervan op een veilige manier te garanderen.</li>
                <li>De Europese Commissie wil dat techbedrijven hun generatieve AI-tools labelen als ze gebruikt kunnen worden om desinformatie te verspreiden. Deze aankondiging komt in het licht van de snelle vooruitgang van AI en de mogelijke gevaren die het kan opleveren. Het doel van deze maatregel is om de risico's van desinformatie te beperken en ervoor te zorgen dat de ontwikkeling en het gebruik van AI op een veilige manier gebeuren.</li>
                <li>Zoals in mijn <a href="https://www.linkedin.com/pulse/hoe-ai-de-wereld-kan-redden-jackie-janssen/?trackingId=AJP2KeEDQ1u%2B3MBN1SZycA%3D%3D&lipi=urn%3Ali%3Apage%3Ad_flagship3_pulse_read%3BCZL4Ek3HTJ6Cvbpzdhmp9g%3D%3D">vorige post</a> samengevat, heeft Mark Andreessen een uitgebreid essay gepubliceerd over waarom AI de wereld zal redden, wat een belangrijke bijdrage is aan het debat over de impact van AI op de samenleving.</li> 
            </ul>
        </p>
        <h2>Nieuwe Tools</h2>
        <p>
            <ul>
                <li><a href="https://styledrop.github.io/">Google's StyleDrop</a> is een nieuwe tekst-naar-afbeelding generatiemethode die afbeeldingen in een specifieke stijl genereert, gebaseerd op een referentieafbeelding. Dit zal zeker in visual marketing sferen brede ingang kunnen krijgen. Zo zou ik, volgens de research paper, perfect kunnen vragen om in de huisstijl van CM afbeeldingen te genereren. Ik heb het helaas nog niet kunnen uitproberen. Benieuwd naar het moment waarop dit publiek toegankelijk is.</li>
                <li><a href="https://www.maketafi.com/newsroom">Taffy</a> is een nieuwe tekst-naar-3D karakter engine van Days 3D. Het stelt mensen in staat om met tekstuele input karakters te creëren die kunnen leven in 3D-werelden. Dit maakt de creatie van karakters voor digitale ruimtes aanzienlijk eenvoudiger.</li>
                <center><iframe width="720" height="405" src="https://www.youtube.com/embed/cTNcvSgLzmg" title="Tafi AI by DAZ 3D: Text-to-3D Characters" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></center>
                <li><a href="https://prompter.fofr.ai/">Prompter</a> is een open source tool die fungeert als een brainstormpartner voor prompts. Het helpt bij het genereren van verschillende prompts voor jouw ideeën.</li>
                <li>Runway Gen 2 is een tekst-naar-video tool die vier seconden durende clips genereert op basis van tekstuele input. Het is nu beschikbaar voor iedereen en wordt al volop gebruikt.</li>
            <ul>
        </p>       
        <br/>
        <p>
            Prompt voor Stable Diffusion gebruikt voor de omslagfoto bij de start van dit artikel:
            <i>Creëer een afbeelding met de volgende prompt voor het LinkedIn-artikel: "De impact van AI op ons allemaal."
            De afbeelding moet een futuristische stad tonen, omgeven door geavanceerde technologieën zoals autonome voertuigen, slimme gebouwen en drones. De stad moet een sfeer van vooruitgang en innovatie uitstralen, waarin mensen en AI-systemen harmonieus samenwerken.</i>
            </p>
    </article>
</main>

<?php include '../footer.php'; ?>
