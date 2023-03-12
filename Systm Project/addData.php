<?php
$regionName = isset($_POST['Region']) ? $_POST['Region'] : '';
$populationDense = isset($_POST['Population_density']) ? $_POST['Population_density'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$averageIncome = isset($_POST['monies']) ? $_POST['monies'] : '';
$employedPeople = isset($_POST['employ']) ? $_POST['employ'] : '';
$immigrants = isset($_POST['migrate']) ? $_POST['migrate'] : '';
$familyBreakdowns = isset($_POST['Faminecausal']) ? $_POST['Faminecausal'] : '';
$scholars = isset($_POST['Education']) ? $_POST['Education'] : '';
$drugs = isset($_POST['drugs']) ? $_POST['drugs'] : '';
$youth = isset($_POST['Youtconc']) ? $_POST['Youtconc'] : '';
$males = isset($_POST['malespercentage']) ? $_POST['malespercentage'] : '';
$politicalRiskIndex = isset($_POST['PoliticalRiskIndex']) ? $_POST['PoliticalRiskIndex'] : '';
$security = isset($_POST['securitypolicies']) ? $_POST['securitypolicies'] : '';
// Establish database connection
$conn = new mysqli('localhost','root','','crime_dataset');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt2 = $conn->prepare("INSERT INTO crime_effect (Region_name, population_density, date, average_income, No_of_employed_people, No_of_immigrants, Family_breakdown_rate, No_of_scholars, Drug_usage, Youth_concentration, Percentage_of_males, Political_Risk_Index, No_of_security_policies) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param("sisiiiiiiiiii", $regionName, $populationDense, $date, $averageIncome, $employedPeople, $immigrants, $familyBreakdowns, $scholars, $drugs, $youth, $males, $politicalRiskIndex, $security);
        $execval2 = $stmt2->execute();
        echo $execval2;

    $stmt2->close();
    }
?>