<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // [
        //     'txtId' => Str::uuid(),
        //     'txtNik' => '123456',
        //     'txtFullname' => 'Dana Mulyana',
        //     'txtRole' => 'ADMIN',
        //     'txtGroupId' => '1',
        //     'txtPassword' => bcrypt('123456'),
        //     'password' => bcrypt('123456'),
        // ],
        User::insert(
            [
                [
                   "txtId" => '022c9473-cd84-493f-997a-33c767f74324',"txtNik" => '090900030',"txtFullname" => 'PRIYONO',"txtPassword" => '$2a$10$cdSogd1OWb5h8/w0WA/F..jo4b3j34rEx13.8.DUxFsahVFWTKHty',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtNik" => '190200458',"txtFullname" => 'VANIA EKA CAHYANI',"txtPassword" => '$2a$10$REDsPYqUPhtpFqHtRAPmAexgnS8yrTJCwUofR/WgObFT9iG5yNJVu',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtNik" => '120200010',"txtFullname" => 'AGUNG JOKO SUPRIHANTO',"txtPassword" => '$2a$10$/.dXpdanrZpLkz0bFPpw1.eq/B/sYqxe4wrXC1QmfCTLxbRY/vhxq',"txtRole" => 'LEADER',"txtGroupId" => 6  ],
                [
                   "txtId" => '0771207a-0c45-424e-ac90-4222d5307488',"txtNik" => 'O150100025',"txtFullname" => 'SRI NOVIYANTI',"txtPassword" => '$2a$10$3bqfdwE.kXnS3YGWZkSQBew10nGL6bCNb/OEm.W9kBetEuJEjK3qK',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtNik" => '080800026',"txtFullname" => 'YOHANES WISNU SUSALIT',"txtPassword" => '$2a$10$WzionNo0w6pQaWZD8BMzLuUW2qb/1lZF7d2nvzcgi7JUDjFDFtT.y',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '0d20e534-f51a-4790-b1fe-f690fc4a937e',"txtNik" => '140200012',"txtFullname" => 'REHULINTA VALERINA',"txtPassword" => '$2a$10$5MNhVybWyOAPCMqX41HpT.Z0wdHE83gAGAm6ECzVviTwawib1oFE6',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '0d450962-a4e6-4b2a-b04d-2f4733a4325f',"txtNik" => '180900194',"txtFullname" => 'CLEMENT THEODORUS EUGENE',"txtPassword" => '$2a$10$jlw6x8vetL.dS13MLBBEoexNa.AMkTbXR/oQkItz3eAZPkq.kn/CS',"txtRole" => 'LEADER',"txtGroupId" => 9  ],
                [
                   "txtId" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtNik" => '130700115',"txtFullname" => 'EDI PURWANTO',"txtPassword" => '$2a$10$1bN4FUtz0YoYrMr..P.BA.5zGYQGZumo0IvNd45Rf2HwACXlQ6IqK',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtNik" => '191100262',"txtFullname" => 'CARISSA',"txtPassword" => '$2a$10$oM1u5zXmzMX1jZP7me9v6uaqQBTsSYYhpBKSllpoVWJNB1tSmuSdG',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '0eae1b07-a0cf-4085-ad15-7522c12de45b',"txtNik" => 'K210800219',"txtFullname" => 'DWINA AZRITA',"txtPassword" => '$2a$10$ggDVjGfcR.HhfZXZ4hmp6OaWH0W2xQ5zFOJABH/nFx9Z5duW2Xc.q',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtNik" => '061100029',"txtFullname" => 'ANAK AGUNG PUTU WIRAKUSUMA',"txtPassword" => '$2a$10$KGWU.ScjWyaaszwnrcUD/uL4JBnY4h7HYoWwov4HzrFPM772yG1la',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtNik" => '140792916',"txtFullname" => 'IRPAN HIDAYAT PAMIL',"txtPassword" => '$2a$10$u.jTtZXBABh6eQWX1WNIQ.bgl1kOc7phEuiY2pyXLgrLrb/J0KSF6',"txtRole" => 'ADMIN',"txtGroupId" => 3  ],
                [
                   "txtId" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtNik" => '131200186',"txtFullname" => 'AHMAD MUTTAQIN',"txtPassword" => '$2a$10$p7HUaz1ASFrT3JKkC1vLdelzxZNMcz/wWD0HqyEVPXNXCG0gRpLlG',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtNik" => '140400048',"txtFullname" => 'PITRA JAYA',"txtPassword" => '$2a$10$ZdURkm0Hsc2VW/N3mTj3FOJcO15kX4HG8Lf8mCPtKXn.k0jHEnyG6',"txtRole" => 'LEADER',"txtGroupId" => 5  ],
                [
                   "txtId" => '152bd618-ed46-4920-bdeb-73141d8f2db3',"txtNik" => '120200007',"txtFullname" => 'BUDI PRASTOWO',"txtPassword" => '$2a$10$XzKVR0o53Ng5x1u0shcj0eZjT6xUqWOyZRJs48xyrIn/7iLtCFJDy',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtNik" => '210600084',"txtFullname" => 'LONIKA NINDYA AGIANI',"txtPassword" => '$2a$10$/gC6oqGtUTgOK8YUvdmqde4YrETFYItqQ3vd1u0pHK.07NNyFcIGS',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtNik" => '200500092',"txtFullname" => 'IRVAN HASAN',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtNik" => '120500031',"txtFullname" => 'AKHMAD MAKHALI',"txtPassword" => '$2a$10$ZQkpLtiSI.Ufc9Te4b0FsOgD20r/hW9zA4WYzupai7crb4EnwCuXG',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '17b28196-575c-4e26-af40-9c069a668de8',"txtNik" => '140100007',"txtFullname" => 'SRI UTARI P.SITUMORANG',"txtPassword" => '$2a$10$q1CH6ADXvXtQ5vrXL3e0j.ngP77WsGEpqeYBqGPNfwFi48vRqnKSa',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtNik" => '060700018',"txtFullname" => 'DEDI SETIADI',"txtPassword" => '$2a$10$6xY6wsm3eL43rB5EW75KlODyY7nBCMy7KYbYTWZykgXlrSQ0ad/l.',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtNik" => '150900239',"txtFullname" => 'FIDA FARHANA',"txtPassword" => '$2a$10$Wn.LYbNk2qXaFNSbx8zpq.f4REneo6SFS9Cl0T2Riwx9MskiHIYFW',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '1946b7ac-df23-4898-9987-567a1fd960e3',"txtNik" => '170700060',"txtFullname" => 'RIVAN JUNIAWAN',"txtPassword" => '$2a$10$XoZV48zyMOF9NBc25TNcpuqSUECiTZRDosy5weKYDm7Uj4LeEFiNa',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '19d1d042-749d-4312-a1b7-eff367f3d02e',"txtNik" => '181200264',"txtFullname" => 'BISMA PRAMUNDITA',"txtPassword" => '$2a$10$jUrNPIvBmtlZVOLYFiNu..sE0i6s/alP.t5ildYzGO2z7j82CZY/C',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '19ea6302-6d37-41b2-a19e-30abba2e513b',"txtNik" => '140700112',"txtFullname" => 'ISEP SURYA',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '1a3ce817-1bce-43e4-bb2e-ac1973252492',"txtNik" => '060700017',"txtFullname" => 'SRI REJEKI',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtNik" => '181100230',"txtFullname" => 'KHAIRUNNISA UTAMA',"txtPassword" => '$2a$10$t65MTAyzRj/QQA93fWSixOvh63vkGwqbSJi1oHp/Eoipdu0lJrVXC',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '1d576ed4-c45d-4eb5-8bc2-1205cb547275',"txtNik" => '120500034',"txtFullname" => 'SUKARYADI',"txtPassword" => '$2a$10$QG/Ys6H6CR6jjIMXVlO1m.EWNIwB4t4OLT6WINgFCOmFdHIUNRsjO',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '1d5cf232-4f3f-40b6-ba6d-423a7b346ec2',"txtNik" => '041000012',"txtFullname" => 'LILI SUTARLI',"txtPassword" => '$2a$10$EJKE1cuQ1B4AAeSBrbVALOpRwAsivWIWboBG3gLJgvZ3YregoXgGK',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtNik" => '150600128',"txtFullname" => 'CYNTHIA DEWI',"txtPassword" => '$2a$10$G6JfoyaNdlld2Dfw.013auTIz6xxvQKqg4hmzXrY6Sq9f3dxhThQS',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtNik" => '161000580',"txtFullname" => 'ANDRIANUS LONTENG',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'LEADER',"txtGroupId" => 1  ],
                [
                   "txtId" => '249c03d9-8685-46db-ba1a-4736dd19f2bf',"txtNik" => '081000039',"txtFullname" => 'FELIX MARKUS LISTIYO',"txtPassword" => '$2a$10$LN/S/ynu6964VdTCelqlOuDtePeEuJAAh4EBgrxJHHCZPKqM0zQgy',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtNik" => '170800062',"txtFullname" => 'FELICIA KUSNAKHIN',"txtPassword" => '$2a$10$IzuPNlaoiFW8TlZ0HRMZKOgM55XbgUfcHPE2Zl0PJCBWOxML8jNJ6',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '25c432dd-e9bd-42ac-8415-865f7aac1b4e',"txtNik" => '200300058',"txtFullname" => 'EDWARD SIREGAR',"txtPassword" => '$2a$10$lVqBJZm5/s5T1tuozbNkReCy0E1hR8wBSAARnEOan4xULLVqmuvwC',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtNik" => '070100013',"txtFullname" => 'AGUS RIYANTO',"txtPassword" => '$2a$10$SJEB/vezt31LjwquHXJueeQVRzeCz04WCTkMe9cSJf542sz.gpZKq',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtNik" => '200400093',"txtFullname" => 'MUHAMMAD FAJAR SULTHAN NUR KHALIS',"txtPassword" => '$2a$10$0gmK7Nyte0JclZznnxs7pemMznBSbLuL.AlPi57M9tVWhKXZ7vHla',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtNik" => '131000141',"txtFullname" => 'DESI YUDIANTI',"txtPassword" => '$2a$10$5.O/ILFQhmWUueD8f8M/y.cctqhn65PihfdrXrY2O4fiR1UxSEyBC',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '28ce75fd-d357-4f8e-b378-543c7605049b',"txtNik" => '150600122',"txtFullname" => 'ANDY CHENDRA',"txtPassword" => '$2a$10$Tb6Ub6yY7rcsKjyaIg0SjeBdUPEtZEh4hgkX7dxAEkd8PrViPsa4G',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '290831f3-b868-4983-8ece-b7c98583a375',"txtNik" => '940700003',"txtFullname" => 'TANTAWI JAUHARI',"txtPassword" => '$2a$10$SZZq0rL1kFPZxcUas2VRG.upzEbM5N3VZgXaAGSr69g4JSuAMi24q',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '2bbc6680-a55b-4259-8dd2-d297dbda0273',"txtNik" => '100692707',"txtFullname" => 'IWAN HERMAWAN',"txtPassword" => '$2a$10$DCCnJhcsq7HJW8VlMTOcB.wbApXodHimFvaMGrO1N3uk1T6wzlpOC',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '2c65bdf8-7b21-4b16-9e9c-3ee665d3b6c7',"txtNik" => '161000567',"txtFullname" => 'CHITTANIA DEVITASARI',"txtPassword" => '$2a$10$jZCpyMqRSbyUNGmwW8yvUenFz6JFAg7IoqrQ0xvvYSiWgW6kVfO96',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '2d637294-40cc-4b59-9da1-5c45b3e6604a',"txtNik" => '110800051',"txtFullname" => 'ELLYS MARCHIELLA',"txtPassword" => '$2a$10$UKL1fRO.INnQJPOEv1bXoOBo./ELyqVczc6ZtQNIpjtE3zIpIeTgS',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '2dd5d7c6-d7cf-419c-9e80-1b6bd4690d52',"txtNik" => '130300067',"txtFullname" => 'S DEWI CHANDRA',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '2f447ce7-516f-43bc-83da-ea2c01389b91',"txtNik" => '150600131',"txtFullname" => 'DEVI ARDELIA PURBONISARI',"txtPassword" => '$2a$10$D0k3yIl2zj1RfV9xJhEn0ONu3goHi2zBaFaUcK5MrhkmWA78EP6h6',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtNik" => '131100147',"txtFullname" => 'FITRIYAH',"txtPassword" => '$2a$10$.SZlVTQmKm.XH9ihIxdSoeXtJQQVCDYl.GlsjLpT3WV0wKIRGb4XK',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '31bcf241-a679-46e8-963c-b8221b9bb696',"txtNik" => '150200057',"txtFullname" => 'EUROTIVA PRATISTA',"txtPassword" => '$2a$10$pl2kMNgV6iGiaVpK0pCWbOplCpConAN8JHQ9ChlKsJ.CM6fmZ9glS',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '323293c6-326b-4c50-aac3-5bf47fd711c2',"txtNik" => '110900053',"txtFullname" => 'FAMELA APRIYANTO',"txtPassword" => '$2a$10$NwlUWAn7wcg/tLD13xtwhOT18qhKx7v2kUjxm8Hg18p.Kxi6fIuge',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtNik" => '170800050',"txtFullname" => 'YULANY INDRESWARI',"txtPassword" => '$2a$10$W7CeM6hMPE.3Y17LrF/KKuWm7HrZqIcngjjZ/z72MpYWAYpv7xKHC',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '336a41f0-da9a-49db-9acb-279fab0d63ba',"txtNik" => '140900170',"txtFullname" => 'SUHARTONO',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '3413cfb3-c2f5-4c68-bc6f-1a61aff8d57d',"txtNik" => '180800147',"txtFullname" => 'OLGA DIELLA R SIHOMBING',"txtPassword" => '$2a$10$RWnGnVt5DZ3Awr/xpdTfL.z2bBb1/UebYoq7QfC3.JETIolL/pR1y',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '363044a3-50d8-4d5c-a640-f14ac68a6d91',"txtNik" => '130300063',"txtFullname" => 'GITTA',"txtPassword" => '$2a$10$I4sN28lXcK4pStkVvihk2e96LDFjrpTdJ.XMAKXya01lzqdsRikE.',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '36d95001-7280-4d08-88e1-144025d25dd5',"txtNik" => '160700382',"txtFullname" => 'NI MADE DECEE ARYANI',"txtPassword" => '$2a$10$6TjdWeXHdnIxvwScCtgvmOnqr6ufNebKL.VcjfHXigDlufE05A.N.',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtNik" => '990600003',"txtFullname" => 'ENDY HERMAWAN',"txtPassword" => '$2a$10$uAdJUD/ciqxcVBokIFqyy.feHX6Gt5juN98SCjfZuGY7MneHcUUOS',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtNik" => '181100229',"txtFullname" => 'NUR FITRIANA DEWI',"txtPassword" => '$2a$10$6NY61fNlSfgkM86lPJqIq.hEWd3NizK9HhpBtCGj6RnYbQUn099cC',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '3cfb05ca-8a50-4363-840b-3fc250a1571d',"txtNik" => '060800021',"txtFullname" => 'FAJAR FAUZAN',"txtPassword" => '$2a$10$e25G6vSfryQZMu/H5QG96.Vyum2yEnUFonYhUTLmQgdTEskDt0i/S',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '3d21c6ba-5dbf-46fc-b044-1ce0840294d1',"txtNik" => '151100326',"txtFullname" => 'MUHAMMAD IQBAL ROSYIDIN',"txtPassword" => '$2a$10$p/RGDtwC9uMe1KqL6ZiRYOGRVqvI6d7A3hrS0csR9cu8.NAz3u86q',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '3db0d18f-4e1d-4238-8ac1-8e4718e7676d',"txtNik" => '950400002',"txtFullname" => 'EDI ISTIWAN',"txtPassword" => '$2a$10$UoQWHbLllMgU8ZXzV9Uf.unIAAt10/O3ySynk41lC53linPJIpRfy',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '3ff0a362-0f58-4c35-b303-2275152aa8ca',"txtNik" => '940900005',"txtFullname" => 'MUHAMMAD RAJAB',"txtPassword" => '$2a$10$qR20S2GzZLwVuViLPXj1v.lhZfbOYCEYCAKbRslbhbzZAqbHrDHoO',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '4156ccbe-b8f8-4e91-823e-b9bee2ab11c6',"txtNik" => '191000241',"txtFullname" => 'HARIS BAIHAQI',"txtPassword" => '$2a$10$H94/CE7BTOWQX3dG8DjZ0OAEmH.DwepGQ5Jf47ikYEzvM3e0A2kVy',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtNik" => '000600012',"txtFullname" => 'EKO NUR HIDAYATI',"txtPassword" => '$2a$10$q5fo1XfGT2hkeLCqVF6pqOFV/AHi95WFFBPkBsnc5ThkpxsWcXgvy',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '48310000-9355-448d-baea-465ea78aa3b8',"txtNik" => '160800435',"txtFullname" => 'ALOYSIUS BORIS RONYCAHYA',"txtPassword" => '$2a$10$w9JNobBRRgIbwQxE7Ai98.FljVfjBzUodCCApaMnGN88rzV7AqQx6',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '4a3f2ac9-3910-498c-b4a1-367e2297c161',"txtNik" => '180600122',"txtFullname" => 'BERNADHETA RISMISARI HANDAYANI',"txtPassword" => '$2a$10$4tlUyRcpOPq/RxSXIgWyAeQpjgoiYrBGo57swPRRKfACYB3IAnf1u',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '4a646b2d-3a6d-46df-85a4-6f4ad3946ee0',"txtNik" => '151100329',"txtFullname" => 'TEGUH SANJAYA',"txtPassword" => '$2a$10$x6KbK5IyyaMV3qG.Ws4Wc.O/otwLLDNA37Lj/1F8BHS82acjwjjYC',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtNik" => '210100021',"txtFullname" => 'SRI HENNY SATITI HHP',"txtPassword" => '$2a$10$A6UOiP6adLz/6Nnw5COMxO4C0lnoRrMhq6lM6MwGkC9GT4C2YJLH.',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '4b838e16-89c8-4c25-a73f-c5b1daff95f3',"txtNik" => '140700128',"txtFullname" => 'NOVI ARIA SANTI',"txtPassword" => '$2a$10$MOZxn1o9Ct2XiSqD3y7hXOA6aFmw0NRrwY0nUgByM.agAf2KoYoYW',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtNik" => '070100004',"txtFullname" => 'AGUS TURANTO',"txtPassword" => '$2a$10$NP9OU5lizP6csOa49uIttOIQMA2mJBryazyTNYo/enSz7gp88BsAW',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtNik" => '190500134',"txtFullname" => 'DADAN MOCHAMAD RAMDHANI',"txtPassword" => '$2a$10$8jKlKcJZq7r2eI/tDxABFueEmSAA7yg8vhS6bLzjF/lsObpeE6bBy',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtNik" => '190400122',"txtFullname" => 'WINDY KHAIRUNNISA',"txtPassword" => '$2a$10$/QF6LgSuBB5a0LvVWYz1N.PI/n61kT5eh/Efku7KBN.ClJU60ai8m',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '4eeb4613-efe8-4a1d-bbc5-1d42f622fa79',"txtNik" => '210300041',"txtFullname" => 'AGUNG MANDALA PUTRA',"txtPassword" => '$2a$10$uyMmAXW7kf4fiZfIuieEH.etRAP/LMzjm9SoE/vWGEZWEoLW7y1Zm',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '4f0fc565-8598-45bd-85f9-8cbffc3909db',"txtNik" => '151100322',"txtFullname" => 'FARANDY ARLIAN BURSALIM',"txtPassword" => '$2a$10$ZcBleeW3lUiQJ4Er8lj/QO9o4Ss0SIpIF2dIkf.Qw7/AyJoSDPO4S',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '4f3a74db-4abe-431b-addc-ec0f1ddd397a',"txtNik" => '070100014',"txtFullname" => 'IIK IKHSANUDIN',"txtPassword" => '$2a$10$LUR88aMoc/jwCo3wJFgru.zPsvMlIqAMcSFvZDWOzAWP1loKHSw2e',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '4f603ca4-a3c6-4b7f-9007-65eb8310f9ed',"txtNik" => '180900179',"txtFullname" => 'MEDIWAN ARMANDI PURBA',"txtPassword" => '$2a$10$/MuB5NBgKutmOIlPf9idg.91E.kzuOqwZhxPMwckAB7YrsDJmyHta',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '4fba17f2-c41b-40a9-8b33-da5d119b97a5',"txtNik" => '170300171',"txtFullname" => 'M.DICO PRIATAMA',"txtPassword" => '$2a$10$fuIrNSD.GgVSnGuM2UKmxuKtp5AcSrsySNPKzeH4S6holp9JdtCdu',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtNik" => '170200534',"txtFullname" => 'KURNIATI NINGRUM',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '501f9ca1-7b14-4d7f-9caa-f1a73fbf0d87',"txtNik" => 'K191000390',"txtFullname" => 'LANNY SOPUTRO',"txtPassword" => '$2a$10$CcS1k4rOHQGdUvNTb6SKRuGslXm.DXAcQL/k/gGjZBV9lZSHdME/m',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtNik" => '131200191',"txtFullname" => 'PRADHINI NUR ARIPIN',"txtPassword" => '$2a$10$4AsGLu6EmNHlq2cjkCblLebbeMuxW1JlKL.QYxWRrk9woEHM5MmPK',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '52bca872-f194-4463-a408-6172027cc887',"txtNik" => '180200046',"txtFullname" => 'DEBBY TANTIKA ARDI',"txtPassword" => '$2a$10$lf.4ivwYkI7pDCuHguzbe.lgOXQJLO3aSGBpLhWoLmhFu7uJ2HaQS',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '5415970e-9012-4548-bd06-e539f6c9e044',"txtNik" => '130300066',"txtFullname" => 'HARI HERDANO',"txtPassword" => '$2a$10$iiievbOQ7NRUoX6ipY7S7eSyzU2ZkLwOirzpR6ZuMwzNB/dR4lDxa',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '54d52aab-3b94-4a6d-8fb4-34c5a6e596bc',"txtNik" => '180100041',"txtFullname" => 'SINDHANI RAHMALIA SUDONO',"txtPassword" => '$2a$10$tlJ6glxFNsmz1ULch9h5Tej2rzx9yCvJifYlisnqzyQhcA2weJ9..',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtNik" => '151100330',"txtFullname" => 'VERDIANA ZNB',"txtPassword" => '$2a$10$BQRF5/iLQ4/vFrnvcN56fuPBL/gqYW/D49F/YMXoBXz61iiLBv/cy',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '56d00634-3fc0-44b3-b33f-67340fc9590a',"txtNik" => '080900035',"txtFullname" => 'SIGIT PRIANTO TJOKRONOLO',"txtPassword" => '$2a$10$RhlCd5XCp2aWFdfWUFFem.eF.0Jx.QefcA0UTkZja7FSDMuw/Zf0O',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '5712a9b0-4d3f-4453-8119-53d05c029e64',"txtNik" => '100192702',"txtFullname" => 'AGUNG HARTANTO',"txtPassword" => '$2a$10$U6p9NpLEBd4LnFXaTnN7dOE5ySmeRTWyW.Ob9uE4BpzUbSo7d2aIC',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtNik" => '060800020',"txtFullname" => 'YUNIARTO',"txtPassword" => '$2a$10$gJs0q8aayQP4gCh1JZhCbuTD384QjmBsbpHAsteaj8UHfJN2qLW56',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '5a03629d-ddb9-4c82-937b-f32b635b916f',"txtNik" => '160800444',"txtFullname" => 'SALVA FATMA',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtNik" => 'K201100335',"txtFullname" => 'YUNAWATI GANDASASMITA',"txtPassword" => '$2a$10$EXwXJuUzS5l0.gDa3okstuidJeEs5rbmQlSG9yLzpPS3oul9CFjni',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtNik" => '991100012',"txtFullname" => 'SYAMSUL BAHRI',"txtPassword" => '$2a$10$Qz9WUXSyJibs7Hcre5c/HOK9a1O46XSs5K0y0umGMNlNIa6GMqw3a',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '5c1a6ee1-105a-47dd-8530-6d6cd7a651cd',"txtNik" => '210100004',"txtFullname" => 'SETYO DEWI UTARI',"txtPassword" => '$2a$10$WjGpFtT2cIOkOYtT1AwI2ODOhj/mR1VHMFf99kKarmCPsnjwknorm',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtNik" => '151100319',"txtFullname" => 'DHENOK P ZAHARA',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '5ca70029-5e79-4457-8167-f4ac367460f3',"txtNik" => 'K190600265',"txtFullname" => 'ANI M HANDAYANI',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtNik" => '001200029',"txtFullname" => 'F. RENI KUSUMA W.',"txtPassword" => '$2a$10$9Y2KHQ8Yq9.JVNjhKnAjvOg4O9Z5axcrogEMhzTxXdhcw0Im5jFMm',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '60186822-3d11-4c94-b790-0d5a2cce4e17',"txtNik" => '120292517',"txtFullname" => 'YUANITA JOHAN',"txtPassword" => '$2a$10$54g6D6tOLnA0XvCd7ZdYS.cq7mz2QcF0Qg2NXNxKKq3KaaBoUCWRe',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '616b0c87-be73-4d25-a6fc-fe0856053b23',"txtNik" => '090600023',"txtFullname" => 'DHEWI LINTANG ASIH',"txtPassword" => '$2a$10$fxBGUGQRJP.RCy8HZG0DPufUDfEgjXpHakHqaCXhvfgKW6GnwSBBa',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '61f7508f-54ed-4ba2-ab62-a92e3622b8c2',"txtNik" => '161200722',"txtFullname" => 'ADRIEL PRADITA SIANTARA',"txtPassword" => '$2a$10$MnP2PCruhQsKoqpV51AEEO.izUuV5O2Txpyop2Yr2XmFcCxcObVi6',"txtRole" => 'LEADER',"txtGroupId" => 2  ],
                [
                   "txtId" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtNik" => '051100018',"txtFullname" => 'ERIC',"txtPassword" => '$2a$10$37p/ObrH9xSV1/mbmvuMJeLO0bFlwuHxFp9tekJPGtPD52CyxHfxW',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtNik" => '030500006',"txtFullname" => 'CUNCUN',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '652b3f61-10b6-4f13-9a50-5c5f45fcb434',"txtNik" => '050700014',"txtFullname" => 'DIDIK BUDIARTO',"txtPassword" => '$2a$10$5vaYw1Lv7O2485LBu5Xn6OzL8EKiN0dQG0v0td3C1B8bdvt4SC0E2',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '653df76d-d1ef-4a14-bc42-20d5d179b367',"txtNik" => '120900067',"txtFullname" => 'ISMAIL',"txtPassword" => '$2a$10$6VdLF1SUubO.5AyslLpNluxjPgt/D8tf1WVouXWNlrJ2XaYk9o84u',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '6df459be-cb5b-47e1-ac6b-c7544b4c2180',"txtNik" => '030700010',"txtFullname" => 'IWAN SURJADI HANDOKO',"txtPassword" => '$2a$10$bPBLVYSy.8AeYhLgtKuYPePh1lvoWGEC/Lo1gVQDpCPCMKmjmE9wW',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtNik" => '200100026',"txtFullname" => 'EMANUELLE NATHANIA LIANTO',"txtPassword" => '$2a$10$kEMZDfaX4xjD0JAviVUWQe/zvrE9XJVNpgmWckYq3hCzcnt07XQQi',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtNik" => '130300054',"txtFullname" => 'RICHARD CITRA',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '739f2d67-44de-4a43-8d9c-d6f3ca84d944',"txtNik" => '171022535',"txtFullname" => 'DEBORA ANGGI WULANDARI',"txtPassword" => '$2a$10$/eF0A1l4z9ofAYYM9I9oz.Zl4S7OIg9.P9MveCU9lbqD/44nbDMk.',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtNik" => '160900554',"txtFullname" => 'LENNY ANGGRAINI',"txtPassword" => '$2a$10$KGBkeERlYVpzNbvu.HogYeocAKZ1eKX98FqGDtNJEAxWJ0T/h5qd6',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '748fd754-e989-499e-8085-0a33bd3e5094',"txtNik" => '140100004',"txtFullname" => 'DWI INDAH AMBARWATI CAHYARINI',"txtPassword" => '$2a$10$XWHEE/7Wg/tijZrxzvhFUu38NZ7UWQFymi.EysxUL0Q6oe2wApQL.',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '75b6803b-110a-493b-9af7-58585e2282a2',"txtNik" => '160200086',"txtFullname" => 'DICKY PEBRIAN HIDAYAT',"txtPassword" => '$2a$10$Sci4BAGFDTKCF6FFVTd./eTjJuW.cPFpt8p3Lj7JG/3tyChXL9Fbu',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtNik" => '150500117',"txtFullname" => 'NISSA HUDANI NABILAH',"txtPassword" => '$2a$10$woidqprxEu/gN7fvzUzpPebhLFh/SzftP/O9SSY5KnJ7AtThtgz5S',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtNik" => '190400113',"txtFullname" => 'NUR KHOLIQ',"txtPassword" => '$2a$10$YrlJ4LJs97ljMqcRYQ9VLuRw58.ZqEGW663iJeJ4arNxwq4lo7L4y',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtNik" => '150400101',"txtFullname" => 'PRIYO ANARKIE YUSEPTYO',"txtPassword" => '$2a$10$flQ9ryP0aEnWO8jbfQnRn.MaYRQZv70X/l6KCh0OmQ9onyzGDJ6iy',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => '7c4a32e5-3c11-4fc8-9624-79687bd5a4ed',"txtNik" => '010200001',"txtFullname" => 'JEANY SHANTI DEVI',"txtPassword" => '$2a$10$OCkduPllju8MRVZ0PglRuOTZ0rDNl.9RBqDkJJINU8Nh./NWgfNuy',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '7e633c7c-c09d-44a4-9f83-488c6f4879b6',"txtNik" => '161100631',"txtFullname" => 'YULI ASTUTI',"txtPassword" => '$2a$10$hSmUy7cioxxeIxztBGAGeOmnfjzllx05uZyvpNCK50PF5ItHwLdfe',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '7ea224d9-1bfa-4055-876c-ab08c8974123',"txtNik" => '180800162',"txtFullname" => 'GITA GIANTINA',"txtPassword" => '$2a$10$epgB2Nf51Nhx.mI3gr.OIeOxT1KPlUbT.b.v26QpqZj5crM3Tiz4q',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtNik" => '170100076',"txtFullname" => 'TOTOK KURNIAWAN',"txtPassword" => '$2a$10$N8Bpczenb5ksod2XyngRueBHbeRH46QR6kvApx/UEBjZWiaBQJWVy',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '7f0c6b54-fe2b-441d-8fa4-0e3ea99a30ca',"txtNik" => '090100100',"txtFullname" => 'SADA RIAH BR PURBA',"txtPassword" => '$2a$10$VxbuvIxYqOP8uKzp7mSUdeIvdsojIyigfKi9pJlEDmW9E23iuSa0m',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtNik" => '200300070',"txtFullname" => 'DEBBY MARITSA',"txtPassword" => '$2a$10$Q6/pRgvXRHxPJDqC3LY1fOALEskd8dvBGy1hs9QzCRpcXIj6r99Bm',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '826bde79-b964-4c2f-9171-817800026c19',"txtNik" => '150700153',"txtFullname" => 'JURITA PERMATA SARI',"txtPassword" => '$2a$10$EIC3pS./Pqql3/5/VOqTVenitogD7lqID.ejOIw4ag7QtchuHeu2m',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '82933c78-10fa-44f7-834a-4e0aa3f5977a',"txtNik" => '160700400',"txtFullname" => 'YUSTINUS SUHARTANTO',"txtPassword" => '$2a$10$XcZaWfQgv2Fc6Vu7IS1uFOkl4tgI560n2afLhuJLmNlFG5e/7o8tG',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '83d174e6-1df7-4d91-930d-0bb5ac368540',"txtNik" => '070100001',"txtFullname" => 'ADI SETIAHADI',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtNik" => '200100040',"txtFullname" => 'YUSWA SLAMET',"txtPassword" => '$2a$10$bd9PxwkToLXjl.pNSbLQw.3UrmV0Qdn0ZzCCWxIFFBJME6N2rMDYS',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '84c9691e-046d-4914-b089-705005578f08',"txtNik" => '190500148',"txtFullname" => 'MELATI DEVINA GUSTINI WIRASTUTI',"txtPassword" => '$2a$10$5PW/ZrC05HAOevdrQOaFce9j8yCraeo7tLIRyqK4VTuuzTEMlbwLG',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtNik" => '060500014',"txtFullname" => 'YUDHA AGUS TRI BASUKI',"txtPassword" => '$2a$10$/ClqLOdLA/M.zMXyfTRCGuvnRy9xC4Jo1TNxbMhM7FWbWczd5nn.G',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtNik" => '130400069',"txtFullname" => 'AMAN RUSTAMAN',"txtPassword" => '$2a$10$nXdKX8wW1IBus9.t5ySR5uCleEssQ2ssW8OvdLitdAwQw2GIvRuOK',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '88a73989-e0df-4e0e-8274-6995cb1f964d',"txtNik" => 'A051000016',"txtFullname" => 'I GEDE PUTU EKA PUTRA',"txtPassword" => '$2a$10$5blyx3efLr9HqVS3bVRG5Ov4JFPSnxW9ppnpFxHUtbDdWFKG.EUzC',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtNik" => '060800019',"txtFullname" => 'CAHYO AGUNG MARTANTO',"txtPassword" => '$2a$10$jLGg/o/V9349.AT2LqyPKOYfjhMFJbgGnj1vnlvxPrumZgnqExy72',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '8b2436c5-2a91-41a8-9906-27ebef1eb584',"txtNik" => '941000007',"txtFullname" => 'SURATI',"txtPassword" => '$2a$10$tS5a/v1AtqpmADCJ76Ddt.u6jxEFODNxJBipDz/Be4w/knef3qxnS',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '8e1f33a9-323d-4417-bfb7-29eb32c85eeb',"txtNik" => '170300156',"txtFullname" => 'MUHAMMAD WAHYU PAMUJI',"txtPassword" => '$2a$10$U1QTH3YUMKi2aklp8//0Je16p8CK06AybpPsUlpVp9v0A.7k6ecbu',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '8e85e266-b27f-47c5-8d75-43ae12aee887',"txtNik" => '160800487',"txtFullname" => 'ELFRIDA',"txtPassword" => '$2a$10$WcNjyvwVzAmtohxVSEYNgeshxLmW7JkITnrR8ynIZG12tDD1KlKJy',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtNik" => '070400065',"txtFullname" => 'MARLENY PATANDUNG',"txtPassword" => '$2a$10$0alSTXYLwrr1/icUKHevbu02QGLP1pjekQMDo.p8NRT52Sx.EMjhq',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '91642d86-dbfb-4797-95cc-7d2759a6fff7',"txtNik" => '950500003',"txtFullname" => 'BERNADUS GUNAWAN WIDADA',"txtPassword" => '$2a$10$UU4RRYioN4OY5Yu7L1g/NO2CzNsAP.YdFeBhvwXg3A42lrby9umnW',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '9218965d-b1f9-44f2-ab92-7fdb40c69baa',"txtNik" => '140400045',"txtFullname" => 'FRISKA MAGDALENA SIMANJORANG',"txtPassword" => '$2a$10$P9vYZlXU6ipNFxnX1IeaN./vOFwXIve2IMma8d96iNaTgUQb6pY0y',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => '93a580ec-3cf3-449f-b4f8-97a96da9a26c',"txtNik" => 'K200700231',"txtFullname" => 'BUDI UTOYO',"txtPassword" => '$2a$10$KnLY9DhgEUDbbPFhqoaXGeWYHz2iqMIBiC8ap2abToK4B37FrVhmO',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtNik" => '130100005',"txtFullname" => 'AMBAR KUSUMO NUGROHO',"txtPassword" => '$2a$10$qaGQnIMWGDSAIAXr/6nmduZhxXpfoAwVCmkwFZplili9fjLbJbtuq',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => '9a71df08-25b4-40b9-95ae-c1f946bf4211',"txtNik" => '040100002',"txtFullname" => 'WILLY ARTHA',"txtPassword" => '$2a$10$XvuCaipH3MA3Khil8L3UsejR2CUhqPaC60V9LU6SU/397Mu6FsqKO',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => '9be51928-2d3c-4d0f-acd2-ae215258518f',"txtNik" => '151200385',"txtFullname" => 'IRWAN KURNIAWAN',"txtPassword" => '$2a$10$jn6k5C0k3baTYcspJkxigOLwMtzhb/C2qkkgA/0G54nUMINXUOu/m',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtNik" => '190200081',"txtFullname" => 'YOHANES HERNAWAN PRATAMA',"txtPassword" => '$2a$10$OaSGNLH7I7NSqRGraNVuNeqhYVmI/HyOQAAa6oE.VfqtjAbKA1umW',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtNik" => '170800059',"txtFullname" => 'HANDRIO PURNOMO SIREGAR',"txtPassword" => '$2a$10$73yZEFTi97EoYOnRk/muxelsKg1oLGTvt4xZ8cNOUJxdZuguAh72a',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '9d617f1f-e3f0-45b3-bbed-24eb0017ea6e',"txtNik" => '170300654',"txtFullname" => 'FITRIANA SARI',"txtPassword" => '$2a$10$mLd.KIwO6esnSoN5oxPaUuXGKn3mze6nfzVnQt4.npGafFcgiwBDe',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => '9db50bd4-8605-45b5-b6b4-9a34becf6417',"txtNik" => '170800064',"txtFullname" => 'CHRISTY YANWAR YOSAPAT',"txtPassword" => '$2a$10$mRd58yRPDcTGlmFKWBnty.UHb2Moq65PIHbZJqMgVjA20Uh2nCJVy',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => '9eed4a56-17ca-4b64-8e75-fffec1a4b0ae',"txtNik" => '191100276',"txtFullname" => 'UDI RUSDIANA',"txtPassword" => '$2a$10$BW1tt5ZlQf87ddNaYnRlBua1CREBvM5m6HXNCFKeFfauf0AnogAqu',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => '9f291b5b-2f40-4f4c-b62c-413b92501efe',"txtNik" => '141000188',"txtFullname" => 'IRFAN SOBARKAH',"txtPassword" => '$2a$10$RZv4om3QkD58N8.M0E7HnO.J0Wse/dP07SXuyl.7z3Yod41QjK5IK',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtNik" => '150100031',"txtFullname" => 'ADISTI AYUNINGTYAS',"txtPassword" => '$2a$10$XGlSy3NQJsd4PePCuP.Fl.NqQNOYpTIbn6e1cADE3YZKCDsaT5TYm',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'a13bb533-ce75-473e-881b-5d266e9a5fe3',"txtNik" => 'K190300157',"txtFullname" => 'IR. RIA SURYANI M.',"txtPassword" => '$2a$10$a9WTQJBxtkf/vAjfzQRgse4ebVNhuMD06WFX0Y/AfG5xFFbcUNHlm',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'ab426b45-932a-46a3-a6da-954e96b63e21',"txtNik" => 'A120100001',"txtFullname" => 'APOLONIA LAURENSIA LUNAWATI. N',"txtPassword" => '$2a$10$yQAQZ3NFe2L0vlKxOguiPexYqHaOCSxV26bZLr20PnebXk/U0Wz3C',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => 'ab8bcb8d-0ccb-44d5-b018-f94e56eb8290',"txtNik" => '200100030',"txtFullname" => 'NANDANG DURYAT',"txtPassword" => '$2a$10$hdv.CB80sKoatGqar5Y/JObmlJ9EN.WjuF/IWkz8CCrVBtGmjtPOW',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'ac45d44f-fc6e-435d-a5ac-c781dca03f79',"txtNik" => '160700397',"txtFullname" => 'RIZKY NOVI SARI',"txtPassword" => '$2a$10$Un95/1o0CoulDVkwNDCf2.9kN0Qn/mVPUmfeYMptP1YIR/yiDuZDi',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'acd10c48-67ec-4902-8813-ebc3732163c0',"txtNik" => '100200007',"txtFullname" => 'BURHANUDIN',"txtPassword" => '$2a$10$2IUf1kQcd1v4tv6kdPXR/OSojwz9m55Sb0y42WFOmmuVoRn5bKcRS',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'ace9776a-7e6c-4327-b047-0e8daeb2b2c9',"txtNik" => '200400091',"txtFullname" => 'QADRY RAKHMAWANDY',"txtPassword" => '$2a$10$TDw5Urv4yfjIMcN2QxtDnOGGDmZoCuANf5dEuRDpbNVhGqxxgVBH2',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtNik" => '120300021',"txtFullname" => 'TIA HANDAYANI',"txtPassword" => '$2a$10$EJdzN9DfHwEfKUBRQfgO6.4IyoQj1V0ZoOYBmRv3oGyqWUJ5ndTKy',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtNik" => '210100006',"txtFullname" => 'AHMAD YAMA IR',"txtPassword" => '$2a$10$IfN68L0ftrU2qPyNRZRIBOUt3YoBPuYFNpdR/Px0jRG.KX/R1R/dq',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtNik" => '160200097',"txtFullname" => 'ALIT PRADANA',"txtPassword" => '$2a$10$4ZjMhpOMuhjUtzZe3LGaJ.yfjbnfAL/XQw37IuFZMbkHhTX1hoal6',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtNik" => '030800011',"txtFullname" => 'ERRY CHRISTIYAN',"txtPassword" => '$2a$10$p2z9Hg/TFT8a35ZvjckyAeVBNmr6145kLx0A5gIjwy6JoTpfUtixq',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtNik" => '990500001',"txtFullname" => 'SUPARTO',"txtPassword" => '$2a$10$7hlbqVAGhagZcglhVFGV3ut9YQNYM4zcoaGckQp.sKdweYL1xoxVK',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtNik" => '151100318',"txtFullname" => 'ANNISA KURNIA',"txtPassword" => '$2a$10$yfQ6BKqlVSJX8hqndTvsC./wjuXvsjYctzSDqZshXXjrvdapAcmNu',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtNik" => '200700136',"txtFullname" => 'NATHANIA DWIWAHYUNDARI',"txtPassword" => '$2a$10$dOn3dSinHT2hLIdF2UXacu2mhRZ.aU2s.OZ6R4TF/4q4fgBRoASwO',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtNik" => '120900065',"txtFullname" => 'HENRY SUGIHARTO',"txtPassword" => '$2a$10$2cG1ITmq1DoJ70mGFifgEepvCa1aEjLLQm.itG5xiHlhKgrI/B6pS',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtNik" => '951100007',"txtFullname" => 'PURBO DWI ATMODJO',"txtPassword" => '$2a$10$Kz.tqZ5J52lY0LuEC6ZzROcKtFklJgo6/V5TnxahGZhihS7K8nH6G',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtNik" => '180900193',"txtFullname" => 'DEWI MULYASARI',"txtPassword" => '$2a$10$H9DOy.2JeFYr/fIbVfR9iOi8NJZ4Lsw8ZB0VEpHeLX.c75ib1jgXG',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtNik" => '151200368',"txtFullname" => 'HEIGO PEBRIANTO',"txtPassword" => '$2a$10$9PysSSj0pq3qVmW64.6xZeFrvFilV4ydCDXhBZWgNCAeYLHjMNymG',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtNik" => '070600083',"txtFullname" => 'HENDI ISKANDAR',"txtPassword" => '$2a$10$Zoayoa.aX1NFnjD0H1wbW.ldlDHU6VdGGz9lmvVYmKGeyPF0/V3Y.',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtNik" => '210700102',"txtFullname" => 'ILHAM PHALOSA RESWARA',"txtPassword" => '$2a$10$JmD5SZoGlE1ZkoSEuERFhuRja98q.cPzdEOassCwVRdRKmYDFia2y',"txtRole" => 'LEADER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtNik" => '111200086',"txtFullname" => 'SADHU PUTRI SUSANTI',"txtPassword" => '$2a$10$Et9PyZyjGg6d0iI28GGhr.UaFuN7e2XTZhAmahADqw.BVTw82d2hu',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtNik" => '210300042',"txtFullname" => 'ADRIANUS PRAWIN LYMAN',"txtPassword" => '$2a$10$a0OXObJO2YHRfJRdi0YlmOKcVGQaiXdYvq9le6UjtNg.YQ.EdMAIG',"txtRole" => 'LEADER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'be991a77-d1ef-4d3b-b54f-fa677568e886',"txtNik" => 'K201200344',"txtFullname" => 'WILDAN SAFARI NOOR',"txtPassword" => '$2a$10$dKysF0iE5kfQ0o6qam1bo.isoi.W2GD/rFCiKC0NyYfseLCo5ZtnW',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'c0c4f496-e2a1-469e-9889-6c21ad281f70',"txtNik" => '080600016',"txtFullname" => 'THEO BADORA',"txtPassword" => '$2a$10$CO6dbjpTLL9fDqak4nd9yu1OyLiHn1mtzOiG40j/wndBnOEv9ALpC',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtNik" => '161200710',"txtFullname" => 'AYULIA FITRIANE SETIAWAN',"txtPassword" => '$2a$10$VHOQ3YmEmKnoHQoStpGpvudokqBgDepHvJCv0E2CGbnAt.DRGz5a2',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtNik" => '170100032',"txtFullname" => 'ANDREAS KURNIJANTO EKO R',"txtPassword" => '$2a$10$XAoLhY5AofHkE./yF1sHneOxbKClBRE28iRzVTSsGbHhBLwMguE/C',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtNik" => '191000252',"txtFullname" => 'ADE AMINUDIN NAZIB',"txtPassword" => '$2a$10$zNVFa5DdbtweqbWK0Q28FuWA4UTnW8Gr75G00Nj..iV4M1MfTOCaa',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtNik" => '170200124',"txtFullname" => 'VONY HEIDY EVELYN',"txtPassword" => '$2a$10$TW8P48V250E/L1NoO29c5.B1xPNDw/rHmfNPdFTZY0aRoewS7Fzym',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtNik" => '151000288',"txtFullname" => 'SULISTYONO',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'c83d2233-eb67-4401-842e-9497f6868bc4',"txtNik" => '181000182',"txtFullname" => 'YULIANA HALIM',"txtPassword" => '$2a$10$4WliRPPR6qPGYjwD551ouORgLDazpQDxXuHlQ.tsnGjAoR6znU4s2',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'ca0c0424-be94-4e9f-ac62-c6225112fef4',"txtNik" => '161200728',"txtFullname" => 'DYANZA ARIA PERDANA',"txtPassword" => '$2a$10$lWsmxo8AEoDIkHuVWIoKu.REZNcw4aQuFYISsaUQ1f/nrpngmda8e',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtNik" => '140600077',"txtFullname" => 'LARASWATI KUSUMONINGRUM',"txtPassword" => '$2a$10$Qt4VQfd4iRr7Ac/Ak7.wO.7MyJqV/s55.9ddrwnOtqxSGNT2mZzi2',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtNik" => '920600003',"txtFullname" => 'JULI ASTUTI',"txtPassword" => '$2a$10$tCxvpQoipbs62pyZTK0yRODUBFRyWpKoWfhPfHWOcloARJ.pqhdnK',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'cef62a62-34e7-4324-b25a-60b405e606c4',"txtNik" => '200300075',"txtFullname" => 'HARRY TRIHARYOGI',"txtPassword" => '$2a$10$ZSR5Ikc2z6DOphaY.4wGl.quT6dUPbTAT4.dynazwEEoBF7ZZrdc6',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'cf92a9a7-2d04-4926-8f5e-bee0d2a010f8',"txtNik" => 'K210200059',"txtFullname" => 'USWAH YD',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtNik" => '080900030',"txtFullname" => 'BUGI NOVRIYANTO',"txtPassword" => '$2a$10$AOXNxjxNJKouDm2kVhMEv.Uizp/mZEbp96CNqY2NAmUlhZvdsR4J6',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'd15467c7-d34b-42fa-96cd-b04a94dcfdcc',"txtNik" => '080100001',"txtFullname" => 'FIAN HARIYANA',"txtPassword" => '$2a$10$TZooC6FAVdaxcMqbr5OqOOlj8l1gTMeA366GUL/O0MT2riIn.GqS6',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtNik" => '171122534',"txtFullname" => 'YEANNY LUKITO',"txtPassword" => '$2a$10$jV7tOpG4ueMuM3sRPbaUKu20DAYb.AxxtIRd7aqp8AoMMO0BzIYpe',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtNik" => '000700016',"txtFullname" => 'SURYATI',"txtPassword" => '$2a$10$cro/nVTI7KEMzyOkIB2tB.1DiFTxy2n8zLxtWBEg0h3E4AV17ZikC',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'd61a5d5b-e0fc-46c3-a045-db3f19912955',"txtNik" => '160100007',"txtFullname" => 'TOMMY ISMANTO',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'd79f7bed-41ac-4100-b4bb-b00a01eb8820',"txtNik" => '190100008',"txtFullname" => 'ARI HARIA RAMDAN',"txtPassword" => '$2a$10$wsgthGPrWyPYiaEQ4Iw8Lue2Ccllo8vNQZ47FZkg0uFO09jyn0bva',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'd7ccb7c6-6a3b-4887-9c9a-2169fbeb6468',"txtNik" => '160400219',"txtFullname" => 'M YULIZAR F',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtNik" => '100300009',"txtFullname" => 'NAZARUDIN RACHMAN SIDIK',"txtPassword" => '$2a$10$BrvZ2W9K/hsrrBcBTOyGOexB2WrAg.v2AQqaQ6o46H8kXqG4Xcr6a',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'ddfcafea-d9f9-4faf-909c-baab1f5941de',"txtNik" => 'K191100415',"txtFullname" => 'Asep Sopiyan',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'ADMIN',"txtGroupId" => 2  ],
                [
                   "txtId" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtNik" => '150600127',"txtFullname" => 'YOPPY SUKMANDAR',"txtPassword" => '$2a$10$NyftyuXudY/5WqDNMgt9FOjAJtDie46D8V8MuUyf2FYJoAKShLfbG',"txtRole" => 'USER',"txtGroupId" => 2  ],
                [
                   "txtId" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtNik" => '150300085',"txtFullname" => 'GLENN CHANDRA',"txtPassword" => '$2a$10$nl1hHC9q3iwa4lFcEuQnPO5/3RzyPh9xIWVAgarJNEgpR1tI9EO56',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtNik" => '171022498',"txtFullname" => 'RUTH AUDY A',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'e291e713-7bd1-466c-90b1-726636c2e318',"txtNik" => '970900001',"txtFullname" => 'AGUS BUDI PRAMONO',"txtPassword" => '$2a$10$H3TUc/irDg8USkZtPrvFq.7fNxsqJN.1Rs43wNr9LOhUdvjF1Xk.q',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtNik" => '010600015',"txtFullname" => 'ANTON HERU PURNAMA',"txtPassword" => '$2a$10$PGybUca3HSKuBxLVfhRb0e3kWS8QYvpeKNHUbFiV8/bD196QHMafi',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtNik" => '190900220',"txtFullname" => 'JENNIFER KUMALA CAHYADINATA',"txtPassword" => '$2a$10$5Ul3j/hSpkoqNeWKExQxGeGW/0PQinJRvRlFZIobR.172PBy886zS',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'e6b15d77-1bba-4c1c-9b2d-7e8c9b28a38d',"txtNik" => '180800144',"txtFullname" => 'ADHI RIZALDI',"txtPassword" => '$2a$10$Ab230misr6y72bt37Clz/.FoCQVU3DPgRcRJOWMDfAW3odKFoaNJm',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtNik" => '081000038',"txtFullname" => 'AGUS FIRMANSYAH',"txtPassword" => '$2a$10$ZuxEEt8OLrioUj5.X4mtweCbGlu8QpG7nLdTAc2RonH4ScvHlmNK6',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'e9952c10-9e7c-4664-b7bb-0e1a945d0208',"txtNik" => '061200039',"txtFullname" => 'SUNGATNO',"txtPassword" => '$2a$10$6nFgtEgLaENytQnIz/FiA.htexlYlUHGFLeF2pT.TnVCt8tVdv8ou',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtNik" => '190400118',"txtFullname" => 'INDRA PURNOMO',"txtPassword" => '$2a$10$0Xjgt1laVn8bVyi8FwRCLuITEBz7Mi/CozFML740cRP8OxDpNX2we',"txtRole" => 'LEADER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtNik" => '200500103',"txtFullname" => 'HOKO DIANTORO',"txtPassword" => '$2a$10$pkcPyugpD2O7redFXQ9GDuuEFXQj0jmeLhPElUsGe50/90GvnXwxG',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtNik" => '180600123',"txtFullname" => 'RIZKA YUNI HAPSARI',"txtPassword" => '$2a$10$eP4Z8zSi4Qa83dDuMSPX.eA8mub.UCSkph1a/MA.TpoBaVq/1fcdy',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'ef3580db-8027-459a-867c-08410456d663',"txtNik" => '080800025',"txtFullname" => 'NANA SUMARNA',"txtPassword" => '$2a$10$xr9fuw/R.TxfMuRZRKEuUeU1frKAiFh1v8F/OKXDpGNgBlTYxQmz6',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'ef713fc6-5671-4d00-b9bb-f95e760809fc',"txtNik" => '170200083',"txtFullname" => 'FATCHUR RACHMAN',"txtPassword" => '$2a$10$mhPdQWtsBlNybbXgfPDddeWfcjYB7APAzRztGKlztR0fMQPS/czYq',"txtRole" => 'USER',"txtGroupId" => 4  ],
                [
                   "txtId" => 'f014e4b7-0edf-40ee-b5de-7ad924c9cbbc',"txtNik" => '030300001',"txtFullname" => 'BUDI A PRANOTO',"txtPassword" => '$2a$10$aNrSkOyYhpZZ/sTI0rOdiuIOG.SodCpJsPHdJj0UQdmzW4LYRv.La',"txtRole" => 'USER',"txtGroupId" => 1  ],
                [
                   "txtId" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtNik" => '170500273',"txtFullname" => 'STELLA KRISTANTI K',"txtPassword" => '$2a$10$li22sC4bwbJBx352e9dik.bt3Z/LRGNArFDyFmTW3VGJKNUOuNo7C',"txtRole" => 'USER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtNik" => '130400077',"txtFullname" => 'BENY SANTOSO',"txtPassword" => '$2a$10$FKTtvnzAMkei/JuXBQGpz.pdDKd.FJv6qWaTtANsmZUUd.XEemK.2',"txtRole" => 'LEADER',"txtGroupId" => 3  ],
                [
                   "txtId" => 'f48dc166-7f69-437c-9659-f1c288c94f24',"txtNik" => '100900056',"txtFullname" => 'INDRIANI NATALIA',"txtPassword" => '$2a$10$dbfR7ygsoPMkmiuL5elQvO08HTRUcnMRZr5kpURjL1Tsfpz/LQhXW',"txtRole" => 'USER',"txtGroupId" => 6  ],
                [
                   "txtId" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtNik" => '110900055',"txtFullname" => 'HERMANSYAH',"txtPassword" => '$2a$10$fGSWfLFXeJOaeWcHyZLRTeHukWCFPCmGG4kwxPyfzXL8SO69S16ay',"txtRole" => 'USER',"txtGroupId" => 5  ],
                [
                   "txtId" => 'f66292cc-809c-491a-974e-69d9cbd61bc9',"txtNik" => '150900245',"txtFullname" => 'SUSILO DWI RAHARJO',"txtPassword" => '$2a$10$VcbRaxmjUzOFSYJFc2hiqu9JWMOsQb7tbSTH4BX.XMo2U4GgsXwn2',"txtRole" => 'LEADER',"txtGroupId" => 4  ],
                [
                   "txtId" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtNik" => '140500483',"txtFullname" => 'YUDI YUNANTO',"txtPassword" => '$2a$10$hyVbRDiIC1llbKoWj6htpug9O84Oc91/0Z7zJNYAOMEEepzn.cC.2',"txtRole" => 'USER',"txtGroupId" => 10  ],
                [
                   "txtId" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtNik" => '140700118',"txtFullname" => 'MEDIARTI',"txtPassword" => '$2a$10$h0nl.ZE/PO.cwQhumVHFB.SU/vkRwkeQvNmQS2uZ1tLwkt7.pO.Oy',"txtRole" => 'USER',"txtGroupId" => 7  ],
                [
                   "txtId" => 'fba1da50-f41c-43a2-8ff4-75e269b29a38',"txtNik" => '080600015',"txtFullname" => 'HERIANA SANJAYA',"txtPassword" => '$2a$10$KEN5nsgscnKMn31YqcRQEOiWKQvySqgZgTa9SKh1UNmPVybotO6W.',"txtRole" => 'USER',"txtGroupId" => 8  ],
                [
                   "txtId" => 'fc708e01-8644-48c1-871c-1b3fd81ccc53',"txtNik" => '130700110',"txtFullname" => 'NURMAYANTI SILITONGA',"txtPassword" => '$2a$10$vtECX07HxNdnsnGvtgL2weR6MTOcNarMnRHI6qDAnhYiYmAnfwIK.',"txtRole" => 'USER',"txtGroupId" => 9  ],
                [
                   "txtId" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtNik" => '211100159',"txtFullname" => 'HENDI HENDRASTA',"txtPassword" => '$2a$10$UYW8GODmBjA6UT2GDJZoI.Fv7BwzIbVqI.yf4hHuqW946D5qwhKre',"txtRole" => 'USER',"txtGroupId" => 5  ]
            ]
        );
    }
}
