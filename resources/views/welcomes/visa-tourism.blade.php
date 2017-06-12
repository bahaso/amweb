@extends( 'welcomes._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Welcome To Indonesia', 
                'url' => route( 'f.welcomes.visa' ) 
            ],
            [ 
                'label' => 'Free Tourism Visa', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
    <h1 class="title fw600">
        Free Tourist Visa
    </h1>
    <div class="content">
        <p>
            By Presidential Decree of 21 of 2016 dated on 2 March 2016 on Visa Free, replacing Presidential Regulation Number 104/2015 on Amendments to Presidential Regulation Number 69/2015 on Visa Free, Indonesia now provides 
            <span class="txt-bold">special Short Stay Visa Free facilities for tourists who are nationals of a total 169 countries who wish to travel to Indonesia.</span>
        </p>
        <p>
            Tourist Visa Free Facilities are 
            <span class="txt-bold">valid for 30 days</span>, are <span class="txt-bold">non-extendable</span> and cannot be transferred into any other type of of stay permit. 
        </p>
        <p>
            The visa exemption facility can be used for tourism, family visit, social visit, art and cultural, government duty, to deliver a speech or attend a seminar, international exhibition,meetings with head office or representative office in Indonesia, or transit.
        </p>
        <section class="faq">
            <ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">
                            The following are the Countries granted Visa Free Facilities according to Presidential Decree No. 21 of 2016:
                        </h4>
                    </div>
                    <div class="content">
                        <table style="width:100%;">
                            <tr>
                                <td>
                                    1.  Albania
                                </td>
                                <td>
                                    30. Cape Verde
                                </td>
                                <td>
                                    59. Haiti
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2.  Algeria
                                </td>
                                <td>
                                    31. Chad
                                </td>
                                <td>
                                    60. Honduras
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3.  Andorra
                                </td>
                                <td>
                                    32. Chile
                                </td>
                                <td>
                                    61. Hong Kong
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4.  Angola
                                </td>
                                <td>
                                    33. China
                                </td>
                                <td>
                                    62. Hungary
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5.  Antigua and Barbuda
                                </td>
                                <td>
                                    34. Comoros
                                </td>
                                <td>
                                    63. Iceland
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6.  Argentina
                                </td>
                                <td>
                                    35. Costa Rica
                                </td>
                                <td>
                                    64. India
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    7.  Armenia
                                </td>
                                <td>
                                    36. Croatia
                                </td>
                                <td>
                                    65. Ireland
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    8.  Australia
                                </td>
                                <td>
                                    37. Cuba
                                </td>
                                <td>
                                    66. Italy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    9.  Austria
                                </td>
                                <td>
                                    38. Cyprus
                                </td>
                                <td>
                                    67. Ivory Coast
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    10. Azerbaijan
                                </td>
                                <td>
                                    39. Czech Republic
                                </td>
                                <td>
                                    68. Jamaica
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    11. Bahamas
                                </td>
                                <td>
                                   40.  Denmark 
                                </td>
                                <td>
                                    69. Japan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    12. Bahrain
                                </td>
                                <td>
                                    41. Dominica (Commonwealth)
                                </td>
                                <td>
                                    70. Jordan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    13. Bangladesh
                                </td>
                                <td>
                                    42. Dominican Republic
                                </td>
                                <td>
                                    71. Kazakhstan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    14. Barbados
                                </td>
                                <td>
                                    43. Ecuador
                                </td>
                                <td>
                                    72. Kenya
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    15. Belarus
                                </td>
                                <td>
                                    44. Egypt
                                </td>
                                <td>
                                    73. Kiribati
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    16. Belgium
                                </td>
                                <td>
                                    45. El Salvador
                                </td>
                                <td>
                                    74. Kuwait
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    17. Belize
                                </td>
                                <td>
                                    46. Estonia
                                </td>
                                <td>
                                    75. Kyrgyzstan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    18. Benin
                                </td>
                                <td>
                                    47. Fiji
                                </td>
                                <td>
                                    76. Lao, People’s Democratic 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    19. Bhutan
                                </td>
                                <td>
                                    48. Finland
                                </td>
                                <td>
                                    77. Latvia
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20. Bolivia
                                </td>
                                <td>
                                    49. France
                                </td>
                                <td>
                                    78. Lebanon
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    21. Bosnia & Herzegovina
                                </td>
                                <td>
                                    50. Gabon
                                </td>
                                <td>
                                    79. Lesotho
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22. Botswana
                                </td>
                                <td>
                                    51. Gambia
                                </td>
                                <td>
                                    80. Liechtenstein
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    23. Brazil
                                </td>
                                <td>
                                    52. Georgia
                                </td>
                                <td>
                                    81. Lithuania
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    24. Brunei Darussalam
                                </td>
                                <td>
                                    53. Germany
                                </td>
                                <td>
                                    82. Luxemburg
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    25. Bulgaria
                                </td>
                                <td>
                                    54. Ghana
                                </td>
                                <td>
                                    83. Macao 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    26. Burkina Faso
                                </td>
                                <td>
                                    55. Greece
                                </td>
                                <td>
                                    84. Macedonia
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    27. Burundi
                                </td>
                                <td>
                                    56. Grenada
                                </td>
                                <td>
                                    85. Madagascar
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    28. Cambodia
                                </td>
                                <td>
                                    57. Guatemala
                                </td>
                                <td>
                                    86. Malawi
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    29. Canada
                                </td>
                                <td>
                                    58. Guyana
                                </td>
                                <td>
                                    87. Malaysia
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    88. Maldives
                                </td>
                            </tr>
                        </table>
                        <table style="width:100%;">
                            <tr>
                                <td>
                                    89. Mali
                                </td>
                                <td>
                                    118.    Puerto Rico
                                </td>
                                <td>
                                    144.    Switzerland
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    90. Malta
                                </td>
                                <td>
                                    119.    Qatar
                                </td>
                                <td>
                                    145.    Taiwan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    91. Marshall Islands
                                </td>
                                <td>
                                    120.    Romania
                                </td>
                                <td>
                                    146.    Tajikistan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    92. Mauritania
                                </td>
                                <td>
                                    121.    Russian Federation
                                </td>
                                <td>
                                    147.    Tanzania
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    93. Mauritius
                                </td>
                                <td>
                                    122.    Rwanda
                                </td>
                                <td>
                                     148.    Thailand
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    94. Mexico
                                </td>
                                <td>
                                    123.    Saint Kitts and Nevis
                                </td>
                                <td>
                                   149.    Timor Leste
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    95. Moldova    
                                </td>
                                <td>
                                    124.    Saint Lucia
                                </td>
                                <td>
                                     150.    Togo
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    96. Monaco
                                </td>
                                <td>
                                    125.    Saint Vincent and Grenadines
                                </td>
                                <td>
                                   151.    Tonga
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    97. Mongolia    
                                </td>
                                <td>
                                    126.    Samoa
                                </td>
                                <td>
                                    152.    Trinidad and Tobago
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    98. Morocco
                                </td>
                                <td>
                                    127.    San Marino
                                </td>
                                <td>
                                    153.    Tunisia
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    99. Mozambique
                                </td>
                                <td>
                                    128.    Sao Tome and Principe
                                </td>
                                <td>
                                    154.    Turkey
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    100.    Myanmar
                                </td>
                                <td>
                                    129.    Saudi Arabia
                                </td>
                                <td>
                                     155.    Turkmenistan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    101.    Namibia
                                </td>
                                <td>
                                    130.    Senegal
                                </td>
                                <td>
                                   156.    Tuvalu
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    102.    Nauru
                                </td>
                                <td>
                                    131.    Serbia
                                </td>
                                <td>
                                    157.    Uganda
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    103.    Nepal
                                </td>
                                <td>
                                    132.    Seychelles
                                </td>
                                <td>
                                    158.    Ukraine
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    104.    Netherlands
                                </td>
                                <td>
                                    133.    Singapore
                                </td>
                                <td>
                                    159.    United Arab Emirates
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    105.    New Zealand
                                </td>
                                <td>
                                    134.    Slovakia
                                </td>
                                <td>
                                    160.    United Kingdom
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    106.    Nicaragua
                                </td>
                                <td>
                                    135.    Slovenia
                                </td>
                                <td>
                                    161.    United States 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    107.    Norway
                                </td>
                                <td>
                                    136.    Solomon Islands
                                </td>
                                <td>
                                     162.    Uruguay
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    108.    Oman
                                </td>
                                <td>
                                    137.    South Africa
                                </td>
                                <td>
                                   163.    Uzbekistan
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    109.    Palau
                                </td>
                                <td>
                                    138.    South Korea
                                </td>
                                <td>
                                    164.    Vanuatu
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    110.    Palestine
                                </td>
                                <td>
                                    139.    Spain
                                </td>
                                <td>
                                     165.    Vatican City State
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    111.    Panama
                                </td>
                                <td>
                                    140.    Sri Lanka
                                </td>
                                <td>
                                   166.    Venezuela
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    112.    Papua New Guinea
                                </td>
                                <td>
                                    141.    Suriname
                                </td>
                                <td>
                                      167.    Vietnam
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    113.    Paraguay
                                </td>
                                <td>
                                    142.    Swaziland
                                </td>
                                <td>
                                  168.    Zambia
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    114.    Peru
                                </td>
                                <td>
                                    143.    Sweden
                                </td>
                                <td>
                                    169.    Zimbabwe
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    115.    Philippines
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    116.    Poland
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    117.    Portugal
                                </td>
                                <td>
                                    
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            Nationals of the 169 countries can enter and exit Indonesian Territory through 124 Immigration Checkpoints in airports as follows: 
                        </h4>
                    </div>
                    <div class="content">
                        @php
                            $second = [
                            ['1. Adi Soemarmo, Surakarta' , '15. Maimun Saleh, Sabang' ],
                            ['2. Adi Sucipto, Yogyakarta', '16. Minangkabau, Padang'],
                            ['3. Ahmad Yani, Semarang', '17. Mopah, Merauke'],
                            ['4.  Bandara International Lombok, Mataram', '18.  Mozes Kilangi, Tembaga Pura'],
                            ['5.  Belitung, Tanjung Pandan', '19.   Pattimura, Ambon'],
                            ['6.  Binaka, Sibolga', '20.    Polonia, medan'],
                            ['7.  El Tari, Kupang', '21.    Sam ratulangi, manado'],
                            ['8.  Frans Kaisiepo, Biak', '22.   Sepinggan, balikpapan'],
                            ['9.  Halim Perdana Kusuma, DKI Jakarta', '23.  Soekarno Hatta, Banten'],
                            ['10. Hang Nadim, Batam', '24.  Sultan Hassanudin, Makassar'],
                            ['11. Husein Sastranegara, Bandung', '25.   Sultan Iskandar Muda, Banda Aceh'],
                            ['12. I Gusti Ngurah Rai, Bali', '26.   Sultan Mahmud Badarudin II, Palembang'],
                            ['13. Juanda, Surabaya', '27.   Sultan Syarif Kasim II, Pekanbaru'],
                            ['14. Kuala Namu, Medan', '28.  Supadio, Pontianak'],
                            [' ', '29.  Tarakan, Tarakan ']
                            ]
                        @endphp
                        <table style="width:100%">
                            @foreach( $second as $s)
                            <tr>
                                <td>
                                    {{ $s[0] }}
                                </td>
                                <td>
                                    {{ $s[1] }}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
        </section>
        <p>
            For details and enquiries please contact the Indonesian Embassy in your home country.
        </p>
        <p>
            If the 30 days of Visit Visa Exemption facility feels insufficient, visitor still can apply for Visa on Arrival (given for 30 days and extendable for another 30 days) or Visit Visa.
        </p>
        <p>
            Source: <a href="http://www.indonesia.travel/en/travel-guidance/visa-and-immigration">http://www.indonesia.travel/en/travel-guidance/visa-and-immigration</a>
        </p>
    </div>
</section>

@stop