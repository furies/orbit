<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_fca049004c90fc99783f80bbf147713b403ee361640c9071b1a5750043f104f0 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  185 => 75,  174 => 74,  167 => 71,  153 => 69,  118 => 49,  113 => 48,  389 => 160,  386 => 159,  380 => 158,  378 => 157,  367 => 155,  363 => 153,  361 => 152,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  326 => 138,  321 => 135,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  248 => 97,  222 => 83,  216 => 79,  197 => 69,  194 => 68,  191 => 77,  184 => 63,  178 => 59,  175 => 58,  170 => 56,  134 => 54,  70 => 15,  34 => 5,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 129,  371 => 156,  359 => 123,  356 => 122,  353 => 149,  350 => 120,  347 => 119,  338 => 116,  333 => 115,  328 => 139,  324 => 112,  315 => 131,  313 => 110,  274 => 110,  237 => 91,  234 => 90,  232 => 88,  213 => 78,  210 => 77,  207 => 76,  186 => 72,  180 => 70,  172 => 57,  161 => 58,  155 => 47,  152 => 46,  114 => 36,  104 => 42,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 529,  807 => 528,  790 => 519,  788 => 518,  780 => 513,  774 => 509,  770 => 507,  764 => 505,  762 => 504,  745 => 493,  742 => 492,  740 => 491,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 479,  698 => 477,  696 => 476,  692 => 474,  686 => 472,  678 => 468,  676 => 467,  671 => 465,  655 => 457,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 442,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 419,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  280 => 194,  276 => 111,  271 => 190,  262 => 93,  251 => 182,  249 => 92,  77 => 20,  110 => 22,  90 => 20,  84 => 29,  127 => 35,  97 => 41,  76 => 25,  308 => 109,  297 => 200,  293 => 120,  289 => 196,  284 => 5,  281 => 114,  225 => 77,  223 => 74,  879 => 609,  865 => 607,  861 => 606,  857 => 604,  843 => 602,  839 => 601,  835 => 599,  821 => 597,  817 => 596,  814 => 595,  800 => 523,  796 => 521,  793 => 591,  779 => 589,  775 => 588,  772 => 587,  758 => 585,  754 => 499,  751 => 583,  737 => 490,  733 => 580,  730 => 579,  716 => 577,  712 => 576,  709 => 575,  689 => 573,  685 => 572,  682 => 470,  668 => 464,  664 => 463,  661 => 567,  647 => 565,  643 => 564,  639 => 562,  625 => 560,  621 => 559,  618 => 558,  604 => 556,  600 => 555,  218 => 176,  190 => 150,  58 => 14,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 138,  402 => 130,  398 => 136,  393 => 126,  387 => 122,  384 => 132,  381 => 120,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 108,  298 => 91,  294 => 90,  285 => 100,  283 => 115,  278 => 86,  268 => 85,  264 => 84,  258 => 187,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 56,  214 => 69,  177 => 69,  169 => 60,  140 => 55,  132 => 51,  128 => 42,  107 => 36,  61 => 17,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 71,  221 => 80,  219 => 76,  217 => 75,  208 => 76,  204 => 78,  179 => 69,  159 => 57,  143 => 56,  135 => 46,  119 => 42,  102 => 41,  71 => 19,  67 => 20,  63 => 18,  59 => 16,  94 => 21,  89 => 20,  85 => 23,  75 => 18,  68 => 24,  56 => 11,  28 => 3,  201 => 74,  196 => 90,  183 => 71,  171 => 73,  166 => 54,  163 => 53,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 37,  105 => 25,  91 => 33,  62 => 12,  49 => 14,  87 => 34,  21 => 1,  38 => 7,  26 => 9,  24 => 3,  31 => 4,  25 => 35,  19 => 1,  93 => 27,  88 => 32,  78 => 19,  46 => 13,  44 => 10,  27 => 3,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 96,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 31,  115 => 43,  111 => 47,  108 => 33,  101 => 30,  98 => 31,  96 => 37,  83 => 33,  74 => 27,  66 => 24,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 66,  187 => 84,  182 => 133,  176 => 64,  173 => 126,  168 => 72,  164 => 70,  162 => 57,  154 => 58,  149 => 51,  147 => 43,  144 => 42,  141 => 48,  133 => 45,  130 => 41,  125 => 51,  122 => 43,  116 => 41,  112 => 42,  109 => 27,  106 => 45,  103 => 32,  99 => 23,  95 => 27,  92 => 54,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 6,  57 => 12,  54 => 10,  51 => 13,  48 => 9,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}