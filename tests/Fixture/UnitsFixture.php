<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UnitsFixture
 */
class UnitsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'serial_number' => 'c70df75e-0014-4713-a733-035c8484c6bd',
                'status' => 'Lorem ipsum dolor ',
                'manufactured' => '2022-02-17 07:44:38',
            ],
        ];
        parent::init();
    }
}
