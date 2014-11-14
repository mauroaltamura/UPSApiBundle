<?php

namespace Hautelook\UPSApiBundle\Tests\Functional;

use Ups\QuantumView;

class QuantumViewTest extends TestCase
{
    public function testQuantumViewService()
    {
        $kernel = $this->getKernel();
        $ups = $kernel->getContainer()->get('hautelook_ups_api.quantum_view');

        $this->assertInstanceOf(QuantumView::class, $ups);
    }
} 
