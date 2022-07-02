<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\FiatRate;

class UpdateFiatRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:FiatRates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Fiat Rates Daily https://fixer.io/';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

    
        try {

            //USDGHS
            $pair='usdghs'; 

            $update=json_decode(fiatConverter($pair)); 
            
            $update=$update->result; 

            $checkpair=FiatRate::where('pair', $pair)->get();

            if($checkpair->count() > 0){


                if($update>0){

                    $store=FiatRate::where('pair', $pair)->update([
                        'rate'=>$update, 
                    ]);

                    print_r('successfully updated');
                
                }

            } else {

                if($update>0){
                    $update=$update;
                } else{

                    $update='8.0';
                }
                

                $store=new FiatRate;
                $store->pair=$pair;
                $store->rate=$update;
                $store->save();

                print_r('successfully stored');
            }

            
        } catch (\Throwable $th) {
            //throw $th;
        }

        
        return 0;
    }
}
