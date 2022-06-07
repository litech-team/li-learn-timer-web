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
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'ip' => 'Lorem ipsum dolor sit amet',
                'mac' => 'Lorem ipsu',
                'is_tmp_account' => 'Lorem ipsum dolor sit amet',
                'unlock_ticket_count' => 1,
                'created' => '2022-06-07 02:13:36',
                'modified' => '2022-06-07 02:13:36',
            ],
        ];
        parent::init();
    }
}
