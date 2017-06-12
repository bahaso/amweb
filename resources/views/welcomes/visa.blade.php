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
                'label' => 'Visa', 
            ]
        ],
        'no_label' => true
    ])
@stop

@section( 'rhs_content' )

<section class="wysiwyg">
	<h1 class="title fw600">
		VISA
	</h1>
	<div class="content">
		<p>
            Foreigners that are planning to visit Indonesia for <b>Holiday, Family, Social, Cultural, Business</b> purposes may choose one of these visa:
		</p>
		<section class="faq">
            <h2 class="sub-title">
               a. VISA ON ARRIVAL 
            </h2>
            <p>
                Foreigners can apply this visa upon arrival in Indonesia, if the nationality included on visa on arrival countries list. A holder of Visit Visa on Arrival is given 30 days stay and can be extended in Immigration Office for 1 (one) time, to have another 30 days stay. I Gusti Ngurah Rai airport provide 20 counters at arrival terminal.
            </p>
			<ul class="accordion accordion-2 one-open">
                <li class="active">
                    <div class="title">
                        <h4 class="inline-block mb0">
                            The official entry requirements for the issuance of a 30 or 7 day Visa On Arrival:
                        </h4>
                    </div>
                    <div class="content no-list">
						<ul>
							<li>
                                1. Passport must be from one of the countries listed below. 
                            </li>
                            <li>
                                2. Passport must be valid for a minimum of 6 (six) months from the date of entry into Indonesia. 
                            </li>
                            <li>
                                3. Payment of U.S. $ 10 or U.S. $ 25 must be paid at the gateway, depending on the length of the required visa. 
                            </li>
                            <li>
                                4. Onward or return tickets are compulsory. 
                            </li>
                            <li>
                                5. Visitors must enter and exit through one of the 15 airports or 21 seaports Officially approved as an "international gateway" by the Indonesian Immigration department. 
                            </li>
						</ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">The Indonesian Government had granted Visa On Arrival favor to 68 countries</h4>
                    </div>
                    <div class="content">
                        @php
                            $country = 
                            [
                                ['1. South Africa', '24. Italy', '47. China'],
                                ['2. Algeria', '25. Japan', '48. Romania'],
                                ['3. USA', '26. Germany', '49. Russia'],
                                ['4. Argentina', '27. Canada', '50. Saudi Arabia'],
                                ['5. Australia', '28. South Korea', '51. New Zealand'],
                                ['6. Austria', '29. Kuwait', '52. Slovakia'],
                                ['7. Bahrain', '30. Latvia', '53. Slovenia'],
                                ['8. Belgia', '31. Libya', '54. Spain'],
                                ['9. Netherlands', '32. Liechtenstein', '55. Suriname'],
                                ['10. Brazil', '33. Lithuania', '56. Sweden'],
                                ['11. Bulgary', '34. Luxemberg', '57. Switzerland'],
                                ['12. Czech', '35. Maldives', '58. Taiwan'],
                                ['13. Cyprus', '36. Malta', '59. Timor Leste'],
                                ['14. Denmark', '37. Mexico', '60. Tunisia'],
                                ['15. UAE', '38. Egypt', '61. Turki'],
                                ['16. Estonia', '39. Monaco', '62. Greece'],
                                ['17. Fiji', '40. Norwegia', '63. Andorra'],
                                ['18. Firland', '41. Oman', '64. Belarusia'],
                                ['19. Hungary', '42. Panama', '65. Croatia'],
                                ['20. India', '43. France', '66. Seychelles'],
                                ['21. England', '44. Poland', '67. Papua NewGuinea'],
                                ['22. Ireland', '45. Portugal', ' '],
                                ['23. Iceland', '46. Qatar', ' '],
                            ]
                        @endphp
                        <table style="width:100%;">
                            @foreach( $country as $c )
                            <tr>
                                <td>
                                    {{ $c[0] }}
                                </td>
                                <td>
                                    {{ $c[1] }}
                                </td>
                                <td>
                                    {{ $c[2] }}
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </li>
            </ul>
            <!--end of accordion-->
		</section>

        <section class="faq">
            <h2 class="sub-title">
                b. Visit Visa 
            </h2>
            <h3 class="in-title">
                Single Visit Visa
            </h3>
            <p>
                Foreigners can apply visit visa in Indonesian Embassy or Consulates, or the guarantor could apply to the Directorate General of Immigration in Jakarta, Indonesia
            </p>
            <p>
                Visit Visa is issued in Indonesian Embassy or Consulates.
            </p>
            <p>
                A holder of Visit Visa is given up-to 60 days stay and can be extended in Immigration Office for 5 (five) time, each extension will be given another 30 days stay
            </p>
            <h3 class="in-title">
                Multiple Visit Visa
            </h3>
            <p>
                Multiple Visit Visa is issued in Indonesian Embassy or Consulates. Multiple Visit Visa validity is one year, a holder of multiple visit visa is given up-to 60 days stay each visit and can’t be extended
            </p>
            <ul class="accordion accordion-2">
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">Requirements:</h4>
                    </div>
                    <div class="content no-list">
                        <ul>
                            <li>
                                - Application Letter and Guarantee Letters
                            </li>
                            <li>
                                - Passpor validity 6 Months (single visit), or 18 month (multiple visits) 
                            </li>
                            <li>
                                - Copy of bank accounts
                            </li>
                            <li>
                                - Return/through tickets
                            </li>
                            <li>
                                - Re-entry permit (for stateless/non nationality person)
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="title">
                        <h4 class="inline-block mb0">
                            Procedure:
                        </h4>
                    </div>
                    <div class="content no-list">
                        <span class="txt-bold">Option 1: Application by Guarantor visit visa</span>
                        <ul>
                            <li>
                                1. Guarantor submit visa application for foreigner in Directorate General of Immigration
                            </li>
                            <li>
                                2. Guarantor made payment (telex fee payment) 
                            </li>
                            <li>
                                3. Guarantor will obtain a copy of Visa Approval Letter, another copy will be sent to Indonesian Embassy/Consulates
                            </li>
                            <li>
                                4. Foreigner proceed to Indonesia
                            </li>
                            <li>
                                5. Foreigner proceed to Indonesia, Entry stamp will be obtained in the border
                            </li>
                        </ul>
                    </div>
                    <div class="content no-list">
                        <span class="txt-bold">Option 2: Application by Foreigner Visit Visa</span>
                        <ul>
                            <li>
                                1. Foreigner submit visa application for foreigner in Indoesian Embasy/Consulates
                            </li>
                            <li>
                                2. Foreigner made payment (telex fee payment)
                            </li>
                            <li>
                                3. Indonesian Embassy/Consulates forwading application to Directorate General of Immigration (for non nationality stateless multiple visa)
                            </li>
                            <li>
                                4. When visa approval granted, Indonesian Embassy/Consulates will issue visa (visa fee payment)
                            </li>
                            <li>
                                5. Foreigner proceed to Indonesia, Entry stamp will be obtained in the border
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <!--end of accordion-->
        </section>
	</div>
</section>

@stop