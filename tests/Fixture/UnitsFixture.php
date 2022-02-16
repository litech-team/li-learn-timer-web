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
                'serial_number' => '156f3f5f-7901-4fd6-b18a-e173a37c7e48',
                'status' => 'Lorem ipsum dolor ',
                'manufactured' => '2022-02-15 16:48:01',
            ],
        ];
        parent::init();
    }
}
