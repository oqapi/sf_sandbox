<?php

/**
 * BannerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class BannerTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object BannerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Banner');
    }

    public function getBannersFromProject($projectId)
    {
      $q = $this->createQuery('j')
        ->where('j.project_id = ?',$projectId);

      return $q->execute();
    }

}
