<?php namespace Lovata\Toolbox\Classes\Parser\Create;

/**
 * Class ControllerConfigImportExportCreateFile
 * @package Lovata\Toolbox\Classes\Parser\Create
 * @author Sergey Zakharevich, s.zakharevich@lovata.com, LOVATA Group
 */
class ControllerConfigImportExportCreateFile extends CommonCreateFile
{
    /** @var string */
    protected $sFile = 'config_import_export.yaml';
    /** @var string */
    protected $sFolderPath = '/{{lower_author}}/{{lower_plugin}}/controllers/{{lower_controller}}/';
    /** @var string */
    protected $sTemplatePath = '/lovata/toolbox/classes/parser/templates/controller_config_import_export.stub';
}
