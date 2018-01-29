<?php

namespace Gan;

/**
 * Entity manager for the Open entity.
 */
class OpenManager extends EntityManager
{
    protected $basePath = 'reports';
    protected $entityClass = '\Gan\Open';
    protected $writableFields = [];
    protected $lookupField = 'report_id';
    
    protected function getPath($id)
    {
        return rtrim($this->basePath, '/') . '/' . rtrim($id, '/') . '/' . 'opens/?paginate_by=100';
    }
    
    public function constructEntity($data)
    {
        $array = [];
        foreach ($data->body['results'] as $result)
        {
            $entity = new $this->entityClass();
            foreach (array_keys(get_object_vars($entity)) as $property) {
                if (property_exists($result, $property)) {
                    $entity->$property = $result->$property;
                }
            }
            array_push($array, $entity);
        }
        return $array;
}
