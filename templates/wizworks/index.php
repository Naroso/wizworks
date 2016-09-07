<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.wizworks
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
if (file_exists(__DIR__ . '/config.php')) {
    include_once __DIR__ . '/config.php';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <jdoc:include type="head" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo JUri::root(true); ?>/templates/<?php echo $this->template?>/css/docs.css">
    <link rel="stylesheet" href="<?php echo JUri::root(true); ?>/templates/<?php echo $this->template?>/css/theme.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<!--    <script>!function (e, t, a, n, c, o, s) {-->
<!--        e.GoogleAnalyticsObject = c, e[c] = e[c] || function () {-->
<!--                (e[c].q = e[c].q || []).push(arguments)-->
<!--            }, e[c].l = 1 * new Date, o = t.createElement(a), s = t.getElementsByTagName(a)[0], o.async = 1, o.src = n, s.parentNode.insertBefore(o, s)-->
<!--    }(window, document, "script", "//www.google-analytics.com/analytics.js", "ga"), ga("create", "XX-XXXXXX-XX", "wizworks.com"), ga("send", "pageview")</script>-->
</head>
<body>
    <a href="#content" class="sr-only sr-only-focusable" id="skippy"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>
    <a href="#" class="v4-tease">Aww yeah, 10% DISCOUNT for all Returning Customers!</a>
    <header class="bs-docs-nav navbar navbar-static-top" id="top">
        <div class=container>
            <div class=navbar-header>
                <button aria-controls=bs-navbar aria-expanded=false class="collapsed navbar-toggle"
                        data-target=#bs-navbar
                        data-toggle=collapse type=button>
                    <span class=sr-only>Toggle navigation</span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                </button>
                <a href="<?php echo JUri::root(true) ?>" class=navbar-brand>{{wizworks}}</a>
            </div>
            <nav class="collapse navbar-collapse" role="navigation" id=bs-navbar>
                <jdoc:include type="modules" name="nav-global" style="none" />
                <a id="custom-quote-button" class="btn btn-large btn-primary pull-right" href="javascript:void(0)">Request A free Quote</a>
            </nav>
        </div>
    </header>
    <jdoc:include type="modules" name="top-1" style="none" />
    <jdoc:include type="modules" name="top-2" style="none" />
    <jdoc:include type="modules" name="top-3" style="none" />
    <main class="container bs-docs-container">
        <div class="row">
            <!-- Begin Content -->
            <jdoc:include type="modules" name="content-top" style="xhtml" />
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="content-bottom" style="none" />
            <!-- End Content -->
        </div>
    </main>
    <jdoc:include type="modules" name="bottom-1" style="none" />
    <jdoc:include type="modules" name="bottom-2" style="none" />
    <jdoc:include type="modules" name="bottom-3" style="none" />

    <footer class="bs-docs-footer">
        <div class="container">
            <ul class=bs-docs-footer-links>
                <li><a href=https://github.com/twbs/bootstrap>GitHub</a></li>
                <li><a href=https://twitter.com/getbootstrap>Twitter</a></li>
                <li><a href=../getting-started/#examples>Examples</a></li>
                <li><a href=../about/ >About</a></li>
            </ul>
            <p>Designed and built with all the love in the world by <a href=https://twitter.com/mdo target=_blank>@mdo</a>
                and <a href=https://twitter.com/fat target=_blank>@fat</a>. Maintained by the <a
                    href=https://github.com/orgs/twbs/people>core team</a> with the help of <a
                    href=https://github.com/twbs/bootstrap/graphs/contributors>our contributors</a>.</p>
            <p>Code licensed <a href=https://github.com/twbs/bootstrap/blob/master/LICENSE target=_blank rel=license>MIT</a>,
                docs <a href=https://creativecommons.org/licenses/by/3.0/ target=_blank rel=license>CC BY 3.0</a>.</p>
        </div>
    </footer>
    <jdoc:include type="modules" name="debug" style="none" />
</body>
</html>