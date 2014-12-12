<?php

/* furiesorbitBundle::baselayout.html.twig */
class __TwigTemplate_ced1b11bbfc6ddc20e8719dea5d1e3f499d1d86808ab32ea9f470c745ed52541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageheading' => array($this, 'block_pageheading'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Furies Orbit Server | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
\t <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- font Awesome -->
\t <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Ionicons -->
\t <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/ionicons.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Morris chart -->
\t <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/morris/morris.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- jvectormap -->
\t <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Date Picker -->
\t <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/datepicker/datepicker3.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Daterange picker -->
\t <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- bootstrap wysihtml5 - text editor -->
\t <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <!-- Theme style -->
\t <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/furiesorbit/css/AdminLTE.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body class=\"skin-blue\">
        <!-- header logo: style can be found in header.less -->
        <header class=\"header\">
            <a href=\"index.html\" class=\"logo\">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Furies Orbit Server
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-tasks\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                <span>
     ";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "
 <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    ";
        // line 133
        echo "                                    <p>
                                         ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " 
                                        <small>Project Develepor</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                ";
        // line 150
        echo "                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"left-side sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    <div class=\"user-panel\">
                        <div class=\"pull-left image\">
                            <img src=\"img/avatar3.png\" class=\"img-circle\" alt=\"User Image\" />
                        </div>
                        <div class=\"pull-left info\">
                            <p>Hello, ";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo "</p>

                            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                            <span class=\"input-group-btn\">
                                <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"active\">
                            <a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getUrl("_orbit_customer_newcustomer");
        echo "\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=\"treeview active\">
                            <a href=\"#\">
                                <i class=\"fa fa-bar-chart-o\"></i>
                                <span>Customers</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getUrl("_orbit_customer_newcustomer");
        echo "\"><i class=\"fa fa-angle-double-right\"></i> New Customer</a></li>
                                <li><a href=\"pages/charts/flot.html\"><i class=\"fa fa-angle-double-right\"></i> Customers List</a></li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>Recharge</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/UI/general.html\"><i class=\"fa fa-angle-double-right\"></i> New Prepaid Recharge</a></li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-edit\"></i> <span>Nas</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/forms/general.html\"><i class=\"fa fa-angle-double-right\"></i> Add New Nas</a></li>
                                <li><a href=\"pages/forms/advanced.html\"><i class=\"fa fa-angle-double-right\"></i> Nas List</a></li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-table\"></i> <span>Tariffs</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/tables/simple.html\"><i class=\"fa fa-angle-double-right\"></i> Add New Tariff</a></li>
                                <li><a href=\"pages/tables/data.html\"><i class=\"fa fa-angle-double-right\"></i> Tariff List</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
        // line 240
        echo $this->env->getExtension('routing')->getUrl("_orbit_customer_newcustomer");
        echo "\">
                                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                                <small class=\"badge pull-right bg-red\">3</small>
                            </a>
                        </li>
                  
                   
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                ";
        // line 256
        $this->displayBlock('pageheading', $context, $blocks);
        // line 261
        echo "                </section>

                <!-- Main content -->
                <section class=\"content\">
                ";
        // line 265
        $this->displayBlock('content', $context, $blocks);
        // line 268
        echo "
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->







        <!-- jQuery 2.0.2 -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <!-- jQuery UI 1.10.3 -->
";
        // line 284
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe73499_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe73499_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe73499_jquery-ui-1.10.3.min_1.js");
            // line 285
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fe73499"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe73499") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/fe73499.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 287
        echo "        <!-- Bootstrap -->
";
        // line 288
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baaaf1f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baaaf1f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baaaf1f_bootstrap.min_1.js");
            // line 289
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "baaaf1f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baaaf1f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baaaf1f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 291
        echo "        <!-- Morris.js charts -->
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
";
        // line 293
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9621f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9621f5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e9621f5_morris.min_1.js");
            // line 294
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e9621f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9621f5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/e9621f5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 296
        echo "        <!-- Sparkline -->
