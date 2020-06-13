<?php

use Illuminate\Database\Seeder;
use App\EsosasPreces;
use App\ZieduGlabApstakli;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ZieduGlabApstakli::truncate();
        EsosasPreces::truncate();

      ZieduGlabApstakli::create(array('id' => 1,'ZiedaPuskaVeids' => 'Rozes','Mitrums' => 85.00,'Temperatura' => 10.00));
       ZieduGlabApstakli::create(array('id' => 2,'ZiedaPuskaVeids' => 'Tulpes','Mitrums' => 75.00,'Temperatura' => 15.00));
       ZieduGlabApstakli::create(array('id' => 3,'ZiedaPuskaVeids' => 'Lavanda','Mitrums' => 65.00,'Temperatura' => 15.00));
       ZieduGlabApstakli::create(array('id' => 4,'ZiedaPuskaVeids' => 'Gerbazas','Mitrums' => 60.00,'Temperatura' => 20.00));
       ZieduGlabApstakli::create(array('id' => 5,'ZiedaPuskaVeids' => 'Puskis Luiza','Mitrums' => 40.00,'Temperatura' => 16.00));
       ZieduGlabApstakli::create(array('id' => 6,'ZiedaPuskaVeids' => 'Puskis Pavasara','Mitrums' => 71.00,'Temperatura' => 17.00));
       ZieduGlabApstakli::create(array('id' => 7,'ZiedaPuskaVeids' => 'Puskis Flora','Mitrums' => 85.00,'Temperatura' => 18.00));
       ZieduGlabApstakli::create(array('id' => 8,'ZiedaPuskaVeids' => 'Puskis Ziema','Mitrums' => 83.00,'Temperatura' => 16.00));
       ZieduGlabApstakli::create(array('id' => 9,'ZiedaPuskaVeids' => 'Hortenzijas','Mitrums' => 70.00,'Temperatura' => 16.00));
       ZieduGlabApstakli::create(array('id' => 10,'ZiedaPuskaVeids' => 'Puskis Vasara','Mitrums' => 65.00,'Temperatura' => 11.00));
       ZieduGlabApstakli::create(array('id' => 11,'ZiedaPuskaVeids' => 'Nelkes','Mitrums' => 60.00,'Temperatura' => 16.00));
       ZieduGlabApstakli::create(array('id' => 12,'ZiedaPuskaVeids' => 'Peonijas','Mitrums' => 50.00,'Temperatura' => 13.00));
       ZieduGlabApstakli::create(array('id' => 13,'ZiedaPuskaVeids' => 'Orhidejas','Mitrums' => 55.00,'Temperatura' => 12.00));
       ZieduGlabApstakli::create(array('id' => 14,'ZiedaPuskaVeids' => 'Frezijas','Mitrums' => 50.00,'Temperatura' => 7.00));
       ZieduGlabApstakli::create(array('id' => 15,'ZiedaPuskaVeids' => 'Astromerijas','Mitrums' => 70.00,'Temperatura' => 20.00));
       ZieduGlabApstakli::create(array('id' => 16,'ZiedaPuskaVeids' => 'Krizantemas','Mitrums' => 80.00,'Temperatura' => 19.00));
       ZieduGlabApstakli::create(array('id' => 17,'ZiedaPuskaVeids' => 'Lilijas','Mitrums' => 40.00,'Temperatura' => 18.00));
       ZieduGlabApstakli::create(array('id' => 18,'ZiedaPuskaVeids' => 'Puskis Maja','Mitrums' => 45.00,'Temperatura' => 17.00));
       ZieduGlabApstakli::create(array('id' => 19,'ZiedaPuskaVeids' => 'Puskis Vesture','Mitrums' => 65.00,'Temperatura' => 16.00));
       ZieduGlabApstakli::create(array('id' => 20,'ZiedaPuskaVeids' => 'Puskis Milestiba','Mitrums' => 60.00,'Temperatura' => 15.00));
       
      
      

        EsosasPreces::create(array('id'=>1,'PartijasKods'=>'kods1', 'DerigumaTermins'=>'2020-06-25', 'PiegadesDatums'=>'2020-05-25','ZieduSkaits'=>24, 'ZiedaPuskaVeids'=>'Rozes' ));
        EsosasPreces::create(array('id'=>2,'PartijasKods'=>'kods4', 'DerigumaTermins'=>'2020-07-01', 'PiegadesDatums'=>'2020-05-20','ZieduSkaits'=>19, 'ZiedaPuskaVeids'=>'Tulpes' ));
        EsosasPreces::create(array('id'=>3,'PartijasKods'=>'kods8', 'DerigumaTermins'=>'2020-07-01', 'PiegadesDatums'=>'2020-05-26','ZieduSkaits'=>250, 'ZiedaPuskaVeids'=>'Lavanda' ));
        EsosasPreces::create(array('id'=>4,'PartijasKods'=>'kods11', 'DerigumaTermins'=>'2020-07-03', 'PiegadesDatums'=>'2020-05-24','ZieduSkaits'=>280, 'ZiedaPuskaVeids'=>'Gerbazas' ));
        EsosasPreces::create(array('id'=>5,'PartijasKods'=>'kods12', 'DerigumaTermins'=>'2020-07-01', 'PiegadesDatums'=>'2020-05-23','ZieduSkaits'=>65, 'ZiedaPuskaVeids'=>'Hortenzijas' ));
        EsosasPreces::create(array('id'=>6,'PartijasKods'=>'kods13', 'DerigumaTermins'=>'2020-06-10', 'PiegadesDatums'=>'2020-05-30','ZieduSkaits'=>78, 'ZiedaPuskaVeids'=>'Nelkes' ));
        EsosasPreces::create(array('id'=>7,'PartijasKods'=>'kods16', 'DerigumaTermins'=>'2020-07-04', 'PiegadesDatums'=>'2020-05-25','ZieduSkaits'=>42, 'ZiedaPuskaVeids'=>'Peonijas' ));
        EsosasPreces::create(array('id'=>9,'PartijasKods'=>'kods17', 'DerigumaTermins'=>'2020-07-23', 'PiegadesDatums'=>'2020-05-27','ZieduSkaits'=>264, 'ZiedaPuskaVeids'=>'Orhidejas' ));
        EsosasPreces::create(array('id'=>10,'PartijasKods'=>'kods18', 'DerigumaTermins'=>'2020-07-06', 'PiegadesDatums'=>'2020-05-31','ZieduSkaits'=>25, 'ZiedaPuskaVeids'=>'Frezijas' ));
        EsosasPreces::create(array('id'=>11,'PartijasKods'=>'kods20', 'DerigumaTermins'=>'2020-07-02', 'PiegadesDatums'=>'2020-05-20','ZieduSkaits'=>75, 'ZiedaPuskaVeids'=>'Puskis Luiza' ));
        EsosasPreces::create(array('id'=>12,'PartijasKods'=>'kods21', 'DerigumaTermins'=>'2020-07-04', 'PiegadesDatums'=>'2020-05-22','ZieduSkaits'=>12, 'ZiedaPuskaVeids'=>'Puskis Pavasara' ));
        EsosasPreces::create(array('id'=>13,'PartijasKods'=>'kods23', 'DerigumaTermins'=>'2020-07-09', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>11, 'ZiedaPuskaVeids'=>'Puskis Flora' ));


        EsosasPreces::create(array('id'=>8,'PartijasKods'=>'kods43', 'DerigumaTermins'=>'2020-07-07', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Puskis Milestiba' ));
        EsosasPreces::create(array('id'=>14,'PartijasKods'=>'kods65', 'DerigumaTermins'=>'2020-07-06', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Puskis Ziema' ));
        EsosasPreces::create(array('id'=>15,'PartijasKods'=>'kods78', 'DerigumaTermins'=>'2020-07-05', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Puskis Vasara' ));
        EsosasPreces::create(array('id'=>16,'PartijasKods'=>'kods89', 'DerigumaTermins'=>'2020-07-04', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Astromerijas' ));
        EsosasPreces::create(array('id'=>17,'PartijasKods'=>'kods90', 'DerigumaTermins'=>'2020-07-03', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Krizantemas' ));
        EsosasPreces::create(array('id'=>18,'PartijasKods'=>'kods34', 'DerigumaTermins'=>'2020-07-01', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Lilijas' ));
        EsosasPreces::create(array('id'=>19,'PartijasKods'=>'kods47', 'DerigumaTermins'=>'2020-07-05', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Puskis Maja' ));
        EsosasPreces::create(array('id'=>20,'PartijasKods'=>'kods31', 'DerigumaTermins'=>'2020-07-09', 'PiegadesDatums'=>'2020-05-19','ZieduSkaits'=>0, 'ZiedaPuskaVeids'=>'Puskis Vesture' ));

    }
}
