<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TasksFixture
 */
class TasksFixture extends TestFixture
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
                'id' => '72a4997d-57e9-4511-82f9-dcf4c83e56ac',
                'taskname' => 'Lorem ipsum dolor sit amet',
                'pomodoro_count' => 1,
                'importance_level' => 1,
                'urgency_level' => 1,
                'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'status' => 'Lorem ipsum dolor ',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-02-17 07:44:33',
                'modified' => '2022-02-17 07:44:33',
            ],
        ];
        parent::init();
    }
}
