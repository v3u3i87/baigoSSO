<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

$_arr_timeZone = array(
    "Africa/Abidjan"                    => "非洲 / Abidjan",
    "Africa/Accra"                      => "非洲 / Accra",
    "Africa/Addis_Ababa"                => "非洲 / Addis_Ababa",
    "Africa/Algiers"                    => "非洲 / Algiers",
    "Africa/Asmara"                     => "非洲 / Asmara",
    "Africa/Bamako"                     => "非洲 / Bamako",
    "Africa/Bangui"                     => "非洲 / Bangui",
    "Africa/Banjul"                     => "非洲 / Banjul",
    "Africa/Bissau"                     => "非洲 / Bissau",
    "Africa/Blantyre"                   => "非洲 / Blantyre",
    "Africa/Brazzaville"                => "非洲 / Brazzaville",
    "Africa/Bujumbura"                  => "非洲 / Bujumbura",
    "Africa/Cairo"                      => "非洲 / Cairo",
    "Africa/Casablanca"                 => "非洲 / Casablanca",
    "Africa/Ceuta"                      => "非洲 / Ceuta",
    "Africa/Conakry"                    => "非洲 / Conakry",
    "Africa/Dakar"                      => "非洲 / Dakar",
    "Africa/Dar_es_Salaam"              => "非洲 / Dar_es_Salaam",
    "Africa/Djibouti"                   => "非洲 / Djibouti",
    "Africa/Douala"                     => "非洲 / Douala",
    "Africa/El_Aaiun"                   => "非洲 / El Aaiun",
    "Africa/Freetown"                   => "非洲 / Freetown",
    "Africa/Gaborone"                   => "非洲 / Gaborone",
    "Africa/Harare"                     => "非洲 / Harare",
    "Africa/Johannesburg"               => "非洲 / Johannesburg",
    "Africa/Juba"                       => "非洲 / Juba",
    "Africa/Kampala"                    => "非洲 / Kampala",
    "Africa/Khartoum"                   => "非洲 / Khartoum",
    "Africa/Kigali"                     => "非洲 / Kigali",
    "Africa/Kinshasa"                   => "非洲 / Kinshasa",
    "Africa/Lagos"                      => "非洲 / Lagos",
    "Africa/Libreville"                 => "非洲 / Libreville",
    "Africa/Lome"                       => "非洲 / Lome",
    "Africa/Luanda"                     => "非洲 / Luanda",
    "Africa/Lubumbashi"                 => "非洲 / Lubumbashi",
    "Africa/Lusaka"                     => "非洲 / Lusaka",
    "Africa/Malabo"                     => "非洲 / Malabo",
    "Africa/Maputo"                     => "非洲 / Maputo",
    "Africa/Maseru"                     => "非洲 / Maseru",
    "Africa/Mbabane"                    => "非洲 / Mbabane",
    "Africa/Mogadishu"                  => "非洲 / Mogadishu",
    "Africa/Monrovia"                   => "非洲 / Monrovia",
    "Africa/Nairobi"                    => "非洲 / Nairobi",
    "Africa/Ndjamena"                   => "非洲 / Ndjamena",
    "Africa/Niamey"                     => "非洲 / Niamey",
    "Africa/Nouakchott"                 => "非洲 / Nouakchott",
    "Africa/Ouagadougou"                => "非洲 / Ouagadougou",
    "Africa/Porto-Novo"                 => "非洲 / Porto-Novo",
    "Africa/Sao_Tome"                   => "非洲 / Sao Tome",
    "Africa/Tripoli"                    => "非洲 / Tripoli",
    "Africa/Tunis"                      => "非洲 / Tunis",
    "Africa/Windhoek"                   => "非洲 / Windhoek",
    "America/Adak"                      => "美洲 / Adak",
    "America/Anchorage"                 => "美洲 / Anchorage",
    "America/Anguilla"                  => "美洲 / Anguilla",
    "America/Antigua"                   => "美洲 / Antigua",
    "America/Araguaina"                 => "美洲 / Araguaina",
    "America/Argentina/Buenos_Aires"    => "美洲 / 阿根廷 / Buenos Aires",
    "America/Argentina/Catamarca"       => "美洲 / 阿根廷 / Catamarca",
    "America/Argentina/Cordoba"         => "美洲 / 阿根廷 / Cordoba",
    "America/Argentina/Jujuy"           => "美洲 / 阿根廷 / Jujuy",
    "America/Argentina/La_Rioja"        => "美洲 / 阿根廷 / La Rioja",
    "America/Argentina/Mendoza"         => "美洲 / 阿根廷 / Mendoza",
    "America/Argentina/Rio_Gallegos"    => "美洲 / 阿根廷 / Rio Gallegos",
    "America/Argentina/Salta"           => "美洲 / 阿根廷 / Salta",
    "America/Argentina/San_Juan"        => "美洲 / 阿根廷 / San Juan",
    "America/Argentina/San_Luis"        => "美洲 / 阿根廷 / San Luis",
    "America/Argentina/Tucuman"         => "美洲 / 阿根廷 / Tucuman",
    "America/Argentina/Ushuaia"         => "美洲 / 阿根廷 / Ushuaia",
    "America/Aruba"                     => "美洲 / Aruba",
    "America/Asuncion"                  => "美洲 / Asuncion",
    "America/Atikokan"                  => "美洲 / Atikokan",
    "America/Bahia"                     => "美洲 / Bahia",
    "America/Bahia_Banderas"            => "美洲 / Bahia Banderas",
    "America/Barbados"                  => "美洲 / Barbados",
    "America/Belem"                     => "美洲 / Belem",
    "America/Belize"                    => "美洲 / Belize",
    "America/Blanc-Sablon"              => "美洲 / Blanc-Sablon",
    "America/Boa_Vista"                 => "美洲 / Boa Vista",
    "America/Bogota"                    => "美洲 / Bogota",
    "America/Boise"                     => "美洲 / Boise",
    "America/Cambridge_Bay"             => "美洲 / Cambridge Bay",
    "America/Campo_Grande"              => "美洲 / Campo Grande",
    "America/Cancun"                    => "美洲 / Cancun",
    "America/Caracas"                   => "美洲 / Caracas",
    "America/Cayenne"                   => "美洲 / Cayenne",
    "America/Cayman"                    => "美洲 / Cayman",
    "America/Chicago"                   => "美洲 / Chicago",
    "America/Chihuahua"                 => "美洲 / Chihuahua",
    "America/Costa_Rica"                => "美洲 / Costa Rica",
    "America/Creston"                   => "美洲 / Creston",
    "America/Cuiaba"                    => "美洲 / Cuiaba",
    "America/Curacao"                   => "美洲 / Curacao",
    "America/Danmarkshavn"              => "美洲 / Danmarkshavn",
    "America/Dawson"                    => "美洲 / Dawson",
    "America/Dawson_Creek"              => "美洲 / Dawson Creek",
    "America/Denver"                    => "美洲 / Denver",
    "America/Detroit"                   => "美洲 / Detroit",
    "America/Dominica"                  => "美洲 / Dominica",
    "America/Edmonton"                  => "美洲 / Edmonton",
    "America/Eirunepe"                  => "美洲 / Eirunepe",
    "America/El_Salvador"               => "美洲 / El Salvador",
    "America/Fortaleza"                 => "美洲 / Fortaleza",
    "America/Glace_Bay"                 => "美洲 / Glace Bay",
    "America/Godthab"                   => "美洲 / Godthab",
    "America/Goose_Bay"                 => "美洲 / Goose Bay",
    "America/Grand_Turk"                => "美洲 / Grand Turk",
    "America/Grenada"                   => "美洲 / Grenada",
    "America/Guadeloupe"                => "美洲 / Guadeloupe",
    "America/Guatemala"                 => "美洲 / Guatemala",
    "America/Guayaquil"                 => "美洲 / Guayaquil",
    "America/Guyana"                    => "美洲 / Guyana",
    "America/Halifax"                   => "美洲 / Halifax",
    "America/Havana"                    => "美洲 / Havana",
    "America/Hermosillo"                => "美洲 / Hermosillo",
    "America/Indiana/Indianapolis"      => "美洲 / 印第安纳州 / Indianapolis",
    "America/Indiana/Knox"              => "美洲 / 印第安纳州 / Knox",
    "America/Indiana/Marengo"           => "美洲 / 印第安纳州 / Marengo",
    "America/Indiana/Petersburg"        => "美洲 / 印第安纳州 / Petersburg",
    "America/Indiana/Tell_City"         => "美洲 / 印第安纳州 / Tell City",
    "America/Indiana/Vevay"             => "美洲 / 印第安纳州 / Vevay",
    "America/Indiana/Vincennes"         => "美洲 / 印第安纳州 / Vincennes",
    "America/Indiana/Winamac"           => "美洲 / 印第安纳州 / Winamac",
    "America/Inuvik"                    => "美洲 / Inuvik",
    "America/Iqaluit"                   => "美洲 / Iqaluit",
    "America/Jamaica"                   => "美洲 / Jamaica",
    "America/Juneau"                    => "美洲 / Juneau",
    "America/Kentucky/Louisville"       => "美洲 / 肯塔基州 / Louisville",
    "America/Kentucky/Monticello"       => "美洲 / 肯塔基州 / Monticello",
    "America/Kralendijk"                => "美洲 / Kralendijk",
    "America/La_Paz"                    => "美洲 / La Paz",
    "America/Lima"                      => "美洲 / Lima",
    "America/Los_Angeles"               => "美洲 / 洛杉矶",
    "America/Lower_Princes"             => "美洲 / Lower Princes",
    "America/Maceio"                    => "美洲 / Maceio",
    "America/Managua"                   => "美洲 / Managua",
    "America/Manaus"                    => "美洲 / Manaus",
    "America/Marigot"                   => "美洲 / Marigot",
    "America/Martinique"                => "美洲 / Martinique",
    "America/Matamoros"                 => "美洲 / Matamoros",
    "America/Mazatlan"                  => "美洲 / Mazatlan",
    "America/Menominee"                 => "美洲 / Menominee",
    "America/Merida"                    => "美洲 / Merida",
    "America/Metlakatla"                => "美洲 / Metlakatla",
    "America/Mexico_City"               => "美洲 / 墨西哥城",
    "America/Miquelon"                  => "美洲 / Miquelon",
    "America/Moncton"                   => "美洲 / Moncton",
    "America/Monterrey"                 => "美洲 / Monterrey",
    "America/Montevideo"                => "美洲 / Montevideo",
    "America/Montserrat"                => "美洲 / Montserrat",
    "America/Nassau"                    => "美洲 / Nassau",
    "America/New_York"                  => "美洲 / 纽约",
    "America/Nipigon"                   => "美洲 / Nipigon",
    "America/Nome"                      => "美洲 / Nome",
    "America/Noronha"                   => "美洲 / Noronha",
    "America/North_Dakota/Beulah"       => "美洲 / 北达科他州 / Beulah",
    "America/North_Dakota/Center"       => "美洲 / 北达科他州 / Center",
    "America/North_Dakota/New_Salem"    => "美洲 / 北达科他州 / New Salem",
    "America/Ojinaga"                   => "美洲 / Ojinaga",
    "America/Panama"                    => "美洲 / Panama",
    "America/Pangnirtung"               => "美洲 / Pangnirtung",
    "America/Paramaribo"                => "美洲 / Paramaribo",
    "America/Phoenix"                   => "美洲 / 凤凰城",
    "America/Port-au-Prince"            => "美洲 / Port-au-Prince",
    "America/Port_of_Spain"             => "美洲 / Port of Spain",
    "America/Porto_Velho"               => "美洲 / Porto Velho",
    "America/Puerto_Rico"               => "美洲 / Puerto Rico",
    "America/Rainy_River"               => "美洲 / Rainy River",
    "America/Rankin_Inlet"              => "美洲 / Rankin Inlet",
    "America/Recife"                    => "美洲 / Recife",
    "America/Regina"                    => "美洲 / Regina",
    "America/Resolute"                  => "美洲 / Resolute",
    "America/Rio_Branco"                => "美洲 / Rio Branco",
    "America/Santa_Isabel"              => "美洲 / Santa Isabel",
    "America/Santarem"                  => "美洲 / Santarem",
    "America/Santiago"                  => "美洲 / Santiago",
    "America/Santo_Domingo"             => "美洲 / Santo Domingo",
    "America/Sao_Paulo"                 => "美洲 / Sao Paulo",
    "America/Scoresbysund"              => "美洲 / Scoresbysund",
    "America/Sitka"                     => "美洲 / Sitka",
    "America/St_Barthelemy"             => "美洲 / St Barthelemy",
    "America/St_Johns"                  => "美洲 / St Johns",
    "America/St_Kitts"                  => "美洲 / St Kitts",
    "America/St_Lucia"                  => "美洲 / St Lucia",
    "America/St_Thomas"                 => "美洲 / St Thomas",
    "America/St_Vincent"                => "美洲 / St Vincent",
    "America/Swift_Current"             => "美洲 / Swift Current",
    "America/Tegucigalpa"               => "美洲 / Tegucigalpa",
    "America/Thule"                     => "美洲 / Thule",
    "America/Thunder_Bay"               => "美洲 / Thunder Bay",
    "America/Tijuana"                   => "美洲 / Tijuana",
    "America/Toronto"                   => "美洲 / 多伦多",
    "America/Tortola"                   => "美洲 / Tortola",
    "America/Vancouver"                 => "美洲 / Vancouver",
    "America/Whitehorse"                => "美洲 / Whitehorse",
    "America/Winnipeg"                  => "美洲 / Winnipeg",
    "America/Yakutat"                   => "美洲 / Yakutat",
    "America/Yellowknife"               => "美洲 / Yellowknife",
    "Antarctica/Casey"                  => "南极洲 / Casey",
    "Antarctica/Davis"                  => "南极洲 / Davis",
    "Antarctica/DumontDUrville"         => "南极洲 / DumontDUrville",
    "Antarctica/Macquarie"              => "南极洲 / Macquarie",
    "Antarctica/Mawson"                 => "南极洲 / Mawson",
    "Antarctica/McMurdo"                => "南极洲 / McMurdo",
    "Antarctica/Palmer"                 => "南极洲 / Palmer",
    "Antarctica/Rothera"                => "南极洲 / Rothera",
    "Antarctica/Syowa"                  => "南极洲 / Syowa",
    "Antarctica/Troll"                  => "南极洲 / Troll",
    "Antarctica/Vostok"                 => "南极洲 / Vostok",
    "Arctic/Longyearbyen"               => "北极 / Longyearbyen",
    "Asia/Aden"                         => "亚洲 / Aden",
    "Asia/Almaty"                       => "亚洲 / Almaty",
    "Asia/Amman"                        => "亚洲 / Amman",
    "Asia/Anadyr"                       => "亚洲 / Anadyr",
    "Asia/Aqtau"                        => "亚洲 / Aqtau",
    "Asia/Aqtobe"                       => "亚洲 / Aqtobe",
    "Asia/Ashgabat"                     => "亚洲 / Ashgabat",
    "Asia/Baghdad"                      => "亚洲 / Baghdad",
    "Asia/Bahrain"                      => "亚洲 / Bahrain",
    "Asia/Baku"                         => "亚洲 / Baku",
    "Asia/Bangkok"                      => "亚洲 / Bangkok",
    "Asia/Beirut"                       => "亚洲 / Beirut",
    "Asia/Bishkek"                      => "亚洲 / Bishkek",
    "Asia/Brunei"                       => "亚洲 / Brunei",
    "Asia/Chita"                        => "亚洲 / Chita",
    "Asia/Choibalsan"                   => "亚洲 / Choibalsan",
    "Asia/Colombo"                      => "亚洲 / Colombo",
    "Asia/Damascus"                     => "亚洲 / Damascus",
    "Asia/Dhaka"                        => "亚洲 / Dhaka",
    "Asia/Dili"                         => "亚洲 / Dili",
    "Asia/Dubai"                        => "亚洲 / Dubai",
    "Asia/Dushanbe"                     => "亚洲 / Dushanbe",
    "Asia/Gaza"                         => "亚洲 / Gaza",
    "Asia/Hebron"                       => "亚洲 / Hebron",
    "Asia/Ho_Chi_Minh"                  => "亚洲 / 胡志明市",
    "Asia/Hong_Kong"                    => "亚洲 / 香港",
    "Asia/Hovd"                         => "亚洲 / Hovd",
    "Asia/Irkutsk"                      => "亚洲 / Irkutsk",
    "Asia/Jakarta"                      => "亚洲 / Jakarta",
    "Asia/Jayapura"                     => "亚洲 / Jayapura",
    "Asia/Jerusalem"                    => "亚洲 / Jerusalem",
    "Asia/Kabul"                        => "亚洲 / Kabul",
    "Asia/Kamchatka"                    => "亚洲 / Kamchatka",
    "Asia/Karachi"                      => "亚洲 / Karachi",
    "Asia/Kathmandu"                    => "亚洲 / Kathmandu",
    "Asia/Khandyga"                     => "亚洲 / Khandyga",
    "Asia/Kolkata"                      => "亚洲 / Kolkata",
    "Asia/Krasnoyarsk"                  => "亚洲 / Krasnoyarsk",
    "Asia/Kuala_Lumpur"                 => "亚洲 / Kuala Lumpur",
    "Asia/Kuching"                      => "亚洲 / Kuching",
    "Asia/Kuwait"                       => "亚洲 / Kuwait",
    "Asia/Macau"                        => "亚洲 / 澳门",
    "Asia/Magadan"                      => "亚洲 / Magadan",
    "Asia/Makassar"                     => "亚洲 / Makassar",
    "Asia/Manila"                       => "亚洲 / Manila",
    "Asia/Muscat"                       => "亚洲 / Muscat",
    "Asia/Nicosia"                      => "亚洲 / Nicosia",
    "Asia/Novokuznetsk"                 => "亚洲 / Novokuznetsk",
    "Asia/Novosibirsk"                  => "亚洲 / Novosibirsk",
    "Asia/Omsk"                         => "亚洲 / Omsk",
    "Asia/Oral"                         => "亚洲 / Oral",
    "Asia/Phnom_Penh"                   => "亚洲 / Phnom Penh",
    "Asia/Pontianak"                    => "亚洲 / Pontianak",
    "Asia/Pyongyang"                    => "亚洲 / Pyongyang",
    "Asia/Qatar"                        => "亚洲 / Qatar",
    "Asia/Qyzylorda"                    => "亚洲 / Qyzylorda",
    "Asia/Rangoon"                      => "亚洲 / Rangoon",
    "Asia/Riyadh"                       => "亚洲 / Riyadh",
    "Asia/Sakhalin"                     => "亚洲 / Sakhalin",
    "Asia/Samarkand"                    => "亚洲 / Samarkand",
    "Asia/Seoul"                        => "亚洲 / 首尔",
    "PRC"                               => "亚洲 / 北京",
    "Asia/Shanghai"                     => "亚洲 / 上海",
    "Asia/Singapore"                    => "亚洲 / 新加坡",
    "Asia/Srednekolymsk"                => "亚洲 / Srednekolymsk",
    "Asia/Taipei"                       => "亚洲 / 台北",
    "Asia/Tashkent"                     => "亚洲 / Tashkent",
    "Asia/Tbilisi"                      => "亚洲 / Tbilisi",
    "Asia/Tehran"                       => "亚洲 / Tehran",
    "Asia/Thimphu"                      => "亚洲 / Thimphu",
    "Asia/Tokyo"                        => "亚洲 / 东京",
    "Asia/Ulaanbaatar"                  => "亚洲 / Ulaanbaatar",
    "Asia/Urumqi"                       => "亚洲 / Urumqi",
    "Asia/Ust-Nera"                     => "亚洲 / Ust-Nera",
    "Asia/Vientiane"                    => "亚洲 / Vientiane",
    "Asia/Vladivostok"                  => "亚洲 / Vladivostok",
    "Asia/Yakutsk"                      => "亚洲 / Yakutsk",
    "Asia/Yekaterinburg"                => "亚洲 / Yekaterinburg",
    "Asia/Yerevan"                      => "亚洲 / Yerevan",
    "Atlantic/Azores"                   => "大西洋 / Azores",
    "Atlantic/Bermuda"                  => "大西洋 / Bermuda",
    "Atlantic/Canary"                   => "大西洋 / Canary",
    "Atlantic/Cape_Verde"               => "大西洋 / Cape Verde",
    "Atlantic/Faroe"                    => "大西洋 / Faroe",
    "Atlantic/Madeira"                  => "大西洋 / Madeira",
    "Atlantic/Reykjavik"                => "大西洋 / Reykjavik",
    "Atlantic/South_Georgia"            => "大西洋 / South Georgia",
    "Atlantic/St_Helena"                => "大西洋 / St Helena",
    "Atlantic/Stanley"                  => "大西洋 / Stanley",
    "Australia/Adelaide"                => "澳洲 / Adelaide",
    "Australia/Brisbane"                => "澳洲 / Brisbane",
    "Australia/Broken_Hill"             => "澳洲 / Broken Hill",
    "Australia/Currie"                  => "澳洲 / Currie",
    "Australia/Darwin"                  => "澳洲 / Darwin",
    "Australia/Eucla"                   => "澳洲 / Eucla",
    "Australia/Hobart"                  => "澳洲 / Hobart",
    "Australia/Lindeman"                => "澳洲 / Lindeman",
    "Australia/Lord_Howe"               => "澳洲 / Lord Howe",
    "Australia/Melbourne"               => "澳洲 / Melbourne",
    "Australia/Perth"                   => "澳洲 / Perth",
    "Australia/Sydney"                  => "澳洲 / 悉尼",
    "Europe/Amsterdam"                  => "欧洲 / Amsterdam",
    "Europe/Andorra"                    => "欧洲 / Andorra",
    "Europe/Athens"                     => "欧洲 / Athens",
    "Europe/Belgrade"                   => "欧洲 / Belgrade",
    "Europe/Berlin"                     => "欧洲 / 柏林",
    "Europe/Bratislava"                 => "欧洲 / Bratislava",
    "Europe/Brussels"                   => "欧洲 / Brussels",
    "Europe/Bucharest"                  => "欧洲 / Bucharest",
    "Europe/Budapest"                   => "欧洲 / Budapest",
    "Europe/Busingen"                   => "欧洲 / Busingen",
    "Europe/Chisinau"                   => "欧洲 / Chisinau",
    "Europe/Copenhagen"                 => "欧洲 / Copenhagen",
    "Europe/Dublin"                     => "欧洲 / Dublin",
    "Europe/Gibraltar"                  => "欧洲 / Gibraltar",
    "Europe/Guernsey"                   => "欧洲 / Guernsey",
    "Europe/Helsinki"                   => "欧洲 / Helsinki",
    "Europe/Isle_of_Man"                => "欧洲 / Isle of Man",
    "Europe/Istanbul"                   => "欧洲 / Istanbul",
    "Europe/Jersey"                     => "欧洲 / Jersey",
    "Europe/Kaliningrad"                => "欧洲 / Kaliningrad",
    "Europe/Kiev"                       => "欧洲 / Kiev",
    "Europe/Lisbon"                     => "欧洲 / Lisbon",
    "Europe/Ljubljana"                  => "欧洲 / Ljubljana",
    "Europe/London"                     => "欧洲 / 伦敦",
    "Europe/Luxembourg"                 => "欧洲 / Luxembourg",
    "Europe/Madrid"                     => "欧洲 / Madrid",
    "Europe/Malta"                      => "欧洲 / Malta",
    "Europe/Mariehamn"                  => "欧洲 / Mariehamn",
    "Europe/Minsk"                      => "欧洲 / Minsk",
    "Europe/Monaco"                     => "欧洲 / Monaco",
    "Europe/Moscow"                     => "欧洲 / Moscow",
    "Europe/Oslo"                       => "欧洲 / Oslo",
    "Europe/Paris"                      => "欧洲 / 巴黎",
    "Europe/Podgorica"                  => "欧洲 / Podgorica",
    "Europe/Prague"                     => "欧洲 / Prague",
    "Europe/Riga"                       => "欧洲 / Riga",
    "Europe/Rome"                       => "欧洲 / 罗马",
    "Europe/Samara"                     => "欧洲 / Samara",
    "Europe/San_Marino"                 => "欧洲 / San Marino",
    "Europe/Sarajevo"                   => "欧洲 / Sarajevo",
    "Europe/Simferopol"                 => "欧洲 / Simferopol",
    "Europe/Skopje"                     => "欧洲 / Skopje",
    "Europe/Sofia"                      => "欧洲 / Sofia",
    "Europe/Stockholm"                  => "欧洲 / Stockholm",
    "Europe/Tallinn"                    => "欧洲 / Tallinn",
    "Europe/Tirane"                     => "欧洲 / Tirane",
    "Europe/Uzhgorod"                   => "欧洲 / Uzhgorod",
    "Europe/Vaduz"                      => "欧洲 / Vaduz",
    "Europe/Vatican"                    => "欧洲 / Vatican",
    "Europe/Vienna"                     => "欧洲 / Vienna",
    "Europe/Vilnius"                    => "欧洲 / Vilnius",
    "Europe/Volgograd"                  => "欧洲 / Volgograd",
    "Europe/Warsaw"                     => "欧洲 / Warsaw",
    "Europe/Zagreb"                     => "欧洲 / Zagreb",
    "Europe/Zaporozhye"                 => "欧洲 / Zaporozhye",
    "Europe/Zurich"                     => "欧洲 / Zurich",
    "Indian/Antananarivo"               => "印度洋 / Antananarivo",
    "Indian/Chagos"                     => "印度洋 / Chagos",
    "Indian/Christmas"                  => "印度洋 / 圣诞岛",
    "Indian/Cocos"                      => "印度洋 / Cocos",
    "Indian/Comoro"                     => "印度洋 / Comoro",
    "Indian/Kerguelen"                  => "印度洋 / Kerguelen",
    "Indian/Mahe"                       => "印度洋 / Mahe",
    "Indian/Maldives"                   => "印度洋 / Maldives",
    "Indian/Mauritius"                  => "印度洋 / Mauritius",
    "Indian/Mayotte"                    => "印度洋 / Mayotte",
    "Indian/Reunion"                    => "印度洋 / Reunion",
    "Pacific/Apia"                      => "太平洋 / Apia",
    "Pacific/Auckland"                  => "太平洋 / Auckland",
    "Pacific/Bougainville"              => "太平洋 / Bougainville",
    "Pacific/Chatham"                   => "太平洋 / Chatham",
    "Pacific/Chuuk"                     => "太平洋 / Chuuk",
    "Pacific/Easter"                    => "太平洋 / Easter",
    "Pacific/Efate"                     => "太平洋 / Efate",
    "Pacific/Enderbury"                 => "太平洋 / Enderbury",
    "Pacific/Fakaofo"                   => "太平洋 / Fakaofo",
    "Pacific/Fiji"                      => "太平洋 / 斐济",
    "Pacific/Funafuti"                  => "太平洋 / Funafuti",
    "Pacific/Galapagos"                 => "太平洋 / Galapagos",
    "Pacific/Gambier"                   => "太平洋 / Gambier",
    "Pacific/Guadalcanal"               => "太平洋 / Guadalcanal",
    "Pacific/Guam"                      => "太平洋 / 关岛",
    "Pacific/Honolulu"                  => "太平洋 / 檀香山",
    "Pacific/Johnston"                  => "太平洋 / Johnston",
    "Pacific/Kiritimati"                => "太平洋 / Kiritimati",
    "Pacific/Kosrae"                    => "太平洋 / Kosrae",
    "Pacific/Kwajalein"                 => "太平洋 / Kwajalein",
    "Pacific/Majuro"                    => "太平洋 / Majuro",
    "Pacific/Marquesas"                 => "太平洋 / Marquesas",
    "Pacific/Midway"                    => "太平洋 / 中途岛",
    "Pacific/Nauru"                     => "太平洋 / Nauru",
    "Pacific/Niue"                      => "太平洋 / Niue",
    "Pacific/Norfolk"                   => "太平洋 / Norfolk",
    "Pacific/Noumea"                    => "太平洋 / Noumea",
    "Pacific/Pago_Pago"                 => "太平洋 / Pago Pago",
    "Pacific/Palau"                     => "太平洋 / 帕劳",
    "Pacific/Pitcairn"                  => "太平洋 / Pitcairn",
    "Pacific/Pohnpei"                   => "太平洋 / Pohnpei",
    "Pacific/Port_Moresby"              => "太平洋 / Port Moresby",
    "Pacific/Rarotonga"                 => "太平洋 / Rarotonga",
    "Pacific/Saipan"                    => "太平洋 / 塞班岛",
    "Pacific/Tahiti"                    => "太平洋 / Tahiti",
    "Pacific/Tarawa"                    => "太平洋 / Tarawa",
    "Pacific/Tongatapu"                 => "太平洋 / Tongatapu",
    "Pacific/Wake"                      => "太平洋 / Wake",
    "Pacific/Wallis"                    => "太平洋 / Wallis",
    "UTC"                               => "世界标准时间",
);

