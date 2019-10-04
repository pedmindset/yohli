<?php

use Illuminate\Database\Seeder;
use App\Country;


class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    \DB::table('countries')->delete();        

    Country::create( [
    'id'=>1,
    'name'=>'Afghanistan',
    'code'=>'AF',
    'dial_code'=>'+93',
    'currency_name'=>'Afghan afghani',
    'currency_symbol'=>'؋',
    'currency_code'=>'AFN'
    ] );
    
                
    
    Country::create( [
    'id'=>2,
    'name'=>'Aland Islands',
    'code'=>'AX',
    'dial_code'=>'+358',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>3,
    'name'=>'Albania',
    'code'=>'AL',
    'dial_code'=>'+355',
    'currency_name'=>'Albanian lek',
    'currency_symbol'=>'L',
    'currency_code'=>'ALL'
    ] );
    
                
    
    Country::create( [
    'id'=>4,
    'name'=>'Algeria',
    'code'=>'DZ',
    'dial_code'=>'+213',
    'currency_name'=>'Algerian dinar',
    'currency_symbol'=>'د.ج',
    'currency_code'=>'DZD'
    ] );
    
                
    
    Country::create( [
    'id'=>5,
    'name'=>'AmericanSamoa',
    'code'=>'AS',
    'dial_code'=>'+1684',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>6,
    'name'=>'Andorra',
    'code'=>'AD',
    'dial_code'=>'+376',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>7,
    'name'=>'Angola',
    'code'=>'AO',
    'dial_code'=>'+244',
    'currency_name'=>'Angolan kwanza',
    'currency_symbol'=>'Kz',
    'currency_code'=>'AOA'
    ] );
    
                
    
    Country::create( [
    'id'=>8,
    'name'=>'Anguilla',
    'code'=>'AI',
    'dial_code'=>'+1264',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>9,
    'name'=>'Antarctica',
    'code'=>'AQ',
    'dial_code'=>'+672',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>10,
    'name'=>'Antigua and Barbuda',
    'code'=>'AG',
    'dial_code'=>'+1268',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>11,
    'name'=>'Argentina',
    'code'=>'AR',
    'dial_code'=>'+54',
    'currency_name'=>'Argentine peso',
    'currency_symbol'=>'$',
    'currency_code'=>'ARS'
    ] );
    
                
    
    Country::create( [
    'id'=>12,
    'name'=>'Armenia',
    'code'=>'AM',
    'dial_code'=>'+374',
    'currency_name'=>'Armenian dram',
    'currency_symbol'=>'',
    'currency_code'=>'AMD'
    ] );
    
                
    
    Country::create( [
    'id'=>13,
    'name'=>'Aruba',
    'code'=>'AW',
    'dial_code'=>'+297',
    'currency_name'=>'Aruban florin',
    'currency_symbol'=>'ƒ',
    'currency_code'=>'AWG'
    ] );
    
                
    
    Country::create( [
    'id'=>14,
    'name'=>'Australia',
    'code'=>'AU',
    'dial_code'=>'+61',
    'currency_name'=>'Australian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'AUD'
    ] );
    
                
    
    Country::create( [
    'id'=>15,
    'name'=>'Austria',
    'code'=>'AT',
    'dial_code'=>'+43',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>16,
    'name'=>'Azerbaijan',
    'code'=>'AZ',
    'dial_code'=>'+994',
    'currency_name'=>'Azerbaijani manat',
    'currency_symbol'=>'',
    'currency_code'=>'AZN'
    ] );
    
                
    
    Country::create( [
    'id'=>17,
    'name'=>'Bahamas',
    'code'=>'BS',
    'dial_code'=>'+1242',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>18,
    'name'=>'Bahrain',
    'code'=>'BH',
    'dial_code'=>'+973',
    'currency_name'=>'Bahraini dinar',
    'currency_symbol'=>'.د.ب',
    'currency_code'=>'BHD'
    ] );
    
                
    
    Country::create( [
    'id'=>19,
    'name'=>'Bangladesh',
    'code'=>'BD',
    'dial_code'=>'+880',
    'currency_name'=>'Bangladeshi taka',
    'currency_symbol'=>'৳',
    'currency_code'=>'BDT'
    ] );
    
                
    
    Country::create( [
    'id'=>20,
    'name'=>'Barbados',
    'code'=>'BB',
    'dial_code'=>'+1246',
    'currency_name'=>'Barbadian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'BBD'
    ] );
    
                
    
    Country::create( [
    'id'=>21,
    'name'=>'Belarus',
    'code'=>'BY',
    'dial_code'=>'+375',
    'currency_name'=>'Belarusian ruble',
    'currency_symbol'=>'Br',
    'currency_code'=>'BYR'
    ] );
    
                
    
    Country::create( [
    'id'=>22,
    'name'=>'Belgium',
    'code'=>'BE',
    'dial_code'=>'+32',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>23,
    'name'=>'Belize',
    'code'=>'BZ',
    'dial_code'=>'+501',
    'currency_name'=>'Belize dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'BZD'
    ] );
    
                
    
    Country::create( [
    'id'=>24,
    'name'=>'Benin',
    'code'=>'BJ',
    'dial_code'=>'+229',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>25,
    'name'=>'Bermuda',
    'code'=>'BM',
    'dial_code'=>'+1441',
    'currency_name'=>'Bermudian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'BMD'
    ] );
    
                
    
    Country::create( [
    'id'=>26,
    'name'=>'Bhutan',
    'code'=>'BT',
    'dial_code'=>'+975',
    'currency_name'=>'Bhutanese ngultrum',
    'currency_symbol'=>'Nu.',
    'currency_code'=>'BTN'
    ] );
    
                
    
    Country::create( [
    'id'=>27,
    'name'=>'Bolivia, Plurination',
    'code'=>'BO',
    'dial_code'=>'+591',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>28,
    'name'=>'Bosnia and Herzegovi',
    'code'=>'BA',
    'dial_code'=>'+387',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>29,
    'name'=>'Botswana',
    'code'=>'BW',
    'dial_code'=>'+267',
    'currency_name'=>'Botswana pula',
    'currency_symbol'=>'P',
    'currency_code'=>'BWP'
    ] );
    
                
    
    Country::create( [
    'id'=>30,
    'name'=>'Brazil',
    'code'=>'BR',
    'dial_code'=>'+55',
    'currency_name'=>'Brazilian real',
    'currency_symbol'=>'R$',
    'currency_code'=>'BRL'
    ] );
    
                
    
    Country::create( [
    'id'=>31,
    'name'=>'British Indian Ocean',
    'code'=>'IO',
    'dial_code'=>'+246',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>32,
    'name'=>'Brunei Darussalam',
    'code'=>'BN',
    'dial_code'=>'+673',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>33,
    'name'=>'Bulgaria',
    'code'=>'BG',
    'dial_code'=>'+359',
    'currency_name'=>'Bulgarian lev',
    'currency_symbol'=>'лв',
    'currency_code'=>'BGN'
    ] );
    
                
    
    Country::create( [
    'id'=>34,
    'name'=>'Burkina Faso',
    'code'=>'BF',
    'dial_code'=>'+226',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>35,
    'name'=>'Burundi',
    'code'=>'BI',
    'dial_code'=>'+257',
    'currency_name'=>'Burundian franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'BIF'
    ] );
    
                
    
    Country::create( [
    'id'=>36,
    'name'=>'Cambodia',
    'code'=>'KH',
    'dial_code'=>'+855',
    'currency_name'=>'Cambodian riel',
    'currency_symbol'=>'៛',
    'currency_code'=>'KHR'
    ] );
    
                
    
    Country::create( [
    'id'=>37,
    'name'=>'Cameroon',
    'code'=>'CM',
    'dial_code'=>'+237',
    'currency_name'=>'Central African CFA ',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XAF'
    ] );
    
                
    
    Country::create( [
    'id'=>38,
    'name'=>'Canada',
    'code'=>'CA',
    'dial_code'=>'+1',
    'currency_name'=>'Canadian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'CAD'
    ] );
    
                
    
    Country::create( [
    'id'=>39,
    'name'=>'Cape Verde',
    'code'=>'CV',
    'dial_code'=>'+238',
    'currency_name'=>'Cape Verdean escudo',
    'currency_symbol'=>'Esc or $',
    'currency_code'=>'CVE'
    ] );
    
                
    
    Country::create( [
    'id'=>40,
    'name'=>'Cayman Islands',
    'code'=>'KY',
    'dial_code'=>'+ 345',
    'currency_name'=>'Cayman Islands dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'KYD'
    ] );
    
                
    
    Country::create( [
    'id'=>41,
    'name'=>'Central African Repu',
    'code'=>'CF',
    'dial_code'=>'+236',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>42,
    'name'=>'Chad',
    'code'=>'TD',
    'dial_code'=>'+235',
    'currency_name'=>'Central African CFA ',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XAF'
    ] );
    
                
    
    Country::create( [
    'id'=>43,
    'name'=>'Chile',
    'code'=>'CL',
    'dial_code'=>'+56',
    'currency_name'=>'Chilean peso',
    'currency_symbol'=>'$',
    'currency_code'=>'CLP'
    ] );
    
                
    
    Country::create( [
    'id'=>44,
    'name'=>'China',
    'code'=>'CN',
    'dial_code'=>'+86',
    'currency_name'=>'Chinese yuan',
    'currency_symbol'=>'¥ or 元',
    'currency_code'=>'CNY'
    ] );
    
                
    
    Country::create( [
    'id'=>45,
    'name'=>'Christmas Island',
    'code'=>'CX',
    'dial_code'=>'+61',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>46,
    'name'=>'Cocos (Keeling) Isla',
    'code'=>'CC',
    'dial_code'=>'+61',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>47,
    'name'=>'Colombia',
    'code'=>'CO',
    'dial_code'=>'+57',
    'currency_name'=>'Colombian peso',
    'currency_symbol'=>'$',
    'currency_code'=>'COP'
    ] );
    
                
    
    Country::create( [
    'id'=>48,
    'name'=>'Comoros',
    'code'=>'KM',
    'dial_code'=>'+269',
    'currency_name'=>'Comorian franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'KMF'
    ] );
    
                
    
    Country::create( [
    'id'=>49,
    'name'=>'Congo',
    'code'=>'CG',
    'dial_code'=>'+242',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>50,
    'name'=>'Congo, The Democrati',
    'code'=>'CD',
    'dial_code'=>'+243',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>51,
    'name'=>'Cook Islands',
    'code'=>'CK',
    'dial_code'=>'+682',
    'currency_name'=>'New Zealand dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'NZD'
    ] );
    
                
    
    Country::create( [
    'id'=>52,
    'name'=>'Costa Rica',
    'code'=>'CR',
    'dial_code'=>'+506',
    'currency_name'=>'Costa Rican colón',
    'currency_symbol'=>'₡',
    'currency_code'=>'CRC'
    ] );
    
                
    
    Country::create( [
    'id'=>53,
    'name'=>'Cote d',
    'code'=>'Ivoire',
    'dial_code'=>'CI',
    'currency_name'=>'+225',
    'currency_symbol'=>'West African CFA fra',
    'currency_code'=>'XOF',
    ] );
    
                
    
    Country::create( [
    'id'=>54,
    'name'=>'Croatia',
    'code'=>'HR',
    'dial_code'=>'+385',
    'currency_name'=>'Croatian kuna',
    'currency_symbol'=>'kn',
    'currency_code'=>'HRK'
    ] );
    
                
    
    Country::create( [
    'id'=>55,
    'name'=>'Cuba',
    'code'=>'CU',
    'dial_code'=>'+53',
    'currency_name'=>'Cuban convertible pe',
    'currency_symbol'=>'$',
    'currency_code'=>'CUC'
    ] );
    
                
    
    Country::create( [
    'id'=>56,
    'name'=>'Cyprus',
    'code'=>'CY',
    'dial_code'=>'+357',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>57,
    'name'=>'Czech Republic',
    'code'=>'CZ',
    'dial_code'=>'+420',
    'currency_name'=>'Czech koruna',
    'currency_symbol'=>'Kč',
    'currency_code'=>'CZK'
    ] );
    
                
    
    Country::create( [
    'id'=>58,
    'name'=>'Denmark',
    'code'=>'DK',
    'dial_code'=>'+45',
    'currency_name'=>'Danish krone',
    'currency_symbol'=>'kr',
    'currency_code'=>'DKK'
    ] );
    
                
    
    Country::create( [
    'id'=>59,
    'name'=>'Djibouti',
    'code'=>'DJ',
    'dial_code'=>'+253',
    'currency_name'=>'Djiboutian franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'DJF'
    ] );
    
                
    
    Country::create( [
    'id'=>60,
    'name'=>'Dominica',
    'code'=>'DM',
    'dial_code'=>'+1767',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>61,
    'name'=>'Dominican Republic',
    'code'=>'DO',
    'dial_code'=>'+1849',
    'currency_name'=>'Dominican peso',
    'currency_symbol'=>'$',
    'currency_code'=>'DOP'
    ] );
    
                
    
    Country::create( [
    'id'=>62,
    'name'=>'Ecuador',
    'code'=>'EC',
    'dial_code'=>'+593',
    'currency_name'=>'United States dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'USD'
    ] );
    
                
    
    Country::create( [
    'id'=>63,
    'name'=>'Egypt',
    'code'=>'EG',
    'dial_code'=>'+20',
    'currency_name'=>'Egyptian pound',
    'currency_symbol'=>'£ or ج.م',
    'currency_code'=>'EGP'
    ] );
    
                
    
    Country::create( [
    'id'=>64,
    'name'=>'El Salvador',
    'code'=>'SV',
    'dial_code'=>'+503',
    'currency_name'=>'United States dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'USD'
    ] );
    
                
    
    Country::create( [
    'id'=>65,
    'name'=>'Equatorial Guinea',
    'code'=>'GQ',
    'dial_code'=>'+240',
    'currency_name'=>'Central African CFA ',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XAF'
    ] );
    
                
    
    Country::create( [
    'id'=>66,
    'name'=>'Eritrea',
    'code'=>'ER',
    'dial_code'=>'+291',
    'currency_name'=>'Eritrean nakfa',
    'currency_symbol'=>'Nfk',
    'currency_code'=>'ERN'
    ] );
    
                
    
    Country::create( [
    'id'=>67,
    'name'=>'Estonia',
    'code'=>'EE',
    'dial_code'=>'+372',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>68,
    'name'=>'Ethiopia',
    'code'=>'ET',
    'dial_code'=>'+251',
    'currency_name'=>'Ethiopian birr',
    'currency_symbol'=>'Br',
    'currency_code'=>'ETB'
    ] );
    
                
    
    Country::create( [
    'id'=>69,
    'name'=>'Falkland Islands (Ma',
    'code'=>'FK',
    'dial_code'=>'+500',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>70,
    'name'=>'Faroe Islands',
    'code'=>'FO',
    'dial_code'=>'+298',
    'currency_name'=>'Danish krone',
    'currency_symbol'=>'kr',
    'currency_code'=>'DKK'
    ] );
    
                
    
    Country::create( [
    'id'=>71,
    'name'=>'Fiji',
    'code'=>'FJ',
    'dial_code'=>'+679',
    'currency_name'=>'Fijian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'FJD'
    ] );
    
                
    
    Country::create( [
    'id'=>72,
    'name'=>'Finland',
    'code'=>'FI',
    'dial_code'=>'+358',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>73,
    'name'=>'France',
    'code'=>'FR',
    'dial_code'=>'+33',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>74,
    'name'=>'French Guiana',
    'code'=>'GF',
    'dial_code'=>'+594',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>75,
    'name'=>'French Polynesia',
    'code'=>'PF',
    'dial_code'=>'+689',
    'currency_name'=>'CFP franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XPF'
    ] );
    
                
    
    Country::create( [
    'id'=>76,
    'name'=>'Gabon',
    'code'=>'GA',
    'dial_code'=>'+241',
    'currency_name'=>'Central African CFA ',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XAF'
    ] );
    
                
    
    Country::create( [
    'id'=>77,
    'name'=>'Gambia',
    'code'=>'GM',
    'dial_code'=>'+220',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>78,
    'name'=>'Georgia',
    'code'=>'GE',
    'dial_code'=>'+995',
    'currency_name'=>'Georgian lari',
    'currency_symbol'=>'ლ',
    'currency_code'=>'GEL'
    ] );
    
                
    
    Country::create( [
    'id'=>79,
    'name'=>'Germany',
    'code'=>'DE',
    'dial_code'=>'+49',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>80,
    'name'=>'Ghana',
    'code'=>'GH',
    'dial_code'=>'+233',
    'currency_name'=>'Ghana cedi',
    'currency_symbol'=>'GH¢',
    'currency_code'=>'GHS'
    ] );
    
                
    
    Country::create( [
    'id'=>81,
    'name'=>'Gibraltar',
    'code'=>'GI',
    'dial_code'=>'+350',
    'currency_name'=>'Gibraltar pound',
    'currency_symbol'=>'£',
    'currency_code'=>'GIP'
    ] );
    
                
    
    Country::create( [
    'id'=>82,
    'name'=>'Greece',
    'code'=>'GR',
    'dial_code'=>'+30',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>83,
    'name'=>'Greenland',
    'code'=>'GL',
    'dial_code'=>'+299',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>84,
    'name'=>'Grenada',
    'code'=>'GD',
    'dial_code'=>'+1473',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>85,
    'name'=>'Guadeloupe',
    'code'=>'GP',
    'dial_code'=>'+590',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>86,
    'name'=>'Guam',
    'code'=>'GU',
    'dial_code'=>'+1671',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>87,
    'name'=>'Guatemala',
    'code'=>'GT',
    'dial_code'=>'+502',
    'currency_name'=>'Guatemalan quetzal',
    'currency_symbol'=>'Q',
    'currency_code'=>'GTQ'
    ] );
    
                
    
    Country::create( [
    'id'=>88,
    'name'=>'Guernsey',
    'code'=>'GG',
    'dial_code'=>'+44',
    'currency_name'=>'British pound',
    'currency_symbol'=>'£',
    'currency_code'=>'GBP'
    ] );
    
                
    
    Country::create( [
    'id'=>89,
    'name'=>'Guinea',
    'code'=>'GN',
    'dial_code'=>'+224',
    'currency_name'=>'Guinean franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'GNF'
    ] );
    
                
    
    Country::create( [
    'id'=>90,
    'name'=>'Guinea-Bissau',
    'code'=>'GW',
    'dial_code'=>'+245',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>91,
    'name'=>'Guyana',
    'code'=>'GY',
    'dial_code'=>'+595',
    'currency_name'=>'Guyanese dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'GYD'
    ] );
    
                
    
    Country::create( [
    'id'=>92,
    'name'=>'Haiti',
    'code'=>'HT',
    'dial_code'=>'+509',
    'currency_name'=>'Haitian gourde',
    'currency_symbol'=>'G',
    'currency_code'=>'HTG'
    ] );
    
                
    
    Country::create( [
    'id'=>93,
    'name'=>'Holy See (Vatican Ci',
    'code'=>'VA',
    'dial_code'=>'+379',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>94,
    'name'=>'Honduras',
    'code'=>'HN',
    'dial_code'=>'+504',
    'currency_name'=>'Honduran lempira',
    'currency_symbol'=>'L',
    'currency_code'=>'HNL'
    ] );
    
                
    
    Country::create( [
    'id'=>95,
    'name'=>'Hong Kong',
    'code'=>'HK',
    'dial_code'=>'+852',
    'currency_name'=>'Hong Kong dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'HKD'
    ] );
    
                
    
    Country::create( [
    'id'=>96,
    'name'=>'Hungary',
    'code'=>'HU',
    'dial_code'=>'+36',
    'currency_name'=>'Hungarian forint',
    'currency_symbol'=>'Ft',
    'currency_code'=>'HUF'
    ] );
    
                
    
    Country::create( [
    'id'=>97,
    'name'=>'Iceland',
    'code'=>'IS',
    'dial_code'=>'+354',
    'currency_name'=>'Icelandic króna',
    'currency_symbol'=>'kr',
    'currency_code'=>'ISK'
    ] );
    
                
    
    Country::create( [
    'id'=>98,
    'name'=>'India',
    'code'=>'IN',
    'dial_code'=>'+91',
    'currency_name'=>'Indian rupee',
    'currency_symbol'=>'₹',
    'currency_code'=>'INR'
    ] );
    
                
    
    Country::create( [
    'id'=>99,
    'name'=>'Indonesia',
    'code'=>'ID',
    'dial_code'=>'+62',
    'currency_name'=>'Indonesian rupiah',
    'currency_symbol'=>'Rp',
    'currency_code'=>'IDR'
    ] );
    
                
    
    Country::create( [
    'id'=>100,
    'name'=>'Iran, Islamic Republ',
    'code'=>'IR',
    'dial_code'=>'+98',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>101,
    'name'=>'Iraq',
    'code'=>'IQ',
    'dial_code'=>'+964',
    'currency_name'=>'Iraqi dinar',
    'currency_symbol'=>'ع.د',
    'currency_code'=>'IQD'
    ] );
    
                
    
    Country::create( [
    'id'=>102,
    'name'=>'Ireland',
    'code'=>'IE',
    'dial_code'=>'+353',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>103,
    'name'=>'Isle of Man',
    'code'=>'IM',
    'dial_code'=>'+44',
    'currency_name'=>'British pound',
    'currency_symbol'=>'£',
    'currency_code'=>'GBP'
    ] );
    
                
    
    Country::create( [
    'id'=>104,
    'name'=>'Israel',
    'code'=>'IL',
    'dial_code'=>'+972',
    'currency_name'=>'Israeli new shekel',
    'currency_symbol'=>'₪',
    'currency_code'=>'ILS'
    ] );
    
                
    
    Country::create( [
    'id'=>105,
    'name'=>'Italy',
    'code'=>'IT',
    'dial_code'=>'+39',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>106,
    'name'=>'Jamaica',
    'code'=>'JM',
    'dial_code'=>'+1876',
    'currency_name'=>'Jamaican dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'JMD'
    ] );
    
                
    
    Country::create( [
    'id'=>107,
    'name'=>'Japan',
    'code'=>'JP',
    'dial_code'=>'+81',
    'currency_name'=>'Japanese yen',
    'currency_symbol'=>'¥',
    'currency_code'=>'JPY'
    ] );
    
                
    
    Country::create( [
    'id'=>108,
    'name'=>'Jersey',
    'code'=>'JE',
    'dial_code'=>'+44',
    'currency_name'=>'British pound',
    'currency_symbol'=>'£',
    'currency_code'=>'GBP'
    ] );
    
                
    
    Country::create( [
    'id'=>109,
    'name'=>'Jordan',
    'code'=>'JO',
    'dial_code'=>'+962',
    'currency_name'=>'Jordanian dinar',
    'currency_symbol'=>'د.ا',
    'currency_code'=>'JOD'
    ] );
    
                
    
    Country::create( [
    'id'=>110,
    'name'=>'Kazakhstan',
    'code'=>'KZ',
    'dial_code'=>'+7 7',
    'currency_name'=>'Kazakhstani tenge',
    'currency_symbol'=>'',
    'currency_code'=>'KZT'
    ] );
    
                
    
    Country::create( [
    'id'=>111,
    'name'=>'Kenya',
    'code'=>'KE',
    'dial_code'=>'+254',
    'currency_name'=>'Kenyan shilling',
    'currency_symbol'=>'Sh',
    'currency_code'=>'KES'
    ] );
    
                
    
    Country::create( [
    'id'=>112,
    'name'=>'Kiribati',
    'code'=>'KI',
    'dial_code'=>'+686',
    'currency_name'=>'Australian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'AUD'
    ] );
    
                
    
    Country::create( [
    'id'=>113,
    'name'=>'Korea, Democratic Pe',
    'code'=>'KP',
    'dial_code'=>'+850',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>114,
    'name'=>'Korea, Republic of S',
    'code'=>'KR',
    'dial_code'=>'+82',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>115,
    'name'=>'Kuwait',
    'code'=>'KW',
    'dial_code'=>'+965',
    'currency_name'=>'Kuwaiti dinar',
    'currency_symbol'=>'د.ك',
    'currency_code'=>'KWD'
    ] );
    
                
    
    Country::create( [
    'id'=>116,
    'name'=>'Kyrgyzstan',
    'code'=>'KG',
    'dial_code'=>'+996',
    'currency_name'=>'Kyrgyzstani som',
    'currency_symbol'=>'лв',
    'currency_code'=>'KGS'
    ] );
    
                
    
    Country::create( [
    'id'=>117,
    'name'=>'Laos',
    'code'=>'LA',
    'dial_code'=>'+856',
    'currency_name'=>'Lao kip',
    'currency_symbol'=>'₭',
    'currency_code'=>'LAK'
    ] );
    
                
    
    Country::create( [
    'id'=>118,
    'name'=>'Latvia',
    'code'=>'LV',
    'dial_code'=>'+371',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>119,
    'name'=>'Lebanon',
    'code'=>'LB',
    'dial_code'=>'+961',
    'currency_name'=>'Lebanese pound',
    'currency_symbol'=>'ل.ل',
    'currency_code'=>'LBP'
    ] );
    
                
    
    Country::create( [
    'id'=>120,
    'name'=>'Lesotho',
    'code'=>'LS',
    'dial_code'=>'+266',
    'currency_name'=>'Lesotho loti',
    'currency_symbol'=>'L',
    'currency_code'=>'LSL'
    ] );
    
                
    
    Country::create( [
    'id'=>121,
    'name'=>'Liberia',
    'code'=>'LR',
    'dial_code'=>'+231',
    'currency_name'=>'Liberian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'LRD'
    ] );
    
                
    
    Country::create( [
    'id'=>122,
    'name'=>'Libyan Arab Jamahiri',
    'code'=>'LY',
    'dial_code'=>'+218',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>123,
    'name'=>'Liechtenstein',
    'code'=>'LI',
    'dial_code'=>'+423',
    'currency_name'=>'Swiss franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'CHF'
    ] );
    
                
    
    Country::create( [
    'id'=>124,
    'name'=>'Lithuania',
    'code'=>'LT',
    'dial_code'=>'+370',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>125,
    'name'=>'Luxembourg',
    'code'=>'LU',
    'dial_code'=>'+352',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>126,
    'name'=>'Macao',
    'code'=>'MO',
    'dial_code'=>'+853',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>127,
    'name'=>'Macedonia',
    'code'=>'MK',
    'dial_code'=>'+389',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>128,
    'name'=>'Madagascar',
    'code'=>'MG',
    'dial_code'=>'+261',
    'currency_name'=>'Malagasy ariary',
    'currency_symbol'=>'Ar',
    'currency_code'=>'MGA'
    ] );
    
                
    
    Country::create( [
    'id'=>129,
    'name'=>'Malawi',
    'code'=>'MW',
    'dial_code'=>'+265',
    'currency_name'=>'Malawian kwacha',
    'currency_symbol'=>'MK',
    'currency_code'=>'MWK'
    ] );
    
                
    
    Country::create( [
    'id'=>130,
    'name'=>'Malaysia',
    'code'=>'MY',
    'dial_code'=>'+60',
    'currency_name'=>'Malaysian ringgit',
    'currency_symbol'=>'RM',
    'currency_code'=>'MYR'
    ] );
    
                
    
    Country::create( [
    'id'=>131,
    'name'=>'Maldives',
    'code'=>'MV',
    'dial_code'=>'+960',
    'currency_name'=>'Maldivian rufiyaa',
    'currency_symbol'=>'.ރ',
    'currency_code'=>'MVR'
    ] );
    
                
    
    Country::create( [
    'id'=>132,
    'name'=>'Mali',
    'code'=>'ML',
    'dial_code'=>'+223',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>133,
    'name'=>'Malta',
    'code'=>'MT',
    'dial_code'=>'+356',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>134,
    'name'=>'Marshall Islands',
    'code'=>'MH',
    'dial_code'=>'+692',
    'currency_name'=>'United States dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'USD'
    ] );
    
                
    
    Country::create( [
    'id'=>135,
    'name'=>'Martinique',
    'code'=>'MQ',
    'dial_code'=>'+596',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>136,
    'name'=>'Mauritania',
    'code'=>'MR',
    'dial_code'=>'+222',
    'currency_name'=>'Mauritanian ouguiya',
    'currency_symbol'=>'UM',
    'currency_code'=>'MRO'
    ] );
    
                
    
    Country::create( [
    'id'=>137,
    'name'=>'Mauritius',
    'code'=>'MU',
    'dial_code'=>'+230',
    'currency_name'=>'Mauritian rupee',
    'currency_symbol'=>'₨',
    'currency_code'=>'MUR'
    ] );
    
                
    
    Country::create( [
    'id'=>138,
    'name'=>'Mayotte',
    'code'=>'YT',
    'dial_code'=>'+262',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>139,
    'name'=>'Mexico',
    'code'=>'MX',
    'dial_code'=>'+52',
    'currency_name'=>'Mexican peso',
    'currency_symbol'=>'$',
    'currency_code'=>'MXN'
    ] );
    
                
    
    Country::create( [
    'id'=>140,
    'name'=>'Micronesia, Federate',
    'code'=>'FM',
    'dial_code'=>'+691',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>141,
    'name'=>'Moldova',
    'code'=>'MD',
    'dial_code'=>'+373',
    'currency_name'=>'Moldovan leu',
    'currency_symbol'=>'L',
    'currency_code'=>'MDL'
    ] );
    
                
    
    Country::create( [
    'id'=>142,
    'name'=>'Monaco',
    'code'=>'MC',
    'dial_code'=>'+377',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>143,
    'name'=>'Mongolia',
    'code'=>'MN',
    'dial_code'=>'+976',
    'currency_name'=>'Mongolian tögrög',
    'currency_symbol'=>'₮',
    'currency_code'=>'MNT'
    ] );
    
                
    
    Country::create( [
    'id'=>144,
    'name'=>'Montenegro',
    'code'=>'ME',
    'dial_code'=>'+382',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>145,
    'name'=>'Montserrat',
    'code'=>'MS',
    'dial_code'=>'+1664',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>146,
    'name'=>'Morocco',
    'code'=>'MA',
    'dial_code'=>'+212',
    'currency_name'=>'Moroccan dirham',
    'currency_symbol'=>'د.م.',
    'currency_code'=>'MAD'
    ] );
    
                
    
    Country::create( [
    'id'=>147,
    'name'=>'Mozambique',
    'code'=>'MZ',
    'dial_code'=>'+258',
    'currency_name'=>'Mozambican metical',
    'currency_symbol'=>'MT',
    'currency_code'=>'MZN'
    ] );
    
                
    
    Country::create( [
    'id'=>148,
    'name'=>'Myanmar',
    'code'=>'MM',
    'dial_code'=>'+95',
    'currency_name'=>'Burmese kyat',
    'currency_symbol'=>'Ks',
    'currency_code'=>'MMK'
    ] );
    
                
    
    Country::create( [
    'id'=>149,
    'name'=>'Namibia',
    'code'=>'NA',
    'dial_code'=>'+264',
    'currency_name'=>'Namibian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'NAD'
    ] );
    
                
    
    Country::create( [
    'id'=>150,
    'name'=>'Nauru',
    'code'=>'NR',
    'dial_code'=>'+674',
    'currency_name'=>'Australian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'AUD'
    ] );
    
                
    
    Country::create( [
    'id'=>151,
    'name'=>'Nepal',
    'code'=>'NP',
    'dial_code'=>'+977',
    'currency_name'=>'Nepalese rupee',
    'currency_symbol'=>'₨',
    'currency_code'=>'NPR'
    ] );
    
                
    
    Country::create( [
    'id'=>152,
    'name'=>'Netherlands',
    'code'=>'NL',
    'dial_code'=>'+31',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>153,
    'name'=>'Netherlands Antilles',
    'code'=>'AN',
    'dial_code'=>'+599',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>154,
    'name'=>'New Caledonia',
    'code'=>'NC',
    'dial_code'=>'+687',
    'currency_name'=>'CFP franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XPF'
    ] );
    
                
    
    Country::create( [
    'id'=>155,
    'name'=>'New Zealand',
    'code'=>'NZ',
    'dial_code'=>'+64',
    'currency_name'=>'New Zealand dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'NZD'
    ] );
    
                
    
    Country::create( [
    'id'=>156,
    'name'=>'Nicaragua',
    'code'=>'NI',
    'dial_code'=>'+505',
    'currency_name'=>'Nicaraguan córdoba',
    'currency_symbol'=>'C$',
    'currency_code'=>'NIO'
    ] );
    
                
    
    Country::create( [
    'id'=>157,
    'name'=>'Niger',
    'code'=>'NE',
    'dial_code'=>'+227',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>158,
    'name'=>'Nigeria',
    'code'=>'NG',
    'dial_code'=>'+234',
    'currency_name'=>'Nigerian naira',
    'currency_symbol'=>'₦',
    'currency_code'=>'NGN'
    ] );
    
                
    
    Country::create( [
    'id'=>159,
    'name'=>'Niue',
    'code'=>'NU',
    'dial_code'=>'+683',
    'currency_name'=>'New Zealand dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'NZD'
    ] );
    
                
    
    Country::create( [
    'id'=>160,
    'name'=>'Norfolk Island',
    'code'=>'NF',
    'dial_code'=>'+672',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>161,
    'name'=>'Northern Mariana Isl',
    'code'=>'MP',
    'dial_code'=>'+1670',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>162,
    'name'=>'Norway',
    'code'=>'NO',
    'dial_code'=>'+47',
    'currency_name'=>'Norwegian krone',
    'currency_symbol'=>'kr',
    'currency_code'=>'NOK'
    ] );
    
                
    
    Country::create( [
    'id'=>163,
    'name'=>'Oman',
    'code'=>'OM',
    'dial_code'=>'+968',
    'currency_name'=>'Omani rial',
    'currency_symbol'=>'ر.ع.',
    'currency_code'=>'OMR'
    ] );
    
                
    
    Country::create( [
    'id'=>164,
    'name'=>'Pakistan',
    'code'=>'PK',
    'dial_code'=>'+92',
    'currency_name'=>'Pakistani rupee',
    'currency_symbol'=>'₨',
    'currency_code'=>'PKR'
    ] );
    
                
    
    Country::create( [
    'id'=>165,
    'name'=>'Palau',
    'code'=>'PW',
    'dial_code'=>'+680',
    'currency_name'=>'Palauan dollar',
    'currency_symbol'=>'$',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>166,
    'name'=>'Palestinian Territor',
    'code'=>'PS',
    'dial_code'=>'+970',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>167,
    'name'=>'Panama',
    'code'=>'PA',
    'dial_code'=>'+507',
    'currency_name'=>'Panamanian balboa',
    'currency_symbol'=>'B/.',
    'currency_code'=>'PAB'
    ] );
    
                
    
    Country::create( [
    'id'=>168,
    'name'=>'Papua New Guinea',
    'code'=>'PG',
    'dial_code'=>'+675',
    'currency_name'=>'Papua New Guinean ki',
    'currency_symbol'=>'K',
    'currency_code'=>'PGK'
    ] );
    
                
    
    Country::create( [
    'id'=>169,
    'name'=>'Paraguay',
    'code'=>'PY',
    'dial_code'=>'+595',
    'currency_name'=>'Paraguayan guaraní',
    'currency_symbol'=>'₲',
    'currency_code'=>'PYG'
    ] );
    
                
    
    Country::create( [
    'id'=>170,
    'name'=>'Peru',
    'code'=>'PE',
    'dial_code'=>'+51',
    'currency_name'=>'Peruvian nuevo sol',
    'currency_symbol'=>'S/.',
    'currency_code'=>'PEN'
    ] );
    
                
    
    Country::create( [
    'id'=>171,
    'name'=>'Philippines',
    'code'=>'PH',
    'dial_code'=>'+63',
    'currency_name'=>'Philippine peso',
    'currency_symbol'=>'₱',
    'currency_code'=>'PHP'
    ] );
    
                
    
    Country::create( [
    'id'=>172,
    'name'=>'Pitcairn',
    'code'=>'PN',
    'dial_code'=>'+872',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>173,
    'name'=>'Poland',
    'code'=>'PL',
    'dial_code'=>'+48',
    'currency_name'=>'Polish z?oty',
    'currency_symbol'=>'zł',
    'currency_code'=>'PLN'
    ] );
    
                
    
    Country::create( [
    'id'=>174,
    'name'=>'Portugal',
    'code'=>'PT',
    'dial_code'=>'+351',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>175,
    'name'=>'Puerto Rico',
    'code'=>'PR',
    'dial_code'=>'+1939',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>176,
    'name'=>'Qatar',
    'code'=>'QA',
    'dial_code'=>'+974',
    'currency_name'=>'Qatari riyal',
    'currency_symbol'=>'ر.ق',
    'currency_code'=>'QAR'
    ] );
    
                
    
    Country::create( [
    'id'=>177,
    'name'=>'Romania',
    'code'=>'RO',
    'dial_code'=>'+40',
    'currency_name'=>'Romanian leu',
    'currency_symbol'=>'lei',
    'currency_code'=>'RON'
    ] );
    
                
    
    Country::create( [
    'id'=>178,
    'name'=>'Russia',
    'code'=>'RU',
    'dial_code'=>'+7',
    'currency_name'=>'Russian ruble',
    'currency_symbol'=>'',
    'currency_code'=>'RUB'
    ] );
    
                
    
    Country::create( [
    'id'=>179,
    'name'=>'Rwanda',
    'code'=>'RW',
    'dial_code'=>'+250',
    'currency_name'=>'Rwandan franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'RWF'
    ] );
    
                
    
    Country::create( [
    'id'=>180,
    'name'=>'Reunion',
    'code'=>'RE',
    'dial_code'=>'+262',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>181,
    'name'=>'Saint Barthelemy',
    'code'=>'BL',
    'dial_code'=>'+590',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>182,
    'name'=>'Saint Helena, Ascens',
    'code'=>'SH',
    'dial_code'=>'+290',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>183,
    'name'=>'Saint Kitts and Nevi',
    'code'=>'KN',
    'dial_code'=>'+1869',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>184,
    'name'=>'Saint Lucia',
    'code'=>'LC',
    'dial_code'=>'+1758',
    'currency_name'=>'East Caribbean dolla',
    'currency_symbol'=>'$',
    'currency_code'=>'XCD'
    ] );
    
                
    
    Country::create( [
    'id'=>185,
    'name'=>'Saint Martin',
    'code'=>'MF',
    'dial_code'=>'+590',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>186,
    'name'=>'Saint Pierre and Miq',
    'code'=>'PM',
    'dial_code'=>'+508',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>187,
    'name'=>'Saint Vincent and th',
    'code'=>'VC',
    'dial_code'=>'+1784',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>188,
    'name'=>'Samoa',
    'code'=>'WS',
    'dial_code'=>'+685',
    'currency_name'=>'Samoan t?l?',
    'currency_symbol'=>'T',
    'currency_code'=>'WST'
    ] );
    
                
    
    Country::create( [
    'id'=>189,
    'name'=>'San Marino',
    'code'=>'SM',
    'dial_code'=>'+378',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>190,
    'name'=>'Sao Tome and Princip',
    'code'=>'ST',
    'dial_code'=>'+239',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>191,
    'name'=>'Saudi Arabia',
    'code'=>'SA',
    'dial_code'=>'+966',
    'currency_name'=>'Saudi riyal',
    'currency_symbol'=>'ر.س',
    'currency_code'=>'SAR'
    ] );
    
                
    
    Country::create( [
    'id'=>192,
    'name'=>'Senegal',
    'code'=>'SN',
    'dial_code'=>'+221',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>193,
    'name'=>'Serbia',
    'code'=>'RS',
    'dial_code'=>'+381',
    'currency_name'=>'Serbian dinar',
    'currency_symbol'=>'дин. or din.',
    'currency_code'=>'RSD'
    ] );
    
                
    
    Country::create( [
    'id'=>194,
    'name'=>'Seychelles',
    'code'=>'SC',
    'dial_code'=>'+248',
    'currency_name'=>'Seychellois rupee',
    'currency_symbol'=>'₨',
    'currency_code'=>'SCR'
    ] );
    
                
    
    Country::create( [
    'id'=>195,
    'name'=>'Sierra Leone',
    'code'=>'SL',
    'dial_code'=>'+232',
    'currency_name'=>'Sierra Leonean leone',
    'currency_symbol'=>'Le',
    'currency_code'=>'SLL'
    ] );
    
                
    
    Country::create( [
    'id'=>196,
    'name'=>'Singapore',
    'code'=>'SG',
    'dial_code'=>'+65',
    'currency_name'=>'Brunei dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'BND'
    ] );
    
                
    
    Country::create( [
    'id'=>197,
    'name'=>'Slovakia',
    'code'=>'SK',
    'dial_code'=>'+421',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>198,
    'name'=>'Slovenia',
    'code'=>'SI',
    'dial_code'=>'+386',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>199,
    'name'=>'Solomon Islands',
    'code'=>'SB',
    'dial_code'=>'+677',
    'currency_name'=>'Solomon Islands doll',
    'currency_symbol'=>'$',
    'currency_code'=>'SBD'
    ] );
    
                
    
    Country::create( [
    'id'=>200,
    'name'=>'Somalia',
    'code'=>'SO',
    'dial_code'=>'+252',
    'currency_name'=>'Somali shilling',
    'currency_symbol'=>'Sh',
    'currency_code'=>'SOS'
    ] );
    
                
    
    Country::create( [
    'id'=>201,
    'name'=>'South Africa',
    'code'=>'ZA',
    'dial_code'=>'+27',
    'currency_name'=>'South African rand',
    'currency_symbol'=>'R',
    'currency_code'=>'ZAR'
    ] );
    
                
    
    Country::create( [
    'id'=>202,
    'name'=>'South Georgia and th',
    'code'=>'GS',
    'dial_code'=>'+500',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>203,
    'name'=>'Spain',
    'code'=>'ES',
    'dial_code'=>'+34',
    'currency_name'=>'Euro',
    'currency_symbol'=>'€',
    'currency_code'=>'EUR'
    ] );
    
                
    
    Country::create( [
    'id'=>204,
    'name'=>'Sri Lanka',
    'code'=>'LK',
    'dial_code'=>'+94',
    'currency_name'=>'Sri Lankan rupee',
    'currency_symbol'=>'Rs or රු',
    'currency_code'=>'LKR'
    ] );
    
                
    
    Country::create( [
    'id'=>205,
    'name'=>'Sudan',
    'code'=>'SD',
    'dial_code'=>'+249',
    'currency_name'=>'Sudanese pound',
    'currency_symbol'=>'ج.س.',
    'currency_code'=>'SDG'
    ] );
    
                
    
    Country::create( [
    'id'=>206,
    'name'=>'Suriname',
    'code'=>'SR',
    'dial_code'=>'+597',
    'currency_name'=>'Surinamese dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'SRD'
    ] );
    
                
    
    Country::create( [
    'id'=>207,
    'name'=>'Svalbard and Jan May',
    'code'=>'SJ',
    'dial_code'=>'+47',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>208,
    'name'=>'Swaziland',
    'code'=>'SZ',
    'dial_code'=>'+268',
    'currency_name'=>'Swazi lilangeni',
    'currency_symbol'=>'L',
    'currency_code'=>'SZL'
    ] );
    
                
    
    Country::create( [
    'id'=>209,
    'name'=>'Sweden',
    'code'=>'SE',
    'dial_code'=>'+46',
    'currency_name'=>'Swedish krona',
    'currency_symbol'=>'kr',
    'currency_code'=>'SEK'
    ] );
    
                
    
    Country::create( [
    'id'=>210,
    'name'=>'Switzerland',
    'code'=>'CH',
    'dial_code'=>'+41',
    'currency_name'=>'Swiss franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'CHF'
    ] );
    
                
    
    Country::create( [
    'id'=>211,
    'name'=>'Syrian Arab Republic',
    'code'=>'SY',
    'dial_code'=>'+963',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>212,
    'name'=>'Taiwan',
    'code'=>'TW',
    'dial_code'=>'+886',
    'currency_name'=>'New Taiwan dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'TWD'
    ] );
    
                
    
    Country::create( [
    'id'=>213,
    'name'=>'Tajikistan',
    'code'=>'TJ',
    'dial_code'=>'+992',
    'currency_name'=>'Tajikistani somoni',
    'currency_symbol'=>'ЅМ',
    'currency_code'=>'TJS'
    ] );
    
                
    
    Country::create( [
    'id'=>214,
    'name'=>'Tanzania, United Rep',
    'code'=>'TZ',
    'dial_code'=>'+255',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>215,
    'name'=>'Thailand',
    'code'=>'TH',
    'dial_code'=>'+66',
    'currency_name'=>'Thai baht',
    'currency_symbol'=>'฿',
    'currency_code'=>'THB'
    ] );
    
                
    
    Country::create( [
    'id'=>216,
    'name'=>'Timor-Leste',
    'code'=>'TL',
    'dial_code'=>'+670',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>217,
    'name'=>'Togo',
    'code'=>'TG',
    'dial_code'=>'+228',
    'currency_name'=>'West African CFA fra',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XOF'
    ] );
    
                
    
    Country::create( [
    'id'=>218,
    'name'=>'Tokelau',
    'code'=>'TK',
    'dial_code'=>'+690',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>219,
    'name'=>'Tonga',
    'code'=>'TO',
    'dial_code'=>'+676',
    'currency_name'=>'Tongan pa?anga',
    'currency_symbol'=>'T$',
    'currency_code'=>'TOP'
    ] );
    
                
    
    Country::create( [
    'id'=>220,
    'name'=>'Trinidad and Tobago',
    'code'=>'TT',
    'dial_code'=>'+1868',
    'currency_name'=>'Trinidad and Tobago ',
    'currency_symbol'=>'$',
    'currency_code'=>'TTD'
    ] );
    
                
    
    Country::create( [
    'id'=>221,
    'name'=>'Tunisia',
    'code'=>'TN',
    'dial_code'=>'+216',
    'currency_name'=>'Tunisian dinar',
    'currency_symbol'=>'د.ت',
    'currency_code'=>'TND'
    ] );
    
                
    
    Country::create( [
    'id'=>222,
    'name'=>'Turkey',
    'code'=>'TR',
    'dial_code'=>'+90',
    'currency_name'=>'Turkish lira',
    'currency_symbol'=>'',
    'currency_code'=>'TRY'
    ] );
    
                
    
    Country::create( [
    'id'=>223,
    'name'=>'Turkmenistan',
    'code'=>'TM',
    'dial_code'=>'+993',
    'currency_name'=>'Turkmenistan manat',
    'currency_symbol'=>'m',
    'currency_code'=>'TMT'
    ] );
    
                
    
    Country::create( [
    'id'=>224,
    'name'=>'Turks and Caicos Isl',
    'code'=>'TC',
    'dial_code'=>'+1649',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>225,
    'name'=>'Tuvalu',
    'code'=>'TV',
    'dial_code'=>'+688',
    'currency_name'=>'Australian dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'AUD'
    ] );
    
                
    
    Country::create( [
    'id'=>226,
    'name'=>'Uganda',
    'code'=>'UG',
    'dial_code'=>'+256',
    'currency_name'=>'Ugandan shilling',
    'currency_symbol'=>'Sh',
    'currency_code'=>'UGX'
    ] );
    
                
    
    Country::create( [
    'id'=>227,
    'name'=>'Ukraine',
    'code'=>'UA',
    'dial_code'=>'+380',
    'currency_name'=>'Ukrainian hryvnia',
    'currency_symbol'=>'₴',
    'currency_code'=>'UAH'
    ] );
    
                
    
    Country::create( [
    'id'=>228,
    'name'=>'United Arab Emirates',
    'code'=>'AE',
    'dial_code'=>'+971',
    'currency_name'=>'United Arab Emirates',
    'currency_symbol'=>'د.إ',
    'currency_code'=>'AED'
    ] );
    
                
    
    Country::create( [
    'id'=>229,
    'name'=>'United Kingdom',
    'code'=>'GB',
    'dial_code'=>'+44',
    'currency_name'=>'British pound',
    'currency_symbol'=>'£',
    'currency_code'=>'GBP'
    ] );
    
                
    
    Country::create( [
    'id'=>230,
    'name'=>'United States',
    'code'=>'US',
    'dial_code'=>'+1',
    'currency_name'=>'United States dollar',
    'currency_symbol'=>'$',
    'currency_code'=>'USD'
    ] );
    
                
    
    Country::create( [
    'id'=>231,
    'name'=>'Uruguay',
    'code'=>'UY',
    'dial_code'=>'+598',
    'currency_name'=>'Uruguayan peso',
    'currency_symbol'=>'$',
    'currency_code'=>'UYU'
    ] );
    
                
    
    Country::create( [
    'id'=>232,
    'name'=>'Uzbekistan',
    'code'=>'UZ',
    'dial_code'=>'+998',
    'currency_name'=>'Uzbekistani som',
    'currency_symbol'=>'',
    'currency_code'=>'UZS'
    ] );
    
                
    
    Country::create( [
    'id'=>233,
    'name'=>'Vanuatu',
    'code'=>'VU',
    'dial_code'=>'+678',
    'currency_name'=>'Vanuatu vatu',
    'currency_symbol'=>'Vt',
    'currency_code'=>'VUV'
    ] );
    
                
    
    Country::create( [
    'id'=>234,
    'name'=>'Venezuela, Bolivaria',
    'code'=>'VE',
    'dial_code'=>'+58',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>235,
    'name'=>'Vietnam',
    'code'=>'VN',
    'dial_code'=>'+84',
    'currency_name'=>'Vietnamese ??ng',
    'currency_symbol'=>'₫',
    'currency_code'=>'VND'
    ] );
    
                
    
    Country::create( [
    'id'=>236,
    'name'=>'Virgin Islands, Brit',
    'code'=>'VG',
    'dial_code'=>'+1284',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>237,
    'name'=>'Virgin Islands, U.S.',
    'code'=>'VI',
    'dial_code'=>'+1340',
    'currency_name'=>'',
    'currency_symbol'=>'',
    'currency_code'=>''
    ] );
    
                
    
    Country::create( [
    'id'=>238,
    'name'=>'Wallis and Futuna',
    'code'=>'WF',
    'dial_code'=>'+681',
    'currency_name'=>'CFP franc',
    'currency_symbol'=>'Fr',
    'currency_code'=>'XPF'
    ] );
    
                
    
    Country::create( [
    'id'=>239,
    'name'=>'Yemen',
    'code'=>'YE',
    'dial_code'=>'+967',
    'currency_name'=>'Yemeni rial',
    'currency_symbol'=>'﷼',
    'currency_code'=>'YER'
    ] );
    
                
    
    Country::create( [
    'id'=>240,
    'name'=>'Zambia',
    'code'=>'ZM',
    'dial_code'=>'+260',
    'currency_name'=>'Zambian kwacha',
    'currency_symbol'=>'ZK',
    'currency_code'=>'ZMW'
    ] );
    
                
    
    Country::create( [
    'id'=>241,
    'name'=>'Zimbabwe',
    'code'=>'ZW',
    'dial_code'=>'+263',
    'currency_name'=>'Botswana pula',
    'currency_symbol'=>'P',
    'currency_code'=>'BWP'
    ] );
    
                
    
    
    }
}
