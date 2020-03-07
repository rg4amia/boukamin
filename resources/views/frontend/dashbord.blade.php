<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tableau de Bord Candidat</title>
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
    <span>Skip Loader</span>
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

    <header class="stick-top">
        <div class="menu-sec">
            <div class="container">
                <div class="logo">
                    <a href="index.html" title=""><img src="{{ asset('assets_aepj/images/resource/logo-ajep.png') }}" alt="" /></a>
                </div><!-- Logo -->
                <div class="my-profiles-sec">
                    <span><img src="assets_aepj/images/resource/mp1.jpg" alt=""/> Stephane AMIA <i class="la la-bars"></i></span>
                </div>
                <div class="wishlist-dropsec">
                    <span><i class="la la-heart"></i><strong>3</strong></span>
                    <div class="wishlist-dropdown">
                        <ul class="scrollbar">
                            <li>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="assets_aepj/images/resource/l1.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                </div><!-- Job -->
                            </li>
                            <li>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="assets_aepj/images/resource/l2.png" alt="" /> </div>
                                        <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                        <span>StarHealth</span>
                                    </div>
                                </div><!-- Job -->
                            </li>
                            <li>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="assets_aepj/images/resource/l3.png" alt="" /> </div>
                                        <h3><a href="#" title="">Marketing Director</a></h3>
                                        <span>Tix Dog</span>
                                    </div>
                                </div><!-- Job -->
                            </li>
                            <li>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="assets_aepj/images/resource/l4.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                </div><!-- Job -->
                            </li>
                            <li>
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="assets_aepj/images/resource/l5.png" alt="" /> </div>
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                    </div>
                                </div><!-- Job -->
                            </li>
                        </ul>
                    </div>
                </div>
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

    <section class="overlape">
        <div class="block no-padding">
            <div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
            <div class="container fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-header">
                            <h3>AKWABA Amia Thierry Stèphane</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="block remove-top">
            <div class="container">
                <div class="row no-gape">
                    <aside class="col-lg-3 column border-right">
                        <div class="widget">
                            <div class="tree_widget-sec">
                                <ul>
                                    <li><a href="candidates_profile.html" title=""><i class="la la-file-text"></i>Tableau de bord</a></li>
                                    <li><a href="candidates_my_resume.html" title=""><i class="la la-briefcase"></i>Profil</a></li>
                                    <li><a href="candidates_shortlist.html" title=""><i class="la la-money"></i>Emplois</a></li>
                                    <li><a href="candidates_applied_jobs.html" title=""><i class="la la-paper-plane"></i>Formations</a></li>
                                    <li><a href="candidates_job_alert.html" title=""><i class="la la-user"></i>Financement</a></li>
                                    <li><a href="candidates_cv_cover_letter.html" title=""><i class="la la-file-text"></i>Allocations</a></li>
                                    <li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Offres et concours</a></li>
                                    <li><a href="#" title=""><i class="la la-unlink"></i>Retour au site</a></li>
                                </ul>
                            </div>
                        </div>
                       {{-- <div class="widget">
                            <div class="skill-perc">
                                <h3>Skills Percentage </h3>
                                <p>Put value for "Cover Image" field to increase your skill up to "15%"</p>
                                <div class="skills-bar">
                                    <span>85%</span>
                                    <div
                                        class="second circle"
                                        data-size="155"
                                        data-thickness="60">
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                    </aside>
                    <div class="col-lg-9 column">
                        <div class="padding-left">
                            <div class="manage-jobs-sec">
                                <div class="border-title"><h3>Tableau de bord </h3>
                                   {{-- <a href="#" title="">
                                        <i class="la la-plus"></i> Add Education
                                    </a>--}}
                                </div>
                                {{--<div class="edu-history-sec">
                                    <div class="edu-history">
                                        <i class="la la-graduation-cap"></i>
                                        <div class="edu-hisinfo">
                                            <h3>University</h3>
                                            <i>2008 - 2012</i>
                                            <span>Middle East Technical University <i>Computer Science</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history">
                                        <i class="la la-graduation-cap"></i>
                                        <div class="edu-hisinfo">
                                            <h3>High School</h3>
                                            <i>2008 - 2012</i>
                                            <span>Tomms College <i>Bachlors in Fine Arts</i></span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>--}}
                               {{-- <div class="border-title"><h3>Expérience professionnelle</h3><a href="#" title=""><i class="la la-plus"></i> Add Experience</a></div>
                                <div class="edu-history-sec">
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Web Designer <span>Inwave Studio</span></h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>CEO Founder <span>Inwave Studio</span></h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Portfolio</h3><a href="#" title=""><i class="la la-plus"></i> Add Portfolio</a></div>
                                <div class="mini-portfolio">
                                    <div class="mp-row">
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p1.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p2.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p3.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="mp-col">
                                            <div class="mportolio"><img src="images/resource/p4.jpg" alt="" /><a href="#" title=""><i class="la la-search"></i></a></div>
                                            <ul class="action_job">
                                                <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                                <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Compétences professionnelles</h3><a href="#" title=""><i class="la la-plus"></i> Add Skills</a></div>
                                <div class="progress-sec">
                                    <div class="progress-sec with-edit">
                                        <span>Adobe Photoshop</span>
                                        <div class="progressbar"> <div class="progress" style="width: 80%;"><span>80%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="progress-sec with-edit">
                                        <span>Production In Html</span>
                                        <div class="progressbar"> <div class="progress" style="width: 60%;"><span>60%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="progress-sec with-edit">
                                        <span>Graphic Design</span>
                                        <div class="progressbar"> <div class="progress" style="width: 75%;"><span>75%</span></div> </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="border-title"><h3>Compétences professionnelles</h3><a href="#" title=""><i class="la la-plus"></i> Add Skills</a></div>
                                <div class="edu-history-sec">
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Perfect Attendance Programs</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>Top Performer Recognition</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="edu-history style2">
                                        <i></i>
                                        <div class="edu-hisinfo">
                                            <h3>King LLC</h3>
                                            <i>2008 - 2012</i>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                        </div>
                                        <ul class="action_job">
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>--}}
                            </div>
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

<div class="profile-sidebar">
    <span class="close-profile"><i class="la la-close"></i></span>
    <div class="can-detail-s">
        <div class="cst"><img src="images/resource/es1.jpg" alt="" /></div>
        <h3>Mr BAMBA</h3>
        <span><i>Administrateur Base</i> Données</span>
        <p><a href="cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f093829591849986959c9189958283c0c8c8b0979d91999cde939f9d">[email&#160;protected]</a></p>
        <p>Member Since, 2017</p>
        <p><i class="la la-map-marker"></i>Istanbul / Turkey</p>
    </div>
    <div class="tree_widget-sec">
        <ul>
            <li><a href="candidates_profile.html" title=""><i class="la la-file-text"></i>My Profile</a></li>
            <li><a href="candidates_my_resume.html" title=""><i class="la la-briefcase"></i>My Resume</a></li>
            <li><a href="candidates_shortlist.html" title=""><i class="la la-money"></i>Shorlisted Job</a></li>
            <li><a href="candidates_applied_jobs.html" title=""><i class="la la-paper-plane"></i>Applied Job</a></li>
            <li><a href="candidates_job_alert.html" title=""><i class="la la-user"></i>Job Alerts</a></li>
            <li><a href="candidates_cv_cover_letter.html" title=""><i class="la la-file-text"></i>Cv & Cover Letter</a></li>
            <li><a href="candidates_change_password.html" title=""><i class="la la-flash"></i>Change Password</a></li>
            <li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
        </ul>
    </div>
</div><!-- Profile Sidebar -->

<div class="view-resumesec">
    <div class="view-resumes">
        <span class="close-resume-popup"><i class="la la-close"></i></span>
        <h3>13 Times Viewed By 8 Companies.</h3>
        <div class="job-listing wtabs">
            <div class="job-title-sec">
                <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                <span>Massimo Artemisis</span>
                <div class="job-lctn">Sacramento, California</div>
            </div>
            <span class="date-resume">11.02.2017</span>
        </div><!-- Job -->
        <div class="job-listing wtabs">
            <div class="job-title-sec">
                <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                <span>Massimo Artemisis</span>
                <div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
            </div>
            <span class="date-resume">11.02.2017</span>
        </div><!-- Job -->
        <div class="job-listing wtabs">
            <div class="job-title-sec">
                <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                <span>Massimo Artemisis</span>
                <div class="job-lctn">Sacramento, California</div>
            </div>
            <span class="date-resume">11.02.2017</span>
        </div><!-- Job -->
        <div class="job-listing wtabs">
            <div class="job-title-sec">
                <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                <span>Massimo Artemisis</span>
                <div class="job-lctn">Sacramento, California</div>
            </div>
            <span class="date-resume">11.02.2017</span>
        </div><!-- Job -->
    </div>
</div>

<div class="follow-companiesec">
    <div class="follow-companies">
        <span class="close-follow-company"><i class="la la-close"></i></span>
        <h3>Follow Companies.</h3>
        <ul id="scrollbar">
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l1.png" alt="" /> </div>
                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                        <h3><a href="#" title="">Tix Dog</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                        <h3><a href="#" title="">StarHealth</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                        <h3><a href="#" title="">Altes Bank</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                        <h3><a href="#" title="">StarHealth</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
            <li>
                <div class="job-listing wtabs">
                    <div class="job-title-sec">
                        <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                        <h3><a href="#" title="">Altes Bank</a></h3>
                        <div class="job-lctn">Sacramento, California</div>
                    </div>
                    <a href="#" title="" class="go-unfollow">Unfollow</a>
                </div><!-- Job -->
            </li>
        </ul>
    </div>
</div>

<script data-cfasync="false" src="{{ asset('assets_aepj/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('assets_aepj/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_aepj/js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_aepj/js/script.js') }}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/parallax.js')}}" type="text/javascript"></script>
<script src="{{asset('assets_aepj/js/select-chosen.js')}}" type="text/javascript"></script>

</body>
</html>

