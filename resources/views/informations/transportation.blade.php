@extends( 'informations._layout' )

@section( 'top_content' )
    @include( '_partials._navbar',
    [
        'navs' => 
        [
            [ 
                'label' => 'Information', 
                'url' => route( 'f.informations.hotel' ) 
            ],
            [ 
                'label' => 'Transportation', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		Transportation
	</h1>
	<div class="content">
        <h2 class="sub-title">
            International Air Transportation
        </h2>
		<p>
            Bali is well-connected internationally and domestically. It is served by 31 scheduled international air carriers, with national flag carrier Garuda Indonesia and Singapore Airlines providing the highest frequency of flights. Garuda Indonesia lands in and departs from Bali as many as 40-48 times a day, while Singapore Airlines flies eight times a day to and from Bali. Among the other major international airlines flying direct to Bali are Cathay Pacific, Hong Kong Airlines, Air France KLM, Qatar Airways, Korean Air, Thai Airways, and Malaysia Airlines. 
		</p>
        <p>
            Most major air carriers are only a short connecting flight away from Bali via major air hubs in Singapore, Jakarta, Kuala Lumpur, Bangkok, Hong Kong, and Taipei. Virtually every major international air carrier either flies to Bali direct or via one of these air hubs. In addition, three Indonesian carriers offer international connections via domestic hubs. 
        </p>
        <p>
            Indonesia guarantees that Ngurah Rai International Airport, also known as Denpasar International Airport, will be prepared for the Annual Meetings. The airport, which was newly renovated in 2013, is located in southern of Bali, 13 kilometres south of Denpasar City. Welcome and departure desks and lounges for all accredited participants will be provided at the airport. All accredited participants will be provided with free airport transfers.
        </p>

		<section class="faq">
			<ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">DIRECT INTERNATIONAL FLIGHT TO BALI</h4>
                    </div>
                    <div class="content">
                    @php
                        $international_flight = 
                        [
                            [1, 'AIR ASIA', 'QZ 503', '12.45', 'AIRBUS 320', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [2, 'AIR ASIA', 'AK 376', '13.55', 'AIRBUS 320', 'KUALA LUMPUR', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [3, 'AIR ASIA', 'QZ 505', '14.50', 'AIRBUS 320', 'BANGKOK', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [4, 'AIR ASIA', 'AK 378', '18.40', 'AIRBUS 320', 'KUALA LUMPUR', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [5, 'CATHAY PASIFIC', 'CX 785', '15.00', 'BOEING 777', 'HONGKONG', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [6, 'CHINA AIRLINES ', 'CI 771', '14.40', 'BOEING 777', 'TAIPEI', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [7, 'CHINA Southern Airline ', 'CZ 625', '23.50', ' ', 'Guangzhou', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [8, 'CHINA Southern Airline ', 'CZ 6065', '00.40', ' ', 'Guangzhou', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [9, 'CHINA Eastern Airline ', 'MU 5029', '00.30', ' ', 'Shanghai', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [10, 'CHINA Eastern Airline ', 'MU 5029', '00.50', ' ', 'Shanghai', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [11, 'EVA AIR', 'BR 255', '15.15', 'AIRBUS 333', 'TAIPEI', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [12, 'EMIRATES', 'EK 398', '21.43', 'BOEING 777', 'DUBAI', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [13, 'EMIRATES', 'EK 2586', '20.09', 'BOEING 777', 'DUBAI', 'DENPASAR', '6'],

                            [14, 'GARUDA INDONESIA', 'GA 843', '14.40', 'BOEING 738', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [15, 'GARUDA INDONESIA', 'GA 715', '15.10', 'AIRBUS 330', 'SYDNEY', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [16, 'GARUDA INDONESIA', 'GA 883', '16.10', 'AIRBUS 331', 'OSAKA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [17, 'GARUDA INDONESIA', 'GA 881', '17.30', 'BOEING 777', 'TOKYO', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [18, 'GARUDA INDONESIA', 'GA 871', '18.10', 'AIRBUS 333', 'SEOUL', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [19, 'GARUDA INDONESIA', 'GA 841', '19.50', 'BOEING 730', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [20, 'GARUDA INDONESIA', 'GA 857', '20.50', 'AIRBUS 333', 'HONGKONG', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [21, 'HONGKONG AIRLINES', 'HX 709', '00.30', 'AIRBUS 333', 'HONGKONG', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [22, 'HONGKONG AIRLINES', 'HX 707', '17.20', 'AIRBUS 334', 'HONGKONG', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [23, 'JET STAR', 'JQ 83', '00.25', 'AIRBUS 320', 'DARWIN', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [24, 'JET STAR', 'JQ 117', '07.40', 'AIRBUS 320', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [25, 'JET STAR', 'JQ 110', '10.05', 'AIRBUS 320', 'PERTH', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [26, 'JET STAR', 'JQ 43', '13.15', 'BOEING 787', 'MELBOURNE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [27, 'JET STAR', 'JQ 37', '21.05', 'BOEING 788', 'SYDNEY', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [28, 'KOREAN AIR', 'KE 633', '22.20', 'AIRBUS 333', 'INCHEON', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [29, 'KOREAN AIR', 'KE 629', '00.10', 'AIRBUS 333', 'INCHEON', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [30, 'MALAYSIA AIRLINES', 'MH 715', '12.05', 'BOEING 737', 'MALAYSIA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [31, 'MALAYSIA AIRLINES', 'MH 851', '15.30', 'BOEING 738', 'KUALA LUMPUR', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [32, 'MALAYSIA AIRLINES', 'MH 853', '18.32', 'BOEING 738', 'KUALA LUMPUR', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [33, 'PHILIPINE AIRLINE', 'PR 537', '00.40', ' ', 'MANILA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            
                            [34, 'QATAR AIRLINES', 'QR 964', '08.10', 'BOEING 788', 'DOHA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [35, 'QATAR AIRLINES', 'QR 962', '17.20', 'BOEING 777', 'DOHA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [36, 'QATAR AIRLINES', 'QR 960', '23.10', 'AIRBUS 333', 'DOHA', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [37, 'ROYAL BRUNEI', 'BI 757', '22.45', 'AIRBUS 320', 'BANDAR SRI BAGAWAN', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [38, 'ROYAL DUTCH', 'KL 853', '19.25', 'BOEING 777', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            
                            [39, 'SILK AIR', 'MI 176', '09.35', 'BOEING 737', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [40, 'SINGAPORE AIRLINES', 'SQ 938', '11.05', 'AIRBUS 330', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [41, 'SINGAPORE AIRLINES', 'SQ 942', '12.05', 'AIRBUS 330', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [42, 'SINGAPORE AIRLINES', 'SQ 946', '19.10', 'AIRBUS 333', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [43, 'SINGAPORE AIRLINES', 'SQ 948', '20.50', 'AIRBUS 333', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [44, 'THAI AIRWAYS', 'TG 431', '14.55', 'BOEING 773', 'BANGKOK', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [45, 'TIGER AIRWAYS', 'TR 2282', '09.50', 'AIRBUS 320', 'KUALA LUMPUR', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [46, 'TIGER AIRWAYS', 'TR 2288', '18.25', 'AIRBUS 320', 'SINGAPORE', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [47, 'VIRGIN AUSTRALIA', 'VA 5508', '20.50', 'BOEING 737', 'SYDNEY', 'DENPASAR', '1,3,7'],
                            [48, 'VIRGIN AUSTRALIA', 'VA 43', '14.45', 'BOEING 737', 'BRISBANE', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [49, 'VIRGIN AUSTRALIA', 'VA 35', '16.10', 'BOEING 737', 'SYDNEY', 'DENPASAR', '1,2,3,4,5,6,7'],
                        ]
                    @endphp

                    <table class="cs-tables">
                        <tr>
                            <th>NO</th>
                            <th>AIRLINES NAME</th>
                            <th style="width:12%;">
                                CODE
                            </th>
                            <th style="width:9%;">
                                ETA
                            </th>
                            <th style="width:15%;">
                                AIRCRAFT TYPE
                            </th>
                            <th>
                                ORIGIN FLIGHT
                            </th>
                            <th>
                                DESTINATION
                            </th>
                            <th style="width:13%;" class="yellowed">
                                DAY OPERATE
                            </th>
                        </tr>
                        @foreach($international_flight as $count=>$if)
                        <tr
                            @if( $count == 6 || $count == 7 || $count == 8 || $count == 9 || 
                                    $count == 11 || $count == 12 || $count == 21 || $count == 27 || $count == 32
                                    || $count == 46)
                                style="color:red;"
                            @endif
                        >
                            <td class="col-center">{{ $if[0] }}</td>
                            <td class="col-center">{{ $if[1] }}</td>
                            <td class="col-center">{{ $if[2] }}</td>
                            <td class="col-center">{{ $if[3] }}</td>
                            <td class="col-center">{{ $if[4] }}</td>
                            <td class="col-center">{{ $if[5] }}</td>
                            <td class="col-center">{{ $if[6] }}</td>
                            <td class="col-center">{{ $if[7] }}</td>
                        </tr>
                        @endforeach
                    </table>

                    @php
                        $days =
                        [
                            [1, 'MONDAY'],
                            [2, 'TUESDAY'],
                            [3, 'WEDNESDAY'],
                            [4, 'THURSDAY'],
                            [5, 'FRIDAY'],
                            [6, 'SATURDAY'],
                            [7, 'SUNDAY']
                        ]
                    @endphp
                    <table class="cs-tables">
                        <tr>
                            <th colspan="2" class="yellowed">
                                CODE : DAY OPERATE
                            </th>
                        </tr>
                        @foreach( $days as $d )
                        <tr>
                            <td class="col-center txt-bold">{{ $d[0] }}</td>
                            <td class="txt-bold" style="padding: 0 20px;">{{ $d[1] }}</td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">DOMESTIC FLIGHT CGK-DPS ( JAKARTA - DENPASAR )</h4>
                    </div>
                    <div class="content">
                    @php
                        $domestic_flight =
                        [
                            [1, 'GARUDA INDONESIA', 'GA 424', '00.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [2, 'GARUDA INDONESIA', 'GA 652', '00.40', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [3, 'GARUDA INDONESIA', 'GA 400', '08.40', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [4, 'GARUDA INDONESIA', 'GA 438', '10.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [5, 'GARUDA INDONESIA', 'GA 402', '10.45', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [6, 'GARUDA INDONESIA', 'GA 404', '12.30', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [7, 'GARUDA INDONESIA', 'GA 408', '14.30', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [8, 'GARUDA INDONESIA', 'GA 422', '16.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [9, 'GARUDA INDONESIA', 'GA 410', '17.20', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [10, 'GARUDA INDONESIA', 'GA 420', '19.30', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [11, 'GARUDA INDONESIA', 'GA 426', '20.15', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [12, 'GARUDA INDONESIA', 'GA 418', '21.30', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [13, 'GARUDA INDONESIA', 'GA 412', '22.55', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [14, 'CITY LINK', 'QG 154', '16.40', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [15, 'CITY LINK', 'QG 852', '20.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [16, 'CITY LINK', 'QG 856', '07.55', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [17, 'CITY LINK', 'QG 850', '10.25', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [18, 'CITY LINK', 'QG 152', '11.35', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [19, 'LION AIR', 'JT 10', '12.35', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [20, 'LION AIR', 'JT 34', '07.20', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [21, 'LION AIR', 'JT 30', '08.30', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [22, 'LION AIR', 'JT 32', '10.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [23, 'LION AIR', 'JT 28', '11.10', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [24, 'LION AIR', 'JT 22', '14.20', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [25, 'LION AIR', 'JT 36', '15.20', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [26, 'LION AIR', 'JT 12', '16.20', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [27, 'LION AIR', 'JT 18', '17.35', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [28, 'LION AIR', 'JT 26', '20.45', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                            [29, 'LION AIR', 'JT 16', '21.45', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],

                            [' ', ' ', ' ', ' ', 'JAKARTA', 'DENPASAR', '1,2,3,4,5,6,7'],
                        ]
                    @endphp

                    <table class="cs-tables">
                        <tr style="background-color: red;">
                            <th>NO</th>
                            <th>AIRLINES NAME</th>
                            <th>
                                FLIGHT CODE
                            </th>
                            <th style="width:10%;">
                                ETA
                            </th>
                            <th>
                                ORIGIN FLIGHT
                            </th>
                            <th>
                                DESTINATION
                            </th>
                            <th>
                                DAY OPERATE
                            </th>
                        </tr>
                        @foreach( $domestic_flight as $df )
                        <tr>
                            <td class="col-center">
                                {{ $df[0] }}
                            </td>
                            <td class="col-center">
                                {{ $df[1] }}
                            </td>
                            <td class="col-center">
                                {{ $df[2] }}
                            </td>
                            <td class="col-center">
                                {{ $df[3] }}
                            </td>
                            <td class="col-center">
                                {{ $df[4] }}
                            </td>
                            <td class="col-center">
                                {{ $df[5] }}
                            </td>
                            <td class="col-center">
                                {{ $df[6] }}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
		</section>

        <h2 class="sub-title">
            Local Transportation
        </h2>
        <p>
            Indonesia will provide chauffeured vehicles for heads of delegations and VIPs. In addition, shuttle transfer services from the airport to official hotels (and vice versa) will be available for participants. Frequent daily shuttle services will also be provided for all delegates between the meeting venues and all official hotels.
        </p>
        <p>
            Taxis operate from major hotels and the airport with rate varies according to destination. At all major airport terminals, inquiries about local transportation should be directed to the information counter. It is advisable to carry small change as taxi drivers are often short of change.
        </p>
        <p>
            Taxis are available at the Bali Ngurah Rai International Airport arrival area. Make sure you take a cab from the official stand and not from someone offering taxi inside the terminal. Furthermore, car and motorcycle rentals are also available in Bali. 
        </p>
	</div>
</section>

@stop