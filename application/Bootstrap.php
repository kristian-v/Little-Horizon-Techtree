<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Initializes the database connection.
     *
     * @return void
     */
    protected function _initDb()
    {
        $options  = $this->getOption('resources');
        $dbObject = new TechTree_Db($options['db']);
        TechTree_Db_Model::setDefaultDbConnection($dbObject);
    }
}

