<?php
namespace Clases;

class keyWord extends filter
{
    public function __invoke(array $words,array $keywords)
    {
        return $this->Keywords($words,$keywords);
    }
}