<?php
namespace TestApp\View\Schema;

use JsonApi\View\Schema\EntitySchema;

class AuthorSchema extends EntitySchema
{
    public function getId($entity)
    {
        return $entity->get('id');
    }

    public function getAttributes($entity)
    {
        return [
            'name' => $entity->name,
        ];
    }

    public function getRelationships($entity, array $includeRelationships = [])
    {
        return [
            'articles' => [
                self::DATA => $entity->articles
            ]
        ];
    }
}
