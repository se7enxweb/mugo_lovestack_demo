<?php

function eZSiteAdminINISettings( $parameters )
{
    $installer = new MugoDemoInstaller( $parameters );
    return $installer->adminINISettings();
}

