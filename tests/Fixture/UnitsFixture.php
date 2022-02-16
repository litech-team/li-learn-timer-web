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
                'serial_number' => '2566f7f6-caef-4042-953a-ed4cb27e3711',
                'status' => 'Lorem ipsum dolor ',
                'manufactured' => '2022-02-16 13:55:49',
            ],
        ];
        parent::init();
    }
}
