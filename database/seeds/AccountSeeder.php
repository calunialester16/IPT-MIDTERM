<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Calunia Regular Account',
                'init_invest' => 78900,
                'start_date' => '2021-08-13',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Bohol Quality Trust Fund',
                'init_invest' => 290500,
                'start_date' => '2010-03-22',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Acejoy M. Regular Account',
                'init_invest' => 80000,
                'start_date' => '2022-02-13',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 4,
                'acct_name' => 'Steve H. Regular Account',
                'init_invest' => 150000,
                'start_date' => '2014-09-14',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 5,
                'acct_name' => 'Alturas Group Fund',
                'init_invest' => 750000,
                'start_date' => '2016-12-13',
                'remarks' => 'Done with normal transaction'
            ],
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
