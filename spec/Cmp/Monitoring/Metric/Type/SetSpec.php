<?php

namespace spec\Cmp\Monitoring\Metric\Type;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SetSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('name', 'value', array('tags'), 1);
    }

    function it_can_be_initialized()
    {
        $this->shouldHaveType('Cmp\Monitoring\Metric\Type\Set');
    }

    function it_can_return_the_correct_type()
    {
        $this->getType()->shouldReturn('set');
    }
}
