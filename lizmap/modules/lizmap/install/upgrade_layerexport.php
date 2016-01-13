<?php
class lizmapModuleUpgrader_layerexport extends jInstallerModule {

    public $targetVersions = array(
        '3.0pre',
        '3.0beta1',
        '3.0beta2',
        '3.0beta3'
    );
    public $date = '2016-01-10';

    function install() {
        if ($this->firstDbExec() && $this->getParameter('demo')) {
            $this->useDbProfile('jauth');

            // admins
            jAcl2DbManager::addRight('admins', 'lizmap.tools.layer.export', 'intranet');
            jAcl2DbManager::addRight('admins', 'lizmap.tools.layer.export', 'montpellier');

            // lizadmins
            jAcl2DbManager::addRight('lizadmins', 'lizmap.tools.layer.export', 'intranet');
            jAcl2DbManager::addRight('lizadmins', 'lizmap.tools.layer.export', 'montpellier');

            // intranet
            jAcl2DbManager::addRight('intranet', 'lizmap.tools.layer.export', 'intranet');
            jAcl2DbManager::addRight('intranet', 'lizmap.tools.layer.export', 'montpellier');
        }
    }

}
