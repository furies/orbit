<?php

/* furiesorbitBundle::baselayout.html.twig */
class __TwigTemplate_ced1b11bbfc6ddc20e8719dea5d1e3f499d1d86808ab32ea9f470c745ed52541 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
        echo "
 <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    ";
        // line 133
        echo "                                    <p>
                                        Sundara Ganesh  
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username"), "html", null, true);
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
                            <a href=\"index.html\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-bar-chart-o\"></i>
                                <span>Customers</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li><a href=\"pages/charts/morris.html\"><i class=\"fa fa-angle-double-right\"></i> New Customer</a></li>
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
                            <a href=\"pages/calendar.html\">
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
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">

                    <!-- Small boxes (Stat box) -->
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-aqua\">
                                <div class=\"inner\">
                                    <h3>
                                        2
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-bag\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-green\">
                                <div class=\"inner\">
                                    <h3>
                                        1<sup style=\"font-size: 20px\">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-stats-bars\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-yellow\">
                                <div class=\"inner\">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-person-add\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class=\"col-lg-3 col-xs-6\">
                            <!-- small box -->
                            <div class=\"small-box bg-red\">
                                <div class=\"inner\">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Users Online
                                    </p>
                                </div>
                                <div class=\"icon\">
                                    <i class=\"ion ion-pie-graph\"></i>
                                </div>
                                <a href=\"#\" class=\"small-box-footer\">
                                    More info <i class=\"fa fa-arrow-circle-right\"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class=\"row\">
                        <!-- Left col -->
                        <section class=\"col-lg-7 connectedSortable\">                            


                            <!-- Custom tabs (Charts with tabs)-->
                            <div class=\"nav-tabs-custom\">
       

                            <!-- TO DO List -->
                            <div class=\"box box-primary\">
                                <div class=\"box-header\">
                                    <i class=\"ion ion-clipboard\"></i>
                                    <h3 class=\"box-title\">To Do List</h3>
                                    <div class=\"box-tools pull-right\">
                                        <ul class=\"pagination pagination-sm inline\">
                                            <li><a href=\"#\">&laquo;</a></li>
                                            <li><a href=\"#\">1</a></li>
                                            <li><a href=\"#\">2</a></li>
                                            <li><a href=\"#\">3</a></li>
                                            <li><a href=\"#\">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    <ul class=\"todo-list\">
                                        <li>
                                            <!-- drag handle -->
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <!-- todo text -->
                                            <span class=\"text\">Design a nice theme</span>
                                            <!-- Emphasis label -->
                                            <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Make the theme responsive</span>
                                            <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Check your messages and notifications</span>
                                            <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class=\"handle\">
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                                <i class=\"fa fa-ellipsis-v\"></i>
                                            </span>
                                            <input type=\"checkbox\" value=\"\" name=\"\"/>
                                            <span class=\"text\">Let theme shine like a star</span>
                                            <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                                            <div class=\"tools\">
                                                <i class=\"fa fa-edit\"></i>
                                                <i class=\"fa fa-trash-o\"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- /.box-body -->
                                <div class=\"box-footer clearfix no-border\">
                                    <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
                                </div>
                            </div><!-- /.box -->


                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class=\"col-lg-5 connectedSortable\"> 

                            <!-- Calendar -->
                            <div class=\"box box-solid bg-green-gradient\">
                                <div class=\"box-header\">
                                    <i class=\"fa fa-calendar\"></i>
                                    <h3 class=\"box-title\">Calendar</h3>
                                    <!-- tools box -->
                                    <div class=\"pull-right box-tools\">
                                        <!-- button with a dropdown -->
                                        <div class=\"btn-group\">
                                            <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                                            <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                                                <li><a href=\"#\">Add new event</a></li>
                                                <li><a href=\"#\">Clear events</a></li>
                                                <li class=\"divider\"></li>
                                                <li><a href=\"#\">View calendar</a></li>
                                            </ul>
                                        </div>
                                        <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                                        <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>                                        
                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class=\"box-body no-padding\">
                                    <!--The calendar -->
                                    <div id=\"calendar\" style=\"width: 100%\"></div>
                                </div><!-- /.box-body -->  
                                <div class=\"box-footer text-black\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <!-- Progress bars -->
                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #1</span>
                                                <small class=\"pull-right\">90%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #2</span>
                                                <small class=\"pull-right\">70%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                                            </div>
                                        </div><!-- /.col -->
                                        <div class=\"col-sm-6\">
                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #3</span>
                                                <small class=\"pull-right\">60%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <span class=\"pull-left\">Task #4</span>
                                                <small class=\"pull-right\">40%</small>
                                            </div>
                                            <div class=\"progress xs\">
                                                <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                                            </div>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->                                                                        
                                </div>
                            </div><!-- /.box -->                            

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->







        <!-- jQuery 2.0.2 -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <!-- jQuery UI 1.10.3 -->
";
        // line 555
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe73499_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe73499_0") : $this->env->getExtension('assets')->getAssetUrl("js/fe73499_jquery-ui-1.10.3.min_1.js");
            // line 556
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "fe73499"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe73499") : $this->env->getExtension('assets')->getAssetUrl("js/fe73499.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 558
        echo "        <!-- Bootstrap -->
