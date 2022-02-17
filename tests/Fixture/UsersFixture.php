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
                'id' => 'd9bb98b1-523a-4f60-97bf-92cf524d3143',
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'serial_number' => 'Lorem ',
                'unlock_ticket_count' => 1,
                'created' => '2022-02-17 07:44:26',
                'modified' => '2022-02-17 07:44:26',
            ],
        ];
        parent::init();
    }
}