return array(
	"base" => array(
		"title"   => "基本设置",
		"list"    => array(
    		"BG_SITE_NAME" => array(
    			"label"      => "名称",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => BG_SITE_NAME,
    		),
    		"BG_SITE_DOMAIN" => array(
    			"label"      => "域名",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => $_SERVER["SERVER_NAME"],
    		),
    		"BG_SITE_URL" => array(
    			"label"      => "首页 URL ",
    			"type"       => "str",
    			"format"     => "url",
    			"min"        => 1,
    			"default"    => "http://" . $_SERVER["SERVER_NAME"],
    			"note"       => "末尾请勿加 /",
    		),
    		"BG_SITE_PERPAGE" => array(
    			"label"      => "每页显示数",
    			"type"       => "str",
    			"format"     => "int",
    			"min"        => 1,
    			"default"    => 30,
    		),
    		"BG_SITE_TIMEZONE" => array(
    			"label"      => "时区",
    			"type"       => "select",
    			"min"        => 1,
    			"option"     => $_arr_timeZone,
    			"default"    => "Asia/Shanghai",
    		),
    		"BG_SITE_DATE" => array(
    			"label"  => "日期格式",
    			"type"   => "select",
    			"min"    => 1,
    			"option" => array(
    				"Y-m-d"     => date("Y-m-d"),
    				"y-m-d"     => date("y-m-d"),
    				"M. d, Y"   => date("M. d, Y"),
    			),
    			"default" => "Y-m-d",
    		),
    		"BG_SITE_DATESHORT" => array(
    			"label"  => "短日期格式",
    			"type"   => "select",
    			"min"    => 1,
    			"option" => array(
    				"m-d"   => date("m-d"),
    				"m-d"   => date("m-d"),
    				"M. d"  => date("M. d"),
    			),
    			"default" => "Y-m-d",
    		),
    		"BG_SITE_TIME" => array(
    			"label"  => "时间格式",
    			"type"   => "select",
    			"min"    => 1,
    			"option" => array(
    				"H:i"       => date("H:i"),
    				"h:i A"     => date("h:i A"),
    				"H:i:s"     => date("H:i:s"),
    				"h:i:s A"   => date("h:i:s A"),
    			),
    			"default" => "H:i:s",
    		),
    		"BG_SITE_TIMESHORT" => array(
    			"label"  => "短时间格式",
    			"type"   => "select",
    			"min"    => 1,
    			"option" => array(
    				"H:i"   => date("H:i"),
    				"h:i A" => date("h:i A"),
    			),
    			"default" => "H:i",
    		),
		),
	),
	"dbconfig" => array(
		"title"   => "数据库设置",
		"list"    => array(
            "BG_DB_HOST" => array(
    			"label"      => "数据库服务器",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "localhost",
    		),
            "BG_DB_PORT" => array(
    			"label"      => "服务器端口",
    			"type"       => "str",
    			"format"     => "int",
    			"min"        => 1,
    			"default"    => 3306,
    		),
            "BG_DB_NAME" => array(
    			"label"      => "数据库名称",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "baigo_ads",
    		),
            "BG_DB_USER" => array(
    			"label"      => "用户名",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "baigo_ads",
    		),
            "BG_DB_PASS" => array(
    			"label"      => "密码",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "******",
    		),
            "BG_DB_CHARSET" => array(
    			"label"      => "数据编码",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "utf8",
    		),
            "BG_DB_TABLE" => array(
    			"label"      => "数据表前缀",
    			"type"       => "str",
    			"format"     => "text",
    			"min"        => 1,
    			"default"    => "ads_",
    		),
		),
    ),
	"reg" => array(
		"title"   => "注册设置",
		"list"    => array(
    		"BG_REG_ACC" => array(
    			"label"  => "允许注册",
    			"type"   => "radio",
    			"min"    => 1,
    			"option" => array(
    				"enable"    => array(
    					"value"    => "允许"
    				),
    				"disable"   => array(
    					"value"    => "禁止"
    				),
    			),
    			"default" => "enable",
    		),
    		"BG_REG_NEEDMAIL" => array(
    			"label"  => "强制输入 E-mail",
    			"type"   => "radio",
    			"min"    => 1,
    			"option" => array(
    				"on"    => array(
    					"value"    => "开启"
    				),
    				"off"   => array(
    					"value"    => "关闭"
    				),
    			),
    			"default" => "off",
    		),
    		"BG_REG_ONEMAIL" => array(
    			"label"  => "允许 E-mail 地址重复",
    			"type"   => "radio",
    			"min"    => 1,
    			"option" => array(
    				"true"    => array(
    					"value"    => "是"
    				),
    				"false"   => array(
    					"value"    => "否"
    				),
    			),
    			"default" => "false",
    		),
    		"BG_ACC_MAIL" => array(
    			"label"      => "允许注册的 E-mail",
    			"type"       => "textarea",
    			"format"     => "text",
    			"min"        => 0,
    			"default"    => "",
    			"note"       => "只填域名部分，每行一个域名，如 @hotmail.com",
    		),
    		"BG_BAD_MAIL" => array(
    			"label"      => "禁止注册的 E-mail",
    			"type"       => "textarea",
    			"format"     => "text",
    			"min"        => 0,
    			"default"    => "",
    			"note"       => "只填域名部分，每行一个域名，如 @hotmail.com",
    		),
    		"BG_BAD_NAME" => array(
    			"label"      => "禁止注册的用户名",
    			"type"       => "textarea",
    			"format"     => "text",
    			"min"        => 0,
    			"default"    => "",
    			"note"       => "每行一个用户名，可使用通配符 * 如 *版主*",
    		),
		),
	),
	/*"mail" => array(
		"BG_MAIL_FROM" => array(
			"label"      => "邮件来源地址",
			"type"       => "str",
			"format"     => "email",
			"min"        => 1,
			"default"    => "sys@" . $_SERVER["SERVER_NAME"],
		),
		"BG_MAIL_HOST" => array(
			"label"      => "SMTP 服务器",
			"type"       => "str",
			"format"     => "text",
			"min"        => 1,
			"default"    => "smtp." . $_SERVER["SERVER_NAME"],
		),
		"BG_MAIL_PORT" => array(
			"label"      => "SMTP 服务器端口",
			"type"       => "str",
			"format"     => "int",
			"min"        => 1,
			"default"    => 25,
		),
		"BG_MAIL_AUTH" => array(
			"label"  => "SMTP 服务器要求身份验证",
			"type"   => "radio",
			"min"    => 1,
			"option" => array(
				"true"    => array(
					"value"    => "是"
				),
				"false"   => array(
					"value"    => "否"
				),
			),
			"default" => "true",
		),
		"BG_MAIL_USER" => array(
			"label"      => "SMTP 身份验证用户名",
			"type"       => "str",
			"format"     => "text",
			"min"        => 0,
			"default"    => "sys@" . $_SERVER["SERVER_NAME"],
		),
		"BG_MAIL_PASS" => array(
			"label"      => "SMTP 身份验证密码",
			"type"       => "str",
			"format"     => "text",
			"min"        => 0,
			"default"    => "password",
		),
	),*/
);