";
        // line 559
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baaaf1f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baaaf1f_0") : $this->env->getExtension('assets')->getAssetUrl("js/baaaf1f_bootstrap.min_1.js");
            // line 560
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "baaaf1f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baaaf1f") : $this->env->getExtension('assets')->getAssetUrl("js/baaaf1f.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 562
        echo "        <!-- Morris.js charts -->
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
";
        // line 564
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e9621f5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9621f5_0") : $this->env->getExtension('assets')->getAssetUrl("js/e9621f5_morris.min_1.js");
            // line 565
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "e9621f5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e9621f5") : $this->env->getExtension('assets')->getAssetUrl("js/e9621f5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 567
        echo "        <!-- Sparkline -->
";
        // line 568
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "624220c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_624220c_0") : $this->env->getExtension('assets')->getAssetUrl("js/624220c_jquery.sparkline.min_1.js");
            // line 569
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "624220c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_624220c") : $this->env->getExtension('assets')->getAssetUrl("js/624220c.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 571
        echo "        <!-- jvectormap -->
";
        // line 572
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8d915b9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9_0") : $this->env->getExtension('assets')->getAssetUrl("js/8d915b9_part_1_jquery-jvectormap-1.2.2.min_1.js");
            // line 573
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
            // asset "8d915b9_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9_1") : $this->env->getExtension('assets')->getAssetUrl("js/8d915b9_part_1_jquery-jvectormap-world-mill-en_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "8d915b9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8d915b9") : $this->env->getExtension('assets')->getAssetUrl("js/8d915b9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 575
        echo "        <!-- jQuery Knob Chart -->
";
        // line 576
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "cceb623_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cceb623_0") : $this->env->getExtension('assets')->getAssetUrl("js/cceb623_jquery.knob_1.js");
            // line 577
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "cceb623"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_cceb623") : $this->env->getExtension('assets')->getAssetUrl("js/cceb623.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 579
        echo "        <!-- daterangepicker -->
";
        // line 580
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "006a18b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_006a18b_0") : $this->env->getExtension('assets')->getAssetUrl("js/006a18b_daterangepicker_1.js");
            // line 581
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "006a18b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_006a18b") : $this->env->getExtension('assets')->getAssetUrl("js/006a18b.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 583
        echo "        <!-- datepicker -->
";
        // line 584
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "339b57c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_339b57c_0") : $this->env->getExtension('assets')->getAssetUrl("js/339b57c_bootstrap-datepicker_1.js");
            // line 585
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "339b57c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_339b57c") : $this->env->getExtension('assets')->getAssetUrl("js/339b57c.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 587
        echo "        <!-- Bootstrap WYSIHTML5 -->
";
        // line 588
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c27571a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c27571a_0") : $this->env->getExtension('assets')->getAssetUrl("js/c27571a_bootstrap3-wysihtml5.all.min_1.js");
            // line 589
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c27571a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c27571a") : $this->env->getExtension('assets')->getAssetUrl("js/c27571a.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 591
        echo "        <!-- iCheck -->
";
        // line 592
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "39a9c7a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39a9c7a_0") : $this->env->getExtension('assets')->getAssetUrl("js/39a9c7a_icheck.min_1.js");
            // line 593
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "39a9c7a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39a9c7a") : $this->env->getExtension('assets')->getAssetUrl("js/39a9c7a.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 595
        echo "        <!-- AdminLTE App -->
";
        // line 596
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "46df233_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46df233_0") : $this->env->getExtension('assets')->getAssetUrl("js/46df233_app_1.js");
            // line 597
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "46df233"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_46df233") : $this->env->getExtension('assets')->getAssetUrl("js/46df233.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 599
        echo "
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
";
        // line 601
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "18a4e75_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18a4e75_0") : $this->env->getExtension('assets')->getAssetUrl("js/18a4e75_dashboard_1.js");
            // line 602
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "18a4e75"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_18a4e75") : $this->env->getExtension('assets')->getAssetUrl("js/18a4e75.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 604
        echo "
        <!-- AdminLTE for demo purposes -->
";
        // line 606
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "197bf33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_197bf33_0") : $this->env->getExtension('assets')->getAssetUrl("js/197bf33_demo_1.js");
            // line 607
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "197bf33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_197bf33") : $this->env->getExtension('assets')->getAssetUrl("js/197bf33.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 609
        echo "      

    </body>
</html>
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
        return array (  879 => 609,  865 => 607,  861 => 606,  857 => 604,  843 => 602,  839 => 601,  835 => 599,  821 => 597,  817 => 596,  814 => 595,  800 => 593,  796 => 592,  793 => 591,  779 => 589,  775 => 588,  772 => 587,  758 => 585,  754 => 584,  751 => 583,  737 => 581,  733 => 580,  730 => 579,  716 => 577,  712 => 576,  709 => 575,  689 => 573,  685 => 572,  682 => 571,  668 => 569,  664 => 568,  661 => 567,  647 => 565,  643 => 564,  639 => 562,  625 => 560,  621 => 559,  618 => 558,  604 => 556,  600 => 555,  218 => 176,  190 => 150,  58 => 20,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 22,  59 => 14,  47 => 9,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 24,  56 => 9,  50 => 10,  28 => 8,  43 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  87 => 25,  72 => 16,  66 => 24,  55 => 15,  41 => 7,  29 => 3,  21 => 2,  38 => 12,  26 => 6,  24 => 3,  35 => 5,  31 => 5,  25 => 3,  19 => 1,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  40 => 7,  32 => 4,  27 => 4,  22 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 133,  176 => 64,  173 => 126,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 10,  30 => 7,);
    }
}
