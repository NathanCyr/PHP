<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '2',
                'username' => 'test',
                'email' => 'test@test.ca',
                'password' => '$2y$10$Uwcq3uGvfmiI8oxt/aCA2unIFZzcTVcZlikeSL/Tawo7qDMiBPOPy',
                'role' => 'user',
                'created' => '2018-09-17 17:10:35',
                'modified' => '2018-09-17 17:10:35',
            ],
            [
                'id' => '7',
                'username' => 'super@super.com',
                'email' => 'super@super.com',
                'password' => '$2y$10$4Vjv.CRhWLnzcAZfMXQt9Ol23fzZ1j1/PGHAm2wS5A0fIUORS2qkO',
                'role' => 'super',
                'created' => '2018-10-04 17:10:05',
                'modified' => '2018-10-04 17:10:05',
            ],
            [
                'id' => '8',
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$n1cx1nHMptBtYE0EyuZn7u94JDR1GgVH6FVoWkSws6ipQK28gX0jO',
                'role' => 'admin',
                'created' => '2018-10-04 17:11:20',
                'modified' => '2018-10-04 17:11:20',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
