<?php

namespace App\Repositories\ITX;

interface ITXInterface
{
	/**
	 * @param  string $locations
	 * @return array
	 */
	public function packages( $locations );

	/**
	 * @param  string $location
	 * @param  string $industry_category 		- "None" | "Accomodation" | "Non-Serviced Accommodation" | "Attraction" | "Events" | "Tours"
	 * @param  string $industry_category_group 	- "Accomodation" | "Activities"
	 * @param  string $at_date
	 * @param  int $adult_count
	 * @return array
	 */
	public function packagesAvails( $location, $industry_category, $industry_category_group, $at_date, $adult_count );

	/**
	 * @param  string $location
	 * @param  string $industry_category 	 	- "None" | "Accomodation" | "Non-Serviced Accommodation" | "Attraction" | "Events" | "Tours"
	 * @param  string $industry_category_group  - "Accomodation" | "Activities"
	 * @param  string $at_date
	 * @param  int $adult_count
	 * @return array
	 */
	public function packagesDetail( $location, $industry_category, $industry_category_group, $at_date, $adult_count );

	/**
	 * @param  string $slug
	 * @param  string $location
	 * @param  string $industry_category 	   	- "None" | "Accomodation" | "Non-Serviced Accommodation" | "Attraction" | "Events" | "Tours"
	 * @param  string $industry_category_group	- "Accomodation" | "Activities"
	 * @param  string $at_date
	 * @param  int $adult_count
	 * @return array
	 */
	public function packageDetail( $slug, $location, $industry_category, $industry_category_group, $at_date, $adult_count );
}
