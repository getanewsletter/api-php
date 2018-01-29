<?php

namespace Gan;

/**
 * Entity manager for the Report entity.
 */
class ReportManager extends EntityManager
{
    protected $basePath = 'reports';
    protected $entityClass = '\Gan\Report';
    protected $writableFields = [];
    protected $lookupField = 'report_id';
}
