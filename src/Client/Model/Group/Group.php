<?php

namespace Activiti\Client\Model\Group;

use Activiti\Client\Model\AbstractModel;

class Group extends AbstractModel
{
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getId()
    {
        return $this->data['id'];
    }

    public function getUrl()
    {
        return $this->data['url'];
    }

    public function getName()
    {
        return $this->data['name'];
    }

    public function getType()
    {
        return $this->data['type'];
    }
}
