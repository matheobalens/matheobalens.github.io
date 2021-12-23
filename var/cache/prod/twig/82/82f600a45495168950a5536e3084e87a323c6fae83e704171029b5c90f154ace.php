<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_ba769bc0e745808e7faf1949470e90ad0d3f0823c48d7cd61633700986707d66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil - Mathéo Balens ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <main class=\"page landing-page\">
        <section class=\"portfolio-block block-intro\" style=\"height: 285px;padding-top: 70px;\">
            <div class=\"container mt-5\">
                <div data-bss-disabled-mobile=\"true\" class=\"swing animated avatar\" style=\"background: url(";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatars/DSC01283-removebg-preview-Récupéré-Récupéré.png"), "html", null, true);
        echo ") center / cover;box-shadow: -4px 5px 6px rgb(143,143,143);\"></div>
                <div class=\"about-me-custom\">
                    <div class=\"typewriter\">
                        <p style=\"border-radius: 5px;height: 77px;padding: 0;border-top: 0 none rgb(95,95,95);border-bottom-width: 0;border-bottom-color: rgb(75,75,75);\">Bonjour, je suis Mathéo Balens, apprenti développeur back-end.</p>
                    </div>

                </div>
            </div>
        </section>
        <section class=\"portfolio-block block-intro\" style=\"height: 289px;margin: 40px 0 0;padding-top: 50px;padding-bottom: 100px;\">
            <div class=\"container\">
                <div class=\"about-me\"></div>
            </div>
            <div class=\"iut-lens\">
                <a href=\"http://www.iut-lens.univ-artois.fr/\"><img alt=\"IUT de Lens\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/unnamed.jpg"), "html", null, true);
        echo "\" style=\"border-width: 0;border-radius: 20px 20px 10px 10px;box-shadow: 0 0 6px;\"></a>
            </div>
        </section>
        <section class=\"portfolio-block skills\" style=\"margin: 101px;padding: 41px 0;border-width: 1px;\">
            <div class=\"container\" data-aos=\"slide-up\" data-aos-duration=\"500\" style=\"border-top-width: 8px;\">
                <div class=\"heading\">
                    <h2 style=\"border-width: 3px;border-color: rgb(255,255,255);border-bottom: 1px solid rgb(96,96,96);height: 48px;\">Compétences&nbsp;</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(214,214,214);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://symfony.com\"><i class=\"fab fa-symfony\" style=\"font-size: 71px;color: #109cb5;\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">Symfony</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(222,222,222);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://www.php.net/\"><i class=\"fab fa-php\" style=\"font-size: 70px;color: rgb(16,156,181);\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">PHP</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(221,221,221);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://www.w3.org/Style/Examples/011/firstcss.fr.html\"><i class=\"fab fa-html5\" style=\"font-size: 70px;transform: rotate(0deg);color: rgb(16,156,181);margin: 0;width: 75px;padding: 0;\"></i><i class=\"fab fa-css3-alt\" style=\"font-size: 70px;transform: rotate(0deg);color: rgb(16,156,181);margin: 0;width: 75px;padding: 0;\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">HTML5 &amp; CSS3</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(214,214,214);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://docs.oracle.com/javase/7/docs/api/\"><i class=\"fab fa-java\" style=\"font-size: 71px;color: #109cb5;\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">Java</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(222,222,222);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://git-scm.com/\"><i class=\"fab fa-git\" style=\"font-size: 70px;color: rgb(16,156,181);\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">Git</h3>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"card special-skill-item border-0\" style=\"box-shadow: -5px 4px 6px rgb(221,221,221);\">
                            <div class=\"card-header bg-transparent border-0\"><a href=\"https://developer.mozilla.org/fr/docs/Web/JavaScript\"><i class=\"icon ion-social-javascript\" style=\"font-size: 70px;transform: rotate(0deg);color: rgb(16,156,181);margin: 0;width: 75px;padding: 0;background: rgb(255,255,255);\"></i></a></div>
                            <div class=\"card-body\">
                                <h3 class=\"card-title\">JavaScript</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section data-aos=\"fade\" data-aos-once=\"true\" class=\"portfolio-block website gradient\" style=\"filter: hue-rotate(317deg);margin: 0;padding: 101px 0 95px;\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-12 col-lg-5 offset-lg-1 text\">
                    <h3>Projet E-commerce</h3>
                    <p>Mon projet actuel est la création d'un site E-commerce ayant pour objectif final de mettre en vente mes productions musicales.</p>
                </div>
                <div class=\"col-md-12 col-lg-5\">
                    <div class=\"portfolio-laptop-mockup\">
                        <div class=\"screen\">
                            <div class=\"visible screen-content\" style=\"background: url(";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Tempclipboard-image.png"), "html", null, true);
        echo ") left / cover no-repeat;font-size: 16px;padding: 0;min-height: 0;\"></div>
                        </div>
                        <div class=\"keyboard\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"portfolio-block projects-cards\" style=\"padding-bottom: 10px;\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card border-0\" data-aos=\"fade-up\" data-aos-duration=\"500\"><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workinprogress");
        echo "\"><img class=\"card-img-top scale-on-hover\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/laravel.jpg"), "html", null, true);
        echo "\" alt=\"Card Image\"></a>
                        <div class=\"card-body\">
                            <h6>Projet Marathon - Laravel</h6>
                            <p class=\"text-muted card-text\">3 jours de programmation intensive.<br> Réalisation d'une application web à l'aide du Framework Laravel.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card border-0\" data-aos=\"fade-up\" data-aos-duration=\"500\"><a href=\"https://github.com/matheobalens/Labyrinthe\"><img class=\"card-img-top scale-on-hover\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/unknown.png"), "html", null, true);
        echo "\" alt=\"Card Image\"></a>
                        <div class=\"card-body\">
                            <h6><a href=\"#\">Projet Labyrinthe -Java</a></h6>
                            <p class=\"text-muted card-text\">Implémentation du jeu de société Labyrinthe. Projet réalisé par groupe de 4 étudiants, le langage utilisé est Java et la librairie graphique Swing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card border-0\" data-aos=\"fade-up\" data-aos-duration=\"500\"><a href=\"https://github.com/matheobalens/Sokoban-Foxers\"><img class=\"card-img-top scale-on-hover\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sokoban.jpg"), "html", null, true);
        echo "\" alt=\"Card Image\"></a>
                        <div class=\"card-body\">
                            <h6>Projet Sokoban - PyQT</h6>
                            <p class=\"text-muted card-text\">Réalisation d'un Sokoban, jeu de réflexion.<br> Par groupe de 4 étudiants, avec le langage Python et le module PyQt5.</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-lg-4\">
                    <div class=\"card border-0\" data-aos=\"fade-up\" data-aos-duration=\"500\"><a href=\"https://github.com/matheobalens/Portail-Iut-informatique/tree/code\"><img class=\"card-img-top scale-on-hover\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/refonte_portail_iut.jpg"), "html", null, true);
        echo "\" alt=\"Card Image\"></a>
                        <div class=\"card-body\">
                            <h6><a href=\"#\">Refonte du Portail national des IUT Informatique</a></h6>
                            <p class=\"text-muted card-text\">Premier Projet informatique réalisé à l'IUT. Réalisé en groupe de 3 étudiants. Les langages autorisés étaient le HTML et le CSS uniquement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class=\"page cv-page\">
        <section class=\"portfolio-block cv\">
            <h2 class=\"text-center\" style=\"font-size: 39px;border-bottom-width: 1px;border-bottom-style: solid;margin: 40px;\"><i class=\"far fa-user-circle\" data-aos=\"zoom-in\" style=\"font-size: 74px;color: rgb(17,155,182);height: 84px;\"></i></h2>
            <div class=\"container\">
                <div data-aos=\"fade\" class=\"work-experience group\">
                    <div class=\"heading\">
                        <h2 class=\"text-center\">Experiences professionnelles</h2>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3>OUVRIER AGRICOLE<br></h3>
                                <h4 class=\"organization\" style=\"background: rgb(16,156,181);\">Exploitation agricole - Boiry Sainte Rictrude</h4>
                            </div>
                            <div class=\"col-md-6\"><span class=\"period\">Juin - Août 2021</span></div>
                        </div>
                        <p class=\"text-muted\">Travaux de binage manuel, entretien des parcelles et retrait des herbes envahissantes</p>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-6\">
                                <h3>Animateur Bénévole</h3>
                                <h4 class=\"organization\" style=\"background: rgb(16,156,181);\">E.H.P.A.D Saint Camille - Arras.</h4>
                            </div>
                            <div class=\"col-md-6\"><span class=\"period\">Juin - Septembre 2020</span></div>
                        </div>
                        <p class=\"text-muted\">Période de 35h de bénévolat dans le cadre du permis citoyen.</p>
                        <ul>
                            <li>Renfort du lien entre les résidents</li>
                            <li>Mise en place d'activités stimulantes pour la mémoire et la logique</li>
                            <li>Prise en charge des personnes (Accompagnement jusqu'à leur chambre, régler leurs problèmes)</li>
                        </ul>
                    </div>
                </div>
                <div data-aos=\"fade\" class=\"education group\">
                    <div class=\"heading\">
                        <h2 class=\"text-center\">Formations</h2>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3>DUT Informatique&nbsp;</h3>
                                <h4 class=\"organization\"style=\"background: rgb(16,156,181);\">IUT de Lens</h4>
                            </div>
                            <div class=\"col-6\"><span class=\"period\">2020 - Maintenant</span></div>
                        </div>
                        <p class=\"text-muted\">Apprentissage de l'informatique : </p>
                        <ul>
                            <li>Développement Web</li>
                            <li>Bases de données</li>
                            <li>Gestion de projet</li>
                            <li>Communication</li>
                            <li>Programmation orientée objet</li>
                            <li>Mathématiques</li>
                            <li>Droit</li>
                        </ul>
                    </div>
                    <div class=\"item\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3>Baccalauréat Scientifique</h3>
                                <h4 class=\"organization\"style=\"background: rgb(16,156,181);\">Lycée Robespierre</h4>
                            </div>
                            <div class=\"col-md-6\"><span class=\"period\">2017 - 2020</span></div>
                        </div>
                        <p class=\"text-muted\"></p>
                    </div>
                </div>
                <div class=\"group\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div data-aos=\"zoom-in\" class=\"skills portfolio-info-card\" style=\"filter: hue-rotate(291deg);\">
                                <h2>Compétences</h2>
                                <h3>HTML</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"background-color: #109CB5FF ;width: 90%;\"><span class=\"visually-hidden\">90%</span></div>
                                </div>
                                <h3>CSS</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"background-color: #109CB5FF ;width: 90%;\"><span class=\"visually-hidden\">90%</span></div>
                                </div>
                                <h3>PHP</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"background-color: #109CB5FF ;width: 70%;\"><span class=\"visually-hidden\">70%</span></div>
                                </div>
                                <h3>Symfony</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"background-color: #109CB5FF ;width: 50%;\"><span class=\"visually-hidden\">50%</span></div>
                                </div>
                                <h3>Java</h3>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"background-color: #109cb5 ;width: 70%;\"><span class=\"visually-hidden\">70%</span></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\" data-aos=\"zoom-in\">
                            <div class=\"contact-info portfolio-info-card\" style=\"height: 250px;\">
                                <h2>Contact&nbsp;</h2>
                                <div class=\"row\">
                                    <div class=\"col-1\"><i class=\"icon ion-android-calendar icon\" style=\"color: rgb(16,156,181);\"></i></div>
                                    <div class=\"col-9\"><span>10/01/2002</span></div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-1\"><i class=\"icon ion-person icon\" style=\"color: rgb(16,156,181);\"></i></div>
                                    <div class=\"col-9\"><span>Mathéo Balens</span></div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-1\"><i class=\"icon ion-ios-telephone icon\" style=\"color: rgb(16,156,181);\"></i></div>
                                    <div class=\"col-9\"><span>+33 6 79 10 66 17</span></div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-1\"><i class=\"icon ion-at icon\" style=\"border-bottom-color: rgb(16,156,181);color: rgb(16,156,181);\"></i></div>
                                    <div class=\"col-9\"><span>matheobalens@gmail.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class=\"portfolio-block skills\">
                    <h2 class=\"text-center\" data-aos=\"slide-up\">Loisirs</h2>
                    <div class=\"container\">
                        <div class=\"heading\"></div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"card special-skill-item border-0\" data-aos=\"fade-up\" style=\"box-shadow: -5px 4px 6px rgb(214,214,214);\">
                                    <div class=\"card-header bg-transparent border-0\"><i class=\"far fa-arrow-alt-circle-up\" style=\"font-size: 70px;color: #109cb5;transform: rotate(0deg);\"></i></div>
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">Nouvelles Technologies</h3>
                                        <p class=\"card-text\"></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"card special-skill-item border-0\" data-aos=\"fade-up\" style=\"box-shadow: -5px 4px 6px rgb(222,222,222);\">
                                    <div class=\"card-header bg-transparent border-0\"><i class=\"icon ion-ios-football\" style=\"font-size: 70px;color: rgb(16,156,181);background: rgb(255,255,255);font-weight: bold;\"></i></div>
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">Football</h3>
                                        <p class=\"card-text\"></p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"card special-skill-item border-0\" data-aos=\"fade-up\" style=\"box-shadow: -5px 4px 6px rgb(221,221,221);\">
                                    <div class=\"card-header bg-transparent border-0\"><a href=\"https://www.youtube.com/channel/UCcUAJTuBV_IPtRoSkjSEWpw\" style=\"padding-top: 13px;padding-bottom: 30px;padding-right: 0;\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1em\" height=\"1em\" fill=\"currentColor\" viewBox=\"0 0 16 16\" class=\"bi bi-file-earmark-music\" data-bss-hover-animate=\"pulse\" style=\"font-size: 70px;transform: rotate(0deg);color: rgb(16,156,181);margin: 0;width: 70px;padding: 0;background: rgb(255,255,255);font-weight: bold;\">
                                                <path d=\"M11 6.64a1 1 0 0 0-1.243-.97l-1 .25A1 1 0 0 0 8 6.89v4.306A2.572 2.572 0 0 0 7 11c-.5 0-.974.134-1.338.377-.36.24-.662.628-.662 1.123s.301.883.662 1.123c.364.243.839.377 1.338.377.5 0 .974-.134 1.338-.377.36-.24.662-.628.662-1.123V8.89l2-.5V6.64z\"></path>
                                                <path d=\"M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z\"></path>
                                            </svg></a></div>
                                    <div class=\"card-body\">
                                        <h3 class=\"card-title\">Beatmaking</h3>
                                        <p class=\"card-text\"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>

";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 134,  197 => 126,  182 => 114,  169 => 106,  154 => 94,  80 => 23,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/Matheo_Balens/matheobalens.github.io/templates/home/index.html.twig");
    }
}
