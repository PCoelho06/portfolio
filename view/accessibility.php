<?php $title = 'Accessibilité'; ?>

<?php ob_start(); ?>

<div class="container">
    <h1>Déclaration d'accessibilité</h1>
    <p class="meta">Mises à jour le 17/01/2024</p>

    <p>Lapinou.tech s'engage à rendre ses sites internet, intranet, extranet et ses progiciels accessibles (et ses applications mobiles et mobilier urbain numérique) conformément à l'article 47 de la loi n°2005-102 du 11 février 2005.</p>
    <p>À cette fin, elle met en œuvre la stratégie et les actions suivantes :</p>
    <p>Cette déclaration d'accessibilité s'applique à <a href="https://lapinou.tech">lapinou.tech</a>.</p>
    <h2>État de conformité</h2>
    <p><span class="tofill">Nom du site, url</span> est <span class="tofill">non/partiellement/totalement</span> conforme avec le référentiel général d'amélioration de l'accessibilité (RGAA), version 4 en raison des non-conformités et des dérogations énumérées ci-dessous.</p>
    <h2>Contenus non accessibles</h2>
    <h3><span class="tofill">Non-conformités</span></h3>
    <ul>
        <li>Ex. : La vidéo de présentation de la demande d'aide n'a pas de transcription. Pour toute question
            sur cette démarche, vous pouvez contacter le <span class="tofill">NN NN NN NN NN</span>. La version 2020 respectera les
            critères du RGAA sur les alternatives texte pour les documents multimédias.</li>
        <li>Ex. : Le bouton d'envoi du formulaire de déclaration contient un intitulé « Retour » au lieu de
            « Envoi ». Cette erreur sera corrigée avant le 31 mars 2020</li>
        <li>Ex. : La connexion au compte personnel contient une vérification que vous n'êtes pas un robot
            avec un captcha visuel. Il est possible d'effectuer sa démarche par téléphone ou au guichet pour
            les personnes empêchées d'accéder à leur compte...</li>
    </ul>
    <h3><span class="tofill">Dérogations pour charge disproportionnée</span></h3>
    <ul>
        <li>Ex. : Les archives des comptes rendus des séances du conseil municipal jusqu'en 2010 sont au format PDF image. Il est cependant possible d'en demander un exemplaire texte par courriel</li>
        <li><span class="tofill">...</span></li>
    </ul>
    <h3><span class="tofill">Contenus non soumis à l'obligation d'accessibilité</span></h3>
    <ul>
        <li>Ex. : Cartes de l'Institut géographique national associées à l'annuaire</li>
        <li>Ex. : Reproduction du manuscrit du Moyen-Âge...</li>
    </ul>
    <h2>Établissement de cette déclaration d'accessibilité</h2>
    <p>Cette déclaration a été établie le <span class="tofill">JJ/MM/AAAA</span>. Elle a été mise à jour le <span class="tofill">JJ/MM/AAAA</span>.</p>
    <h3>Technologies utilisées pour la réalisation de <span class="tofill">nom, url du site</span></h3>
    <ul>
        <li>HTML5</li>
        <li>CSS</li>
        <li><span class="tofill">...</span></li>
    </ul>
    <h3>Environnement de test</h3>
    <p>Les vérifications de restitution de contenus ont été réalisées sur la base de la combinaison fournie
        par la base de référence du RGAA, avec les versions suivantes :</p>
    <ul>
        <li>Firefox et NVDA</li>
        <li>Safari et VoiceOver</li>
        <li><span class="tofill">...</span></li>
    </ul>
    <h3>Outils pour évaluer l'accessibilité</h3>
    <ul>
        <li>contrast color</li>
        <li><span class="tofill">...</span></li>
    </ul>
    <h3>Pages du site ayant fait l'objet de la vérification de conformité</h3>
    <ol>
        <li>page d'accueil <span class="tofill">url</span></li>
        <li>page contact <span class="tofill">url</span></li>
        <li>page mentions légales <span class="tofill">url</span></li>
        <li>page accessibilité <span class="tofill">url</span></li>
        <li>page plan du site <span class="tofill">url</span></li>
        <li>page d'aide <span class="tofill">url</span></li>
        <li><span class="tofill">...</span></li>
    </ol>
    <h2>Retour d'information et contact</h2>
    <p>Si vous n'arrivez pas à accéder à un contenu ou à un service, vous pouvez contacter le responsable de <span class="tofill">nom, url du site</span> pour être orienté vers une alternative accessible ou obtenir le contenu sous une autre forme.</p>
    <ul>
        <li>Envoyer un message <span class="tofill">url du formulaire en ligne</span></li>
        <li>Contacter <span class="tofill">Nom de l'entité responsable du service en ligne</span><span class="tofill">url d'une page avec les coordonnées
                de l'entité</span></li>
    </ul>
    <h2>Voies de recours</h2>
    <p>Si vous constatez un défaut d'accessibilité vous empêchant d'accéder à un contenu ou une fonctionnalité du site, que vous nous le signalez et que vous ne parvenez pas à obtenir une réponse de notre part, vous êtes en droit de faire parvenir vos doléances ou une demande de saisine au Défenseur des droits.</p>
    <p>Plusieurs moyens sont à votre disposition :</p>
    <ul>
        <li><a href="https://formulaire.defenseurdesdroits.fr">Écrire un message au Défenseur des droits</a></li>
        <li><a href="https://www.defenseurdesdroits.fr/saisir/delegues">Contacter le délégué du Défenseur des droits dans votre région</a></li>
        <li>Envoyer un courrier par la poste (gratuit, ne pas mettre de timbre)<br>
            Défenseur des droits<br>
            Libre réponse 71120<br>
            75342 Paris CEDEX 07<br></li>
    </ul>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('./view/layout.php'); ?>