";
        // line 297
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "624220c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_624220c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/624220c_jquery.sparkline.min_1.js");
            // line 298
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "624220c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_624220c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/624220c.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 300
        echo "        <!-- jvectormap -->
";
        // line 301
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8d915b9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8d915b9_part_1_jquery-jvectormap-1.2.2.min_1.js");
            // line 302
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "8d915b9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8d915b9_part_1_jquery-jvectormap-world-mill-en_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "8d915b9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8d915b9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 304
        echo "        <!-- jQuery Knob Chart -->
";
        // line 305
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cceb623_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cceb623_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cceb623_jquery.knob_1.js");
            // line 306
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cceb623"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cceb623") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/cceb623.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 308
        echo "        <!-- daterangepicker -->
";
        // line 309
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "006a18b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_006a18b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/006a18b_daterangepicker_1.js");
            // line 310
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "006a18b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_006a18b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/006a18b.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 312
        echo "        <!-- datepicker -->
";
        // line 313
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "339b57c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_339b57c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/339b57c_bootstrap-datepicker_1.js");
            // line 314
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "339b57c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_339b57c") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/339b57c.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 316
        echo "        <!-- Bootstrap WYSIHTML5 -->
";
        // line 317
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c27571a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c27571a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c27571a_bootstrap3-wysihtml5.all.min_1.js");
            // line 318
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c27571a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c27571a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c27571a.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 320
        echo "        <!-- iCheck -->
";
        // line 321
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "39a9c7a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39a9c7a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/39a9c7a_icheck.min_1.js");
            // line 322
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "39a9c7a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39a9c7a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/39a9c7a.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 324
        echo "        <!-- AdminLTE App -->
";
        // line 325
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "46df233_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46df233_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/46df233_app_1.js");
            // line 326
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "46df233"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46df233") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/46df233.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 328
        echo "
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
";
        // line 330
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18a4e75_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18a4e75_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18a4e75_dashboard_1.js");
            // line 331
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "18a4e75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18a4e75") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/18a4e75.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 333
        echo "
        <!-- AdminLTE for demo purposes -->
";
        // line 335
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "197bf33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_197bf33_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/197bf33_demo_1.js");
            // line 336
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "197bf33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_197bf33") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/197bf33.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 338
        echo "      

    </body>
</html>
";
    }

    // line 256
    public function block_pageheading($context, array $blocks = array())
    {
        // line 257
        echo "                    <h1>
                        Dashboard
                    </h1>
                ";
    }

    // line 265
    public function block_content($context, array $blocks = array())
    {
        // line 266
        echo "                    
                ";
    }

    public function getTemplateName()
    {
        return "furiesorbitBundle::baselayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 266,  640 => 265,  633 => 257,  630 => 256,  622 => 338,  608 => 336,  604 => 335,  600 => 333,  586 => 331,  582 => 330,  578 => 328,  564 => 326,  560 => 325,  557 => 324,  543 => 322,  539 => 321,  536 => 320,  522 => 318,  518 => 317,  515 => 316,  501 => 314,  497 => 313,  494 => 312,  480 => 310,  476 => 309,  473 => 308,  459 => 306,  455 => 305,  452 => 304,  432 => 302,  428 => 301,  425 => 300,  411 => 298,  407 => 297,  404 => 296,  390 => 294,  386 => 293,  382 => 291,  368 => 289,  364 => 288,  361 => 287,  347 => 285,  343 => 284,  325 => 268,  323 => 265,  317 => 261,  315 => 256,  296 => 240,  258 => 205,  244 => 194,  223 => 176,  195 => 150,  187 => 134,  184 => 133,  175 => 126,  70 => 24,  65 => 22,  60 => 20,  55 => 18,  50 => 16,  45 => 14,  35 => 10,  30 => 8,  21 => 1,  46 => 12,  43 => 11,  40 => 12,  32 => 4,  29 => 3,);
    }
}
