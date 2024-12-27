@extends('client.layout')
@section('content')
    @include('client.includes.aside')
    <base href="/public">

    <style>
        ul li {
            display: flex;
            align-items: baseline;
        }
        span.dot {
            font-size: 30px;
            margin-right: 5px;
            font-weight: 400;
            line-height: 1.7;
            color: #666666;
        }
        .litem {
            font-family: Montserrat;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
        }

        .link {
            color: #666666;
            font-weight: bold;
        }
        .link:hover{
            color: #ec1d25;
        }
    </style>


    <!-- Title Page -->
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-02.jpg);">
        <div style="    display: flex;
            flex-direction: column;
            align-items: center;">
                <h2 class="tit6 t-center">
                    condition d'utilisation 
                    
                </h2>
        
                <div class="mb-4" >
                    {{-- Merci Laayoune --}}
                    <img class="mercilogo-autre"  src="clientpage/images/MERCI_IMG/LOGO/Logo-Merci-b1.png" alt="" >
                </div>
                
                <div style="    display: flex;
                align-items: center;">
                    <a href="https://www.facebook.com/mercilaayoune"><img src="clientpage/images/MERCI_IMG/social-media-merci/facebook-app-symbol-merci.png" alt="" width="22px"></a>
                    <a href="https://www.instagram.com/mercilaayoune1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/instagram-merci.png" alt="" width="22px"></a>
                    <a href="https://www.tiktok.com/@mercilaayoune"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/tik-tok-merci.png" alt="" width="22px"></a>
                    <a href=""><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/snapchat.png" alt="" width="22px"></a>
                    <a href="https://shorturl.at/cnrt1"><img class="ml-2" src="clientpage/images/MERCI_IMG/social-media-merci/pin-merci.png" alt="" width="22px"></a>
                </div>
            
        </div>
        
    </section>

    <section class="section-contact m-5 p-t-90">

        <div class="container">
        

            <h2 class="mb-5" style="text-align: center;">Conditions d’utilisation du site Web</h2>

            <h2>1. Conditions</h2>
<p>En accédant à ce site Web, accessible à partir de https://www.mercilaayoune.com, vous acceptez d&rsquo;être lié par les présentes conditions d&rsquo;utilisation du site Web et vous acceptez d&rsquo;être responsable de l&rsquo;accord avec les lois locales applicables. Si vous n&rsquo;êtes pas d&rsquo;accord avec l&rsquo;une de ces conditions, il vous est interdit d&rsquo;accéder à ce site. Le contenu de ce site Web est protégé par le droit d&rsquo;auteur et le droit des marques.</p>
<h2>2. Utiliser la licence</h2>
<p>La permission est accordée de télécharger temporairement une copie des documents sur le site Web du Restaurant Merci Laayoune à des fins de visualisation transitoire personnelle et non commerciale uniquement. Il s’agit de l’octroi d’une licence et non d’un transfert de titre. Vous ne pouvez donc pas:</p>



<ul>
    <li>
        <span class="dot">
            •
        </span>
        <div class="litem">
            Modifier ou copier le contenu
        </div>
    </li>
    <li>
        <span class="dot">
            •
        </span>
        <div class="litem">
            Utiliser le matériel à des fins commerciales ou pour tout affichage public
        </div>
    </li>
    <li>
        <span class="dot">
            •
        </span>
        <div class="litem">
            Tenter de désosser tout logiciel contenu sur le site Web du restaurant Merci Laayoune
        </div>
    </li>
    <li>
        <span class="dot">
            •
        </span>
        <div class="litem">
            Supprimez tout copyright ou autre mention de propriété du matériel ou transférer le contenu à une autre personne ou « dupliquer » le contenu sur tout autre serveur
        </div>
    </li>

</ul>


<p>Ceci laissera Restaurant Merci Laayoune se terminer en cas de violation de l’une de ces restrictions. En cas de résiliation, votre droit de visionnage sera également résilié et vous devrez détruire tout matériel téléchargé en votre possession, qu&rsquo;il s&rsquo;agisse d&rsquo;un format imprimé ou électronique.</p>
<h2>3. Déni de responsabilité</h2>
<p>Tous les documents sur le site Web du restaurant Merci Laayoune sont fournis « en l’état ». Restaurant Merci Laayoune n&rsquo;offre aucune garantie, qu&rsquo;elle soit explicite ou implicite, annule donc toutes les autres garanties. De plus, Restaurant Merci Laayoune ne fait aucune déclaration concernant l’exactitude ou la fiabilité de l’utilisation des documents de son site Web ou ayant un lien quelconque avec ces documents ou avec d’autres sites liés au présent site Web.</p>
<h2>4. Limitations</h2>
<p>Restaurant Merci Laayoune ou ses fournisseurs ne pourront être tenus responsables des dommages résultant de l’utilisation ou de l’impossibilité d’utiliser le contenu de son site Web, même si Restaurant Merci Laayoune ou un représentant autorisé de ce site Web a été averti , oralement ou par écrit, de la possibilité de tels dommages. Certaines juridictions n&rsquo;autorisent pas les limitations sur les garanties implicites ou les limitations de responsabilité pour les dommages accessoires, ces limitations peuvent ne pas s&rsquo;appliquer à vous.</p>
<h2>5. Révisions et errata</h2>
<p>Le matériel figurant sur le site Web du Restaurant Merci Laayoune peut contenir des erreurs techniques, typographiques ou photographiques. Le restaurant Merci Laayoune ne promettra pas que les informations contenues sur ce site sont exactes, complètes ou à jour. Restaurant Merci Laayoune peut modifier le contenu de son site Web à tout moment et sans préavis. Le restaurant Merci Laayoune ne s&rsquo;engage pas à mettre à jour le matériel.</p>
<h2>6. Liens</h2>
<p>Le restaurant Merci Laayoune n&rsquo;a pas examiné tous les sites liés à son site Web et n&rsquo;est pas responsable du contenu de ces sites. La présence de tout lien n&rsquo;implique pas l&rsquo;approbation du site par le restaurant Merci Laayoune. L’utilisation de tout site Web lié est à la charge de l’utilisateur.</p>
<h2>7. Modifications des conditions d&rsquo;utilisation du site</h2>
<p>Le restaurant Merci Laayoune peut réviser les présentes conditions d&rsquo;utilisation de son site Web à tout moment et sans préavis. En utilisant ce site Web, vous acceptez d&rsquo;être lié par la version en cours des présentes conditions d&rsquo;utilisation.</p>
<h2>8. Votre vie privée</h2>
<p>Veuillez lire <a class="link" href="{{ route('politique') }}"> notre politique de confidentialité </a>.</p>
<h2>9. Loi applicable</h2>
<p>Toute réclamation liée au site Web de Restaurant Merci Laayoune sera régie par les lois de la ma sans tenir compte de ses dispositions relatives aux conflits de lois.</p>


        </div>


    </section>


@endsection