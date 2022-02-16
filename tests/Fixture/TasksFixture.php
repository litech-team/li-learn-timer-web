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
                'id' => '97c6ba25-3bb4-4d44-8b9c-b3090d0f90dd',
                'taskname' => 'Lorem ipsum dolor sit amet',
                'pomodoro_count' => 1,
                'importance_level' => 1,
                'urgency_level' => 1,
                'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'status' => 'Lorem ipsum dolor ',
                'user_id' => 'c37c4b72-71dd-43ba-a44c-149f0281b298',
                'created' => '2022-02-15 16:47:49',
                'modified' => '2022-02-15 16:47:49',
            ],
        ];
        parent::init();
    }
}
