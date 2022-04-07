<?php
/**
 * @package     Facile
 *
 * @copyright   Copyright (C) Facile. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

\defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
</head>

<body>
    <header>
        <div>
            <jdoc:include type="modules" name="topbar" style="none" />
        </div>

        <div>
            <jdoc:include type="modules" name="below-top" style="none" />
        </div>

        <div>
            <nav>
                <div>
                    <jdoc:include type="modules" name="menu" />
                </div>
            </nav>
            <div>
                <jdoc:include type="modules" name="search" />
            </div>
        </div>
    </header>

    <div>
        <jdoc:include type="modules" name="banner" />
    </div>

    <div>
        <jdoc:include type="modules" name="top-a" />
    </div>

    <div>
        <jdoc:include type="modules" name="top-b" />
    </div>

    <div>
        <jdoc:include type="modules" name="sidebar-left" />
    </div>

    <div>
        <jdoc:include type="modules" name="breadcrumbs" />
        <jdoc:include type="modules" name="main-top" />
        <jdoc:include type="message" />
        <main>
            <jdoc:include type="component" />
        </main>
        <jdoc:include type="modules" name="main-bottom" />
    </div>

    <div>
        <jdoc:include type="modules" name="sidebar-right" />
    </div>

    <div>
        <jdoc:include type="modules" name="bottom-a" />
    </div>

    <div>
        <jdoc:include type="modules" name="bottom-b" />
    </div>

    <footer>
        <jdoc:include type="modules" name="footer" />
    </footer>

    <jdoc:include type="modules" name="debug" />

</body>

</html>