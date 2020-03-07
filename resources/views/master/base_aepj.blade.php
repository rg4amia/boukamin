<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Agence Emploie Jeune | Cote d'Ivoire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="CreativeLayers">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/bootstrap-grid.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_aepj/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_aepj/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/chosen.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/colors/colors.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets_aepj/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets_aepj/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

</head>
<body>

{{--<div class="page-loading">
    <img src="{{ asset('assets_aepj/images/loader.gif') }}" alt="" />
</div>--}}

<div class="theme-layout" id="scrollup">

    <div class="responsive-header">
        <div class="responsive-menubar">
            <div class="res-logo"><a href="index.html" title=""><img src="{{ asset('logo-ajep.png') }}" alt="" /></a></div>
            <div class="menu-resaction">
                <div class="res-openmenu">
                    <img src="{{ asset('assets_aepj/images/icon.png') }}" alt="" /> Menu
                </div>
                <div class="res-closemenu">
                    <img src="{{ asset('assets_aepj/images/icon2.png') }}" alt="" /> Close
                </div>
            </div>
        </div>
        <div class="responsive-opensec">
            <div class="btn-extars">
                <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Annonces</a>
                <ul class="account-btns">
                    <li class="signup-popup"><a title=""><i class="la la-key"></i>S'enregistrer</a></li>
                    <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> se connecter</a></li>
                </ul>
            </div><!-- Btn Extras -->
            <form class="res-search">
                <input type="text" placeholder="Job title, keywords or company name" />
                <button type="submit"><i class="la la-search"></i></button>
            </form>
            <div class="responsivemenu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Home</a>
                        <ul>
                            <li><a href="index.html" title="">Home Layout 1</a></li>
                            <li><a href="index2.html" title="">Home Layout 2</a></li>
                            <li><a href="index3.html" title="">Home Layout 3</a></li>
                            <li><a href="index4.html" title="">Home Layout 4</a></li>
                            <li><a href="index5.html" title="">Home Layout 5</a></li>
                            <li><a href="index6.html" title="">Home Layout 6</a></li>
                            <li><a href="index7.html" title="">Home Layout 7</a></li>
                            <li><a href="index8.html" title="">Home Layout 8</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Employers</a>
                        <ul>
                            <li><a href="employer_list1.html" title=""> Employer List 1</a></li>
                            <li><a href="employer_list2.html" title="">Employer List 2</a></li>
                            <li><a href="employer_list3.html" title="">Employer List 3</a></li>
                            <li><a href="employer_list4.html" title="">Employer List 4</a></li>
                            <li><a href="employer_single1.html" title="">Employer Single 1</a></li>
                            <li><a href="employer_single2.html" title="">Employer Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Employer Dashboard</a>
                                <ul>
                                    <li><a href="employer_manage_jobs.html" title="">Employer Job Manager</a></li>
                                    <li><a href="employer_packages.html" title="">Employer Packages</a></li>
                                    <li><a href="employer_post_new.html" title="">Employer Post New</a></li>
                                    <li><a href="employer_profile.html" title="">Employer Profile</a></li>
                                    <li><a href="employer_resume.html" title="">Employer Resume</a></li>
                                    <li><a href="employer_transactions.html" title="">Employer Transaction</a></li>
                                    <li><a href="employer_job_alert.html" title="">Employer Job Alert</a></li>
                                    <li><a href="employer_change_password.html" title="">Employer Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Candidates</a>
                        <ul>
                            <li><a href="candidates_list.html" title="">Candidates List 1</a></li>
                            <li><a href="candidates_list2.html" title="">Candidates List 2</a></li>
                            <li><a href="candidates_list3.html" title="">Candidates List 3</a></li>
                            <li><a href="candidates_single.html" title="">Candidates Single 1</a></li>
                            <li><a href="candidates_single2.html" title="">Candidates Single 2</a></li>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Candidates Dashboard</a>
                                <ul>
                                    <li><a href="candidates_my_resume.html" title="">Candidates Resume</a></li>
                                    <li><a href="candidates_my_resume_add_new.html" title="">Candidates Resume new</a></li>
                                    <li><a href="candidates_profile.html" title="">Candidates Profile</a></li>
                                    <li><a href="candidates_shortlist.html" title="">Candidates Shortlist</a></li>
                                    <li><a href="candidates_job_alert.html" title="">Candidates Job Alert</a></li>
                                    <li><a href="candidates_dashboard.html" title="">Candidates Dashboard</a></li>
                                    <li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
                                    <li><a href="candidates_change_password.html" title="">Change Password</a></li>
                                    <li><a href="candidates_applied_jobs.html" title="">Candidates Applied Jobs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Blog</a>
                        <ul>
                            <li><a href="blog_list.html"> Blog List 1</a></li>
                            <li><a href="blog_list2.html">Blog List 2</a></li>
                            <li><a href="blog_list3.html">Blog List 3</a></li>
                            <li><a href="blog_single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Job</a>
                        <ul>
                            <li><a href="job_list_classic.html">Job List Classic</a></li>
                            <li><a href="job_list_grid.html">Job List Grid</a></li>
                            <li><a href="job_list_modern.html">Job List Modern</a></li>
                            <li><a href="job_single1.html">Job Single 1</a></li>
                            <li><a href="job_single2.html">Job Single 2</a></li>
                            <li><a href="job-single3.html">Job Single 3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" title="">Pages</a>
                        <ul>
                            <li><a href="about.html" title="">About Us</a></li>
                            <li><a href="404.html" title="">404 Error</a></li>
                            <li><a href="contact.html" title="">Contact Us 1</a></li>
                            <li><a href="contact2.html" title="">Contact Us 2</a></li>
                            <li><a href="faq.html" title="">FAQ's</a></li>
                            <li><a href="how_it_works.html" title="">How it works</a></li>
                            <li><a href="login.html" title="">Login</a></li>
                            <li><a href="pricing.html" title="">Pricing Plans</a></li>
                            <li><a href="register.html" title="">Register</a></li>
                            <li><a href="terms_and_condition.html" title="">Terms & Condition</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <header class="stick-top forsticky">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="index.html" title=""><img class="hidesticky" src="{{ asset('assets_aepj/images/resource/logo-ajep.png') }}" alt="" />
                        <img class="showsticky" src="{{ asset('assets_aepj/images/resource/logo-ajep.png') }}" alt="" /></a>
                </div><!-- Logo -->
                <div class="btn-extars">
                    <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Annonces</a>
                    <ul class="account-btns">
                        <li class="signup-popup"><a title=""><i class="la la-key"></i>S'inscrire</a></li>
                        <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i>Se connecter</a></li>
                    </ul>
                </div><!-- Btn Extras -->
                <nav>
                    <ul>
                        <li class="menu-item">
                            <a href="#" title="">Accueil</a>
                            {{--<ul>
                                <li><a href="index.html" title="">Home Layout 1</a></li>
                                <li><a href="index2.html" title="">Home Layout 2</a></li>
                                <li><a href="index3.html" title="">Home Layout 3</a></li>
                                <li><a href="index4.html" title="">Home Layout 4</a></li>
                                <li><a href="index5.html" title="">Home Layout 5</a></li>
                                <li><a href="index6.html" title="">Home Layout 6</a></li>
                                <li><a href="index7.html" title="">Home Layout 7</a></li>
                                <li><a href="index8.html" title="">Home Layout 8</a></li>
                            </ul>--}}
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" title="">Presentation</a>
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">Agence Emploie Jeune</a>
                                    <ul>
                                        <li><a href="#" title="">Historique</a></li>
                                        <li><a href="#" title="">Mission</a></li>
                                        <li><a href="#" title="">Organisation</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#" title="">Statistiques & Analyses</a>
                                    <ul>
                                        <li><a href="#" title="">Statistiques et indicateurs</a></li>
                                        <li><a href="#" title="">Visualisation des statistiques</a></li>
                                        <li><a href="#" title="">Etudes de recherches</a></li>
                                        <li><a href="#" title="">Rapports d'activités</a></li>
                                        <li><a href="#" title="">Rapports d'enquêtes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" title="">Interventions</a>
                            <ul>
                                <li><a href="#" title="">Emploi salarié</a></li>
                                <li><a href="#" title="">Offre de service</a></li>
                                <li><a href="#" title="">Financement de projet</a></li>
                                <li><a href="#" title="">Développement des compétences</a></li>
                                <li><a href="#" title="">Programmes Spécifiques</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#" title="">Financement</a>
                            <ul>
                                <li><a href="#" title="">Deposer son proje</a></li>
                                <li><a href="#" title="">Procedure de financement</a></li>
                                <li><a href="#" title="">Financement de projet</a></li>
                                <li><a href="#" title="">Développement des compétences</a></li>
                                <li><a href="#" title="">Programmes Spécifiques</a></li>
                            </ul>
                        </li>
                        {{--<li class="menu-item">
                            <a href="#" title="">Agir pour les jeunes</a>

                        </li>
                        <li class="menu-item">
                            <a href="#" title="">Competences</a>
                        </li>--}}
                        <li class="menu-item-has-children">
                            <a href="#" title="">Actualités</a>
                           <ul>
                                <li><a href="#" title="">Actu AEJ</a></li>
                                <li><a href="#" title="">Emploi jeunes TV</a></li>
                                <li><a href="#" title="">Newsletters</a></li>
                                <li><a href="#" title="">Photos</a></li>
                                <li><a href="#" title="">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- Menus -->
            </div>
        </div>
    </header>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-featured-sec">
                            <div class="new-slide">
                                <img src="{{ asset('assets_aepj/images/resource/p2.jpg') }}">
                            </div>
                            <div class="job-search-sec">
                                <div class="job-search">
                                    <h3>Le moyen le plus simple de trouver un nouvel <br>emploi en Cote d'Ivoire</h3>
                                    <span>Trouver un emploi, des opportunités d'emploi et de carrière</span>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <input type="text" placeholder="Titre du poste, mots-clés ou nom de l'entreprise" />
                                                    <i class="la la-keyboard-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div class="job-field">
                                                    <select data-placeholder="Ville, province ou région" class="chosen-city">
                                                        <option>Abidjan </option>
                                                        <option>Bouake</option>
                                                        <option>Gagnoa</option>
                                                        <option>Yamoussoukro</option>
                                                    </select>
                                                    <i class="la la-map-marker"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                                <button type="submit"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="or-browser">
                                        {{--<span>Browse job offers by</span>
                                        <a href="#" title="">Category</a>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-to">
                                <a href="#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="scroll-here">
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Popular Categories</h2>
                            <span>37 jobs live - 0 added today.</span>
                        </div><!-- Heading -->
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-bullhorn"></i>
                                            <span>Designe, Art & Multimedia</span>
                                            <p>(22 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-graduation-cap"></i>
                                            <span>Éducation et formation</span>
                                            <p>(6 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-line-chart "></i>
                                            <span>Comptabilité / Finances</span>
                                            <p>(3 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-users"></i>
                                            <span>Ressources humaines</span>
                                            <p>(3 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cat-sec">
                            <div class="row no-gape">
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-phone"></i>
                                            <span>Telecommunications</span>
                                            <p>(22 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-cutlery"></i>
                                            <span>Restaurant / Service de restauration</span>
                                            <p>(6 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-building"></i>
                                            <span>Construction / Installations</span>
                                            <p>(3 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6">
                                    <div class="p-category">
                                        <a href="#" title="">
                                            <i class="la la-user-md"></i>
                                            <span>Santé</span>
                                            <p>(3 postes disponibles)</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Parcourir toutes les catégories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  {{--  <section>
        <div class="block double-gap-top double-gap-bottom">
            <div data-velocity="-.1" style="background: url({{ asset('assets_aepj/images/resource/parallax1.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text-block">
                            <h3>Make a Difference with Your Online Resume!</h3>
                            <span>Your resume in minutes with JobHunt resume assistant is ready!</span>
                            <a href="#" title="">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Emplois vedettes</h2>
                            <span>Les principaux employeurs solicitent déjà vos talents.</span>
                        </div><!-- Heading -->
                        <div class="job-listings-sec">
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l1.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">Developpeur web / Designer</a></h3>
                                    <span>Kouakou Kouakou i.</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Yamoussoukro, Lac</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l2.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">Directeur du marketing</a></h3>
                                    <span>Amon Ama</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Abidjan, Côte d'Ivoire</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is pt">PART TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l3.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                    <span>Touré touré</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Daloa, Côte d'ivoire</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l4.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">Développeur d'applications pour Android</a></h3>
                                    <span>Bola Yves</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>San-pedro, Côte d'ivoire</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is fl">FREELANCE</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l5.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">Responsable régional des ventes pour l'Asie du Sud-Est</a></h3>
                                    <span>Vincent</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ajax, Ontario</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is tp">TEMPORARY</span>
                            </div><!-- Job -->
                            <div class="job-listing">
                                <div class="job-title-sec">
                                    <div class="c-logo"> <img src="{{ asset('assets_aepj/images/resource/l6.png') }}" alt="" /> </div>
                                    <h3><a href="#" title="">Responsable des médias sociaux et des relations publiques </a></h3>
                                    <span>MediaLab</span>
                                </div>
                                <span class="job-lctn"><i class="la la-map-marker"></i>Ankara / Turkey</span>
                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                <span class="job-is ft">FULL TIME</span>
                            </div><!-- Job -->
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="browse-all-cat">
                            <a href="#" title="">Charger d'autres listes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url({{ asset('assets_aepj/images/resource/parallax2.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading light">
                            <h2>Des mots aimables de la part de candidats heureux</h2>
                            <span>Ce que d'autres personnes ont pensé du service fourni par Agence Emploie Jeune </span>
                        </div><!-- Heading -->
                        <div class="reviews-sec" id="reviews-carousel">
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('assets_aepj/images/resource/r1.jpg') }}" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Sans l' AEJ, je serais sans abri, ils m'ont trouvé un emploi et m'ont vite remis sur pied avec tout ce que j'avais !  Je n'arrive pas à croire que le service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('assets_aepj/images/resource/r2.jpg') }}" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Sans l' AEJ, je serais sans abri, ils m'ont trouvé un emploi et m'ont vite remis sur pied avec tout ce que j'avais !  Je n'arrive pas à croire que le service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('assets_aepj/images/resource/r3.jpg') }}" alt="" />
                                    <h3>Augusta Silva <span>Web designer</span></h3>
                                    <p>Sans l' AEJ, je serais sans abri, ils m'ont trouvé un emploi et m'ont vite remis sur pied avec tout ce que j'avais !  Je n'arrive pas à croire que le service</p>
                                </div><!-- Reviews -->
                            </div>
                            <div class="col-lg-6">
                                <div class="reviews">
                                    <img src="{{ asset('assets_aepj/images/resource/r4.jpg') }}" alt="" />
                                    <h3>Ali Tufan <span>Web designer</span></h3>
                                    <p>Sans l' AEJ, je serais sans abri, ils m'ont trouvé un emploi et m'ont vite remis sur pied avec tout ce que j'avais !  Je n'arrive pas à croire que le service</p>
                                </div><!-- Reviews -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Entreprises que nous avons aidées</h2>
                            <span>Certaines des entreprises que nous avons aidées à recruter d'excellents candidats au fil des ans.</span>
                        </div><!-- Heading -->
                        <div class="comp-sec">
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/cc1.jpg') }}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/cc2.jpg') }}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/cc3.jpg') }}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/cc4.jpg') }}" alt="" /></a>
                            </div><!-- Client  -->
                            <div class="company-img">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/cc5.jpg') }}" alt="" /></a>
                            </div><!-- Client  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block">
            <div data-velocity="-.1" style="background: url({{ asset('assets_aepj/images/resource/parallax3.jpg') }}) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="heading">
                            <h2>Conseils pour une carrière rapide</h2>
                            <span>Trouvé par les employeurs communiquent directement avec les responsables de l'embauche et les recruteurs.</span>
                        </div><!-- Heading -->
                        <div class="blog-sec">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/b1.jpg') }}" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">Attract More Attention Sales And Profits</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/b2.jpg') }}" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">11 Tips to Help You Get New Clients</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="my-blog">
                                        <div class="blog-thumb">
                                            <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/b3.jpg') }}" alt="" /></a>
                                            <div class="blog-metas">
                                                <a href="#" title="">March 29, 2017</a>
                                                <a href="#" title="">0 Comments</a>
                                            </div>
                                        </div>
                                        <div class="blog-details">
                                            <h3><a href="#" title="">An Overworked Newspaper Editor</a></h3>
                                            <p>A job is a regular activity performed in exchange becoming an employee, volunteering, </p>
                                            <a href="#" title="">Read More <i class="la la-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block no-padding">
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="simple-text">
                            <h3>Une question ?</h3>
                            <span>Nous sommes là pour vous aider. Consultez notre FAQ,
                                envoyez-nous un courriel
                                ou appelez-nous au +225 555-5555</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="index.html" title=""><img src="{{ asset('assets_aepj/images/resource/logo-ajep.png') }}" alt="" /></a>
                                </div>
                                <span>Abidjan plateau.</span>
                                <span>+225 47500630 </span>
                                <span>
                                    <a href="#">r4gamia@gmail.com</a>
                                    {{--<a href="cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bcd5d2dad3fcd6d3ded4c9d2c892dfd3d1">[email&#160;protected]</a>--}}
                                </span>
                                <div class="social">
                                    <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="#" title=""><i class="fa fa-behance"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Foire aux questions</h3>
                            <div class="link_widgets">
                                <div class="row">
                                   {{-- <div class="col-lg-6">
                                        <a href="#" title="">Privacy & Seurty </a>
                                        <a href="#" title="">Terms of Serice</a>
                                        <a href="#" title="">Communications </a>
                                        <a href="#" title="">Referral Terms </a>
                                        <a href="#" title="">Lending Licnses </a>
                                        <a href="#" title="">Disclaimers </a>
                                    </div>--}}
                                    <div class="col-lg-6">
                                        <a href="#" title="">Support </a>
                                        <a href="#" title="">Comment cela fonctionne-t-il ? </a>
                                        <a href="#" title="">Pour les employeurs </a>
                                        <a href="#" title="">Souscription </a>
                                        <a href="#" title="">Contactez-nous</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Trouver un emploi</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" title="">Abidjan Jobs</a>
                                        <a href="#" title="">Korogho Jobs</a>
                                        <a href="#" title="">Yamoussoukro Jobs</a>
                                        <a href="#" title="">Macory Jobs</a>
                                        <a href="#" title="">Jobs in Deuts</a>
                                        <a href="#" title="">Vacatures China</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/dw1.png') }}" alt="" /></a>
                                <a href="#" title=""><img src="{{ asset('assets_aepj/images/resource/dw2.png') }}" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
            <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>

<div class="account-popup-area signin-popup-box">
    <div class="account-popup" style="width: 460px; left: 50%;">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Connexion</h3>
        <span>Cliquez pour vous connecter avec l'utilisateur</span>
        <div class="select-user">
            <span>Candidate</span>
            <span>Employer</span>
        </div>
        <form action="{{route('dashboard')}}" method="GET">
            <div class="cfield">
                <input type="text" placeholder="nom utilisateur" />
                <i class="la la-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="la la-key"></i>
            </div>
            <p class="remember-label">
                <input type="checkbox" name="cb" id="cb1"><label for="cb1">Se souvenir de moi</label>
            </p>
            <a href="#" title="">Mot de passe oublié?</a>
            <button type="submit">Connecter</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>S'enregistrer</h3>
        <div class="select-user">
            <span id="select-jeune">Jeune</span>
            <span id="select-entreprise">Entreprise</span>
            <span id="select-cabinet">Cabinet</span>
        </div>
            <form id="form-jeune" style="display: none;" method="POST" action="{{ route('register') }}">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cfield">
                            <input type="text" placeholder="Nom" name="nom" value="{{ old('nom') }}"/>
                            <i class="la la-user"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cfield">
                            <input type="text" placeholder="Prénom" name="prenom"/>
                            <i class="la la-users"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field">
                            <select data-placeholder="Allow In Search" name="sexe" class="chosen" style="display: none;">
                                <option value="masculin">Masculin</option>
                                <option value="feminin">Feminin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field">
                            <input type="date" placeholder="Date naissance" name="datenaissance"/>
                            <i class="la la-calendar-o"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cfield">
                            <input type="text" placeholder="Nom et prenom du pere" name="nompere" />
                            <i class="la la-user"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cfield">
                            <input type="text" placeholder="Nom et prenom de la mere" name="nommere" />
                            <i class="la la-user"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search"  name="situationmatrimoniale" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Situation matrimoniale  -- </option>
                                <option value="Celibataire">Celibataire</option>
                                <option value="Divorce">Divorce(e)</option>
                                <option value="En concubinage">En concubinage</option>
                                <option value="Marie(e)">Marie(e)</option>
                                <option value="Veuf ou Veuve">Veuf ou Veuve</option>
                            </select>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="paysnaissance" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Le pays de naissance   -- </option>
                                <option value="13">Afghanistan</option>
                                <option value="14">Afrique du Sud</option>
                                <option value="15">Albanie</option>
                                <option value="16">ALGERIE</option>
                                <option value="17">Allemagne</option>
                                <option value="18">Andore</option>
                                <option value="165">ANGLETERRE</option>
                                <option value="19">Angola</option>
                                <option value="20">Anguilla</option>
                                <option value="21">Antartique</option>
                                <option value="22">Antigua-et-Barbuda</option>
                                <option value="23">Antilles-NEERLANDAISE</option>
                                <option value="24">Arabie Saoudite</option>
                                <option value="25">Argentine</option>
                                <option value="27">Aruba</option>
                                <option value="28">Australie</option>
                                <option value="9">Australie</option>
                                <option value="29">Autriche</option>
                                <option value="30">Azerbaidjan</option>
                                <option value="31">Bahamas</option>
                                <option value="32">Bahrein</option>
                                <option value="33">Bangladesh</option>
                                <option value="34">Barbade</option>
                                <option value="35">Belgique</option>
                                <option value="36">Belize</option>
                                <option value="156">BENIN</option>
                                <option value="37">Bermudes</option>
                                <option value="38">Bhoutan</option>
                                <option value="39">Bolivie</option>
                                <option value="40">Botswana</option>
                                <option value="41">BURKINA FASO</option>
                                <option value="42">Burundi</option>
                                <option value="43">Cambodge</option>
                                <option value="44">Cameroun</option>
                                <option value="45">Canada</option>
                                <option value="46">Chine</option>
                                <option value="47">Colombie</option>
                                <option value="48">Comores</option>
                                <option value="49">Congo</option>
                                <option value="141">COTE D'IVOIRE</option>
                                <option value="50">Cuba</option>
                                <option value="51">Dominique</option>
                                <option value="52">Egypte</option>
                                <option value="53">Equateur</option>
                                <option value="54">Espagne</option>
                                <option value="55">Estonie</option>
                                <option value="161">ETHIOPIE</option>
                                <option value="56">Finlande</option>
                                <option value="155">FRANCE</option>
                                <option value="160">GABON</option>
                                <option value="57">GHANA</option>
                                <option value="58">Gibraltar</option>
                                <option value="60">Grenade</option>
                                <option value="61">Groenland</option>
                                <option value="62">Guadeloupe</option>
                                <option value="63">Guam</option>
                                <option value="64">Guatemala</option>
                                <option value="167">GUINEE</option>
                                <option value="65">Guyane</option>
                                <option value="66">Honduras</option>
                                <option value="143">INDE</option>
                                <option value="67">Irak</option>
                                <option value="68">Islande</option>
                                <option value="69">Italie</option>
                                <option value="70">Japon</option>
                                <option value="71">Jordanie</option>
                                <option value="72">Kazakhstan</option>
                                <option value="73">Kenya</option>
                                <option value="74">Kiribati</option>
                                <option value="75">Kyrgyzstan</option>
                                <option value="76">Laos</option>
                                <option value="77">Lesotho</option>
                                <option value="78">Lettonie</option>
                                <option value="79">Liban</option>
                                <option value="80">LIBERIA</option>
                                <option value="81">Libye</option>
                                <option value="82">Liechtenstein</option>
                                <option value="83">Lituanie</option>
                                <option value="84">Luxembourg</option>
                                <option value="85">Macao</option>
                                <option value="86">Madagascar</option>
                                <option value="87">Malaisie</option>
                                <option value="88">Malawi</option>
                                <option value="89">Maldives</option>
                                <option value="90">MALI</option>
                                <option value="158">MAROC</option>
                                <option value="91">Martinique</option>
                                <option value="92">Mexico</option>
                                <option value="93">Moldavie</option>
                                <option value="94">Monaco</option>
                                <option value="95">Mongolie</option>
                                <option value="96">Montserrat</option>
                                <option value="97">Mozambique</option>
                                <option value="98">Nicaragua</option>
                                <option value="99">Niger</option>
                                <option value="100">NIGERIA</option>
                                <option value="101">NIUE</option>
                                <option value="102">OUZBEKISTAN</option>
                                <option value="103">PAKISTAN</option>
                                <option value="104">PALAU</option>
                                <option value="154">PANAFRICAIN</option>
                                <option value="105">PANAMA</option>
                                <option value="107">PARAGUAY</option>
                                <option value="108">PAYS-BAS</option>
                                <option value="109">PHILIPPINES</option>
                                <option value="110">PITCAIM</option>
                                <option value="111">POLOGNE</option>
                                <option value="112">QATAR</option>
                                <option value="113">ROUMANIE</option>
                                <option value="114">RUSSIE</option>
                                <option value="115">RWANDA</option>
                                <option value="116">SAINT KITTS ET NEVIS</option>
                                <option value="117">SAINT MARIN</option>
                                <option value="118">SAMOA OCCIDENTALES</option>
                                <option value="119">SAMOA U.S.</option>
                                <option value="157">SENEGAL</option>
                                <option value="120">SINGAPOUR</option>
                                <option value="121">SLOVAQUIE</option>
                                <option value="122">SOMALIE</option>
                                <option value="123">SOUDAN</option>
                                <option value="162">SUISSE</option>
                                <option value="124">SWAZILAND</option>
                                <option value="125">SYRIE</option>
                                <option value="126">TAIWAN</option>
                                <option value="127">TANZANIE</option>
                                <option value="128">TCHAD</option>
                                <option value="166">TOGO</option>
                                <option value="129">TONGA</option>
                                <option value="163">TUNISIE</option>
                                <option value="130">TURQUIE</option>
                                <option value="131">TUVALU</option>
                                <option value="132">UKRAINE</option>
                                <option value="133">URUGUAY</option>
                                <option value="144">USA</option>
                                <option value="134">VANUATU</option>
                                <option value="135">VATICAN</option>
                                <option value="136">VENEZUELA</option>
                                <option value="137">VIETNAM</option>
                                <option value="138">YOUGOSLAVIE</option>
                                <option value="139">ZAMBIE</option>
                                <option value="140">ZIMBABWE</option>
                            </select>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="lieunaissance" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Lieu de naissance  -- </option>
                                <option value="1">Abengourou</option>
                                <option value="2">Abie</option>
                                <option value="3">Abigui</option>
                                <option value="4">Abobo</option>
                                <option value="5">Aboisso</option>
                                <option value="6">Aboisso-Comoe</option>
                                <option value="7">Abolikro</option>
                                <option value="8">Abongoua</option>
                                <option value="10">Aboude</option>
                                <option value="11">Abra</option>
                                <option value="12">Abradinou</option>
                                <option value="13">Abronamoue</option>
                                <option value="14">Aby (Aboisso)</option>
                                <option value="15">Aby-Adjouan-Mohoua</option>
                                <option value="16">Adaou</option>
                                <option value="17">Addah</option>
                                <option value="18">Adesse</option>
                                <option value="19">Adiake</option>
                                <option value="20">Adjame</option>
                                <option value="21">Adjamene</option>
                                <option value="22">Adjouan</option>
                                <option value="23">Adouakouakro</option>
                                <option value="24">Adoukro</option>
                                <option value="25">Adzope</option>
                                <option value="26">Affalikro</option>
                                <option value="27">Affery</option>
                                <option value="28">Affienou</option>
                                <option value="29">Afotobo</option>
                                <option value="30">Agbaou-Aheoua</option>
                                <option value="31">Agboville</option>
                                <option value="32">Agnia</option>
                                <option value="33">Agnibilekrou</option>
                                <option value="34">Agou</option>
                                <option value="35">Ahigbe-Koffikro</option>
                                <option value="36">Ahouabo-Bouape</option>
                                <option value="37">Ahouakro</option>
                                <option value="38">Ahouanou</option>
                                <option value="39">Ahougnanssou</option>
                                <option value="40">Ahougnassou-Alahou</option>
                                <option value="41">Akoboissue</option>
                                <option value="42">Akounougbe</option>
                                <option value="43">Akoupe</option>
                                <option value="44">Akoupe-Zeudji</option>
                                <option value="45">Akoure</option>
                                <option value="1143">Akpassanou</option>
                                <option value="46">Akradio</option>
                                <option value="47">Akridou-Ladde</option>
                                <option value="48">Alepe</option>
                                <option value="49">Allangouassou</option>
                                <option value="1126">ALLOSSO</option>
                                <option value="50">Allosso 2</option>
                                <option value="51">Amanvi</option>
                                <option value="52">Amelekia</option>
                                <option value="53">Amian Kouassikro</option>
                                <option value="54">Amoriakro</option>
                                <option value="55">Ananda (Daoukro)</option>
                                <option value="57">Ananguie (Adzope)</option>
                                <option value="56">Ananguie (Agboville)</option>
                                <option value="58">Ande</option>
                                <option value="59">Ando-Kekrenou</option>
                                <option value="1142">Angoda</option>
                                <option value="61">Anianou</option>
                                <option value="62">Aniassue</option>
                                <option value="63">Annepe</option>
                                <option value="64">Anno (Agboville)</option>
                                <option value="65">Anoumaba</option>
                                <option value="994">Antilles-nerlandaise</option>
                                <option value="66">Anyama</option>
                                <option value="67">Appimandoum</option>
                                <option value="68">Appoisso</option>
                                <option value="69">Appouasso</option>
                                <option value="70">Apprompron-Afewa</option>
                                <option value="71">Apprompronou</option>
                                <option value="995">Arabie Saoudite</option>
                                <option value="996">Argentine</option>
                                <option value="72">Arikokaha</option>
                                <option value="73">Arokpa</option>
                                <option value="74">Arrah</option>
                                <option value="998">Aruba</option>
                                <option value="75">Assahara</option>
                                <option value="76">Assale-Kouassikro</option>
                                <option value="77">Assandre</option>
                                <option value="78">Assie-Koumassi</option>
                                <option value="79">Assikoi</option>
                                <option value="80">Assinie-Mafia</option>
                                <option value="81">Assuefry</option>
                                <option value="82">Attecoube</option>
                                <option value="83">Attiegouakro</option>
                                <option value="84">Attiekoi</option>
                                <option value="85">Attiguehi</option>
                                <option value="86">Attinguie</option>
                                <option value="87">Attobrou</option>
                                <option value="88">Attokro</option>
                                <option value="89">Attoutou A</option>
                                <option value="1000">Autriche</option>
                                <option value="90">Ayame</option>
                                <option value="91">Ayaou-Sran</option>
                                <option value="92">Ayenouan</option>
                                <option value="93">Azaguie</option>
                                <option value="1001">Azerbaidjan</option>
                                <option value="94">Babakro</option>
                                <option value="95">Bacanda</option>
                                <option value="96">Bacon</option>
                                <option value="97">Badikaha</option>
                                <option value="98">Bagohouo</option>
                                <option value="1002">BAHAMAS</option>
                                <option value="1003">BAHREIN</option>
                                <option value="99">Bakandesso-Sogbeni</option>
                                <option value="100">Bakanou</option>
                                <option value="101">Bako</option>
                                <option value="102">Bakoubli</option>
                                <option value="103">Baleko</option>
                                <option value="104">Bambalouma</option>
                                <option value="105">Bamoro</option>
                                <option value="106">Bandakagni Tomora</option>
                                <option value="107">Bandakagni-Sokoura</option>
                                <option value="108">Bandiahi</option>
                                <option value="1004">BANGLADESH</option>
                                <option value="109">Bangolo</option>
                                <option value="110">Bangoua</option>
                                <option value="111">Banneu</option>
                                <option value="112">Bannonfla</option>
                                <option value="1005">BARBADE</option>
                                <option value="113">Bassawa</option>
                                <option value="114">Baya (Kouto)</option>
                                <option value="115">Bayota</option>
                                <option value="116">Bazra-Nattis</option>
                                <option value="117">Bazre</option>
                                <option value="118">Becedi Brignan</option>
                                <option value="119">Becouefin</option>
                                <option value="120">Bediala</option>
                                <option value="121">Bedy-Goazon</option>
                                <option value="122">Begbessou</option>
                                <option value="1006">BELGIQUE</option>
                                <option value="1007">BELIZE</option>
                                <option value="123">Belleville Bouake)</option>
                                <option value="124">Belleville Zoukougbeu)</option>
                                <option value="125">Bengassou</option>
                                <option value="126">Beoue-Zibiao</option>
                                <option value="127">Beoumi</option>
                                <option value="128">Bereni Dialla</option>
                                <option value="129">Beriaboukro</option>
                                <option value="1008">Bermudes</option>
                                <option value="130">Bettie</option>
                                <option value="1009">Bhoutan</option>
                                <option value="131">Biakale</option>
                                <option value="132">Biankouma</option>
                                <option value="133">Bianouan</option>
                                <option value="134">Biasso</option>
                                <option value="135">Bieby</option>
                                <option value="136">Bilimono</option>
                                <option value="137">Bin-Houye</option>
                                <option value="138">Binao-Boussoue</option>
                                <option value="139">Bingerville</option>
                                <option value="140">Binzra</option>
                                <option value="142">Blanfla</option>
                                <option value="143">Blapleu</option>
                                <option value="144">Blenimeouin</option>
                                <option value="145">Blessegue</option>
                                <option value="146">Blolequin</option>
                                <option value="147">Blotile</option>
                                <option value="148">Boahia</option>
                                <option value="149">Bobi</option>
                                <option value="150">Bobo-Tienigbe</option>
                                <option value="151">Bocanda</option>
                                <option value="152">Bodo (Didievi)</option>
                                <option value="153">Bodo (Tiassale)</option>
                                <option value="154">Bodokro</option>
                                <option value="155">Bogofa</option>
                                <option value="156">Bogouine</option>
                                <option value="157">Boguedia</option>
                                <option value="158">Bohobli</option>
                                <option value="159">Bokala-Niampondougou</option>
                                <option value="160">Boli</option>
                                <option value="1010">Bolivie</option>
                                <option value="161">Bolona</option>
                                <option value="162">Bonahouin</option>
                                <option value="163">Bondo</option>
                                <option value="164">Bondoukou</option>
                                <option value="165">Bongo (Grand-Bassam)</option>
                                <option value="166">Bongouanou</option>
                                <option value="167">Bonguera</option>
                                <option value="168">Bonieredougou</option>
                                <option value="169">Bonikro</option>
                                <option value="170">Bonon</option>
                                <option value="171">Bonoua</option>
                                <option value="172">Bonoufla</option>
                                <option value="173">Booko</option>
                                <option value="174">Boron (Korhogo)</option>
                                <option value="175">Borotou</option>
                                <option value="176">Borotou-Koro</option>
                                <option value="177">Botinde</option>
                                <option value="178">Botro</option>
                                <option value="1011">Botswana</option>
                                <option value="179">Bouadikro</option>
                                <option value="180">Bouafle</option>
                                <option value="187">Bouake</option>
                                <option value="181">Bouandougou</option>
                                <option value="182">Bouboury</option>
                                <option value="183">Boudepe</option>
                                <option value="184">Bougou</option>
                                <option value="185">Bougousso</option>
                                <option value="186">Bouko</option>
                                <option value="188">Bouna</option>
                                <option value="189">Boundiali</option>
                                <option value="190">Boyaokro</option>
                                <option value="191">Bozi</option>
                                <option value="192">Bricolo</option>
                                <option value="193">Brihiri</option>
                                <option value="194">Brima</option>
                                <option value="195">Brobo</option>
                                <option value="196">Brofodoume</option>
                                <option value="197">Broma</option>
                                <option value="198">Brou Ahoussoukro</option>
                                <option value="199">Brou Akpaoussou</option>
                                <option value="200">Broubrou</option>
                                <option value="201">Broudoukou-Penda</option>
                                <option value="1012">BURKINA FASO</option>
                                <option value="1013">Burundi</option>
                                <option value="202">Buyo</option>
                                <option value="1014">Cambodge</option>
                                <option value="1015">Cameroun</option>
                                <option value="1016">Canada</option>
                                <option value="203">Cechi</option>
                                <option value="204">Chiepo</option>
                                <option value="1017">Chine</option>
                                <option value="205">Cocody</option>
                                <option value="1018">Colombie</option>
                                <option value="1019">Comores</option>
                                <option value="1020">Congo</option>
                                <option value="206">Cosrou</option>
                                <option value="1021">Cuba</option>
                                <option value="207">Dabadougou-Mafele</option>
                                <option value="208">Dabakala</option>
                                <option value="209">Dabou</option>
                                <option value="210">Dabouyo</option>
                                <option value="211">Dadiasse</option>
                                <option value="212">Dagba</option>
                                <option value="213">Dah-Zagna</option>
                                <option value="214">Dahiepa-Kehi</option>
                                <option value="215">Dahiri</option>
                                <option value="216">Dairo-Didizo</option>
                                <option value="217">Dakouritrohoin</option>
                                <option value="218">Dakpadou</option>
                                <option value="219">Daleu</option>
                                <option value="1123">DALOA</option>
                                <option value="220">Dame</option>
                                <option value="221">Danane</option>
                                <option value="222">Dananon</option>
                                <option value="223">Dandougou</option>
                                <option value="224">Danguira</option>
                                <option value="225">Dania</option>
                                <option value="226">Danoa</option>
                                <option value="227">Dantogo</option>
                                <option value="228">Daoukro</option>
                                <option value="229">Dapeoua</option>
                                <option value="230">Dapo-Iboke</option>
                                <option value="231">Dassioko</option>
                                <option value="232">Dassoungboho</option>
                                <option value="233">Debete</option>
                                <option value="234">Dedegbeu</option>
                                <option value="235">Detroya</option>
                                <option value="236">Diabo</option>
                                <option value="237">Diahouin</option>
                                <option value="238">Dialakoro</option>
                                <option value="239">Diamakani</option>
                                <option value="240">Diamarakro</option>
                                <option value="241">Diamba</option>
                                <option value="242">Diangobo (Abengourou)</option>
                                <option value="243">Diangobo (Yakasse-Attobrou)</option>
                                <option value="244">Diangokro</option>
                                <option value="245">Dianra</option>
                                <option value="246">Dianra-Village</option>
                                <option value="247">Diarabana</option>
                                <option value="248">Diasson</option>
                                <option value="249">Diawala</option>
                                <option value="250">Dibobly</option>
                                <option value="251">Diboke</option>
                                <option value="252">Dibri-Assirikro</option>
                                <option value="253">Didievi</option>
                                <option value="254">Didoko</option>
                                <option value="255">Diegonefla</option>
                                <option value="256">Diemeressedougou</option>
                                <option value="257">Dieouzon</option>
                                <option value="258">Dieviessou</option>
                                <option value="259">Digbapia</option>
                                <option value="260">Dignago</option>
                                <option value="261">Dikodougou</option>
                                <option value="262">Dimandougou</option>
                                <option value="263">Dimbokro</option>
                                <option value="264">Dinaoudi</option>
                                <option value="265">Dingbi</option>
                                <option value="266">Dioman</option>
                                <option value="267">Dioulatiedougou</option>
                                <option value="268">Diourouzon</option>
                                <option value="269">Divo</option>
                                <option value="1130">Djamadjoké</option>
                                <option value="271">Djapadji</option>
                                <option value="272">Djebonouan</option>
                                <option value="273">Djekanou</option>
                                <option value="274">Djibrosso</option>
                                <option value="275">Djidji</option>
                                <option value="276">Djoro-Djoro</option>
                                <option value="277">Djouroutou</option>
                                <option value="278">Doba</option>
                                <option value="279">Dobre</option>
                                <option value="280">Dogbo</option>
                                <option value="281">Doh</option>
                                <option value="282">Doke</option>
                                <option value="283">Domangbeu</option>
                                <option value="1022">Dominique</option>
                                <option value="284">Doropo</option>
                                <option value="285">Douele</option>
                                <option value="286">Dougroupalegnoa</option>
                                <option value="287">Doukouya</option>
                                <option value="288">Doukouyo</option>
                                <option value="289">Dousseba</option>
                                <option value="290">Dribouo</option>
                                <option value="291">Dualla</option>
                                <option value="292">Duekoue</option>
                                <option value="293">Duffrebo</option>
                                <option value="294">Duonfla</option>
                                <option value="295">Dzeudji</option>
                                <option value="296">Ebikro-N?dakro</option>
                                <option value="297">Ebilassokro</option>
                                <option value="298">Ebonou</option>
                                <option value="299">Eboue (Aboisso)</option>
                                <option value="1023">Egypte</option>
                                <option value="300">Ehuasso</option>
                                <option value="301">Ellibou-Badasso</option>
                                <option value="302">Eloka</option>
                                <option value="303">Ettrokro</option>
                                <option value="304">Etueboue</option>
                                <option value="305">Etuessika</option>
                                <option value="306">Facobly</option>
                                <option value="307">Fadiadougou</option>
                                <option value="308">Famienkro</option>
                                <option value="309">Fapaha-Mbinguebougou</option>
                                <option value="310">Faraba (Mankono)</option>
                                <option value="311">Fengolo</option>
                                <option value="312">Feremandougou</option>
                                <option value="313">Ferentela</option>
                                <option value="314">Ferkessedougou</option>
                                <option value="315">Finessiguedougou</option>
                                <option value="316">Fizanlouma</option>
                                <option value="317">Flakiedougou</option>
                                <option value="318">Foto-Kouamekro</option>
                                <option value="319">Foumbolo</option>
                                <option value="320">Foungbesso</option>
                                <option value="321">Frambo</option>
                                <option value="322">Fresco</option>
                                <option value="323">Fronan</option>
                                <option value="324">Gabia (Issia)</option>
                                <option value="325">Gabia (Oume)</option>
                                <option value="326">Gabiadji</option>
                                <option value="327">Gadago</option>
                                <option value="328">Gagnoa</option>
                                <option value="329">Gagny</option>
                                <option value="1139">gagore</option>
                                <option value="1137">galebou</option>
                                <option value="331">Ganaoni</option>
                                <option value="332">Ganhoue</option>
                                <option value="333">Ganleu</option>
                                <option value="334">Gaote</option>
                                <option value="335">Gbablasso</option>
                                <option value="336">Gbadjie</option>
                                <option value="337">Gbagbam</option>
                                <option value="338">Gbameledougo</option>
                                <option value="339">Gbangbegouine</option>
                                <option value="340">Gbangbegouine-Yati</option>
                                <option value="341">Gbapleu</option>
                                <option value="342">Gbatongouin</option>
                                <option value="343">Gbazoa</option>
                                <option value="344">Gbekekro</option>
                                <option value="345">Gbeleban</option>
                                <option value="346">Gbetogo</option>
                                <option value="347">Gbliglo</option>
                                <option value="348">Gbofesso-Sama</option>
                                <option value="349">Gbogolo</option>
                                <option value="350">Gboguhe</option>
                                <option value="351">Gbon</option>
                                <option value="352">Gbon-Houye</option>
                                <option value="353">Gbongaha</option>
                                <option value="1136">gbongaha</option>
                                <option value="354">Gbonne</option>
                                <option value="355">Glangleu</option>
                                <option value="356">Gligbeuadji</option>
                                <option value="357">Gloplou</option>
                                <option value="358">Gnagbodougnoa</option>
                                <option value="359">Gnagboya</option>
                                <option value="360">Gnago</option>
                                <option value="361">Gnakouboue</option>
                                <option value="1128">gnamangui</option>
                                <option value="362">Gnamanou</option>
                                <option value="363">Gnato</option>
                                <option value="364">Gnegrouboue</option>
                                <option value="365">Gnogboyo</option>
                                <option value="366">Godelilie 1</option>
                                <option value="367">Gogne</option>
                                <option value="368">Gogo</option>
                                <option value="369">Gogoguhe</option>
                                <option value="370">Gohitafla</option>
                                <option value="371">Gohouo-Zagna</option>
                                <option value="372">Gomon</option>
                                <option value="373">Gonate</option>
                                <option value="374">Gopoupleu</option>
                                <option value="375">Gotongouine 1</option>
                                <option value="376">Gouane</option>
                                <option value="377">Goudi</option>
                                <option value="378">Goudouko</option>
                                <option value="379">Gouekan</option>
                                <option value="380">Gouenzou</option>
                                <option value="381">Gouine</option>
                                <option value="382">Goulaleu</option>
                                <option value="383">Goulia</option>
                                <option value="384">Goumere</option>
                                <option value="385">Gouotro</option>
                                <option value="386">Gourane</option>
                                <option value="387">Grabo</option>
                                <option value="388">Gragba-Dagolilie</option>
                                <option value="389">Grand Alepe</option>
                                <option value="397">Grand-Akoudzin</option>
                                <option value="390">Grand-Bassam</option>
                                <option value="391">Grand-Bereby</option>
                                <option value="392">Grand-Lahou</option>
                                <option value="393">Grand-Morie</option>
                                <option value="394">Grand-Pin</option>
                                <option value="395">Grand-Yapo</option>
                                <option value="396">Grand-Zattry</option>
                                <option value="398">Gregbeu</option>
                                <option value="399">Grihiri</option>
                                <option value="400">Grobiakoko</option>
                                <option value="401">Grobonou-Dan</option>
                                <option value="402">Guehiebly</option>
                                <option value="403">Guekpe</option>
                                <option value="404">Guenimanzo</option>
                                <option value="405">Guepahouo</option>
                                <option value="406">Guessabo</option>
                                <option value="407">Guessiguie</option>
                                <option value="408">Gueyo</option>
                                <option value="409">Guezon (Duekoue) (departement de Duekoue)</option>
                                <option value="410">Guezon (Kouibly) (departement de Kouibly)</option>
                                <option value="411">Guezon-Tahouake</option>
                                <option value="412">Guiamapleu</option>
                                <option value="413">Guiberoua</option>
                                <option value="414">Guiembe</option>
                                <option value="415">Guiende</option>
                                <option value="416">Guiglo</option>
                                <option value="417">Guimeyo</option>
                                <option value="418">Guinglo-Gbean</option>
                                <option value="419">Guinglo-Tahouake</option>
                                <option value="420">Guinteguela</option>
                                <option value="421">Guitry</option>
                                <option value="662">Guyakro</option>
                                <option value="422">Herebo</option>
                                <option value="423">Hermankono-Dies</option>
                                <option value="424">Hermankono-Garo</option>
                                <option value="425">Hire</option>
                                <option value="426">Huafla</option>
                                <option value="427">Iboguhe</option>
                                <option value="428">Iboke</option>
                                <option value="429">Idibouo-Zepreguhe (Daloa Est)</option>
                                <option value="430">Ipouagui</option>
                                <option value="431">Iriefla</option>
                                <option value="432">Irobo</option>
                                <option value="433">Iroporia</option>
                                <option value="434">Issia</option>
                                <option value="435">Jacqueville</option>
                                <option value="436">Kaade</option>
                                <option value="437">Kadeko</option>
                                <option value="438">Kadioha</option>
                                <option value="439">Kafoudougou-Bambarasso</option>
                                <option value="440">Kagbolodougou</option>
                                <option value="441">Kahin-Zarabaon</option>
                                <option value="442">Kakpi</option>
                                <option value="443">Kalaha</option>
                                <option value="444">Kalamon</option>
                                <option value="445">Kaloa</option>
                                <option value="446">Kamala</option>
                                <option value="447">Kamalo</option>
                                <option value="448">Kamoro</option>
                                <option value="449">Kanagonon</option>
                                <option value="450">Kanakono</option>
                                <option value="451">Kanawolo</option>
                                <option value="452">Kani</option>
                                <option value="453">Kaniasso</option>
                                <option value="454">Kanoroba</option>
                                <option value="455">Kanzra</option>
                                <option value="456">Kaouara</option>
                                <option value="457">Karakoro</option>
                                <option value="458">Kassere</option>
                                <option value="459">Katchire-Essekro</option>
                                <option value="460">Katiali</option>
                                <option value="461">Katimassou</option>
                                <option value="462">Katiola</option>
                                <option value="463">Kato (Seguela)</option>
                                <option value="464">Katogo</option>
                                <option value="465">Kawolo-Sobara</option>
                                <option value="466">Ke-Bouebo</option>
                                <option value="467">Kebi</option>
                                <option value="468">Keibla</option>
                                <option value="469">Keibly</option>
                                <option value="470">Ketesso</option>
                                <option value="471">Ketro-Bassam</option>
                                <option value="472">Kibouo</option>
                                <option value="473">Kiele</option>
                                <option value="474">Kiemou</option>
                                <option value="1133">kimbirila nord</option>
                                <option value="476">Kimbirila Sud</option>
                                <option value="477">Klan</option>
                                <option value="478">Kodiossou</option>
                                <option value="479">Koffi-Amonkro</option>
                                <option value="480">Koffikro-Affema</option>
                                <option value="481">Koko (Bouake)</option>
                                <option value="482">Koko (Korhogo)</option>
                                <option value="483">Kokolopozo</option>
                                <option value="484">Kokomian</option>
                                <option value="485">Kokoumba</option>
                                <option value="486">Kokoun</option>
                                <option value="487">Kokumbo</option>
                                <option value="488">Kolia</option>
                                <option value="489">Kombolokoura</option>
                                <option value="490">Komborodougou</option>
                                <option value="491">Konan Kokorekro</option>
                                <option value="492">Konan-Ndrikro</option>
                                <option value="493">Konandikro</option>
                                <option value="494">Kondiebouma</option>
                                <option value="495">Kondokro-Djassanou</option>
                                <option value="496">Kondossou</option>
                                <option value="497">Kondrobo</option>
                                <option value="498">Kong</option>
                                <option value="499">Kongasso</option>
                                <option value="500">Kongoti</option>
                                <option value="501">Koni</option>
                                <option value="502">Kononfla</option>
                                <option value="503">Koonan</option>
                                <option value="504">Koreahinou</option>
                                <option value="539">Korhogo</option>
                                <option value="505">Koro</option>
                                <option value="506">Korokaha</option>
                                <option value="507">Korokopla</option>
                                <option value="508">Koroumba</option>
                                <option value="509">Kossandji</option>
                                <option value="510">Kossehoa</option>
                                <option value="511">Kossihouen</option>
                                <option value="512">Kossou</option>
                                <option value="513">Kotobi</option>
                                <option value="514">Kotogwanda</option>
                                <option value="515">Kotronou</option>
                                <option value="516">Koua</option>
                                <option value="517">Kouadioblekro</option>
                                <option value="518">Kouadiokro</option>
                                <option value="519">Kouafo-Akidom</option>
                                <option value="520">Kouakro</option>
                                <option value="521">Kouamefla</option>
                                <option value="522">Kouan-Houle</option>
                                <option value="524">Kouassi Kouassikro</option>
                                <option value="523">Kouassi-Datekro</option>
                                <option value="525">Kouassi-N?Dawa</option>
                                <option value="526">Kouassia-Nanguni</option>
                                <option value="527">Kouatta</option>
                                <option value="528">Koudougou</option>
                                <option value="529">Kouetinfla</option>
                                <option value="530">Kouibly</option>
                                <option value="531">Koulale</option>
                                <option value="532">Koulikoro (Biankouma)</option>
                                <option value="533">Koumassi</option>
                                <option value="534">Koumbala</option>
                                <option value="535">Koun-Fao</option>
                                <option value="536">Kounahiri</option>
                                <option value="537">Kounzie</option>
                                <option value="538">Kouto</option>
                                <option value="540">Koutouba</option>
                                <option value="541">Koyekro</option>
                                <option value="542">Koziayo 1</option>
                                <option value="543">Kpada</option>
                                <option value="544">Kpana-Kalo</option>
                                <option value="545">Kpanan</option>
                                <option value="546">Kpanpleu-Sin-Houye</option>
                                <option value="547">Kpapekou</option>
                                <option value="548">Kpata</option>
                                <option value="549">Kpebo</option>
                                <option value="550">Kpote</option>
                                <option value="551">Kpouebo</option>
                                <option value="552">Kregbe</option>
                                <option value="553">Kreuzoukoue</option>
                                <option value="554">Krindjabo</option>
                                <option value="555">Krofoinsou</option>
                                <option value="556">Labokro</option>
                                <option value="557">Lafokpokaha</option>
                                <option value="558">Lahou Kpandah</option>
                                <option value="559">Lahouda</option>
                                <option value="560">Lakota</option>
                                <option value="561">Lamekaha</option>
                                <option value="562">Lamekaha</option>
                                <option value="563">Landiougou</option>
                                <option value="564">Languibonou</option>
                                <option value="565">Laoudi-Ba</option>
                                <option value="566">Larabia</option>
                                <option value="567">Lataha</option>
                                <option value="568">Lauzoua</option>
                                <option value="569">Leleble</option>
                                <option value="570">Lengbre</option>
                                <option value="571">Lessiri</option>
                                <option value="572">Ligrohoin</option>
                                <option value="573">Liliy</option>
                                <option value="1129">LILIYO</option>
                                <option value="574">Lissolo-Sobara</option>
                                <option value="575">Lobakuya</option>
                                <option value="576">Lobogba</option>
                                <option value="577">Logbonou</option>
                                <option value="578">Logouale</option>
                                <option value="579">Logroan</option>
                                <option value="581">Lolobo</option>
                                <option value="1141">LOMOKANKRO</option>
                                <option value="582">Lopou</option>
                                <option value="583">Loukou-Yaokro</option>
                                <option value="584">Loviguie</option>
                                <option value="585">Luenoufla</option>
                                <option value="1145">M'BAHIAKRO</option>
                                <option value="593">Mabehiri 1</option>
                                <option value="594">Mabouo</option>
                                <option value="595">Madinani</option>
                                <option value="596">Mafere</option>
                                <option value="597">Maguehio</option>
                                <option value="598">Mahale</option>
                                <option value="599">Mahandiana Soukourani</option>
                                <option value="1132">MAHANDIANA-SOKOURANI</option>
                                <option value="600">Mahandougou</option>
                                <option value="601">Mahapleu</option>
                                <option value="602">Mahino</option>
                                <option value="603">Makey-Liboli</option>
                                <option value="604">Mamini</option>
                                <option value="605">Maminigui</option>
                                <option value="606">Man</option>
                                <option value="607">Manabri</option>
                                <option value="608">Mandougou</option>
                                <option value="609">Manfla</option>
                                <option value="610">Mangouin-Yrongouin</option>
                                <option value="611">Mankono</option>
                                <option value="612">Manzanouan</option>
                                <option value="613">Marabadiassa</option>
                                <option value="614">Marandallah</option>
                                <option value="615">Marcory</option>
                                <option value="616">Massadougou</option>
                                <option value="617">Massala (Seguela)</option>
                                <option value="618">Massala-Barala</option>
                                <option value="619">Mayo</option>
                                <option value="586">Mbahiakro</option>
                                <option value="587">Mbatto</option>
                                <option value="588">Mbengue</option>
                                <option value="589">Mbonoua</option>
                                <option value="590">MBorla-Dioulasso</option>
                                <option value="591">Mbrou</option>
                                <option value="620">Meagui</option>
                                <option value="621">Medon</option>
                                <option value="622">Mekro</option>
                                <option value="623">Memni</option>
                                <option value="624">Meneke</option>
                                <option value="625">Meo</option>
                                <option value="626">Miadzin</option>
                                <option value="627">Mignore</option>
                                <option value="628">Minfla</option>
                                <option value="629">Minignan</option>
                                <option value="630">Moape</option>
                                <option value="631">Molonou</option>
                                <option value="632">Molonou-Ble</option>
                                <option value="633">Momirasso</option>
                                <option value="634">Monga</option>
                                <option value="635">Mongbara</option>
                                <option value="636">Monoko Zohi</option>
                                <option value="637">Monongo</option>
                                <option value="638">Mont Korhogo</option>
                                <option value="639">Morokinkro</option>
                                <option value="640">Morokro</option>
                                <option value="641">Morondo</option>
                                <option value="642">Moronou</option>
                                <option value="643">Moussobadougou</option>
                                <option value="592">Mpossa</option>
                                <option value="1144">N'GATTAKRO</option>
                                <option value="1134">N'GOLOBLASSO</option>
                                <option value="667">Nafana</option>
                                <option value="668">Nafana (Prikro)</option>
                                <option value="669">Nafana Sienso</option>
                                <option value="670">Nafoun</option>
                                <option value="671">Nahio</option>
                                <option value="672">Namahounondougou</option>
                                <option value="673">Namane</option>
                                <option value="674">Namassi</option>
                                <option value="675">Nambingue</option>
                                <option value="676">Nandjele-Segbere</option>
                                <option value="677">Napie</option>
                                <option value="678">Nassian</option>
                                <option value="644">Ndakro</option>
                                <option value="645">Ndenou</option>
                                <option value="646">Ndeou</option>
                                <option value="647">Ndouci</option>
                                <option value="648">Ndouffoukankro</option>
                                <option value="649">Ndoukahakro</option>
                                <option value="679">Nebo (Divo)</option>
                                <option value="680">Neguepie</option>
                                <option value="681">Neko</option>
                                <option value="682">Nezobly</option>
                                <option value="650">Ngangoro-Attoutou</option>
                                <option value="651">NGanon</option>
                                <option value="652">NGattadolikro</option>
                                <option value="653">NGattakro</option>
                                <option value="654">NGban Kasse</option>
                                <option value="655">Ngohinou</option>
                                <option value="656">NGoloblasso</option>
                                <option value="657">Ngribo-Takikro</option>
                                <option value="658">Nguessan-Brindoukro</option>
                                <option value="659">NGuessankro</option>
                                <option value="661">Nguieme</option>
                                <option value="683">Niable</option>
                                <option value="684">Niakaramandougou</option>
                                <option value="685">Niakoblognoa</option>
                                <option value="686">Niamana (Odienne)</option>
                                <option value="687">Niambezaria</option>
                                <option value="688">Niazaroko</option>
                                <option value="689">Nidrou</option>
                                <option value="690">Niediekaha</option>
                                <option value="691">Nielle</option>
                                <option value="692">Niemene</option>
                                <option value="693">Nigui Assoko</option>
                                <option value="694">Nigui Saff</option>
                                <option value="695">Niofoin</option>
                                <option value="696">Niokosso</option>
                                <option value="697">Niorouhio</option>
                                <option value="698">Nioulde</option>
                                <option value="699">Nizahon</option>
                                <option value="700">Noe</option>
                                <option value="701">Nofou</option>
                                <option value="702">Nouamou</option>
                                <option value="1131">NOUAMOUE</option>
                                <option value="663">NZecrezessou</option>
                                <option value="664">NZi-NZiblekro</option>
                                <option value="665">NZianouan</option>
                                <option value="666">NZue-Kokore</option>
                                <option value="703">Odienne</option>
                                <option value="704">Offa (Agboville)</option>
                                <option value="705">Offoumpo</option>
                                <option value="706">Oghlwapo</option>
                                <option value="707">Ogoudou</option>
                                <option value="708">Okrouyo</option>
                                <option value="709">Olodio</option>
                                <option value="710">Ondefidouo</option>
                                <option value="711">Ono</option>
                                <option value="712">Orbaff</option>
                                <option value="713">Oress-Krobou</option>
                                <option value="715">Ottope</option>
                                <option value="716">Ouangolodougou</option>
                                <option value="717">Ouaninou</option>
                                <option value="718">Ouattaradougou</option>
                                <option value="719">Ouedallah</option>
                                <option value="720">Ouelle</option>
                                <option value="721">Oueoulo</option>
                                <option value="722">Ouffouediekro</option>
                                <option value="723">Oume</option>
                                <option value="724">Oupoyo</option>
                                <option value="725">Ouragahio</option>
                                <option value="726">Oureguekaha</option>
                                <option value="727">Ousrou</option>
                                <option value="728">Ouyably-Gnondrou</option>
                                <option value="729">Pacobo</option>
                                <option value="730">Pakouabo</option>
                                <option value="731">Pambasso-Diedou</option>
                                <option value="732">Pangalakaha</option>
                                <option value="733">Paoufla</option>
                                <option value="734">Papara (Tengrela)</option>
                                <option value="735">Para (Tabou)</option>
                                <option value="736">Pauly</option>
                                <option value="737">Peguekaha</option>
                                <option value="738">Pehe</option>
                                <option value="739">Pehekanhouebli</option>
                                <option value="740">Pelezi</option>
                                <option value="741">Petigoa 2</option>
                                <option value="742">Petit Guiglo</option>
                                <option value="743">Pinda-Boroko</option>
                                <option value="744">Pinhou</option>
                                <option value="745">Pitiengomon</option>
                                <option value="746">Plateau</option>
                                <option value="747">Pleuro</option>
                                <option value="748">Podiagouine</option>
                                <option value="749">Podoue</option>
                                <option value="750">Pogo (Ouangolodougou)</option>
                                <option value="751">Pokreagui</option>
                                <option value="752">Ponondougou</option>
                                <option value="1127">PORT-BOUET</option>
                                <option value="753">Port-Bouet</option>
                                <option value="754">Poumbly</option>
                                <option value="755">Pranouan</option>
                                <option value="756">Prikro</option>
                                <option value="757">Raviart</option>
                                <option value="759">Rubino</option>
                                <option value="760">Saboudougou</option>
                                <option value="761">Sago</option>
                                <option value="762">Sahebo</option>
                                <option value="763">Sahuye</option>
                                <option value="764">Saioua</option>
                                <option value="766">Sakahouo</option>
                                <option value="765">Sakassou</option>
                                <option value="767">Sakre</option>
                                <option value="768">Samango</option>
                                <option value="769">Samanza</option>
                                <option value="770">Samatiguila</option>
                                <option value="771">Saminikro</option>
                                <option value="772">San-Pedro</option>
                                <option value="773">Sandala</option>
                                <option value="774">Sandegue</option>
                                <option value="775">Sandougou-Soba</option>
                                <option value="776">Sangouine</option>
                                <option value="777">Sankadiokro</option>
                                <option value="778">Santa</option>
                                <option value="780">Sapli-Sepingo</option>
                                <option value="781">Sarhala</option>
                                <option value="782">Sassako Begnini</option>
                                <option value="783">Sassandra</option>
                                <option value="784">Satama-Sokoro</option>
                                <option value="785">Satama-Sokoura</option>
                                <option value="786">Satikran</option>
                                <option value="787">Satroko</option>
                                <option value="788">Sebedoufla</option>
                                <option value="789">Seguela</option>
                                <option value="790">Seguelon</option>
                                <option value="791">Seileu</option>
                                <option value="792">Seitifla</option>
                                <option value="793">Semien</option>
                                <option value="794">Sepikaha</option>
                                <option value="795">Serebissou</option>
                                <option value="796">Serihi</option>
                                <option value="1138">serihio</option>
                                <option value="797">Seydougou</option>
                                <option value="798">Sianhala</option>
                                <option value="799">Siansoba</option>
                                <option value="800">Siempurgo</option>
                                <option value="801">Sifie</option>
                                <option value="802">Sikensi</option>
                                <option value="803">Sikolo</option>
                                <option value="804">Silakoro</option>
                                <option value="805">Sinematiali</option>
                                <option value="806">Sinfra</option>
                                <option value="807">Singo</option>
                                <option value="808">Siolokaha</option>
                                <option value="809">Sipilou</option>
                                <option value="810">Sirana</option>
                                <option value="811">Sirasso</option>
                                <option value="812">Siriho</option>
                                <option value="813">Sissedougou</option>
                                <option value="814">Soaekpe-Douedy</option>
                                <option value="815">Soba (Korhogo)</option>
                                <option value="816">Soba-Banandje</option>
                                <option value="817">Sohouo</option>
                                <option value="818">Sokala-Sobara</option>
                                <option value="819">Sokoro</option>
                                <option value="820">Sokorodougou</option>
                                <option value="821">Sokourala-Mahou</option>
                                <option value="822">Sokrogbo</option>
                                <option value="823">Sokrogbo-Carrefour</option>
                                <option value="824">Sominasse</option>
                                <option value="825">Somokoro</option>
                                <option value="826">Songan</option>
                                <option value="827">Songon</option>
                                <option value="828">Songori</option>
                                <option value="829">Sononzo</option>
                                <option value="830">Sorobango</option>
                                <option value="831">Soubre</option>
                                <option value="832">Soukourougban</option>
                                <option value="833">Soungassou</option>
                                <option value="834">Subiakro</option>
                                <option value="846">Ta</option>
                                <option value="835">Taabo</option>
                                <option value="836">Taabo-Village</option>
                                <option value="837">Tabagne</option>
                                <option value="838">Tabayo 1</option>
                                <option value="839">Tableguikou</option>
                                <option value="840">Taboth</option>
                                <option value="841">Tabou</option>
                                <option value="842">Tafire</option>
                                <option value="843">Tagadi</option>
                                <option value="844">Tahakro</option>
                                <option value="845">Tahibly</option>
                                <option value="847">Takikro</option>
                                <option value="848">Takoreagui</option>
                                <option value="849">Tambi</option>
                                <option value="850">Tanda</option>
                                <option value="851">Tangafla</option>
                                <option value="852">Tanguelan</option>
                                <option value="853">Tankesse</option>
                                <option value="854">Taoudi</option>
                                <option value="855">Tapeguia</option>
                                <option value="856">Tawara</option>
                                <option value="857">Teapleu</option>
                                <option value="858">Teguela</option>
                                <option value="859">Tehini</option>
                                <option value="860">Tehiri</option>
                                <option value="861">Tendene-Bambarasso</option>
                                <option value="862">Tengrela</option>
                                <option value="863">Tezie</option>
                                <option value="864">Tiagba</option>
                                <option value="865">Tiapoum</option>
                                <option value="866">Tiassale</option>
                                <option value="867">Tibeita</option>
                                <option value="1140">Tie Ndiekro</option>
                                <option value="869">Tiebissou</option>
                                <option value="870">Tiedio</option>
                                <option value="871">Tiegba</option>
                                <option value="872">Tiekpe</option>
                                <option value="873">Tieme</option>
                                <option value="874">Tiemelekro</option>
                                <option value="875">Tienindieri</option>
                                <option value="876">Tieningboue</option>
                                <option value="878">Tienko (departement de Touba)</option>
                                <option value="877">Tienko Minignan</option>
                                <option value="879">Tienkoikro</option>
                                <option value="880">Tieny-Seably</option>
                                <option value="881">Tieole-Oula</option>
                                <option value="882">Tieviessou</option>
                                <option value="883">Timbe</option>
                                <option value="884">Tinhou</option>
                                <option value="885">Tiobly</option>
                                <option value="886">Tioro</option>
                                <option value="887">Tofla</option>
                                <option value="888">Togoniere</option>
                                <option value="889">Toliesso</option>
                                <option value="890">Tomono</option>
                                <option value="891">Tonla</option>
                                <option value="892">Torossanguehi</option>
                                <option value="893">Tortiya</option>
                                <option value="894">Totrodrou</option>
                                <option value="895">Touba</option>
                                <option value="896">Toubalo</option>
                                <option value="897">Tougbo</option>
                                <option value="898">Touih</option>
                                <option value="899">Toukouzou</option>
                                <option value="900">Toulepleu</option>
                                <option value="901">Toumodi</option>
                                <option value="902">Toumodi-Sakassou</option>
                                <option value="903">Toumoukoro</option>
                                <option value="904">Toupah</option>
                                <option value="905">Toutoubre</option>
                                <option value="906">Trafesso</option>
                                <option value="907">Transua</option>
                                <option value="908">Treichville</option>
                                <option value="909">Vaafla</option>
                                <option value="910">Vao</option>
                                <option value="911">Varale</option>
                                <option value="912">Vavoua</option>
                                <option value="913">Voueboufla</option>
                                <option value="914">Walebo</option>
                                <option value="915">Wate</option>
                                <option value="916">Wonsealy</option>
                                <option value="917">Worofla</option>
                                <option value="918">Yaakro</option>
                                <option value="919">Yabayo</option>
                                <option value="920">Yacolidabouo</option>
                                <option value="921">Yakasse-Attobrou</option>
                                <option value="922">Yakasse-Feyasse</option>
                                <option value="923">Yakasse-Me</option>
                                <option value="924">Yakpabo-Sakassou</option>
                                <option value="925">Yala (Vavoua)</option>
                                <option value="926">Yamoussoukro</option>
                                <option value="927">Yaossedougou</option>
                                <option value="928">Yaou</option>
                                <option value="929">Yapleu</option>
                                <option value="930">Yelleu</option>
                                <option value="931">Yeretiele</option>
                                <option value="932">Yezimala</option>
                                <option value="933">Yobouakro</option>
                                <option value="934">Yocoboue</option>
                                <option value="935">Yokorea</option>
                                <option value="936">Yoouredoula</option>
                                <option value="937">Yopohue</option>
                                <option value="938">Yopougon</option>
                                <option value="939">Yorobodi</option>
                                <option value="940">Yorodougou</option>
                                <option value="941">Yrozon</option>
                                <option value="942">Zagne</option>
                                <option value="943">Zagoreta-Gadouan</option>
                                <option value="944">Zagoue (Man)</option>
                                <option value="945">Zaguieta</option>
                                <option value="946">Zaguinasso</option>
                                <option value="947">Zahia</option>
                                <option value="948">Zaibo</option>
                                <option value="949">Zakoeoua</option>
                                <option value="950">Zaliohouan</option>
                                <option value="951">Zambakro</option>
                                <option value="952">Zanzansou</option>
                                <option value="953">Zanzra</option>
                                <option value="954">Zaranou</option>
                                <option value="955">Zatta</option>
                                <option value="956">Zeaglo</option>
                                <option value="957">Zebouo Nord (Daloa Nord)</option>
                                <option value="958">Zebra</option>
                                <option value="959">Zede-Dianhoun</option>
                                <option value="960">Zego</option>
                                <option value="961">Zemenafla-V</option>
                                <option value="962">Zeo</option>
                                <option value="963">Zeregbo</option>
                                <option value="964">Zialegrehoa</option>
                                <option value="965">Ziki-Dies</option>
                                <option value="966">Zikisso</option>
                                <option value="967">Ziogouine</option>
                                <option value="968">Zirifla</option>
                                <option value="969">Zokoguhe</option>
                                <option value="970">Zonneu</option>
                                <option value="971">Zorofla</option>
                                <option value="972">Zou</option>
                                <option value="973">Zouan-Hounien</option>
                                <option value="974">Zouatta</option>
                                <option value="975">Zougounefla</option>
                                <option value="976">Zoukougbeu</option>
                                <option value="977">Zoukpangbeu</option>
                                <option value="978">Zoupleu</option>
                                <option value="979">Zraluo</option>
                                <option value="980">Zro</option>
                                <option value="981">Zuenoula</option>
                            </select>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="paysnationalite" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Pays de nationalité  -- </option>
                                <option value="13">Afghanistan</option>
                                <option value="14">Afrique du Sud</option>
                                <option value="15">Albanie</option>
                                <option value="16">ALGERIE</option>
                                <option value="17">Allemagne</option>
                                <option value="18">Andore</option>
                                <option value="165">ANGLETERRE</option>
                                <option value="19">Angola</option>
                                <option value="20">Anguilla</option>
                                <option value="21">Antartique</option>
                                <option value="22">Antigua-et-Barbuda</option>
                                <option value="23">Antilles-NEERLANDAISE</option>
                                <option value="24">Arabie Saoudite</option>
                                <option value="25">Argentine</option>
                                <option value="27">Aruba</option>
                                <option value="28">Australie</option>
                                <option value="9">Australie</option>
                                <option value="29">Autriche</option>
                                <option value="30">Azerbaidjan</option>
                                <option value="31">Bahamas</option>
                                <option value="32">Bahrein</option>
                                <option value="33">Bangladesh</option>
                                <option value="34">Barbade</option>
                                <option value="35">Belgique</option>
                                <option value="36">Belize</option>
                                <option value="156">BENIN</option>
                                <option value="37">Bermudes</option>
                                <option value="38">Bhoutan</option>
                                <option value="39">Bolivie</option>
                                <option value="40">Botswana</option>
                                <option value="41">BURKINA FASO</option>
                                <option value="42">Burundi</option>
                                <option value="43">Cambodge</option>
                                <option value="44">Cameroun</option>
                                <option value="45">Canada</option>
                                <option value="46">Chine</option>
                                <option value="47">Colombie</option>
                                <option value="48">Comores</option>
                                <option value="49">Congo</option>
                                <option value="141">COTE D'IVOIRE</option>
                                <option value="50">Cuba</option>
                                <option value="51">Dominique</option>
                                <option value="52">Egypte</option>
                                <option value="53">Equateur</option>
                                <option value="54">Espagne</option>
                                <option value="55">Estonie</option>
                                <option value="161">ETHIOPIE</option>
                                <option value="56">Finlande</option>
                                <option value="155">FRANCE</option>
                                <option value="160">GABON</option>
                                <option value="57">GHANA</option>
                                <option value="58">Gibraltar</option>
                                <option value="60">Grenade</option>
                                <option value="61">Groenland</option>
                                <option value="62">Guadeloupe</option>
                                <option value="63">Guam</option>
                                <option value="64">Guatemala</option>
                                <option value="167">GUINEE</option>
                                <option value="65">Guyane</option>
                                <option value="66">Honduras</option>
                                <option value="143">INDE</option>
                                <option value="67">Irak</option>
                                <option value="68">Islande</option>
                                <option value="69">Italie</option>
                                <option value="70">Japon</option>
                                <option value="71">Jordanie</option>
                                <option value="72">Kazakhstan</option>
                                <option value="73">Kenya</option>
                                <option value="74">Kiribati</option>
                                <option value="75">Kyrgyzstan</option>
                                <option value="76">Laos</option>
                                <option value="77">Lesotho</option>
                                <option value="78">Lettonie</option>
                                <option value="79">Liban</option>
                                <option value="80">LIBERIA</option>
                                <option value="81">Libye</option>
                                <option value="82">Liechtenstein</option>
                                <option value="83">Lituanie</option>
                                <option value="84">Luxembourg</option>
                                <option value="85">Macao</option>
                                <option value="86">Madagascar</option>
                                <option value="87">Malaisie</option>
                                <option value="88">Malawi</option>
                                <option value="89">Maldives</option>
                                <option value="90">MALI</option>
                                <option value="158">MAROC</option>
                                <option value="91">Martinique</option>
                                <option value="92">Mexico</option>
                                <option value="93">Moldavie</option>
                                <option value="94">Monaco</option>
                                <option value="95">Mongolie</option>
                                <option value="96">Montserrat</option>
                                <option value="97">Mozambique</option>
                                <option value="98">Nicaragua</option>
                                <option value="99">Niger</option>
                                <option value="100">NIGERIA</option>
                                <option value="101">NIUE</option>
                                <option value="102">OUZBEKISTAN</option>
                                <option value="103">PAKISTAN</option>
                                <option value="104">PALAU</option>
                                <option value="154">PANAFRICAIN</option>
                                <option value="105">PANAMA</option>
                                <option value="107">PARAGUAY</option>
                                <option value="108">PAYS-BAS</option>
                                <option value="109">PHILIPPINES</option>
                                <option value="110">PITCAIM</option>
                                <option value="111">POLOGNE</option>
                                <option value="112">QATAR</option>
                                <option value="113">ROUMANIE</option>
                                <option value="114">RUSSIE</option>
                                <option value="115">RWANDA</option>
                                <option value="116">SAINT KITTS ET NEVIS</option>
                                <option value="117">SAINT MARIN</option>
                                <option value="118">SAMOA OCCIDENTALES</option>
                                <option value="119">SAMOA U.S.</option>
                                <option value="157">SENEGAL</option>
                                <option value="120">SINGAPOUR</option>
                                <option value="121">SLOVAQUIE</option>
                                <option value="122">SOMALIE</option>
                                <option value="123">SOUDAN</option>
                                <option value="162">SUISSE</option>
                                <option value="124">SWAZILAND</option>
                                <option value="125">SYRIE</option>
                                <option value="126">TAIWAN</option>
                                <option value="127">TANZANIE</option>
                                <option value="128">TCHAD</option>
                                <option value="166">TOGO</option>
                                <option value="129">TONGA</option>
                                <option value="163">TUNISIE</option>
                                <option value="130">TURQUIE</option>
                                <option value="131">TUVALU</option>
                                <option value="132">UKRAINE</option>
                                <option value="133">URUGUAY</option>
                                <option value="144">USA</option>
                                <option value="134">VANUATU</option>
                                <option value="135">VATICAN</option>
                                <option value="136">VENEZUELA</option>
                                <option value="137">VIETNAM</option>
                                <option value="138">YOUGOSLAVIE</option>
                                <option value="139">ZAMBIE</option>
                                <option value="140">ZIMBABWE</option>
                            </select>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search"  name="paysresidence"  class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Pays de residence  -- </option>
                                <option value="13">Afghanistan</option>
                                <option value="14">Afrique du Sud</option>
                                <option value="15">Albanie</option>
                                <option value="16">ALGERIE</option>
                                <option value="17">Allemagne</option>
                                <option value="18">Andore</option>
                                <option value="165">ANGLETERRE</option>
                                <option value="19">Angola</option>
                                <option value="20">Anguilla</option>
                                <option value="21">Antartique</option>
                                <option value="22">Antigua-et-Barbuda</option>
                                <option value="23">Antilles-NEERLANDAISE</option>
                                <option value="24">Arabie Saoudite</option>
                                <option value="25">Argentine</option>
                                <option value="27">Aruba</option>
                                <option value="28">Australie</option>
                                <option value="9">Australie</option>
                                <option value="29">Autriche</option>
                                <option value="30">Azerbaidjan</option>
                                <option value="31">Bahamas</option>
                                <option value="32">Bahrein</option>
                                <option value="33">Bangladesh</option>
                                <option value="34">Barbade</option>
                                <option value="35">Belgique</option>
                                <option value="36">Belize</option>
                                <option value="156">BENIN</option>
                                <option value="37">Bermudes</option>
                                <option value="38">Bhoutan</option>
                                <option value="39">Bolivie</option>
                                <option value="40">Botswana</option>
                                <option value="41">BURKINA FASO</option>
                                <option value="42">Burundi</option>
                                <option value="43">Cambodge</option>
                                <option value="44">Cameroun</option>
                                <option value="45">Canada</option>
                                <option value="46">Chine</option>
                                <option value="47">Colombie</option>
                                <option value="48">Comores</option>
                                <option value="49">Congo</option>
                                <option value="141">COTE D'IVOIRE</option>
                                <option value="50">Cuba</option>
                                <option value="51">Dominique</option>
                                <option value="52">Egypte</option>
                                <option value="53">Equateur</option>
                                <option value="54">Espagne</option>
                                <option value="55">Estonie</option>
                                <option value="161">ETHIOPIE</option>
                                <option value="56">Finlande</option>
                                <option value="155">FRANCE</option>
                                <option value="160">GABON</option>
                                <option value="57">GHANA</option>
                                <option value="58">Gibraltar</option>
                                <option value="60">Grenade</option>
                                <option value="61">Groenland</option>
                                <option value="62">Guadeloupe</option>
                                <option value="63">Guam</option>
                                <option value="64">Guatemala</option>
                                <option value="167">GUINEE</option>
                                <option value="65">Guyane</option>
                                <option value="66">Honduras</option>
                                <option value="143">INDE</option>
                                <option value="67">Irak</option>
                                <option value="68">Islande</option>
                                <option value="69">Italie</option>
                                <option value="70">Japon</option>
                                <option value="71">Jordanie</option>
                                <option value="72">Kazakhstan</option>
                                <option value="73">Kenya</option>
                                <option value="74">Kiribati</option>
                                <option value="75">Kyrgyzstan</option>
                                <option value="76">Laos</option>
                                <option value="77">Lesotho</option>
                                <option value="78">Lettonie</option>
                                <option value="79">Liban</option>
                                <option value="80">LIBERIA</option>
                                <option value="81">Libye</option>
                                <option value="82">Liechtenstein</option>
                                <option value="83">Lituanie</option>
                                <option value="84">Luxembourg</option>
                                <option value="85">Macao</option>
                                <option value="86">Madagascar</option>
                                <option value="87">Malaisie</option>
                                <option value="88">Malawi</option>
                                <option value="89">Maldives</option>
                                <option value="90">MALI</option>
                                <option value="158">MAROC</option>
                                <option value="91">Martinique</option>
                                <option value="92">Mexico</option>
                                <option value="93">Moldavie</option>
                                <option value="94">Monaco</option>
                                <option value="95">Mongolie</option>
                                <option value="96">Montserrat</option>
                                <option value="97">Mozambique</option>
                                <option value="98">Nicaragua</option>
                                <option value="99">Niger</option>
                                <option value="100">NIGERIA</option>
                                <option value="101">NIUE</option>
                                <option value="102">OUZBEKISTAN</option>
                                <option value="103">PAKISTAN</option>
                                <option value="104">PALAU</option>
                                <option value="154">PANAFRICAIN</option>
                                <option value="105">PANAMA</option>
                                <option value="107">PARAGUAY</option>
                                <option value="108">PAYS-BAS</option>
                                <option value="109">PHILIPPINES</option>
                                <option value="110">PITCAIM</option>
                                <option value="111">POLOGNE</option>
                                <option value="112">QATAR</option>
                                <option value="113">ROUMANIE</option>
                                <option value="114">RUSSIE</option>
                                <option value="115">RWANDA</option>
                                <option value="116">SAINT KITTS ET NEVIS</option>
                                <option value="117">SAINT MARIN</option>
                                <option value="118">SAMOA OCCIDENTALES</option>
                                <option value="119">SAMOA U.S.</option>
                                <option value="157">SENEGAL</option>
                                <option value="120">SINGAPOUR</option>
                                <option value="121">SLOVAQUIE</option>
                                <option value="122">SOMALIE</option>
                                <option value="123">SOUDAN</option>
                                <option value="162">SUISSE</option>
                                <option value="124">SWAZILAND</option>
                                <option value="125">SYRIE</option>
                                <option value="126">TAIWAN</option>
                                <option value="127">TANZANIE</option>
                                <option value="128">TCHAD</option>
                                <option value="166">TOGO</option>
                                <option value="129">TONGA</option>
                                <option value="163">TUNISIE</option>
                                <option value="130">TURQUIE</option>
                                <option value="131">TUVALU</option>
                                <option value="132">UKRAINE</option>
                                <option value="133">URUGUAY</option>
                                <option value="144">USA</option>
                                <option value="134">VANUATU</option>
                                <option value="135">VATICAN</option>
                                <option value="136">VENEZUELA</option>
                                <option value="137">VIETNAM</option>
                                <option value="138">YOUGOSLAVIE</option>
                                <option value="139">ZAMBIE</option>
                                <option value="140">ZIMBABWE</option>
                            </select>
                        </div><br>
                    </div>

                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="villeresidence" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Ville de residence  -- </option>
                                <option value="1">Abengourou</option>
                                <option value="2">Abie</option>
                                <option value="3">Abigui</option>
                                <option value="4">Abobo</option>
                                <option value="5">Aboisso</option>
                                <option value="6">Aboisso-Comoe</option>
                                <option value="7">Abolikro</option>
                                <option value="8">Abongoua</option>
                                <option value="10">Aboude</option>
                                <option value="11">Abra</option>
                                <option value="12">Abradinou</option>
                                <option value="13">Abronamoue</option>
                                <option value="14">Aby (Aboisso)</option>
                                <option value="15">Aby-Adjouan-Mohoua</option>
                                <option value="16">Adaou</option>
                                <option value="17">Addah</option>
                                <option value="18">Adesse</option>
                                <option value="19">Adiake</option>
                                <option value="20">Adjame</option>
                                <option value="21">Adjamene</option>
                                <option value="22">Adjouan</option>
                                <option value="23">Adouakouakro</option>
                                <option value="24">Adoukro</option>
                                <option value="25">Adzope</option>
                                <option value="26">Affalikro</option>
                                <option value="27">Affery</option>
                                <option value="28">Affienou</option>
                                <option value="29">Afotobo</option>
                                <option value="30">Agbaou-Aheoua</option>
                                <option value="31">Agboville</option>
                                <option value="32">Agnia</option>
                                <option value="33">Agnibilekrou</option>
                                <option value="34">Agou</option>
                                <option value="35">Ahigbe-Koffikro</option>
                                <option value="36">Ahouabo-Bouape</option>
                                <option value="37">Ahouakro</option>
                                <option value="38">Ahouanou</option>
                                <option value="39">Ahougnanssou</option>
                                <option value="40">Ahougnassou-Alahou</option>
                                <option value="41">Akoboissue</option>
                                <option value="42">Akounougbe</option>
                                <option value="43">Akoupe</option>
                                <option value="44">Akoupe-Zeudji</option>
                                <option value="45">Akoure</option>
                                <option value="1143">Akpassanou</option>
                                <option value="46">Akradio</option>
                                <option value="47">Akridou-Ladde</option>
                                <option value="48">Alepe</option>
                                <option value="49">Allangouassou</option>
                                <option value="1126">ALLOSSO</option>
                                <option value="50">Allosso 2</option>
                                <option value="51">Amanvi</option>
                                <option value="52">Amelekia</option>
                                <option value="53">Amian Kouassikro</option>
                                <option value="54">Amoriakro</option>
                                <option value="55">Ananda (Daoukro)</option>
                                <option value="57">Ananguie (Adzope)</option>
                                <option value="56">Ananguie (Agboville)</option>
                                <option value="58">Ande</option>
                                <option value="59">Ando-Kekrenou</option>
                                <option value="1142">Angoda</option>
                                <option value="61">Anianou</option>
                                <option value="62">Aniassue</option>
                                <option value="63">Annepe</option>
                                <option value="64">Anno (Agboville)</option>
                                <option value="65">Anoumaba</option>
                                <option value="994">Antilles-nerlandaise</option>
                                <option value="66">Anyama</option>
                                <option value="67">Appimandoum</option>
                                <option value="68">Appoisso</option>
                                <option value="69">Appouasso</option>
                                <option value="70">Apprompron-Afewa</option>
                                <option value="71">Apprompronou</option>
                                <option value="995">Arabie Saoudite</option>
                                <option value="996">Argentine</option>
                                <option value="72">Arikokaha</option>
                                <option value="73">Arokpa</option>
                                <option value="74">Arrah</option>
                                <option value="998">Aruba</option>
                                <option value="75">Assahara</option>
                                <option value="76">Assale-Kouassikro</option>
                                <option value="77">Assandre</option>
                                <option value="78">Assie-Koumassi</option>
                                <option value="79">Assikoi</option>
                                <option value="80">Assinie-Mafia</option>
                                <option value="81">Assuefry</option>
                                <option value="82">Attecoube</option>
                                <option value="83">Attiegouakro</option>
                                <option value="84">Attiekoi</option>
                                <option value="85">Attiguehi</option>
                                <option value="86">Attinguie</option>
                                <option value="87">Attobrou</option>
                                <option value="88">Attokro</option>
                                <option value="89">Attoutou A</option>
                                <option value="1000">Autriche</option>
                                <option value="90">Ayame</option>
                                <option value="91">Ayaou-Sran</option>
                                <option value="92">Ayenouan</option>
                                <option value="93">Azaguie</option>
                                <option value="1001">Azerbaidjan</option>
                                <option value="94">Babakro</option>
                                <option value="95">Bacanda</option>
                                <option value="96">Bacon</option>
                                <option value="97">Badikaha</option>
                                <option value="98">Bagohouo</option>
                                <option value="1002">BAHAMAS</option>
                                <option value="1003">BAHREIN</option>
                                <option value="99">Bakandesso-Sogbeni</option>
                                <option value="100">Bakanou</option>
                                <option value="101">Bako</option>
                                <option value="102">Bakoubli</option>
                                <option value="103">Baleko</option>
                                <option value="104">Bambalouma</option>
                                <option value="105">Bamoro</option>
                                <option value="106">Bandakagni Tomora</option>
                                <option value="107">Bandakagni-Sokoura</option>
                                <option value="108">Bandiahi</option>
                                <option value="1004">BANGLADESH</option>
                                <option value="109">Bangolo</option>
                                <option value="110">Bangoua</option>
                                <option value="111">Banneu</option>
                                <option value="112">Bannonfla</option>
                                <option value="1005">BARBADE</option>
                                <option value="113">Bassawa</option>
                                <option value="114">Baya (Kouto)</option>
                                <option value="115">Bayota</option>
                                <option value="116">Bazra-Nattis</option>
                                <option value="117">Bazre</option>
                                <option value="118">Becedi Brignan</option>
                                <option value="119">Becouefin</option>
                                <option value="120">Bediala</option>
                                <option value="121">Bedy-Goazon</option>
                                <option value="122">Begbessou</option>
                                <option value="1006">BELGIQUE</option>
                                <option value="1007">BELIZE</option>
                                <option value="123">Belleville Bouake)</option>
                                <option value="124">Belleville Zoukougbeu)</option>
                                <option value="125">Bengassou</option>
                                <option value="126">Beoue-Zibiao</option>
                                <option value="127">Beoumi</option>
                                <option value="128">Bereni Dialla</option>
                                <option value="129">Beriaboukro</option>
                                <option value="1008">Bermudes</option>
                                <option value="130">Bettie</option>
                                <option value="1009">Bhoutan</option>
                                <option value="131">Biakale</option>
                                <option value="132">Biankouma</option>
                                <option value="133">Bianouan</option>
                                <option value="134">Biasso</option>
                                <option value="135">Bieby</option>
                                <option value="136">Bilimono</option>
                                <option value="137">Bin-Houye</option>
                                <option value="138">Binao-Boussoue</option>
                                <option value="139">Bingerville</option>
                                <option value="140">Binzra</option>
                                <option value="142">Blanfla</option>
                                <option value="143">Blapleu</option>
                                <option value="144">Blenimeouin</option>
                                <option value="145">Blessegue</option>
                                <option value="146">Blolequin</option>
                                <option value="147">Blotile</option>
                                <option value="148">Boahia</option>
                                <option value="149">Bobi</option>
                                <option value="150">Bobo-Tienigbe</option>
                                <option value="151">Bocanda</option>
                                <option value="152">Bodo (Didievi)</option>
                                <option value="153">Bodo (Tiassale)</option>
                                <option value="154">Bodokro</option>
                                <option value="155">Bogofa</option>
                                <option value="156">Bogouine</option>
                                <option value="157">Boguedia</option>
                                <option value="158">Bohobli</option>
                                <option value="159">Bokala-Niampondougou</option>
                                <option value="160">Boli</option>
                                <option value="1010">Bolivie</option>
                                <option value="161">Bolona</option>
                                <option value="162">Bonahouin</option>
                                <option value="163">Bondo</option>
                                <option value="164">Bondoukou</option>
                                <option value="165">Bongo (Grand-Bassam)</option>
                                <option value="166">Bongouanou</option>
                                <option value="167">Bonguera</option>
                                <option value="168">Bonieredougou</option>
                                <option value="169">Bonikro</option>
                                <option value="170">Bonon</option>
                                <option value="171">Bonoua</option>
                                <option value="172">Bonoufla</option>
                                <option value="173">Booko</option>
                                <option value="174">Boron (Korhogo)</option>
                                <option value="175">Borotou</option>
                                <option value="176">Borotou-Koro</option>
                                <option value="177">Botinde</option>
                                <option value="178">Botro</option>
                                <option value="1011">Botswana</option>
                                <option value="179">Bouadikro</option>
                                <option value="180">Bouafle</option>
                                <option value="187">Bouake</option>
                                <option value="181">Bouandougou</option>
                                <option value="182">Bouboury</option>
                                <option value="183">Boudepe</option>
                                <option value="184">Bougou</option>
                                <option value="185">Bougousso</option>
                                <option value="186">Bouko</option>
                                <option value="188">Bouna</option>
                                <option value="189">Boundiali</option>
                                <option value="190">Boyaokro</option>
                                <option value="191">Bozi</option>
                                <option value="192">Bricolo</option>
                                <option value="193">Brihiri</option>
                                <option value="194">Brima</option>
                                <option value="195">Brobo</option>
                                <option value="196">Brofodoume</option>
                                <option value="197">Broma</option>
                                <option value="198">Brou Ahoussoukro</option>
                                <option value="199">Brou Akpaoussou</option>
                                <option value="200">Broubrou</option>
                                <option value="201">Broudoukou-Penda</option>
                                <option value="1012">BURKINA FASO</option>
                                <option value="1013">Burundi</option>
                                <option value="202">Buyo</option>
                                <option value="1014">Cambodge</option>
                                <option value="1015">Cameroun</option>
                                <option value="1016">Canada</option>
                                <option value="203">Cechi</option>
                                <option value="204">Chiepo</option>
                                <option value="1017">Chine</option>
                                <option value="205">Cocody</option>
                                <option value="1018">Colombie</option>
                                <option value="1019">Comores</option>
                                <option value="1020">Congo</option>
                                <option value="206">Cosrou</option>
                                <option value="1021">Cuba</option>
                                <option value="207">Dabadougou-Mafele</option>
                                <option value="208">Dabakala</option>
                                <option value="209">Dabou</option>
                                <option value="210">Dabouyo</option>
                                <option value="211">Dadiasse</option>
                                <option value="212">Dagba</option>
                                <option value="213">Dah-Zagna</option>
                                <option value="214">Dahiepa-Kehi</option>
                                <option value="215">Dahiri</option>
                                <option value="216">Dairo-Didizo</option>
                                <option value="217">Dakouritrohoin</option>
                                <option value="218">Dakpadou</option>
                                <option value="219">Daleu</option>
                                <option value="1123">DALOA</option>
                                <option value="220">Dame</option>
                                <option value="221">Danane</option>
                                <option value="222">Dananon</option>
                                <option value="223">Dandougou</option>
                                <option value="224">Danguira</option>
                                <option value="225">Dania</option>
                                <option value="226">Danoa</option>
                                <option value="227">Dantogo</option>
                                <option value="228">Daoukro</option>
                                <option value="229">Dapeoua</option>
                                <option value="230">Dapo-Iboke</option>
                                <option value="231">Dassioko</option>
                                <option value="232">Dassoungboho</option>
                                <option value="233">Debete</option>
                                <option value="234">Dedegbeu</option>
                                <option value="235">Detroya</option>
                                <option value="236">Diabo</option>
                                <option value="237">Diahouin</option>
                                <option value="238">Dialakoro</option>
                                <option value="239">Diamakani</option>
                                <option value="240">Diamarakro</option>
                                <option value="241">Diamba</option>
                                <option value="242">Diangobo (Abengourou)</option>
                                <option value="243">Diangobo (Yakasse-Attobrou)</option>
                                <option value="244">Diangokro</option>
                                <option value="245">Dianra</option>
                                <option value="246">Dianra-Village</option>
                                <option value="247">Diarabana</option>
                                <option value="248">Diasson</option>
                                <option value="249">Diawala</option>
                                <option value="250">Dibobly</option>
                                <option value="251">Diboke</option>
                                <option value="252">Dibri-Assirikro</option>
                                <option value="253">Didievi</option>
                                <option value="254">Didoko</option>
                                <option value="255">Diegonefla</option>
                                <option value="256">Diemeressedougou</option>
                                <option value="257">Dieouzon</option>
                                <option value="258">Dieviessou</option>
                                <option value="259">Digbapia</option>
                                <option value="260">Dignago</option>
                                <option value="261">Dikodougou</option>
                                <option value="262">Dimandougou</option>
                                <option value="263">Dimbokro</option>
                                <option value="264">Dinaoudi</option>
                                <option value="265">Dingbi</option>
                                <option value="266">Dioman</option>
                                <option value="267">Dioulatiedougou</option>
                                <option value="268">Diourouzon</option>
                                <option value="269">Divo</option>
                                <option value="1130">Djamadjoké</option>
                                <option value="271">Djapadji</option>
                                <option value="272">Djebonouan</option>
                                <option value="273">Djekanou</option>
                                <option value="274">Djibrosso</option>
                                <option value="275">Djidji</option>
                                <option value="276">Djoro-Djoro</option>
                                <option value="277">Djouroutou</option>
                                <option value="278">Doba</option>
                                <option value="279">Dobre</option>
                                <option value="280">Dogbo</option>
                                <option value="281">Doh</option>
                                <option value="282">Doke</option>
                                <option value="283">Domangbeu</option>
                                <option value="1022">Dominique</option>
                                <option value="284">Doropo</option>
                                <option value="285">Douele</option>
                                <option value="286">Dougroupalegnoa</option>
                                <option value="287">Doukouya</option>
                                <option value="288">Doukouyo</option>
                                <option value="289">Dousseba</option>
                                <option value="290">Dribouo</option>
                                <option value="291">Dualla</option>
                                <option value="292">Duekoue</option>
                                <option value="293">Duffrebo</option>
                                <option value="294">Duonfla</option>
                                <option value="295">Dzeudji</option>
                                <option value="296">Ebikro-N?dakro</option>
                                <option value="297">Ebilassokro</option>
                                <option value="298">Ebonou</option>
                                <option value="299">Eboue (Aboisso)</option>
                                <option value="1023">Egypte</option>
                                <option value="300">Ehuasso</option>
                                <option value="301">Ellibou-Badasso</option>
                                <option value="302">Eloka</option>
                                <option value="303">Ettrokro</option>
                                <option value="304">Etueboue</option>
                                <option value="305">Etuessika</option>
                                <option value="306">Facobly</option>
                                <option value="307">Fadiadougou</option>
                                <option value="308">Famienkro</option>
                                <option value="309">Fapaha-Mbinguebougou</option>
                                <option value="310">Faraba (Mankono)</option>
                                <option value="311">Fengolo</option>
                                <option value="312">Feremandougou</option>
                                <option value="313">Ferentela</option>
                                <option value="314">Ferkessedougou</option>
                                <option value="315">Finessiguedougou</option>
                                <option value="316">Fizanlouma</option>
                                <option value="317">Flakiedougou</option>
                                <option value="318">Foto-Kouamekro</option>
                                <option value="319">Foumbolo</option>
                                <option value="320">Foungbesso</option>
                                <option value="321">Frambo</option>
                                <option value="322">Fresco</option>
                                <option value="323">Fronan</option>
                                <option value="324">Gabia (Issia)</option>
                                <option value="325">Gabia (Oume)</option>
                                <option value="326">Gabiadji</option>
                                <option value="327">Gadago</option>
                                <option value="328">Gagnoa</option>
                                <option value="329">Gagny</option>
                                <option value="1139">gagore</option>
                                <option value="1137">galebou</option>
                                <option value="331">Ganaoni</option>
                                <option value="332">Ganhoue</option>
                                <option value="333">Ganleu</option>
                                <option value="334">Gaote</option>
                                <option value="335">Gbablasso</option>
                                <option value="336">Gbadjie</option>
                                <option value="337">Gbagbam</option>
                                <option value="338">Gbameledougo</option>
                                <option value="339">Gbangbegouine</option>
                                <option value="340">Gbangbegouine-Yati</option>
                                <option value="341">Gbapleu</option>
                                <option value="342">Gbatongouin</option>
                                <option value="343">Gbazoa</option>
                                <option value="344">Gbekekro</option>
                                <option value="345">Gbeleban</option>
                                <option value="346">Gbetogo</option>
                                <option value="347">Gbliglo</option>
                                <option value="348">Gbofesso-Sama</option>
                                <option value="349">Gbogolo</option>
                                <option value="350">Gboguhe</option>
                                <option value="351">Gbon</option>
                                <option value="352">Gbon-Houye</option>
                                <option value="353">Gbongaha</option>
                                <option value="1136">gbongaha</option>
                                <option value="354">Gbonne</option>
                                <option value="355">Glangleu</option>
                                <option value="356">Gligbeuadji</option>
                                <option value="357">Gloplou</option>
                                <option value="358">Gnagbodougnoa</option>
                                <option value="359">Gnagboya</option>
                                <option value="360">Gnago</option>
                                <option value="361">Gnakouboue</option>
                                <option value="1128">gnamangui</option>
                                <option value="362">Gnamanou</option>
                                <option value="363">Gnato</option>
                                <option value="364">Gnegrouboue</option>
                                <option value="365">Gnogboyo</option>
                                <option value="366">Godelilie 1</option>
                                <option value="367">Gogne</option>
                                <option value="368">Gogo</option>
                                <option value="369">Gogoguhe</option>
                                <option value="370">Gohitafla</option>
                                <option value="371">Gohouo-Zagna</option>
                                <option value="372">Gomon</option>
                                <option value="373">Gonate</option>
                                <option value="374">Gopoupleu</option>
                                <option value="375">Gotongouine 1</option>
                                <option value="376">Gouane</option>
                                <option value="377">Goudi</option>
                                <option value="378">Goudouko</option>
                                <option value="379">Gouekan</option>
                                <option value="380">Gouenzou</option>
                                <option value="381">Gouine</option>
                                <option value="382">Goulaleu</option>
                                <option value="383">Goulia</option>
                                <option value="384">Goumere</option>
                                <option value="385">Gouotro</option>
                                <option value="386">Gourane</option>
                                <option value="387">Grabo</option>
                                <option value="388">Gragba-Dagolilie</option>
                                <option value="389">Grand Alepe</option>
                                <option value="397">Grand-Akoudzin</option>
                                <option value="390">Grand-Bassam</option>
                                <option value="391">Grand-Bereby</option>
                                <option value="392">Grand-Lahou</option>
                                <option value="393">Grand-Morie</option>
                                <option value="394">Grand-Pin</option>
                                <option value="395">Grand-Yapo</option>
                                <option value="396">Grand-Zattry</option>
                                <option value="398">Gregbeu</option>
                                <option value="399">Grihiri</option>
                                <option value="400">Grobiakoko</option>
                                <option value="401">Grobonou-Dan</option>
                                <option value="402">Guehiebly</option>
                                <option value="403">Guekpe</option>
                                <option value="404">Guenimanzo</option>
                                <option value="405">Guepahouo</option>
                                <option value="406">Guessabo</option>
                                <option value="407">Guessiguie</option>
                                <option value="408">Gueyo</option>
                                <option value="409">Guezon (Duekoue) (departement de Duekoue)</option>
                                <option value="410">Guezon (Kouibly) (departement de Kouibly)</option>
                                <option value="411">Guezon-Tahouake</option>
                                <option value="412">Guiamapleu</option>
                                <option value="413">Guiberoua</option>
                                <option value="414">Guiembe</option>
                                <option value="415">Guiende</option>
                                <option value="416">Guiglo</option>
                                <option value="417">Guimeyo</option>
                                <option value="418">Guinglo-Gbean</option>
                                <option value="419">Guinglo-Tahouake</option>
                                <option value="420">Guinteguela</option>
                                <option value="421">Guitry</option>
                                <option value="662">Guyakro</option>
                                <option value="422">Herebo</option>
                                <option value="423">Hermankono-Dies</option>
                                <option value="424">Hermankono-Garo</option>
                                <option value="425">Hire</option>
                                <option value="426">Huafla</option>
                                <option value="427">Iboguhe</option>
                                <option value="428">Iboke</option>
                                <option value="429">Idibouo-Zepreguhe (Daloa Est)</option>
                                <option value="430">Ipouagui</option>
                                <option value="431">Iriefla</option>
                                <option value="432">Irobo</option>
                                <option value="433">Iroporia</option>
                                <option value="434">Issia</option>
                                <option value="435">Jacqueville</option>
                                <option value="436">Kaade</option>
                                <option value="437">Kadeko</option>
                                <option value="438">Kadioha</option>
                                <option value="439">Kafoudougou-Bambarasso</option>
                                <option value="440">Kagbolodougou</option>
                                <option value="441">Kahin-Zarabaon</option>
                                <option value="442">Kakpi</option>
                                <option value="443">Kalaha</option>
                                <option value="444">Kalamon</option>
                                <option value="445">Kaloa</option>
                                <option value="446">Kamala</option>
                                <option value="447">Kamalo</option>
                                <option value="448">Kamoro</option>
                                <option value="449">Kanagonon</option>
                                <option value="450">Kanakono</option>
                                <option value="451">Kanawolo</option>
                                <option value="452">Kani</option>
                                <option value="453">Kaniasso</option>
                                <option value="454">Kanoroba</option>
                                <option value="455">Kanzra</option>
                                <option value="456">Kaouara</option>
                                <option value="457">Karakoro</option>
                                <option value="458">Kassere</option>
                                <option value="459">Katchire-Essekro</option>
                                <option value="460">Katiali</option>
                                <option value="461">Katimassou</option>
                                <option value="462">Katiola</option>
                                <option value="463">Kato (Seguela)</option>
                                <option value="464">Katogo</option>
                                <option value="465">Kawolo-Sobara</option>
                                <option value="466">Ke-Bouebo</option>
                                <option value="467">Kebi</option>
                                <option value="468">Keibla</option>
                                <option value="469">Keibly</option>
                                <option value="470">Ketesso</option>
                                <option value="471">Ketro-Bassam</option>
                                <option value="472">Kibouo</option>
                                <option value="473">Kiele</option>
                                <option value="474">Kiemou</option>
                                <option value="1133">kimbirila nord</option>
                                <option value="476">Kimbirila Sud</option>
                                <option value="477">Klan</option>
                                <option value="478">Kodiossou</option>
                                <option value="479">Koffi-Amonkro</option>
                                <option value="480">Koffikro-Affema</option>
                                <option value="481">Koko (Bouake)</option>
                                <option value="482">Koko (Korhogo)</option>
                                <option value="483">Kokolopozo</option>
                                <option value="484">Kokomian</option>
                                <option value="485">Kokoumba</option>
                                <option value="486">Kokoun</option>
                                <option value="487">Kokumbo</option>
                                <option value="488">Kolia</option>
                                <option value="489">Kombolokoura</option>
                                <option value="490">Komborodougou</option>
                                <option value="491">Konan Kokorekro</option>
                                <option value="492">Konan-Ndrikro</option>
                                <option value="493">Konandikro</option>
                                <option value="494">Kondiebouma</option>
                                <option value="495">Kondokro-Djassanou</option>
                                <option value="496">Kondossou</option>
                                <option value="497">Kondrobo</option>
                                <option value="498">Kong</option>
                                <option value="499">Kongasso</option>
                                <option value="500">Kongoti</option>
                                <option value="501">Koni</option>
                                <option value="502">Kononfla</option>
                                <option value="503">Koonan</option>
                                <option value="504">Koreahinou</option>
                                <option value="539">Korhogo</option>
                                <option value="505">Koro</option>
                                <option value="506">Korokaha</option>
                                <option value="507">Korokopla</option>
                                <option value="508">Koroumba</option>
                                <option value="509">Kossandji</option>
                                <option value="510">Kossehoa</option>
                                <option value="511">Kossihouen</option>
                                <option value="512">Kossou</option>
                                <option value="513">Kotobi</option>
                                <option value="514">Kotogwanda</option>
                                <option value="515">Kotronou</option>
                                <option value="516">Koua</option>
                                <option value="517">Kouadioblekro</option>
                                <option value="518">Kouadiokro</option>
                                <option value="519">Kouafo-Akidom</option>
                                <option value="520">Kouakro</option>
                                <option value="521">Kouamefla</option>
                                <option value="522">Kouan-Houle</option>
                                <option value="524">Kouassi Kouassikro</option>
                                <option value="523">Kouassi-Datekro</option>
                                <option value="525">Kouassi-N?Dawa</option>
                                <option value="526">Kouassia-Nanguni</option>
                                <option value="527">Kouatta</option>
                                <option value="528">Koudougou</option>
                                <option value="529">Kouetinfla</option>
                                <option value="530">Kouibly</option>
                                <option value="531">Koulale</option>
                                <option value="532">Koulikoro (Biankouma)</option>
                                <option value="533">Koumassi</option>
                                <option value="534">Koumbala</option>
                                <option value="535">Koun-Fao</option>
                                <option value="536">Kounahiri</option>
                                <option value="537">Kounzie</option>
                                <option value="538">Kouto</option>
                                <option value="540">Koutouba</option>
                                <option value="541">Koyekro</option>
                                <option value="542">Koziayo 1</option>
                                <option value="543">Kpada</option>
                                <option value="544">Kpana-Kalo</option>
                                <option value="545">Kpanan</option>
                                <option value="546">Kpanpleu-Sin-Houye</option>
                                <option value="547">Kpapekou</option>
                                <option value="548">Kpata</option>
                                <option value="549">Kpebo</option>
                                <option value="550">Kpote</option>
                                <option value="551">Kpouebo</option>
                                <option value="552">Kregbe</option>
                                <option value="553">Kreuzoukoue</option>
                                <option value="554">Krindjabo</option>
                                <option value="555">Krofoinsou</option>
                                <option value="556">Labokro</option>
                                <option value="557">Lafokpokaha</option>
                                <option value="558">Lahou Kpandah</option>
                                <option value="559">Lahouda</option>
                                <option value="560">Lakota</option>
                                <option value="561">Lamekaha</option>
                                <option value="562">Lamekaha</option>
                                <option value="563">Landiougou</option>
                                <option value="564">Languibonou</option>
                                <option value="565">Laoudi-Ba</option>
                                <option value="566">Larabia</option>
                                <option value="567">Lataha</option>
                                <option value="568">Lauzoua</option>
                                <option value="569">Leleble</option>
                                <option value="570">Lengbre</option>
                                <option value="571">Lessiri</option>
                                <option value="572">Ligrohoin</option>
                                <option value="573">Liliy</option>
                                <option value="1129">LILIYO</option>
                                <option value="574">Lissolo-Sobara</option>
                                <option value="575">Lobakuya</option>
                                <option value="576">Lobogba</option>
                                <option value="577">Logbonou</option>
                                <option value="578">Logouale</option>
                                <option value="579">Logroan</option>
                                <option value="581">Lolobo</option>
                                <option value="1141">LOMOKANKRO</option>
                                <option value="582">Lopou</option>
                                <option value="583">Loukou-Yaokro</option>
                                <option value="584">Loviguie</option>
                                <option value="585">Luenoufla</option>
                                <option value="1145">M'BAHIAKRO</option>
                                <option value="593">Mabehiri 1</option>
                                <option value="594">Mabouo</option>
                                <option value="595">Madinani</option>
                                <option value="596">Mafere</option>
                                <option value="597">Maguehio</option>
                                <option value="598">Mahale</option>
                                <option value="599">Mahandiana Soukourani</option>
                                <option value="1132">MAHANDIANA-SOKOURANI</option>
                                <option value="600">Mahandougou</option>
                                <option value="601">Mahapleu</option>
                                <option value="602">Mahino</option>
                                <option value="603">Makey-Liboli</option>
                                <option value="604">Mamini</option>
                                <option value="605">Maminigui</option>
                                <option value="606">Man</option>
                                <option value="607">Manabri</option>
                                <option value="608">Mandougou</option>
                                <option value="609">Manfla</option>
                                <option value="610">Mangouin-Yrongouin</option>
                                <option value="611">Mankono</option>
                                <option value="612">Manzanouan</option>
                                <option value="613">Marabadiassa</option>
                                <option value="614">Marandallah</option>
                                <option value="615">Marcory</option>
                                <option value="616">Massadougou</option>
                                <option value="617">Massala (Seguela)</option>
                                <option value="618">Massala-Barala</option>
                                <option value="619">Mayo</option>
                                <option value="586">Mbahiakro</option>
                                <option value="587">Mbatto</option>
                                <option value="588">Mbengue</option>
                                <option value="589">Mbonoua</option>
                                <option value="590">MBorla-Dioulasso</option>
                                <option value="591">Mbrou</option>
                                <option value="620">Meagui</option>
                                <option value="621">Medon</option>
                                <option value="622">Mekro</option>
                                <option value="623">Memni</option>
                                <option value="624">Meneke</option>
                                <option value="625">Meo</option>
                                <option value="626">Miadzin</option>
                                <option value="627">Mignore</option>
                                <option value="628">Minfla</option>
                                <option value="629">Minignan</option>
                                <option value="630">Moape</option>
                                <option value="631">Molonou</option>
                                <option value="632">Molonou-Ble</option>
                                <option value="633">Momirasso</option>
                                <option value="634">Monga</option>
                                <option value="635">Mongbara</option>
                                <option value="636">Monoko Zohi</option>
                                <option value="637">Monongo</option>
                                <option value="638">Mont Korhogo</option>
                                <option value="639">Morokinkro</option>
                                <option value="640">Morokro</option>
                                <option value="641">Morondo</option>
                                <option value="642">Moronou</option>
                                <option value="643">Moussobadougou</option>
                                <option value="592">Mpossa</option>
                                <option value="1144">N'GATTAKRO</option>
                                <option value="1134">N'GOLOBLASSO</option>
                                <option value="667">Nafana</option>
                                <option value="668">Nafana (Prikro)</option>
                                <option value="669">Nafana Sienso</option>
                                <option value="670">Nafoun</option>
                                <option value="671">Nahio</option>
                                <option value="672">Namahounondougou</option>
                                <option value="673">Namane</option>
                                <option value="674">Namassi</option>
                                <option value="675">Nambingue</option>
                                <option value="676">Nandjele-Segbere</option>
                                <option value="677">Napie</option>
                                <option value="678">Nassian</option>
                                <option value="644">Ndakro</option>
                                <option value="645">Ndenou</option>
                                <option value="646">Ndeou</option>
                                <option value="647">Ndouci</option>
                                <option value="648">Ndouffoukankro</option>
                                <option value="649">Ndoukahakro</option>
                                <option value="679">Nebo (Divo)</option>
                                <option value="680">Neguepie</option>
                                <option value="681">Neko</option>
                                <option value="682">Nezobly</option>
                                <option value="650">Ngangoro-Attoutou</option>
                                <option value="651">NGanon</option>
                                <option value="652">NGattadolikro</option>
                                <option value="653">NGattakro</option>
                                <option value="654">NGban Kasse</option>
                                <option value="655">Ngohinou</option>
                                <option value="656">NGoloblasso</option>
                                <option value="657">Ngribo-Takikro</option>
                                <option value="658">Nguessan-Brindoukro</option>
                                <option value="659">NGuessankro</option>
                                <option value="661">Nguieme</option>
                                <option value="683">Niable</option>
                                <option value="684">Niakaramandougou</option>
                                <option value="685">Niakoblognoa</option>
                                <option value="686">Niamana (Odienne)</option>
                                <option value="687">Niambezaria</option>
                                <option value="688">Niazaroko</option>
                                <option value="689">Nidrou</option>
                                <option value="690">Niediekaha</option>
                                <option value="691">Nielle</option>
                                <option value="692">Niemene</option>
                                <option value="693">Nigui Assoko</option>
                                <option value="694">Nigui Saff</option>
                                <option value="695">Niofoin</option>
                                <option value="696">Niokosso</option>
                                <option value="697">Niorouhio</option>
                                <option value="698">Nioulde</option>
                                <option value="699">Nizahon</option>
                                <option value="700">Noe</option>
                                <option value="701">Nofou</option>
                                <option value="702">Nouamou</option>
                                <option value="1131">NOUAMOUE</option>
                                <option value="663">NZecrezessou</option>
                                <option value="664">NZi-NZiblekro</option>
                                <option value="665">NZianouan</option>
                                <option value="666">NZue-Kokore</option>
                                <option value="703">Odienne</option>
                                <option value="704">Offa (Agboville)</option>
                                <option value="705">Offoumpo</option>
                                <option value="706">Oghlwapo</option>
                                <option value="707">Ogoudou</option>
                                <option value="708">Okrouyo</option>
                                <option value="709">Olodio</option>
                                <option value="710">Ondefidouo</option>
                                <option value="711">Ono</option>
                                <option value="712">Orbaff</option>
                                <option value="713">Oress-Krobou</option>
                                <option value="715">Ottope</option>
                                <option value="716">Ouangolodougou</option>
                                <option value="717">Ouaninou</option>
                                <option value="718">Ouattaradougou</option>
                                <option value="719">Ouedallah</option>
                                <option value="720">Ouelle</option>
                                <option value="721">Oueoulo</option>
                                <option value="722">Ouffouediekro</option>
                                <option value="723">Oume</option>
                                <option value="724">Oupoyo</option>
                                <option value="725">Ouragahio</option>
                                <option value="726">Oureguekaha</option>
                                <option value="727">Ousrou</option>
                                <option value="728">Ouyably-Gnondrou</option>
                                <option value="729">Pacobo</option>
                                <option value="730">Pakouabo</option>
                                <option value="731">Pambasso-Diedou</option>
                                <option value="732">Pangalakaha</option>
                                <option value="733">Paoufla</option>
                                <option value="734">Papara (Tengrela)</option>
                                <option value="735">Para (Tabou)</option>
                                <option value="736">Pauly</option>
                                <option value="737">Peguekaha</option>
                                <option value="738">Pehe</option>
                                <option value="739">Pehekanhouebli</option>
                                <option value="740">Pelezi</option>
                                <option value="741">Petigoa 2</option>
                                <option value="742">Petit Guiglo</option>
                                <option value="743">Pinda-Boroko</option>
                                <option value="744">Pinhou</option>
                                <option value="745">Pitiengomon</option>
                                <option value="746">Plateau</option>
                                <option value="747">Pleuro</option>
                                <option value="748">Podiagouine</option>
                                <option value="749">Podoue</option>
                                <option value="750">Pogo (Ouangolodougou)</option>
                                <option value="751">Pokreagui</option>
                                <option value="752">Ponondougou</option>
                                <option value="1127">PORT-BOUET</option>
                                <option value="753">Port-Bouet</option>
                                <option value="754">Poumbly</option>
                                <option value="755">Pranouan</option>
                                <option value="756">Prikro</option>
                                <option value="757">Raviart</option>
                                <option value="759">Rubino</option>
                                <option value="760">Saboudougou</option>
                                <option value="761">Sago</option>
                                <option value="762">Sahebo</option>
                                <option value="763">Sahuye</option>
                                <option value="764">Saioua</option>
                                <option value="766">Sakahouo</option>
                                <option value="765">Sakassou</option>
                                <option value="767">Sakre</option>
                                <option value="768">Samango</option>
                                <option value="769">Samanza</option>
                                <option value="770">Samatiguila</option>
                                <option value="771">Saminikro</option>
                                <option value="772">San-Pedro</option>
                                <option value="773">Sandala</option>
                                <option value="774">Sandegue</option>
                                <option value="775">Sandougou-Soba</option>
                                <option value="776">Sangouine</option>
                                <option value="777">Sankadiokro</option>
                                <option value="778">Santa</option>
                                <option value="780">Sapli-Sepingo</option>
                                <option value="781">Sarhala</option>
                                <option value="782">Sassako Begnini</option>
                                <option value="783">Sassandra</option>
                                <option value="784">Satama-Sokoro</option>
                                <option value="785">Satama-Sokoura</option>
                                <option value="786">Satikran</option>
                                <option value="787">Satroko</option>
                                <option value="788">Sebedoufla</option>
                                <option value="789">Seguela</option>
                                <option value="790">Seguelon</option>
                                <option value="791">Seileu</option>
                                <option value="792">Seitifla</option>
                                <option value="793">Semien</option>
                                <option value="794">Sepikaha</option>
                                <option value="795">Serebissou</option>
                                <option value="796">Serihi</option>
                                <option value="1138">serihio</option>
                                <option value="797">Seydougou</option>
                                <option value="798">Sianhala</option>
                                <option value="799">Siansoba</option>
                                <option value="800">Siempurgo</option>
                                <option value="801">Sifie</option>
                                <option value="802">Sikensi</option>
                                <option value="803">Sikolo</option>
                                <option value="804">Silakoro</option>
                                <option value="805">Sinematiali</option>
                                <option value="806">Sinfra</option>
                                <option value="807">Singo</option>
                                <option value="808">Siolokaha</option>
                                <option value="809">Sipilou</option>
                                <option value="810">Sirana</option>
                                <option value="811">Sirasso</option>
                                <option value="812">Siriho</option>
                                <option value="813">Sissedougou</option>
                                <option value="814">Soaekpe-Douedy</option>
                                <option value="815">Soba (Korhogo)</option>
                                <option value="816">Soba-Banandje</option>
                                <option value="817">Sohouo</option>
                                <option value="818">Sokala-Sobara</option>
                                <option value="819">Sokoro</option>
                                <option value="820">Sokorodougou</option>
                                <option value="821">Sokourala-Mahou</option>
                                <option value="822">Sokrogbo</option>
                                <option value="823">Sokrogbo-Carrefour</option>
                                <option value="824">Sominasse</option>
                                <option value="825">Somokoro</option>
                                <option value="826">Songan</option>
                                <option value="827">Songon</option>
                                <option value="828">Songori</option>
                                <option value="829">Sononzo</option>
                                <option value="830">Sorobango</option>
                                <option value="831">Soubre</option>
                                <option value="832">Soukourougban</option>
                                <option value="833">Soungassou</option>
                                <option value="834">Subiakro</option>
                                <option value="846">Ta</option>
                                <option value="835">Taabo</option>
                                <option value="836">Taabo-Village</option>
                                <option value="837">Tabagne</option>
                                <option value="838">Tabayo 1</option>
                                <option value="839">Tableguikou</option>
                                <option value="840">Taboth</option>
                                <option value="841">Tabou</option>
                                <option value="842">Tafire</option>
                                <option value="843">Tagadi</option>
                                <option value="844">Tahakro</option>
                                <option value="845">Tahibly</option>
                                <option value="847">Takikro</option>
                                <option value="848">Takoreagui</option>
                                <option value="849">Tambi</option>
                                <option value="850">Tanda</option>
                                <option value="851">Tangafla</option>
                                <option value="852">Tanguelan</option>
                                <option value="853">Tankesse</option>
                                <option value="854">Taoudi</option>
                                <option value="855">Tapeguia</option>
                                <option value="856">Tawara</option>
                                <option value="857">Teapleu</option>
                                <option value="858">Teguela</option>
                                <option value="859">Tehini</option>
                                <option value="860">Tehiri</option>
                                <option value="861">Tendene-Bambarasso</option>
                                <option value="862">Tengrela</option>
                                <option value="863">Tezie</option>
                                <option value="864">Tiagba</option>
                                <option value="865">Tiapoum</option>
                                <option value="866">Tiassale</option>
                                <option value="867">Tibeita</option>
                                <option value="1140">Tie Ndiekro</option>
                                <option value="869">Tiebissou</option>
                                <option value="870">Tiedio</option>
                                <option value="871">Tiegba</option>
                                <option value="872">Tiekpe</option>
                                <option value="873">Tieme</option>
                                <option value="874">Tiemelekro</option>
                                <option value="875">Tienindieri</option>
                                <option value="876">Tieningboue</option>
                                <option value="878">Tienko (departement de Touba)</option>
                                <option value="877">Tienko Minignan</option>
                                <option value="879">Tienkoikro</option>
                                <option value="880">Tieny-Seably</option>
                                <option value="881">Tieole-Oula</option>
                                <option value="882">Tieviessou</option>
                                <option value="883">Timbe</option>
                                <option value="884">Tinhou</option>
                                <option value="885">Tiobly</option>
                                <option value="886">Tioro</option>
                                <option value="887">Tofla</option>
                                <option value="888">Togoniere</option>
                                <option value="889">Toliesso</option>
                                <option value="890">Tomono</option>
                                <option value="891">Tonla</option>
                                <option value="892">Torossanguehi</option>
                                <option value="893">Tortiya</option>
                                <option value="894">Totrodrou</option>
                                <option value="895">Touba</option>
                                <option value="896">Toubalo</option>
                                <option value="897">Tougbo</option>
                                <option value="898">Touih</option>
                                <option value="899">Toukouzou</option>
                                <option value="900">Toulepleu</option>
                                <option value="901">Toumodi</option>
                                <option value="902">Toumodi-Sakassou</option>
                                <option value="903">Toumoukoro</option>
                                <option value="904">Toupah</option>
                                <option value="905">Toutoubre</option>
                                <option value="906">Trafesso</option>
                                <option value="907">Transua</option>
                                <option value="908">Treichville</option>
                                <option value="909">Vaafla</option>
                                <option value="910">Vao</option>
                                <option value="911">Varale</option>
                                <option value="912">Vavoua</option>
                                <option value="913">Voueboufla</option>
                                <option value="914">Walebo</option>
                                <option value="915">Wate</option>
                                <option value="916">Wonsealy</option>
                                <option value="917">Worofla</option>
                                <option value="918">Yaakro</option>
                                <option value="919">Yabayo</option>
                                <option value="920">Yacolidabouo</option>
                                <option value="921">Yakasse-Attobrou</option>
                                <option value="922">Yakasse-Feyasse</option>
                                <option value="923">Yakasse-Me</option>
                                <option value="924">Yakpabo-Sakassou</option>
                                <option value="925">Yala (Vavoua)</option>
                                <option value="926">Yamoussoukro</option>
                                <option value="927">Yaossedougou</option>
                                <option value="928">Yaou</option>
                                <option value="929">Yapleu</option>
                                <option value="930">Yelleu</option>
                                <option value="931">Yeretiele</option>
                                <option value="932">Yezimala</option>
                                <option value="933">Yobouakro</option>
                                <option value="934">Yocoboue</option>
                                <option value="935">Yokorea</option>
                                <option value="936">Yoouredoula</option>
                                <option value="937">Yopohue</option>
                                <option value="938">Yopougon</option>
                                <option value="939">Yorobodi</option>
                                <option value="940">Yorodougou</option>
                                <option value="941">Yrozon</option>
                                <option value="942">Zagne</option>
                                <option value="943">Zagoreta-Gadouan</option>
                                <option value="944">Zagoue (Man)</option>
                                <option value="945">Zaguieta</option>
                                <option value="946">Zaguinasso</option>
                                <option value="947">Zahia</option>
                                <option value="948">Zaibo</option>
                                <option value="949">Zakoeoua</option>
                                <option value="950">Zaliohouan</option>
                                <option value="951">Zambakro</option>
                                <option value="952">Zanzansou</option>
                                <option value="953">Zanzra</option>
                                <option value="954">Zaranou</option>
                                <option value="955">Zatta</option>
                                <option value="956">Zeaglo</option>
                                <option value="957">Zebouo Nord (Daloa Nord)</option>
                                <option value="958">Zebra</option>
                                <option value="959">Zede-Dianhoun</option>
                                <option value="960">Zego</option>
                                <option value="961">Zemenafla-V</option>
                                <option value="962">Zeo</option>
                                <option value="963">Zeregbo</option>
                                <option value="964">Zialegrehoa</option>
                                <option value="965">Ziki-Dies</option>
                                <option value="966">Zikisso</option>
                                <option value="967">Ziogouine</option>
                                <option value="968">Zirifla</option>
                                <option value="969">Zokoguhe</option>
                                <option value="970">Zonneu</option>
                                <option value="971">Zorofla</option>
                                <option value="972">Zou</option>
                                <option value="973">Zouan-Hounien</option>
                                <option value="974">Zouatta</option>
                                <option value="975">Zougounefla</option>
                                <option value="976">Zoukougbeu</option>
                                <option value="977">Zoukpangbeu</option>
                                <option value="978">Zoupleu</option>
                                <option value="979">Zraluo</option>
                                <option value="980">Zro</option>
                                <option value="981">Zuenoula</option>
                            </select>
                        </div><br>
                    </div>

                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="lieuhabitation" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Lieu d'habitation  -- </option>
                                <option value="1">Abengourou</option>
                                <option value="2">Abie</option>
                                <option value="3">Abigui</option>
                                <option value="4">Abobo</option>
                                <option value="5">Aboisso</option>
                                <option value="6">Aboisso-Comoe</option>
                                <option value="7">Abolikro</option>
                                <option value="8">Abongoua</option>
                                <option value="10">Aboude</option>
                                <option value="11">Abra</option>
                                <option value="12">Abradinou</option>
                                <option value="13">Abronamoue</option>
                                <option value="14">Aby (Aboisso)</option>
                                <option value="15">Aby-Adjouan-Mohoua</option>
                                <option value="16">Adaou</option>
                                <option value="17">Addah</option>
                                <option value="18">Adesse</option>
                                <option value="19">Adiake</option>
                                <option value="20">Adjame</option>
                                <option value="21">Adjamene</option>
                                <option value="22">Adjouan</option>
                                <option value="23">Adouakouakro</option>
                                <option value="24">Adoukro</option>
                                <option value="25">Adzope</option>
                                <option value="26">Affalikro</option>
                                <option value="27">Affery</option>
                                <option value="28">Affienou</option>
                                <option value="29">Afotobo</option>
                                <option value="30">Agbaou-Aheoua</option>
                                <option value="31">Agboville</option>
                                <option value="32">Agnia</option>
                                <option value="33">Agnibilekrou</option>
                                <option value="34">Agou</option>
                                <option value="35">Ahigbe-Koffikro</option>
                                <option value="36">Ahouabo-Bouape</option>
                                <option value="37">Ahouakro</option>
                                <option value="38">Ahouanou</option>
                                <option value="39">Ahougnanssou</option>
                                <option value="40">Ahougnassou-Alahou</option>
                                <option value="41">Akoboissue</option>
                                <option value="42">Akounougbe</option>
                                <option value="43">Akoupe</option>
                                <option value="44">Akoupe-Zeudji</option>
                                <option value="45">Akoure</option>
                                <option value="1143">Akpassanou</option>
                                <option value="46">Akradio</option>
                                <option value="47">Akridou-Ladde</option>
                                <option value="48">Alepe</option>
                                <option value="49">Allangouassou</option>
                                <option value="1126">ALLOSSO</option>
                                <option value="50">Allosso 2</option>
                                <option value="51">Amanvi</option>
                                <option value="52">Amelekia</option>
                                <option value="53">Amian Kouassikro</option>
                                <option value="54">Amoriakro</option>
                                <option value="55">Ananda (Daoukro)</option>
                                <option value="57">Ananguie (Adzope)</option>
                                <option value="56">Ananguie (Agboville)</option>
                                <option value="58">Ande</option>
                                <option value="59">Ando-Kekrenou</option>
                                <option value="1142">Angoda</option>
                                <option value="61">Anianou</option>
                                <option value="62">Aniassue</option>
                                <option value="63">Annepe</option>
                                <option value="64">Anno (Agboville)</option>
                                <option value="65">Anoumaba</option>
                                <option value="994">Antilles-nerlandaise</option>
                                <option value="66">Anyama</option>
                                <option value="67">Appimandoum</option>
                                <option value="68">Appoisso</option>
                                <option value="69">Appouasso</option>
                                <option value="70">Apprompron-Afewa</option>
                                <option value="71">Apprompronou</option>
                                <option value="995">Arabie Saoudite</option>
                                <option value="996">Argentine</option>
                                <option value="72">Arikokaha</option>
                                <option value="73">Arokpa</option>
                                <option value="74">Arrah</option>
                                <option value="998">Aruba</option>
                                <option value="75">Assahara</option>
                                <option value="76">Assale-Kouassikro</option>
                                <option value="77">Assandre</option>
                                <option value="78">Assie-Koumassi</option>
                                <option value="79">Assikoi</option>
                                <option value="80">Assinie-Mafia</option>
                                <option value="81">Assuefry</option>
                                <option value="82">Attecoube</option>
                                <option value="83">Attiegouakro</option>
                                <option value="84">Attiekoi</option>
                                <option value="85">Attiguehi</option>
                                <option value="86">Attinguie</option>
                                <option value="87">Attobrou</option>
                                <option value="88">Attokro</option>
                                <option value="89">Attoutou A</option>
                                <option value="1000">Autriche</option>
                                <option value="90">Ayame</option>
                                <option value="91">Ayaou-Sran</option>
                                <option value="92">Ayenouan</option>
                                <option value="93">Azaguie</option>
                                <option value="1001">Azerbaidjan</option>
                                <option value="94">Babakro</option>
                                <option value="95">Bacanda</option>
                                <option value="96">Bacon</option>
                                <option value="97">Badikaha</option>
                                <option value="98">Bagohouo</option>
                                <option value="1002">BAHAMAS</option>
                                <option value="1003">BAHREIN</option>
                                <option value="99">Bakandesso-Sogbeni</option>
                                <option value="100">Bakanou</option>
                                <option value="101">Bako</option>
                                <option value="102">Bakoubli</option>
                                <option value="103">Baleko</option>
                                <option value="104">Bambalouma</option>
                                <option value="105">Bamoro</option>
                                <option value="106">Bandakagni Tomora</option>
                                <option value="107">Bandakagni-Sokoura</option>
                                <option value="108">Bandiahi</option>
                                <option value="1004">BANGLADESH</option>
                                <option value="109">Bangolo</option>
                                <option value="110">Bangoua</option>
                                <option value="111">Banneu</option>
                                <option value="112">Bannonfla</option>
                                <option value="1005">BARBADE</option>
                                <option value="113">Bassawa</option>
                                <option value="114">Baya (Kouto)</option>
                                <option value="115">Bayota</option>
                                <option value="116">Bazra-Nattis</option>
                                <option value="117">Bazre</option>
                                <option value="118">Becedi Brignan</option>
                                <option value="119">Becouefin</option>
                                <option value="120">Bediala</option>
                                <option value="121">Bedy-Goazon</option>
                                <option value="122">Begbessou</option>
                                <option value="1006">BELGIQUE</option>
                                <option value="1007">BELIZE</option>
                                <option value="123">Belleville Bouake)</option>
                                <option value="124">Belleville Zoukougbeu)</option>
                                <option value="125">Bengassou</option>
                                <option value="126">Beoue-Zibiao</option>
                                <option value="127">Beoumi</option>
                                <option value="128">Bereni Dialla</option>
                                <option value="129">Beriaboukro</option>
                                <option value="1008">Bermudes</option>
                                <option value="130">Bettie</option>
                                <option value="1009">Bhoutan</option>
                                <option value="131">Biakale</option>
                                <option value="132">Biankouma</option>
                                <option value="133">Bianouan</option>
                                <option value="134">Biasso</option>
                                <option value="135">Bieby</option>
                                <option value="136">Bilimono</option>
                                <option value="137">Bin-Houye</option>
                                <option value="138">Binao-Boussoue</option>
                                <option value="139">Bingerville</option>
                                <option value="140">Binzra</option>
                                <option value="142">Blanfla</option>
                                <option value="143">Blapleu</option>
                                <option value="144">Blenimeouin</option>
                                <option value="145">Blessegue</option>
                                <option value="146">Blolequin</option>
                                <option value="147">Blotile</option>
                                <option value="148">Boahia</option>
                                <option value="149">Bobi</option>
                                <option value="150">Bobo-Tienigbe</option>
                                <option value="151">Bocanda</option>
                                <option value="152">Bodo (Didievi)</option>
                                <option value="153">Bodo (Tiassale)</option>
                                <option value="154">Bodokro</option>
                                <option value="155">Bogofa</option>
                                <option value="156">Bogouine</option>
                                <option value="157">Boguedia</option>
                                <option value="158">Bohobli</option>
                                <option value="159">Bokala-Niampondougou</option>
                                <option value="160">Boli</option>
                                <option value="1010">Bolivie</option>
                                <option value="161">Bolona</option>
                                <option value="162">Bonahouin</option>
                                <option value="163">Bondo</option>
                                <option value="164">Bondoukou</option>
                                <option value="165">Bongo (Grand-Bassam)</option>
                                <option value="166">Bongouanou</option>
                                <option value="167">Bonguera</option>
                                <option value="168">Bonieredougou</option>
                                <option value="169">Bonikro</option>
                                <option value="170">Bonon</option>
                                <option value="171">Bonoua</option>
                                <option value="172">Bonoufla</option>
                                <option value="173">Booko</option>
                                <option value="174">Boron (Korhogo)</option>
                                <option value="175">Borotou</option>
                                <option value="176">Borotou-Koro</option>
                                <option value="177">Botinde</option>
                                <option value="178">Botro</option>
                                <option value="1011">Botswana</option>
                                <option value="179">Bouadikro</option>
                                <option value="180">Bouafle</option>
                                <option value="187">Bouake</option>
                                <option value="181">Bouandougou</option>
                                <option value="182">Bouboury</option>
                                <option value="183">Boudepe</option>
                                <option value="184">Bougou</option>
                                <option value="185">Bougousso</option>
                                <option value="186">Bouko</option>
                                <option value="188">Bouna</option>
                                <option value="189">Boundiali</option>
                                <option value="190">Boyaokro</option>
                                <option value="191">Bozi</option>
                                <option value="192">Bricolo</option>
                                <option value="193">Brihiri</option>
                                <option value="194">Brima</option>
                                <option value="195">Brobo</option>
                                <option value="196">Brofodoume</option>
                                <option value="197">Broma</option>
                                <option value="198">Brou Ahoussoukro</option>
                                <option value="199">Brou Akpaoussou</option>
                                <option value="200">Broubrou</option>
                                <option value="201">Broudoukou-Penda</option>
                                <option value="1012">BURKINA FASO</option>
                                <option value="1013">Burundi</option>
                                <option value="202">Buyo</option>
                                <option value="1014">Cambodge</option>
                                <option value="1015">Cameroun</option>
                                <option value="1016">Canada</option>
                                <option value="203">Cechi</option>
                                <option value="204">Chiepo</option>
                                <option value="1017">Chine</option>
                                <option value="205">Cocody</option>
                                <option value="1018">Colombie</option>
                                <option value="1019">Comores</option>
                                <option value="1020">Congo</option>
                                <option value="206">Cosrou</option>
                                <option value="1021">Cuba</option>
                                <option value="207">Dabadougou-Mafele</option>
                                <option value="208">Dabakala</option>
                                <option value="209">Dabou</option>
                                <option value="210">Dabouyo</option>
                                <option value="211">Dadiasse</option>
                                <option value="212">Dagba</option>
                                <option value="213">Dah-Zagna</option>
                                <option value="214">Dahiepa-Kehi</option>
                                <option value="215">Dahiri</option>
                                <option value="216">Dairo-Didizo</option>
                                <option value="217">Dakouritrohoin</option>
                                <option value="218">Dakpadou</option>
                                <option value="219">Daleu</option>
                                <option value="1123">DALOA</option>
                                <option value="220">Dame</option>
                                <option value="221">Danane</option>
                                <option value="222">Dananon</option>
                                <option value="223">Dandougou</option>
                                <option value="224">Danguira</option>
                                <option value="225">Dania</option>
                                <option value="226">Danoa</option>
                                <option value="227">Dantogo</option>
                                <option value="228">Daoukro</option>
                                <option value="229">Dapeoua</option>
                                <option value="230">Dapo-Iboke</option>
                                <option value="231">Dassioko</option>
                                <option value="232">Dassoungboho</option>
                                <option value="233">Debete</option>
                                <option value="234">Dedegbeu</option>
                                <option value="235">Detroya</option>
                                <option value="236">Diabo</option>
                                <option value="237">Diahouin</option>
                                <option value="238">Dialakoro</option>
                                <option value="239">Diamakani</option>
                                <option value="240">Diamarakro</option>
                                <option value="241">Diamba</option>
                                <option value="242">Diangobo (Abengourou)</option>
                                <option value="243">Diangobo (Yakasse-Attobrou)</option>
                                <option value="244">Diangokro</option>
                                <option value="245">Dianra</option>
                                <option value="246">Dianra-Village</option>
                                <option value="247">Diarabana</option>
                                <option value="248">Diasson</option>
                                <option value="249">Diawala</option>
                                <option value="250">Dibobly</option>
                                <option value="251">Diboke</option>
                                <option value="252">Dibri-Assirikro</option>
                                <option value="253">Didievi</option>
                                <option value="254">Didoko</option>
                                <option value="255">Diegonefla</option>
                                <option value="256">Diemeressedougou</option>
                                <option value="257">Dieouzon</option>
                                <option value="258">Dieviessou</option>
                                <option value="259">Digbapia</option>
                                <option value="260">Dignago</option>
                                <option value="261">Dikodougou</option>
                                <option value="262">Dimandougou</option>
                                <option value="263">Dimbokro</option>
                                <option value="264">Dinaoudi</option>
                                <option value="265">Dingbi</option>
                                <option value="266">Dioman</option>
                                <option value="267">Dioulatiedougou</option>
                                <option value="268">Diourouzon</option>
                                <option value="269">Divo</option>
                                <option value="1130">Djamadjoké</option>
                                <option value="271">Djapadji</option>
                                <option value="272">Djebonouan</option>
                                <option value="273">Djekanou</option>
                                <option value="274">Djibrosso</option>
                                <option value="275">Djidji</option>
                                <option value="276">Djoro-Djoro</option>
                                <option value="277">Djouroutou</option>
                                <option value="278">Doba</option>
                                <option value="279">Dobre</option>
                                <option value="280">Dogbo</option>
                                <option value="281">Doh</option>
                                <option value="282">Doke</option>
                                <option value="283">Domangbeu</option>
                                <option value="1022">Dominique</option>
                                <option value="284">Doropo</option>
                                <option value="285">Douele</option>
                                <option value="286">Dougroupalegnoa</option>
                                <option value="287">Doukouya</option>
                                <option value="288">Doukouyo</option>
                                <option value="289">Dousseba</option>
                                <option value="290">Dribouo</option>
                                <option value="291">Dualla</option>
                                <option value="292">Duekoue</option>
                                <option value="293">Duffrebo</option>
                                <option value="294">Duonfla</option>
                                <option value="295">Dzeudji</option>
                                <option value="296">Ebikro-N?dakro</option>
                                <option value="297">Ebilassokro</option>
                                <option value="298">Ebonou</option>
                                <option value="299">Eboue (Aboisso)</option>
                                <option value="1023">Egypte</option>
                                <option value="300">Ehuasso</option>
                                <option value="301">Ellibou-Badasso</option>
                                <option value="302">Eloka</option>
                                <option value="303">Ettrokro</option>
                                <option value="304">Etueboue</option>
                                <option value="305">Etuessika</option>
                                <option value="306">Facobly</option>
                                <option value="307">Fadiadougou</option>
                                <option value="308">Famienkro</option>
                                <option value="309">Fapaha-Mbinguebougou</option>
                                <option value="310">Faraba (Mankono)</option>
                                <option value="311">Fengolo</option>
                                <option value="312">Feremandougou</option>
                                <option value="313">Ferentela</option>
                                <option value="314">Ferkessedougou</option>
                                <option value="315">Finessiguedougou</option>
                                <option value="316">Fizanlouma</option>
                                <option value="317">Flakiedougou</option>
                                <option value="318">Foto-Kouamekro</option>
                                <option value="319">Foumbolo</option>
                                <option value="320">Foungbesso</option>
                                <option value="321">Frambo</option>
                                <option value="322">Fresco</option>
                                <option value="323">Fronan</option>
                                <option value="324">Gabia (Issia)</option>
                                <option value="325">Gabia (Oume)</option>
                                <option value="326">Gabiadji</option>
                                <option value="327">Gadago</option>
                                <option value="328">Gagnoa</option>
                                <option value="329">Gagny</option>
                                <option value="1139">gagore</option>
                                <option value="1137">galebou</option>
                                <option value="331">Ganaoni</option>
                                <option value="332">Ganhoue</option>
                                <option value="333">Ganleu</option>
                                <option value="334">Gaote</option>
                                <option value="335">Gbablasso</option>
                                <option value="336">Gbadjie</option>
                                <option value="337">Gbagbam</option>
                                <option value="338">Gbameledougo</option>
                                <option value="339">Gbangbegouine</option>
                                <option value="340">Gbangbegouine-Yati</option>
                                <option value="341">Gbapleu</option>
                                <option value="342">Gbatongouin</option>
                                <option value="343">Gbazoa</option>
                                <option value="344">Gbekekro</option>
                                <option value="345">Gbeleban</option>
                                <option value="346">Gbetogo</option>
                                <option value="347">Gbliglo</option>
                                <option value="348">Gbofesso-Sama</option>
                                <option value="349">Gbogolo</option>
                                <option value="350">Gboguhe</option>
                                <option value="351">Gbon</option>
                                <option value="352">Gbon-Houye</option>
                                <option value="353">Gbongaha</option>
                                <option value="1136">gbongaha</option>
                                <option value="354">Gbonne</option>
                                <option value="355">Glangleu</option>
                                <option value="356">Gligbeuadji</option>
                                <option value="357">Gloplou</option>
                                <option value="358">Gnagbodougnoa</option>
                                <option value="359">Gnagboya</option>
                                <option value="360">Gnago</option>
                                <option value="361">Gnakouboue</option>
                                <option value="1128">gnamangui</option>
                                <option value="362">Gnamanou</option>
                                <option value="363">Gnato</option>
                                <option value="364">Gnegrouboue</option>
                                <option value="365">Gnogboyo</option>
                                <option value="366">Godelilie 1</option>
                                <option value="367">Gogne</option>
                                <option value="368">Gogo</option>
                                <option value="369">Gogoguhe</option>
                                <option value="370">Gohitafla</option>
                                <option value="371">Gohouo-Zagna</option>
                                <option value="372">Gomon</option>
                                <option value="373">Gonate</option>
                                <option value="374">Gopoupleu</option>
                                <option value="375">Gotongouine 1</option>
                                <option value="376">Gouane</option>
                                <option value="377">Goudi</option>
                                <option value="378">Goudouko</option>
                                <option value="379">Gouekan</option>
                                <option value="380">Gouenzou</option>
                                <option value="381">Gouine</option>
                                <option value="382">Goulaleu</option>
                                <option value="383">Goulia</option>
                                <option value="384">Goumere</option>
                                <option value="385">Gouotro</option>
                                <option value="386">Gourane</option>
                                <option value="387">Grabo</option>
                                <option value="388">Gragba-Dagolilie</option>
                                <option value="389">Grand Alepe</option>
                                <option value="397">Grand-Akoudzin</option>
                                <option value="390">Grand-Bassam</option>
                                <option value="391">Grand-Bereby</option>
                                <option value="392">Grand-Lahou</option>
                                <option value="393">Grand-Morie</option>
                                <option value="394">Grand-Pin</option>
                                <option value="395">Grand-Yapo</option>
                                <option value="396">Grand-Zattry</option>
                                <option value="398">Gregbeu</option>
                                <option value="399">Grihiri</option>
                                <option value="400">Grobiakoko</option>
                                <option value="401">Grobonou-Dan</option>
                                <option value="402">Guehiebly</option>
                                <option value="403">Guekpe</option>
                                <option value="404">Guenimanzo</option>
                                <option value="405">Guepahouo</option>
                                <option value="406">Guessabo</option>
                                <option value="407">Guessiguie</option>
                                <option value="408">Gueyo</option>
                                <option value="409">Guezon (Duekoue) (departement de Duekoue)</option>
                                <option value="410">Guezon (Kouibly) (departement de Kouibly)</option>
                                <option value="411">Guezon-Tahouake</option>
                                <option value="412">Guiamapleu</option>
                                <option value="413">Guiberoua</option>
                                <option value="414">Guiembe</option>
                                <option value="415">Guiende</option>
                                <option value="416">Guiglo</option>
                                <option value="417">Guimeyo</option>
                                <option value="418">Guinglo-Gbean</option>
                                <option value="419">Guinglo-Tahouake</option>
                                <option value="420">Guinteguela</option>
                                <option value="421">Guitry</option>
                                <option value="662">Guyakro</option>
                                <option value="422">Herebo</option>
                                <option value="423">Hermankono-Dies</option>
                                <option value="424">Hermankono-Garo</option>
                                <option value="425">Hire</option>
                                <option value="426">Huafla</option>
                                <option value="427">Iboguhe</option>
                                <option value="428">Iboke</option>
                                <option value="429">Idibouo-Zepreguhe (Daloa Est)</option>
                                <option value="430">Ipouagui</option>
                                <option value="431">Iriefla</option>
                                <option value="432">Irobo</option>
                                <option value="433">Iroporia</option>
                                <option value="434">Issia</option>
                                <option value="435">Jacqueville</option>
                                <option value="436">Kaade</option>
                                <option value="437">Kadeko</option>
                                <option value="438">Kadioha</option>
                                <option value="439">Kafoudougou-Bambarasso</option>
                                <option value="440">Kagbolodougou</option>
                                <option value="441">Kahin-Zarabaon</option>
                                <option value="442">Kakpi</option>
                                <option value="443">Kalaha</option>
                                <option value="444">Kalamon</option>
                                <option value="445">Kaloa</option>
                                <option value="446">Kamala</option>
                                <option value="447">Kamalo</option>
                                <option value="448">Kamoro</option>
                                <option value="449">Kanagonon</option>
                                <option value="450">Kanakono</option>
                                <option value="451">Kanawolo</option>
                                <option value="452">Kani</option>
                                <option value="453">Kaniasso</option>
                                <option value="454">Kanoroba</option>
                                <option value="455">Kanzra</option>
                                <option value="456">Kaouara</option>
                                <option value="457">Karakoro</option>
                                <option value="458">Kassere</option>
                                <option value="459">Katchire-Essekro</option>
                                <option value="460">Katiali</option>
                                <option value="461">Katimassou</option>
                                <option value="462">Katiola</option>
                                <option value="463">Kato (Seguela)</option>
                                <option value="464">Katogo</option>
                                <option value="465">Kawolo-Sobara</option>
                                <option value="466">Ke-Bouebo</option>
                                <option value="467">Kebi</option>
                                <option value="468">Keibla</option>
                                <option value="469">Keibly</option>
                                <option value="470">Ketesso</option>
                                <option value="471">Ketro-Bassam</option>
                                <option value="472">Kibouo</option>
                                <option value="473">Kiele</option>
                                <option value="474">Kiemou</option>
                                <option value="1133">kimbirila nord</option>
                                <option value="476">Kimbirila Sud</option>
                                <option value="477">Klan</option>
                                <option value="478">Kodiossou</option>
                                <option value="479">Koffi-Amonkro</option>
                                <option value="480">Koffikro-Affema</option>
                                <option value="481">Koko (Bouake)</option>
                                <option value="482">Koko (Korhogo)</option>
                                <option value="483">Kokolopozo</option>
                                <option value="484">Kokomian</option>
                                <option value="485">Kokoumba</option>
                                <option value="486">Kokoun</option>
                                <option value="487">Kokumbo</option>
                                <option value="488">Kolia</option>
                                <option value="489">Kombolokoura</option>
                                <option value="490">Komborodougou</option>
                                <option value="491">Konan Kokorekro</option>
                                <option value="492">Konan-Ndrikro</option>
                                <option value="493">Konandikro</option>
                                <option value="494">Kondiebouma</option>
                                <option value="495">Kondokro-Djassanou</option>
                                <option value="496">Kondossou</option>
                                <option value="497">Kondrobo</option>
                                <option value="498">Kong</option>
                                <option value="499">Kongasso</option>
                                <option value="500">Kongoti</option>
                                <option value="501">Koni</option>
                                <option value="502">Kononfla</option>
                                <option value="503">Koonan</option>
                                <option value="504">Koreahinou</option>
                                <option value="539">Korhogo</option>
                                <option value="505">Koro</option>
                                <option value="506">Korokaha</option>
                                <option value="507">Korokopla</option>
                                <option value="508">Koroumba</option>
                                <option value="509">Kossandji</option>
                                <option value="510">Kossehoa</option>
                                <option value="511">Kossihouen</option>
                                <option value="512">Kossou</option>
                                <option value="513">Kotobi</option>
                                <option value="514">Kotogwanda</option>
                                <option value="515">Kotronou</option>
                                <option value="516">Koua</option>
                                <option value="517">Kouadioblekro</option>
                                <option value="518">Kouadiokro</option>
                                <option value="519">Kouafo-Akidom</option>
                                <option value="520">Kouakro</option>
                                <option value="521">Kouamefla</option>
                                <option value="522">Kouan-Houle</option>
                                <option value="524">Kouassi Kouassikro</option>
                                <option value="523">Kouassi-Datekro</option>
                                <option value="525">Kouassi-N?Dawa</option>
                                <option value="526">Kouassia-Nanguni</option>
                                <option value="527">Kouatta</option>
                                <option value="528">Koudougou</option>
                                <option value="529">Kouetinfla</option>
                                <option value="530">Kouibly</option>
                                <option value="531">Koulale</option>
                                <option value="532">Koulikoro (Biankouma)</option>
                                <option value="533">Koumassi</option>
                                <option value="534">Koumbala</option>
                                <option value="535">Koun-Fao</option>
                                <option value="536">Kounahiri</option>
                                <option value="537">Kounzie</option>
                                <option value="538">Kouto</option>
                                <option value="540">Koutouba</option>
                                <option value="541">Koyekro</option>
                                <option value="542">Koziayo 1</option>
                                <option value="543">Kpada</option>
                                <option value="544">Kpana-Kalo</option>
                                <option value="545">Kpanan</option>
                                <option value="546">Kpanpleu-Sin-Houye</option>
                                <option value="547">Kpapekou</option>
                                <option value="548">Kpata</option>
                                <option value="549">Kpebo</option>
                                <option value="550">Kpote</option>
                                <option value="551">Kpouebo</option>
                                <option value="552">Kregbe</option>
                                <option value="553">Kreuzoukoue</option>
                                <option value="554">Krindjabo</option>
                                <option value="555">Krofoinsou</option>
                                <option value="556">Labokro</option>
                                <option value="557">Lafokpokaha</option>
                                <option value="558">Lahou Kpandah</option>
                                <option value="559">Lahouda</option>
                                <option value="560">Lakota</option>
                                <option value="561">Lamekaha</option>
                                <option value="562">Lamekaha</option>
                                <option value="563">Landiougou</option>
                                <option value="564">Languibonou</option>
                                <option value="565">Laoudi-Ba</option>
                                <option value="566">Larabia</option>
                                <option value="567">Lataha</option>
                                <option value="568">Lauzoua</option>
                                <option value="569">Leleble</option>
                                <option value="570">Lengbre</option>
                                <option value="571">Lessiri</option>
                                <option value="572">Ligrohoin</option>
                                <option value="573">Liliy</option>
                                <option value="1129">LILIYO</option>
                                <option value="574">Lissolo-Sobara</option>
                                <option value="575">Lobakuya</option>
                                <option value="576">Lobogba</option>
                                <option value="577">Logbonou</option>
                                <option value="578">Logouale</option>
                                <option value="579">Logroan</option>
                                <option value="581">Lolobo</option>
                                <option value="1141">LOMOKANKRO</option>
                                <option value="582">Lopou</option>
                                <option value="583">Loukou-Yaokro</option>
                                <option value="584">Loviguie</option>
                                <option value="585">Luenoufla</option>
                                <option value="1145">M'BAHIAKRO</option>
                                <option value="593">Mabehiri 1</option>
                                <option value="594">Mabouo</option>
                                <option value="595">Madinani</option>
                                <option value="596">Mafere</option>
                                <option value="597">Maguehio</option>
                                <option value="598">Mahale</option>
                                <option value="599">Mahandiana Soukourani</option>
                                <option value="1132">MAHANDIANA-SOKOURANI</option>
                                <option value="600">Mahandougou</option>
                                <option value="601">Mahapleu</option>
                                <option value="602">Mahino</option>
                                <option value="603">Makey-Liboli</option>
                                <option value="604">Mamini</option>
                                <option value="605">Maminigui</option>
                                <option value="606">Man</option>
                                <option value="607">Manabri</option>
                                <option value="608">Mandougou</option>
                                <option value="609">Manfla</option>
                                <option value="610">Mangouin-Yrongouin</option>
                                <option value="611">Mankono</option>
                                <option value="612">Manzanouan</option>
                                <option value="613">Marabadiassa</option>
                                <option value="614">Marandallah</option>
                                <option value="615">Marcory</option>
                                <option value="616">Massadougou</option>
                                <option value="617">Massala (Seguela)</option>
                                <option value="618">Massala-Barala</option>
                                <option value="619">Mayo</option>
                                <option value="586">Mbahiakro</option>
                                <option value="587">Mbatto</option>
                                <option value="588">Mbengue</option>
                                <option value="589">Mbonoua</option>
                                <option value="590">MBorla-Dioulasso</option>
                                <option value="591">Mbrou</option>
                                <option value="620">Meagui</option>
                                <option value="621">Medon</option>
                                <option value="622">Mekro</option>
                                <option value="623">Memni</option>
                                <option value="624">Meneke</option>
                                <option value="625">Meo</option>
                                <option value="626">Miadzin</option>
                                <option value="627">Mignore</option>
                                <option value="628">Minfla</option>
                                <option value="629">Minignan</option>
                                <option value="630">Moape</option>
                                <option value="631">Molonou</option>
                                <option value="632">Molonou-Ble</option>
                                <option value="633">Momirasso</option>
                                <option value="634">Monga</option>
                                <option value="635">Mongbara</option>
                                <option value="636">Monoko Zohi</option>
                                <option value="637">Monongo</option>
                                <option value="638">Mont Korhogo</option>
                                <option value="639">Morokinkro</option>
                                <option value="640">Morokro</option>
                                <option value="641">Morondo</option>
                                <option value="642">Moronou</option>
                                <option value="643">Moussobadougou</option>
                                <option value="592">Mpossa</option>
                                <option value="1144">N'GATTAKRO</option>
                                <option value="1134">N'GOLOBLASSO</option>
                                <option value="667">Nafana</option>
                                <option value="668">Nafana (Prikro)</option>
                                <option value="669">Nafana Sienso</option>
                                <option value="670">Nafoun</option>
                                <option value="671">Nahio</option>
                                <option value="672">Namahounondougou</option>
                                <option value="673">Namane</option>
                                <option value="674">Namassi</option>
                                <option value="675">Nambingue</option>
                                <option value="676">Nandjele-Segbere</option>
                                <option value="677">Napie</option>
                                <option value="678">Nassian</option>
                                <option value="644">Ndakro</option>
                                <option value="645">Ndenou</option>
                                <option value="646">Ndeou</option>
                                <option value="647">Ndouci</option>
                                <option value="648">Ndouffoukankro</option>
                                <option value="649">Ndoukahakro</option>
                                <option value="679">Nebo (Divo)</option>
                                <option value="680">Neguepie</option>
                                <option value="681">Neko</option>
                                <option value="682">Nezobly</option>
                                <option value="650">Ngangoro-Attoutou</option>
                                <option value="651">NGanon</option>
                                <option value="652">NGattadolikro</option>
                                <option value="653">NGattakro</option>
                                <option value="654">NGban Kasse</option>
                                <option value="655">Ngohinou</option>
                                <option value="656">NGoloblasso</option>
                                <option value="657">Ngribo-Takikro</option>
                                <option value="658">Nguessan-Brindoukro</option>
                                <option value="659">NGuessankro</option>
                                <option value="661">Nguieme</option>
                                <option value="683">Niable</option>
                                <option value="684">Niakaramandougou</option>
                                <option value="685">Niakoblognoa</option>
                                <option value="686">Niamana (Odienne)</option>
                                <option value="687">Niambezaria</option>
                                <option value="688">Niazaroko</option>
                                <option value="689">Nidrou</option>
                                <option value="690">Niediekaha</option>
                                <option value="691">Nielle</option>
                                <option value="692">Niemene</option>
                                <option value="693">Nigui Assoko</option>
                                <option value="694">Nigui Saff</option>
                                <option value="695">Niofoin</option>
                                <option value="696">Niokosso</option>
                                <option value="697">Niorouhio</option>
                                <option value="698">Nioulde</option>
                                <option value="699">Nizahon</option>
                                <option value="700">Noe</option>
                                <option value="701">Nofou</option>
                                <option value="702">Nouamou</option>
                                <option value="1131">NOUAMOUE</option>
                                <option value="663">NZecrezessou</option>
                                <option value="664">NZi-NZiblekro</option>
                                <option value="665">NZianouan</option>
                                <option value="666">NZue-Kokore</option>
                                <option value="703">Odienne</option>
                                <option value="704">Offa (Agboville)</option>
                                <option value="705">Offoumpo</option>
                                <option value="706">Oghlwapo</option>
                                <option value="707">Ogoudou</option>
                                <option value="708">Okrouyo</option>
                                <option value="709">Olodio</option>
                                <option value="710">Ondefidouo</option>
                                <option value="711">Ono</option>
                                <option value="712">Orbaff</option>
                                <option value="713">Oress-Krobou</option>
                                <option value="715">Ottope</option>
                                <option value="716">Ouangolodougou</option>
                                <option value="717">Ouaninou</option>
                                <option value="718">Ouattaradougou</option>
                                <option value="719">Ouedallah</option>
                                <option value="720">Ouelle</option>
                                <option value="721">Oueoulo</option>
                                <option value="722">Ouffouediekro</option>
                                <option value="723">Oume</option>
                                <option value="724">Oupoyo</option>
                                <option value="725">Ouragahio</option>
                                <option value="726">Oureguekaha</option>
                                <option value="727">Ousrou</option>
                                <option value="728">Ouyably-Gnondrou</option>
                                <option value="729">Pacobo</option>
                                <option value="730">Pakouabo</option>
                                <option value="731">Pambasso-Diedou</option>
                                <option value="732">Pangalakaha</option>
                                <option value="733">Paoufla</option>
                                <option value="734">Papara (Tengrela)</option>
                                <option value="735">Para (Tabou)</option>
                                <option value="736">Pauly</option>
                                <option value="737">Peguekaha</option>
                                <option value="738">Pehe</option>
                                <option value="739">Pehekanhouebli</option>
                                <option value="740">Pelezi</option>
                                <option value="741">Petigoa 2</option>
                                <option value="742">Petit Guiglo</option>
                                <option value="743">Pinda-Boroko</option>
                                <option value="744">Pinhou</option>
                                <option value="745">Pitiengomon</option>
                                <option value="746">Plateau</option>
                                <option value="747">Pleuro</option>
                                <option value="748">Podiagouine</option>
                                <option value="749">Podoue</option>
                                <option value="750">Pogo (Ouangolodougou)</option>
                                <option value="751">Pokreagui</option>
                                <option value="752">Ponondougou</option>
                                <option value="1127">PORT-BOUET</option>
                                <option value="753">Port-Bouet</option>
                                <option value="754">Poumbly</option>
                                <option value="755">Pranouan</option>
                                <option value="756">Prikro</option>
                                <option value="757">Raviart</option>
                                <option value="759">Rubino</option>
                                <option value="760">Saboudougou</option>
                                <option value="761">Sago</option>
                                <option value="762">Sahebo</option>
                                <option value="763">Sahuye</option>
                                <option value="764">Saioua</option>
                                <option value="766">Sakahouo</option>
                                <option value="765">Sakassou</option>
                                <option value="767">Sakre</option>
                                <option value="768">Samango</option>
                                <option value="769">Samanza</option>
                                <option value="770">Samatiguila</option>
                                <option value="771">Saminikro</option>
                                <option value="772">San-Pedro</option>
                                <option value="773">Sandala</option>
                                <option value="774">Sandegue</option>
                                <option value="775">Sandougou-Soba</option>
                                <option value="776">Sangouine</option>
                                <option value="777">Sankadiokro</option>
                                <option value="778">Santa</option>
                                <option value="780">Sapli-Sepingo</option>
                                <option value="781">Sarhala</option>
                                <option value="782">Sassako Begnini</option>
                                <option value="783">Sassandra</option>
                                <option value="784">Satama-Sokoro</option>
                                <option value="785">Satama-Sokoura</option>
                                <option value="786">Satikran</option>
                                <option value="787">Satroko</option>
                                <option value="788">Sebedoufla</option>
                                <option value="789">Seguela</option>
                                <option value="790">Seguelon</option>
                                <option value="791">Seileu</option>
                                <option value="792">Seitifla</option>
                                <option value="793">Semien</option>
                                <option value="794">Sepikaha</option>
                                <option value="795">Serebissou</option>
                                <option value="796">Serihi</option>
                                <option value="1138">serihio</option>
                                <option value="797">Seydougou</option>
                                <option value="798">Sianhala</option>
                                <option value="799">Siansoba</option>
                                <option value="800">Siempurgo</option>
                                <option value="801">Sifie</option>
                                <option value="802">Sikensi</option>
                                <option value="803">Sikolo</option>
                                <option value="804">Silakoro</option>
                                <option value="805">Sinematiali</option>
                                <option value="806">Sinfra</option>
                                <option value="807">Singo</option>
                                <option value="808">Siolokaha</option>
                                <option value="809">Sipilou</option>
                                <option value="810">Sirana</option>
                                <option value="811">Sirasso</option>
                                <option value="812">Siriho</option>
                                <option value="813">Sissedougou</option>
                                <option value="814">Soaekpe-Douedy</option>
                                <option value="815">Soba (Korhogo)</option>
                                <option value="816">Soba-Banandje</option>
                                <option value="817">Sohouo</option>
                                <option value="818">Sokala-Sobara</option>
                                <option value="819">Sokoro</option>
                                <option value="820">Sokorodougou</option>
                                <option value="821">Sokourala-Mahou</option>
                                <option value="822">Sokrogbo</option>
                                <option value="823">Sokrogbo-Carrefour</option>
                                <option value="824">Sominasse</option>
                                <option value="825">Somokoro</option>
                                <option value="826">Songan</option>
                                <option value="827">Songon</option>
                                <option value="828">Songori</option>
                                <option value="829">Sononzo</option>
                                <option value="830">Sorobango</option>
                                <option value="831">Soubre</option>
                                <option value="832">Soukourougban</option>
                                <option value="833">Soungassou</option>
                                <option value="834">Subiakro</option>
                                <option value="846">Ta</option>
                                <option value="835">Taabo</option>
                                <option value="836">Taabo-Village</option>
                                <option value="837">Tabagne</option>
                                <option value="838">Tabayo 1</option>
                                <option value="839">Tableguikou</option>
                                <option value="840">Taboth</option>
                                <option value="841">Tabou</option>
                                <option value="842">Tafire</option>
                                <option value="843">Tagadi</option>
                                <option value="844">Tahakro</option>
                                <option value="845">Tahibly</option>
                                <option value="847">Takikro</option>
                                <option value="848">Takoreagui</option>
                                <option value="849">Tambi</option>
                                <option value="850">Tanda</option>
                                <option value="851">Tangafla</option>
                                <option value="852">Tanguelan</option>
                                <option value="853">Tankesse</option>
                                <option value="854">Taoudi</option>
                                <option value="855">Tapeguia</option>
                                <option value="856">Tawara</option>
                                <option value="857">Teapleu</option>
                                <option value="858">Teguela</option>
                                <option value="859">Tehini</option>
                                <option value="860">Tehiri</option>
                                <option value="861">Tendene-Bambarasso</option>
                                <option value="862">Tengrela</option>
                                <option value="863">Tezie</option>
                                <option value="864">Tiagba</option>
                                <option value="865">Tiapoum</option>
                                <option value="866">Tiassale</option>
                                <option value="867">Tibeita</option>
                                <option value="1140">Tie Ndiekro</option>
                                <option value="869">Tiebissou</option>
                                <option value="870">Tiedio</option>
                                <option value="871">Tiegba</option>
                                <option value="872">Tiekpe</option>
                                <option value="873">Tieme</option>
                                <option value="874">Tiemelekro</option>
                                <option value="875">Tienindieri</option>
                                <option value="876">Tieningboue</option>
                                <option value="878">Tienko (departement de Touba)</option>
                                <option value="877">Tienko Minignan</option>
                                <option value="879">Tienkoikro</option>
                                <option value="880">Tieny-Seably</option>
                                <option value="881">Tieole-Oula</option>
                                <option value="882">Tieviessou</option>
                                <option value="883">Timbe</option>
                                <option value="884">Tinhou</option>
                                <option value="885">Tiobly</option>
                                <option value="886">Tioro</option>
                                <option value="887">Tofla</option>
                                <option value="888">Togoniere</option>
                                <option value="889">Toliesso</option>
                                <option value="890">Tomono</option>
                                <option value="891">Tonla</option>
                                <option value="892">Torossanguehi</option>
                                <option value="893">Tortiya</option>
                                <option value="894">Totrodrou</option>
                                <option value="895">Touba</option>
                                <option value="896">Toubalo</option>
                                <option value="897">Tougbo</option>
                                <option value="898">Touih</option>
                                <option value="899">Toukouzou</option>
                                <option value="900">Toulepleu</option>
                                <option value="901">Toumodi</option>
                                <option value="902">Toumodi-Sakassou</option>
                                <option value="903">Toumoukoro</option>
                                <option value="904">Toupah</option>
                                <option value="905">Toutoubre</option>
                                <option value="906">Trafesso</option>
                                <option value="907">Transua</option>
                                <option value="908">Treichville</option>
                                <option value="909">Vaafla</option>
                                <option value="910">Vao</option>
                                <option value="911">Varale</option>
                                <option value="912">Vavoua</option>
                                <option value="913">Voueboufla</option>
                                <option value="914">Walebo</option>
                                <option value="915">Wate</option>
                                <option value="916">Wonsealy</option>
                                <option value="917">Worofla</option>
                                <option value="918">Yaakro</option>
                                <option value="919">Yabayo</option>
                                <option value="920">Yacolidabouo</option>
                                <option value="921">Yakasse-Attobrou</option>
                                <option value="922">Yakasse-Feyasse</option>
                                <option value="923">Yakasse-Me</option>
                                <option value="924">Yakpabo-Sakassou</option>
                                <option value="925">Yala (Vavoua)</option>
                                <option value="926">Yamoussoukro</option>
                                <option value="927">Yaossedougou</option>
                                <option value="928">Yaou</option>
                                <option value="929">Yapleu</option>
                                <option value="930">Yelleu</option>
                                <option value="931">Yeretiele</option>
                                <option value="932">Yezimala</option>
                                <option value="933">Yobouakro</option>
                                <option value="934">Yocoboue</option>
                                <option value="935">Yokorea</option>
                                <option value="936">Yoouredoula</option>
                                <option value="937">Yopohue</option>
                                <option value="938">Yopougon</option>
                                <option value="939">Yorobodi</option>
                                <option value="940">Yorodougou</option>
                                <option value="941">Yrozon</option>
                                <option value="942">Zagne</option>
                                <option value="943">Zagoreta-Gadouan</option>
                                <option value="944">Zagoue (Man)</option>
                                <option value="945">Zaguieta</option>
                                <option value="946">Zaguinasso</option>
                                <option value="947">Zahia</option>
                                <option value="948">Zaibo</option>
                                <option value="949">Zakoeoua</option>
                                <option value="950">Zaliohouan</option>
                                <option value="951">Zambakro</option>
                                <option value="952">Zanzansou</option>
                                <option value="953">Zanzra</option>
                                <option value="954">Zaranou</option>
                                <option value="955">Zatta</option>
                                <option value="956">Zeaglo</option>
                                <option value="957">Zebouo Nord (Daloa Nord)</option>
                                <option value="958">Zebra</option>
                                <option value="959">Zede-Dianhoun</option>
                                <option value="960">Zego</option>
                                <option value="961">Zemenafla-V</option>
                                <option value="962">Zeo</option>
                                <option value="963">Zeregbo</option>
                                <option value="964">Zialegrehoa</option>
                                <option value="965">Ziki-Dies</option>
                                <option value="966">Zikisso</option>
                                <option value="967">Ziogouine</option>
                                <option value="968">Zirifla</option>
                                <option value="969">Zokoguhe</option>
                                <option value="970">Zonneu</option>
                                <option value="971">Zorofla</option>
                                <option value="972">Zou</option>
                                <option value="973">Zouan-Hounien</option>
                                <option value="974">Zouatta</option>
                                <option value="975">Zougounefla</option>
                                <option value="976">Zoukougbeu</option>
                                <option value="977">Zoukpangbeu</option>
                                <option value="978">Zoupleu</option>
                                <option value="979">Zraluo</option>
                                <option value="980">Zro</option>
                                <option value="981">Zuenoula</option>
                            </select>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="pieceidentite" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Type pièce d'identité  -- </option>
                                <option value="Attestation">Attestation</option>
                                <option value="CNI">CNI</option>
                                <option value="Passeport">Passeport</option>
                                <option value="Permis de conduire">Permis de conduire</option>
                            </select>
                        </div><br>
                    </div>

                    <div class="col-lg-6">
                        <div class="cfield">
                            <input type="text" placeholder="Numero de la pièce" name="numeropiece"/>
                            <i class="la la-credit-card"></i>
                        </div><br>
                    </div>
                    <div class="col-lg-6">
                        <div class="pf-field" style="margin-bottom: 19px;">
                            <select data-placeholder="Allow In Search" name="situationhandicap" class="chosen" style="display: none;">
                                <option disabled="" selected="" value=""> -- Situation de handicap  -- </option>
                                <option value="Handicap">Handicap</option>
                                <option value="Sans handicap">Sans handicap</option>
                            </select>
                        </div><br>
                    </div>

                    <fieldset>
                        <legend>Vos paramêtres de connexion</legend>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="cfield">
                                    <input type="text" placeholder="Entrer votre numéro de téléphone" name="telephone" />
                                    <i class="la la-credit-card"></i>
                                </div><br>
                            </div>
                            <div class="col-lg-6">
                                <div class="cfield">
                                    <input type="text" placeholder="Entrer votre email" name="email"/>
                                    <i class="la la-credit-card"></i>
                                </div><br>
                            </div>

                            <div class="col-lg-6">
                                <div class="cfield">
                                    <input type="password" placeholder="Taper votre mot de passe" name="password" />
                                    <i class="la la-credit-card"></i>
                                </div><br>
                            </div>

                            <div class="col-lg-6">
                                <div class="cfield">
                                    <input type="password" placeholder="Retaper votre mot de passe" name="password1" />
                                    <i class="la la-credit-card"></i>
                                </div><br>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <button type="submit" style="background-color: #28a745;">Soumettre</button>
            </form>

        <div class="extra-login">
            <span>Ou</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->
<script data-cfasync="false" src="{{ asset('assets_aepj/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('assets_aepj/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_aepj/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_aepj/js/script.js') }}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/parallax.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/select-chosen.js')}}" type="text/javascript"></script>
<script>

   $('#select-entreprise').click(function() {
       $('#form-jeune').fadeOut();
       $('#form-cabinet').fadeOut();
       $('#form-entreprise').fadeIn();
   });

   $('#select-cabinet').click(function() {
       $('#form-cabinet').fadeIn();
       $('#form-jeune').fadeOut();
       $('#form-entreprise').fadeOut();
   });

   $('#select-jeune').click(function() {
       $('#form-jeune').fadeIn();
       $('#form-cabinet').fadeOut();
       $('#form-entreprise').fadeOut();
    });
</script>

</body>
</html>
