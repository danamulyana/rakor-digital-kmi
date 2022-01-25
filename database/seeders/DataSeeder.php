<?php

namespace Database\Seeders;

use App\Models\trdata;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        trdata::truncate();

        trdata::insert(
            [
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtTipe" => 'BIKE',"floatData" => '1.91',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e6b15d77-1bba-4c1c-9b2d-7e8c9b28a38d',"txtTipe" => 'BIKE',"floatData" => '10.93',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtTipe" => 'BIKE',"floatData" => '3.12',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '5.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '61f7508f-54ed-4ba2-ab62-a92e3622b8c2',"txtTipe" => 'BIKE',"floatData" => '16.98',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '28.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5712a9b0-4d3f-4453-8119-53d05c029e64',"txtTipe" => 'BIKE',"floatData" => '16.79',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.98'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'BIKE',"floatData" => '29.76',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '49.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4eeb4613-efe8-4a1d-bbc5-1d42f622fa79',"txtTipe" => 'BIKE',"floatData" => '20.84',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '34.73'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'BIKE',"floatData" => '5.81',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '9.68'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtTipe" => 'BIKE',"floatData" => '3.87',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '6.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'BIKE',"floatData" => '31.47',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '52.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28ce75fd-d357-4f8e-b378-543c7605049b',"txtTipe" => 'BIKE',"floatData" => '34.71',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '57.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '31.2',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd79f7bed-41ac-4100-b4bb-b00a01eb8820',"txtTipe" => 'BIKE',"floatData" => '70.25',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '117.08'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'BIKE',"floatData" => '43.57',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '72.62'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '91642d86-dbfb-4797-95cc-7d2759a6fff7',"txtTipe" => 'BIKE',"floatData" => '31.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '51.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '152bd618-ed46-4920-bdeb-73141d8f2db3',"txtTipe" => 'BIKE',"floatData" => '46.63',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '77.72'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '93a580ec-3cf3-449f-b4f8-97a96da9a26c',"txtTipe" => 'BIKE',"floatData" => '17.8',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '29.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9db50bd4-8605-45b5-b6b4-9a34becf6417',"txtTipe" => 'BIKE',"floatData" => '23.96',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '39.93'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '2.1',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '616b0c87-be73-4d25-a6fc-fe0856053b23',"txtTipe" => 'BIKE',"floatData" => '4.1',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '6.83'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '75b6803b-110a-493b-9af7-58585e2282a2',"txtTipe" => 'BIKE',"floatData" => '15.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ca0c0424-be94-4e9f-ac62-c6225112fef4',"txtTipe" => 'BIKE',"floatData" => '1',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '1.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3db0d18f-4e1d-4238-8ac1-8e4718e7676d',"txtTipe" => 'BIKE',"floatData" => '32.83',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '54.72'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '34.98',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '58.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '25c432dd-e9bd-42ac-8415-865f7aac1b4e',"txtTipe" => 'BIKE',"floatData" => '20.92',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '34.87'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2d637294-40cc-4b59-9da1-5c45b3e6604a',"txtTipe" => 'BIKE',"floatData" => '6.85',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '11.42'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'BIKE',"floatData" => '37.47',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '62.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'BIKE',"floatData" => '0.02',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.03'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'BIKE',"floatData" => '13.85',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '23.08'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '31bcf241-a679-46e8-963c-b8221b9bb696',"txtTipe" => 'BIKE',"floatData" => '10.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '17.03'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3cfb05ca-8a50-4363-840b-3fc250a1571d',"txtTipe" => 'BIKE',"floatData" => '163.56',"dtnInsertedDate" => '2022-01-20 14:25',"txtWaktuTempuh" => '0m',"floatPoint" => '272.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '323293c6-326b-4c50-aac3-5bf47fd711c2',"txtTipe" => 'BIKE',"floatData" => '9.11',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtTipe" => 'BIKE',"floatData" => '24.81',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '41.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtTipe" => 'BIKE',"floatData" => '19.21',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '32.02'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtTipe" => 'BIKE',"floatData" => '25.94',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '43.23'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '88a73989-e0df-4e0e-8274-6995cb1f964d',"txtTipe" => 'BIKE',"floatData" => '68.09',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '113.48'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f3a74db-4abe-431b-addc-ec0f1ddd397a',"txtTipe" => 'BIKE',"floatData" => '20.62',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '34.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '3.51',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '5.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtTipe" => 'BIKE',"floatData" => '0.01',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.02'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '19ea6302-6d37-41b2-a19e-30abba2e513b',"txtTipe" => 'BIKE',"floatData" => '27.13',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '45.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '653df76d-d1ef-4a14-bc42-20d5d179b367',"txtTipe" => 'BIKE',"floatData" => '3.93',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '6.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '45.68',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '76.13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '99.17',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '165.28'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e1f33a9-323d-4417-bfb7-29eb32c85eeb',"txtTipe" => 'BIKE',"floatData" => '10.36',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '17.27'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'BIKE',"floatData" => '87.38',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '145.63'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4b838e16-89c8-4c25-a73f-c5b1daff95f3',"txtTipe" => 'BIKE',"floatData" => '3.42',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '5.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtTipe" => 'BIKE',"floatData" => '15.96',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '26.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'BIKE',"floatData" => '38.25',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '63.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'BIKE',"floatData" => '25.37',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '42.28'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2dd5d7c6-d7cf-419c-9e80-1b6bd4690d52',"txtTipe" => 'BIKE',"floatData" => '16.98',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '28.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c1a6ee1-105a-47dd-8530-6d6cd7a651cd',"txtTipe" => 'BIKE',"floatData" => '17.5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '29.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0771207a-0c45-424e-ac90-4222d5307488',"txtTipe" => 'BIKE',"floatData" => '7.42',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '12.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1a3ce817-1bce-43e4-bb2e-ac1973252492',"txtTipe" => 'BIKE',"floatData" => '43.24',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '72.07'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '336a41f0-da9a-49db-9acb-279fab0d63ba',"txtTipe" => 'BIKE',"floatData" => '24.79',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '41.32'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e9952c10-9e7c-4664-b7bb-0e1a945d0208',"txtTipe" => 'BIKE',"floatData" => '44.24',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '73.73'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f66292cc-809c-491a-974e-69d9cbd61bc9',"txtTipe" => 'BIKE',"floatData" => '5.83',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '9.72'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '290831f3-b868-4983-8ece-b7c98583a375',"txtTipe" => 'BIKE',"floatData" => '11.14',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd61a5d5b-e0fc-46c3-a045-db3f19912955',"txtTipe" => 'BIKE',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '96.6',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '161'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'BIKE',"floatData" => '11.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtTipe" => 'BIKE',"floatData" => '20.6',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '34.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'BIKE',"floatData" => '20.32',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '33.87'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'BIKE',"floatData" => '19.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '31.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'BIKE',"floatData" => '32.5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '54.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'BIKE',"floatData" => '54.37',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '90.62'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtTipe" => 'RUN',"floatData" => '18',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '90'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83d174e6-1df7-4d91-930d-0bb5ac368540',"txtTipe" => 'RUN',"floatData" => '02.05',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '10.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4eeb4613-efe8-4a1d-bbc5-1d42f622fa79',"txtTipe" => 'RUN',"floatData" => '0.14',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtTipe" => 'RUN',"floatData" => '2.9',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '14.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtTipe" => 'RUN',"floatData" => '3.84',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '19.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'RUN',"floatData" => '1.11',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '5.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ddfcafea-d9f9-4faf-909c-baab1f5941de',"txtTipe" => 'RUN',"floatData" => '24.69',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '123.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '43.72',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '218.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a3f2ac9-3910-498c-b4a1-367e2297c161',"txtTipe" => 'RUN',"floatData" => '5.56',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'RUN',"floatData" => '05.08',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0d450962-a4e6-4b2a-b04d-2f4733a4325f',"txtTipe" => 'RUN',"floatData" => '26.34',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '131.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'RUN',"floatData" => '6.69',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '33.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'RUN',"floatData" => '0.63',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'RUN',"floatData" => '10.01',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '50.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'RUN',"floatData" => '6.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '30.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '739f2d67-44de-4a43-8d9c-d6f3ca84d944',"txtTipe" => 'RUN',"floatData" => '15.16',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '75.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'RUN',"floatData" => '1.71',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '8.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'RUN',"floatData" => '4.56',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '22.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'RUN',"floatData" => '1.28',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '6.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f0fc565-8598-45bd-85f9-8cbffc3909db',"txtTipe" => 'RUN',"floatData" => '3.57',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '17.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'RUN',"floatData" => '9.4',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '47'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd15467c7-d34b-42fa-96cd-b04a94dcfdcc',"txtTipe" => 'RUN',"floatData" => '4',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '8.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '40.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cef62a62-34e7-4324-b25a-60b405e606c4',"txtTipe" => 'RUN',"floatData" => '1.56',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '7.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'RUN',"floatData" => '13.12',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '65.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtTipe" => 'RUN',"floatData" => '0.01',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fba1da50-f41c-43a2-8ff4-75e269b29a38',"txtTipe" => 'RUN',"floatData" => '9.45',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '47.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9f291b5b-2f40-4f4c-b62c-413b92501efe',"txtTipe" => 'RUN',"floatData" => '12.79',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '63.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '10.69',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '53.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtTipe" => 'RUN',"floatData" => '4.71',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '23.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '653df76d-d1ef-4a14-bc42-20d5d179b367',"txtTipe" => 'RUN',"floatData" => '2.24',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '11.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2bbc6680-a55b-4259-8dd2-d297dbda0273',"txtTipe" => 'RUN',"floatData" => '4.5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '22.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'RUN',"floatData" => '0.7',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'RUN',"floatData" => '0.57',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '2.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '11.14',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '55.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtTipe" => 'RUN',"floatData" => '0.96',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '4.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '42.5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '212.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd7ccb7c6-6a3b-4887-9c9a-2169fbeb6468',"txtTipe" => 'RUN',"floatData" => '11.8',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '59'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'RUN',"floatData" => '04.05',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '20.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f603ca4-a3c6-4b7f-9007-65eb8310f9ed',"txtTipe" => 'RUN',"floatData" => '6.92',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '34.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3ff0a362-0f58-4c35-b303-2275152aa8ca',"txtTipe" => 'RUN',"floatData" => '12.85',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '64.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'RUN',"floatData" => '11.28',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '56.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'RUN',"floatData" => '10.27',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '51.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4b838e16-89c8-4c25-a73f-c5b1daff95f3',"txtTipe" => 'RUN',"floatData" => '0.42',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '2.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'RUN',"floatData" => '15.79',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '78.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'RUN',"floatData" => '03.02',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtTipe" => 'RUN',"floatData" => '5.1',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtTipe" => 'RUN',"floatData" => '1.81',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '09.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'RUN',"floatData" => '9.25',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '46.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'RUN',"floatData" => '18.45',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '92.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '56d00634-3fc0-44b3-b33f-67340fc9590a',"txtTipe" => 'RUN',"floatData" => '13.99',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '69.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'RUN',"floatData" => '7.42',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '37.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d576ed4-c45d-4eb5-8bc2-1205cb547275',"txtTipe" => 'RUN',"floatData" => '5.49',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtTipe" => 'RUN',"floatData" => '6.55',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '32.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'RUN',"floatData" => '5.11',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c0c4f496-e2a1-469e-9889-6c21ad281f70',"txtTipe" => 'RUN',"floatData" => '0.5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '2.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'RUN',"floatData" => '0.98',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '4.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtTipe" => 'RUN',"floatData" => '0.75',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtTipe" => 'RUN',"floatData" => '16.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '81.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'RUN',"floatData" => '1.66',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '8.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'RUN',"floatData" => '0.2',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'RUN',"floatData" => '2.8',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '14'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'RUN',"floatData" => '6.52',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '32.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '18.2',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '91'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtTipe" => 'WALK',"floatData" => '0.1',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '12.55',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '62.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtTipe" => 'WALK',"floatData" => '2.28',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '11.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'WALK',"floatData" => '7.42',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '37.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e291e713-7bd1-466c-90b1-726636c2e318',"txtTipe" => 'WALK',"floatData" => '14.72',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '73.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'WALK',"floatData" => '18.88',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '94.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '13.62',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '68.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '16.6',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '83'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '0.67',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '48310000-9355-448d-baea-465ea78aa3b8',"txtTipe" => 'WALK',"floatData" => '02.09',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '10.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'WALK',"floatData" => '5.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '26.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '23.7',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '118.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtTipe" => 'WALK',"floatData" => '20.57',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '102.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtTipe" => 'WALK',"floatData" => '4.56',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '22.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '3.99',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '19.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ab426b45-932a-46a3-a6da-954e96b63e21',"txtTipe" => 'WALK',"floatData" => '5.66',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '28.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'WALK',"floatData" => '2.43',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '12.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a3f2ac9-3910-498c-b4a1-367e2297c161',"txtTipe" => 'WALK',"floatData" => '3.24',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '16.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f014e4b7-0edf-40ee-b5de-7ad924c9cbbc',"txtTipe" => 'WALK',"floatData" => '20.33',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '101.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '14.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '71.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '16.62',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '83.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '9.16',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '45.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'WALK',"floatData" => '2.91',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '14.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtTipe" => 'WALK',"floatData" => '4.17',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '20.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '8.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '41.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '2.74',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '13.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '11.86',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '59.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2f447ce7-516f-43bc-83da-ea2c01389b91',"txtTipe" => 'WALK',"floatData" => '2.86',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '14.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtTipe" => 'WALK',"floatData" => '11.29',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '56.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '652b3f61-10b6-4f13-9a50-5c5f45fcb434',"txtTipe" => 'WALK',"floatData" => '4.43',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '22.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0eae1b07-a0cf-4085-ad15-7522c12de45b',"txtTipe" => 'WALK',"floatData" => '9.33',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '46.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e85e266-b27f-47c5-8d75-43ae12aee887',"txtTipe" => 'WALK',"floatData" => '5',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'WALK',"floatData" => '1.38',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '6.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '15.63',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '78.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'WALK',"floatData" => '3.13',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '14.34',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '71.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f0fc565-8598-45bd-85f9-8cbffc3909db',"txtTipe" => 'WALK',"floatData" => '0.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '1.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'WALK',"floatData" => '2.49',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '12.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '249c03d9-8685-46db-ba1a-4736dd19f2bf',"txtTipe" => 'WALK',"floatData" => '06.07',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '30.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd15467c7-d34b-42fa-96cd-b04a94dcfdcc',"txtTipe" => 'WALK',"floatData" => '7.77',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '38.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9d617f1f-e3f0-45b3-bbed-24eb0017ea6e',"txtTipe" => 'WALK',"floatData" => '3.15',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '1.47',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '7.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '363044a3-50d8-4d5c-a640-f14ac68a6d91',"txtTipe" => 'WALK',"floatData" => '1.97',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '9.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '12.16',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '60.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cef62a62-34e7-4324-b25a-60b405e606c4',"txtTipe" => 'WALK',"floatData" => '4.26',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '21.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'WALK',"floatData" => '2.41',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '12.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '5.53',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtTipe" => 'WALK',"floatData" => '10.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '51.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f48dc166-7f69-437c-9659-f1c288c94f24',"txtTipe" => 'WALK',"floatData" => '8.96',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '44.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a13bb533-ce75-473e-881b-5d266e9a5fe3',"txtTipe" => 'WALK',"floatData" => '9.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '46.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9be51928-2d3c-4d0f-acd2-ae215258518f',"txtTipe" => 'WALK',"floatData" => '6.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '31.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6df459be-cb5b-47e1-ac6b-c7544b4c2180',"txtTipe" => 'WALK',"floatData" => '16.87',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '84.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7c4a32e5-3c11-4fc8-9624-79687bd5a4ed',"txtTipe" => 'WALK',"floatData" => '06.06',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '30.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'WALK',"floatData" => '12.83',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '64.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '826bde79-b964-4c2f-9171-817800026c19',"txtTipe" => 'WALK',"floatData" => '0.81',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '04.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtTipe" => 'WALK',"floatData" => '04.07',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '20.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'WALK',"floatData" => '5.71',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '28.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '501f9ca1-7b14-4d7f-9caa-f1a73fbf0d87',"txtTipe" => 'WALK',"floatData" => '17.6',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '88'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtTipe" => 'WALK',"floatData" => '12.77',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '63.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d5cf232-4f3f-40b6-ba6d-423a7b346ec2',"txtTipe" => 'WALK',"floatData" => '10.05',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '50.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '13.75',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '68.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'WALK',"floatData" => '8.87',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '44.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd7ccb7c6-6a3b-4887-9c9a-2169fbeb6468',"txtTipe" => 'WALK',"floatData" => '5.9',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '29.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '3.81',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '19.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '30.14',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '150.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'WALK',"floatData" => '03.03',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '16.88',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '84.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'WALK',"floatData" => '3.43',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '17.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '14.22',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '71.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '22.27',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '111.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fc708e01-8644-48c1-871c-1b3fd81ccc53',"txtTipe" => 'WALK',"floatData" => '3.63',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '3.7',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtTipe" => 'WALK',"floatData" => '9.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '46.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '6.21',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '31.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtTipe" => 'WALK',"floatData" => '8.29',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '41.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0d20e534-f51a-4790-b1fe-f690fc4a937e',"txtTipe" => 'WALK',"floatData" => '0.74',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '3.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtTipe" => 'WALK',"floatData" => '16.52',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '82.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '7.62',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '38.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ac45d44f-fc6e-435d-a5ac-c781dca03f79',"txtTipe" => 'WALK',"floatData" => '17',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'WALK',"floatData" => '6.45',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '32.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7f0c6b54-fe2b-441d-8fa4-0e3ea99a30ca',"txtTipe" => 'WALK',"floatData" => '5.93',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '29.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '6.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '31.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a03629d-ddb9-4c82-937b-f32b635b916f',"txtTipe" => 'WALK',"floatData" => '1.47',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '7.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '54d52aab-3b94-4a6d-8fb4-34c5a6e596bc',"txtTipe" => 'WALK',"floatData" => '9.69',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '48.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtTipe" => 'WALK',"floatData" => '19.73',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '98.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0771207a-0c45-424e-ac90-4222d5307488',"txtTipe" => 'WALK',"floatData" => '2.2',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '11'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'WALK',"floatData" => '7.21',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '36.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'WALK',"floatData" => '6.3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '31.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d576ed4-c45d-4eb5-8bc2-1205cb547275',"txtTipe" => 'WALK',"floatData" => '05.09',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtTipe" => 'WALK',"floatData" => '10.49',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '52.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '30.568',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '152.84'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8b2436c5-2a91-41a8-9906-27ebef1eb584',"txtTipe" => 'WALK',"floatData" => '07.03',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '35.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '12.71',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '63.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '05.04',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '25.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '4.23',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '21.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cf92a9a7-2d04-4926-8f5e-bee0d2a010f8',"txtTipe" => 'WALK',"floatData" => '3.7',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '18.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '11.43',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '57.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtTipe" => 'WALK',"floatData" => '0.06',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '0.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'WALK',"floatData" => '4.73',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '23.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9a71df08-25b4-40b9-95ae-c1f946bf4211',"txtTipe" => 'WALK',"floatData" => '3',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtTipe" => 'WALK',"floatData" => '2.16',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '10.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '9.37',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '46.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtTipe" => 'WALK',"floatData" => '8.59',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '42.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'WALK',"floatData" => '18.34',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '91.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'WALK',"floatData" => '3.49',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '17.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtTipe" => 'WALK',"floatData" => '10.93',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '54.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c83d2233-eb67-4401-842e-9497f6868bc4',"txtTipe" => 'WALK',"floatData" => '7.51',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '37.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '7.49',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '37.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'WALK',"floatData" => '0.95',"dtnInsertedDate" => '2022-01-18 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '4.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'BIKE',"floatData" => '14.27',"dtnInsertedDate" => '2022-01-19 7:18',"txtWaktuTempuh" => '0m',"floatPoint" => '23.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '41.16',"dtnInsertedDate" => '2022-01-19 7:23',"txtWaktuTempuh" => '0m',"floatPoint" => '68.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'BIKE',"floatData" => '6.11',"dtnInsertedDate" => '2022-01-19 7:35',"txtWaktuTempuh" => '0m',"floatPoint" => '10.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e1f33a9-323d-4417-bfb7-29eb32c85eeb',"txtTipe" => 'BIKE',"floatData" => '11.84',"dtnInsertedDate" => '2022-01-19 8:56',"txtWaktuTempuh" => '0m',"floatPoint" => '19.73'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.28',"dtnInsertedDate" => '2022-01-19 9:44',"txtWaktuTempuh" => '0m',"floatPoint" => '2.13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.35',"dtnInsertedDate" => '2022-01-19 9:45',"txtWaktuTempuh" => '0m',"floatPoint" => '2.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '0.76',"dtnInsertedDate" => '2022-01-19 9:46',"txtWaktuTempuh" => '0m',"floatPoint" => '1.27'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.35',"dtnInsertedDate" => '2022-01-19 9:48',"txtWaktuTempuh" => '0m',"floatPoint" => '2.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'BIKE',"floatData" => '10.45',"dtnInsertedDate" => '2022-01-19 10:41',"txtWaktuTempuh" => '0m',"floatPoint" => '17.42'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'BIKE',"floatData" => '23.75',"dtnInsertedDate" => '2022-01-19 10:42',"txtWaktuTempuh" => '0m',"floatPoint" => '39.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '21.87',"dtnInsertedDate" => '2022-01-19 10:57',"txtWaktuTempuh" => '0m',"floatPoint" => '36.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '91642d86-dbfb-4797-95cc-7d2759a6fff7',"txtTipe" => 'BIKE',"floatData" => '20.87',"dtnInsertedDate" => '2022-01-19 13:05',"txtWaktuTempuh" => '0m',"floatPoint" => '34.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '7.23',"dtnInsertedDate" => '2022-01-19 17:02',"txtWaktuTempuh" => '0m',"floatPoint" => '12.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtTipe" => 'BIKE',"floatData" => '13.42',"dtnInsertedDate" => '2022-01-19 17:40',"txtWaktuTempuh" => '0m',"floatPoint" => '22.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'BIKE',"floatData" => '1.34',"dtnInsertedDate" => '2022-01-19 18:35',"txtWaktuTempuh" => '0m',"floatPoint" => '2.23'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'BIKE',"floatData" => '9.54',"dtnInsertedDate" => '2022-01-19 18:44',"txtWaktuTempuh" => '0m',"floatPoint" => '15.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'BIKE',"floatData" => '6.91',"dtnInsertedDate" => '2022-01-19 19:43',"txtWaktuTempuh" => '0m',"floatPoint" => '11.52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0771207a-0c45-424e-ac90-4222d5307488',"txtTipe" => 'BIKE',"floatData" => '2.53',"dtnInsertedDate" => '2022-01-19 19:53',"txtWaktuTempuh" => '0m',"floatPoint" => '4.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'BIKE',"floatData" => '8.15',"dtnInsertedDate" => '2022-01-19 20:25',"txtWaktuTempuh" => '0m',"floatPoint" => '13.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtTipe" => 'RUN',"floatData" => '2.13',"dtnInsertedDate" => '2022-01-19 6:09',"txtWaktuTempuh" => '0m',"floatPoint" => '10.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9f291b5b-2f40-4f4c-b62c-413b92501efe',"txtTipe" => 'RUN',"floatData" => '3.43',"dtnInsertedDate" => '2022-01-19 6:32',"txtWaktuTempuh" => '0m',"floatPoint" => '17.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '5.2',"dtnInsertedDate" => '2022-01-19 6:51',"txtWaktuTempuh" => '0m',"floatPoint" => '26'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '10.57',"dtnInsertedDate" => '2022-01-19 7:10',"txtWaktuTempuh" => '0m',"floatPoint" => '52.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '04.06',"dtnInsertedDate" => '2022-01-19 7:17',"txtWaktuTempuh" => '0m',"floatPoint" => '20.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'RUN',"floatData" => '4.55',"dtnInsertedDate" => '2022-01-19 7:56',"txtWaktuTempuh" => '0m',"floatPoint" => '22.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'RUN',"floatData" => '10.03',"dtnInsertedDate" => '2022-01-19 12:08',"txtWaktuTempuh" => '0m',"floatPoint" => '50.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '01.08',"dtnInsertedDate" => '2022-01-19 18:23',"txtWaktuTempuh" => '0m',"floatPoint" => '5.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '4.47',"dtnInsertedDate" => '2022-01-19 18:26',"txtWaktuTempuh" => '0m',"floatPoint" => '22.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'RUN',"floatData" => '2',"dtnInsertedDate" => '2022-01-19 18:33',"txtWaktuTempuh" => '0m',"floatPoint" => '10'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '4.2',"dtnInsertedDate" => '2022-01-18 22:41',"txtWaktuTempuh" => '0m',"floatPoint" => '21'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '1.43',"dtnInsertedDate" => '2022-01-19 6:05',"txtWaktuTempuh" => '0m',"floatPoint" => '7.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '1.52',"dtnInsertedDate" => '2022-01-19 6:21',"txtWaktuTempuh" => '0m',"floatPoint" => '7.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '3.12',"dtnInsertedDate" => '2022-01-19 6:28',"txtWaktuTempuh" => '0m',"floatPoint" => '15.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '04.05',"dtnInsertedDate" => '2022-01-19 6:36',"txtWaktuTempuh" => '0m',"floatPoint" => '20.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '3.86',"dtnInsertedDate" => '2022-01-19 6:38',"txtWaktuTempuh" => '0m',"floatPoint" => '19.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtTipe" => 'WALK',"floatData" => '2.11',"dtnInsertedDate" => '2022-01-19 6:42',"txtWaktuTempuh" => '0m',"floatPoint" => '10.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '1.51',"dtnInsertedDate" => '2022-01-19 6:43',"txtWaktuTempuh" => '0m',"floatPoint" => '7.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '4.1',"dtnInsertedDate" => '2022-01-19 7:04',"txtWaktuTempuh" => '0m',"floatPoint" => '20.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'WALK',"floatData" => '2.7',"dtnInsertedDate" => '2022-01-19 7:13',"txtWaktuTempuh" => '0m',"floatPoint" => '13.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '02.04',"dtnInsertedDate" => '2022-01-19 7:23',"txtWaktuTempuh" => '0m',"floatPoint" => '10.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '10.5',"dtnInsertedDate" => '2022-01-19 7:27',"txtWaktuTempuh" => '0m',"floatPoint" => '52.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '2.43',"dtnInsertedDate" => '2022-01-19 7:38',"txtWaktuTempuh" => '0m',"floatPoint" => '12.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '3.23',"dtnInsertedDate" => '2022-01-19 7:43',"txtWaktuTempuh" => '0m',"floatPoint" => '16.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9d617f1f-e3f0-45b3-bbed-24eb0017ea6e',"txtTipe" => 'WALK',"floatData" => '02.04',"dtnInsertedDate" => '2022-01-19 7:51',"txtWaktuTempuh" => '0m',"floatPoint" => '10.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '4.85',"dtnInsertedDate" => '2022-01-19 8:17',"txtWaktuTempuh" => '0m',"floatPoint" => '24.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'WALK',"floatData" => '01.08',"dtnInsertedDate" => '2022-01-19 12:09',"txtWaktuTempuh" => '0m',"floatPoint" => '5.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'WALK',"floatData" => '5.15',"dtnInsertedDate" => '2022-01-19 11:19',"txtWaktuTempuh" => '0m',"floatPoint" => '25.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'WALK',"floatData" => '01.01',"dtnInsertedDate" => '2022-01-19 12:06',"txtWaktuTempuh" => '0m',"floatPoint" => '05.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'WALK',"floatData" => '3.54',"dtnInsertedDate" => '2022-01-19 16:13',"txtWaktuTempuh" => '0m',"floatPoint" => '17.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2d637294-40cc-4b59-9da1-5c45b3e6604a',"txtTipe" => 'WALK',"floatData" => '0.77',"dtnInsertedDate" => '2022-01-19 17:21',"txtWaktuTempuh" => '0m',"floatPoint" => '3.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a646b2d-3a6d-46df-85a4-6f4ad3946ee0',"txtTipe" => 'WALK',"floatData" => '01.09',"dtnInsertedDate" => '2022-01-19 17:34',"txtWaktuTempuh" => '0m',"floatPoint" => '5.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-19 17:40',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '826bde79-b964-4c2f-9171-817800026c19',"txtTipe" => 'WALK',"floatData" => '1.28',"dtnInsertedDate" => '2022-01-19 17:41',"txtWaktuTempuh" => '0m',"floatPoint" => '6.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtTipe" => 'WALK',"floatData" => '1.35',"dtnInsertedDate" => '2022-01-19 17:45',"txtWaktuTempuh" => '0m',"floatPoint" => '6.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtTipe" => 'WALK',"floatData" => '2.6',"dtnInsertedDate" => '2022-01-19 17:46',"txtWaktuTempuh" => '0m',"floatPoint" => '13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '4.34',"dtnInsertedDate" => '2022-01-19 17:47',"txtWaktuTempuh" => '0m',"floatPoint" => '21.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '04.02',"dtnInsertedDate" => '2022-01-19 17:51',"txtWaktuTempuh" => '0m',"floatPoint" => '20.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '05.03',"dtnInsertedDate" => '2022-01-19 17:55',"txtWaktuTempuh" => '0m',"floatPoint" => '25.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '4.63',"dtnInsertedDate" => '2022-01-19 18:07',"txtWaktuTempuh" => '0m',"floatPoint" => '23.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'WALK',"floatData" => '4.12',"dtnInsertedDate" => '2022-01-19 18:24',"txtWaktuTempuh" => '0m',"floatPoint" => '20.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '3.16',"dtnInsertedDate" => '2022-01-19 18:24',"txtWaktuTempuh" => '0m',"floatPoint" => '15.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '3.36',"dtnInsertedDate" => '2022-01-19 18:28',"txtWaktuTempuh" => '0m',"floatPoint" => '16.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'WALK',"floatData" => '2.21',"dtnInsertedDate" => '2022-01-19 18:29',"txtWaktuTempuh" => '0m',"floatPoint" => '11.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'WALK',"floatData" => '01.09',"dtnInsertedDate" => '2022-01-19 18:33',"txtWaktuTempuh" => '0m',"floatPoint" => '5.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtTipe" => 'WALK',"floatData" => '0.38',"dtnInsertedDate" => '2022-01-19 18:37',"txtWaktuTempuh" => '0m',"floatPoint" => '1.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '3',"dtnInsertedDate" => '2022-01-19 18:56',"txtWaktuTempuh" => '0m',"floatPoint" => '15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '2.16',"dtnInsertedDate" => '2022-01-19 18:59',"txtWaktuTempuh" => '0m',"floatPoint" => '10.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '1.92',"dtnInsertedDate" => '2022-01-19 19:04',"txtWaktuTempuh" => '0m',"floatPoint" => '9.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '3.22',"dtnInsertedDate" => '2022-01-19 19:15',"txtWaktuTempuh" => '0m',"floatPoint" => '16.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '8.4',"dtnInsertedDate" => '2022-01-19 19:21',"txtWaktuTempuh" => '0m',"floatPoint" => '42'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '01.02',"dtnInsertedDate" => '2022-01-19 19:23',"txtWaktuTempuh" => '0m',"floatPoint" => '5.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'WALK',"floatData" => '1.92',"dtnInsertedDate" => '2022-01-19 19:28',"txtWaktuTempuh" => '0m',"floatPoint" => '9.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtTipe" => 'WALK',"floatData" => '2.1',"dtnInsertedDate" => '2022-01-19 19:36',"txtWaktuTempuh" => '0m',"floatPoint" => '10.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '0.69',"dtnInsertedDate" => '2022-01-19 19:41',"txtWaktuTempuh" => '0m',"floatPoint" => '3.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '04.02',"dtnInsertedDate" => '2022-01-19 19:45',"txtWaktuTempuh" => '0m',"floatPoint" => '20.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '2.42',"dtnInsertedDate" => '2022-01-19 19:56',"txtWaktuTempuh" => '0m',"floatPoint" => '12.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '1.3',"dtnInsertedDate" => '2022-01-19 19:56',"txtWaktuTempuh" => '0m',"floatPoint" => '6.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtTipe" => 'WALK',"floatData" => '5.98',"dtnInsertedDate" => '2022-01-19 19:58',"txtWaktuTempuh" => '0m',"floatPoint" => '29.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'WALK',"floatData" => '1.5',"dtnInsertedDate" => '2022-01-19 20:10',"txtWaktuTempuh" => '0m',"floatPoint" => '7.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '2.28',"dtnInsertedDate" => '2022-01-19 20:32',"txtWaktuTempuh" => '0m',"floatPoint" => '11.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtTipe" => 'WALK',"floatData" => '01.02',"dtnInsertedDate" => '2022-01-19 20:40',"txtWaktuTempuh" => '0m',"floatPoint" => '5.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '0.94',"dtnInsertedDate" => '2022-01-19 20:59',"txtWaktuTempuh" => '0m',"floatPoint" => '4.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c83d2233-eb67-4401-842e-9497f6868bc4',"txtTipe" => 'WALK',"floatData" => '04.08',"dtnInsertedDate" => '2022-01-19 21:13',"txtWaktuTempuh" => '0m',"floatPoint" => '20.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'WALK',"floatData" => '3.74',"dtnInsertedDate" => '2022-01-17 21:13',"txtWaktuTempuh" => '0m',"floatPoint" => '18.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '7',"dtnInsertedDate" => '2022-01-19 19:27',"txtWaktuTempuh" => '0m',"floatPoint" => '35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '03.05',"dtnInsertedDate" => '2022-01-19 20:05',"txtWaktuTempuh" => '0m',"floatPoint" => '15.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '3.16',"dtnInsertedDate" => '2022-01-19 22:17',"txtWaktuTempuh" => '0m',"floatPoint" => '5.27'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'BIKE',"floatData" => '5.15',"dtnInsertedDate" => '2022-01-19 22:22',"txtWaktuTempuh" => '0m',"floatPoint" => '8.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '2.78',"dtnInsertedDate" => '2022-01-20 4:28',"txtWaktuTempuh" => '0m',"floatPoint" => '4.63'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtTipe" => 'BIKE',"floatData" => '1.7',"dtnInsertedDate" => '2022-01-20 6:38',"txtWaktuTempuh" => '0m',"floatPoint" => '2.83'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'BIKE',"floatData" => '5.35',"dtnInsertedDate" => '2022-01-20 7:01',"txtWaktuTempuh" => '0m',"floatPoint" => '8.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '30.31',"dtnInsertedDate" => '2022-01-20 7:14',"txtWaktuTempuh" => '0m',"floatPoint" => '50.52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'BIKE',"floatData" => '14.35',"dtnInsertedDate" => '2022-01-20 7:19',"txtWaktuTempuh" => '0m',"floatPoint" => '23.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '6.8',"dtnInsertedDate" => '2022-01-20 7:21',"txtWaktuTempuh" => '0m',"floatPoint" => '11.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '75b6803b-110a-493b-9af7-58585e2282a2',"txtTipe" => 'BIKE',"floatData" => '7.41',"dtnInsertedDate" => '2022-01-20 7:56',"txtWaktuTempuh" => '0m',"floatPoint" => '12.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.11',"dtnInsertedDate" => '2022-01-20 8:14',"txtWaktuTempuh" => '0m',"floatPoint" => '1.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f3a74db-4abe-431b-addc-ec0f1ddd397a',"txtTipe" => 'BIKE',"floatData" => '8.52',"dtnInsertedDate" => '2022-01-20 9:22',"txtWaktuTempuh" => '0m',"floatPoint" => '14.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'BIKE',"floatData" => '17.28',"dtnInsertedDate" => '2022-01-20 9:39',"txtWaktuTempuh" => '0m',"floatPoint" => '28.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '323293c6-326b-4c50-aac3-5bf47fd711c2',"txtTipe" => 'BIKE',"floatData" => '8.27',"dtnInsertedDate" => '2022-01-20 10:17',"txtWaktuTempuh" => '0m',"floatPoint" => '13.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'BIKE',"floatData" => '5.43',"dtnInsertedDate" => '2022-01-20 11:20',"txtWaktuTempuh" => '0m',"floatPoint" => '09.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'BIKE',"floatData" => '17.28',"dtnInsertedDate" => '2022-01-20 13:13',"txtWaktuTempuh" => '0m',"floatPoint" => '28.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '10.84',"dtnInsertedDate" => '2022-01-20 17:12',"txtWaktuTempuh" => '0m',"floatPoint" => '18.07'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '3.66',"dtnInsertedDate" => '2022-01-20 17:48',"txtWaktuTempuh" => '0m',"floatPoint" => '6.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'BIKE',"floatData" => '2.14',"dtnInsertedDate" => '2022-01-20 18:03',"txtWaktuTempuh" => '0m',"floatPoint" => '3.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'BIKE',"floatData" => '4.47',"dtnInsertedDate" => '2022-01-20 18:43',"txtWaktuTempuh" => '0m',"floatPoint" => '7.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '7.13',"dtnInsertedDate" => '2022-01-20 19:03',"txtWaktuTempuh" => '0m',"floatPoint" => '11.88'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'BIKE',"floatData" => '17.01',"dtnInsertedDate" => '2022-01-20 18:57',"txtWaktuTempuh" => '0m',"floatPoint" => '28.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtTipe" => 'BIKE',"floatData" => '1.6',"dtnInsertedDate" => '2022-01-20 19:26',"txtWaktuTempuh" => '0m',"floatPoint" => '2.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0771207a-0c45-424e-ac90-4222d5307488',"txtTipe" => 'BIKE',"floatData" => '07.03',"dtnInsertedDate" => '2022-01-20 19:56',"txtWaktuTempuh" => '0m',"floatPoint" => '11.72'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '88a73989-e0df-4e0e-8274-6995cb1f964d',"txtTipe" => 'BIKE',"floatData" => '21.54',"dtnInsertedDate" => '2022-01-20 20:12',"txtWaktuTempuh" => '0m',"floatPoint" => '35.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'BIKE',"floatData" => '16.33',"dtnInsertedDate" => '2022-01-20 20:48',"txtWaktuTempuh" => '0m',"floatPoint" => '27.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtTipe" => 'BIKE',"floatData" => '10.72',"dtnInsertedDate" => '2022-01-20 21:17',"txtWaktuTempuh" => '0m',"floatPoint" => '17.87'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'RUN',"floatData" => '1.5',"dtnInsertedDate" => '2022-01-19 22:08',"txtWaktuTempuh" => '0m',"floatPoint" => '7.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'RUN',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-19 23:18',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtTipe" => 'RUN',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-20 6:07',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'RUN',"floatData" => '6.74',"dtnInsertedDate" => '2022-01-20 6:26',"txtWaktuTempuh" => '0m',"floatPoint" => '33.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '7.61',"dtnInsertedDate" => '2022-01-20 6:50',"txtWaktuTempuh" => '0m',"floatPoint" => '38.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'RUN',"floatData" => '2.8',"dtnInsertedDate" => '2022-01-20 7:20',"txtWaktuTempuh" => '0m',"floatPoint" => '14'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '5.67',"dtnInsertedDate" => '2022-01-20 18:07',"txtWaktuTempuh" => '0m',"floatPoint" => '28.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'RUN',"floatData" => '10.03',"dtnInsertedDate" => '2022-01-20 18:12',"txtWaktuTempuh" => '0m',"floatPoint" => '50.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '0.47',"dtnInsertedDate" => '2022-01-20 18:17',"txtWaktuTempuh" => '0m',"floatPoint" => '2.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '7.65',"dtnInsertedDate" => '2022-01-20 18:18',"txtWaktuTempuh" => '0m',"floatPoint" => '38.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '739f2d67-44de-4a43-8d9c-d6f3ca84d944',"txtTipe" => 'RUN',"floatData" => '06.02',"dtnInsertedDate" => '2022-01-20 18:24',"txtWaktuTempuh" => '0m',"floatPoint" => '30.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '2.57',"dtnInsertedDate" => '2022-01-20 18:39',"txtWaktuTempuh" => '0m',"floatPoint" => '12.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'RUN',"floatData" => '5.24',"dtnInsertedDate" => '2022-01-20 18:52',"txtWaktuTempuh" => '0m',"floatPoint" => '26.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-20 19:10',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'RUN',"floatData" => '6.1',"dtnInsertedDate" => '2022-01-20 19:25',"txtWaktuTempuh" => '0m',"floatPoint" => '30.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '2.17',"dtnInsertedDate" => '2022-01-20 20:02',"txtWaktuTempuh" => '0m',"floatPoint" => '10.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '4.5',"dtnInsertedDate" => '2022-01-20 21:14',"txtWaktuTempuh" => '0m',"floatPoint" => '22.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '7.56',"dtnInsertedDate" => '2022-01-19 21:32',"txtWaktuTempuh" => '0m',"floatPoint" => '37.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '7.62',"dtnInsertedDate" => '2022-01-19 21:58',"txtWaktuTempuh" => '0m',"floatPoint" => '38.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '0.18',"dtnInsertedDate" => '2022-01-19 22:03',"txtWaktuTempuh" => '0m',"floatPoint" => '0.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'WALK',"floatData" => '0.16',"dtnInsertedDate" => '2022-01-20 4:25',"txtWaktuTempuh" => '0m',"floatPoint" => '0.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'WALK',"floatData" => '0.12',"dtnInsertedDate" => '2022-01-20 4:27',"txtWaktuTempuh" => '0m',"floatPoint" => '0.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'WALK',"floatData" => '02.01',"dtnInsertedDate" => '2022-01-20 6:09',"txtWaktuTempuh" => '0m',"floatPoint" => '10.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '02.06',"dtnInsertedDate" => '2022-01-20 6:15',"txtWaktuTempuh" => '0m',"floatPoint" => '10.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '2.47',"dtnInsertedDate" => '2022-01-20 6:19',"txtWaktuTempuh" => '0m',"floatPoint" => '12.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '5.1',"dtnInsertedDate" => '2022-01-20 6:59',"txtWaktuTempuh" => '0m',"floatPoint" => '25.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '0.75',"dtnInsertedDate" => '2022-01-20 7:00',"txtWaktuTempuh" => '0m',"floatPoint" => '3.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d5cf232-4f3f-40b6-ba6d-423a7b346ec2',"txtTipe" => 'WALK',"floatData" => '2.38',"dtnInsertedDate" => '2022-01-20 7:02',"txtWaktuTempuh" => '0m',"floatPoint" => '11.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-20 7:09',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '4.59',"dtnInsertedDate" => '2022-01-20 7:15',"txtWaktuTempuh" => '0m',"floatPoint" => '22.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '5.59',"dtnInsertedDate" => '2022-01-20 7:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '1.95',"dtnInsertedDate" => '2022-01-20 7:27',"txtWaktuTempuh" => '0m',"floatPoint" => '9.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '54d52aab-3b94-4a6d-8fb4-34c5a6e596bc',"txtTipe" => 'WALK',"floatData" => '2.96',"dtnInsertedDate" => '2022-01-20 7:30',"txtWaktuTempuh" => '0m',"floatPoint" => '14.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '5.37',"dtnInsertedDate" => '2022-01-20 7:43',"txtWaktuTempuh" => '0m',"floatPoint" => '26.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '1.8',"dtnInsertedDate" => '2022-01-20 7:44',"txtWaktuTempuh" => '0m',"floatPoint" => '9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtTipe" => 'WALK',"floatData" => '2.15',"dtnInsertedDate" => '2022-01-20 7:49',"txtWaktuTempuh" => '0m',"floatPoint" => '10.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2f447ce7-516f-43bc-83da-ea2c01389b91',"txtTipe" => 'WALK',"floatData" => '4.33',"dtnInsertedDate" => '2022-01-20 8:17',"txtWaktuTempuh" => '0m',"floatPoint" => '21.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd15467c7-d34b-42fa-96cd-b04a94dcfdcc',"txtTipe" => 'WALK',"floatData" => '5.45',"dtnInsertedDate" => '2022-01-20 8:43',"txtWaktuTempuh" => '0m',"floatPoint" => '27.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '91642d86-dbfb-4797-95cc-7d2759a6fff7',"txtTipe" => 'WALK',"floatData" => '04.05',"dtnInsertedDate" => '2022-01-20 8:54',"txtWaktuTempuh" => '0m',"floatPoint" => '20.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtTipe" => 'WALK',"floatData" => '1.75',"dtnInsertedDate" => '2022-01-20 11:09',"txtWaktuTempuh" => '0m',"floatPoint" => '8.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '02.08',"dtnInsertedDate" => '2022-01-20 12:54',"txtWaktuTempuh" => '0m',"floatPoint" => '10.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '3.9',"dtnInsertedDate" => '2022-01-20 13:36',"txtWaktuTempuh" => '0m',"floatPoint" => '19.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '05.02',"dtnInsertedDate" => '2022-01-20 14:02',"txtWaktuTempuh" => '0m',"floatPoint" => '25.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fba1da50-f41c-43a2-8ff4-75e269b29a38',"txtTipe" => 'WALK',"floatData" => '1.15',"dtnInsertedDate" => '2022-01-20 15:01',"txtWaktuTempuh" => '0m',"floatPoint" => '5.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtTipe" => 'WALK',"floatData" => '0.71',"dtnInsertedDate" => '2022-01-20 15:11',"txtWaktuTempuh" => '0m',"floatPoint" => '3.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '2.61',"dtnInsertedDate" => '2022-01-20 15:24',"txtWaktuTempuh" => '0m',"floatPoint" => '13.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '0.8',"dtnInsertedDate" => '2022-01-20 16:57',"txtWaktuTempuh" => '0m',"floatPoint" => '4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtTipe" => 'WALK',"floatData" => '3.85',"dtnInsertedDate" => '2022-01-20 17:53',"txtWaktuTempuh" => '0m',"floatPoint" => '19.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '826bde79-b964-4c2f-9171-817800026c19',"txtTipe" => 'WALK',"floatData" => '01.09',"dtnInsertedDate" => '2022-01-20 18:05',"txtWaktuTempuh" => '0m',"floatPoint" => '5.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '0.89',"dtnInsertedDate" => '2022-01-20 18:09',"txtWaktuTempuh" => '0m',"floatPoint" => '4.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-20 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '4.61',"dtnInsertedDate" => '2022-01-20 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '23.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '1.72',"dtnInsertedDate" => '2022-01-20 18:12',"txtWaktuTempuh" => '0m',"floatPoint" => '8.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'WALK',"floatData" => '02.07',"dtnInsertedDate" => '2022-01-20 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '10.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'WALK',"floatData" => '1.4',"dtnInsertedDate" => '2022-01-20 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'WALK',"floatData" => '1.17',"dtnInsertedDate" => '2022-01-20 18:16',"txtWaktuTempuh" => '0m',"floatPoint" => '5.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '1.51',"dtnInsertedDate" => '2022-01-20 18:17',"txtWaktuTempuh" => '0m',"floatPoint" => '7.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f48dc166-7f69-437c-9659-f1c288c94f24',"txtTipe" => 'WALK',"floatData" => '1.53',"dtnInsertedDate" => '2022-01-20 18:20',"txtWaktuTempuh" => '0m',"floatPoint" => '7.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f48dc166-7f69-437c-9659-f1c288c94f24',"txtTipe" => 'WALK',"floatData" => '03.09',"dtnInsertedDate" => '2022-01-20 18:21',"txtWaktuTempuh" => '0m',"floatPoint" => '15.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f48dc166-7f69-437c-9659-f1c288c94f24',"txtTipe" => 'WALK',"floatData" => '03.06',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '15.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '1.41',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '07.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '1.53',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '7.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtTipe" => 'WALK',"floatData" => '1.49',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '7.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '3.14',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '15.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '3.29',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '16.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '1.16',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '5.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '2.76',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '13.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '11.2',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '56'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'WALK',"floatData" => '2.33',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '11.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '4.54',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '22.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '1.68',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '8.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6df459be-cb5b-47e1-ac6b-c7544b4c2180',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7c4a32e5-3c11-4fc8-9624-79687bd5a4ed',"txtTipe" => 'WALK',"floatData" => '01.01',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '05.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '2.15',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '10.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '1.9',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '9.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '7.24',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '36.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'WALK',"floatData" => '5.79',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '28.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtTipe" => 'WALK',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '10.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '4.45',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '22.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ace9776a-7e6c-4327-b047-0e8daeb2b2c9',"txtTipe" => 'WALK',"floatData" => '3.27',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '16.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '5',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'WALK',"floatData" => '3.21',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '16.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'WALK',"floatData" => '2.58',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '12.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtTipe" => 'WALK',"floatData" => '1.35',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '6.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '0.76',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '3.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '290831f3-b868-4983-8ece-b7c98583a375',"txtTipe" => 'WALK',"floatData" => '0.22',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '1.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtTipe" => 'WALK',"floatData" => '3.37',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '16.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtTipe" => 'WALK',"floatData" => '2.94',"dtnInsertedDate" => '2022-01-20 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '14.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '0.03',"dtnInsertedDate" => '2022-01-21 15:16',"txtWaktuTempuh" => '0m',"floatPoint" => '0.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e6b15d77-1bba-4c1c-9b2d-7e8c9b28a38d',"txtTipe" => 'BIKE',"floatData" => '6.97',"dtnInsertedDate" => '2022-01-22 1:20',"txtWaktuTempuh" => '0m',"floatPoint" => '11.62'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'BIKE',"floatData" => '9.37',"dtnInsertedDate" => '2022-01-21 5:41',"txtWaktuTempuh" => '0m',"floatPoint" => '15.62'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'BIKE',"floatData" => '3.1',"dtnInsertedDate" => '2022-01-21 6:17',"txtWaktuTempuh" => '0m',"floatPoint" => '5.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'BIKE',"floatData" => '10.21',"dtnInsertedDate" => '2022-01-21 6:17',"txtWaktuTempuh" => '0m',"floatPoint" => '17.02'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '3.6',"dtnInsertedDate" => '2022-01-21 6:25',"txtWaktuTempuh" => '0m',"floatPoint" => '6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '31bcf241-a679-46e8-963c-b8221b9bb696',"txtTipe" => 'BIKE',"floatData" => '9.1',"dtnInsertedDate" => '2022-01-21 6:42',"txtWaktuTempuh" => '0m',"floatPoint" => '15.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'BIKE',"floatData" => '14.11',"dtnInsertedDate" => '2022-01-21 7:08',"txtWaktuTempuh" => '0m',"floatPoint" => '23.52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '36.11',"dtnInsertedDate" => '2022-01-21 7:24',"txtWaktuTempuh" => '0m',"floatPoint" => '60.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '25.28',"dtnInsertedDate" => '2022-01-21 7:40',"txtWaktuTempuh" => '0m',"floatPoint" => '42.13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '25c432dd-e9bd-42ac-8415-865f7aac1b4e',"txtTipe" => 'BIKE',"floatData" => '12.78',"dtnInsertedDate" => '2022-01-21 7:41',"txtWaktuTempuh" => '0m',"floatPoint" => '21.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '9',"dtnInsertedDate" => '2022-01-21 7:54',"txtWaktuTempuh" => '0m',"floatPoint" => '15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'dd9ae61b-9e15-4f59-83ba-b61136fd95b5',"txtTipe" => 'BIKE',"floatData" => '48.63',"dtnInsertedDate" => '2022-01-21 8:06',"txtWaktuTempuh" => '0m',"floatPoint" => '81.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e6b15d77-1bba-4c1c-9b2d-7e8c9b28a38d',"txtTipe" => 'BIKE',"floatData" => '6.34',"dtnInsertedDate" => '2022-01-21 8:10',"txtWaktuTempuh" => '0m',"floatPoint" => '10.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3cfb05ca-8a50-4363-840b-3fc250a1571d',"txtTipe" => 'BIKE',"floatData" => '19.67',"dtnInsertedDate" => '2022-01-21 8:11',"txtWaktuTempuh" => '0m',"floatPoint" => '32.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e9952c10-9e7c-4664-b7bb-0e1a945d0208',"txtTipe" => 'BIKE',"floatData" => '12.24',"dtnInsertedDate" => '2022-01-21 13:13',"txtWaktuTempuh" => '0m',"floatPoint" => '20.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '18.55',"dtnInsertedDate" => '2022-01-21 14:13',"txtWaktuTempuh" => '0m',"floatPoint" => '30.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '2.58',"dtnInsertedDate" => '2022-01-21 17:37',"txtWaktuTempuh" => '0m',"floatPoint" => '4.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtTipe" => 'BIKE',"floatData" => '13.36',"dtnInsertedDate" => '2022-01-21 17:55',"txtWaktuTempuh" => '0m',"floatPoint" => '22.27'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtTipe" => 'BIKE',"floatData" => '10.6',"dtnInsertedDate" => '2022-01-21 18:06',"txtWaktuTempuh" => '0m',"floatPoint" => '17.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '616b0c87-be73-4d25-a6fc-fe0856053b23',"txtTipe" => 'BIKE',"floatData" => '03.02',"dtnInsertedDate" => '2022-01-21 18:34',"txtWaktuTempuh" => '0m',"floatPoint" => '05.03'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtTipe" => 'BIKE',"floatData" => '10.62',"dtnInsertedDate" => '2022-01-21 19:40',"txtWaktuTempuh" => '0m',"floatPoint" => '17.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtTipe" => 'BIKE',"floatData" => '3.8',"dtnInsertedDate" => '2022-01-21 19:51',"txtWaktuTempuh" => '0m',"floatPoint" => '6.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '9.19',"dtnInsertedDate" => '2022-01-21 20:00',"txtWaktuTempuh" => '0m',"floatPoint" => '15.32'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0771207a-0c45-424e-ac90-4222d5307488',"txtTipe" => 'BIKE',"floatData" => '1.93',"dtnInsertedDate" => '2022-01-21 20:07',"txtWaktuTempuh" => '0m',"floatPoint" => '3.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'BIKE',"floatData" => '2.14',"dtnInsertedDate" => '2022-01-21 20:38',"txtWaktuTempuh" => '0m',"floatPoint" => '3.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2dd5d7c6-d7cf-419c-9e80-1b6bd4690d52',"txtTipe" => 'BIKE',"floatData" => '8.29',"dtnInsertedDate" => '2022-01-21 20:57',"txtWaktuTempuh" => '0m',"floatPoint" => '13.82'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.41',"dtnInsertedDate" => '2022-01-21 21:01',"txtWaktuTempuh" => '0m',"floatPoint" => '2.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.23',"dtnInsertedDate" => '2022-01-21 21:02',"txtWaktuTempuh" => '0m',"floatPoint" => '02.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtTipe" => 'BIKE',"floatData" => '3.11',"dtnInsertedDate" => '2022-01-21 21:07',"txtWaktuTempuh" => '0m',"floatPoint" => '5.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'RUN',"floatData" => '04.02',"dtnInsertedDate" => '2022-01-21 5:06',"txtWaktuTempuh" => '0m',"floatPoint" => '20.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtTipe" => 'RUN',"floatData" => '2.18',"dtnInsertedDate" => '2022-01-21 6:07',"txtWaktuTempuh" => '0m',"floatPoint" => '10.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'RUN',"floatData" => '6.22',"dtnInsertedDate" => '2022-01-21 6:17',"txtWaktuTempuh" => '0m',"floatPoint" => '31.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '10.1',"dtnInsertedDate" => '2022-01-21 6:40',"txtWaktuTempuh" => '0m',"floatPoint" => '50.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'RUN',"floatData" => '01.05',"dtnInsertedDate" => '2022-01-21 7:01',"txtWaktuTempuh" => '0m',"floatPoint" => '5.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '5.55',"dtnInsertedDate" => '2022-01-21 7:01',"txtWaktuTempuh" => '0m',"floatPoint" => '27.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'RUN',"floatData" => '6.1',"dtnInsertedDate" => '2022-01-21 7:06',"txtWaktuTempuh" => '0m',"floatPoint" => '30.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'RUN',"floatData" => '0.29',"dtnInsertedDate" => '2022-01-21 7:17',"txtWaktuTempuh" => '0m',"floatPoint" => '1.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '56d00634-3fc0-44b3-b33f-67340fc9590a',"txtTipe" => 'RUN',"floatData" => '6.27',"dtnInsertedDate" => '2022-01-21 7:19',"txtWaktuTempuh" => '0m',"floatPoint" => '31.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'RUN',"floatData" => '4.72',"dtnInsertedDate" => '2022-01-21 7:45',"txtWaktuTempuh" => '0m',"floatPoint" => '23.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'RUN',"floatData" => '3.4',"dtnInsertedDate" => '2022-01-21 9:45',"txtWaktuTempuh" => '0m',"floatPoint" => '17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '3.39',"dtnInsertedDate" => '2022-01-21 18:03',"txtWaktuTempuh" => '0m',"floatPoint" => '16.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '8.17',"dtnInsertedDate" => '2022-01-21 18:06',"txtWaktuTempuh" => '0m',"floatPoint" => '40.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f603ca4-a3c6-4b7f-9007-65eb8310f9ed',"txtTipe" => 'RUN',"floatData" => '8.6',"dtnInsertedDate" => '2022-01-21 18:26',"txtWaktuTempuh" => '0m',"floatPoint" => '43'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '7',"dtnInsertedDate" => '2022-01-21 18:30',"txtWaktuTempuh" => '0m',"floatPoint" => '35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtTipe" => 'RUN',"floatData" => '10.12',"dtnInsertedDate" => '2022-01-21 19:48',"txtWaktuTempuh" => '0m',"floatPoint" => '50.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'WALK',"floatData" => '0.84',"dtnInsertedDate" => '2022-01-20 22:40',"txtWaktuTempuh" => '0m',"floatPoint" => '4.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '0.55',"dtnInsertedDate" => '2022-01-20 22:56',"txtWaktuTempuh" => '0m',"floatPoint" => '2.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.46',"dtnInsertedDate" => '2022-01-21 4:27',"txtWaktuTempuh" => '0m',"floatPoint" => '2.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.56',"dtnInsertedDate" => '2022-01-21 4:29',"txtWaktuTempuh" => '0m',"floatPoint" => '2.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '3.81',"dtnInsertedDate" => '2022-01-21 6:06',"txtWaktuTempuh" => '0m',"floatPoint" => '19.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '05.09',"dtnInsertedDate" => '2022-01-21 6:36',"txtWaktuTempuh" => '0m',"floatPoint" => '25.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'WALK',"floatData" => '2.86',"dtnInsertedDate" => '2022-01-21 7:00',"txtWaktuTempuh" => '0m',"floatPoint" => '14.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '0.57',"dtnInsertedDate" => '2022-01-21 7:04',"txtWaktuTempuh" => '0m',"floatPoint" => '2.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a13bb533-ce75-473e-881b-5d266e9a5fe3',"txtTipe" => 'WALK',"floatData" => '3.21',"dtnInsertedDate" => '2022-01-21 7:04',"txtWaktuTempuh" => '0m',"floatPoint" => '16.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a646b2d-3a6d-46df-85a4-6f4ad3946ee0',"txtTipe" => 'WALK',"floatData" => '0.96',"dtnInsertedDate" => '2022-01-21 7:05',"txtWaktuTempuh" => '0m',"floatPoint" => '4.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '3.8',"dtnInsertedDate" => '2022-01-21 7:07',"txtWaktuTempuh" => '0m',"floatPoint" => '19'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '5.23',"dtnInsertedDate" => '2022-01-21 7:10',"txtWaktuTempuh" => '0m',"floatPoint" => '26.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '10.4',"dtnInsertedDate" => '2022-01-21 7:11',"txtWaktuTempuh" => '0m',"floatPoint" => '52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.63',"dtnInsertedDate" => '2022-01-21 7:20',"txtWaktuTempuh" => '0m',"floatPoint" => '3.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '2.71',"dtnInsertedDate" => '2022-01-21 7:20',"txtWaktuTempuh" => '0m',"floatPoint" => '13.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '2.89',"dtnInsertedDate" => '2022-01-21 7:25',"txtWaktuTempuh" => '0m',"floatPoint" => '14.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '1.4',"dtnInsertedDate" => '2022-01-21 7:27',"txtWaktuTempuh" => '0m',"floatPoint" => '7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f603ca4-a3c6-4b7f-9007-65eb8310f9ed',"txtTipe" => 'WALK',"floatData" => '3.58',"dtnInsertedDate" => '2022-01-21 7:35',"txtWaktuTempuh" => '0m',"floatPoint" => '17.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7f0c6b54-fe2b-441d-8fa4-0e3ea99a30ca',"txtTipe" => 'WALK',"floatData" => '5.25',"dtnInsertedDate" => '2022-01-21 7:37',"txtWaktuTempuh" => '0m',"floatPoint" => '26.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '03.03',"dtnInsertedDate" => '2022-01-21 7:38',"txtWaktuTempuh" => '0m',"floatPoint" => '15.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '8.29',"dtnInsertedDate" => '2022-01-21 7:42',"txtWaktuTempuh" => '0m',"floatPoint" => '41.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '4.86',"dtnInsertedDate" => '2022-01-21 7:57',"txtWaktuTempuh" => '0m',"floatPoint" => '24.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '6.12',"dtnInsertedDate" => '2022-01-21 7:58',"txtWaktuTempuh" => '0m',"floatPoint" => '30.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'WALK',"floatData" => '05.04',"dtnInsertedDate" => '2022-01-21 8:07',"txtWaktuTempuh" => '0m',"floatPoint" => '25.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '1.25',"dtnInsertedDate" => '2022-01-21 9:10',"txtWaktuTempuh" => '0m',"floatPoint" => '6.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtTipe" => 'WALK',"floatData" => '0.24',"dtnInsertedDate" => '2022-01-21 9:23',"txtWaktuTempuh" => '0m',"floatPoint" => '1.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '5.41',"dtnInsertedDate" => '2022-01-21 10:49',"txtWaktuTempuh" => '0m',"floatPoint" => '27.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtTipe" => 'WALK',"floatData" => '8.13',"dtnInsertedDate" => '2022-01-21 14:37',"txtWaktuTempuh" => '0m',"floatPoint" => '40.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtTipe" => 'WALK',"floatData" => '1.25',"dtnInsertedDate" => '2022-01-21 16:12',"txtWaktuTempuh" => '0m',"floatPoint" => '6.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.63',"dtnInsertedDate" => '2022-01-21 16:17',"txtWaktuTempuh" => '0m',"floatPoint" => '3.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.6',"dtnInsertedDate" => '2022-01-21 16:19',"txtWaktuTempuh" => '0m',"floatPoint" => '3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'WALK',"floatData" => '1.17',"dtnInsertedDate" => '2022-01-21 17:12',"txtWaktuTempuh" => '0m',"floatPoint" => '5.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a03629d-ddb9-4c82-937b-f32b635b916f',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-21 17:55',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '3.7',"dtnInsertedDate" => '2022-01-21 17:58',"txtWaktuTempuh" => '0m',"floatPoint" => '18.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '3.1',"dtnInsertedDate" => '2022-01-21 18:08',"txtWaktuTempuh" => '0m',"floatPoint" => '15.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtTipe" => 'WALK',"floatData" => '5',"dtnInsertedDate" => '2022-01-21 18:12',"txtWaktuTempuh" => '0m',"floatPoint" => '25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2c65bdf8-7b21-4b16-9e9c-3ee665d3b6c7',"txtTipe" => 'WALK',"floatData" => '03.03',"dtnInsertedDate" => '2022-01-21 18:19',"txtWaktuTempuh" => '0m',"floatPoint" => '15.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e291e713-7bd1-466c-90b1-726636c2e318',"txtTipe" => 'WALK',"floatData" => '4.5',"dtnInsertedDate" => '2022-01-21 18:21',"txtWaktuTempuh" => '0m',"floatPoint" => '22.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '3.53',"dtnInsertedDate" => '2022-01-21 18:21',"txtWaktuTempuh" => '0m',"floatPoint" => '17.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '10.6',"dtnInsertedDate" => '2022-01-21 18:45',"txtWaktuTempuh" => '0m',"floatPoint" => '53'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'WALK',"floatData" => '3.99',"dtnInsertedDate" => '2022-01-21 18:48',"txtWaktuTempuh" => '0m',"floatPoint" => '19.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ea224d9-1bfa-4055-876c-ab08c8974123',"txtTipe" => 'WALK',"floatData" => '0.54',"dtnInsertedDate" => '2022-01-21 18:56',"txtWaktuTempuh" => '0m',"floatPoint" => '2.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '0.7',"dtnInsertedDate" => '2022-01-21 18:56',"txtWaktuTempuh" => '0m',"floatPoint" => '3.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '1.48',"dtnInsertedDate" => '2022-01-21 18:58',"txtWaktuTempuh" => '0m',"floatPoint" => '7.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'WALK',"floatData" => '6.27',"dtnInsertedDate" => '2022-01-21 18:58',"txtWaktuTempuh" => '0m',"floatPoint" => '31.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6df459be-cb5b-47e1-ac6b-c7544b4c2180',"txtTipe" => 'WALK',"floatData" => '4.22',"dtnInsertedDate" => '2022-01-21 19:01',"txtWaktuTempuh" => '0m',"floatPoint" => '21.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-21 19:04',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '9.23',"dtnInsertedDate" => '2022-01-21 19:09',"txtWaktuTempuh" => '0m',"floatPoint" => '46.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '0.1',"dtnInsertedDate" => '2022-01-21 19:14',"txtWaktuTempuh" => '0m',"floatPoint" => '0.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '03.01',"dtnInsertedDate" => '2022-01-21 19:16',"txtWaktuTempuh" => '0m',"floatPoint" => '15.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '01.06',"dtnInsertedDate" => '2022-01-21 19:17',"txtWaktuTempuh" => '0m',"floatPoint" => '5.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtTipe" => 'WALK',"floatData" => '6.16',"dtnInsertedDate" => '2022-01-21 19:21',"txtWaktuTempuh" => '0m',"floatPoint" => '30.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '2.6',"dtnInsertedDate" => '2022-01-21 19:23',"txtWaktuTempuh" => '0m',"floatPoint" => '13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtTipe" => 'WALK',"floatData" => '02.09',"dtnInsertedDate" => '2022-01-21 19:28',"txtWaktuTempuh" => '0m',"floatPoint" => '10.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '6.4',"dtnInsertedDate" => '2022-01-21 19:37',"txtWaktuTempuh" => '0m',"floatPoint" => '32'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '3.9',"dtnInsertedDate" => '2022-01-21 20:15',"txtWaktuTempuh" => '0m',"floatPoint" => '19.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'WALK',"floatData" => '0.5',"dtnInsertedDate" => '2022-01-21 20:36',"txtWaktuTempuh" => '0m',"floatPoint" => '2.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '6.83',"dtnInsertedDate" => '2022-01-21 20:36',"txtWaktuTempuh" => '0m',"floatPoint" => '34.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '3.32',"dtnInsertedDate" => '2022-01-21 20:37',"txtWaktuTempuh" => '0m',"floatPoint" => '16.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '1.7',"dtnInsertedDate" => '2022-01-21 20:41',"txtWaktuTempuh" => '0m',"floatPoint" => '8.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.54',"dtnInsertedDate" => '2022-01-21 20:52',"txtWaktuTempuh" => '0m',"floatPoint" => '2.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtTipe" => 'WALK',"floatData" => '0.3',"dtnInsertedDate" => '2022-01-21 20:53',"txtWaktuTempuh" => '0m',"floatPoint" => '1.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-21 21:03',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '2.2',"dtnInsertedDate" => '2022-01-21 21:05',"txtWaktuTempuh" => '0m',"floatPoint" => '11'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '2.19',"dtnInsertedDate" => '2022-01-21 21:10',"txtWaktuTempuh" => '0m',"floatPoint" => '10.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtTipe" => 'WALK',"floatData" => '0.58',"dtnInsertedDate" => '2022-01-21 21:15',"txtWaktuTempuh" => '0m',"floatPoint" => '2.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtTipe" => 'BIKE',"floatData" => '10.6',"dtnInsertedDate" => '2022-01-21 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '17.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5712a9b0-4d3f-4453-8119-53d05c029e64',"txtTipe" => 'BIKE',"floatData" => '14.04',"dtnInsertedDate" => '2022-01-22 7:45',"txtWaktuTempuh" => '0m',"floatPoint" => '23.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '88a73989-e0df-4e0e-8274-6995cb1f964d',"txtTipe" => 'BIKE',"floatData" => '22.54',"dtnInsertedDate" => '2022-01-22 7:56',"txtWaktuTempuh" => '0m',"floatPoint" => '37.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '3.7',"dtnInsertedDate" => '2022-01-22 8:11',"txtWaktuTempuh" => '0m',"floatPoint" => '6.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtTipe" => 'BIKE',"floatData" => '13.03',"dtnInsertedDate" => '2022-01-22 8:26',"txtWaktuTempuh" => '0m',"floatPoint" => '21.72'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'BIKE',"floatData" => '30.12',"dtnInsertedDate" => '2022-01-22 8:28',"txtWaktuTempuh" => '0m',"floatPoint" => '50.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e9952c10-9e7c-4664-b7bb-0e1a945d0208',"txtTipe" => 'BIKE',"floatData" => '15.01',"dtnInsertedDate" => '2022-01-22 8:32',"txtWaktuTempuh" => '0m',"floatPoint" => '25.02'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1a3ce817-1bce-43e4-bb2e-ac1973252492',"txtTipe" => 'BIKE',"floatData" => '18.26',"dtnInsertedDate" => '2022-01-22 8:45',"txtWaktuTempuh" => '0m',"floatPoint" => '30.43'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '25c432dd-e9bd-42ac-8415-865f7aac1b4e',"txtTipe" => 'BIKE',"floatData" => '13.64',"dtnInsertedDate" => '2022-01-22 8:54',"txtWaktuTempuh" => '0m',"floatPoint" => '22.73'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ee39d654-aed5-4094-84b7-cc3ed4d0161e',"txtTipe" => 'BIKE',"floatData" => '6.48',"dtnInsertedDate" => '2022-01-22 9:16',"txtWaktuTempuh" => '0m',"floatPoint" => '10.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '9.91',"dtnInsertedDate" => '2022-01-22 9:40',"txtWaktuTempuh" => '0m',"floatPoint" => '16.52'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'BIKE',"floatData" => '58.62',"dtnInsertedDate" => '2022-01-22 9:50',"txtWaktuTempuh" => '0m',"floatPoint" => '97.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f3a74db-4abe-431b-addc-ec0f1ddd397a',"txtTipe" => 'BIKE',"floatData" => '27.32',"dtnInsertedDate" => '2022-01-22 10:00',"txtWaktuTempuh" => '0m',"floatPoint" => '45.53'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'BIKE',"floatData" => '33.18',"dtnInsertedDate" => '2022-01-22 10:05',"txtWaktuTempuh" => '0m',"floatPoint" => '55.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtTipe" => 'BIKE',"floatData" => '24.8',"dtnInsertedDate" => '2022-01-22 10:16',"txtWaktuTempuh" => '0m',"floatPoint" => '41.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '19.01',"dtnInsertedDate" => '2022-01-22 10:20',"txtWaktuTempuh" => '0m',"floatPoint" => '31.68'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '16.65',"dtnInsertedDate" => '2022-01-22 10:29',"txtWaktuTempuh" => '0m',"floatPoint" => '27.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e6b15d77-1bba-4c1c-9b2d-7e8c9b28a38d',"txtTipe" => 'BIKE',"floatData" => '12.71',"dtnInsertedDate" => '2022-01-22 10:37',"txtWaktuTempuh" => '0m',"floatPoint" => '21.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbc6289e-4026-49c3-b8d9-68f631d21162',"txtTipe" => 'BIKE',"floatData" => '4.6',"dtnInsertedDate" => '2022-01-22 10:40',"txtWaktuTempuh" => '0m',"floatPoint" => '7.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c1a6ee1-105a-47dd-8530-6d6cd7a651cd',"txtTipe" => 'BIKE',"floatData" => '6.3',"dtnInsertedDate" => '2022-01-22 11:41',"txtWaktuTempuh" => '0m',"floatPoint" => '10.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '290831f3-b868-4983-8ece-b7c98583a375',"txtTipe" => 'BIKE',"floatData" => '13.74',"dtnInsertedDate" => '2022-01-22 11:53',"txtWaktuTempuh" => '0m',"floatPoint" => '22.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '616b0c87-be73-4d25-a6fc-fe0856053b23',"txtTipe" => 'BIKE',"floatData" => '20.98',"dtnInsertedDate" => '2022-01-22 12:50',"txtWaktuTempuh" => '0m',"floatPoint" => '34.97'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '19.48',"dtnInsertedDate" => '2022-01-22 13:19',"txtWaktuTempuh" => '0m',"floatPoint" => '32.47'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd79f7bed-41ac-4100-b4bb-b00a01eb8820',"txtTipe" => 'BIKE',"floatData" => '43.74',"dtnInsertedDate" => '2022-01-22 13:26',"txtWaktuTempuh" => '0m',"floatPoint" => '72.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '19.07',"dtnInsertedDate" => '2022-01-22 13:58',"txtWaktuTempuh" => '0m',"floatPoint" => '31.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'BIKE',"floatData" => '40.53',"dtnInsertedDate" => '2022-01-22 17:04',"txtWaktuTempuh" => '0m',"floatPoint" => '67.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '9.95',"dtnInsertedDate" => '2022-01-22 17:44',"txtWaktuTempuh" => '0m',"floatPoint" => '16.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'BIKE',"floatData" => '6.82',"dtnInsertedDate" => '2022-01-22 18:16',"txtWaktuTempuh" => '0m',"floatPoint" => '11.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'BIKE',"floatData" => '25.16',"dtnInsertedDate" => '2022-01-22 18:26',"txtWaktuTempuh" => '0m',"floatPoint" => '41.93'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '1.85',"dtnInsertedDate" => '2022-01-22 18:54',"txtWaktuTempuh" => '0m',"floatPoint" => '03.08'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.34',"dtnInsertedDate" => '2022-01-22 18:56',"txtWaktuTempuh" => '0m',"floatPoint" => '2.23'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtTipe" => 'BIKE',"floatData" => '2',"dtnInsertedDate" => '2022-01-22 19:11',"txtWaktuTempuh" => '0m',"floatPoint" => '3.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28ce75fd-d357-4f8e-b378-543c7605049b',"txtTipe" => 'BIKE',"floatData" => '26.78',"dtnInsertedDate" => '2022-01-22 19:49',"txtWaktuTempuh" => '0m',"floatPoint" => '44.63'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtTipe" => 'BIKE',"floatData" => '3.12',"dtnInsertedDate" => '2022-01-22 19:52',"txtWaktuTempuh" => '0m',"floatPoint" => '5.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '75b6803b-110a-493b-9af7-58585e2282a2',"txtTipe" => 'BIKE',"floatData" => '9.32',"dtnInsertedDate" => '2022-01-22 19:55',"txtWaktuTempuh" => '0m',"floatPoint" => '15.53'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ca0c0424-be94-4e9f-ac62-c6225112fef4',"txtTipe" => 'BIKE',"floatData" => '7',"dtnInsertedDate" => '2022-01-22 19:57',"txtWaktuTempuh" => '0m',"floatPoint" => '11.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '323293c6-326b-4c50-aac3-5bf47fd711c2',"txtTipe" => 'BIKE',"floatData" => '14.95',"dtnInsertedDate" => '2022-01-22 20:00',"txtWaktuTempuh" => '0m',"floatPoint" => '24.92'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'BIKE',"floatData" => '7.5',"dtnInsertedDate" => '2022-01-22 20:43',"txtWaktuTempuh" => '0m',"floatPoint" => '12.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b09b2d24-6bdd-4cca-86a8-10cf63e219d2',"txtTipe" => 'RUN',"floatData" => '2.66',"dtnInsertedDate" => '2022-01-22 6:14',"txtWaktuTempuh" => '0m',"floatPoint" => '13.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '0.4',"dtnInsertedDate" => '2022-01-22 6:38',"txtWaktuTempuh" => '0m',"floatPoint" => '2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'RUN',"floatData" => '1.9',"dtnInsertedDate" => '2022-01-22 7:54',"txtWaktuTempuh" => '0m',"floatPoint" => '9.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '3.44',"dtnInsertedDate" => '2022-01-22 8:01',"txtWaktuTempuh" => '0m',"floatPoint" => '17.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3ff0a362-0f58-4c35-b303-2275152aa8ca',"txtTipe" => 'RUN',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-22 8:07',"txtWaktuTempuh" => '0m',"floatPoint" => '10.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '02.05',"dtnInsertedDate" => '2022-01-22 8:22',"txtWaktuTempuh" => '0m',"floatPoint" => '10.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtTipe" => 'RUN',"floatData" => '2.58',"dtnInsertedDate" => '2022-01-22 9:18',"txtWaktuTempuh" => '0m',"floatPoint" => '12.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtTipe" => 'RUN',"floatData" => '01.09',"dtnInsertedDate" => '2022-01-22 9:20',"txtWaktuTempuh" => '0m',"floatPoint" => '5.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '8.39',"dtnInsertedDate" => '2022-01-22 9:39',"txtWaktuTempuh" => '0m',"floatPoint" => '41.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '8.39',"dtnInsertedDate" => '2022-01-22 10:28',"txtWaktuTempuh" => '0m',"floatPoint" => '41.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtTipe" => 'RUN',"floatData" => '0.57',"dtnInsertedDate" => '2022-01-22 10:38',"txtWaktuTempuh" => '0m',"floatPoint" => '2.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '12.62',"dtnInsertedDate" => '2022-01-22 10:39',"txtWaktuTempuh" => '0m',"floatPoint" => '63.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '4.32',"dtnInsertedDate" => '2022-01-22 10:48',"txtWaktuTempuh" => '0m',"floatPoint" => '21.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'RUN',"floatData" => '10.42',"dtnInsertedDate" => '2022-01-22 10:53',"txtWaktuTempuh" => '0m',"floatPoint" => '52.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef713fc6-5671-4d00-b9bb-f95e760809fc',"txtTipe" => 'RUN',"floatData" => '04.01',"dtnInsertedDate" => '2022-01-22 10:55',"txtWaktuTempuh" => '0m',"floatPoint" => '20.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'RUN',"floatData" => '1.57',"dtnInsertedDate" => '2022-01-22 11:53',"txtWaktuTempuh" => '0m',"floatPoint" => '7.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'RUN',"floatData" => '1.57',"dtnInsertedDate" => '2022-01-22 11:56',"txtWaktuTempuh" => '0m',"floatPoint" => '7.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtTipe" => 'RUN',"floatData" => '07.05',"dtnInsertedDate" => '2022-01-22 13:06',"txtWaktuTempuh" => '0m',"floatPoint" => '35.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'RUN',"floatData" => '4.5',"dtnInsertedDate" => '2022-01-22 16:17',"txtWaktuTempuh" => '0m',"floatPoint" => '22.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtTipe" => 'RUN',"floatData" => '4.71',"dtnInsertedDate" => '2022-01-22 16:26',"txtWaktuTempuh" => '0m',"floatPoint" => '23.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '61f7508f-54ed-4ba2-ab62-a92e3622b8c2',"txtTipe" => 'RUN',"floatData" => '05.04',"dtnInsertedDate" => '2022-01-22 16:41',"txtWaktuTempuh" => '0m',"floatPoint" => '25.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtTipe" => 'RUN',"floatData" => '1.68',"dtnInsertedDate" => '2022-01-22 17:57',"txtWaktuTempuh" => '0m',"floatPoint" => '8.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '01.03',"dtnInsertedDate" => '2022-01-22 17:59',"txtWaktuTempuh" => '0m',"floatPoint" => '5.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'RUN',"floatData" => '07.02',"dtnInsertedDate" => '2022-01-22 18:15',"txtWaktuTempuh" => '0m',"floatPoint" => '35.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0987911-acce-49cc-8bfb-8e2b4d4ab2c2',"txtTipe" => 'RUN',"floatData" => '03.05',"dtnInsertedDate" => '2022-01-22 18:16',"txtWaktuTempuh" => '0m',"floatPoint" => '15.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd7ccb7c6-6a3b-4887-9c9a-2169fbeb6468',"txtTipe" => 'RUN',"floatData" => '4.49',"dtnInsertedDate" => '2022-01-22 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '22.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtTipe" => 'RUN',"floatData" => '9.58',"dtnInsertedDate" => '2022-01-22 18:28',"txtWaktuTempuh" => '0m',"floatPoint" => '47.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '5.51',"dtnInsertedDate" => '2022-01-22 19:43',"txtWaktuTempuh" => '0m',"floatPoint" => '27.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c0c4f496-e2a1-469e-9889-6c21ad281f70',"txtTipe" => 'RUN',"floatData" => '1.59',"dtnInsertedDate" => '2022-01-22 21:12',"txtWaktuTempuh" => '0m',"floatPoint" => '7.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0d450962-a4e6-4b2a-b04d-2f4733a4325f',"txtTipe" => 'RUN',"floatData" => '8.28',"dtnInsertedDate" => '2022-01-22 22:19',"txtWaktuTempuh" => '0m',"floatPoint" => '41.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '163dd60c-281f-48e9-a344-81b0642fecc4',"txtTipe" => 'RUN',"floatData" => '3.26',"dtnInsertedDate" => '2022-01-22 22:59',"txtWaktuTempuh" => '0m',"floatPoint" => '16.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '0.49',"dtnInsertedDate" => '2022-01-21 22:23',"txtWaktuTempuh" => '0m',"floatPoint" => '2.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8ae44c8b-984e-4000-aae5-e37184d914dc',"txtTipe" => 'WALK',"floatData" => '0.6',"dtnInsertedDate" => '2022-01-22 5:50',"txtWaktuTempuh" => '0m',"floatPoint" => '3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '3.63',"dtnInsertedDate" => '2022-01-22 6:25',"txtWaktuTempuh" => '0m',"floatPoint" => '18.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '5.68',"dtnInsertedDate" => '2022-01-22 6:41',"txtWaktuTempuh" => '0m',"floatPoint" => '28.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0eae1b07-a0cf-4085-ad15-7522c12de45b',"txtTipe" => 'WALK',"floatData" => '02.05',"dtnInsertedDate" => '2022-01-22 6:43',"txtWaktuTempuh" => '0m',"floatPoint" => '10.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '5.26',"dtnInsertedDate" => '2022-01-22 6:46',"txtWaktuTempuh" => '0m',"floatPoint" => '26.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d5cf232-4f3f-40b6-ba6d-423a7b346ec2',"txtTipe" => 'WALK',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-22 7:04',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '4.3',"dtnInsertedDate" => '2022-01-22 7:11',"txtWaktuTempuh" => '0m',"floatPoint" => '21.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '2.43',"dtnInsertedDate" => '2022-01-22 7:20',"txtWaktuTempuh" => '0m',"floatPoint" => '12.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '7.35',"dtnInsertedDate" => '2022-01-22 7:25',"txtWaktuTempuh" => '0m',"floatPoint" => '36.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtTipe" => 'WALK',"floatData" => '04.04',"dtnInsertedDate" => '2022-01-22 7:30',"txtWaktuTempuh" => '0m',"floatPoint" => '20.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtTipe" => 'WALK',"floatData" => '2.72',"dtnInsertedDate" => '2022-01-22 7:32',"txtWaktuTempuh" => '0m',"floatPoint" => '13.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '54d52aab-3b94-4a6d-8fb4-34c5a6e596bc',"txtTipe" => 'WALK',"floatData" => '4.15',"dtnInsertedDate" => '2022-01-22 7:36',"txtWaktuTempuh" => '0m',"floatPoint" => '20.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f014e4b7-0edf-40ee-b5de-7ad924c9cbbc',"txtTipe" => 'WALK',"floatData" => '5.41',"dtnInsertedDate" => '2022-01-22 7:51',"txtWaktuTempuh" => '0m',"floatPoint" => '27.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '09.03',"dtnInsertedDate" => '2022-01-22 8:01',"txtWaktuTempuh" => '0m',"floatPoint" => '45.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '82933c78-10fa-44f7-834a-4e0aa3f5977a',"txtTipe" => 'WALK',"floatData" => '3.27',"dtnInsertedDate" => '2022-01-22 8:02',"txtWaktuTempuh" => '0m',"floatPoint" => '16.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'WALK',"floatData" => '6.98',"dtnInsertedDate" => '2022-01-22 8:13',"txtWaktuTempuh" => '0m',"floatPoint" => '34.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '12.1',"dtnInsertedDate" => '2022-01-22 8:24',"txtWaktuTempuh" => '0m',"floatPoint" => '60.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtTipe" => 'WALK',"floatData" => '1.76',"dtnInsertedDate" => '2022-01-22 8:33',"txtWaktuTempuh" => '0m',"floatPoint" => '8.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtTipe" => 'WALK',"floatData" => '6',"dtnInsertedDate" => '2022-01-22 8:34',"txtWaktuTempuh" => '0m',"floatPoint" => '30'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7f0c6b54-fe2b-441d-8fa4-0e3ea99a30ca',"txtTipe" => 'WALK',"floatData" => '4.57',"dtnInsertedDate" => '2022-01-22 8:35',"txtWaktuTempuh" => '0m',"floatPoint" => '22.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtTipe" => 'WALK',"floatData" => '0.58',"dtnInsertedDate" => '2022-01-22 8:35',"txtWaktuTempuh" => '0m',"floatPoint" => '2.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '2.25',"dtnInsertedDate" => '2022-01-22 8:37',"txtWaktuTempuh" => '0m',"floatPoint" => '11.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a13bb533-ce75-473e-881b-5d266e9a5fe3',"txtTipe" => 'WALK',"floatData" => '3.25',"dtnInsertedDate" => '2022-01-22 8:40',"txtWaktuTempuh" => '0m',"floatPoint" => '16.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'WALK',"floatData" => '5.2',"dtnInsertedDate" => '2022-01-22 8:45',"txtWaktuTempuh" => '0m',"floatPoint" => '26'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '55459ad1-7905-4d36-a430-19e906f5b4d8',"txtTipe" => 'WALK',"floatData" => '1.82',"dtnInsertedDate" => '2022-01-22 8:53',"txtWaktuTempuh" => '0m',"floatPoint" => '9.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e291e713-7bd1-466c-90b1-726636c2e318',"txtTipe" => 'WALK',"floatData" => '8.99',"dtnInsertedDate" => '2022-01-22 9:17',"txtWaktuTempuh" => '0m',"floatPoint" => '44.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '10.04',"dtnInsertedDate" => '2022-01-22 9:23',"txtWaktuTempuh" => '0m',"floatPoint" => '50.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '2.41',"dtnInsertedDate" => '2022-01-22 9:34',"txtWaktuTempuh" => '0m',"floatPoint" => '12.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ab426b45-932a-46a3-a6da-954e96b63e21',"txtTipe" => 'WALK',"floatData" => '07.02',"dtnInsertedDate" => '2022-01-22 9:35',"txtWaktuTempuh" => '0m',"floatPoint" => '35.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ab426b45-932a-46a3-a6da-954e96b63e21',"txtTipe" => 'WALK',"floatData" => '2.49',"dtnInsertedDate" => '2022-01-22 9:41',"txtWaktuTempuh" => '0m',"floatPoint" => '12.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '6.15',"dtnInsertedDate" => '2022-01-22 9:43',"txtWaktuTempuh" => '0m',"floatPoint" => '30.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ab426b45-932a-46a3-a6da-954e96b63e21',"txtTipe" => 'WALK',"floatData" => '1.67',"dtnInsertedDate" => '2022-01-22 9:44',"txtWaktuTempuh" => '0m',"floatPoint" => '8.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '5.53',"dtnInsertedDate" => '2022-01-22 9:49',"txtWaktuTempuh" => '0m',"floatPoint" => '27.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '363044a3-50d8-4d5c-a640-f14ac68a6d91',"txtTipe" => 'WALK',"floatData" => '4.83',"dtnInsertedDate" => '2022-01-22 10:13',"txtWaktuTempuh" => '0m',"floatPoint" => '24.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtTipe" => 'WALK',"floatData" => '2.54',"dtnInsertedDate" => '2022-01-22 10:34',"txtWaktuTempuh" => '0m',"floatPoint" => '12.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '74342f82-7f4c-4565-8e2b-1508ef3e53c5',"txtTipe" => 'WALK',"floatData" => '1.17',"dtnInsertedDate" => '2022-01-22 10:39',"txtWaktuTempuh" => '0m',"floatPoint" => '5.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '9',"dtnInsertedDate" => '2022-01-22 10:51',"txtWaktuTempuh" => '0m',"floatPoint" => '45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '1.91',"dtnInsertedDate" => '2022-01-22 11:10',"txtWaktuTempuh" => '0m',"floatPoint" => '9.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'WALK',"floatData" => '01.02',"dtnInsertedDate" => '2022-01-22 11:33',"txtWaktuTempuh" => '0m',"floatPoint" => '5.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c1a6ee1-105a-47dd-8530-6d6cd7a651cd',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-22 11:39',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0eae1b07-a0cf-4085-ad15-7522c12de45b',"txtTipe" => 'WALK',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-22 12:01',"txtWaktuTempuh" => '0m',"floatPoint" => '10.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-22 12:26',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '4.64',"dtnInsertedDate" => '2022-01-22 12:51',"txtWaktuTempuh" => '0m',"floatPoint" => '23.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'WALK',"floatData" => '0.2',"dtnInsertedDate" => '2022-01-22 13:21',"txtWaktuTempuh" => '0m',"floatPoint" => '1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'WALK',"floatData" => '0.52',"dtnInsertedDate" => '2022-01-22 13:22',"txtWaktuTempuh" => '0m',"floatPoint" => '2.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'WALK',"floatData" => '2.79',"dtnInsertedDate" => '2022-01-22 13:26',"txtWaktuTempuh" => '0m',"floatPoint" => '13.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtTipe" => 'WALK',"floatData" => '5.16',"dtnInsertedDate" => '2022-01-22 13:26',"txtWaktuTempuh" => '0m',"floatPoint" => '25.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '8.58',"dtnInsertedDate" => '2022-01-22 13:35',"txtWaktuTempuh" => '0m',"floatPoint" => '42.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'WALK',"floatData" => '0.68',"dtnInsertedDate" => '2022-01-22 13:43',"txtWaktuTempuh" => '0m',"floatPoint" => '3.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '2.45',"dtnInsertedDate" => '2022-01-22 14:40',"txtWaktuTempuh" => '0m',"floatPoint" => '12.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtTipe" => 'WALK',"floatData" => '1.93',"dtnInsertedDate" => '2022-01-22 14:57',"txtWaktuTempuh" => '0m',"floatPoint" => '9.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtTipe" => 'WALK',"floatData" => '02.05',"dtnInsertedDate" => '2022-01-22 15:10',"txtWaktuTempuh" => '0m',"floatPoint" => '10.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9218965d-b1f9-44f2-ab92-7fdb40c69baa',"txtTipe" => 'WALK',"floatData" => '2.68',"dtnInsertedDate" => '2022-01-22 15:47',"txtWaktuTempuh" => '0m',"floatPoint" => '13.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '77f17a41-418b-471c-9354-0cc9d678ee88',"txtTipe" => 'WALK',"floatData" => '2.67',"dtnInsertedDate" => '2022-01-22 16:20',"txtWaktuTempuh" => '0m',"floatPoint" => '13.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtTipe" => 'WALK',"floatData" => '2.97',"dtnInsertedDate" => '2022-01-22 16:23',"txtWaktuTempuh" => '0m',"floatPoint" => '14.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-22 16:28',"txtWaktuTempuh" => '0m',"floatPoint" => '10.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '1.29',"dtnInsertedDate" => '2022-01-22 16:30',"txtWaktuTempuh" => '0m',"floatPoint" => '6.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '2.92',"dtnInsertedDate" => '2022-01-22 16:31',"txtWaktuTempuh" => '0m',"floatPoint" => '14.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtTipe" => 'WALK',"floatData" => '7.22',"dtnInsertedDate" => '2022-01-22 17:11',"txtWaktuTempuh" => '0m',"floatPoint" => '36.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '6.2',"dtnInsertedDate" => '2022-01-22 17:39',"txtWaktuTempuh" => '0m',"floatPoint" => '31'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '2.59',"dtnInsertedDate" => '2022-01-22 17:41',"txtWaktuTempuh" => '0m',"floatPoint" => '12.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '3.15',"dtnInsertedDate" => '2022-01-22 17:42',"txtWaktuTempuh" => '0m',"floatPoint" => '15.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '8.96',"dtnInsertedDate" => '2022-01-22 17:47',"txtWaktuTempuh" => '0m',"floatPoint" => '44.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '06.06',"dtnInsertedDate" => '2022-01-22 18:02',"txtWaktuTempuh" => '0m',"floatPoint" => '30.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '0.77',"dtnInsertedDate" => '2022-01-22 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '3.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '3.33',"dtnInsertedDate" => '2022-01-22 18:11',"txtWaktuTempuh" => '0m',"floatPoint" => '16.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'WALK',"floatData" => '02.01',"dtnInsertedDate" => '2022-01-22 18:25',"txtWaktuTempuh" => '0m',"floatPoint" => '10.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtTipe" => 'WALK',"floatData" => '1.94',"dtnInsertedDate" => '2022-01-22 18:28',"txtWaktuTempuh" => '0m',"floatPoint" => '9.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtTipe" => 'WALK',"floatData" => '4.71',"dtnInsertedDate" => '2022-01-22 18:29',"txtWaktuTempuh" => '0m',"floatPoint" => '23.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-22 18:30',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '5.53',"dtnInsertedDate" => '2022-01-22 18:48',"txtWaktuTempuh" => '0m',"floatPoint" => '27.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'WALK',"floatData" => '0.65',"dtnInsertedDate" => '2022-01-22 18:57',"txtWaktuTempuh" => '0m',"floatPoint" => '3.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '1.14',"dtnInsertedDate" => '2022-01-22 19:07',"txtWaktuTempuh" => '0m',"floatPoint" => '5.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9a71df08-25b4-40b9-95ae-c1f946bf4211',"txtTipe" => 'WALK',"floatData" => '2.32',"dtnInsertedDate" => '2022-01-22 19:08',"txtWaktuTempuh" => '0m',"floatPoint" => '11.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '2.3',"dtnInsertedDate" => '2022-01-22 19:10',"txtWaktuTempuh" => '0m',"floatPoint" => '11.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7c4a32e5-3c11-4fc8-9624-79687bd5a4ed',"txtTipe" => 'WALK',"floatData" => '2.39',"dtnInsertedDate" => '2022-01-22 19:10',"txtWaktuTempuh" => '0m',"floatPoint" => '11.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '11.43',"dtnInsertedDate" => '2022-01-22 19:14',"txtWaktuTempuh" => '0m',"floatPoint" => '57.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '3.11',"dtnInsertedDate" => '2022-01-22 19:15',"txtWaktuTempuh" => '0m',"floatPoint" => '15.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '5.59',"dtnInsertedDate" => '2022-01-22 19:32',"txtWaktuTempuh" => '0m',"floatPoint" => '27.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtTipe" => 'WALK',"floatData" => '8.96',"dtnInsertedDate" => '2022-01-22 19:40',"txtWaktuTempuh" => '0m',"floatPoint" => '44.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '03.01',"dtnInsertedDate" => '2022-01-22 20:17',"txtWaktuTempuh" => '0m',"floatPoint" => '15.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'WALK',"floatData" => '0.63',"dtnInsertedDate" => '2022-01-22 20:25',"txtWaktuTempuh" => '0m',"floatPoint" => '3.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ace9776a-7e6c-4327-b047-0e8daeb2b2c9',"txtTipe" => 'WALK',"floatData" => '3.32',"dtnInsertedDate" => '2022-01-22 20:43',"txtWaktuTempuh" => '0m',"floatPoint" => '16.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c83d2233-eb67-4401-842e-9497f6868bc4',"txtTipe" => 'WALK',"floatData" => '4.17',"dtnInsertedDate" => '2022-01-22 20:47',"txtWaktuTempuh" => '0m',"floatPoint" => '20.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '2.13',"dtnInsertedDate" => '2022-01-22 20:53',"txtWaktuTempuh" => '0m',"floatPoint" => '10.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtTipe" => 'WALK',"floatData" => '02.08',"dtnInsertedDate" => '2022-01-22 20:58',"txtWaktuTempuh" => '0m',"floatPoint" => '10.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d576ed4-c45d-4eb5-8bc2-1205cb547275',"txtTipe" => 'WALK',"floatData" => '0.41',"dtnInsertedDate" => '2022-01-22 21:09',"txtWaktuTempuh" => '0m',"floatPoint" => '02.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1d576ed4-c45d-4eb5-8bc2-1205cb547275',"txtTipe" => 'WALK',"floatData" => '2.6',"dtnInsertedDate" => '2022-01-22 21:16',"txtWaktuTempuh" => '0m',"floatPoint" => '13'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtTipe" => 'WALK',"floatData" => '2.8',"dtnInsertedDate" => '2022-01-22 21:20',"txtWaktuTempuh" => '0m',"floatPoint" => '14'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '231bf7c3-596f-41d9-9cc7-620200720b11',"txtTipe" => 'WALK',"floatData" => '1.4',"dtnInsertedDate" => '2022-01-22 21:22',"txtWaktuTempuh" => '0m',"floatPoint" => '7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '1.53',"dtnInsertedDate" => '2022-01-22 21:38',"txtWaktuTempuh" => '0m',"floatPoint" => '7.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '2.86',"dtnInsertedDate" => '2022-01-22 21:54',"txtWaktuTempuh" => '0m',"floatPoint" => '14.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '52bca872-f194-4463-a408-6172027cc887',"txtTipe" => 'WALK',"floatData" => '2.18',"dtnInsertedDate" => '2022-01-22 22:14',"txtWaktuTempuh" => '0m',"floatPoint" => '10.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'WALK',"floatData" => '4.58',"dtnInsertedDate" => '2022-01-22 22:20',"txtWaktuTempuh" => '0m',"floatPoint" => '22.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e85e266-b27f-47c5-8d75-43ae12aee887',"txtTipe" => 'WALK',"floatData" => '2.44',"dtnInsertedDate" => '2022-01-22 22:21',"txtWaktuTempuh" => '0m',"floatPoint" => '12.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e85e266-b27f-47c5-8d75-43ae12aee887',"txtTipe" => 'WALK',"floatData" => '02.01',"dtnInsertedDate" => '2022-01-22 22:32',"txtWaktuTempuh" => '0m',"floatPoint" => '10.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '0.21',"dtnInsertedDate" => '2022-01-23 3:38',"txtWaktuTempuh" => '0m',"floatPoint" => '01.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '15.05',"dtnInsertedDate" => '2022-01-21 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '75.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '06.03',"dtnInsertedDate" => '2022-01-20 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '30.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '10.03',"dtnInsertedDate" => '2022-01-19 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '50.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'BIKE',"floatData" => '44.15',"dtnInsertedDate" => '2022-01-22 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '73.58'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'BIKE',"floatData" => '46.26',"dtnInsertedDate" => '2022-01-22 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '77.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '10.03',"dtnInsertedDate" => '2022-01-15 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '50.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '05.03',"dtnInsertedDate" => '2022-01-16 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '25.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'BIKE',"floatData" => '34.85',"dtnInsertedDate" => '2022-01-17 22:33',"txtWaktuTempuh" => '0m',"floatPoint" => '58.08'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f4b55927-c1d8-48b4-93c5-d4378a456dbc',"txtTipe" => 'BIKE',"floatData" => '15.99',"dtnInsertedDate" => '2022-01-23 6:59',"txtWaktuTempuh" => '0m',"floatPoint" => '26.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1a3ce817-1bce-43e4-bb2e-ac1973252492',"txtTipe" => 'BIKE',"floatData" => '13.68',"dtnInsertedDate" => '2022-01-23 7:21',"txtWaktuTempuh" => '0m',"floatPoint" => '22.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5712a9b0-4d3f-4453-8119-53d05c029e64',"txtTipe" => 'BIKE',"floatData" => '12.54',"dtnInsertedDate" => '2022-01-23 7:51',"txtWaktuTempuh" => '0m',"floatPoint" => '20.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'BIKE',"floatData" => '7.14',"dtnInsertedDate" => '2022-01-23 8:13',"txtWaktuTempuh" => '0m',"floatPoint" => '11.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '50.1',"dtnInsertedDate" => '2022-01-23 8:25',"txtWaktuTempuh" => '0m',"floatPoint" => '83.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '25c432dd-e9bd-42ac-8415-865f7aac1b4e',"txtTipe" => 'BIKE',"floatData" => '23.14',"dtnInsertedDate" => '2022-01-23 8:36',"txtWaktuTempuh" => '0m',"floatPoint" => '38.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3cfb05ca-8a50-4363-840b-3fc250a1571d',"txtTipe" => 'BIKE',"floatData" => '44.17',"dtnInsertedDate" => '2022-01-23 8:36',"txtWaktuTempuh" => '0m',"floatPoint" => '73.62'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c1a6ee1-105a-47dd-8530-6d6cd7a651cd',"txtTipe" => 'BIKE',"floatData" => '10.8',"dtnInsertedDate" => '2022-01-23 8:53',"txtWaktuTempuh" => '0m',"floatPoint" => '18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'BIKE',"floatData" => '3.83',"dtnInsertedDate" => '2022-01-23 9:08',"txtWaktuTempuh" => '0m',"floatPoint" => '6.38'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '152bd618-ed46-4920-bdeb-73141d8f2db3',"txtTipe" => 'BIKE',"floatData" => '24.48',"dtnInsertedDate" => '2022-01-23 9:09',"txtWaktuTempuh" => '0m',"floatPoint" => '40.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '980d2473-fb24-424a-94f9-bdb5422684f6',"txtTipe" => 'BIKE',"floatData" => '35.62',"dtnInsertedDate" => '2022-01-23 9:20',"txtWaktuTempuh" => '0m',"floatPoint" => '59.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '13.69',"dtnInsertedDate" => '2022-01-23 9:29',"txtWaktuTempuh" => '0m',"floatPoint" => '22.82'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '87e938a8-2e28-4b0a-ba95-5cd251288c99',"txtTipe" => 'BIKE',"floatData" => '20.32',"dtnInsertedDate" => '2022-01-23 9:30',"txtWaktuTempuh" => '0m',"floatPoint" => '33.87'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e9952c10-9e7c-4664-b7bb-0e1a945d0208',"txtTipe" => 'BIKE',"floatData" => '34.41',"dtnInsertedDate" => '2022-01-23 9:47',"txtWaktuTempuh" => '0m',"floatPoint" => '57.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c523d79e-7105-4f26-b830-d0dd8fdb81df',"txtTipe" => 'BIKE',"floatData" => '0.87',"dtnInsertedDate" => '2022-01-23 9:51',"txtWaktuTempuh" => '0m',"floatPoint" => '1.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'BIKE',"floatData" => '20.01',"dtnInsertedDate" => '2022-01-23 9:59',"txtWaktuTempuh" => '0m',"floatPoint" => '33.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ff1f98f7-d493-42de-b20b-277884d01a6c',"txtTipe" => 'BIKE',"floatData" => '30.88',"dtnInsertedDate" => '2022-01-23 10:11',"txtWaktuTempuh" => '0m',"floatPoint" => '51.47'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'BIKE',"floatData" => '31.1',"dtnInsertedDate" => '2022-01-23 10:13',"txtWaktuTempuh" => '0m',"floatPoint" => '51.83'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0a97cb3d-ec2a-41a6-b8d3-6377a110a285',"txtTipe" => 'BIKE',"floatData" => '100.65',"dtnInsertedDate" => '2022-01-23 10:20',"txtWaktuTempuh" => '0m',"floatPoint" => '167.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '57eb3e58-feb0-46c1-a307-628483f476e6',"txtTipe" => 'BIKE',"floatData" => '73.29',"dtnInsertedDate" => '2022-01-23 11:02',"txtWaktuTempuh" => '0m',"floatPoint" => '122.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'BIKE',"floatData" => '15.8',"dtnInsertedDate" => '2022-01-23 11:11',"txtWaktuTempuh" => '0m',"floatPoint" => '26.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3ff0a362-0f58-4c35-b303-2275152aa8ca',"txtTipe" => 'BIKE',"floatData" => '39.4',"dtnInsertedDate" => '2022-01-23 11:42',"txtWaktuTempuh" => '0m',"floatPoint" => '65.67'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '27.3',"dtnInsertedDate" => '2022-01-23 12:27',"txtWaktuTempuh" => '0m',"floatPoint" => '45.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd61a5d5b-e0fc-46c3-a045-db3f19912955',"txtTipe" => 'BIKE',"floatData" => '6.51',"dtnInsertedDate" => '2022-01-23 13:53',"txtWaktuTempuh" => '0m',"floatPoint" => '10.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '17.91',"dtnInsertedDate" => '2022-01-23 14:07',"txtWaktuTempuh" => '0m',"floatPoint" => '29.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c139052b-4387-4975-8975-9a80686b7eb6',"txtTipe" => 'BIKE',"floatData" => '50.36',"dtnInsertedDate" => '2022-01-23 14:33',"txtWaktuTempuh" => '0m',"floatPoint" => '83.93'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef713fc6-5671-4d00-b9bb-f95e760809fc',"txtTipe" => 'BIKE',"floatData" => '09.06',"dtnInsertedDate" => '2022-01-23 15:13',"txtWaktuTempuh" => '0m',"floatPoint" => '15.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8e1f33a9-323d-4417-bfb7-29eb32c85eeb',"txtTipe" => 'BIKE',"floatData" => '43.36',"dtnInsertedDate" => '2022-01-23 15:30',"txtWaktuTempuh" => '0m',"floatPoint" => '72.27'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '290831f3-b868-4983-8ece-b7c98583a375',"txtTipe" => 'BIKE',"floatData" => '40.83',"dtnInsertedDate" => '2022-01-23 17:02',"txtWaktuTempuh" => '0m',"floatPoint" => '68.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1a3ce817-1bce-43e4-bb2e-ac1973252492',"txtTipe" => 'BIKE',"floatData" => '15.07',"dtnInsertedDate" => '2022-01-23 17:07',"txtWaktuTempuh" => '0m',"floatPoint" => '25.12'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28ce75fd-d357-4f8e-b378-543c7605049b',"txtTipe" => 'BIKE',"floatData" => '17.14',"dtnInsertedDate" => '2022-01-23 17:18',"txtWaktuTempuh" => '0m',"floatPoint" => '28.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '7.66',"dtnInsertedDate" => '2022-01-23 17:22',"txtWaktuTempuh" => '0m',"floatPoint" => '12.77'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtTipe" => 'BIKE',"floatData" => '0.71',"dtnInsertedDate" => '2022-01-23 17:31',"txtWaktuTempuh" => '0m',"floatPoint" => '1.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'BIKE',"floatData" => '5.27',"dtnInsertedDate" => '2022-01-23 17:31',"txtWaktuTempuh" => '0m',"floatPoint" => '8.78'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4b838e16-89c8-4c25-a73f-c5b1daff95f3',"txtTipe" => 'BIKE',"floatData" => '11.02',"dtnInsertedDate" => '2022-01-23 17:50',"txtWaktuTempuh" => '0m',"floatPoint" => '18.37'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3db0d18f-4e1d-4238-8ac1-8e4718e7676d',"txtTipe" => 'BIKE',"floatData" => '97.1',"dtnInsertedDate" => '2022-01-23 17:59',"txtWaktuTempuh" => '0m',"floatPoint" => '161.83'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e5d4f4e8-3158-4c63-889a-c476b26f399c',"txtTipe" => 'BIKE',"floatData" => '10.61',"dtnInsertedDate" => '2022-01-23 18:05',"txtWaktuTempuh" => '0m',"floatPoint" => '17.68'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fba1da50-f41c-43a2-8ff4-75e269b29a38',"txtTipe" => 'BIKE',"floatData" => '8.74',"dtnInsertedDate" => '2022-01-23 18:05',"txtWaktuTempuh" => '0m',"floatPoint" => '14.57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '88a73989-e0df-4e0e-8274-6995cb1f964d',"txtTipe" => 'BIKE',"floatData" => '22.92',"dtnInsertedDate" => '2022-01-23 18:22',"txtWaktuTempuh" => '0m',"floatPoint" => '38.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2dd5d7c6-d7cf-419c-9e80-1b6bd4690d52',"txtTipe" => 'BIKE',"floatData" => '5.33',"dtnInsertedDate" => '2022-01-23 18:53',"txtWaktuTempuh" => '0m',"floatPoint" => '8.88'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'BIKE',"floatData" => '14.82',"dtnInsertedDate" => '2022-01-23 18:55',"txtWaktuTempuh" => '0m',"floatPoint" => '24.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ed7038f-d0cc-4a8e-8e22-089db824345f',"txtTipe" => 'BIKE',"floatData" => '9.49',"dtnInsertedDate" => '2022-01-23 20:38',"txtWaktuTempuh" => '0m',"floatPoint" => '15.82'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ca0c0424-be94-4e9f-ac62-c6225112fef4',"txtTipe" => 'BIKE',"floatData" => '11',"dtnInsertedDate" => '2022-01-23 21:12',"txtWaktuTempuh" => '0m',"floatPoint" => '18.33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'BIKE',"floatData" => '7.18',"dtnInsertedDate" => '2022-01-23 21:13',"txtWaktuTempuh" => '0m',"floatPoint" => '11.97'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e0957270-ad59-4073-b2bf-d3aebfdd10ff',"txtTipe" => 'RUN',"floatData" => '4.19',"dtnInsertedDate" => '2022-01-23 7:23',"txtWaktuTempuh" => '0m',"floatPoint" => '20.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'RUN',"floatData" => '6.76',"dtnInsertedDate" => '2022-01-23 7:24',"txtWaktuTempuh" => '0m',"floatPoint" => '33.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '7.54',"dtnInsertedDate" => '2022-01-23 8:13',"txtWaktuTempuh" => '0m',"floatPoint" => '37.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef713fc6-5671-4d00-b9bb-f95e760809fc',"txtTipe" => 'RUN',"floatData" => '2.76',"dtnInsertedDate" => '2022-01-23 8:49',"txtWaktuTempuh" => '0m',"floatPoint" => '13.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtTipe" => 'RUN',"floatData" => '7.35',"dtnInsertedDate" => '2022-01-23 9:56',"txtWaktuTempuh" => '0m',"floatPoint" => '36.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '10.25',"dtnInsertedDate" => '2022-01-23 10:39',"txtWaktuTempuh" => '0m',"floatPoint" => '51.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '18.28',"dtnInsertedDate" => '2022-01-23 12:17',"txtWaktuTempuh" => '0m',"floatPoint" => '91.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '75b6803b-110a-493b-9af7-58585e2282a2',"txtTipe" => 'RUN',"floatData" => '22.65',"dtnInsertedDate" => '2022-01-23 15:11',"txtWaktuTempuh" => '0m',"floatPoint" => '113.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'RUN',"floatData" => '4',"dtnInsertedDate" => '2022-01-23 16:33',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a3f2ac9-3910-498c-b4a1-367e2297c161',"txtTipe" => 'RUN',"floatData" => '5.39',"dtnInsertedDate" => '2022-01-23 16:40',"txtWaktuTempuh" => '0m',"floatPoint" => '26.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'RUN',"floatData" => '04.01',"dtnInsertedDate" => '2022-01-23 17:12',"txtWaktuTempuh" => '0m',"floatPoint" => '20.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f66292cc-809c-491a-974e-69d9cbd61bc9',"txtTipe" => 'RUN',"floatData" => '3.25',"dtnInsertedDate" => '2022-01-23 17:26',"txtWaktuTempuh" => '0m',"floatPoint" => '16.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'RUN',"floatData" => '3.48',"dtnInsertedDate" => '2022-01-23 18:09',"txtWaktuTempuh" => '0m',"floatPoint" => '17.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '12.67',"dtnInsertedDate" => '2022-01-23 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '63.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '04.06',"dtnInsertedDate" => '2022-01-23 18:18',"txtWaktuTempuh" => '0m',"floatPoint" => '20.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'RUN',"floatData" => '10.24',"dtnInsertedDate" => '2022-01-23 18:37',"txtWaktuTempuh" => '0m',"floatPoint" => '51.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtTipe" => 'RUN',"floatData" => '10.68',"dtnInsertedDate" => '2022-01-23 19:00',"txtWaktuTempuh" => '0m',"floatPoint" => '53.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6dac08d-0ca1-4d07-919a-cdf2e9367da0',"txtTipe" => 'RUN',"floatData" => '2.93',"dtnInsertedDate" => '2022-01-23 19:02',"txtWaktuTempuh" => '0m',"floatPoint" => '14.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '56d00634-3fc0-44b3-b33f-67340fc9590a',"txtTipe" => 'RUN',"floatData" => '7.24',"dtnInsertedDate" => '2022-01-23 19:35',"txtWaktuTempuh" => '0m',"floatPoint" => '36.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'RUN',"floatData" => '02.09',"dtnInsertedDate" => '2022-01-23 19:45',"txtWaktuTempuh" => '0m',"floatPoint" => '10.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9eed4a56-17ca-4b64-8e75-fffec1a4b0ae',"txtTipe" => 'RUN',"floatData" => '3.43',"dtnInsertedDate" => '2022-01-23 19:45',"txtWaktuTempuh" => '0m',"floatPoint" => '17.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1946b7ac-df23-4898-9987-567a1fd960e3',"txtTipe" => 'RUN',"floatData" => '5.52',"dtnInsertedDate" => '2022-01-23 20:10',"txtWaktuTempuh" => '0m',"floatPoint" => '27.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'baa20c57-1a19-4e80-8178-ffb3ffc3fce7',"txtTipe" => 'RUN',"floatData" => '10.36',"dtnInsertedDate" => '2022-01-23 20:55',"txtWaktuTempuh" => '0m',"floatPoint" => '51.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'acd10c48-67ec-4902-8813-ebc3732163c0',"txtTipe" => 'RUN',"floatData" => '2.47',"dtnInsertedDate" => '2022-01-23 21:21',"txtWaktuTempuh" => '0m',"floatPoint" => '12.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '3.2',"dtnInsertedDate" => '2022-01-22 23:36',"txtWaktuTempuh" => '0m',"floatPoint" => '16'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '1.7',"dtnInsertedDate" => '2022-01-23 6:02',"txtWaktuTempuh" => '0m',"floatPoint" => '8.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ce30ec59-5e2a-4a16-abc9-f2e423be4f0b',"txtTipe" => 'WALK',"floatData" => '3.46',"dtnInsertedDate" => '2022-01-23 6:45',"txtWaktuTempuh" => '0m',"floatPoint" => '17.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '1.35',"dtnInsertedDate" => '2022-01-23 6:51',"txtWaktuTempuh" => '0m',"floatPoint" => '6.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '4.6',"dtnInsertedDate" => '2022-01-23 7:06',"txtWaktuTempuh" => '0m',"floatPoint" => '23'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '12854948-71c0-4c94-85c4-5adac86dbbe2',"txtTipe" => 'WALK',"floatData" => '4.16',"dtnInsertedDate" => '2022-01-23 7:36',"txtWaktuTempuh" => '0m',"floatPoint" => '20.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ea224d9-1bfa-4055-876c-ab08c8974123',"txtTipe" => 'WALK',"floatData" => '3.36',"dtnInsertedDate" => '2022-01-23 7:51',"txtWaktuTempuh" => '0m',"floatPoint" => '16.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f603ca4-a3c6-4b7f-9007-65eb8310f9ed',"txtTipe" => 'WALK',"floatData" => '3.5',"dtnInsertedDate" => '2022-01-23 7:55',"txtWaktuTempuh" => '0m',"floatPoint" => '17.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '7.79',"dtnInsertedDate" => '2022-01-23 7:56',"txtWaktuTempuh" => '0m',"floatPoint" => '38.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '3.1',"dtnInsertedDate" => '2022-01-23 7:57',"txtWaktuTempuh" => '0m',"floatPoint" => '15.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15650235-5ea3-4d7b-b91f-7aea5b8d3d51',"txtTipe" => 'WALK',"floatData" => '5',"dtnInsertedDate" => '2022-01-23 8:00',"txtWaktuTempuh" => '0m',"floatPoint" => '25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '79383608-fbcb-48f3-8c67-836eae9a0807',"txtTipe" => 'WALK',"floatData" => '08.04',"dtnInsertedDate" => '2022-01-23 8:22',"txtWaktuTempuh" => '0m',"floatPoint" => '40.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4156ccbe-b8f8-4e91-823e-b9bee2ab11c6',"txtTipe" => 'WALK',"floatData" => '03.01',"dtnInsertedDate" => '2022-01-23 8:28',"txtWaktuTempuh" => '0m',"floatPoint" => '15.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '10.13',"dtnInsertedDate" => '2022-01-23 8:31',"txtWaktuTempuh" => '0m',"floatPoint" => '50.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '3.53',"dtnInsertedDate" => '2022-01-23 8:35',"txtWaktuTempuh" => '0m',"floatPoint" => '17.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '8.16',"dtnInsertedDate" => '2022-01-23 8:39',"txtWaktuTempuh" => '0m',"floatPoint" => '40.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '13',"dtnInsertedDate" => '2022-01-23 8:41',"txtWaktuTempuh" => '0m',"floatPoint" => '65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7c4a32e5-3c11-4fc8-9624-79687bd5a4ed',"txtTipe" => 'WALK',"floatData" => '06.02',"dtnInsertedDate" => '2022-01-23 8:44',"txtWaktuTempuh" => '0m',"floatPoint" => '30.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '54d52aab-3b94-4a6d-8fb4-34c5a6e596bc',"txtTipe" => 'WALK',"floatData" => '6.35',"dtnInsertedDate" => '2022-01-23 8:50',"txtWaktuTempuh" => '0m',"floatPoint" => '31.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '3.86',"dtnInsertedDate" => '2022-01-23 8:50',"txtWaktuTempuh" => '0m',"floatPoint" => '19.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '064eba4d-9244-4a03-8298-45d0296bc60a',"txtTipe" => 'WALK',"floatData" => '01.01',"dtnInsertedDate" => '2022-01-23 8:58',"txtWaktuTempuh" => '0m',"floatPoint" => '05.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'WALK',"floatData" => '06.02',"dtnInsertedDate" => '2022-01-23 9:08',"txtWaktuTempuh" => '0m',"floatPoint" => '30.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '1.93',"dtnInsertedDate" => '2022-01-23 9:11',"txtWaktuTempuh" => '0m',"floatPoint" => '9.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '03.03',"dtnInsertedDate" => '2022-01-23 9:12',"txtWaktuTempuh" => '0m',"floatPoint" => '15.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '3.63',"dtnInsertedDate" => '2022-01-23 9:15',"txtWaktuTempuh" => '0m',"floatPoint" => '18.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e291e713-7bd1-466c-90b1-726636c2e318',"txtTipe" => 'WALK',"floatData" => '4.8',"dtnInsertedDate" => '2022-01-23 9:16',"txtWaktuTempuh" => '0m',"floatPoint" => '24'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '118a8f71-6f20-464c-b6fc-e049fe8e0a5f',"txtTipe" => 'WALK',"floatData" => '5.44',"dtnInsertedDate" => '2022-01-23 9:17',"txtWaktuTempuh" => '0m',"floatPoint" => '27.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '20.22',"dtnInsertedDate" => '2022-01-23 9:18',"txtWaktuTempuh" => '0m',"floatPoint" => '101.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eb9fa5ee-5b96-4eaf-8b50-fc80b2deb511',"txtTipe" => 'WALK',"floatData" => '5.81',"dtnInsertedDate" => '2022-01-23 9:19',"txtWaktuTempuh" => '0m',"floatPoint" => '29.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ea224d9-1bfa-4055-876c-ab08c8974123',"txtTipe" => 'WALK',"floatData" => '0.69',"dtnInsertedDate" => '2022-01-23 9:27',"txtWaktuTempuh" => '0m',"floatPoint" => '3.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '09.08',"dtnInsertedDate" => '2022-01-23 9:34',"txtWaktuTempuh" => '0m',"floatPoint" => '45.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2f447ce7-516f-43bc-83da-ea2c01389b91',"txtTipe" => 'WALK',"floatData" => '04.07',"dtnInsertedDate" => '2022-01-23 9:44',"txtWaktuTempuh" => '0m',"floatPoint" => '20.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ad7cd7c-a209-449b-a24b-a4f1131dc15e',"txtTipe" => 'WALK',"floatData" => '08.06',"dtnInsertedDate" => '2022-01-23 9:58',"txtWaktuTempuh" => '0m',"floatPoint" => '40.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb1111fa-b1d8-49f2-8d39-c2dd1899e37c',"txtTipe" => 'WALK',"floatData" => '10.15',"dtnInsertedDate" => '2022-01-23 10:00',"txtWaktuTempuh" => '0m',"floatPoint" => '50.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9be51928-2d3c-4d0f-acd2-ae215258518f',"txtTipe" => 'WALK',"floatData" => '2.2',"dtnInsertedDate" => '2022-01-23 10:04',"txtWaktuTempuh" => '0m',"floatPoint" => '11'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '508a0da2-a4b7-4cae-95f1-433e066323d3',"txtTipe" => 'WALK',"floatData" => '11.01',"dtnInsertedDate" => '2022-01-23 10:16',"txtWaktuTempuh" => '0m',"floatPoint" => '55.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'WALK',"floatData" => '4.62',"dtnInsertedDate" => '2022-01-23 10:27',"txtWaktuTempuh" => '0m',"floatPoint" => '23.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '5.21',"dtnInsertedDate" => '2022-01-23 11:15',"txtWaktuTempuh" => '0m',"floatPoint" => '26.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '6.64',"dtnInsertedDate" => '2022-01-23 11:33',"txtWaktuTempuh" => '0m',"floatPoint" => '33.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '252d1792-6aa9-4ad5-91c5-3a5803057f7e',"txtTipe" => 'WALK',"floatData" => '2.47',"dtnInsertedDate" => '2022-01-23 11:48',"txtWaktuTempuh" => '0m',"floatPoint" => '12.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtTipe" => 'WALK',"floatData" => '1.98',"dtnInsertedDate" => '2022-01-23 12:01',"txtWaktuTempuh" => '0m',"floatPoint" => '9.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '12.36',"dtnInsertedDate" => '2022-01-23 12:07',"txtWaktuTempuh" => '0m',"floatPoint" => '61.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '4.76',"dtnInsertedDate" => '2022-01-23 12:36',"txtWaktuTempuh" => '0m',"floatPoint" => '23.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b16a2763-e5c5-4380-9720-76b6f88826f8',"txtTipe" => 'WALK',"floatData" => '0.76',"dtnInsertedDate" => '2022-01-23 12:38',"txtWaktuTempuh" => '0m',"floatPoint" => '3.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtTipe" => 'WALK',"floatData" => '1.34',"dtnInsertedDate" => '2022-01-23 12:58',"txtWaktuTempuh" => '0m',"floatPoint" => '6.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '10.6',"dtnInsertedDate" => '2022-01-23 14:01',"txtWaktuTempuh" => '0m',"floatPoint" => '53'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b591a5bf-3b9d-4760-ac33-06668ba90567',"txtTipe" => 'WALK',"floatData" => '6.92',"dtnInsertedDate" => '2022-01-23 14:19',"txtWaktuTempuh" => '0m',"floatPoint" => '34.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '5.46',"dtnInsertedDate" => '2022-01-23 15:00',"txtWaktuTempuh" => '0m',"floatPoint" => '27.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '748fd754-e989-499e-8085-0a33bd3e5094',"txtTipe" => 'WALK',"floatData" => '1.17',"dtnInsertedDate" => '2022-01-23 15:29',"txtWaktuTempuh" => '0m',"floatPoint" => '5.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'WALK',"floatData" => '1',"dtnInsertedDate" => '2022-01-23 15:48',"txtWaktuTempuh" => '0m',"floatPoint" => '5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd27d886a-9067-4db0-a5ed-327c06e39a7b',"txtTipe" => 'WALK',"floatData" => '4.42',"dtnInsertedDate" => '2022-01-23 15:56',"txtWaktuTempuh" => '0m',"floatPoint" => '22.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '249c03d9-8685-46db-ba1a-4736dd19f2bf',"txtTipe" => 'WALK',"floatData" => '4.5',"dtnInsertedDate" => '2022-01-23 16:39',"txtWaktuTempuh" => '0m',"floatPoint" => '22.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e0ba032-8e92-4bf0-a558-031cec124fab',"txtTipe" => 'WALK',"floatData" => '0.97',"dtnInsertedDate" => '2022-01-23 17:09',"txtWaktuTempuh" => '0m',"floatPoint" => '4.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '0.87',"dtnInsertedDate" => '2022-01-23 17:29',"txtWaktuTempuh" => '0m',"floatPoint" => '4.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '826bde79-b964-4c2f-9171-817800026c19',"txtTipe" => 'WALK',"floatData" => '1.21',"dtnInsertedDate" => '2022-01-23 17:29',"txtWaktuTempuh" => '0m',"floatPoint" => '06.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1867e935-0a50-4ce5-948e-6abae6e2956d',"txtTipe" => 'WALK',"floatData" => '0.97',"dtnInsertedDate" => '2022-01-23 17:30',"txtWaktuTempuh" => '0m',"floatPoint" => '4.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtTipe" => 'WALK',"floatData" => '16.24',"dtnInsertedDate" => '2022-01-23 17:31',"txtWaktuTempuh" => '0m',"floatPoint" => '81.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4a646b2d-3a6d-46df-85a4-6f4ad3946ee0',"txtTipe" => 'WALK',"floatData" => '1.15',"dtnInsertedDate" => '2022-01-23 17:32',"txtWaktuTempuh" => '0m',"floatPoint" => '5.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a13bb533-ce75-473e-881b-5d266e9a5fe3',"txtTipe" => 'WALK',"floatData" => '3.89',"dtnInsertedDate" => '2022-01-23 17:47',"txtWaktuTempuh" => '0m',"floatPoint" => '19.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fba1da50-f41c-43a2-8ff4-75e269b29a38',"txtTipe" => 'WALK',"floatData" => '2.33',"dtnInsertedDate" => '2022-01-23 17:55',"txtWaktuTempuh" => '0m',"floatPoint" => '11.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '2c65bdf8-7b21-4b16-9e9c-3ee665d3b6c7',"txtTipe" => 'WALK',"floatData" => '3.1',"dtnInsertedDate" => '2022-01-23 17:55',"txtWaktuTempuh" => '0m',"floatPoint" => '15.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8b2436c5-2a91-41a8-9906-27ebef1eb584',"txtTipe" => 'WALK',"floatData" => '1.81',"dtnInsertedDate" => '2022-01-23 17:59',"txtWaktuTempuh" => '0m',"floatPoint" => '09.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'WALK',"floatData" => '1.96',"dtnInsertedDate" => '2022-01-23 18:06',"txtWaktuTempuh" => '0m',"floatPoint" => '9.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '3.31',"dtnInsertedDate" => '2022-01-23 18:07',"txtWaktuTempuh" => '0m',"floatPoint" => '16.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtTipe" => 'WALK',"floatData" => '05.09',"dtnInsertedDate" => '2022-01-23 18:08',"txtWaktuTempuh" => '0m',"floatPoint" => '25.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '17b28196-575c-4e26-af40-9c069a668de8',"txtTipe" => 'WALK',"floatData" => '6.77',"dtnInsertedDate" => '2022-01-23 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '33.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'WALK',"floatData" => '0.95',"dtnInsertedDate" => '2022-01-23 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '4.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-23 18:10',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5c7626db-cef0-44c8-a47b-4a657bb428c3',"txtTipe" => 'WALK',"floatData" => '6',"dtnInsertedDate" => '2022-01-23 18:11',"txtWaktuTempuh" => '0m',"floatPoint" => '30'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '78bec2cc-b066-472d-804b-b6c10c86ca1f',"txtTipe" => 'WALK',"floatData" => '6.2',"dtnInsertedDate" => '2022-01-23 18:11',"txtWaktuTempuh" => '0m',"floatPoint" => '31'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f0fc565-8598-45bd-85f9-8cbffc3909db',"txtTipe" => 'WALK',"floatData" => '6.6',"dtnInsertedDate" => '2022-01-23 18:11',"txtWaktuTempuh" => '0m',"floatPoint" => '33'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '6.11',"dtnInsertedDate" => '2022-01-23 18:12',"txtWaktuTempuh" => '0m',"floatPoint" => '30.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '628a2fbb-2c99-4ea0-9dc6-38f4d0da7e2a',"txtTipe" => 'WALK',"floatData" => '6.65',"dtnInsertedDate" => '2022-01-23 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '33.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3d21c6ba-5dbf-46fc-b044-1ce0840294d1',"txtTipe" => 'WALK',"floatData" => '03.06',"dtnInsertedDate" => '2022-01-23 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '15.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '6.31',"dtnInsertedDate" => '2022-01-23 18:21',"txtWaktuTempuh" => '0m',"floatPoint" => '31.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9218965d-b1f9-44f2-ab92-7fdb40c69baa',"txtTipe" => 'WALK',"floatData" => '1.3',"dtnInsertedDate" => '2022-01-23 18:23',"txtWaktuTempuh" => '0m',"floatPoint" => '6.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '4.35',"dtnInsertedDate" => '2022-01-23 18:42',"txtWaktuTempuh" => '0m',"floatPoint" => '21.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '80bea673-b3ec-4b89-8a58-2c29aa5c832d',"txtTipe" => 'WALK',"floatData" => '05.09',"dtnInsertedDate" => '2022-01-23 18:47',"txtWaktuTempuh" => '0m',"floatPoint" => '25.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '4.21',"dtnInsertedDate" => '2022-01-23 18:54',"txtWaktuTempuh" => '0m',"floatPoint" => '21.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c1ce7c66-cde5-4a9f-a282-c8912367ddd3',"txtTipe" => 'WALK',"floatData" => '7.17',"dtnInsertedDate" => '2022-01-23 19:00',"txtWaktuTempuh" => '0m',"floatPoint" => '35.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '6',"dtnInsertedDate" => '2022-01-23 19:24',"txtWaktuTempuh" => '0m',"floatPoint" => '30'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'de73e047-4b8a-4c92-ac60-b7ba42cec89d',"txtTipe" => 'WALK',"floatData" => '2.16',"dtnInsertedDate" => '2022-01-23 19:32',"txtWaktuTempuh" => '0m',"floatPoint" => '10.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9eed4a56-17ca-4b64-8e75-fffec1a4b0ae',"txtTipe" => 'WALK',"floatData" => '2.54',"dtnInsertedDate" => '2022-01-23 19:41',"txtWaktuTempuh" => '0m',"floatPoint" => '12.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '11.4',"dtnInsertedDate" => '2022-01-23 19:42',"txtWaktuTempuh" => '0m',"floatPoint" => '57'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'WALK',"floatData" => '10',"dtnInsertedDate" => '2022-01-23 19:58',"txtWaktuTempuh" => '0m',"floatPoint" => '50'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '3.69',"dtnInsertedDate" => '2022-01-23 20:09',"txtWaktuTempuh" => '0m',"floatPoint" => '18.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'WALK',"floatData" => '1.23',"dtnInsertedDate" => '2022-01-23 20:13',"txtWaktuTempuh" => '0m',"floatPoint" => '6.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cfbce76-12d1-49a1-bf59-25ac856c65ad',"txtTipe" => 'WALK',"floatData" => '02.01',"dtnInsertedDate" => '2022-01-23 20:14',"txtWaktuTempuh" => '0m',"floatPoint" => '10.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '5.54',"dtnInsertedDate" => '2022-01-23 20:24',"txtWaktuTempuh" => '0m',"floatPoint" => '27.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '10.47',"dtnInsertedDate" => '2022-01-23 20:29',"txtWaktuTempuh" => '0m',"floatPoint" => '52.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '32d19ece-3001-4541-9217-b19eedc1b11e',"txtTipe" => 'WALK',"floatData" => '2.45',"dtnInsertedDate" => '2022-01-23 20:58',"txtWaktuTempuh" => '0m',"floatPoint" => '12.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9a71df08-25b4-40b9-95ae-c1f946bf4211',"txtTipe" => 'WALK',"floatData" => '2.45',"dtnInsertedDate" => '2022-01-23 21:11',"txtWaktuTempuh" => '0m',"floatPoint" => '12.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '363044a3-50d8-4d5c-a640-f14ac68a6d91',"txtTipe" => 'WALK',"floatData" => '5.84',"dtnInsertedDate" => '2022-01-23 21:50',"txtWaktuTempuh" => '0m',"floatPoint" => '29.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4c9a786d-1e72-41f6-aaa6-771ea1bf4563',"txtTipe" => 'BIKE',"floatData" => '07.01',"dtnInsertedDate" => '2022-01-24 5:56',"txtWaktuTempuh" => '0m',"floatPoint" => '11.68'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b8aab3a8-5eff-4193-9355-a4086fda846e',"txtTipe" => 'BIKE',"floatData" => '4.78',"dtnInsertedDate" => '2022-01-24 6:44',"txtWaktuTempuh" => '0m',"floatPoint" => '7.97'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ee37767-f769-4a8e-a8c8-14bbfc40a8d2',"txtTipe" => 'BIKE',"floatData" => '23.13',"dtnInsertedDate" => '2022-01-24 7:11',"txtWaktuTempuh" => '0m',"floatPoint" => '38.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'BIKE',"floatData" => '4.16',"dtnInsertedDate" => '2022-01-24 7:27',"txtWaktuTempuh" => '0m',"floatPoint" => '6.93'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'BIKE',"floatData" => '11.99',"dtnInsertedDate" => '2022-01-24 7:45',"txtWaktuTempuh" => '0m',"floatPoint" => '19.98'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'BIKE',"floatData" => '19.24',"dtnInsertedDate" => '2022-01-24 8:17',"txtWaktuTempuh" => '0m',"floatPoint" => '32.07'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3413cfb3-c2f5-4c68-bc6f-1a61aff8d57d',"txtTipe" => 'BIKE',"floatData" => '0.86',"dtnInsertedDate" => '2022-01-24 8:18',"txtWaktuTempuh" => '0m',"floatPoint" => '1.43'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'BIKE',"floatData" => '15.05',"dtnInsertedDate" => '2022-01-24 8:35',"txtWaktuTempuh" => '0m',"floatPoint" => '25.08'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28ce75fd-d357-4f8e-b378-543c7605049b',"txtTipe" => 'BIKE',"floatData" => '21.36',"dtnInsertedDate" => '2022-01-24 8:47',"txtWaktuTempuh" => '0m',"floatPoint" => '35.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4f3a74db-4abe-431b-addc-ec0f1ddd397a',"txtTipe" => 'BIKE',"floatData" => '14.46',"dtnInsertedDate" => '2022-01-24 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '24.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b47bd4c6-6583-429b-9d36-0fb51f5efebd',"txtTipe" => 'BIKE',"floatData" => '9.13',"dtnInsertedDate" => '2022-01-24 18:49',"txtWaktuTempuh" => '0m',"floatPoint" => '15.22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f0b28b28-ed8c-4009-9e26-bfaa37c5269e',"txtTipe" => 'BIKE',"floatData" => '4.81',"dtnInsertedDate" => '2022-01-24 18:52',"txtWaktuTempuh" => '0m',"floatPoint" => '08.02'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e3a4ad99-5223-489b-93da-99ddb22cc348',"txtTipe" => 'BIKE',"floatData" => '4.31',"dtnInsertedDate" => '2022-01-24 18:55',"txtWaktuTempuh" => '0m',"floatPoint" => '7.18'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6eafcf47-e10f-47b8-82c0-62527ca3509a',"txtTipe" => 'BIKE',"floatData" => '12.29',"dtnInsertedDate" => '2022-01-24 20:15',"txtWaktuTempuh" => '0m',"floatPoint" => '20.48'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.23',"dtnInsertedDate" => '2022-01-24 20:21',"txtWaktuTempuh" => '0m',"floatPoint" => '02.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'BIKE',"floatData" => '1.3',"dtnInsertedDate" => '2022-01-24 20:22',"txtWaktuTempuh" => '0m',"floatPoint" => '2.17'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3db0d18f-4e1d-4238-8ac1-8e4718e7676d',"txtTipe" => 'BIKE',"floatData" => '5.67',"dtnInsertedDate" => '2022-01-24 20:43',"txtWaktuTempuh" => '0m',"floatPoint" => '9.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0d450962-a4e6-4b2a-b04d-2f4733a4325f',"txtTipe" => 'RUN',"floatData" => '9.82',"dtnInsertedDate" => '2022-01-23 23:46',"txtWaktuTempuh" => '0m',"floatPoint" => '49.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4ca17b73-78c0-4f14-8a81-eee08471aee4',"txtTipe" => 'RUN',"floatData" => '10.3',"dtnInsertedDate" => '2022-01-24 1:10',"txtWaktuTempuh" => '0m',"floatPoint" => '51.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '15c423cc-574a-4149-958e-78b78bfbe15b',"txtTipe" => 'RUN',"floatData" => '3.28',"dtnInsertedDate" => '2022-01-24 5:52',"txtWaktuTempuh" => '0m',"floatPoint" => '16.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '05.05',"dtnInsertedDate" => '2022-01-24 6:56',"txtWaktuTempuh" => '0m',"floatPoint" => '25.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '5.56',"dtnInsertedDate" => '2022-01-24 8:22',"txtWaktuTempuh" => '0m',"floatPoint" => '27.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '12.21',"dtnInsertedDate" => '2022-01-24 8:31',"txtWaktuTempuh" => '0m',"floatPoint" => '61.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'RUN',"floatData" => '3.21',"dtnInsertedDate" => '2022-01-24 9:21',"txtWaktuTempuh" => '0m',"floatPoint" => '16.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ef3580db-8027-459a-867c-08410456d663',"txtTipe" => 'RUN',"floatData" => '1.8',"dtnInsertedDate" => '2022-01-24 9:23',"txtWaktuTempuh" => '0m',"floatPoint" => '9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'acd10c48-67ec-4902-8813-ebc3732163c0',"txtTipe" => 'RUN',"floatData" => '2.63',"dtnInsertedDate" => '2022-01-24 11:25',"txtWaktuTempuh" => '0m',"floatPoint" => '13.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'e8734996-e56e-41c3-8a00-d5c7e0d6269d',"txtTipe" => 'RUN',"floatData" => '5',"dtnInsertedDate" => '2022-01-24 16:39',"txtWaktuTempuh" => '0m',"floatPoint" => '25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '392860e6-2880-4fb6-824b-40bd5019eb2e',"txtTipe" => 'RUN',"floatData" => '04.02',"dtnInsertedDate" => '2022-01-24 17:45',"txtWaktuTempuh" => '0m',"floatPoint" => '20.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '0.66',"dtnInsertedDate" => '2022-01-24 18:00',"txtWaktuTempuh" => '0m',"floatPoint" => '3.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '27c7a192-b0fd-4d7b-b2d0-83f7a8a26421',"txtTipe" => 'RUN',"floatData" => '0.5',"dtnInsertedDate" => '2022-01-24 18:01',"txtWaktuTempuh" => '0m',"floatPoint" => '2.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '739f2d67-44de-4a43-8d9c-d6f3ca84d944',"txtTipe" => 'RUN',"floatData" => '05.03',"dtnInsertedDate" => '2022-01-24 18:28',"txtWaktuTempuh" => '0m',"floatPoint" => '25.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'f3b8dbbf-2780-4e83-ae6b-0296f610702c',"txtTipe" => 'RUN',"floatData" => '5.39',"dtnInsertedDate" => '2022-01-24 18:53',"txtWaktuTempuh" => '0m',"floatPoint" => '26.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5003dfd4-7001-4215-a4d1-857a40d07ce4',"txtTipe" => 'RUN',"floatData" => '2.31',"dtnInsertedDate" => '2022-01-24 18:55',"txtWaktuTempuh" => '0m',"floatPoint" => '11.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83ee860a-fd11-46a4-b51e-3b2cf9c0f2bf',"txtTipe" => 'RUN',"floatData" => '3.35',"dtnInsertedDate" => '2022-01-24 19:29',"txtWaktuTempuh" => '0m',"floatPoint" => '16.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b9aeef0e-80ea-48bf-97dd-5284b9854712',"txtTipe" => 'RUN',"floatData" => '4.63',"dtnInsertedDate" => '2022-01-24 19:36',"txtWaktuTempuh" => '0m',"floatPoint" => '23.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd0e21d4c-5fd2-4910-8ba0-539d03442d60',"txtTipe" => 'RUN',"floatData" => '10.35',"dtnInsertedDate" => '2022-01-24 19:48',"txtWaktuTempuh" => '0m',"floatPoint" => '51.75'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1946b7ac-df23-4898-9987-567a1fd960e3',"txtTipe" => 'RUN',"floatData" => '7.42',"dtnInsertedDate" => '2022-01-24 20:22',"txtWaktuTempuh" => '0m',"floatPoint" => '37.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '83d174e6-1df7-4d91-930d-0bb5ac368540',"txtTipe" => 'RUN',"floatData" => '02.05',"dtnInsertedDate" => '2022-01-24 20:44',"txtWaktuTempuh" => '0m',"floatPoint" => '10.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '39014266-21f8-428a-9752-331dd8ade0bd',"txtTipe" => 'RUN',"floatData" => '1.42',"dtnInsertedDate" => '2022-01-24 20:45',"txtWaktuTempuh" => '0m',"floatPoint" => '7.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5a39723d-743f-4adb-aa88-e1756e4501b8',"txtTipe" => 'WALK',"floatData" => '05.03',"dtnInsertedDate" => '2022-01-24 6:22',"txtWaktuTempuh" => '0m',"floatPoint" => '25.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9218965d-b1f9-44f2-ab92-7fdb40c69baa',"txtTipe" => 'WALK',"floatData" => '1.14',"dtnInsertedDate" => '2022-01-24 6:24',"txtWaktuTempuh" => '0m',"floatPoint" => '5.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '5.14',"dtnInsertedDate" => '2022-01-24 6:49',"txtWaktuTempuh" => '0m',"floatPoint" => '25.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtTipe" => 'WALK',"floatData" => '1.72',"dtnInsertedDate" => '2022-01-24 6:50',"txtWaktuTempuh" => '0m',"floatPoint" => '8.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9cb756ae-8c6d-458c-8ef2-7756ce645788',"txtTipe" => 'WALK',"floatData" => '4.88',"dtnInsertedDate" => '2022-01-24 6:51',"txtWaktuTempuh" => '0m',"floatPoint" => '24.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '28b6284b-2bde-4ab7-8db9-74f1c3748d39',"txtTipe" => 'WALK',"floatData" => '02.08',"dtnInsertedDate" => '2022-01-24 6:53',"txtWaktuTempuh" => '0m',"floatPoint" => '10.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '05.09',"dtnInsertedDate" => '2022-01-24 6:53',"txtWaktuTempuh" => '0m',"floatPoint" => '25.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5b320a7b-9a9a-45a1-b7fd-4029f1645061',"txtTipe" => 'WALK',"floatData" => '05.05',"dtnInsertedDate" => '2022-01-24 6:58',"txtWaktuTempuh" => '0m',"floatPoint" => '25.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '20ec6394-acde-4f4b-abcb-a7381944a9ec',"txtTipe" => 'WALK',"floatData" => '1.77',"dtnInsertedDate" => '2022-01-24 7:05',"txtWaktuTempuh" => '0m',"floatPoint" => '8.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '267f457f-f9b1-438b-93e4-610422acfa5f',"txtTipe" => 'WALK',"floatData" => '4.62',"dtnInsertedDate" => '2022-01-24 7:16',"txtWaktuTempuh" => '0m',"floatPoint" => '23.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7f0c6b54-fe2b-441d-8fa4-0e3ea99a30ca',"txtTipe" => 'WALK',"floatData" => '05.05',"dtnInsertedDate" => '2022-01-24 7:17',"txtWaktuTempuh" => '0m',"floatPoint" => '25.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '5dbc4b14-e721-440f-9294-5d9e4aae9636',"txtTipe" => 'WALK',"floatData" => '3.5',"dtnInsertedDate" => '2022-01-24 7:22',"txtWaktuTempuh" => '0m',"floatPoint" => '17.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9be51928-2d3c-4d0f-acd2-ae215258518f',"txtTipe" => 'WALK',"floatData" => '4',"dtnInsertedDate" => '2022-01-24 7:35',"txtWaktuTempuh" => '0m',"floatPoint" => '20'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '82933c78-10fa-44f7-834a-4e0aa3f5977a',"txtTipe" => 'WALK',"floatData" => '1.46',"dtnInsertedDate" => '2022-01-24 7:39',"txtWaktuTempuh" => '0m',"floatPoint" => '7.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5382db9-90d9-4d31-b2ce-ad68f1ca0e13',"txtTipe" => 'WALK',"floatData" => '10.1',"dtnInsertedDate" => '2022-01-24 7:40',"txtWaktuTempuh" => '0m',"floatPoint" => '50.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'cd455f2e-4ef7-4721-aad7-3d2886a1252f',"txtTipe" => 'WALK',"floatData" => '2.64',"dtnInsertedDate" => '2022-01-24 7:41',"txtWaktuTempuh" => '0m',"floatPoint" => '13.2'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd297d314-c160-4cc3-a419-2448c3168e81',"txtTipe" => 'WALK',"floatData" => '2.47',"dtnInsertedDate" => '2022-01-24 8:04',"txtWaktuTempuh" => '0m',"floatPoint" => '12.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3413cfb3-c2f5-4c68-bc6f-1a61aff8d57d',"txtTipe" => 'WALK',"floatData" => '02.02',"dtnInsertedDate" => '2022-01-24 8:17',"txtWaktuTempuh" => '0m',"floatPoint" => '10.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'WALK',"floatData" => '02.03',"dtnInsertedDate" => '2022-01-24 9:05',"txtWaktuTempuh" => '0m',"floatPoint" => '10.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4156ccbe-b8f8-4e91-823e-b9bee2ab11c6',"txtTipe" => 'WALK',"floatData" => '1.1',"dtnInsertedDate" => '2022-01-24 9:07',"txtWaktuTempuh" => '0m',"floatPoint" => '5.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'd15467c7-d34b-42fa-96cd-b04a94dcfdcc',"txtTipe" => 'WALK',"floatData" => '3.43',"dtnInsertedDate" => '2022-01-24 13:42',"txtWaktuTempuh" => '0m',"floatPoint" => '17.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0e4f2b1e-0438-433b-bc7d-786e64f25615',"txtTipe" => 'WALK',"floatData" => '3.7',"dtnInsertedDate" => '2022-01-24 14:25',"txtWaktuTempuh" => '0m',"floatPoint" => '18.5'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '0.71',"dtnInsertedDate" => '2022-01-24 14:51',"txtWaktuTempuh" => '0m',"floatPoint" => '3.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7ea224d9-1bfa-4055-876c-ab08c8974123',"txtTipe" => 'WALK',"floatData" => '1.22',"dtnInsertedDate" => '2022-01-24 16:09',"txtWaktuTempuh" => '0m',"floatPoint" => '6.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '85cfa780-9237-43e8-900a-58005ff2ff34',"txtTipe" => 'WALK',"floatData" => '3.21',"dtnInsertedDate" => '2022-01-24 16:55',"txtWaktuTempuh" => '0m',"floatPoint" => '16.05'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '826bde79-b964-4c2f-9171-817800026c19',"txtTipe" => 'WALK',"floatData" => '1.96',"dtnInsertedDate" => '2022-01-24 17:54',"txtWaktuTempuh" => '0m',"floatPoint" => '9.8'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ac45d44f-fc6e-435d-a5ac-c781dca03f79',"txtTipe" => 'WALK',"floatData" => '1.67',"dtnInsertedDate" => '2022-01-24 18:02',"txtWaktuTempuh" => '0m',"floatPoint" => '8.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '30c45e08-df22-48c1-b6dc-69e82798c4c1',"txtTipe" => 'WALK',"floatData" => '0.85',"dtnInsertedDate" => '2022-01-24 18:09',"txtWaktuTempuh" => '0m',"floatPoint" => '4.25'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '9be51928-2d3c-4d0f-acd2-ae215258518f',"txtTipe" => 'WALK',"floatData" => '2.2',"dtnInsertedDate" => '2022-01-24 18:14',"txtWaktuTempuh" => '0m',"floatPoint" => '11'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '5.27',"dtnInsertedDate" => '2022-01-24 18:19',"txtWaktuTempuh" => '0m',"floatPoint" => '26.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b859db11-1748-4e5a-959f-afa7627bcae6',"txtTipe" => 'WALK',"floatData" => '3.34',"dtnInsertedDate" => '2022-01-24 18:20',"txtWaktuTempuh" => '0m',"floatPoint" => '16.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c6c42524-e2d7-44f7-97f1-2e6c49c9c01b',"txtTipe" => 'WALK',"floatData" => '1.33',"dtnInsertedDate" => '2022-01-24 18:23',"txtWaktuTempuh" => '0m',"floatPoint" => '6.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtTipe" => 'WALK',"floatData" => '8.94',"dtnInsertedDate" => '2022-01-24 18:34',"txtWaktuTempuh" => '0m',"floatPoint" => '44.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'a080280c-33e5-415c-8cac-eec8a21d0e23',"txtTipe" => 'WALK',"floatData" => '2.27',"dtnInsertedDate" => '2022-01-24 18:39',"txtWaktuTempuh" => '0m',"floatPoint" => '11.35'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '1cd6f59d-e092-418b-8401-e374a52e19eb',"txtTipe" => 'WALK',"floatData" => '03.08',"dtnInsertedDate" => '2022-01-24 18:42',"txtWaktuTempuh" => '0m',"floatPoint" => '15.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '022c9473-cd84-493f-997a-33c767f74324',"txtTipe" => 'WALK',"floatData" => '3.29',"dtnInsertedDate" => '2022-01-24 18:49',"txtWaktuTempuh" => '0m',"floatPoint" => '16.45'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '104eaf92-c358-4bcb-a9f1-38c679109723',"txtTipe" => 'WALK',"floatData" => '4.4',"dtnInsertedDate" => '2022-01-24 18:51',"txtWaktuTempuh" => '0m',"floatPoint" => '22'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '6df459be-cb5b-47e1-ac6b-c7544b4c2180',"txtTipe" => 'WALK',"floatData" => '2.31',"dtnInsertedDate" => '2022-01-24 18:52',"txtWaktuTempuh" => '0m',"floatPoint" => '11.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b5a6ebee-ff81-4d81-8882-40a4291d5eb3',"txtTipe" => 'WALK',"floatData" => '03.08',"dtnInsertedDate" => '2022-01-24 18:55',"txtWaktuTempuh" => '0m',"floatPoint" => '15.4'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '3413cfb3-c2f5-4c68-bc6f-1a61aff8d57d',"txtTipe" => 'WALK',"floatData" => '1.94',"dtnInsertedDate" => '2022-01-24 19:24',"txtWaktuTempuh" => '0m',"floatPoint" => '9.7'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'b7281780-de57-4e95-aa1d-499a19ce4a32',"txtTipe" => 'WALK',"floatData" => '02.06',"dtnInsertedDate" => '2022-01-24 19:28',"txtWaktuTempuh" => '0m',"floatPoint" => '10.3'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bbbccdba-1ca3-4211-aeed-547c10e1acc7',"txtTipe" => 'WALK',"floatData" => '2.2',"dtnInsertedDate" => '2022-01-24 19:29',"txtWaktuTempuh" => '0m',"floatPoint" => '11'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '8f9b68e9-9655-441a-91ca-6cbe1b7b2fe6',"txtTipe" => 'WALK',"floatData" => '3.53',"dtnInsertedDate" => '2022-01-24 19:30',"txtWaktuTempuh" => '0m',"floatPoint" => '17.65'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '1.2',"dtnInsertedDate" => '2022-01-24 19:36',"txtWaktuTempuh" => '0m',"floatPoint" => '6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '4652efd3-ca61-41ec-9a18-4620d8618fc9',"txtTipe" => 'WALK',"floatData" => '2.79',"dtnInsertedDate" => '2022-01-24 19:37',"txtWaktuTempuh" => '0m',"floatPoint" => '13.95'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'fb82a2b4-68c0-46f9-b6b7-f4532cc681b3',"txtTipe" => 'WALK',"floatData" => '3.22',"dtnInsertedDate" => '2022-01-24 19:43',"txtWaktuTempuh" => '0m',"floatPoint" => '16.1'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '624fc9ce-256f-4e9d-8b90-bdb706582778',"txtTipe" => 'WALK',"floatData" => '5.2',"dtnInsertedDate" => '2022-01-24 19:50',"txtWaktuTempuh" => '0m',"floatPoint" => '26'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'c83d2233-eb67-4401-842e-9497f6868bc4',"txtTipe" => 'WALK',"floatData" => '4.63',"dtnInsertedDate" => '2022-01-24 19:58',"txtWaktuTempuh" => '0m',"floatPoint" => '23.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '7209ddba-aed0-4581-aa94-9906c830c187',"txtTipe" => 'WALK',"floatData" => '5.31',"dtnInsertedDate" => '2022-01-24 20:18',"txtWaktuTempuh" => '0m',"floatPoint" => '26.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'bb3923a5-4185-4b86-a6e2-93815350d7fa',"txtTipe" => 'WALK',"floatData" => '0.38',"dtnInsertedDate" => '2022-01-24 20:20',"txtWaktuTempuh" => '0m',"floatPoint" => '1.9'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '181aa8e2-17e3-43af-b9e3-115f7c3a9b6a',"txtTipe" => 'WALK',"floatData" => '01.03',"dtnInsertedDate" => '2022-01-24 20:31',"txtWaktuTempuh" => '0m',"floatPoint" => '5.15'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '0348311a-b8e0-46b1-bf77-e38a41a25584',"txtTipe" => 'WALK',"floatData" => '5.71',"dtnInsertedDate" => '2022-01-24 20:33',"txtWaktuTempuh" => '0m',"floatPoint" => '28.55'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'eea2f21f-91e3-4ffd-a2cf-eab60dbfc703',"txtTipe" => 'WALK',"floatData" => '5.32',"dtnInsertedDate" => '2022-01-24 20:33',"txtWaktuTempuh" => '0m',"floatPoint" => '26.6'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => '10c02d80-98cd-4186-b8c1-0775a1b89303',"txtTipe" => 'WALK',"floatData" => '0.97',"dtnInsertedDate" => '2022-01-24 20:50',"txtWaktuTempuh" => '0m',"floatPoint" => '4.85'
              ],
                [
                   'txtId' => Str::uuid(), "txtIdUser" => 'ad0f446e-c1f9-4d93-8f95-5c4b6fd2dd98',"txtTipe" => 'WALK',"floatData" => '2.43',"dtnInsertedDate" => '2022-01-24 21:04',"txtWaktuTempuh" => '0m',"floatPoint" => '12.15'
              ]
            ]
        );
    }
}
