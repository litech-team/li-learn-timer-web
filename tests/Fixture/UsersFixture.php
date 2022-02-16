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
                'id' => 'f40fd352-1500-4aee-8550-7e3746791435',
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'serial_number' => 'Lorem ',
                'unlock_ticket_count' => 1,
                'created' => '2022-02-16 13:55:32',
                'modified' => '2022-02-16 13:55:32',
            ],
        ];
        parent::init();
    }
}
