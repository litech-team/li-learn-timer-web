<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'serial_number' => '6629bd8a-37d9-4544-8d0b-a6e748a512c7',
                'unlock_ticket_count' => 1,
                'created' => '2022-02-15 16:47:41',
                'modified' => '2022-02-15 16:47:41',
            ],
        ];
        parent::init();
    }
}
