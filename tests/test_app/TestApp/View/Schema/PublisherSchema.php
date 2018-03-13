<?php
namespace TestApp\View\Schema;

class PublisherSchema extends AuthorSchema
{
    /**
     * @var string Must end with '/'
     */
    protected $selfSubUrl = '/publishers/';
}
