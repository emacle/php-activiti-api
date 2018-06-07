<?php

namespace Activiti\Client\Model;

abstract class AbstractList implements \IteratorAggregate
{
    /**
     * @var array
     */
    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data['data']);
    }

    public function getTotal()
    {
        return $this->data['total'];
    }

    public function getStart()
    {
        return $this->data['start'];
    }

    public function getSize()
    {
        return $this->data['size'];
    }

    public function getSort()
    {
        return $this->data['sort'];
    }

    public function getOrder()
    {
        return $this->data['order'];
    }

    /**
     * Get an array with the values of a given column.
     *
     * @param $column
     * @param null $key
     * @return array
     */
    public function pluck($column, $key = null)
    {
        $results = [];

        foreach ($this->data['data'] as $item) {
            if (is_null($key)) {
                $results[] = $item->$column;
            } else {
                $results[$item->$key] = $item->$column;
            }
        }

        return $results;
    }
}
