<?php

use Illuminate\Database\Seeder;
use App\EsosasPreces;
use App\ZieduGlabApstakli;
use App\Piegadatajs;
use App\Amats;
use App\VeikalaDarbinieks;
use App\Persona;
use App\User;
use App\Adrese;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ZieduGlabApstakli::truncate();
        EsosasPreces::truncate();
        Piegadatajs::truncate();
        Amats::truncate();
        VeikalaDarbinieks::truncate();
        Persona::truncate();
        Adrese::truncate();
        User::truncate();
        $now = new DateTime('now');
       User::create(array('id'=>1, 'name'=>'Administrator','email'=>'admin@ziedi.com', 'password'=>bcrypt('secret'),'role'=>true));

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

       
        
        
        Piegadatajs::create(array('id'=>1, 'ZiedaPuskaVeids'=>'Rozes', 'PersUznKods'=>'140678-23456', 'PVards'=>'Lelde', 'PUzvards'=>'Kermita', 'UznNosaukums'=>NULL, 'Telefons'=>28453656,'CenaParVienu'=>"4.03" , 'BooleanPuskisZieds'=>false, 'adrese_id'=>1  ));
        Piegadatajs::create(array('id'=>2, 'ZiedaPuskaVeids'=>'Tulpes', 'PersUznKods'=>'110678-21156', 'PVards'=>'Volga', 'PUzvards'=>'Daugava', 'UznNosaukums'=>NULL, 'Telefons'=>28453653,'CenaParVienu'=>"3.76" , 'BooleanPuskisZieds'=>false, 'adrese_id'=>2  ));
        Piegadatajs::create(array('id'=>3, 'ZiedaPuskaVeids'=>'Lavanda', 'PersUznKods'=>'352454352434', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'SIA Preces', 'Telefons'=>65445698,'CenaParVienu'=>"6.98" , 'BooleanPuskisZieds'=>false, 'adrese_id'=>3  ));
        Piegadatajs::create(array('id'=>4, 'ZiedaPuskaVeids'=>'Gerbazas', 'PersUznKods'=>'787878777854', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'AS Babcenoka', 'Telefons'=>65489547,'CenaParVienu'=>'10.00' , 'BooleanPuskisZieds'=>false, 'adrese_id'=>4  ));
        Piegadatajs::create(array('id'=>5, 'ZiedaPuskaVeids'=>'Puskis Luiza', 'PersUznKods'=>'125479548546', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'AS Laima', 'Telefons'=>65488987,'CenaParVienu'=>'10.00' , 'BooleanPuskisZieds'=>true, 'adrese_id'=>5  ));
        Piegadatajs::create(array('id'=>6, 'ZiedaPuskaVeids'=>'Puskis Pavasara', 'PersUznKods'=>'141280-10222', 'PVards'=>'Vija', 'PUzvards'=>'Zonda', 'UznNosaukums'=>NULL, 'Telefons'=>27458965,'CenaParVienu'=>'20.00' , 'BooleanPuskisZieds'=>true, 'adrese_id'=>6  ));
        Piegadatajs::create(array('id'=>7, 'ZiedaPuskaVeids'=>'Puskis Flora', 'PersUznKods'=>'150988-77748', 'PVards'=>'Vera', 'PUzvards'=>'Kulina', 'UznNosaukums'=>NULL, 'Telefons'=>27789745,'CenaParVienu'=>'10.04' , 'BooleanPuskisZieds'=>true, 'adrese_id'=>7  ));
        Piegadatajs::create(array('id'=>8, 'ZiedaPuskaVeids'=>'Puskis Ziema', 'PersUznKods'=>'789446548794', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'Glabtuve', 'Telefons'=>65487455,'CenaParVienu'=>'15.43' , 'BooleanPuskisZieds'=>true, 'adrese_id'=>8  ));
        Piegadatajs::create(array('id'=>9, 'ZiedaPuskaVeids'=>'Hortenzijas', 'PersUznKods'=>'984982657648', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'SIA ZZ', 'Telefons'=>65488878,'CenaParVienu'=>'3.76', 'BooleanPuskisZieds'=>false, 'adrese_id'=>9  ));
        Piegadatajs::create(array('id'=>10, 'ZiedaPuskaVeids'=>'Puskis Vasara', 'PersUznKods'=>'121290-77554', 'PVards'=>'Anita', 'PUzvards'=>'Anita', 'UznNosaukums'=>NULL, 'Telefons'=>27774587,'CenaParVienu'=>'13.13', 'BooleanPuskisZieds'=>true, 'adrese_id'=>10  ));
        Piegadatajs::create(array('id'=>11, 'ZiedaPuskaVeids'=>'Nelkes', 'PersUznKods'=>'789745678944', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'AS Zieds', 'Telefons'=>25898787,'CenaParVienu'=>'8.01', 'BooleanPuskisZieds'=>false, 'adrese_id'=>11  ));
        Piegadatajs::create(array('id'=>12, 'ZiedaPuskaVeids'=>'Peonijas', 'PersUznKods'=>'070760-00541', 'PVards'=>'Jevgenija', 'PUzvards'=>'Abole', 'UznNosaukums'=>NULL, 'Telefons'=>21125633,'CenaParVienu'=>'2.99', 'BooleanPuskisZieds'=>false, 'adrese_id'=>12  ));
        Piegadatajs::create(array('id'=>13, 'ZiedaPuskaVeids'=>'Orhidejas', 'PersUznKods'=>'120509-98745', 'PVards'=>'Katerina', 'PUzvards'=>'Bumbiere', 'UznNosaukums'=>NULL, 'Telefons'=>23652000,'CenaParVienu'=>'4.21', 'BooleanPuskisZieds'=>false, 'adrese_id'=>13  ));
        Piegadatajs::create(array('id'=>14, 'ZiedaPuskaVeids'=>'Frezijas', 'PersUznKods'=>'002121200120', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'SIA Zalie', 'Telefons'=>65412985,'CenaParVienu'=>'7.07', 'BooleanPuskisZieds'=>false, 'adrese_id'=>14  ));
        Piegadatajs::create(array('id'=>15, 'ZiedaPuskaVeids'=>'Astromerijas', 'PersUznKods'=>'542222452245', 'PVards'=>NULL, 'PUzvards'=>NULL, 'UznNosaukums'=>'AS WWW', 'Telefons'=>28885888,'CenaParVienu'=>'12.12', 'BooleanPuskisZieds'=>false, 'adrese_id'=>15  ));
        Piegadatajs::create(array('id'=>16, 'ZiedaPuskaVeids'=>'Krizantemas', 'PersUznKods'=>'080578-11145', 'PVards'=>'Sergejs', 'PUzvards'=>'Cimdis', 'UznNosaukums'=>NULL, 'Telefons'=>65487452,'CenaParVienu'=>'5.43', 'BooleanPuskisZieds'=>false, 'adrese_id'=>16  ));
        Piegadatajs::create(array('id'=>17, 'ZiedaPuskaVeids'=>'Lilijas', 'PersUznKods'=>'050574-10000', 'PVards'=>'Laura', 'PUzvards'=>'Trepe', 'UznNosaukums'=>NULL, 'Telefons'=>21441447,'CenaParVienu'=>'5.13', 'BooleanPuskisZieds'=>false, 'adrese_id'=>17  ));
        Piegadatajs::create(array('id'=>18, 'ZiedaPuskaVeids'=>'Puskis Maja', 'PersUznKods'=>'050574-74587', 'PVards'=>'Guntis', 'PUzvards'=>'Apsens', 'UznNosaukums'=>NULL, 'Telefons'=>28453888,'CenaParVienu'=>'10.83', 'BooleanPuskisZieds'=>true, 'adrese_id'=>18  ));
        Piegadatajs::create(array('id'=>19, 'ZiedaPuskaVeids'=>'Puskis Vesture', 'PersUznKods'=>'050574-85258', 'PVards'=>'Veronika', 'PUzvards'=>'Plits', 'UznNosaukums'=>NULL, 'Telefons'=>27774587,'CenaParVienu'=>'25.43', 'BooleanPuskisZieds'=>true, 'adrese_id'=>19  ));
        Piegadatajs::create(array('id'=>20, 'ZiedaPuskaVeids'=>'Puskis Milestiba', 'PersUznKods'=>'050574-95987', 'PVards'=>'Pauline', 'PUzvards'=>'Gerbera', 'UznNosaukums'=>NULL, 'Telefons'=>24474587,'CenaParVienu'=>'5.43', 'BooleanPuskisZieds'=>true, 'adrese_id'=>20 ));



        Amats::create(array('id'=>1, 'AmataNosaukums'=>'Administrators'));
        Amats::create(array('id'=>2, 'AmataNosaukums'=>'Lietvedis'));
        Amats::create(array('id'=>3, 'AmataNosaukums'=>'Pārdevējs'));
        Amats::create(array('id'=>4, 'AmataNosaukums'=>'Krāvējs'));
        Amats::create(array('id'=>5, 'AmataNosaukums'=>'Palīgstrādnieks'));
        Amats::create(array('id'=>6, 'AmataNosaukums'=>'Šoferis'));
        Amats::create(array('id'=>7, 'AmataNosaukums'=>'Tīklu administrators'));
        Amats::create(array('id'=>8, 'AmataNosaukums'=>'Apsargs'));
        Amats::create(array('id'=>9, 'AmataNosaukums'=>'Analitiķis'));
        Amats::create(array('id'=>10, 'AmataNosaukums'=>'Dizaineris'));
        
        
        VeikalaDarbinieks::create(array('id'=>1, 'DarbaAlga'=>2020.99, 'AtvalinajumaSakums'=>'2020-08-25', 'AtvalinajumaBeigas'=>'2020-09-26', 'Persona_id'=>1, 'Amats_id'=>1));
        VeikalaDarbinieks::create(array('id'=>2, 'DarbaAlga'=>960.00, 'AtvalinajumaSakums'=>'2020-08-25', 'AtvalinajumaBeigas'=>'2020-09-26', 'Persona_id'=>2, 'Amats_id'=>2));
        VeikalaDarbinieks::create(array('id'=>3, 'DarbaAlga'=>870.00, 'AtvalinajumaSakums'=>'2020-08-30', 'AtvalinajumaBeigas'=>'2020-09-30', 'Persona_id'=>3, 'Amats_id'=>3));
        VeikalaDarbinieks::create(array('id'=>4, 'DarbaAlga'=>790.00, 'AtvalinajumaSakums'=>'2020-09-05', 'AtvalinajumaBeigas'=>'2020-09-20', 'Persona_id'=>4, 'Amats_id'=>4));
        VeikalaDarbinieks::create(array('id'=>5, 'DarbaAlga'=>750.00, 'AtvalinajumaSakums'=>'2020-09-15', 'AtvalinajumaBeigas'=>'2020-09-30', 'Persona_id'=>5, 'Amats_id'=>5));
        VeikalaDarbinieks::create(array('id'=>6, 'DarbaAlga'=>850.00, 'AtvalinajumaSakums'=>'2020-08-10', 'AtvalinajumaBeigas'=>'2020-08-30', 'Persona_id'=>6, 'Amats_id'=>6));
        VeikalaDarbinieks::create(array('id'=>7, 'DarbaAlga'=>680.00, 'AtvalinajumaSakums'=>'2020-08-30', 'AtvalinajumaBeigas'=>'2020-09-30', 'Persona_id'=>7, 'Amats_id'=>7));
        VeikalaDarbinieks::create(array('id'=>8, 'DarbaAlga'=>780.00, 'AtvalinajumaSakums'=>'2020-10-15', 'AtvalinajumaBeigas'=>'2020-10-30', 'Persona_id'=>8, 'Amats_id'=>8));
        VeikalaDarbinieks::create(array('id'=>9, 'DarbaAlga'=>650.00, 'AtvalinajumaSakums'=>'2020-11-05', 'AtvalinajumaBeigas'=>'2020-11-15', 'Persona_id'=>9, 'Amats_id'=>9));
        VeikalaDarbinieks::create(array('id'=>10, 'DarbaAlga'=>690.00, 'AtvalinajumaSakums'=>'2020-10-25', 'AtvalinajumaBeigas'=>'2020-11-15', 'Persona_id'=>10, 'Amats_id'=>10));


        Persona::create(array('id'=>1, 'PersKods'=>'111065-11836', 'Vards'=>'Volga', 'OtraisVards'=>NULL, 'Uzvards'=>'Zebra', 'Telefons'=>25145265,'adrese_id'=>21));
        Persona::create(array('id'=>2, 'PersKods'=>'111066-11838', 'Vards'=>'Santa', 'OtraisVards'=>NULL, 'Uzvards'=>'Lamme', 'Telefons'=>25145265,'adrese_id'=>22));
        Persona::create(array('id'=>3, 'PersKods'=>'110800-25847', 'Vards'=>'Laura', 'OtraisVards'=>'Leila', 'Uzvards'=>'Pausta', 'Telefons'=>24857135,'adrese_id'=>23));
        Persona::create(array('id'=>4, 'PersKods'=>'040850-65214', 'Vards'=>'Regīna', 'OtraisVards'=>NULL, 'Uzvards'=>'Ovile', 'Telefons'=>20240684,'adrese_id'=>24));
        Persona::create(array('id'=>5, 'PersKods'=>'010108-54796', 'Vards'=>'Samanta', 'OtraisVards'=>NULL, 'Uzvards'=>'Kleista', 'Telefons'=>24802102,'adrese_id'=>25));
        Persona::create(array('id'=>6, 'PersKods'=>'020218-10102', 'Vards'=>'Valdis', 'OtraisVards'=>'Mencis', 'Uzvards'=>'Mikilus', 'Telefons'=>26451208,'adrese_id'=>26));
        Persona::create(array('id'=>7, 'PersKods'=>'090774-10236', 'Vards'=>'Dacis', 'OtraisVards'=>NULL, 'Uzvards'=>'Johanss', 'Telefons'=>24035975,'adrese_id'=>27));
        Persona::create(array('id'=>8, 'PersKods'=>'041294-96587', 'Vards'=>'Klava', 'OtraisVards'=>'Svella', 'Uzvards'=>'Nausla', 'Telefons'=>21034687,'adrese_id'=>28));
        Persona::create(array('id'=>9, 'PersKods'=>'010508-12345', 'Vards'=>'Viktors', 'OtraisVards'=>'Failis', 'Uzvards'=>'Haloka', 'Telefons'=>24510359,'adrese_id'=>29));
        Persona::create(array('id'=>10, 'PersKods'=>'010508-12346', 'Vards'=>'Lāce', 'OtraisVards'=>NULL, 'Uzvards'=>'Grobena', 'Telefons'=>24567984,'adrese_id'=>30));

        
        Adrese::create(array('id'=>1, 'Pilseta'=>'Riga','Iela'=>'Naujienes','MajasN'=>2));
        Adrese::create(array('id'=>2, 'Pilseta'=>'Riga','Iela'=>'Volgas','MajasN'=>32));
        Adrese::create(array('id'=>3, 'Pilseta'=>'Riga','Iela'=>'Ventas','MajasN'=>12));
        Adrese::create(array('id'=>4, 'Pilseta'=>'Riga','Iela'=>'Saldas','MajasN'=>211));
        Adrese::create(array('id'=>5, 'Pilseta'=>'Riga','Iela'=>'Darjas','MajasN'=>20));
        Adrese::create(array('id'=>6, 'Pilseta'=>'Riga','Iela'=>'Miznika','MajasN'=>31));
        Adrese::create(array('id'=>7, 'Pilseta'=>'Riga','Iela'=>'Ilvara','MajasN'=>33));
        Adrese::create(array('id'=>8, 'Pilseta'=>'Riga','Iela'=>'18. novembra','MajasN'=>123));
        Adrese::create(array('id'=>9, 'Pilseta'=>'Riga','Iela'=>'11. novembra','MajasN'=>100));
        Adrese::create(array('id'=>10, 'Pilseta'=>'Riga','Iela'=>'Skaistules','MajasN'=>233));
        Adrese::create(array('id'=>11, 'Pilseta'=>'Riga','Iela'=>'Manas','MajasN'=>72));
        Adrese::create(array('id'=>12, 'Pilseta'=>'Riga','Iela'=>'Tavas','MajasN'=>772));
        Adrese::create(array('id'=>13, 'Pilseta'=>'Riga','Iela'=>'Musu','MajasN'=>28));
        Adrese::create(array('id'=>14, 'Pilseta'=>'Riga','Iela'=>'Jusu','MajasN'=>9));
        Adrese::create(array('id'=>15, 'Pilseta'=>'Riga','Iela'=>'Vinu','MajasN'=>1));
        Adrese::create(array('id'=>16, 'Pilseta'=>'Riga','Iela'=>'Vinas','MajasN'=>2));
        Adrese::create(array('id'=>17, 'Pilseta'=>'Riga','Iela'=>'Sviesta','MajasN'=>3));
        Adrese::create(array('id'=>18, 'Pilseta'=>'Riga','Iela'=>'Vegetara','MajasN'=>4));
        Adrese::create(array('id'=>19, 'Pilseta'=>'Riga','Iela'=>'Sarkangalvites','MajasN'=>5));
        Adrese::create(array('id'=>20, 'Pilseta'=>'Riga','Iela'=>'1. janvara','MajasN'=>26));
        Adrese::create(array('id'=>21, 'Pilseta'=>'Riga','Iela'=>'2. janvara','MajasN'=>27));
        Adrese::create(array('id'=>22, 'Pilseta'=>'Riga','Iela'=>'3. janvara','MajasN'=>23));
        Adrese::create(array('id'=>23, 'Pilseta'=>'Riga','Iela'=>'Uzvaras','MajasN'=>222));
        Adrese::create(array('id'=>24, 'Pilseta'=>'Riga','Iela'=>'Padosanas','MajasN'=>21));
        Adrese::create(array('id'=>25, 'Pilseta'=>'Riga','Iela'=>'Izcilibas','MajasN'=>44));
        Adrese::create(array('id'=>26, 'Pilseta'=>'Riga','Iela'=>'Teikas','MajasN'=>55));
        Adrese::create(array('id'=>27, 'Pilseta'=>'Riga','Iela'=>'Zvirbulu','MajasN'=>26));
        Adrese::create(array('id'=>28, 'Pilseta'=>'Riga','Iela'=>'Varnas','MajasN'=>27));
        Adrese::create(array('id'=>29, 'Pilseta'=>'Riga','Iela'=>'Zilites','MajasN'=>7));
        Adrese::create(array('id'=>30, 'Pilseta'=>'Riga','Iela'=>'Jevgenijas','MajasN'=>23));
        
    }
}
