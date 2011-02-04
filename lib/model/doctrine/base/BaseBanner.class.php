<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Banner', 'doctrine');

/**
 * BaseBanner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $project_id
 * @property string $image_url
 * @property string $image_text
 * @property string $banner_url
 * @property string $text_font
 * @property string $text_color
 * @property integer $font_size
 * @property clob $additional_info
 * @property Project $Project
 * @property Doctrine_Collection $Banners
 * 
 * @method integer             getProjectId()       Returns the current record's "project_id" value
 * @method string              getImageUrl()        Returns the current record's "image_url" value
 * @method string              getImageText()       Returns the current record's "image_text" value
 * @method string              getBannerUrl()       Returns the current record's "banner_url" value
 * @method string              getTextFont()        Returns the current record's "text_font" value
 * @method string              getTextColor()       Returns the current record's "text_color" value
 * @method integer             getFontSize()        Returns the current record's "font_size" value
 * @method clob                getAdditionalInfo()  Returns the current record's "additional_info" value
 * @method Project             getProject()         Returns the current record's "Project" value
 * @method Doctrine_Collection getBanners()         Returns the current record's "Banners" collection
 * @method Banner              setProjectId()       Sets the current record's "project_id" value
 * @method Banner              setImageUrl()        Sets the current record's "image_url" value
 * @method Banner              setImageText()       Sets the current record's "image_text" value
 * @method Banner              setBannerUrl()       Sets the current record's "banner_url" value
 * @method Banner              setTextFont()        Sets the current record's "text_font" value
 * @method Banner              setTextColor()       Sets the current record's "text_color" value
 * @method Banner              setFontSize()        Sets the current record's "font_size" value
 * @method Banner              setAdditionalInfo()  Sets the current record's "additional_info" value
 * @method Banner              setProject()         Sets the current record's "Project" value
 * @method Banner              setBanners()         Sets the current record's "Banners" collection
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Joeri de Bruin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBanner extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('banner');
        $this->hasColumn('project_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('image_url', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('image_text', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('banner_url', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('text_font', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('text_color', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('font_size', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('additional_info', 'clob', null, array(
             'type' => 'clob',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Project', array(
             'local' => 'project_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('BannerPosition as Banners', array(
             'local' => 'id',
             'foreign' => 'banner_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}