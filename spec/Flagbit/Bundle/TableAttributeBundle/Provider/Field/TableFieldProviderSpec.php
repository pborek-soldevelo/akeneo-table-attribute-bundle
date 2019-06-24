<?php

namespace spec\Flagbit\Bundle\TableAttributeBundle\Provider\Field;

use Flagbit\Bundle\TableAttributeBundle\Provider\Field\TableFieldProvider;
use PhpSpec\ObjectBehavior;

class TableFieldProviderSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(TableFieldProvider::class);
    }

    public function it_returns_flagbit_table_field()
    {
        $element = [
            'foo' => 'bar',
        ];
        $this->getField($element)->shouldReturn('flagbit-table-field');
    }
}
